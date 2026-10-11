<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Misi 2 - Pasar | Jelajah Mojokerto</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  >

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  >
<link rel="stylesheet" href="{{ asset('jelajah/css/misi2.css') }}">
</head>

<body>

<main class="market-app">

  <!-- ================= TOPBAR ================= -->
  <header class="market-topbar">

    <a href="{{ route('jelajah.map') }}" class="back-button">
      <i class="fa-solid fa-arrow-left"></i>
      Kembali
    </a>

    <div class="market-progress">
      <span id="stageText">1 dari 9</span>

      <div class="progress-track">
        <div class="progress-fill" id="progressFill"></div>
      </div>
    </div>

  </header>
<!-- ================= 1. MASUK PASAR ================= -->

<section class="market-stage active" data-stage="1">

  <div class="stage-center">

    <div class="mission-badge">
      MISI 2
    </div>

    <h1>
      Petualangan<br>
      di Pasar
    </h1>

    <p class="intro-description">
      Hari ini kamu menemani Ibu berbelanja.
      Bantu Ibu memilih barang yang dibutuhkan
      dengan uang yang tersedia.
    </p>

    <div class="intro-dialog">

      <div class="intro-dialog-icon">
        <i class="fa-solid fa-comment"></i>
      </div>

      <p>
        “Bantu Ibu memilih barang yang benar-benar
        dibutuhkan dan tetap sisakan uang untuk
        kebutuhan lain, ya!”
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
<!-- ================= 2. BACA SITUASI ================= -->
<section class="market-stage" data-stage="2">

  <div class="content-card situation-card">

    <span class="section-label">
      BACA SITUASI
    </span>

    <h2>
      Bantu Ibu Berbelanja
    </h2>

    <p class="situation-intro">
      Sebelum mulai memilih barang, pahami dulu
      situasi yang sedang dihadapi Ibu.
    </p>

    <div class="story-sequence">

      <div class="story-point">
        <div class="story-number">1</div>

        <p>
          Hari ini kamu menemani Ibu
          berbelanja di pasar.
        </p>
      </div>

      <div class="story-point">
        <div class="story-number">2</div>

        <p>
          Ibu membawa uang
          <strong>Rp50.000</strong>.
        </p>
      </div>

      <div class="story-point">
        <div class="story-number">3</div>

        <p>
          Ibu membutuhkan beberapa bahan
          untuk memasak di rumah.
        </p>
      </div>

      <div class="story-point">
        <div class="story-number">4</div>

        <p>
          Ibu juga ingin menyisakan sebagian
          uang untuk kebutuhan lain.
        </p>
      </div>

    </div>

    <div class="situation-task">

      <i class="fa-solid fa-circle-question"></i>

      <div>
        <strong>Tugasmu</strong>

        <p>
          Bantu Ibu menentukan barang yang akan dibeli
          dengan mempertimbangkan kebutuhan dan uang
          yang tersedia.
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

      <button
        class="secondary-button"
        onclick="showStage(1)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button class="primary-button next-stage">
        Lanjut
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>

