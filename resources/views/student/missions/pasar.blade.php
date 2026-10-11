

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Misi 2 - Pasar | Jelajah Mojokerto</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('jelajah/css/misi2.css') }}">

</head>



<body>



<main class="market-app"

      id="marketApp"

      data-answer-url="{{ route('pasar.answer') }}"

      data-complete-url="{{ route('pasar.complete', $mission) }}"

      data-reflection-url="{{ route('pasar.reflection') }}"

      data-map-url="{{ route('map') }}">



    <header class="market-topbar">

        <a href="{{ route('map') }}" class="back-button">

            <i class="fa-solid fa-arrow-left"></i> Kembali

        </a>



        <div class="market-progress">

            <span id="stageText">1 dari 9</span>

            <div class="progress-track">

                <div class="progress-fill" id="progressFill"></div>

            </div>

        </div>

    </header>


<!-- TAHAP 1: INTRO -->

<section class="market-stage active" data-stage="1">

    <div class="stage-center">

        <div class="mission-badge">MISI 2</div>

        <h1>Petualangan<br>di Pasar</h1>

        <p class="intro-description">
            Hari ini Ibu mengajakmu berbelanja di pasar tradisional
            Mojokerto. Kamu bertugas membantu Ibu memilih bahan
            makanan sesuai kebutuhan dan menghitung pengeluaran
            agar uang belanja tetap cukup.
        </p>

        <div class="intro-dialog">

            <div class="intro-dialog-icon">
                <i class="fa-solid fa-comment"></i>
            </div>

            <p>
                “Ibu membawa uang Rp50.000. Kita perlu membeli
                bahan makanan untuk di rumah. Perhatikan jumlah
                dan harga setiap barang, ya. Jangan lupa sisakan
                uang untuk kebutuhan lainnya.”
            </p>

        </div>

        <div class="intro-money">

            <i class="fa-solid fa-wallet"></i>

            <div>
                <span>Uang yang dibawa Ibu</span>
                <strong>Rp50.000</strong>
            </div>

        </div>

        <button class="primary-button next-stage">
            Masuk Pasar
            <i class="fa-solid fa-arrow-right"></i>
        </button>

    </div>

</section>


<!-- TAHAP 2: SITUASI -->

<section class="market-stage" data-stage="2">

    <div class="content-card situation-card">

        <span class="section-label">PESAN DARI IBU</span>

        <h2>Misi Belanja dengan Bijak</h2>

        <p class="situation-intro">
            Di pasar, ada banyak barang yang bisa dibeli.
            Namun, uang yang kita bawa terbatas. Amati informasi
            barang terlebih dahulu sebelum menentukan pilihan.
        </p>

        <div class="story-sequence">

            <div class="story-point">
                <div class="story-number">1</div>
                <p>
                    Kamu menemani Ibu berbelanja di pasar
                    tradisional Mojokerto.
                </p>
            </div>

            <div class="story-point">
                <div class="story-number">2</div>
                <p>
                    Ibu membawa uang belanja sebesar
                    <strong>Rp50.000</strong>.
                </p>
            </div>

            <div class="story-point">
                <div class="story-number">3</div>
                <p>
                    Ibu membutuhkan beras, sayur, dan telur
                    untuk menyiapkan makanan di rumah.
                </p>
            </div>

            <div class="story-point">
                <div class="story-number">4</div>
                <p>
                    Kamu boleh mempertimbangkan barang lain,
                    tetapi kebutuhan utama harus didahulukan.
                </p>
            </div>

        </div>

        <div class="situation-task">

            <i class="fa-solid fa-circle-question"></i>

            <div>
                <strong>Tugasmu</strong>

                <p>
                    Kenali nama, kuantitas, harga, dan kegunaan
                    barang. Setelah itu, tentukan prioritas,
                    susun keranjang belanja, dan hitung total
                    pembayaran serta sisa uang Ibu.
                </p>
            </div>

        </div>

        <div class="money-box">

            <i class="fa-solid fa-wallet"></i>

            <div>
                <span>Uang yang dibawa Ibu</span>
                <strong>Rp50.000</strong>
            </div>

        </div>

        <div class="mission-actions">

            <button class="secondary-button"
                    onclick="showStage(1)">
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </button>

            <button class="primary-button next-stage">
                Lihat Barang
                <i class="fa-solid fa-arrow-right"></i>
            </button>

        </div>

    </div>

</section>


<!-- TAHAP 3: INFORMASI BARANG -->

<section class="market-stage" data-stage="3">

    <div class="content-card wide-card goods-stage-card">

        <span class="section-label">LANGKAH PERTAMA</span>

        <h2>Kenali Barang di Pasar</h2>

        <p class="instruction">
            Di pasar, setiap barang memiliki harga dan kuantitas
            yang berbeda. Perhatikan satuan, harga, dan kegunaannya
            karena informasi ini akan digunakan dalam tantangan
            belanja berikutnya.
        </p>

        <div class="goods-grid">

            <!-- BERAS -->

            <button class="goods-card" type="button">

                <div class="goods-image">
                    <i class="fa-solid fa-bowl-food"></i>
                </div>

                <strong>Beras</strong>

                <span>Rp15.000</span>

                <small>Per 1 kg</small>

                <div class="goods-detail">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Bahan makanan pokok untuk memenuhi
                        kebutuhan pangan keluarga.
                    </span>
                </div>

            </button>


            <!-- SAYUR -->

            <button class="goods-card" type="button">

                <div class="goods-image">
                    <i class="fa-solid fa-carrot"></i>
                </div>

                <strong>Sayur</strong>

                <span>Rp7.000</span>

                <small>Per 1 ikat</small>

                <div class="goods-detail">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Bahan makanan yang dapat diolah menjadi
                        lauk atau pelengkap makanan.
                    </span>
                </div>

            </button>


            <!-- TELUR -->

            <button class="goods-card" type="button">

                <div class="goods-image">
                    <i class="fa-solid fa-egg"></i>
                </div>

                <strong>Telur</strong>

                <span>Rp12.000</span>

                <small>Per 1/2 kg</small>

                <div class="goods-detail">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Bahan makanan yang dapat diolah menjadi
                        lauk untuk keluarga.
                    </span>
                </div>

            </button>


            <!-- CAMILAN -->

            <button class="goods-card" type="button">

                <div class="goods-image">
                    <i class="fa-solid fa-cookie-bite"></i>
                </div>

                <strong>Camilan</strong>

                <span>Rp8.000</span>

                <small>Per 1 bungkus</small>

                <div class="goods-detail">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Makanan tambahan yang dapat dibeli
                        jika kebutuhan utama sudah diperhatikan.
                    </span>
                </div>

            </button>

        </div>


        <div class="observation-tip">

            <i class="fa-solid fa-lightbulb"></i>

            <p>
                <strong>Tips berbelanja:</strong>
                Harga di atas berlaku untuk satu kuantitas
                yang tertera. Misalnya, beras seharga Rp15.000
                berarti kamu mendapatkan 1 kg beras.
                Jika membeli dua kuantitas, total harganya
                menjadi dua kali harga satuan.
            </p>

        </div>


        <div class="mission-actions">

            <button class="secondary-button"
                    onclick="showStage(2)">
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </button>

            <button class="primary-button next-stage">
                Tentukan Kebutuhan
                <i class="fa-solid fa-arrow-right"></i>
            </button>

        </div>

    </div>

