<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jelajah Mojokerto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">
</head>
<body class="">
  <section class="map-page" id="jelajah">

 <div class="profile-menu">

  <div class="profile-card">
    <div class="profile-avatar">
      <img src="{{asset('jelajah/assets/avatar.png')}}" alt="Avatar">
    </div>

    <div>
      <strong>Maja</strong>
      <span>Level 2</span>
    </div>
  </div>

  <div class="profile-dropdown">
    <a href="{{ route('jelajah.profil') }}">Profil</a>
    <a href="#">Pengaturan</a>
    <a href="{{ route('jelajah.index') }}">Logout</a>
  </div>

</div>

  <!-- CANDI -->
   <a href="{{ route('jelajah.misi1') }}">
<div class="map-location location-candi">
    <button class="location-button unlocked">
      <img src="{{asset('jelajah/assets/candi.png')}}" alt="Candi">
      <strong>Candi</strong>
      <span>(Terbuka)</span>
    </button>
  </div>

   </a>
  
   <a href="{{ route('jelajah.misi2') }}">
<!-- PASAR -->
  <div class="map-location location-pasar">
    <button class="location-button unlocked">
      <img src="{{asset('jelajah/assets/pasar.png')}}" alt="Pasar">
      <strong>Pasar</strong>
      <span>(Terbuka)</span>
    </button>
  </div>

   </a>
  
  <!-- SAWAH -->
<div class="map-location location-sawah">
  <button class="location-button locked" onclick="showLocked(this)">
    <img src="assets/sawah.png" alt="Sawah">
    <strong>Sawah</strong>
    <span>(Buka Misi 2)</span>
  </button>

  <div class="locked-message">
    <i class="fa-solid fa-lock"></i>
    <strong>Misi belum terbuka</strong>
    <span>Selesaikan misi sebelumnya</span>
  </div>
</div>

  <!-- SUNGAI -->
<div class="map-location location-sungai">
  <button class="location-button locked" onclick="showLocked(this)">
    <img src="assets/sungai.png" alt="Sungai">
    <strong>Sungai</strong>
    <span>(Buka Misi 3)</span>
  </button>

  <div class="locked-message">
    <i class="fa-solid fa-lock"></i>
    <strong>Misi belum terbuka</strong>
    <span>Selesaikan misi sebelumnya.</span>
  </div>
</div>
  <!-- KAMPUNG -->
<div class="map-location location-kampung">
  <button class="location-button locked" onclick="showLocked(this)">
    <img src="assets/kampung.png" alt="Kampung">
    <strong>Kampung</strong>
    <span>(Buka Misi 4)</span>
  </button>

  <div class="locked-message">
    <i class="fa-solid fa-lock"></i>
    <strong>Misi belum terbuka</strong>
    <span>Selesaikan misi sebelumnya.</span>
  </div>
</div>

</section>
<script>
  function showLocked(button) {

    const message =
      button.parentElement.querySelector('.locked-message');

    button.classList.remove('shake');

    void button.offsetWidth;

    button.classList.add('shake');

    message.classList.add('show');

    setTimeout(() => {
      message.classList.remove('show');
    }, 2500);
  }
</script>
</body>
</html>
