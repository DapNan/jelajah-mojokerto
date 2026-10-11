<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserProgress;
use App\Models\MissionReflection;

class MissionController extends Controller
{

public function candi()
{
    $mission = Mission::with([
        'questions' => function ($query) {
            $query->where('is_active', true)
                  ->orderBy('order');
        },
        'questions.choices',
    ])->first();

    if (!$mission) {
        return 'Data misi belum tersedia di database.';
    }

    // Ambil semua soal aktif.
    $allQuestions = $mission->questions
        ->where('is_active', true)
        ->values();

    // Kunci soal terpilih berdasarkan misi.
    $sessionKey = 'mission_' . $mission->id . '_question_ids';
    $selectedIds = session($sessionKey);

    // Pilih ulang jika belum ada 3 soal yang valid.
    if (
        !is_array($selectedIds) ||
        count($selectedIds) !== 3 ||
        $allQuestions->whereIn('id', $selectedIds)->count() !== 3
    ) {
        $selectedIds = $allQuestions
            ->shuffle()
            ->take(3)
            ->pluck('id')
            ->all();

        session([$sessionKey => $selectedIds]);
    }

   $allQuestions = $mission->questions()
    ->where('is_active', true)
    ->with('choices')
    ->get();

$sessionKey = 'mission_' . $mission->id . '_question_ids';

$selectedIds = session($sessionKey);

if (
    !is_array($selectedIds) ||
    count($selectedIds) !== 6 ||
    $allQuestions->whereIn('id', $selectedIds)->count() !== 6
) {
    $selectedIds = $allQuestions
        ->shuffle()
        ->take(6)
        ->pluck('id')
        ->all();

    session([$sessionKey => $selectedIds]);
}

$questions = $allQuestions
    ->whereIn('id', $selectedIds)
    ->sortBy(function ($question) use ($selectedIds) {
        return array_search($question->id, $selectedIds);
    })
    ->values();

// dd($questions->pluck('id', 'question'));
    return view('student.missions.candi', compact(
        'mission',
        'questions',
        // 'decisionQuestions',
        // 'numeracyQuestions'
    ));
}
public function answer(Request $request)
{
    $validated = $request->validate([
        'question_id' => 'required|integer|exists:questions,id',
        'choice_id'   => 'nullable|integer',
        'answer'      => 'nullable|string',
    ]);

    $question = Question::with('choices')
        ->where('is_active', true)
        ->findOrFail($validated['question_id']);

    // Pemeriksaan khusus soal angka.
    if ($question->type === 'number_input') {
        $answer = trim((string) ($validated['answer'] ?? ''));

        if ($answer === '' || !is_numeric($answer)) {
            return response()->json([
                'success' => false,
                'message' => 'Masukkan jawaban berupa angka terlebih dahulu.',
            ], 422);
        }

        if ($question->correct_answer === null || !is_numeric($question->correct_answer)) {
            return response()->json([
                'success' => false,
                'message' => 'Kunci jawaban angka belum diatur oleh admin.',
            ], 422);
        }

        $isCorrect = (float) $answer === (float) $question->correct_answer;
        $score = $isCorrect ? (int) $question->points : 0;

        DB::transaction(function () use ($question, $isCorrect, $score) {
            UserAnswer::updateOrCreate(
                [
                    'user_id' => auth()->id(),
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
                : 'Jawaban belum tepat. Coba periksa dan pikirkan lagi.',
        ]);
    }

    // Pemeriksaan soal berbasis pilihan.
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
    $score = $isCorrect ? (int) $question->points : 0;

    DB::transaction(function () use (
        $question,
        $choice,
        $isCorrect,
        $score
    ) {
        UserAnswer::updateOrCreate(
            [
                'user_id' => auth()->id(),
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

public function complete(Request $request, Mission $mission)
{
    $validated = $request->validate([
        'score' => ['required', 'integer', 'min:0', 'max:100'],
    ]);

    $user = $request->user();

    $result = DB::transaction(function () use (
        $user,
        $mission,
        $validated
    ) {
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

            $progress->score = $validated['score'];
            $progress->is_completed = true;
            $progress->completed_at = now();
           
$progress->save();

// Tambahkan 100 XP ke pengguna yang sedang login
$user->increment('total_score', 100);

// Perbarui level berdasarkan total XP
$user->refresh();
$user->level = intdiv((int) $user->total_score, 100) + 1;
$user->save();

$xpEarned = 100;

        } else {
            $progress->score = max(
                (int) $progress->score,
                $validated['score']
            );

            $progress->save();
        }

        return [
            'progress' => $progress,
            'xp_earned' => $xpEarned,
        ];
    });

    return response()->json([
        'success' => true,
        'message' => 'Progres berhasil disimpan.',
        'score' => $result['progress']->score,
        'xp_earned' => $result['xp_earned'],
        'total_xp' => $user->fresh()->total_score,
        'is_completed' => $result['progress']->is_completed,
    ]);
}

public function reflection(Request $request)
{
    $validated = $request->validate([
        'answers' => ['required', 'array'],
        'answers.*' => ['required', 'string', 'max:2000'],
    ]);

    $user = $request->user();

    $mission = Mission::where('slug', 'candi')->firstOrFail();

    // Pastikan siswa sudah menyelesaikan misi Candi.
    $isCompleted = $user->progress()
        ->where('mission_id', $mission->id)
        ->where('is_completed', true)
        ->exists();

    if (!$isCompleted) {
        return response()->json([
            'success' => false,
            'message' => 'Selesaikan misi Candi terlebih dahulu.',
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
        'message' => 'Refleksi berhasil disimpan!',
    ]);
}

}