</section>


    <!-- TAHAP 4: PRIORITAS -->

    <section class="market-stage" data-stage="4">

        <div class="content-card wide-card priority-stage-card">

            <span class="section-label">LANGKAH KEDUA</span>
            <h2>Pilih Barang yang Dibutuhkan Ibu!</h2>


<p class="instruction">
    Ibu membutuhkan bahan makanan untuk di rumah.
    Ketuk gambar barang yang menurutmu perlu dipilih terlebih dahulu.
    Ingat, pilihan ini belum menjadi keranjang belanja.
</p>



            <div class="priority-grid">

                <button class="priority-item" type="button" data-name="Beras">

                    <div class="priority-icon"><i class="fa-solid fa-bowl-food"></i></div>

                    <div class="priority-info"><strong>Beras</strong><span>Rp15.000</span></div>

                    <div class="priority-check"><i class="fa-solid fa-check"></i></div>

                </button>



                <button class="priority-item" type="button" data-name="Sayur">

                    <div class="priority-icon"><i class="fa-solid fa-carrot"></i></div>

                    <div class="priority-info"><strong>Sayur</strong><span>Rp7.000</span></div>

                    <div class="priority-check"><i class="fa-solid fa-check"></i></div>

                </button>



                <button class="priority-item" type="button" data-name="Telur">

                    <div class="priority-icon"><i class="fa-solid fa-egg"></i></div>

                    <div class="priority-info"><strong>Telur</strong><span>Rp12.000</span></div>

                    <div class="priority-check"><i class="fa-solid fa-check"></i></div>

                </button>



                <button class="priority-item" type="button" data-name="Camilan">

                    <div class="priority-icon"><i class="fa-solid fa-cookie-bite"></i></div>

                    <div class="priority-info"><strong>Camilan</strong><span>Rp8.000</span></div>

                    <div class="priority-check"><i class="fa-solid fa-check"></i></div>

                </button>

            </div>



            <div class="priority-summary">

                <div>

                    <span>Barang dipilih</span>

                    <strong id="priorityCount">0 barang</strong>

                </div>

                <div>

                    <span>Perkiraan total</span>

                    <strong id="priorityTotal">Rp0</strong>

                </div>

            </div>



            <div id="priorityFeedback" class="feedback"></div>



            <div class="mission-actions">

                <button class="secondary-button" onclick="showStage(3)">

                    <i class="fa-solid fa-arrow-left"></i> Kembali

                </button>

                <button class="primary-button" id="priorityNext" disabled>

                    Ayo pilih Barang! <i class="fa-solid fa-arrow-right"></i>

                </button>

            </div>

        </div>

    </section>



    <!-- TAHAP 5: KERANJANG -->

    <section class="market-stage" data-stage="5">

        <div class="content-card wide-card shopping-stage-card">

            <div class="shopping-header">

                <div>

                    <span class="section-label">LANGKAH KETIGA</span>
                    <h2>Sekarang susun keranjang belanjamu.</h2>
                    <p class="instruction">
                        Klik barang yang benar-benar ingin kamu beli. Gunakan daftar prioritas
                        sebagai panduan dan pastikan total belanja tidak melebihi Rp50.000.
                    </p>

                </div>



                <div class="money-status">

                    <span>Sisa uang</span>

                    <strong id="remainingMoney">Rp50.000</strong>

                </div>

            </div>

