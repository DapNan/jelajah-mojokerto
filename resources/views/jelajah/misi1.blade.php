<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Misi 1 - Candi Bajang Ratu | map Mojokerto</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('jelajah/css/misi1.css') }}">
</head>

<body>
  <main class="mission-app">

    <header class="mission-topbar">
      <a href="{{ route('jelajah.map') }}" class="back-button">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
      </a>

      <div class="mission-progress-wrap">
        <span id="stageText">1 dari 8</span>
        <div class="progress-track">
          <div class="progress-fill" id="progressFill"></div>
        </div>
      </div>
    </header>

    <!-- 1. CANDI -->
    <section class="mission-stage active" data-stage="1">
      <div class="stage-content hero-stage">
        <div class="stage-badge">MISI 1</div>
        <h1>Petualangan<br>Candi Bajang Ratu</h1>
        <p class="stage-subtitle">
          Perjalananmu dimulai dari sebuah peninggalan budaya.
          Amati, baca, pilih, lalu selesaikan tantangannya.
        </p>

       <div class="mission-actions">

  <a href="{{ route('jelajah.map') }}" class="secondary-button">
    <i class="fa-solid fa-map"></i>
    Kembali ke Peta
  </a>

  <button type="button" class="primary-button next-stage">
    Mulai Petualangan
    <i class="fa-solid fa-arrow-right"></i>
  </button>

</div>
      </div>
    </section>

    <!-- 2. CERITA -->
    <section class="mission-stage" data-stage="2">
      <div class="stage-content">
        <div class="story-card">
          <span class="mini-label">CERITA PEMBUKA</span>
          <h2>Kamu sudah tiba di Candi Bajang Ratu.</h2>
          <p>
            Hari ini kamu berperan sebagai penjelajah muda.
            Tugasmu adalah mengamati lingkungan candi, membaca
            informasi, lalu mengambil keputusan untuk menyelesaikan misi.
          </p>
          <p>
            Perhatikan setiap petunjuk karena keputusanmu akan
            menentukan langkah berikutnya.
          </p>
<div class="mission-actions">

  <button type="button"
          class="secondary-button"
          onclick="showStage(1)">
    <i class="fa-solid fa-arrow-left"></i>
    Kembali
  </button>

  <button type="button" class="primary-button next-stage">
    Lanjut Eksplorasi
    <i class="fa-solid fa-arrow-right"></i>
  </button>

</div>
        </div>
      </div>
    </section>
    <!-- ================= 3. EKSPLORASI ================= -->
<section class="mission-stage" data-stage="3">

  <div class="stage-content">

    <div class="explore-card">

      <span class="mini-label">
        EKSPLORASI CANDI
      </span>

      <h2>
        Temukan bagian menarik dari Candi Bajang Ratu!
      </h2>

      <p class="explore-description">
        Amati gambar berikut, lalu klik bagian candi
        yang ingin kamu pelajari.
      </p>


      <!-- AREA GAMBAR -->
      <div class="candi-explore">

        <img
          src="assets/candibajangratu.jpg"
          alt="Candi Bajang Ratu"
        >


        <!-- HOTSPOT 1 -->
        <button
          class="candi-hotspot hotspot-tangga"
          data-title="Tangga Candi"
          data-info="Tangga merupakan bagian yang digunakan untuk menuju bagian atas atau area masuk candi."
        >
          <span>1</span>
        </button>


        <!-- HOTSPOT 2 -->
        <button
          class="candi-hotspot hotspot-pintu"
          data-title="Pintu Candi"
          data-info="Bagian pintu merupakan salah satu bagian penting yang dapat diamati dari bentuk bangunan candi."
        >
          <span>2</span>
        </button>


        <!-- HOTSPOT 3 -->
        <button
          class="candi-hotspot hotspot-bangunan"
          data-title="Bangunan Candi"
          data-info="Bangunan candi memiliki susunan dan bentuk yang dapat diamati untuk mengenal karakteristiknya."
        >
          <span>3</span>
        </button>

      </div>

      <!-- PROGRESS -->
      <div class="explore-progress">

        <span id="exploreCount">
          0 / 3 bagian ditemukan
        </span>

        <div class="explore-progress-track">
          <div
            class="explore-progress-fill"
            id="exploreProgressFill"
          ></div>
        </div>

      </div>

<div class="mission-actions">

  <button type="button"
          class="secondary-button"
          onclick="showStage(2)">
    <i class="fa-solid fa-arrow-left"></i>
    Kembali
  </button>

  <button
    type="button"
    class="primary-button hidden"
    id="exploreNext"
  >
    Lanjut ke Informasi
    <i class="fa-solid fa-arrow-right"></i>
  </button>