</section>
<!-- ================= 3. INFORMASI BARANG ================= -->
<section class="market-stage" data-stage="3">

  <div class="content-card wide-card goods-stage-card">

    <span class="section-label">
      AMATI INFORMASI BARANG
    </span>

    <h2>
      Kenali Barang di Pasar
    </h2>

    <p class="instruction">
      Amati nama, harga, dan kegunaan setiap barang
      sebelum menentukan pilihanmu.
    </p>

    <div class="goods-grid">

      <button class="goods-card" type="button">

        <div class="goods-image">
          <i class="fa-solid fa-bowl-food"></i>
        </div>

        <strong>Beras</strong>

        <span>Rp15.000</span>

        <small>
          Bahan utama memasak
        </small>

        <div class="goods-detail">
          <i class="fa-solid fa-circle-info"></i>
          <span>Termasuk kebutuhan utama</span>
        </div>

      </button>


      <button class="goods-card" type="button">

        <div class="goods-image">
          <i class="fa-solid fa-carrot"></i>
        </div>

        <strong>Sayur</strong>

        <span>Rp7.000</span>

        <small>
          Bahan makanan
        </small>

        <div class="goods-detail">
          <i class="fa-solid fa-circle-info"></i>
          <span>Dibutuhkan untuk memasak</span>
        </div>

      </button>


      <button class="goods-card" type="button">

        <div class="goods-image">
          <i class="fa-solid fa-egg"></i>
        </div>

        <strong>Telur</strong>

        <span>Rp12.000</span>

        <small>
          Bahan makanan
        </small>

        <div class="goods-detail">
          <i class="fa-solid fa-circle-info"></i>
          <span>Dapat digunakan sebagai lauk</span>
        </div>

      </button>


      <button class="goods-card" type="button">

        <div class="goods-image">
          <i class="fa-solid fa-cookie-bite"></i>
        </div>

        <strong>Camilan</strong>

        <span>Rp8.000</span>

        <small>
          Bukan kebutuhan utama
        </small>

        <div class="goods-detail">
          <i class="fa-solid fa-circle-info"></i>
          <span>Dapat dibeli jika uang mencukupi</span>
        </div>

      </button>

    </div>

    <div class="observation-tip">

      <i class="fa-solid fa-lightbulb"></i>

      <p>
        Ingat harga dan kegunaan barang.
        Informasi ini akan membantu kamu menentukan
        barang yang perlu diprioritaskan.
      </p>

    </div>

    <div class="mission-actions">

      <button
        class="secondary-button"
        onclick="showStage(2)"
      >
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
<!-- ================= 4. TENTUKAN PRIORITAS ================= -->
<section class="market-stage" data-stage="4">

  <div class="content-card wide-card priority-stage-card">

    <span class="section-label">
      TENTUKAN PRIORITAS
    </span>

    <h2>
      Pilih barang yang akan kamu prioritaskan.
    </h2>

    <p class="instruction">
      Ingat kembali kebutuhan Ibu dan uang yang tersedia.
      Pilih barang yang menurutmu perlu diprioritaskan untuk dibeli.
    </p>

    <div class="priority-grid">

      <!-- BERAS -->
      <button
        class="priority-item"
        type="button"
        data-name="Beras"
      >
        <div class="priority-icon">
          <i class="fa-solid fa-bowl-food"></i>
        </div>

        <div class="priority-info">
          <strong>Beras</strong>
          <span>Rp15.000</span>
        </div>

        <div class="priority-check">
          <i class="fa-solid fa-check"></i>
        </div>
      </button>


      <!-- SAYUR -->
      <button
        class="priority-item"
        type="button"
        data-name="Sayur"
      >
        <div class="priority-icon">
          <i class="fa-solid fa-carrot"></i>
        </div>

        <div class="priority-info">
          <strong>Sayur</strong>
          <span>Rp7.000</span>
        </div>

        <div class="priority-check">
          <i class="fa-solid fa-check"></i>
        </div>
      </button>


      <!-- TELUR -->
      <button
        class="priority-item"
        type="button"
        data-name="Telur"
      >
        <div class="priority-icon">
          <i class="fa-solid fa-egg"></i>
        </div>

        <div class="priority-info">
          <strong>Telur</strong>
          <span>Rp12.000</span>
        </div>

        <div class="priority-check">
          <i class="fa-solid fa-check"></i>
        </div>
      </button>


      <!-- CAMILAN -->
      <button
        class="priority-item"
        type="button"
        data-name="Camilan"
      >
        <div class="priority-icon">
          <i class="fa-solid fa-cookie-bite"></i>
        </div>

        <div class="priority-info">
          <strong>Camilan</strong>
          <span>Rp8.000</span>
        </div>

        <div class="priority-check">
          <i class="fa-solid fa-check"></i>
        </div>
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


    <div
      id="priorityFeedback"
      class="feedback"
    ></div>


    <div class="mission-actions">

      <button
        class="secondary-button"
        onclick="showStage(3)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button
        class="primary-button"
        id="priorityNext"
        disabled
      >
        Buat Pilihan Belanja
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>