<div class="shopping-grid">

    <div class="shopping-product">
        <button class="shopping-item" type="button"
                data-name="Beras" data-price="15000" data-unit="kg">
            <div class="shopping-icon">
                <i class="fa-solid fa-bowl-food"></i>
            </div>
            <strong>Beras</strong>
            <span>Rp15.000/kg</span>
            <small>Bahan utama memasak</small>
            <div class="shopping-check">
                <i class="fa-solid fa-check"></i>
            </div>
        </button>

        <div class="quantity-control" hidden>
            <button type="button" class="quantity-minus"
                    aria-label="Kurangi beras">−</button>
            <span class="quantity-value">1 kg</span>
            <button type="button" class="quantity-plus"
                    aria-label="Tambah beras">+</button>
        </div>
    </div>

    <div class="shopping-product">
        <button class="shopping-item" type="button"
                data-name="Sayur" data-price="7000" data-unit="ikat">
            <div class="shopping-icon">
                <i class="fa-solid fa-carrot"></i>
            </div>
            <strong>Sayur</strong>
            <span>Rp7.000/ikat</span>
            <small>Bahan makanan</small>
            <div class="shopping-check">
                <i class="fa-solid fa-check"></i>
            </div>
        </button>

        <div class="quantity-control" hidden>
            <button type="button" class="quantity-minus"
                    aria-label="Kurangi sayur">−</button>
            <span class="quantity-value">1 ikat</span>
            <button type="button" class="quantity-plus"
                    aria-label="Tambah sayur">+</button>
        </div>
    </div>

    <div class="shopping-product">
        <button class="shopping-item" type="button"
                data-name="Telur" data-price="12000" data-unit="500 gram">
            <div class="shopping-icon">
                <i class="fa-solid fa-egg"></i>
            </div>
            <strong>Telur</strong>
            <span>Rp12.000/500 gram</span>
            <small>Bahan makanan</small>
            <div class="shopping-check">
                <i class="fa-solid fa-check"></i>
            </div>
        </button>

        <div class="quantity-control" hidden>
            <button type="button" class="quantity-minus"
                    aria-label="Kurangi telur">−</button>
            <span class="quantity-value">1 × 500 gram</span>
            <button type="button" class="quantity-plus"
                    aria-label="Tambah telur">+</button>
        </div>
    </div>

    <div class="shopping-product">
        <button class="shopping-item" type="button"
                data-name="Camilan" data-price="8000" data-unit="bungkus">
            <div class="shopping-icon">
                <i class="fa-solid fa-cookie-bite"></i>
            </div>
            <strong>Camilan</strong>
            <span>Rp8.000/bungkus</span>
            <small>Pilihan tambahan</small>
            <div class="shopping-check">
                <i class="fa-solid fa-check"></i>
            </div>
        </button>

        <div class="quantity-control" hidden>
            <button type="button" class="quantity-minus"
                    aria-label="Kurangi camilan">−</button>
            <span class="quantity-value">1 bungkus</span>
            <button type="button" class="quantity-plus"
                    aria-label="Tambah camilan">+</button>
        </div>
    </div>

</div>




            <div class="cart-summary">

                <div class="cart-summary-title">

                    <i class="fa-solid fa-basket-shopping"></i>

                    <span>Keranjangmu</span>

                </div>

                <div id="selectedItems">Belum ada barang yang dipilih</div>

                <div class="cart-total">

                    <span>Total belanja</span>

                    <strong id="shoppingTotal">Rp0</strong>

                </div>

            </div>



            <div id="shoppingFeedback" class="feedback"></div>



            <div class="mission-actions">

                <button class="secondary-button" onclick="showStage(4)">

                    <i class="fa-solid fa-arrow-left"></i> Kembali

                </button>

                <button class="primary-button" id="shoppingNext" disabled>

                    Lanjut <i class="fa-solid fa-arrow-right"></i>

                </button>

            </div>

        </div>

    </section>



    <!-- TAHAP 6: PERHITUNGAN DAN SOAL DATABASE -->

    
<!-- TAHAP 6: PERHITUNGAN BELANJA -->
<section class="market-stage" data-stage="6">
    <div class="content-card wide-card consideration-stage-card">

        <span class="section-label">
            LANGKAH KEEMPAT · PERIKSA HASIL BELANJA
        </span>

        <h2>Bagaimana hasil belanjamu?</h2>

        <p class="instruction">
            Periksa kembali total belanja dan uang yang tersisa.
            Pastikan uangmu cukup sebelum melanjutkan tantangan.
        </p>

        <div class="calculation">
            <div class="calculation-box">
                <span>Uang awal</span>
                <strong>Rp50.000</strong>
            </div>

            <div class="calculation-symbol">−</div>

            <div class="calculation-box">
                <span>Total belanja</span>
                <strong id="calculationTotal">Rp0</strong>
            </div>

            <div class="calculation-symbol">=</div>

            <div class="calculation-box final-money">
                <span>Uang tersisa</span>
                <strong id="calculationRemaining">Rp50.000</strong>
            </div>
        </div>

        <div class="consideration-question">
            <div class="consideration-icon">
                <i class="fa-solid fa-calculator"></i>
            </div>

            <div>
                <strong>Belanja sudah diperiksa!</strong>
                <p>
                    Kamu sudah mengetahui total belanja dan uang
                    yang tersisa. Sekarang, bantu Ibu menyelesaikan
                    Tantangan Pembeli Cerdas.
                </p>
            </div>
        </div>

<div class="mission-actions">

    <button type="button"
            class="secondary-button"
            onclick="showStage(5)">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
    </button>

    <button type="button"
            class="primary-button"
            id="goToMarketQuestions">
        Lanjut ke Konfirmasi
        <i class="fa-solid fa-arrow-right"></i>
    </button>

</div>

    </div>
</section>


    <!-- TAHAP 7: KONFIRMASI -->

    <section class="market-stage" data-stage="7">

        <div class="content-card confirmation-stage-card">

            <div class="big-icon confirmation-icon">

                <i class="fa-solid fa-clipboard-check"></i>

            </div>



            <span class="section-label">LANGKAH KELIMA</span>
            <h2>Periksa keranjang sebelum membayar.</h2>



            <p class="instruction">

                Lihat lagi barang dan total harganya. Jika sudah sesuai dengan keputusanmu, tekan tombol konfirmasi untuk melihat akibat dari pilihanmu.

            </p>



            <div class="confirmation-list" id="confirmationList"></div>



            <div class="confirmation-total">

                <div>

                    <span>Total belanja</span>

                    <strong id="confirmationTotal">Rp0</strong>

                </div>

            </div>



            <div class="confirmation-question">

                <i class="fa-solid fa-circle-info"></i>

                <p>

                    Setelah dikonfirmasi, pilihanmu akan digunakan

                    untuk melihat akibat dari keputusan belanja.

                </p>

            </div>



            <div class="mission-actions">

                <button class="secondary-button" onclick="showStage(6)">

                    <i class="fa-solid fa-arrow-left"></i> Kembali

                </button>

                <button class="primary-button" id="confirmButton">

                    Konfirmasi Keputusan <i class="fa-solid fa-check"></i>

                </button>

            </div>



            <div id="confirmFeedback" class="feedback"></div>



            <button class="primary-button hidden" id="confirmNext">

                Lihat Konsekuensi <i class="fa-solid fa-arrow-right"></i>

            </button>

        </div>

    </section>



    <!-- TAHAP 8: KONSEKUENSI -->

    <section class="market-stage" data-stage="8">

        <div class="content-card consequence-stage-card">

            <div class="big-icon consequence-icon">

                <i class="fa-solid fa-scale-balanced"></i>

            </div>



            <span class="section-label">LANGKAH KEENAM</span>
            <h2>Apa akibat dari keputusan belanjamu?</h2>



            <p class="instruction">

                Perhatikan berapa uang yang kamu gunakan dan berapa yang masih tersisa setelah berbelanja.

            </p>



            <div class="consequence-result">

                <div class="consequence-number">

                    <span>Total belanja</span><strong id="consequenceTotal">Rp0</strong>

                </div>

                <div class="consequence-divider">−</div>

                <div class="consequence-number">

                    <span>Uang tersisa</span><strong id="consequenceRemaining">Rp50.000</strong>

                </div>

            </div>



            <div class="impact-section">

                <div class="impact-header">

                    <span>Uang yang digunakan</span><strong id="impactPercent">0%</strong>

                </div>

                <div class="impact-bar"><div id="impactFill"></div></div>

            </div>



           
