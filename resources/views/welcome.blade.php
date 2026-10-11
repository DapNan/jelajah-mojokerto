{{-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Jelajah Mojokerto</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  >
<link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">
</head>

<body>

  <!-- ===================== HALAMAN 1 ===================== -->
  <section class="landing-page" id="tentang">

    <!-- TOPBAR -->
    <header class="topbar">
      <a href="{{ route('login') }}" class="login-badge">LOGIN</a>
    </header>


    <!-- ================= HERO ================= -->
    <div class="hero-logo">

      <img
        src="{{ asset('jelajah/assets/logo.png')}}"
        alt="Jelajah Mojokerto"
        class="logo"
      >

      <p>
        Jelajahi budayanya, selesaikan misinya, ubah dunianya
      </p>

      <a href="{{ route('login') }}" class="start-button">
        Mulai Menjelajah
      </a>

    </div>


    <!-- ================= TENTANG PRODUK ================= -->
    <section class="about-card scroll-reveal">

      <div class="about-text scroll-left">

        <h1>Tentang Produk</h1>

        <p>
          Jelajah Mojokerto merupakan media pembelajaran berbasis gamifikasi
          yang mengajak siswa mengenal budaya dan kearifan lokal Mojokerto
          melalui petualangan, misi, dan aktivitas interaktif.
        </p>

        <p>
          Siswa dapat menjelajahi berbagai tempat, menyelesaikan misi,
          memperoleh pengalaman belajar, dan mengenal budaya Mojokerto dengan
          cara yang lebih menyenangkan.
        </p>

      </div>

      <img
        src="{{ asset('jelajah/assets/karakter.png')}}"
        alt="Karakter penjelajah"
        class="character-about scroll-right"
      >

    </section>


    <!-- ================= CARA BERMAIN ================= -->
    <section class="how-to-play">

      <div class="section-title">
        <h2>Cara Bermain</h2>

        <p>
          Ikuti petualanganmu dan kenali budaya Mojokerto
          melalui setiap misi.
        </p>
      </div>


      <div class="steps">

        <!-- LANGKAH 1 -->
        <div class="step-card stagger-reveal">

          <div class="step-icon">
            🗺️
          </div>

          <h3>Jelajahi</h3>

          <p>
            Temukan berbagai lokasi dan budaya yang ada
            di Mojokerto.
          </p>

        </div>


        <!-- LANGKAH 2 -->
        <div class="step-card stagger-reveal">

          <div class="step-icon">
            🎯
          </div>

          <h3>Selesaikan Misi</h3>

          <p>
            Kerjakan berbagai tantangan dan aktivitas
            pada setiap lokasi.
          </p>

        </div>


        <!-- LANGKAH 3 -->
        <div class="step-card stagger-reveal">

          <div class="step-icon">
            🏆
          </div>

          <h3>Naik Level</h3>

          <p>
            Kumpulkan poin, selesaikan misi,
            dan buka lokasi berikutnya.
          </p>

        </div>

      </div>

    </section>


    <!-- ================= JELAJAHI MOJOKERTO ================= -->
    <section class="explore-section">

      <div class="section-title">

        <h2>Jelajahi Mojokerto</h2>

        <p>
          Temukan berbagai lokasi dalam petualanganmu.
        </p>

      </div>


      <div class="location-preview">

        <!-- CANDI -->
        <div class="preview-card stagger-reveal">

          <img
            src="{{ asset('jelajah/assets/candi.png')}}"
            alt="Candi"
          >

          <h3>Candi</h3>

        </div>


        <!-- PASAR -->
        <div class="preview-card stagger-reveal">

          <img
            src="{{ asset('jelajah/assets/pasar.png')}}"
            alt="Pasar"
          >

          <h3>Pasar</h3>

        </div>


        <!-- SAWAH -->
        <div class="preview-card stagger-reveal">

          <img
            src="{{ asset('jelajah/assets/sawah.png')}}"
            alt="Sawah"
          >

          <h3>Sawah</h3>

        </div>


        <!-- SUNGAI -->
        <div class="preview-card stagger-revea">

          <img
            src="{{ asset('jelajah/assets/sungai.png')}}"
            alt="Sungai"
          >

          <h3>Sungai</h3>

        </div>


        <!-- KAMPUNG -->
        <div class="preview-card stagger-revea">

          <img
            src="{{ asset('jelajah/assets/kampung.png')}}"
            alt="Kampung"
          >

          <h3>Kampung</h3>

        </div>

      </div>


      <!-- CTA -->
      <a href="{{ route('login') }}" class="explore-button">
        Mulai Petualangan
      </a>

    </section>


    <!-- ================= FOOTER ================= -->
    <footer class="footer">

      <p>
        © 2026 Jelajah Mojokerto
      </p>

      <span>
        Media Pembelajaran Berbasis Gamifikasi dan Kearifan Lokal
      </span>

    </footer>

  </section>
<script>
  const revealElements = document.querySelectorAll(
    '.scroll-reveal, .scroll-left, .scroll-right, .stagger-reveal'
  );

  const observer = new IntersectionObserver((entries, observer) => {

    entries.forEach(entry => {

      if (entry.isIntersecting) {

        entry.target.classList.add('show');

        observer.unobserve(entry.target);

      }

    });

  }, {
    threshold: 0.15
  });


  revealElements.forEach(element => {
    observer.observe(element);
  });
</script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#f6f3e9">
  <meta name="description" content="Jelajah Mojokerto — petualangan budaya, literasi, dan numerasi untuk siswa sekolah dasar.">
  <title>Jelajah Mojokerto — Petualangan Budaya</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  
<link rel="stylesheet" href="{{ asset('jelajah/css/stylelandingpage.css') }}">
</head>
<body>
  <div class="intro-screen" id="introScreen" aria-hidden="true">
    <div class="intro-emblem"><img src="{{ asset('jelajah/assets/landingpage/logo.png')}}" alt=""><span>✦</span></div>
    <div class="intro-title">Jelajah Mojokerto</div>
    <div class="intro-loading"><span></span></div>
    <small>Menyiapkan petualanganmu...</small>
  </div>
  <div class="page-noise" aria-hidden="true"></div>
  <header class="site-header" id="beranda">
    <a class="brand" href="#beranda" aria-label="Jelajah Mojokerto beranda">
      <span class="brand-mark"><span><img src="{{ asset('jelajah/assets/landingpage/logo.png')}}" alt=""></span><i>✦</i></span>
      <span class="brand-name">Jelajah<span>Mojokerto</span></span>
    </a>
    <button class="menu-toggle" id="menuToggle" aria-label="Buka navigasi" aria-expanded="false">☰</button>
    <nav class="nav-links" id="navLinks">
      <a class="active" href="#beranda">Beranda</a>
      <a href="#petualangan">Petualangan</a>
      <a href="#cara-bermain">Cara Bermain</a>
      <a href="#tentang">Tentang</a>
    </nav>
    <a class="nav-cta" href="{{ route('login') }}">Mulai Jelajah <span>↗</span></a>
  </header>

  <main>
    <section class="hero section-wrap">
      <div class="hero-copy">
        <div class="eyebrow"><span class="eyebrow-dot"></span> MEDIA BELAJAR INTERAKTIF • MOJOKERTO</div>
        <h1>Petualangan seru,<br>cerita dari <span class="highlight-word">tanah Majapahit.</span></h1>
        <p class="hero-description">Jelajahi tempat bersejarah, temukan kearifan lokal, dan selesaikan misi literasi serta numerasi. Belajar jadi petualangan, bukan sekadar hafalan.</p>
        <div class="hero-actions">
          <a class="button button-primary" href="{{ route('login') }}">Mulai Petualangan <span>→</span></a>
          <a class="button button-quiet" href="https://drive.google.com/file/d/13EwK7sG0aP7Uy2qz93tQKmiVdqMYJX4q/view"><span class="play-icon">▶</span> Intip Petualangan</a>
        </div>
        <div class="hero-proof">
          <div class="proof-avatars" aria-hidden="true"><span>🌿</span><span>🏯</span><span>🧭</span></div>
          <div><strong>Belajar sambil menjelajah</strong><small>Budaya lokal • Tantangan • Cerita</small></div>
        </div>
        <span class="doodle doodle-spark">✳</span>
      </div>

      <div class="hero-art" aria-label="Ilustrasi petualangan di Candi Bajang Ratu">
        <div class="art-sun"></div>
        <div class="explorer-mascot" aria-label="Karakter penjelajah lucu">
          <div class="mascot-spark">✦</div>
       <div class="mascot-shadow"></div>
          <div class="mascot-speech">Ayo jelajah! <span>☀</span></div>
        </div>
        <div class="art-label label-top"><span>📍</span><div><strong>Lokasi ditemukan!</strong><small>Candi Bajang Ratu</small></div></div>
        <div class="photo-frame">
          <img class="hero-photo" src="{{ asset('jelajah/assets/landingpage/candibajangratuatas.jpg')}}" alt="Candi Bajang Ratu di Trowulan, Mojokerto" onerror="this.src='https://commons.wikimedia.org/wiki/Special:FilePath/Candi%20Tikus.jpg'">
          <div class="photo-shade"></div>
          <div class="photo-caption"><span class="caption-icon">🏛️</span><div><small>JEJAK MAJAPAHIT</small><strong>Candi Bajang Ratu</strong></div><span class="caption-arrow">↗</span></div>
        </div>
        <div class="floating-sticker sticker-star">✦<small>+50 XP</small></div>
        <div class="floating-sticker sticker-map">🗺️<small>Peta Jelajah</small></div>
        <div class="art-label label-bottom"><span class="mini-trophy">🏆</span><div><strong>Misi menantimu!</strong><small>Siap jadi penjelajah?</small></div></div>
        <svg class="doodle-path" viewBox="0 0 170 100" fill="none" aria-hidden="true"><path d="M4 78 C34 12 70 100 104 45 S148 22 163 6" stroke="#E2A34A" stroke-width="3" stroke-linecap="round" stroke-dasharray="5 8"/><path d="M151 8 L164 5 L164 19" stroke="#E2A34A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="hero-bottom-note"><span>✳</span> Cerita lokal, pengalaman nyata.</div>
    </section>

    <section class="benefit-strip section-wrap" aria-label="Keunggulan Jelajah Mojokerto">
      <div class="benefit-item"><span class="benefit-icon green">⌁</span><div><strong>Jelajah Budaya</strong><small>Kenali warisan lokal dengan cara seru.</small></div></div>
      <div class="benefit-item"><span class="benefit-icon orange">✎</span><div><strong>Asah Literasi</strong><small>Baca cerita, pahami informasi.</small></div></div>
      <div class="benefit-item"><span class="benefit-icon blue">∑</span><div><strong>Latih Numerasi</strong><small>Berpikir dan pecahkan tantangan.</small></div></div>
      <div class="benefit-item"><span class="benefit-icon purple">★</span><div><strong>Kumpulkan Lencana</strong><small>Rayakan progres petualanganmu.</small></div></div>
    </section>

    <section class="adventure section-wrap" id="petualangan">
      <div class="section-heading">
        <div>
          <div class="eyebrow"><span class="eyebrow-dot"></span> PILIH JALUR JELAJAH</div>
          <h2>Setiap tempat punya <span>cerita.</span></h2>
          <p>Mulai dari satu lokasi, baca kisahnya, lalu selesaikan tantangan yang menunggu.</p>
        </div>
        <a class="text-link" href="{{ route('login') }}">Lihat semua misi <span>↗</span></a>
      </div>
      <div class="adventure-grid">
        <article class="adventure-card card-large">
          <div class="card-image image-candi">
            <img src="{{ asset('jelajah/assets/landingpage/candibajangratu.jpg')}}" alt="Foto Candi Bajang Ratu" loading="lazy">
            <span class="card-tag">MISI 01 · CANDI</span><span class="image-sticker">🏯</span>
          </div>
          <div class="card-body"><div class="card-title-row"><h3>Rahasia Candi</h3><span class="card-number">01</span></div><p>Amati peninggalan Majapahit dan temukan cerita di balik bangunannya.</p><a href="{{ route('login') }}" class="card-link">Jelajahi misi <span>→</span></a></div>
        </article>
        <article class="adventure-card">
          <div class="card-image image-pasar">
            <img src="{{ asset('jelajah/assets/landingpage/pasarkeramat.jpg')}}" alt="Suasana pasar tradisional" loading="lazy">
            <span class="card-tag">MISI 02 · PASAR</span><span class="image-sticker">🧺</span>
          </div>
          <div class="card-body"><div class="card-title-row"><h3>Ramainya Pasar</h3><span class="card-number">02</span></div><p>Ambil keputusan, hitung kebutuhan, dan pecahkan masalah sehari-hari.</p><a href="{{ route('login') }}" class="card-link">Jelajahi misi <span>→</span></a></div>
        </article>
        <article class="adventure-card">
          <div class="card-image image-tikus">
            <img src="{{ asset('jelajah/assets/landingpage/sawahsumbergempong.jpg')}}" alt="Wisata Sawah Sumber Gempong" loading="lazy">
            <span class="card-tag">MISI 03 · SAWAH</span><span class="image-sticker">🔎</span>
          </div>
          <div class="card-body"><div class="card-title-row"><h3>Misi Sawah</h3><span class="card-number">03</span></div><p>Jelajahi kehidupan di persawahan, kenali proses menanam padi, dan selesaikan tantangan tentang alam serta aktivitas para petani.</p><a href="{{ route('login') }}" class="card-link">Jelajahi misi <span>→</span></a></div>
        </article>
      </div>
      <div class="more-missions"><span class="more-icon">✦</span><p><strong>Masih banyak cerita menunggu.</strong> Desa, sungai, dan kehidupan masyarakat juga punya misi tersendiri.</p><a href="{{ route('login') }}">Temukan semuanya ↗</a></div>
    </section>

    <section class="how-section" id="cara-bermain">
      <div class="section-wrap how-inner">
        <div class="how-visual">
          <div class="map-paper">
            <div class="map-topline"><span>🧭 PETA PETUALANGAN</span><span class="map-dots">•••</span></div>
            <img src="{{ asset('jelajah/assets/landingpage/map.png')}}" alt="peta jelajah">
            
            <!-- <div class="map-legend"><span><i class="legend-dot done"></i>Lokasi terbuka</span><span><i class="legend-dot next"></i>Misi berikutnya</span></div> -->
          </div>
          <div class="map-bubble bubble-one">📚 Baca ceritanya!</div>
          <div class="map-bubble bubble-two">✨ Kumpulkan XP</div>
          <span class="leaf-deco leaf-one">✿</span><span class="leaf-deco leaf-two">✳</span>
        </div>
        <div class="how-copy">
          <div class="eyebrow"><span class="eyebrow-dot"></span> GAMPANG BANGET</div>
          <h2>Belajar dengan cara <span>menjelajah.</span></h2>
          <p class="how-intro">Tidak perlu jadi ahli dulu. Ikuti petunjuk dan nikmati proses menemukan hal baru.</p>
          
<div class="steps">
    <div class="step">
        <span class="step-no">01</span>
        <div>
            <h3>Login atau Daftar</h3>
            <p>Masuk ke akunmu atau buat akun baru untuk memulai petualangan di Mojokerto.</p>
        </div>
        <span class="step-emoji">👋</span>
    </div>

    <div class="step">
        <span class="step-no">02</span>
        <div>
            <h3>Mulai Jelajah</h3>
            <p>Pilih lokasi pada peta dan temukan tempat menarik yang siap kamu jelajahi.</p>
        </div>
        <span class="step-emoji">🗺️</span>
    </div>

    <div class="step">
        <span class="step-no">03</span>
        <div>
            <h3>Baca dan Amati</h3>
            <p>Kenali informasi budaya dan kearifan lokal sebelum menghadapi tantangan.</p>
        </div>
        <span class="step-emoji">🔍</span>
    </div>

    <div class="step">
        <span class="step-no">04</span>
        <div>
            <h3>Selesaikan Misi</h3>
            <p>Jawab pertanyaan, kumpulkan poin, dan lanjutkan petualanganmu.</p>
        </div>
        <span class="step-emoji">🏆</span>
    </div>
</div>

          <a href="{{ route('login') }}" class="button button-primary">Aku Siap Menjelajah <span>→</span></a>
        </div>
      </div>
    </section>

    <section class="about section-wrap" id="tentang">
      <div class="about-photo">
        <img src="{{ asset('jelajah/assets/landingpage/implementasi2.jpeg')}}" alt="Candi Tikus sebagai salah satu warisan sejarah Trowulan" loading="lazy">
        <div class="implementation-collage" aria-label="Kolase foto ilustrasi penerapan pembelajaran">
          <figure class="implementation-shot shot-one">
            <img src="{{ asset('jelajah/assets/landingpage/implementasi3.jpeg')}}" alt="Ilustrasi suasana kegiatan belajar di kelas" loading="lazy">
            <figcaption>Belajar bersama</figcaption>
          </figure>
          <figure class="implementation-shot shot-two">
            <img src="{{ asset('jelajah/assets/landingpage/implementasi1.jpeg')}}" alt="Ilustrasi siswa belajar menggunakan bahan pembelajaran" loading="lazy">
            <figcaption>Eksplorasi misi</figcaption>
          </figure>
        </div>
        <div class="photo-note"><span>🌱</span><div><strong>Belajar dari sekitar</strong><small>Budaya dekat, makna melekat.</small></div></div>
        <span class="about-stamp">CERITA<br>LOKAL ✦</span>
      </div>
      <div class="about-copy">
        <div class="eyebrow"><span class="eyebrow-dot"></span> TENTANG JELAJAH MOJOKERTO</div>
        <h2>Kearifan lokal jadi pintu menuju <span>pengetahuan.</span></h2>
        <p>Jelajah Mojokerto adalah konsep media pembelajaran digital yang mengajak siswa mengenal lingkungan dan budaya lokal lewat cerita, eksplorasi, serta tantangan interaktif.</p>
        <p>Setiap misi dirancang agar siswa tidak hanya membaca informasi, tetapi juga menghubungkannya dengan kemampuan literasi, numerasi, dan cara berpikir kritis.</p>
        <div class="about-points"><span>✓ Kontekstual dan dekat dengan siswa</span><span>✓ Belajar aktif melalui misi</span><span>✓ Menghargai warisan budaya lokal</span></div>
      </div>
    </section>

    <section class="cta-section section-wrap" id="mulai">
      <div class="cta-decoration deco-left">✳</div><div class="cta-decoration deco-right">✦</div>
      <div class="cta-content">
        <div class="cta-badge">🎒 PETUALANGAN MENUNGGU!</div>
        <h2>Siap membuka cerita<br>berikutnya?</h2>
        <p>Ambil peta, ikuti petunjuk, dan mulai jelajahmu di Mojokerto.</p>
        <a href="#" class="button button-light" id="startButton">Mulai Jelajah <span>↗</span></a>
        <!-- <small class="cta-note">Prototype landing page · Tombol ini bisa dihubungkan ke halaman login nanti.</small> -->
      </div>
      <div class="cta-orbit orbit-one"></div><div class="cta-orbit orbit-two"></div>
    </section>
  </main>

  <footer class="footer section-wrap">
    <div class="footer-top">
      <a class="brand" href="#beranda"><span class="brand-mark"><span><img src="{{ asset('jelajah/assets/landingpage/logo.png')}}" alt=""></span><i>✦</i></span><span class="brand-name">Jelajah<span>Mojokerto</span></span></a>
      <p>Petualangan belajar yang berangkat dari cerita dan budaya lokal.</p>
      <div class="footer-links"><a href="#petualangan">Petualangan</a><a href="#cara-bermain">Cara Bermain</a><a href="#tentang">Tentang</a></div>
    </div>
    <div class="footer-bottom"><span>© <span id="year"></span> Jelajah Mojokerto.</span><span>Dibuat oleh <b>Daffa Nanda Prasetya</b></span></div>
  </footer>
  <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas">↑</button>
  <div class="toast" id="toast" role="status" aria-live="polite">Petualangan segera dimulai! ✨</div>
  
<script src="{{ asset('jelajah/js/scriptlandingpage.js') }}"></script>
</body>
</html>