</section>
<!-- ================= 5. PILIHAN BELANJA ================= -->
<section class="market-stage" data-stage="5">

  <div class="content-card wide-card shopping-stage-card">

    <div class="shopping-header">

      <div>
        <span class="section-label">
          BUAT PILIHAN BELANJA
        </span>

        <h2>
          Masukkan barang ke keranjang.
        </h2>

        <p class="instruction">
          Pilih barang yang ingin kamu beli
          berdasarkan prioritas yang sudah kamu tentukan.
        </p>
      </div>

      <div class="money-status">

        <span>Sisa uang</span>

        <strong id="remainingMoney">
          Rp50.000
        </strong>

      </div>

    </div>
    <div class="shopping-grid">

      <button
        class="shopping-item"
        type="button"
        data-name="Beras"
        data-price="15000"
      >

        <div class="shopping-icon">
          <i class="fa-solid fa-bowl-food"></i>
        </div>

        <strong>Beras</strong>

        <span>Rp15.000</span>

        <small>
          Bahan utama memasak
        </small>

        <div class="shopping-check">
          <i class="fa-solid fa-check"></i>
        </div>

      </button>


      <button
        class="shopping-item"
        type="button"
        data-name="Sayur"
        data-price="7000"
      >

        <div class="shopping-icon">
          <i class="fa-solid fa-carrot"></i>
        </div>

        <strong>Sayur</strong>

        <span>Rp7.000</span>

        <small>
          Bahan makanan
        </small>

        <div class="shopping-check">
          <i class="fa-solid fa-check"></i>
        </div>

      </button>


      <button
        class="shopping-item"
        type="button"
        data-name="Telur"
        data-price="12000"
      >

        <div class="shopping-icon">
          <i class="fa-solid fa-egg"></i>
        </div>

        <strong>Telur</strong>

        <span>Rp12.000</span>

        <small>
          Bahan makanan
        </small>

        <div class="shopping-check">
          <i class="fa-solid fa-check"></i>
        </div>

      </button>


      <button
        class="shopping-item"
        type="button"
        data-name="Camilan"
        data-price="8000"
      >

        <div class="shopping-icon">
          <i class="fa-solid fa-cookie-bite"></i>
        </div>

        <strong>Camilan</strong>

        <span>Rp8.000</span>

        <small>
          Pilihan tambahan
        </small>

        <div class="shopping-check">
          <i class="fa-solid fa-check"></i>
        </div>

      </button>

    </div>


    <div class="cart-summary">

      <div class="cart-summary-title">
        <i class="fa-solid fa-basket-shopping"></i>
        <span>Keranjangmu</span>
      </div>

      <div id="selectedItems">
        Belum ada barang yang dipilih
      </div>

      <div class="cart-total">

        <span>Total belanja</span>

        <strong id="shoppingTotal">
          Rp0
        </strong>

      </div>

    </div>


    <div
      id="shoppingFeedback"
      class="feedback"
    ></div>


    <div class="mission-actions">

      <button
        class="secondary-button"
        onclick="showStage(4)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button
        class="primary-button"
        id="shoppingNext"
        disabled
      >
        Lanjut
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>