</div>


<!-- POP-UP INFORMASI -->
<div class="explore-modal" id="exploreModal">

  <div class="explore-modal-box">

    <button class="explore-modal-close" id="closeExploreModal">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <div class="explore-modal-icon">
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <span class="mini-label">HASIL EKSPLORASI</span>

    <h3 id="modalExploreTitle">
      Bagian Candi
    </h3>

    <p id="modalExploreText">
      Informasi bagian candi akan muncul di sini.
    </p>

    <button class="primary-button" id="modalOkButton">
      Mengerti
      <i class="fa-solid fa-check"></i>
    </button>

  </div>

</div>
    </div>

  </div>

</section>

    <!-- 4. BACA INFORMASI -->
<section class="mission-stage" data-stage="4">
  <div class="stage-content">

    <div class="info-card">

      <span class="mini-label">BACA INFORMASI</span>

      <h2>Kenali Candi Bajang Ratu</h2>

      <p class="info-intro">
        Kamu sudah menemukan beberapa informasi saat mengeksplorasi
        Candi Bajang Ratu. Sekarang, baca kembali informasi berikut
        karena akan digunakan untuk menyelesaikan tantangan selanjutnya.
      </p>

      <div class="reading-box">

        <div class="reading-item">
          <div class="reading-icon">
            <i class="fa-solid fa-landmark"></i>
          </div>

          <div>
            <h3>Candi Bajang Ratu</h3>
            <p>
              Candi Bajang Ratu merupakan salah satu peninggalan
              bersejarah yang berada di kawasan Trowulan, Mojokerto.
            </p>
          </div>
        </div>

        <div class="reading-item">
          <div class="reading-icon">
            <i class="fa-solid fa-shapes"></i>
          </div>

          <div>
            <h3>Bentuk dan Bagian Candi</h3>
            <p>
              Candi memiliki beberapa bagian dengan bentuk dan ukuran
              yang dapat diamati. Bentuk tersebut dapat membantu kita
              mengenali dan mempelajari berbagai konsep matematika.
            </p>
          </div>
        </div>

        <div class="reading-item">
          <div class="reading-icon">
            <i class="fa-solid fa-ruler-combined"></i>
          </div>

          <div>
            <h3>Ukuran dan Perhitungan</h3>
            <p>
              Informasi tentang panjang, lebar, atau ukuran suatu bagian
              dapat digunakan untuk melakukan perhitungan sederhana.
            </p>
          </div>
        </div>

      </div>

      <div class="info-tip">
        <i class="fa-solid fa-lightbulb"></i>
        <span>
          Ingat informasi penting yang kamu baca.
          Setelah ini, kamu akan diminta membuat keputusan
          berdasarkan informasi yang telah kamu temukan.
        </span>
      </div>

      <div class="mission-actions">

        <button class="secondary-button" onclick="showStage(3)">
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
<!-- 5. AMBIL KEPUTUSAN -->
<section class="mission-stage" data-stage="5">
  <div class="stage-content">

    <div class="question-card decision-card">

      <span class="mini-label">AMBIL KEPUTUSAN</span>

      <h2>
        Kamu menemukan beberapa bagian menarik
        dari Candi Bajang Ratu.
      </h2>

      <p class="decision-intro">
        Kamu ingin mengamati candi lebih dekat.
        Pilih tindakan yang menurutmu tepat sebagai
        seorang penjelajah yang menjaga peninggalan sejarah.
      </p>

      <div class="choice-grid decision-choices">

        <button class="choice-button" data-correct="true">
          <span class="choice-letter">A</span>
          <span class="choice-text">
            Mengamati dari jarak aman dan menjaga lingkungan candi
          </span>
        </button>

        <button class="choice-button" data-correct="false">
          <span class="choice-letter">B</span>
          <span class="choice-text">
            Menyentuh bagian bangunan agar bisa melihat lebih dekat
          </span>
        </button>

        <button class="choice-button" data-correct="false">
          <span class="choice-letter">C</span>
          <span class="choice-text">
            Menaiki bagian candi agar dapat melihat lebih luas
          </span>
        </button>

      </div>

      <div class="feedback-box" id="decisionFeedback"></div>

      <div class="mission-actions">

        <button class="secondary-button" onclick="showStage(4)">
          <i class="fa-solid fa-arrow-left"></i>
          Kembali
        </button>

        <button class="primary-button hidden next-stage" id="decisionNext">
          Lanjut Tantangan
          <i class="fa-solid fa-arrow-right"></i>
        </button>

      </div>

    </div>

  </div>
