
@if ($errors->any())
    <div class="alert-error">
        <strong>Periksa kembali data berikut:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@php
    $selectedType = old('type', $question->type ?? 'multiple_choice');

    $existingChoices = old(
        'choices',
        isset($question)
            ? $question->choices->map(fn ($choice) => [
                'id' => $choice->id,
                'choice' => $choice->choice,
                'is_correct' => $choice->is_correct,
                'score' => $choice->score,
                'feedback' => $choice->feedback,
            ])->toArray()
            : [
                ['choice' => '', 'is_correct' => true, 'score' => 10, 'feedback' => ''],
                ['choice' => '', 'is_correct' => false, 'score' => 0, 'feedback' => ''],
                ['choice' => '', 'is_correct' => false, 'score' => 0, 'feedback' => ''],
                ['choice' => '', 'is_correct' => false, 'score' => 0, 'feedback' => ''],
            ]
    );
@endphp

<div class="form-card">
    <div class="form-group">
        <label for="question">Pertanyaan</label>
        <textarea id="question" name="question" rows="3" required
            placeholder="Tuliskan pertanyaan di sini...">{{ old('question', $question->question ?? '') }}</textarea>
    </div>

    <div class="form-grid">
        <div class="form-group">
            <label for="type">Tipe soal</label>
            <select name="type" id="type" class="form-select" required>
                <option value="multiple_choice" @selected($selectedType === 'multiple_choice')>
                    Pilihan Ganda
                </option>
                <option value="decision" @selected($selectedType === 'decision')>
                    Pengambilan Keputusan
                </option>
                <option value="true_false" @selected($selectedType === 'true_false')>
                    Benar atau Salah
                </option>
                <option value="number_input" @selected($selectedType === 'number_input')>
                    Jawaban Angka
                </option>
            </select>
            <small>
                Pilihan ganda dan benar/salah memiliki kunci jawaban.
                Keputusan menggunakan skor tiap pilihan.
            </small>
        </div>

        <div class="form-group">
            <label for="points">Poin maksimal</label>
            <input type="number" id="points" name="points" min="0"
                value="{{ old('points', $question->points ?? 10) }}" required>
        </div>

        <div class="form-group">
            <label for="order">Urutan soal</label>
            <input type="number" id="order" name="order" min="1"
                value="{{ old('order', $question->order ?? 1) }}" required>
        </div>

        <div class="form-group" id="number-answer-group">
            <label for="correct_answer">Kunci jawaban angka</label>
            <input type="number" id="correct_answer" name="correct_answer"
                step="any"
                value="{{ old('correct_answer', $question->correct_answer ?? '') }}"
                placeholder="Contoh: 25">
            <small>Isi angka yang harus dimasukkan siswa.</small>
        </div>
    </div>

    <div class="form-group checkbox-group">
        <label>
            <input type="checkbox" name="is_active" value="1"
                @checked(old('is_active', $question->is_active ?? true))>
            Aktifkan soal
        </label>
    </div>
</div>

<div class="section-heading">
    <div>
        <h2 id="choices-heading">Pilihan Jawaban</h2>
        <p id="choices-description">
            Tandai jawaban yang benar untuk pilihan ganda dan benar/salah.
        </p>
    </div>

    <button type="button" class="btn-add" id="add-choice">
        + Tambah Pilihan
    </button>
</div>

<div id="choices-list">
    @foreach ($existingChoices as $i => $choice)
        <div class="choice-card">
            <input type="hidden" name="choices[{{ $i }}][id]"
                value="{{ $choice['id'] ?? '' }}">

            <div class="choice-card-header">
                <strong class="choice-label">Pilihan {{ $i + 1 }}</strong>
                <button type="button" class="btn-remove" onclick="removeChoice(this)">
                    Hapus
                </button>
            </div>

            <div class="form-group">
                <label>Teks pilihan</label>
                <textarea name="choices[{{ $i }}][choice]" rows="2"
                    placeholder="Tuliskan pilihan jawaban...">{{ $choice['choice'] ?? '' }}</textarea>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label>Skor pilihan</label>
                    <input type="number" name="choices[{{ $i }}][score]"
                        min="0" value="{{ $choice['score'] ?? 0 }}">
                </div>

                <div class="form-group">
                    <label>Feedback (opsional)</label>
                    <input type="text" name="choices[{{ $i }}][feedback]"
                        value="{{ $choice['feedback'] ?? '' }}"
                        placeholder="Pesan setelah memilih...">
                </div>
            </div>

            <label class="correct-option">
                <input type="checkbox" class="correct-checkbox"
                    name="choices[{{ $i }}][is_correct]" value="1"
                    @checked((bool) ($choice['is_correct'] ?? false))>
                Tandai sebagai jawaban benar
            </label>
        </div>
    @endforeach