</section>
<!-- ================= 6. HITUNG DAN PERTIMBANGKAN ================= -->
<section class="market-stage" data-stage="6">

  <div class="content-card consideration-stage-card">

    <span class="section-label">
      HITUNG DAN PERTIMBANGKAN
    </span>

    <h2>
      Periksa kembali pilihan belanjamu.
    </h2>

    <p class="instruction">
      Hitung jumlah belanja dan lihat berapa uang
      yang masih tersisa untuk kebutuhan lain.
    </p>


    <div class="calculation">

      <div class="calculation-box">
        <span>Uang awal</span>
        <strong>Rp50.000</strong>
      </div>

      <div class="calculation-symbol">
        −
      </div>

      <div class="calculation-box">
        <span>Total belanja</span>
        <strong id="calculationTotal">
          Rp0
        </strong>
      </div>

      <div class="calculation-symbol">
        =
      </div>

      <div class="calculation-box final-money">
        <span>Uang tersisa</span>
        <strong id="calculationRemaining">
          Rp50.000
        </strong>
      </div>

    </div>


    <div class="consideration-question">

      <div class="consideration-icon">
        <i class="fa-solid fa-scale-balanced"></i>
      </div>

      <div>
        <strong>Sudah yakin dengan pilihanmu?</strong>

        <p>
          Pertimbangkan apakah uang yang tersisa
          masih cukup untuk kebutuhan lain.
        </p>
      </div>

    </div>


    <div class="consideration-actions">

      <button
        class="consideration-button reconsider"
        id="reconsiderButton"
      >
        <i class="fa-solid fa-pen"></i>
        Ubah Pilihan
      </button>

      <button
        class="consideration-button continue"
        id="considerationNext"
      >
        Saya Sudah Mempertimbangkan
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>


    <div
      id="considerationFeedback"
      class="feedback"
    ></div>


    <div class="mission-actions">

      <button
        class="secondary-button"
        onclick="showStage(5)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button
        class="primary-button hidden"
        id="continueToConfirmation"
      >
        Konfirmasi Keputusan
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>

</section>
<!-- ================= 7. KONFIRMASI ================= -->
<section class="market-stage" data-stage="7">

  <div class="content-card confirmation-stage-card">

    <div class="big-icon confirmation-icon">
      <i class="fa-solid fa-clipboard-check"></i>
    </div>

    <span class="section-label">
      KONFIRMASI KEPUTUSAN
    </span>

    <h2>
      Sudah yakin dengan belanjamu?
    </h2>

    <p class="instruction">
      Periksa kembali barang yang kamu pilih sebelum
      keputusan belanjamu dikunci.
    </p>


    <div class="confirmation-list" id="confirmationList">
      <!-- Diisi otomatis oleh JavaScript -->
    </div>


    <div class="confirmation-total">

      <div>
        <span>Total belanja</span>

        <strong id="confirmationTotal">
          Rp0
        </strong>
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

      <button
        class="secondary-button"
        onclick="showStage(6)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button
        class="primary-button"
        id="confirmButton"
      >
        Konfirmasi Keputusan
        <i class="fa-solid fa-check"></i>
      </button>

    </div>


    <div
      id="confirmFeedback"
      class="feedback"
    ></div>


    <button
      class="primary-button hidden"
      id="confirmNext"
    >
      Lihat Konsekuensi
      <i class="fa-solid fa-arrow-right"></i>
    </button>

  </div>

</section>
<!-- ================= 8. KONSEKUENSI ================= -->
<section class="market-stage" data-stage="8">

  <div class="content-card consequence-stage-card">

    <div class="big-icon consequence-icon">
      <i class="fa-solid fa-scale-balanced"></i>
    </div>

    <span class="section-label">
      LIHAT KONSEKUENSI
    </span>

    <h2>
      Inilah akibat dari pilihanmu.
    </h2>

    <p class="instruction">
      Lihat kembali jumlah belanja dan uang yang
      masih tersisa setelah keputusanmu.
    </p>

    <div class="consequence-result">

      <div class="consequence-number">
        <span>Total belanja</span>

        <strong id="consequenceTotal">
          Rp0
        </strong>
      </div>

      <div class="consequence-divider">
        −
      </div>

      <div class="consequence-number">
        <span>Uang tersisa</span>

        <strong id="consequenceRemaining">
          Rp50.000
        </strong>
      </div>

    </div>


    <div class="impact-section">

      <div class="impact-header">
        <span>
          Uang yang digunakan
        </span>

        <strong id="impactPercent">
          0%
        </strong>
      </div>

      <div class="impact-bar">
        <div id="impactFill"></div>
      </div>

    </div>


    <div
      class="consequence-message"
      id="consequenceMessage"
    >

      <div class="consequence-message-icon">
        <i class="fa-solid fa-comment-dots"></i>
      </div>

      <p id="consequenceText"></p>

    </div>


    <div class="mission-actions">

      <button
        class="secondary-button"
        onclick="showStage(7)"
      >
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </button>

      <button class="primary-button next-stage">
        Lanjut Refleksi
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>

