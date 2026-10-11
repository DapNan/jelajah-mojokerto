<!DOCTYPE html>
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
      <a href="{{ route('jelajah.login') }}" class="login-badge">LOGIN</a>
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

      <a href="{{ route('jelajah.login') }}" class="start-button">
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
      <a href="{{ route('jelajah.login') }}" class="explore-button">
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
</html>