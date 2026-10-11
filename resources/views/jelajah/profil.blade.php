<!DOCTYPE html>
<html lang="id">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Profil | Jelajah Mojokerto</title>

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

  <link rel="stylesheet" href="style.css">

</head>

<body>

<section class="profile-page">


  <!-- ================= KEMBALI ================= -->

  <a href="{{ route('jelajah.map') }}" class="profile-back">
    <i class="fa-solid fa-arrow-left"></i>
    Kembali
  </a>


  <!-- ================= HEADER ================= -->

  <div class="profile-header">

    <span class="mission-label">
      PROFIL PENJELAJAH
    </span>

    <h1>
      Perjalananmu
    </h1>

    <p>
      Lihat perkembangan, pencapaian,
      dan perjalananmu menjelajahi Mojokerto.
    </p>

  </div>


  <!-- ================= PROFIL UTAMA ================= -->

  <div class="profile-main-card">

    <div class="profile-avatar-wrapper">

      <div class="profile-big-avatar">

        <img
          src="assets/avatar.png"
          alt="Avatar Penjelajah"
        >

      </div>

      <span class="avatar-status">
        <i class="fa-solid fa-circle-check"></i>
      </span>

    </div>


    <h2>
      Maja
    </h2>

    <span class="profile-level">
      Level 2
    </span>

    <p class="profile-description">
      Penjelajah budaya Mojokerto
    </p>


    <!-- ================= XP ================= -->

    <div class="xp-section">

      <div class="xp-header">

        <span>
          Pengalaman
        </span>

        <strong>
          250 / 500 XP
        </strong>

      </div>

      <div class="xp-track">

        <div
          class="xp-fill"
          style="width: 50%;"
        ></div>

      </div>

      <small>
        250 XP lagi untuk mencapai Level 3
      </small>

    </div>


    <!-- ================= STATISTIK ================= -->

    <div class="profile-stats">

      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-star"></i>
        </div>

        <strong>
          250
        </strong>

        <span>
          XP
        </span>

      </div>


      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-flag-checkered"></i>
        </div>

        <strong>
          1
        </strong>

        <span>
          Misi Selesai
        </span>

      </div>


      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-location-dot"></i>
        </div>

        <strong>
          1
        </strong>

        <span>
          Lokasi
        </span>

      </div>

    </div>

  </div>


  <!-- ================= PENCAPAIAN ================= -->

  <div class="achievement-card">

    <div class="section-heading">

      <div>
        <span class="mission-label">
          PENCAPAIAN
        </span>

        <h2>
          Lencana Penjelajah
        </h2>
      </div>

      <i class="fa-solid fa-medal"></i>

    </div>


    <div class="achievement-list">


      <div class="achievement-item unlocked">

        <div class="achievement-icon">
          <i class="fa-solid fa-landmark"></i>
        </div>

        <div class="achievement-info">
          <strong>
            Penjelajah Candi
          </strong>

          <span>
            Menyelesaikan Misi Candi Bajang Ratu
          </span>
        </div>

        <i class="fa-solid fa-check achievement-status"></i>

      </div>


      <div class="achievement-item locked">

        <div class="achievement-icon">
          <i class="fa-solid fa-store"></i>
        </div>

        <div class="achievement-info">
          <strong>
            Penjelajah Pasar
          </strong>

          <span>
            Selesaikan Misi Pasar
          </span>
        </div>

        <i class="fa-solid fa-lock achievement-status"></i>

      </div>

    </div>

  </div>


  <!-- ================= PERJALANAN ================= -->

  <div class="journey-card">

    <div class="section-heading">

      <div>

        <span class="mission-label">
          PERJALANANMU
        </span>

        <h2>
          Jelajah Mojokerto
        </h2>

      </div>

      <i class="fa-solid fa-map-location-dot"></i>

    </div>


    <div class="journey-list">


      <!-- CANDI -->

      <a
        href="misi1.html"
        class="journey-item completed"
      >

        <div class="journey-icon">

          <i class="fa-solid fa-landmark"></i>

        </div>

        <div class="journey-info">

          <strong>
            Candi Bajang Ratu
          </strong>

          <span>
            Misi 1 • Selesai
          </span>

        </div>

        <div class="journey-status">

          <i class="fa-solid fa-circle-check"></i>

        </div>

      </a>


      <!-- PASAR -->

      <a
        href="misi2.html"
        class="journey-item available"
      >

        <div class="journey-icon">

          <i class="fa-solid fa-store"></i>

        </div>

        <div class="journey-info">

          <strong>
            Pasar
          </strong>

          <span>
            Misi 2 • Tersedia
          </span>

        </div>

        <div class="journey-status">

          <i class="fa-solid fa-play"></i>

        </div>

      </a>


      <!-- SAWAH -->

      <div class="journey-item locked">

        <div class="journey-icon">

          <i class="fa-solid fa-wheat-awn"></i>

        </div>

        <div class="journey-info">

          <strong>
            Sawah
          </strong>

          <span>
            Misi 3 • Terkunci
          </span>

        </div>

        <div class="journey-status">

          <i class="fa-solid fa-lock"></i>

        </div>

      </div>


      <!-- SUNGAI -->

      <div class="journey-item locked">

        <div class="journey-icon">

          <i class="fa-solid fa-water"></i>

        </div>

        <div class="journey-info">

          <strong>
            Sungai
          </strong>

          <span>
            Misi 4 • Terkunci
          </span>

        </div>

        <div class="journey-status">

          <i class="fa-solid fa-lock"></i>

        </div>

      </div>


      <!-- KAMPUNG -->

      <div class="journey-item locked">

        <div class="journey-icon">

          <i class="fa-solid fa-house"></i>

        </div>

        <div class="journey-info">

          <strong>
            Kampung
          </strong>

          <span>
            Misi 5 • Terkunci
          </span>

        </div>

        <div class="journey-status">

          <i class="fa-solid fa-lock"></i>

        </div>

      </div>


    </div>

  </div>


  <!-- ================= TOMBOL ================= -->

  <a
    href="{{ route('jelajah.map') }}"
    class="profile-map-button"
  >

    <i class="fa-solid fa-map"></i>

    Kembali ke Peta

  </a>


</section>

</body>
</html>