</section>
<!-- ================= 9. REFLEKSI ================= -->
<section class="market-stage" data-stage="9">

  <div class="content-card reflection-stage-card">

    <!-- BAGIAN REFLEKSI -->
    <div id="reflectionArea">

      <div class="big-icon reflection-icon">
        <i class="fa-solid fa-lightbulb"></i>
      </div>

      <span class="section-label">
        REFLEKSI
      </span>

      <h2>
        Apa yang kamu pertimbangkan saat berbelanja?
      </h2>

      <p class="instruction">
        Ceritakan secara singkat alasanmu memilih barang
        dan mempertimbangkan uang yang tersisa.
      </p>

      <div class="reflection-prompt">

        <div class="prompt-icon">
          <i class="fa-solid fa-comment"></i>
        </div>

        <div>
          <strong>Ingat perjalananmu</strong>

          <p>
            Kamu sudah mengamati barang, menentukan prioritas,
            memilih barang, menghitung total belanja,
            dan melihat akibat dari keputusanmu.
          </p>
        </div>

      </div>

      <textarea
        id="reflection"
        rows="5"
        placeholder="Ceritakan pengalamanmu..."
      ></textarea>

      <p
        id="saveMessage"
        class="save-message"
      ></p>

      <div class="mission-actions">

        <button
          class="secondary-button"
          onclick="showStage(8)"
        >
          <i class="fa-solid fa-arrow-left"></i>
          Kembali
        </button>

        <button
          class="primary-button"
          id="saveReflection"
        >
          Simpan Refleksi
          <i class="fa-solid fa-floppy-disk"></i>
        </button>

      </div>

    </div>


    <!-- HASIL MISI -->
    <div
      id="marketComplete"
      class="market-complete hidden"
    >

      <div class="complete-icon">
        <i class="fa-solid fa-store"></i>
      </div>

      <span class="section-label">
        MISI SELESAI
      </span>

      <h2>
        Hebat, Penjelajah!
      </h2>

      <p class="complete-text">
        Kamu berhasil menyelesaikan misi
        <strong>Petualangan di Pasar</strong>.
      </p>


      <div class="complete-reward">

        <i class="fa-solid fa-star"></i>

        <div>
          <span>Hadiah Misi</span>
          <strong>+100 XP</strong>
        </div>

      </div>


      <div class="complete-summary">

        <div>
          <i class="fa-solid fa-book-open"></i>
          <span>Pahami situasi</span>
        </div>

        <div>
          <i class="fa-solid fa-list-check"></i>
          <span>Tentukan prioritas</span>
        </div>

        <div>
          <i class="fa-solid fa-basket-shopping"></i>
          <span>Pilih barang</span>
        </div>

        <div>
          <i class="fa-solid fa-calculator"></i>
          <span>Hitung & pertimbangkan</span>
        </div>

      </div>


      <p class="complete-message">
        Keputusanmu telah membawa perjalanan sampai selesai.
        Saatnya melanjutkan petualangan ke lokasi berikutnya!
      </p>


      <a
        href="{{ route('jelajah.map') }}"
        class="primary-button complete-button"
      >
        Kembali ke Peta
        <i class="fa-solid fa-map"></i>
      </a>

    </div>

  </div>

</section>
</main>


<script>

const stages = [
  ...document.querySelectorAll(".market-stage")
];

const progressFill =
  document.getElementById("progressFill");

const stageText =
  document.getElementById("stageText");

let currentStage = 1;

const initialMoney = 50000;

let selectedProducts = [];


/* ================= NAVIGASI ================= */