</section>
<!-- 6. NUMERASI -->
<section class="mission-stage" data-stage="6">
  <div class="stage-content">

    <div class="question-card numeracy-card">

      <span class="mini-label">TANTANGAN NUMERASI</span>

      <h2>Hitung Luas Area</h2>

      <p class="numeracy-intro">
        Kamu menemukan sebuah area berbentuk persegi panjang
        di sekitar candi. Gunakan informasi berikut untuk
        menentukan luasnya.
      </p>

      <div class="measurement-box">

        <div class="measurement-item">
          <i class="fa-solid fa-arrows-left-right"></i>
          <span>Panjang</span>
          <strong>8 meter</strong>
        </div>

        <div class="measurement-item">
          <i class="fa-solid fa-arrows-up-down"></i>
          <span>Lebar</span>
          <strong>4 meter</strong>
        </div>

      </div>

      <div class="formula-box">
        <span>Luas = Panjang × Lebar</span>
        <strong>8 × 4 = ?</strong>
      </div>

      <p class="drag-instruction">
        Seret jawaban yang tepat ke kotak di bawah.
      </p>

      <div class="drop-area" id="answerDrop">
        <i class="fa-solid fa-arrow-down"></i>
        <span>Letakkan jawaban di sini</span>
      </div>

      <div class="answer-options" id="answerOptions">

        <div class="answer-item" draggable="true" data-answer="24">
          24
        </div>

        <div class="answer-item" draggable="true" data-answer="32">
          32
        </div>

        <div class="answer-item" draggable="true" data-answer="36">
          36
        </div>

        <div class="answer-item" draggable="true" data-answer="12">
          12
        </div>

      </div>

      <div class="feedback-box" id="numeracyFeedback"></div>

      <div class="mission-actions">

        <button class="secondary-button" onclick="showStage(5)">
          <i class="fa-solid fa-arrow-left"></i>
          Kembali
        </button>

        <button class="primary-button hidden next-stage" id="numeracyNext">
          Tentukan Hasil
          <i class="fa-solid fa-arrow-right"></i>
        </button>

      </div>

    </div>

  </div>
</section>
 <!-- 7. CANDI BEREAKSI -->
<section class="mission-stage" data-stage="7">
  <div class="stage-content">

    <div class="reaction-card">

      <div class="reaction-badge">
        <i class="fa-solid fa-star"></i>
      </div>

      <span class="mini-label">MISI BERHASIL</span>

      <h2>Candi Bajang Ratu Bereaksi!</h2>

      <p class="reaction-text">
        Kamu berhasil menggunakan informasi yang ditemukan
        dan menyelesaikan tantangan numerasi.
      </p>

      <div class="candi-reaction">

        <div class="candi-light"></div>

        <img
          src="assets/candibajangratu.jpg"
          alt="Candi Bajang Ratu"
        >

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
            Pengetahuan yang kamu temukan membantu
            membuka perjalanan berikutnya.
          </span>
        </div>
      </div>

      <div class="xp-reward">
        <i class="fa-solid fa-star"></i>
        <strong>+100 XP</strong>
      </div>

      <div class="mission-actions">

        <button
          class="secondary-button"
          onclick="showStage(6)"
        >
          <i class="fa-solid fa-arrow-left"></i>
          Kembali
        </button>

        <button class="primary-button next-stage">
          Lihat Hasil Misi
          <i class="fa-solid fa-arrow-right"></i>
        </button>

      </div>

    </div>

  </div>
