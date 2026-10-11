<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class QuestionController extends Controller
{
    public function index(Mission $mission)
    {
        $questions = $mission->questions()
            ->with('choices')
            ->orderBy('order')
            ->get();

        return view('admin.questions.index', compact(
            'mission',
            'questions'
        ));
    }

    public function create(Mission $mission)
    {
        return view('admin.questions.create', compact('mission'));
    }

public function store(Request $request, Mission $mission)
{
    $data = $this->validateQuestion($request);

    $this->checkCorrectAnswer($data);

    DB::transaction(function () use ($data, $mission) {
        $question = $mission->questions()->create([
            'question' => $data['question'],
            'type' => $data['type'],
            'points' => $data['points'],
            'correct_answer' => $data['correct_answer'] ?? null,
            'order' => $data['order'],
            'is_active' => $data['is_active'],
        ]);

        // Simpan pilihan hanya jika ada
        foreach ($data['choices'] ?? [] as $choice) {
            $question->choices()->create([
                'choice' => $choice['choice'],
                'is_correct' => (bool) ($choice['is_correct'] ?? false),
                'score' => $choice['score'] ?? 0,
                'feedback' => $choice['feedback'] ?? null,
            ]);
        }
    });

    return redirect()
        ->route('admin.missions.questions.index', $mission)
        ->with('success', 'Soal berhasil ditambahkan.');
}

    public function edit(Mission $mission, Question $question)
    {
        $this->ensureQuestionBelongsToMission($mission, $question);

        $question->load('choices');

        return view('admin.questions.edit', compact(
            'mission',
            'question'
        ));
    }
public function update(
    Request $request,
    Mission $mission,
    Question $question
) {
    $this->ensureQuestionBelongsToMission($mission, $question);

    $data = $this->validateQuestion($request);

    $this->checkCorrectAnswer($data);

    DB::transaction(function () use ($data, $question) {
        $question->update([
            'question' => $data['question'],
            'type' => $data['type'],
            'points' => $data['points'],
            'correct_answer' => $data['correct_answer'] ?? null,
            'order' => $data['order'],
            'is_active' => $data['is_active'],
        ]);

        // Soal angka tidak membutuhkan pilihan jawaban
        if ($data['type'] === 'number_input') {
            $question->choices()->delete();

            return;
        }

        // Simpan atau perbarui pilihan jawaban
        $savedChoiceIds = [];

        foreach ($data['choices'] ?? [] as $choiceData) {
            $choiceId = $choiceData['id'] ?? null;

            $values = [
                'choice' => $choiceData['choice'],
                'is_correct' => (bool) ($choiceData['is_correct'] ?? false),
                'score' => $choiceData['score'] ?? 0,
                'feedback' => $choiceData['feedback'] ?? null,
            ];

            if ($choiceId) {
                $choice = $question->choices()
                    ->whereKey($choiceId)
                    ->first();

                if (!$choice) {
                    throw ValidationException::withMessages([
                        'choices' => 'Pilihan jawaban tidak valid.',
                    ]);
                }

                $choice->update($values);
            } else {
                $choice = $question->choices()->create($values);
            }

            $savedChoiceIds[] = $choice->id;
        }

        // Hapus pilihan yang sudah tidak digunakan
        $question->choices()
            ->whereNotIn('id', $savedChoiceIds)
            ->delete();
    });

    return redirect()
        ->route('admin.missions.questions.index', $mission)
        ->with('success', 'Soal berhasil diperbarui.');
}

    public function destroy(Mission $mission, Question $question)
    {
        $this->ensureQuestionBelongsToMission($mission, $question);

        $question->delete();

        return redirect()
            ->route('admin.missions.questions.index', $mission)
            ->with('success', 'Soal berhasil dihapus.');
    }
private function validateQuestion(Request $request): array
{
    $rules = [
        'question' => 'required|string',
        'type' => 'required|in:multiple_choice,decision,true_false,number_input',
        'points' => 'required|integer|min:0',
        'order' => 'required|integer|min:1',
        'is_active' => 'nullable|boolean',
    ];

    if ($request->input('type') === 'number_input') {
        // Soal angka tidak membutuhkan pilihan jawaban
        $rules['correct_answer'] = 'required|numeric';
    } else {
        // Tipe soal lainnya tetap menggunakan pilihan jawaban
        $rules['correct_answer'] = 'nullable|numeric';
        $rules['choices'] = 'required|array|min:2';
        $rules['choices.*.id'] = 'nullable|integer';
        $rules['choices.*.choice'] = 'required|string|max:1000';
        $rules['choices.*.is_correct'] = 'nullable|boolean';
        $rules['choices.*.score'] = 'required|integer|min:0';
        $rules['choices.*.feedback'] = 'nullable|string|max:2000';
    }

    $data = $request->validate($rules);

    $data['is_active'] = $request->boolean('is_active');

    return $data;
}


    private function checkCorrectAnswer(array $data): void
    {
        if ($data['type'] !== 'multiple_choice') {
            return;
        }

        $hasCorrectAnswer = collect($data['choices'])
            ->contains(fn ($choice) => (bool) ($choice['is_correct'] ?? false));

        if (!$hasCorrectAnswer) {
            throw ValidationException::withMessages([
                'choices' => 'Soal pilihan ganda harus memiliki minimal satu jawaban benar.',
            ]);
        }
    }

    private function ensureQuestionBelongsToMission(
        Mission $mission,
        Question $question
    ): void {
        abort_unless(
            $question->mission_id === $mission->id,
            404
        );
    }
}