function showStage(stageNumber) {

  currentStage = stageNumber;

  stages.forEach(stage => {

    stage.classList.toggle(
      "active",
      Number(stage.dataset.stage) === stageNumber
    );

  });

  const percentage =
    ((stageNumber - 1) / (stages.length - 1)) * 100;

  progressFill.style.width =
    percentage + "%";

  stageText.textContent =
    `${stageNumber} dari ${stages.length}`;

  updateShopping();

  if (stageNumber === 7) {
    createConfirmation();
  }

  if (stageNumber === 8) {
    createConsequence();
  }

  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}


document.querySelectorAll(".next-stage")
  .forEach(button => {

    button.addEventListener("click", () => {

      if (currentStage < stages.length) {
        showStage(currentStage + 1);
      }

    });

  });
/* ================= TENTUKAN PRIORITAS ================= */

const priorityItems =
  document.querySelectorAll(".priority-item");

const priorityCount =
  document.getElementById("priorityCount");

const priorityTotal =
  document.getElementById("priorityTotal");

const priorityNext =
  document.getElementById("priorityNext");

const priorityFeedback =
  document.getElementById("priorityFeedback");


const priorityPrices = {
  "Beras": 15000,
  "Sayur": 7000,
  "Telur": 12000,
  "Camilan": 8000
};


let selectedPriority = [];


priorityItems.forEach(item => {

  item.addEventListener("click", () => {

    const name = item.dataset.name;

    const index =
      selectedPriority.indexOf(name);


    if (index >= 0) {

      selectedPriority.splice(index, 1);

      item.classList.remove("selected");

    } else {

      selectedPriority.push(name);

      item.classList.add("selected");

    }


    updatePriority();

  });

});


function updatePriority() {

  const total =
    selectedPriority.reduce(
      (sum, name) =>
        sum + priorityPrices[name],
      0
    );


  priorityCount.textContent =
    `${selectedPriority.length} barang`;


  priorityTotal.textContent =
    rupiah(total);


  if (selectedPriority.length === 0) {

    priorityNext.disabled = true;

    priorityFeedback.textContent = "";

    priorityFeedback.className =
      "feedback";

    return;
  }


  priorityNext.disabled = false;

  priorityFeedback.textContent =
    "Pilihanmu sudah dicatat. Selanjutnya kamu akan menentukan belanja.";

  priorityFeedback.className =
    "feedback";
}
/* =================
   LANJUT DARI PRIORITAS
================= */

priorityNext.addEventListener("click", () => {

  if (selectedPriority.length === 0) {
    return;
  }

  showStage(5);

});
/* ================= BELANJA ================= */
/* ================= BELANJA ================= */

const shoppingItems =
  document.querySelectorAll(".shopping-item");

const remainingMoneyEl =
  document.getElementById("remainingMoney");

const selectedItemsEl =
  document.getElementById("selectedItems");

const shoppingTotalEl =
  document.getElementById("shoppingTotal");

const shoppingNext =
  document.getElementById("shoppingNext");

const shoppingFeedback =
  document.getElementById("shoppingFeedback");


shoppingItems.forEach(item => {

  item.addEventListener("click", () => {

    const name = item.dataset.name;
    const price = Number(item.dataset.price);

    const index = selectedProducts.findIndex(
      product => product.name === name
    );


    /* =================
       BATALKAN BARANG
    ================= */

    if (index !== -1) {

      selectedProducts.splice(index, 1);

      item.classList.remove("selected");

    }


    /* =================
       TAMBAHKAN BARANG
    ================= */

    else {

      const currentTotal = selectedProducts.reduce(
        (total, product) =>
          total + product.price,
        0
      );

      if (currentTotal + price > initialMoney) {

        shoppingFeedback.textContent =
          "Uang Ibu tidak cukup untuk membeli barang tersebut.";

        shoppingFeedback.className =
          "feedback error";

        return;
      };

      selectedProducts.push({
        name: name,
        price: price
      });

      item.classList.add("selected");

    }


    updateShoppingCart();

  });

});