<div class="consequence-message" id="consequenceMessage">
    <div class="consequence-message-icon">
        <i class="fa-solid fa-comment-dots"></i>
    </div>

    <div class="consequence-message-content">
        <strong id="consequenceStatus">Hasil Belanjamu</strong>
        <p id="consequenceText">
            Perhatikan akibat dari keputusan belanjamu.
        </p>
    </div>
</div>




            <div class="mission-actions">

                <button class="secondary-button" onclick="showStage(7)">

                    <i class="fa-solid fa-arrow-left"></i> Kembali

                </button>

                
<button class="primary-button next-stage">
    Lanjut ke Tantangan
    <i class="fa-solid fa-arrow-right"></i>
</button>


            </div>

        </div>

    </section>



<!-- TAHAP 9: TANTANGAN PEMBELI CERDAS -->
<section class="market-stage" data-stage="9">

    <div class="content-card wide-card">

        <span class="section-label">
            LANGKAH KELIMA · TANTANGAN PEMBELI CERDAS
        </span>

        <h2>Bisakah kamu membantu Ibu?</h2>

        <p class="instruction">
            Jawab tantangan berdasarkan pengalaman belanjamu.
            Pilih jawaban yang tepat, periksa hasilnya,
            lalu lanjutkan ke soal berikutnya.
        </p>

        <div class="database-questions">

            <div class="question-progress">
                <span id="currentQuestionNumber">Soal 1</span>
                <span id="totalQuestionNumber">
                    dari {{ $questions->count() }} soal
                </span>
            </div>

            <div class="question-progress-track">
                <div id="questionProgressBar"></div>
            </div>

            @forelse ($questions as $index => $question)

                <div class="question-card"
                     data-question-id="{{ $question->id }}"
                     data-question-type="{{ $question->type }}"
                     data-question-index="{{ $index }}"
                     hidden>

                    <p class="question-number">
                        Tantangan {{ $index + 1 }}
                    </p>

                    <h3>{{ $question->question }}</h3>

                    @if ($question->type === 'number_input')

                        <input type="number"
                               class="number-answer"
                               inputmode="decimal"
                               placeholder="Masukkan jawaban angka">

                    @else

                        <div class="question-choices">

                            @foreach ($question->choices as $choice)

                                <label class="choice-option">
                                    <input type="radio"
                                           name="question_{{ $question->id }}"
                                           value="{{ $choice->id }}">

                                    <span>{{ $choice->choice }}</span>
                                </label>

                            @endforeach

                        </div>

                    @endif

                    <button type="button"
                            class="primary-button check-answer-btn">
                        Periksa Jawaban
                    </button>

                    <p class="answer-feedback"
                       aria-live="polite"></p>

                </div>

            @empty

                <p class="feedback error">
                    Belum ada soal aktif untuk Misi Pasar.
                    Silakan hubungi admin untuk menambahkan soal.
                </p>

            @endforelse

        </div>

    </div>

</section>


    <!-- TAHAP 9: REFLEKSI DAN SELESAI -->

    <section class="market-stage" data-stage="10">

        <div class="content-card reflection-stage-card">



            <div id="reflectionArea">

                <div class="big-icon reflection-icon">

                    <i class="fa-solid fa-lightbulb"></i>

                </div>



                <span class="section-label">LANGKAH TERAKHIR · REFLEKSI</span>
                <h2>Apa yang kamu pelajari dari misi ini?</h2>



                <p class="instruction">

                    Ceritakan bagaimana kamu menentukan pilihan, menghitung total belanja, dan memutuskan berapa uang yang perlu disisakan.

                </p>



                <div class="reflection-prompt">

                    <div class="prompt-icon">

                        <i class="fa-solid fa-comment"></i>

                    </div>

                    <div>

                        <strong>Ingat perjalananmu</strong>

                        <p>

                            Kamu sudah membaca pesan Ibu, mengenali barang di pasar, menentukan prioritas, memilih barang, menjawab tantangan, dan memeriksa akibat dari keputusanmu.

                        </p>

                    </div>

                </div>



                <textarea id="reflection" rows="5"

                          maxlength="2000"

                          placeholder="Contoh: Saya memilih beras dan sayur karena..., total belanja saya..., sisa uangnya..."></textarea>



                <p id="saveMessage" class="save-message" aria-live="polite"></p>



                <div class="mission-actions">

                    <button class="secondary-button" onclick="showStage(9)">

                        <i class="fa-solid fa-arrow-left"></i> Kembali

                    </button>

                    <button class="primary-button" id="saveReflection">

                        Simpan Refleksi <i class="fa-solid fa-floppy-disk"></i>

                    </button>

                </div>

            </div>



            <div id="marketComplete" class="market-complete hidden">

                <div class="complete-icon">

                    <i class="fa-solid fa-store"></i>

                </div>



                <span class="section-label">MISI SELESAI</span>

                <h2>Hebat, Penjelajah!</h2>



                <p class="complete-text">

                    Kamu berhasil menyelesaikan misi

                    <strong>Petualangan di Pasar</strong>.

                </p>



                <div class="complete-reward">

                    <i class="fa-solid fa-star"></i>

                    <div>

                        <span>XP yang diperoleh</span>

                        <strong id="earnedXP">+100 XP</strong>

                    </div>

                </div>



                <div class="complete-summary">

                    <div><i class="fa-solid fa-book-open"></i><span>Pahami situasi</span></div>

                    <div><i class="fa-solid fa-list-check"></i><span>Tentukan prioritas</span></div>

                    <div><i class="fa-solid fa-basket-shopping"></i><span>Pilih barang</span></div>

                    <div><i class="fa-solid fa-calculator"></i><span>Hitung & pertimbangkan</span></div>

                </div>



                <p class="complete-message">

                    Kamu berhasil membantu Ibu berbelanja dengan bijak. Siap melanjutkan petualangan ke lokasi berikutnya!

                </p>



                <a href="{{ route('map') }}" class="primary-button complete-button">

                    Kembali ke Peta <i class="fa-solid fa-map"></i>

                </a>

            </div>



        </div>

    </section>