</div>

<div class="form-actions">
    <a href="{{ route('admin.missions.questions.index', $mission) }}"
        class="btn-cancel">Batal</a>
    <button type="submit" class="btn-save">Simpan Soal</button>
</div>

<script>
    let choiceIndex = {{ count($existingChoices) }};

    const typeSelect = document.getElementById('type');
    const choicesList = document.getElementById('choices-list');
    const addChoiceButton = document.getElementById('add-choice');
    const numberAnswerGroup = document.getElementById('number-answer-group');
    const correctAnswerInput = document.getElementById('correct_answer');
    const choicesHeading = document.getElementById('choices-heading');
    const choicesDescription = document.getElementById('choices-description');

    function updateChoiceLabels() {
        document.querySelectorAll('#choices-list .choice-card').forEach((card, index) => {
            card.querySelector('.choice-label').textContent = 'Pilihan ' + (index + 1);
        });
    }

    function updateCorrectOptions() {
        const type = typeSelect.value;
        const isNumber = type === 'number_input';
        const isDecision = type === 'decision';
        const isTrueFalse = type === 'true_false';

        numberAnswerGroup.style.display = isNumber ? 'block' : 'none';
        correctAnswerInput.required = isNumber;

        choicesHeading.textContent = isNumber ? 'Pengaturan Jawaban' : 'Pilihan Jawaban';
        choicesDescription.textContent = isNumber
            ? 'Masukkan kunci angka di kolom atas.'
            : isDecision
                ? 'Atur skor untuk setiap pilihan keputusan.'
                : isTrueFalse
                    ? 'Pastikan tersedia pilihan Benar dan Salah, lalu tandai kunci yang benar.'
                    : 'Tandai satu pilihan sebagai jawaban benar.';

        choicesList.style.display = isNumber ? 'none' : 'block';
        addChoiceButton.style.display = isNumber ? 'none' : 'inline-block';

        document.querySelectorAll('#choices-list .choice-card').forEach(card => {
            card.querySelectorAll('textarea, input[type="number"], input[type="text"]')
                .forEach(input => {
                    if (input.name.includes('[choice]')) {
                        input.required = !isNumber;
                    } else if (input.name.includes('[score]')) {
                        input.required = !isNumber;
                    }
                });

         const correctOption = card.querySelector('.correct-option');
const showCorrect = ['multiple_choice', 'decision', 'true_false'].includes(type);

if (correctOption) {
    correctOption.style.display = showCorrect ? 'flex' : 'none';
}
        });
    }

    addChoiceButton.addEventListener('click', function () {
        const index = choiceIndex++;

        const card = document.createElement('div');
        card.className = 'choice-card';

        card.innerHTML = `
            <input type="hidden" name="choices[${index}][id]" value="">

            <div class="choice-card-header">
                <strong class="choice-label">Pilihan</strong>
                <button type="button" class="btn-remove" onclick="removeChoice(this)">
                    Hapus
                </button>
            </div>

            <div class="form-group">
                <label>Teks pilihan</label>
                <textarea name="choices[${index}][choice]" rows="2"
                    placeholder="Tuliskan pilihan jawaban..."></textarea>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label>Skor pilihan</label>
                    <input type="number" name="choices[${index}][score]" min="0" value="0">
                </div>

                <div class="form-group">
                    <label>Feedback (opsional)</label>
                    <input type="text" name="choices[${index}][feedback]"
                        placeholder="Pesan setelah memilih...">
                </div>
            </div>

            <label class="correct-option">
                <input type="checkbox" class="correct-checkbox"
                    name="choices[${index}][is_correct]" value="1">
                Tandai sebagai jawaban benar
            </label>
        `;

        choicesList.appendChild(card);
        updateChoiceLabels();
        updateCorrectOptions();
    });

    function removeChoice(button) {
        if (choicesList.querySelectorAll('.choice-card').length <= 2) {
            alert('Minimal harus ada dua pilihan jawaban.');
            return;
        }

        button.closest('.choice-card').remove();
        updateChoiceLabels();
    }

    typeSelect.addEventListener('change', updateCorrectOptions);
    updateCorrectOptions();
</script>
