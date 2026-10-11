<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Misi 1 - Candi Bajang Ratu | Jelajah Mojokerto</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('jelajah/css/misi1.css') }}">
</head>

<body>
    <main class="mission-app">

        <header class="mission-topbar">
            <a href="{{ route('map') }}" class="back-button">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>

            <div class="mission-progress-wrap">
                <span id="stageText">1 dari 7</span>
                <div class="progress-track">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
            </div>
        </header>

        {{-- 1. PEMBUKA --}}
        <section class="mission-stage active" data-stage="1">
            <div class="stage-content hero-stage">
                <div class="stage-badge">MISI 1</div>
                <h1>Petualangan<br>Candi Bajang Ratu</h1>
                <p class="stage-subtitle">
                    Perjalananmu dimulai dari sebuah peninggalan budaya.
                    Amati, baca, pilih, lalu selesaikan tantangannya.
                </p>

                <div class="mission-actions">
                    <a href="{{ route('map') }}" class="secondary-button">
                        <i class="fa-solid fa-map"></i> Kembali ke Peta
                    </a>
                    <button type="button" class="primary-button next-stage">
                        Mulai Petualangan <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        {{-- 2. CERITA --}}
        <section class="mission-stage" data-stage="2">
            <div class="stage-content">
                <div class="story-card">
                    <span class="mini-label">CERITA PEMBUKA</span>
                    <h2>Kamu sudah tiba di Candi Bajang Ratu.</h2>
                    <p>
                        Hari ini, kamu berperan sebagai penjelajah muda yang bertugas mengungkap informasi di balik
                        sebuah peninggalan bersejarah di Mojokerto. Kamu akan mengamati bentuk bangunan, menemukan
                        informasi penting, dan menggunakan pengetahuanmu untuk menyelesaikan berbagai tantangan.
                    </p>
                    <p>
                        Setiap petunjuk memiliki informasi yang berguna. Amati dengan teliti dan gunakan informasi yang kamu temukan untuk menentukan langkah berikutnya.
                    </p>

                    <div class="mission-actions">
                        <button class="secondary-button" onclick="showStage(1)">
                            <i class="fa-solid fa-arrow-left"></i> Kembali
                        </button>
                        <button class="primary-button next-stage">
                            Lanjut Eksplorasi <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. EKSPLORASI --}}
        <section class="mission-stage" data-stage="3">
            <div class="stage-content">
                <div class="explore-card">
                    <span class="mini-label">EKSPLORASI CANDI</span>
                    <h2>Temukan bagian menarik dari Candi Bajang Ratu!</h2>
                    <p class="explore-description">
                        Amati gambar berikut, lalu klik bagian candi yang ingin kamu pelajari.
                    </p>

                    <div class="candi-explore">
                        <img src="{{ asset('jelajah/assets/candibajangratu.jpg') }}" alt="Candi Bajang Ratu">

                        <button class="candi-hotspot hotspot-tangga" data-title="Tangga Candi"
                            data-info="Tangga merupakan bagian yang digunakan untuk menuju bagian atas atau area masuk candi.">
                            <span>1</span>
                        </button>

                        <button class="candi-hotspot hotspot-pintu" data-title="Pintu Candi"
                            data-info="Bagian pintu merupakan salah satu bagian penting yang dapat diamati dari bentuk bangunan candi.">
                            <span>2</span>
                        </button>

                        <button class="candi-hotspot hotspot-bangunan" data-title="Bangunan Candi"
                            data-info="Bangunan candi memiliki susunan dan bentuk yang dapat diamati untuk mengenali karakteristiknya.">
                            <span>3</span>
                        </button>
                    </div>

                    <div class="explore-progress">
                        <span id="exploreCount">0 / 3 bagian ditemukan</span>
                        <div class="explore-progress-track">
                            <div class="explore-progress-fill" id="exploreProgressFill"></div>
                        </div>
                    </div>

                    <div class="mission-actions">
                        <button class="secondary-button" onclick="showStage(2)">
                            <i class="fa-solid fa-arrow-left"></i> Kembali
                        </button>
                        <button type="button" class="primary-button hidden" id="exploreNext">
                            Lanjut ke Informasi <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>

                    <div class="explore-modal" id="exploreModal">
                        <div class="explore-modal-box">
                            <button class="explore-modal-close" id="closeExploreModal">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <div class="explore-modal-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <span class="mini-label">HASIL EKSPLORASI</span>
                            <h3 id="modalExploreTitle">Bagian Candi</h3>
                            <p id="modalExploreText">Informasi bagian candi.</p>
                            <button class="primary-button" id="modalOkButton">
                                Mengerti <i class="fa-solid fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. BACAAN --}}
       ```html
<section class="mission-stage" data-stage="4">
    <div class="stage-content">
        <div class="info-card">
            <span class="mini-label">BEKAL PENJELAJAH</span>
            <h2>Kenali Candi Bajang Ratu</h2>
            <p class="info-intro">
                Sebelum melanjutkan petualangan, temukan petunjuk
                penting tentang sejarah, bentuk, dan cara menjaga candi!
            </p>

            <div class="reading-box">
                <div class="reading-item">
                    <div class="reading-icon">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <div>
                        <h3>Jejak Sejarah</h3>
                        <p>
                            Candi Bajang Ratu berada di Trowulan,
                            Mojokerto, dan merupakan peninggalan
                            bersejarah dari masa Majapahit.
                        </p>
                    </div>
                </div>

                <div class="reading-item">
                    <div class="reading-icon">
                        <i class="fa-solid fa-shapes"></i>
                    </div>
                    <div>
                        <h3>Bentuk yang Unik</h3>
                        <p>
                            Candi ini memiliki bentuk menyerupai
                            gapura tinggi dengan susunan bata merah.
                            Amati bagian-bagiannya dengan teliti!
                        </p>
                    </div>
                </div>

                <div class="reading-item">
                    <div class="reading-icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <div>
                        <h3>Candi dan Matematika</h3>
                        <p>
                            Bentuk bangunan dapat diamati melalui
                            konsep geometri. Panjang dan lebar bidang
                            juga dapat digunakan untuk menghitung luas.
                        </p>
                    </div>
                </div>

                <div class="reading-item">
                    <div class="reading-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div>
                        <h3>Jaga Warisan Budaya</h3>
                        <p>
                            Jangan mencoret dinding, merusak bangunan,
                            atau membuang sampah sembarangan.
                            Yuk, jaga candi agar tetap lestari!
                        </p>
                    </div>
                </div>
            </div>

            <div class="info-tip">
                <i class="fa-solid fa-lightbulb"></i>
                <span>
                    Ingat petunjuknya! Pengetahuan ini akan membantumu
                    mengambil keputusan dan menyelesaikan tantangan.
                </span>
            </div>

            <div class="mission-actions">
                <button class="secondary-button"
                        onclick="showStage(3)">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </button>

                <button class="primary-button next-stage">
                    Lanjut ke Keputusan
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>


        {{-- 5. SOAL ACAK DARI DATABASE --}}
        <section class="mission-stage" data-stage="5">
            <div class="stage-content">
                <div class="question-card">
                    <span class="mini-label">TANTANGAN CANDI</span>
                    <h2>Uji Pengetahuanmu!</h2>
                    <p class="decision-intro">
                        Jawab setiap pertanyaan untuk menyelesaikan misi.
                    </p>

@forelse ($questions as $index => $question)
    <div
        class="database-question"
        data-question-id="{{ $question->id }}"
        data-question-type="{{ $question->type }}"
        @if ($index !== 0) hidden @endif
    >
        <p class="question-progress">
            Soal {{ $index + 1 }} dari {{ $questions->count() }}
        </p>

        <h3>{{ $question->question }}</h3>

        {{-- PILIHAN GANDA, DECISION, DAN BENAR/SALAH --}}
        @if (in_array($question->type, [
            'multiple_choice',
            'decision',
            'true_false'
        ]))
            <div class="dynamic-choices">
                @foreach ($question->choices as $choice)
                    <button
                        type="button"
                        class="dynamic-choice"
                        data-choice-id="{{ $choice->id }}"
                    >
                        {{ $choice->choice }}
                    </button>
                @endforeach
            </div>

        {{-- JAWABAN ANGKA --}}
        @elseif ($question->type === 'number_input')
            <div class="number-answer-box">
                <label for="answer-{{ $question->id }}">
                    Masukkan jawabanmu
                </label>

                <input
                    type="number"
                    step="any"
                    id="answer-{{ $question->id }}"
                    class="dynamic-number-input"
                    placeholder="Ketik angka di sini"
                >

                <button
                    type="button"
                    class="primary-button dynamic-number-submit"
                >
                    Periksa Jawaban
                    <i class="fa-solid fa-check"></i>
                </button>
            </div>
        @endif

        <div
            class="dynamic-feedback feedback-box"
            aria-live="polite"
        ></div>

        <div class="reopen-candi-box" hidden>
            <p><strong>Belum tepat, Penjelajah!</strong></p>
            <p>
                Jelajahi kembali seluruh bagian Candi untuk
                membuka kesempatan menjawab soal ini lagi.
            </p>

            <button type="button" class="reopen-candi">
                <i class="fa-solid fa-compass"></i>
                Jelajahi Candi Lagi
            </button>
        </div>

        <button
            type="button"
            class="primary-button dynamic-next"
            hidden
            disabled
        >
            Soal Berikutnya
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
@empty
    <p>Belum ada soal aktif untuk misi ini.</p>
@endforelse


                    <button type="button" class="primary-button" id="finishQuestions" hidden>
                        Selesaikan Misi
                        <i class="fa-solid fa-check"></i>
                    </button>

                    <div class="mission-actions">
                        <button type="button" class="secondary-button" onclick="showStage(4)">
                            <i class="fa-solid fa-arrow-left"></i> Kembali ke Bacaan
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- 6. MISI BERHASIL --}}
        <section class="mission-stage" data-stage="6">
            <div class="stage-content">
                <div class="reaction-card">
                    <div class="reaction-badge">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <span class="mini-label">MISI BERHASIL</span>
                    <h2>Candi Bajang Ratu Bereaksi!</h2>

                    <p class="reaction-text">
                        Kamu berhasil menyelesaikan tantangan dalam perjalanan ini.
                    </p>

                    <div class="candi-reaction">
                        <div class="candi-light"></div>
                        <img src="{{ asset('jelajah/assets/candibajangratu.jpg') }}" alt="Candi Bajang Ratu">
                        <div class="spark spark-1">✦</div>
                        <div class="spark spark-2">✦</div>
                        <div class="spark spark-3">✦</div>
                        <div class="spark spark-4">✦</div>
                    </div>

                    <div class="reaction-message">
                        <i class="fa-solid fa-compass"></i>
                        <div>
                            <strong>Jalanmu terbuka!</strong>
                            <span>
                                Pengetahuanmu membantumu melanjutkan perjalanan.
                            </span>
                        </div>
                    </div>

                    <div class="xp-reward">
                        <i class="fa-solid fa-star"></i>
                        <strong>+100 XP</strong>
                    </div>

                    <div class="mission-actions">
                        <button type="button" class="secondary-button" onclick="showStage(5)">
                            <i class="fa-solid fa-arrow-left"></i> Kembali
                        </button>

                        <button type="button" class="primary-button next-stage">
                            Lihat Hasil Misi
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- 7. HASIL DAN REFLEKSI --}}
        <section class="mission-stage" data-stage="7">
            <div class="stage-content">
                <div class="result-card">
                    <div class="mission-complete-icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>

                    <span class="mini-label">MISI SELESAI</span>
                    <h2>Hebat, Penjelajah!</h2>

                    <p class="result-intro">
                        Kamu berhasil menyelesaikan perjalanan di Candi Bajang Ratu.
                    </p>

                    <div class="achievement-box">
                        <div class="achievement-item">
                            <i class="fa-solid fa-compass"></i>
                            <span>Eksplorasi</span>
                            <strong>Selesai</strong>
                        </div>

                        <div class="achievement-item">
                            <i class="fa-solid fa-brain"></i>
                            <span>Tantangan</span>
                            <strong>Selesai</strong>
                        </div>

                        <div class="achievement-item">
                            <i class="fa-solid fa-calculator"></i>
                            <span>Pengetahuan</span>
                            <strong>Bertambah</strong>
                        </div>
                    </div>

                    <div class="xp-final">
                        <i class="fa-solid fa-star"></i>
                        <span>Hadiahmu</span>
                        <strong>+100 XP</strong>
                    </div>

                    <div class="reflection-section">
                        <span class="mini-label">REFLEKSI</span>
                        <h3>
                            Apa hal baru yang kamu pelajari dari perjalanan di candi?
                        </h3>

                        <textarea id="reflection" rows="5" placeholder="Ceritakan pengalamanmu..."></textarea>

                        <p class="save-message" id="saveMessage" aria-live="polite"></p>
                    </div>

                    <div class="mission-actions">
                        <button class="secondary-button" id="saveReflection" type="button">
                            <i class="fa-solid fa-floppy-disk"></i>
                            Simpan Refleksi
                        </button>

                        <a href="{{ route('map') }}" class="primary-button link-button">
                            Kembali ke Peta
                            <i class="fa-solid fa-map"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
 <script>
        const stages = [...document.querySelectorAll('.mission-stage')];
        const progressFill = document.getElementById('progressFill');
        const stageText = document.getElementById('stageText');
        const csrfMeta = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = csrfMeta ? csrfMeta.content : '';

        let currentStage = 1;
        let foundHotspots = 0;
        let retrySameQuestion = false;

        function showStage(number) {
            currentStage = number;

            stages.forEach(stage => {
                stage.classList.toggle(
                    'active',
                    Number(stage.dataset.stage) === number
                );
            });

            if (progressFill) {
                progressFill.style.width =
                    `${((number - 1) / (stages.length - 1)) * 100}%`;
            }

            if (stageText) {
                stageText.textContent = `${number} dari ${stages.length}`;
            }

            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        document.querySelectorAll('.next-stage').forEach(button => {
            button.addEventListener('click', () => {
                if (currentStage < stages.length) {
                    showStage(currentStage + 1);
                }
            });
        });

        async function submitAnswer(questionId, answerValue, answerType = 'choice') {
            const payload = { question_id: Number(questionId) };

            if (answerType === 'number') {
                if (
                    answerValue === '' ||
                    !Number.isFinite(Number(answerValue))
                ) {
                    throw new Error('Masukkan jawaban berupa angka terlebih dahulu.');
                }

                payload.answer = String(answerValue);
            } else {
                if (!answerValue) {
                    throw new Error('Silakan pilih jawaban terlebih dahulu.');
                }

                payload.choice_id = Number(answerValue);
            }

            const response = await fetch(@json(route('candi.answer')), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(payload)
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Jawaban gagal diperiksa.');
            }

            return data;
        }

        const questionCards = [
            ...document.querySelectorAll('[data-stage="5"] .database-question')
        ];

        const finishQuestions = document.getElementById('finishQuestions');
        let currentQuestionIndex = 0;
        const answeredQuestions = new Set();

        function showQuestion(index) {
            questionCards.forEach((card, i) => {
                card.hidden = i !== index;
            });

            if (finishQuestions) finishQuestions.hidden = true;
        }

        questionCards.forEach((card, index) => {
            const choiceButtons = [...card.querySelectorAll('.dynamic-choice')];
            const feedback = card.querySelector('.dynamic-feedback');
            const nextButton = card.querySelector('.dynamic-next');
            const reopenButton = card.querySelector('.reopen-candi');
            const numberInput = card.querySelector('.dynamic-number-input');
            const numberSubmit = card.querySelector('.dynamic-number-submit');

            if (numberSubmit && numberInput) {
                numberSubmit.addEventListener('click', async () => {
                    const questionId = card.dataset.questionId;
                    if (answeredQuestions.has(questionId)) return;

                    numberSubmit.disabled = true;
                    numberInput.disabled = true;

                    if (feedback) {
                        feedback.textContent = 'Memeriksa jawaban...';
                        feedback.className = 'dynamic-feedback feedback-box';
                    }

                    try {
                        const result = await submitAnswer(
                            questionId,
                            numberInput.value,
                            'number'
                        );

                        if (result.is_correct) {
                            answeredQuestions.add(questionId);

                            if (feedback) {
                                feedback.textContent = result.message || 'Jawaban benar!';
                                feedback.className = 'dynamic-feedback feedback-box success';
                            }

                            if (nextButton) {
                                nextButton.hidden = false;
                                nextButton.disabled = false;
                            }
                        } else {
                            if (feedback) {
                                feedback.textContent = result.message || 'Jawaban belum tepat!';
                                feedback.className = 'dynamic-feedback feedback-box error';
                            }

                            const reopenBox = card.querySelector('.reopen-candi-box');
                            if (reopenBox) reopenBox.hidden = false;
                        }
                    } catch (error) {
                        if (feedback) {
                            feedback.textContent = error.message;
                            feedback.className = 'dynamic-feedback feedback-box error';
                        }

                        numberInput.disabled = false;
                        numberSubmit.disabled = false;
                    }
                });
            }

            if (reopenButton) {
                reopenButton.addEventListener('click', () => {
                    const reopenBox = card.querySelector('.reopen-candi-box');
                    if (reopenBox) reopenBox.hidden = true;

                    foundHotspots = 0;

                    hotspots.forEach(hotspot => hotspot.classList.remove('found'));

                    if (exploreCount) {
                        exploreCount.textContent =
                            `0 / ${hotspots.length} bagian ditemukan`;
                        exploreCount.classList.remove('explore-complete');
                    }

                    if (exploreProgressFill) exploreProgressFill.style.width = '0%';
                    if (exploreNext) exploreNext.classList.add('hidden');

                    choiceButtons.forEach(choice => {
                        choice.disabled = false;
                        choice.classList.remove('selected');
                    });

                    if (numberInput) {
                        numberInput.disabled = false;
                        numberInput.value = '';
                    }

                    if (numberSubmit) numberSubmit.disabled = false;

                    if (feedback) {
                        feedback.textContent = '';
                        feedback.className = 'dynamic-feedback feedback-box';
                    }

                    retrySameQuestion = true;
                    showStage(3);
                });
            }

            choiceButtons.forEach(button => {
                button.addEventListener('click', async () => {
                    const questionId = card.dataset.questionId;
                    if (answeredQuestions.has(questionId)) return;

                    choiceButtons.forEach(choice => choice.disabled = true);

                    if (feedback) {
                        feedback.textContent = 'Memeriksa jawaban...';
                        feedback.className = 'dynamic-feedback feedback-box';
                    }

                    try {
                        const result = await submitAnswer(
                            questionId,
                            button.dataset.choiceId
                        );

                        button.classList.add('selected');

                        if (result.success && result.is_correct) {
                            answeredQuestions.add(questionId);

                            if (feedback) {
                                feedback.className = 'dynamic-feedback feedback-box success';
                                feedback.textContent =
                                    `${result.feedback || result.message || 'Jawaban benar!'} Skor: ${result.score ?? 0}`;
                            }

                            if (nextButton) {
                                nextButton.hidden = false;
                                nextButton.disabled = false;
                                nextButton.innerHTML =
                                    index === questionCards.length - 1
                                        ? 'Selesaikan Misi <i class="fa-solid fa-check"></i>'
                                        : 'Soal Berikutnya <i class="fa-solid fa-arrow-right"></i>';
                            }
                        } else {
                            if (feedback) {
                                feedback.className = 'dynamic-feedback feedback-box error';
                                feedback.textContent =
                                    'Jawaban belum tepat! Jelajahi kembali Candi untuk mencoba lagi.';
                            }

                            choiceButtons.forEach(choice => {
                                choice.disabled = true;
                                choice.classList.remove('selected');
                            });

                            if (nextButton) nextButton.hidden = true;

                            const reopenBox = card.querySelector('.reopen-candi-box');
                            if (reopenBox) reopenBox.hidden = false;
                        }
                    } catch (error) {
                        if (feedback) {
                            feedback.className = 'dynamic-feedback feedback-box error';
                            feedback.textContent = error.message;
                        }

                        choiceButtons.forEach(choice => choice.disabled = false);
                    }
                });
            });

            if (nextButton) {
                nextButton.addEventListener('click', () => {
                    if (!answeredQuestions.has(card.dataset.questionId)) return;

                    if (index < questionCards.length - 1) {
                        currentQuestionIndex = index + 1;
                        showQuestion(currentQuestionIndex);
                    } else if (finishQuestions) {
                        finishQuestions.hidden = false;
                        nextButton.hidden = true;
                    }
                });
            }
        });

        
if (finishQuestions) {
    finishQuestions.addEventListener('click', async () => {
        // Pastikan semua soal sudah dijawab benar
        if (
            questionCards.length === 0 ||
            answeredQuestions.size !== questionCards.length
        ) {
            return;
        }

        // Cegah klik berulang saat proses penyimpanan
        finishQuestions.disabled = true;
        finishQuestions.innerHTML =
            '<i class="fa-solid fa-spinner fa-spin"></i> Menyimpan progres...';

        try {
            // Semua soal harus dijawab benar sesuai logika kuis saat ini
            const score = Math.round(
                (answeredQuestions.size / questionCards.length) * 100
            );

            const response = await fetch(
                @json(route('missions.complete', ['mission' => $mission->id])),
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ score: score })
                }
            );

            const data = await response.json();

            if (!response.ok || !data.success) {
                throw new Error(
                    data.message || 'Progres misi gagal disimpan.'
                );
            }

            // Tampilkan XP yang benar-benar diberikan server
            document.querySelectorAll(
                '.xp-reward strong, .xp-final strong'
            ).forEach(element => {
                element.textContent = `+${data.xp_earned} XP`;
            });

            // Baru tampilkan keberhasilan setelah database berhasil
            showStage(6);

        } catch (error) {
            alert(error.message || 'Terjadi kesalahan saat menyimpan progres.');

            finishQuestions.disabled = false;
            finishQuestions.innerHTML =
                'Selesaikan Misi <i class="fa-solid fa-check"></i>';
        }
    });
}


        if (questionCards.length > 0) showQuestion(0);

const saveReflectionButton = document.getElementById('saveReflection');
const reflectionInput = document.getElementById('reflection');
const saveMessage = document.getElementById('saveMessage');

if (saveReflectionButton) {
    saveReflectionButton.addEventListener('click', async () => {
        const answer = reflectionInput.value.trim();

        if (!answer) {
            saveMessage.textContent = 'Yuk, isi refleksimu terlebih dahulu!';
            return;
        }

        saveReflectionButton.disabled = true;
        saveMessage.textContent = 'Menyimpan refleksi...';

        try {
            const response = await fetch(
                @json(route('candi.reflection')),
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector(
                            'meta[name="csrf-token"]'
                        ).content
                    },
                    body: JSON.stringify({
                        answers: {
                            learned: answer
                        }
                    })
                }
            );

            const data = await response.json();

            if (!response.ok || !data.success) {
                throw new Error(
                    data.message || 'Refleksi gagal disimpan.'
                );
            }

            saveMessage.textContent = 'Refleksi berhasil disimpan! 🎉';
        } catch (error) {
            saveMessage.textContent =
                error.message || 'Terjadi kesalahan saat menyimpan refleksi.';
        } finally {
            saveReflectionButton.disabled = false;
        }
    });
}


        const hotspots = [...document.querySelectorAll('.candi-hotspot')];
        const exploreCount = document.getElementById('exploreCount');
        const exploreProgressFill = document.getElementById('exploreProgressFill');
        const exploreNext = document.getElementById('exploreNext');
        const exploreModal = document.getElementById('exploreModal');
        const modalExploreTitle = document.getElementById('modalExploreTitle');
        const modalExploreText = document.getElementById('modalExploreText');

        function openExploreModal(title, text) {
            if (modalExploreTitle) modalExploreTitle.textContent = title || '';
            if (modalExploreText) modalExploreText.textContent = text || '';
            if (exploreModal) exploreModal.classList.add('show');
        }

        function closeExploreModalWindow() {
            if (exploreModal) exploreModal.classList.remove('show');
        }

        const closeExploreButton = document.getElementById('closeExploreModal');
        const modalOkButton = document.getElementById('modalOkButton');

        if (closeExploreButton) {
            closeExploreButton.addEventListener('click', closeExploreModalWindow);
        }

        if (modalOkButton) {
            modalOkButton.addEventListener('click', closeExploreModalWindow);
        }

        if (exploreNext) {
            exploreNext.addEventListener('click', () => {
                if (retrySameQuestion) {
                    retrySameQuestion = false;
                    showQuestion(currentQuestionIndex);
                    showStage(4);
                } else {
                    showStage(4);
                }
            });
        }

        hotspots.forEach(hotspot => {
            hotspot.addEventListener('click', () => {
                if (hotspot.classList.contains('found')) return;

                hotspot.classList.add('found');
                foundHotspots++;

                if (exploreCount) {
                    exploreCount.textContent =
                        `${foundHotspots} / ${hotspots.length} bagian ditemukan`;
                }

                if (exploreProgressFill) {
                    exploreProgressFill.style.width =
                        `${(foundHotspots / hotspots.length) * 100}%`;
                }

                openExploreModal(
                    hotspot.dataset.title,
                    hotspot.dataset.info
                );

                if (foundHotspots === hotspots.length) {
                    if (exploreCount) {
                        exploreCount.textContent =
                            `${foundHotspots} / ${hotspots.length} bagian ditemukan ✓`;
                        exploreCount.classList.add('explore-complete');
                    }

                    if (exploreNext) exploreNext.classList.remove('hidden');
                }
            });
        });

        if (stages.length > 0) showStage(1);
</script>
</body>

</html>