function updateShoppingCart() {

  const total = selectedProducts.reduce(
    (sum, product) =>
      sum + product.price,
    0
  );

  const remaining =
    initialMoney - total;


  /* SISA UANG */

  remainingMoneyEl.textContent =
    rupiah(remaining);


  /* TOTAL BELANJA */

  shoppingTotalEl.textContent =
    rupiah(total);


  /* DAFTAR BARANG */

  if (selectedProducts.length === 0) {

    selectedItemsEl.textContent =
      "Belum ada barang yang dipilih";

    shoppingNext.disabled = true;

  } else {

    selectedItemsEl.textContent =
      selectedProducts
        .map(product => product.name)
        .join(", ");

    shoppingNext.disabled = false;

  }


  /* DATA UNTUK STAGE 6 */

  const calculationTotal =
    document.getElementById("calculationTotal");

  const calculationRemaining =
    document.getElementById("calculationRemaining");

  if (calculationTotal) {
    calculationTotal.textContent =
      rupiah(total);
  }

  if (calculationRemaining) {
    calculationRemaining.textContent =
      rupiah(remaining);
  }

}


shoppingNext.addEventListener("click", () => {

  if (selectedProducts.length === 0) {

    shoppingFeedback.textContent =
      "Pilih minimal satu barang terlebih dahulu.";

    shoppingFeedback.className =
      "feedback error";

    return;
  }

  showStage(6);

});


function getTotal() {

  return selectedProducts.reduce(
    (sum, product) => sum + product.price,
    0
  );

}


function rupiah(number) {

  return "Rp" +
    number.toLocaleString("id-ID");

}


function updateShopping() {

  const total = getTotal();

  const remaining =
    initialMoney - total;


  remainingMoney.textContent =
    rupiah(remaining);


  shoppingTotal.textContent =
    rupiah(total);


  document.getElementById(
    "calculationTotal"
  ).textContent =
    rupiah(total);


  document.getElementById(
    "calculationRemaining"
  ).textContent =
    rupiah(remaining);


  document.getElementById(
    "confirmationTotal"
  ).textContent =
    rupiah(total);


  if (selectedProducts.length === 0) {

    selectedItems.textContent =
      "Belum ada barang yang dipilih";

    shoppingNext.disabled = true;

  } else {

    selectedItems.textContent =
      selectedProducts
        .map(product => product.name)
        .join(", ");

    shoppingNext.disabled = false;

  }

}


shoppingNext.addEventListener("click", () => {

  if (selectedProducts.length === 0) {

    shoppingFeedback.textContent =
      "Pilih barang terlebih dahulu.";

    shoppingFeedback.className =
      "feedback error";

    return;
  }

  shoppingFeedback.textContent = "";

  showStage(6);

});

function getTotal() {

  return selectedProducts.reduce(
    (sum, product) => sum + product.price,
    0
  );

}
function rupiah(number) {

  return "Rp" +
    number.toLocaleString("id-ID");

}


function updateShopping() {

  const total = getTotal();

  const remaining =
    initialMoney - total;


  document.getElementById(
    "remainingMoney"
  ).textContent = rupiah(remaining);


  document.getElementById(
    "calculationTotal"
  ).textContent = rupiah(total);


  document.getElementById(
    "calculationRemaining"
  ).textContent = rupiah(remaining);


  document.getElementById(
    "confirmationTotal"
  ).textContent = rupiah(total);


  const selectedText =
    document.getElementById("selectedItems");


  if (selectedProducts.length === 0) {

    selectedText.textContent =
      "Belum ada barang";

  } else {

    selectedText.textContent =
      selectedProducts
        .map(product => product.name)
        .join(", ");

  }

}


document
  .getElementById("shoppingNext")
  .addEventListener("click", () => {

    if (selectedProducts.length === 0) {

      alert(
        "Pilih setidaknya satu barang terlebih dahulu."
      );

      return;
    }

    showStage(6);

  });
/* ================= PERTIMBANGAN ================= */

const considerationButton =
  document.getElementById("considerationNext");

const reconsiderButton =
  document.getElementById("reconsiderButton");

