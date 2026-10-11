<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Question;
use App\Models\UserAnswer;
use App\Models\UserProgress;
use App\Models\MissionReflection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasarMissionController extends Controller
{
    /**
     * Menampilkan halaman Misi Pasar
     */
    public function index()
    {
        $mission = Mission::where('slug', 'pasar')
            ->where('is_active', true)
            ->first();

        if (!$mission) {
            return 'Data Misi Pasar belum tersedia di database.';
        }

        $allQuestions = $mission->questions()
            ->where('is_active', true)
            ->with('choices')
            ->get();

        // Mengacak soal dan menyimpan ID-nya di session.
        // Jumlah soal yang dipilih maksimal 6.
        $sessionKey = 'mission_' . $mission->id . '_question_ids';
        $selectedIds = session($sessionKey);

        if (
            !is_array($selectedIds) ||
            count($selectedIds) !== min(6, $allQuestions->count()) ||
            $allQuestions->whereIn('id', $selectedIds)->count()
                !== min(6, $allQuestions->count())
        ) {
            $selectedIds = $allQuestions
                ->shuffle()
                ->take(6)
                ->pluck('id')
                ->all();

            session([$sessionKey => $selectedIds]);
        }

        // Mempertahankan urutan soal yang sudah diacak.
        $questions = $allQuestions
            ->whereIn('id', $selectedIds)
            ->sortBy(function ($question) use ($selectedIds) {
                return array_search($question->id, $selectedIds);
            })
            ->values();

        return view('student.missions.pasar', compact(
            'mission',
            'questions'
        ));
    }

    /**
     * Memeriksa dan menyimpan jawaban siswa.
     */
    public function answer(Request $request)
    {
        $validated = $request->validate([
            'question_id' => [
                'required',
                'integer',
                'exists:questions,id',
            ],
            'choice_id' => [
                'nullable',
                'integer',
            ],
            'answer' => [
                'nullable',
                'string',
            ],
        ]);

        $user = $request->user();

        // Pastikan soal memang berasal dari Misi Pasar.
        $mission = Mission::where('slug', 'pasar')
            ->firstOrFail();

        $question = Question::with('choices')
            ->where('mission_id', $mission->id)
            ->where('is_active', true)
            ->findOrFail($validated['question_id']);

        // Pastikan soal termasuk soal yang dipilih pada sesi ini.
        $sessionKey = 'mission_' . $mission->id . '_question_ids';
        $selectedIds = session($sessionKey, []);

        if (!in_array($question->id, $selectedIds)) {
            return response()->json([
                'success' => false,
                'message' => 'Soal ini tidak termasuk dalam sesi misi kamu.',
            ], 403);
        }

        // Pemeriksaan soal dengan jawaban angka.
        if ($question->type === 'number_input') {
            $answer = trim((string) ($validated['answer'] ?? ''));

            if ($answer === '' || !is_numeric($answer)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Masukkan jawaban berupa angka terlebih dahulu.',
                ], 422);
            }

            if (
                $question->correct_answer === null ||
                !is_numeric($question->correct_answer)
            ) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kunci jawaban angka belum diatur oleh admin.',
                ], 422);
            }

            $isCorrect = (float) $answer ===
                (float) $question->correct_answer;

            $score = $isCorrect
                ? (int) $question->points
                : 0;

            DB::transaction(function () use (
                $user,
                $question,
                $isCorrect,
                $score
            ) {
                UserAnswer::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'question_id' => $question->id,
                    ],
                    [
                        'choice_id' => null,
                        'is_correct' => $isCorrect,
                        'score' => $score,
                    ]
                );
            });

            return response()->json([
                'success' => true,
                'is_correct' => $isCorrect,
                'score' => $score,
                'message' => $isCorrect
                    ? 'Benar! Jawaban kamu tepat.'
                    : 'Jawaban belum tepat. Coba pikirkan lagi.',
            ]);
        }

        // Pemeriksaan soal pilihan.
        if (empty($validated['choice_id'])) {
            return response()->json([
                'success' => false,
                'message' => 'Silakan pilih jawaban terlebih dahulu.',
            ], 422);
        }

        $choice = $question->choices
            ->firstWhere('id', (int) $validated['choice_id']);

        if (!$choice) {
            return response()->json([
                'success' => false,
                'message' => 'Pilihan tidak sesuai dengan soal.',
            ], 422);
        }

        $isCorrect = (bool) $choice->is_correct;

        $score = $isCorrect
            ? (int) $question->points
            : 0;

        DB::transaction(function () use (
            $user,
            $question,
            $choice,
            $isCorrect,
            $score
        ) {
            UserAnswer::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'question_id' => $question->id,
                ],
                [
                    'choice_id' => $choice->id,
                    'is_correct' => $isCorrect,
                    'score' => $score,
                ]
            );
        });

        return response()->json([
            'success' => true,
            'is_correct' => $isCorrect,
            'score' => $score,
            'feedback' => $choice->feedback,
            'message' => $choice->feedback
                ?: ($isCorrect
                    ? 'Jawaban benar!'
                    : 'Jawaban belum tepat, ayo coba lagi!'),
        ]);
    }

    /**
     * Menyimpan penyelesaian misi dan memberikan XP.
     */
    public function complete(Request $request, Mission $mission)
    {
        // Batasi penyelesaian untuk Misi Pasar.
        abort_unless($mission->slug === 'pasar', 404);

        $user = $request->user();

        $sessionKey = 'mission_' . $mission->id . '_question_ids';
        $selectedIds = session($sessionKey, []);

        if (empty($selectedIds)) {
            return response()->json([
                'success' => false,
                'message' => 'Sesi soal tidak ditemukan. Silakan buka ulang misi.',
            ], 422);
        }

        $result = DB::transaction(function () use (
            $user,
            $mission,
            $selectedIds
        ) {
            // Hitung skor berdasarkan jawaban yang tersimpan di server.
            $answers = UserAnswer::where('user_id', $user->id)
                ->whereIn('question_id', $selectedIds)
                ->get();

            $answeredIds = $answers
                ->pluck('question_id')
                ->unique();

            if ($answeredIds->count() !== count($selectedIds)) {
                return [
                    'incomplete' => true,
                ];
            }

            $maxPoints = Question::whereIn('id', $selectedIds)
                ->sum('points');

            $earnedPoints = $answers->sum('score');

            $score = $maxPoints > 0
                ? (int) round(($earnedPoints / $maxPoints) * 100)
                : 0;

            $progress = UserProgress::where('user_id', $user->id)
                ->where('mission_id', $mission->id)
                ->lockForUpdate()
                ->first();

            $xpEarned = 0;

            if (!$progress || !$progress->is_completed) {
                if (!$progress) {
                    $progress = new UserProgress();
                    $progress->user_id = $user->id;
                    $progress->mission_id = $mission->id;
                }

                $progress->score = $score;
                $progress->is_completed = true;
                $progress->completed_at = now();
                $progress->save();

                $user->increment('total_score', 100);
                $user->refresh();

                $user->level = intdiv(
                    (int) $user->total_score,
                    100
                ) + 1;

                $user->save();

                $xpEarned = 100;
            } else {
                $progress->score = max(
                    (int) $progress->score,
                    $score
                );

                $progress->save();
            }

            return [
                'incomplete' => false,
                'progress' => $progress,
                'xp_earned' => $xpEarned,
                'score' => $score,
            ];
        });

        if ($result['incomplete']) {
            return response()->json([
                'success' => false,
                'message' => 'Jawab semua soal terlebih dahulu.',
            ], 422);
        }

        return response()->json([
            'success' => true,
            'message' => 'Misi Pasar berhasil diselesaikan!',
            'score' => $result['score'],
            'xp_earned' => $result['xp_earned'],
            'total_xp' => $user->fresh()->total_score,
            'is_completed' => $result['progress']->is_completed,
        ]);
    }

    /**
     * Menyimpan refleksi Misi Pasar.
     */
    public function reflection(Request $request)
    {
        $validated = $request->validate([
            'answers' => ['required', 'array'],
            'answers.*' => ['required', 'string', 'max:2000'],
        ]);

        $user = $request->user();

        $mission = Mission::where('slug', 'pasar')
            ->firstOrFail();

        $isCompleted = $user->progress()
            ->where('mission_id', $mission->id)
            ->where('is_completed', true)
            ->exists();

        if (!$isCompleted) {
            return response()->json([
                'success' => false,
                'message' => 'Selesaikan Misi Pasar terlebih dahulu.',
            ], 403);
        }

        MissionReflection::updateOrCreate(
            [
                'user_id' => $user->id,
                'mission_id' => $mission->id,
            ],
            [
                'answers' => $validated['answers'],
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Refleksi Misi Pasar berhasil disimpan!',
        ]);
    }
}