</section>
<!-- 8. HASIL & REFLEKSI -->
<section class="mission-stage" data-stage="8">
  <div class="stage-content">

    <div class="result-card">

      <div class="mission-complete-icon">
        <i class="fa-solid fa-trophy"></i>
      </div>

      <span class="mini-label">MISI SELESAI</span>

      <h2>Hebat, Penjelajah!</h2>

      <p class="result-intro">
        Kamu berhasil menyelesaikan perjalanan
        di Candi Bajang Ratu.
      </p>

      <div class="achievement-box">

        <div class="achievement-item">
          <i class="fa-solid fa-compass"></i>
          <span>Eksplorasi</span>
          <strong>Selesai</strong>
        </div>

        <div class="achievement-item">
          <i class="fa-solid fa-brain"></i>
          <span>Keputusan</span>
          <strong>Selesai</strong>
        </div>

        <div class="achievement-item">
          <i class="fa-solid fa-calculator"></i>
          <span>Numerasi</span>
          <strong>Selesai</strong>
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
          Apa hal baru yang kamu pelajari
          dari perjalanan di candi?
        </h3>

        <textarea
          id="reflection"
          rows="5"
          placeholder="Ceritakan pengalamanmu..."
        ></textarea>

        <p class="save-message" id="saveMessage"></p>

      </div>

      <div class="mission-actions">

        <button
          class="secondary-button"
          id="saveReflection"
        >
          <i class="fa-solid fa-floppy-disk"></i>
          Simpan Refleksi
        </button>

        <a
          href="{{ route('jelajah.map') }}"
          class="primary-button link-button"
        >
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
    let currentStage = 1;

    function showStage(stageNumber) {
      currentStage = stageNumber;

      stages.forEach(stage => {
        stage.classList.toggle(
          'active',
          Number(stage.dataset.stage) === stageNumber
        );
      });

      const percent = ((stageNumber - 1) / (stages.length - 1)) * 100;
      progressFill.style.width = `${percent}%`;
      stageText.textContent = `${stageNumber} dari ${stages.length}`;

      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    document.querySelectorAll('.next-stage').forEach(button => {
      button.addEventListener('click', () => {
        if (currentStage < stages.length) {
          showStage(currentStage + 1);
        }
      });
    });

    // Keputusan
    const decisionChoices = document.querySelectorAll('.decision-choices .choice-button');
    const decisionFeedback = document.getElementById('decisionFeedback');
    const decisionNext = document.getElementById('decisionNext');

    decisionChoices.forEach(button => {
      button.addEventListener('click', () => {
        const isCorrect = button.dataset.correct === 'true';

        decisionChoices.forEach(choice => {
          choice.disabled = true;
        });

        if (isCorrect) {
          button.classList.add('correct');
          decisionFeedback.textContent =
            'Tepat! Kamu memilih tindakan yang menjaga kawasan candi.';
          decisionFeedback.className = 'feedback-box success';
          decisionNext.classList.remove('hidden');
        } else {
          button.classList.add('wrong');
          decisionFeedback.textContent =
            'Belum tepat. Pilih tindakan yang menjaga kawasan candi.';
          decisionFeedback.className = 'feedback-box error';

          setTimeout(() => {
            decisionChoices.forEach(choice => {
              if (!choice.classList.contains('wrong')) {
                choice.disabled = false;
              }
            });
          }, 650);
        }
      });
    });
// ================= NUMERASI =================

const answerOptions = document.querySelectorAll('.answer-item');
const answerDrop = document.getElementById('answerDrop');
const numeracyFeedback = document.getElementById('numeracyFeedback');
const numeracyNext = document.getElementById('numeracyNext');

let selectedAnswer = null;


// ================= TAP / KLIK =================

answerOptions.forEach(item => {

  item.addEventListener('click', () => {

    // hapus pilihan sebelumnya
    answerOptions.forEach(option => {
      option.classList.remove('selected');
    });

    // pilih angka
    item.classList.add('selected');

    selectedAnswer = item.dataset.answer;

    // ubah petunjuk
    answerDrop.innerHTML = `
      <i class="fa-solid fa-arrow-down"></i>
      <span>Tap kotak ini untuk memasukkan jawaban</span>
    `;

  });

});


// ================= TAP KOTAK =================

answerDrop.addEventListener('click', () => {

  if (!selectedAnswer) {

    numeracyFeedback.textContent =
      'Pilih salah satu jawaban terlebih dahulu.';

    numeracyFeedback.className =
      'feedback-box error';

    return;
  }

  checkNumeracyAnswer(selectedAnswer);

});


// ================= DRAG DESKTOP =================

answerOptions.forEach(item => {

  item.addEventListener('dragstart', (e) => {

    e.dataTransfer.setData(
      'text/plain',
      item.dataset.answer
    );

    item.classList.add('dragging');

  });

  item.addEventListener('dragend', () => {
    item.classList.remove('dragging');
  });

});


answerDrop.addEventListener('dragover', (e) => {

  e.preventDefault();

  answerDrop.classList.add('drag-over');

});


answerDrop.addEventListener('dragleave', () => {

  answerDrop.classList.remove('drag-over');

});


answerDrop.addEventListener('drop', (e) => {

  e.preventDefault();

  answerDrop.classList.remove('drag-over');

  const answer =
    e.dataTransfer.getData('text/plain');

  checkNumeracyAnswer(answer);

});


// ================= CEK JAWABAN =================

function checkNumeracyAnswer(answer) {

  if (answer === '32') {

    answerDrop.classList.remove('wrong');
    answerDrop.classList.add('correct');

    answerDrop.innerHTML = `
      <i class="fa-solid fa-circle-check"></i>
      <strong>32 m²</strong>
    `;

    numeracyFeedback.textContent =
      'Benar! Luas area tersebut adalah 8 × 4 = 32 m².';

    numeracyFeedback.className =
      'feedback-box success';

    answerOptions.forEach(item => {

      item.classList.remove('selected');
      item.draggable = false;
      item.style.opacity = '0.5';

    });

    numeracyNext.classList.remove('hidden');

    selectedAnswer = null;

  } else {

    answerDrop.classList.remove('correct');
    answerDrop.classList.add('wrong');

    numeracyFeedback.textContent =
      'Belum tepat. Coba hitung kembali panjang × lebar.';

    numeracyFeedback.className =
      'feedback-box error';

    setTimeout(() => {

      answerDrop.classList.remove('wrong');

    }, 500);

  }

}


    // Refleksi
    document.getElementById('saveReflection').addEventListener('click', () => {
      const reflection = document.getElementById('reflection').value.trim();
      const saveMessage = document.getElementById('saveMessage');

      if (!reflection) {
        saveMessage.textContent = 'Tuliskan refleksimu terlebih dahulu.';
        saveMessage.className = 'save-message error-text';
        return;
      }

      saveMessage.textContent = 'Refleksi berhasil disimpan.';
      saveMessage.className = 'save-message success-text';
    });

    showStage(1);
    // ================= EKSPLORASI CANDI =================

const hotspots =
  document.querySelectorAll(".candi-hotspot");

const exploreCount =
  document.getElementById("exploreCount");

const exploreProgressFill =
  document.getElementById("exploreProgressFill");

const exploreNext =
  document.getElementById("exploreNext");

const exploreModal =
  document.getElementById("exploreModal");

const modalExploreTitle =
  document.getElementById("modalExploreTitle");

const modalExploreText =
  document.getElementById("modalExploreText");

const closeExploreModal =
  document.getElementById("closeExploreModal");

const modalOkButton =
  document.getElementById("modalOkButton");

let foundHotspots = 0;
let lastHotspotWasLast = false;


// Membuka popup
function openExploreModal(title, text) {

  modalExploreTitle.textContent = title;
  modalExploreText.textContent = text;

  exploreModal.classList.add("show");
}


// Menutup popup
function closeExplore() {

  exploreModal.classList.remove("show");

  /*
   * Kalau yang baru saja dibuka adalah
   * hotspot terakhir, tampilkan selesai.
   */
  if (lastHotspotWasLast) {

    exploreCount.textContent =
      "3 / 3 bagian ditemukan ✓";

    exploreCount.classList.add(
      "explore-complete"
    );

    exploreProgressFill.style.width = "100%";

    exploreNext.classList.remove(
      "hidden"
    );

    lastHotspotWasLast = false;
  }
}


// Tombol "Mengerti"
closeExploreModal.addEventListener(
  "click",
  closeExplore
);

modalOkButton.addEventListener(
  "click",
  closeExplore
);
document
  .getElementById("exploreNext")
  .addEventListener("click", () => {
    showStage(4);
  });

// Klik hotspot
hotspots.forEach(hotspot => {

  hotspot.addEventListener("click", () => {

    // Jangan bisa diklik dua kali
    if (
      hotspot.classList.contains("found")
    ) {
      return;
    }


    hotspot.classList.add("found");

    foundHotspots++;


    // Update jumlah
    exploreCount.textContent =
      `${foundHotspots} / ${hotspots.length} bagian ditemukan`;


    // Update progress bar
    const percentage =
      (foundHotspots / hotspots.length) * 100;

    exploreProgressFill.style.width =
      percentage + "%";


    /*
     * Kalau ini nomor 3:
     * tetap tampilkan definisinya,
     * tetapi jangan langsung menampilkan tombol lanjut.
     */
    if (
      foundHotspots === hotspots.length
    ) {

      lastHotspotWasLast = true;

      openExploreModal(
        hotspot.dataset.title,
        hotspot.dataset.info
      );

      return;
    }


    /*
     * Nomor 1 dan 2
     * juga tampilkan definisi.
     */
    openExploreModal(
      hotspot.dataset.title,
      hotspot.dataset.info
    );

  });

});
  </script>
</body>
</html>