const continueToConfirmation =
  document.getElementById("continueToConfirmation");

const considerationFeedback =
  document.getElementById("considerationFeedback");

considerationButton.addEventListener("click", () => {

  considerationFeedback.textContent =
    "Bagus! Kamu sudah mempertimbangkan jumlah belanja dan uang yang tersisa.";

  considerationFeedback.className =
    "feedback success";

  considerationButton.disabled = true;

  if (reconsiderButton) {
    reconsiderButton.disabled = true;
  }

  continueToConfirmation.classList.remove("hidden");

});


reconsiderButton.addEventListener("click", () => {

  considerationFeedback.textContent =
    "Kamu bisa mengubah kembali barang yang akan dibeli.";

  considerationFeedback.className =
    "feedback";

  showStage(5);

});


continueToConfirmation.addEventListener("click", () => {

  showStage(7);

});
/* ================= KONFIRMASI ================= */
/* ================= KONFIRMASI ================= */

const confirmButton =
  document.getElementById("confirmButton");

const confirmFeedback =
  document.getElementById("confirmFeedback");

const confirmNext =
  document.getElementById("confirmNext");


confirmButton.addEventListener("click", () => {

  confirmButton.disabled = true;

  confirmButton.classList.add("confirmed");

  confirmButton.innerHTML = `
    <i class="fa-solid fa-circle-check"></i>
    Sudah Dikonfirmasi
  `;

  confirmFeedback.textContent =
    "Keputusan belanjamu sudah dikonfirmasi.";

  confirmFeedback.className =
    "feedback success";

  confirmNext.classList.remove("hidden");

});


/* Lihat Konsekuensi */

confirmNext.addEventListener("click", () => {

  showStage(8);

});

/* ================= KONSEKUENSI ================= */
/* ================= KONSEKUENSI ================= */

function createConsequence() {

  const total =
    getTotal();

  const remaining =
    initialMoney - total;


  const percentage =
    (total / initialMoney) * 100;


  document.getElementById(
    "consequenceTotal"
  ).textContent =
    rupiah(total);


  document.getElementById(
    "consequenceRemaining"
  ).textContent =
    rupiah(remaining);;
  document.getElementById(
    "impactFill"
  ).style.width =
    percentage + "%";


  document.getElementById(
    "impactPercent"
  ).textContent =
    Math.round(percentage) + "%";


  const text =
    document.getElementById(
      "consequenceText"
    );


  /*
   * Konsekuensi berdasarkan
   * jumlah uang yang tersisa.
   */

  if (remaining >= 20000) {

    text.textContent =
      "Uang yang tersisa masih cukup untuk kebutuhan lain. Pilihan belanjamu membuat sebagian uang tetap tersedia.";

  }

  else if (remaining >= 10000) {

    text.textContent =
      "Uang yang tersisa masih ada, tetapi jumlahnya lebih sedikit. Kamu perlu mempertimbangkan kebutuhan lain dengan lebih hati-hati.";

  }

  else {

    text.textContent =
      "Sebagian besar uang sudah digunakan. Pilihanmu membuat sisa uang menjadi sedikit untuk kebutuhan lainnya.";

  }

}
/* ================= REFLEKSI ================= */

document
  .getElementById("saveReflection")
  .addEventListener("click", () => {

    const reflection =
      document
        .getElementById("reflection")
        .value
        .trim();


    const message =
      document.getElementById(
        "saveMessage"
      );


    if (!reflection) {

      message.textContent =
        "Tuliskan refleksimu terlebih dahulu.";

      message.className =
        "save-message error-text";

      return;
    }


  message.textContent =
  "Refleksi berhasil disimpan.";

message.className =
  "save-message success-text";

setTimeout(() => {

  document
    .getElementById("reflectionArea")
    .classList.add("hidden");

  document
    .getElementById("marketComplete")
    .classList.remove("hidden");

}, 700);

  });


/* Mulai dari tahap pertama */

showStage(1);

</script>

</body>
</html>