</main>

<script>
    
(() => {
    'use strict';

    const app = document.getElementById('marketApp');

    if (!app) return;

    const $ = id => document.getElementById(id);
    const stages = [...app.querySelectorAll('.market-stage')];
    const initialMoney = 50000;

    const selectedPriority = [];
    const selectedProducts = [];
    const answeredQuestions = new Set();

    let currentStage = 1;
    let currentQuestionIndex = 0;
    let missionCompleted = false;
    let isSaving = false;

    const priorityPrices = {
        Beras: 15000,
        Sayur: 7000,
        Telur: 12000,
        Camilan: 8000
    };

    const csrfToken =
        document.querySelector('meta[name="csrf-token"]')?.content ?? '';

    const money = number =>
        'Rp' + Number(number).toLocaleString('id-ID');
function getTotal() {
    return selectedProducts.reduce(
        (sum, product) => sum + product.price * product.quantity,
        0
    );
}
    const getQuestionCards = () => [
        ...app.querySelectorAll(
            '.market-stage[data-stage="9"] .question-card'
        )
    ];

    function setText(id, value) {
        const element = $(id);
        if (element) element.textContent = value;
    }

    function showFeedback(id, message, type = '') {
        const element = $(id);
        if (!element) return;

        element.textContent = message;
        element.className = 'feedback' + (type ? ' ' + type : '');
    }

    function setDisabled(id, disabled) {
        const element = $(id);
        if (element) element.disabled = disabled;
    }

    /* =========================
       NAVIGASI STAGE
    ========================= */
function showStage(stageNumber) {
    currentStage = stageNumber;

    stages.forEach(stage => {
        stage.classList.toggle(
            'active',
            Number(stage.dataset.stage) === stageNumber
        );
    });

    $('progressFill').style.width =
        ((stageNumber - 1) / (stages.length - 1)) * 100 + '%';

    $('stageText').textContent = `${stageNumber} dari ${stages.length}`;

    updateShopping();

    if (stageNumber === 4) updatePriority();
    if (stageNumber === 7) createConfirmation();
    if (stageNumber === 8) createConsequence();
    if (stageNumber === 9) showCurrentQuestion();

    window.scrollTo({ top: 0, behavior: 'smooth' });
}

    // Mendukung tombol Kembali yang menggunakan onclick="showStage(...)"
    window.showStage = showStage;

    app.querySelectorAll('.next-stage').forEach(button => {
        button.addEventListener('click', () => {
            showStage(currentStage + 1);
        });
    });

    /* =========================
       PRIORITAS BARANG
    ========================= */

    app.querySelectorAll('.priority-item').forEach(item => {
        item.addEventListener('click', () => {
            const name = item.dataset.name;
            const index = selectedPriority.indexOf(name);

            if (index >= 0) {
                selectedPriority.splice(index, 1);
                item.classList.remove('selected');
            } else {
                selectedPriority.push(name);
                item.classList.add('selected');
            }

            updatePriority();
        });
    });

    function updatePriority() {
        const total = selectedPriority.reduce(
            (sum, name) => sum + (priorityPrices[name] || 0),
            0
        );

        setText('priorityCount', `${selectedPriority.length} barang`);
        setText('priorityTotal', money(total));
        setDisabled('priorityNext', selectedPriority.length === 0);

        showFeedback(
            'priorityFeedback',
            selectedPriority.length
                ? 'Pilihan prioritasmu sudah dicatat.'
                : ''
        );
    }

    $('priorityNext')?.addEventListener('click', () => {
        if (selectedPriority.length > 0) showStage(5);
    });
/* =========================
   KERANJANG BELANJA
   Mendukung kuantitas
========================= */

const maxQuantity = 10;

function getTotal() {
    return selectedProducts.reduce(
        (sum, product) => sum + product.price * product.quantity,
        0
    );
}

function getProduct(name) {
    return selectedProducts.find(product => product.name === name);
}

function formatQuantity(product) {
    if (product.unit === '500 gram') {
        return `${product.quantity} × 500 gram`;
    }

    return `${product.quantity} ${product.unit}`;
}

function updateQuantityControl(item) {
    const wrapper = item.closest('.shopping-product');
    if (!wrapper) return;

    const name = item.dataset.name;
    const product = getProduct(name);
    const control = wrapper.querySelector('.quantity-control');

    if (!control) return;

    control.hidden = !product;

    if (!product) return;

    const value = control.querySelector('.quantity-value');
    const minus = control.querySelector('.quantity-minus');
    const plus = control.querySelector('.quantity-plus');

    if (value) value.textContent = formatQuantity(product);

    if (minus) minus.disabled = product.quantity <= 1;

    if (plus) {
        plus.disabled =
            product.quantity >= maxQuantity ||
            getTotal() + product.price > initialMoney;
    }
}

function updateAllQuantityControls() {
    app.querySelectorAll('.shopping-item').forEach(item => {
        updateQuantityControl(item);
    });
}

function updateShopping() {
    const total = getTotal();
    const remaining = initialMoney - total;

    setText('remainingMoney', money(remaining));
    setText('shoppingTotal', money(total));
    setText('calculationTotal', money(total));
    setText('calculationRemaining', money(remaining));

    const selectedItems = $('selectedItems');

    if (selectedItems) {
        selectedItems.replaceChildren();

        if (selectedProducts.length === 0) {
            selectedItems.textContent =
                'Belum ada barang yang dipilih';
        } else {
            selectedProducts.forEach(product => {
                const row = document.createElement('div');
                row.className = 'cart-item-row';

                const name = document.createElement('span');
                name.textContent =
                    `${product.name} (${formatQuantity(product)})`;

                const subtotal = document.createElement('strong');
                subtotal.textContent =
                    money(product.price * product.quantity);

                row.append(name, subtotal);
                selectedItems.appendChild(row);
            });
        }
    }

    setDisabled('shoppingNext', selectedProducts.length === 0);

    updateAllQuantityControls();
}

/* Pilih atau keluarkan barang dari keranjang */
app.querySelectorAll('.shopping-item').forEach(item => {
    item.addEventListener('click', () => {
        const name = item.dataset.name;
        const price = Number(item.dataset.price);
        const unit = item.dataset.unit;

        const existing = getProduct(name);

        if (existing) {
            const index = selectedProducts.indexOf(existing);
            selectedProducts.splice(index, 1);
            item.classList.remove('selected');
        } else {
            if (getTotal() + price > initialMoney) {
                showFeedback(
                    'shoppingFeedback',
                    'Uang Ibu tidak cukup untuk menambah barang ini.',
                    'error'
                );
                return;
            }

            selectedProducts.push({
                name,
                price,
                unit,
                quantity: 1
            });

            item.classList.add('selected');
        }

        showFeedback('shoppingFeedback', '');
        updateShopping();
    });
});

/* Tombol tambah dan kurangi kuantitas */
app.querySelectorAll('.shopping-product').forEach(wrapper => {
    const item = wrapper.querySelector('.shopping-item');
    const minus = wrapper.querySelector('.quantity-minus');
    const plus = wrapper.querySelector('.quantity-plus');

    if (!item || !minus || !plus) return;

    minus.addEventListener('click', () => {
        const product = getProduct(item.dataset.name);
        if (!product || product.quantity <= 1) return;

        product.quantity--;
        showFeedback('shoppingFeedback', '');
        updateShopping();
    });

    plus.addEventListener('click', () => {
        const product = getProduct(item.dataset.name);
        if (!product) return;

        if (product.quantity >= maxQuantity) {
            showFeedback(
                'shoppingFeedback',
                'Jumlah maksimal barang adalah 10 satuan.',
                'error'
            );
            return;
        }

        if (getTotal() + product.price > initialMoney) {
            showFeedback(
                'shoppingFeedback',
                'Uang Ibu tidak cukup untuk menambah kuantitas tersebut.',
                'error'
            );
            return;
        }

        product.quantity++;
        showFeedback('shoppingFeedback', '');
        updateShopping();
    });
});

$('shoppingNext')?.addEventListener('click', () => {
    if (selectedProducts.length === 0) {
        showFeedback(
            'shoppingFeedback',
            'Pilih minimal satu barang terlebih dahulu.',
            'error'
        );
        return;
    }

    showFeedback('shoppingFeedback', '');
    showStage(6);
});
    /* =========================
       STAGE 6: PERHITUNGAN
    ========================= */

    
$('goToMarketQuestions')?.addEventListener('click', () => {
    if (getTotal() > initialMoney) {
        showFeedback(
            'calculationFeedback',
            'Periksa kembali total belanjamu.',
            'error'
        );
        return;
    }

    showStage(7);
});


    /* =========================
       STAGE 7: TANTANGAN
       Satu soal per tampilan
    ========================= */

    function updateQuestionProgress() {
        const cards = getQuestionCards();
        const total = cards.length;

        const completed = cards.filter(card =>
            answeredQuestions.has(Number(card.dataset.questionId))
        ).length;

        const bar = $('questionProgressBar');

        setText(
            'currentQuestionNumber',
            total ? `Selesai ${completed} dari ${total}` : 'Belum ada soal'
        );

        setText('totalQuestionNumber', 'soal terjawab');

        if (bar) {
            bar.style.width = total
                ? `${(completed / total) * 100}%`
                : '0%';
        }
    }

    function showCurrentQuestion() {
        const cards = getQuestionCards();

        if (cards.length === 0) {
            updateQuestionProgress();
            return;
        }

        // Cari soal pertama yang belum dijawab.
        const firstUnanswered = cards.findIndex(card =>
            !answeredQuestions.has(Number(card.dataset.questionId))
        );

        if (firstUnanswered >= 0) {
            currentQuestionIndex = firstUnanswered;
        } else {
            currentQuestionIndex = Math.min(
                currentQuestionIndex,
                cards.length - 1
            );
        }

        cards.forEach((card, index) => {
            card.hidden = index !== currentQuestionIndex;
        });

        updateQuestionProgress();
    }

function showNextQuestion(currentCard) {
    const cards = getQuestionCards();
    const currentIndex = cards.indexOf(currentCard);

    const nextIndex = cards.findIndex((card, index) =>
        index > currentIndex &&
        !answeredQuestions.has(Number(card.dataset.questionId))
    );

    if (nextIndex >= 0) {
        currentQuestionIndex = nextIndex;
        showCurrentQuestion();
        window.scrollTo({ top: 0, behavior: 'smooth' });
        return;
    }

    const allAnswered = cards.length > 0 && cards.every(card =>
        answeredQuestions.has(Number(card.dataset.questionId))
    );

    if (allAnswered) {
        let nextButton = currentCard.querySelector('.challenge-next-btn');

        if (!nextButton) {
            nextButton = document.createElement('button');
            nextButton.type = 'button';
            nextButton.className = 'primary-button challenge-next-btn';
            nextButton.textContent = 'Lanjut Refleksi →';

            currentCard.appendChild(nextButton);
        }

        nextButton.hidden = false;

        nextButton.onclick = () => {
            showStage(10);
        };
    }
}


    /* =========================
       KIRIM JAWABAN KE LARAVEL
    ========================= */

app.querySelectorAll('.check-answer-btn').forEach(button => {
    button.addEventListener('click', async () => {
        const card = button.closest('.question-card');
        if (!card) return;

        const questionId = Number(card.dataset.questionId);
        const questionType = card.dataset.questionType;
        const feedback = card.querySelector('.answer-feedback');

        if (answeredQuestions.has(questionId)) return;

        const payload = { question_id: questionId };

        // Ambil jawaban siswa
        if (questionType === 'number_input') {
            const input = card.querySelector('.number-answer');

            if (!input || !input.value.trim()) {
                feedback.textContent =
                    'Masukkan jawaban angka terlebih dahulu.';
                feedback.className = 'answer-feedback error';
                return;
            }

            payload.answer = input.value;
        } else {
            const selected = card.querySelector(
                'input[type="radio"]:checked'
            );

            if (!selected) {
                feedback.textContent =
                    'Pilih salah satu jawaban terlebih dahulu.';
                feedback.className = 'answer-feedback error';
                return;
            }

            payload.choice_id = Number(selected.value);
        }

        button.disabled = true;
        feedback.className = 'answer-feedback';
        feedback.textContent = 'Memeriksa jawaban...';

        try {
            const response = await fetch(app.dataset.answerUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(payload)
            });

            const responseText = await response.text();
            let result;

            try {
                result = JSON.parse(responseText);
            } catch {
                throw new Error(
                    `Respons server bukan JSON (HTTP ${response.status}).`
                );
            }

            if (!response.ok || !result.success) {
                throw new Error(
                    result.message ||
                    `Gagal memeriksa jawaban (HTTP ${response.status}).`
                );
            }

            // Hapus tombol tindakan lama pada soal ini
            card.querySelector('.next-question-btn')?.remove();

            if (result.is_correct) {
                // =========================
                // JAWABAN BENAR
                // =========================

                answeredQuestions.add(questionId);
                card.classList.add('answered');

                feedback.textContent =
                    '🎉 Hebat! Jawabanmu benar. Ayo lanjut ke tantangan berikutnya!';
                feedback.className = 'answer-feedback success';

                card.querySelectorAll('input').forEach(input => {
                    input.disabled = true;
                });

                button.textContent = 'Jawaban Benar ✓';

                const nextButton = document.createElement('button');
                nextButton.type = 'button';
                nextButton.className = 'next-question-btn';
                nextButton.textContent = 'Lanjut Soal Berikutnya →';

                nextButton.addEventListener('click', () => {
                    nextButton.disabled = true;
                    showNextQuestion(card);
                });

                feedback.insertAdjacentElement('afterend', nextButton);

                updateQuestionProgress();

            } else {
                // =========================
                // JAWABAN SALAH
                // =========================

                feedback.textContent =
                    '💪 Belum tepat! Tantangan harus diulang dari Soal 1. Tetap semangat, ya!';
                feedback.className = 'answer-feedback error';

                card.querySelectorAll('input').forEach(input => {
                    input.disabled = true;
                });

                button.textContent = 'Jawaban Belum Tepat';

                const retryButton = document.createElement('button');
                retryButton.type = 'button';
                retryButton.className = 'next-question-btn';
                retryButton.textContent = '↻ Ulangi Tantangan dari Soal 1';

                retryButton.addEventListener('click', () => {
                    // Reset progres tantangan di browser
                    answeredQuestions.clear();
                    currentQuestionIndex = 0;

                    getQuestionCards().forEach(questionCard => {
                        questionCard.classList.remove('answered');

                        // Aktifkan kembali pilihan dan kosongkan jawaban
                        questionCard.querySelectorAll('input').forEach(input => {
                            input.disabled = false;

                            if (input.type === 'radio') {
                                input.checked = false;
                            } else if (input.type === 'number') {
                                input.value = '';
                            }
                        });

                        const checkButton = questionCard.querySelector(
                            '.check-answer-btn'
                        );

                        if (checkButton) {
                            checkButton.disabled = false;
                            checkButton.textContent = 'Periksa Jawaban';
                        }

                        const questionFeedback =
                            questionCard.querySelector('.answer-feedback');

                        if (questionFeedback) {
                            questionFeedback.textContent = '';
                            questionFeedback.className = 'answer-feedback';
                        }

                        questionCard.querySelectorAll(
                            '.next-question-btn, .challenge-next-btn'
                        ).forEach(nextButton => nextButton.remove());
                    });

                    updateQuestionProgress();
                    showCurrentQuestion();

                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });

                feedback.insertAdjacentElement('afterend', retryButton);
            }

        } catch (error) {
            console.error('Gagal memeriksa jawaban:', error);

            feedback.textContent =
                'Gagal memeriksa jawaban: ' + error.message;
            feedback.className = 'answer-feedback error';

            button.disabled = false;
            button.textContent = 'Coba Periksa Lagi';
        }
    });
});


    /* =========================
       STAGE 8: KONFIRMASI
    ========================= */
// ```javascript
function createConfirmation() {
    const list = $('confirmationList');
    if (!list) return;

    list.replaceChildren();

    if (selectedProducts.length === 0) {
        list.textContent = 'Belum ada barang yang dipilih.';
        setText('confirmationTotal', money(0));
        return;
    }

    selectedProducts.forEach(product => {
        const row = document.createElement('div');
        row.className = 'confirmation-item';

        const info = document.createElement('div');

        const name = document.createElement('strong');
        name.textContent = product.name;

        const detail = document.createElement('small');
        detail.textContent =
            `${formatQuantity(product)} × ${money(product.price)}`;

        info.append(name, detail);

        const subtotal = document.createElement('strong');
        subtotal.textContent =
            money(product.price * product.quantity);

        row.append(info, subtotal);
        list.appendChild(row);
    });

    setText('confirmationTotal', money(getTotal()));
}
// ```js
/* =========================
   EVENT KONFIRMASI KEPUTUSAN
========================= */

$('confirmButton')?.addEventListener('click', () => {
    if (selectedProducts.length === 0) {
        showFeedback(
            'confirmFeedback',
            'Pilih minimal satu barang terlebih dahulu.',
            'error'
        );
        return;
    }

    // Perbarui daftar barang dan total belanja
    createConfirmation();

    // Tampilkan pesan berhasil
    showFeedback(
        'confirmFeedback',
        'Keputusan belanjamu berhasil dikonfirmasi!',
        'success'
    );

    // Tampilkan tombol menuju tahap konsekuensi
    $('confirmNext')?.classList.remove('hidden');
});

/* Tombol menuju tahap konsekuensi */
$('confirmNext')?.addEventListener('click', () => {
    showStage(8);
});
// ```
    /* =========================
       STAGE 9: KONSEKUENSI
    ========================= */

function createConsequence() {
    const total = getTotal();
    const remaining = initialMoney - total;
    const percentage = initialMoney > 0
        ? (total / initialMoney) * 100
        : 0;

    // Perbarui informasi uang
    setText('consequenceTotal', money(total));
    setText('consequenceRemaining', money(remaining));

    // Perbarui persentase penggunaan uang
    setText('impactPercent', Math.round(percentage) + '%');

    const impactFill = $('impactFill');

    if (impactFill) {
        impactFill.style.width =
            Math.max(0, Math.min(100, percentage)) + '%';
    }

    // Tentukan akibat keputusan belanja
    let status;
    let message;
    let icon = 'fa-comment-dots';

    if (selectedProducts.length === 0) {
        status = 'Belum Ada Belanjaan';
        message =
            'Kamu belum memilih barang. Karena itu, uangmu masih utuh, tetapi kebutuhan belanja belum terpenuhi.';
        icon = 'fa-basket-shopping';

    } else if (remaining < 0) {
        status = 'Uang Belanja Melebihi Batas!';
        message =
            'Wah, total belanjamu melebihi uang yang tersedia. Kamu perlu memperhatikan harga dan jumlah barang saat berbelanja.';
        icon = 'fa-triangle-exclamation';

    } else if (remaining < 10000) {
        status = 'Uang Tersisa Sangat Sedikit';
        message =
            `Kamu menggunakan ${Math.round(percentage)}% dari uang belanja. Uang yang tersisa hanya ${money(remaining)}. Uang tersebut mungkin belum cukup untuk kebutuhan lainnya.`;
        icon = 'fa-wallet';

    } else if (remaining < 20000) {
        status = 'Uang Mulai Menipis';
        message =
            `Kamu telah menggunakan ${money(total)} untuk berbelanja. Sisa uangmu ${money(remaining)}. Pertimbangkan kebutuhan lain sebelum memutuskan membeli barang tambahan.`;
        icon = 'fa-scale-balanced';

    } else {
        status = 'Uang Masih Tersisa';
        message =
            `Bagus! Setelah berbelanja sebesar ${money(total)}, kamu masih memiliki ${money(remaining)}. Sisa uang ini dapat disimpan untuk kebutuhan lainnya.`;
        icon = 'fa-circle-check';
    }

    setText('consequenceStatus', status);
    setText('consequenceText', message);

    // Sesuaikan ikon dengan akibat belanja
    const messageIcon = $('consequenceMessage')
        ?.querySelector('.consequence-message-icon i');

    if (messageIcon) {
        messageIcon.className = `fa-solid ${icon}`;
    }
}


    /* =========================
       STAGE 10: REFLEKSI
    ========================= */

    $('saveReflection')?.addEventListener('click', async () => {
        if (isSaving || missionCompleted) return;

        const reflection = $('reflection')?.value.trim() || '';
        const message = $('saveMessage');

        if (!reflection) {
            if (message) {
                message.textContent =
                    'Tuliskan refleksimu terlebih dahulu.';
                message.className = 'save-message error-text';
            }
            return;
        }

        const cards = getQuestionCards();

        const allAnswered = cards.length > 0 && cards.every(card =>
            answeredQuestions.has(Number(card.dataset.questionId))
        );

        if (!allAnswered) {
            if (message) {
                message.textContent =
                    'Selesaikan semua soal terlebih dahulu.';
                message.className = 'save-message error-text';
            }
            return;
        }

        isSaving = true;
        setDisabled('saveReflection', true);

        if (message) {
            message.textContent = 'Menyimpan refleksi dan progres misi...';
            message.className = 'save-message';
        }

        try {
            const completeResponse = await fetch(app.dataset.completeUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({})
            });

            const completeResult = await completeResponse.json();

            if (!completeResponse.ok || !completeResult.success) {
                throw new Error(
                    completeResult.message ||
                    'Progres misi gagal disimpan.'
                );
            }

            const reflectionResponse = await fetch(
                app.dataset.reflectionUrl,
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        answers: [reflection]
                    })
                }
            );

            const reflectionResult = await reflectionResponse.json();

            if (!reflectionResponse.ok || !reflectionResult.success) {
                throw new Error(
                    reflectionResult.message || 'Refleksi gagal disimpan.'
                );
            }

            missionCompleted = true;

            setText(
                'earnedXP',
                '+' + Number(completeResult.xp_earned || 0) + ' XP'
            );

            $('reflectionArea')?.classList.add('hidden');
            $('marketComplete')?.classList.remove('hidden');

            if (message) message.textContent = '';

        } catch (error) {
            console.error('Gagal menyelesaikan misi:', error);

            if (message) {
                message.textContent = error.message ||
                    'Terjadi kesalahan saat menyimpan misi.';
                message.className = 'save-message error-text';
            }

            setDisabled('saveReflection', false);

        } finally {
            isSaving = false;
        }
    });

    /* =========================
       INISIALISASI
    ========================= */

    updatePriority();
    updateShopping();
    updateQuestionProgress();
    showStage(1);

})();

</script>

</body>

</html>
