<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Jelajah Mojokerto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
 
<link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">
</head>
<body class="login-page">
  <a href="{{ route('jelajah.index') }}" class="back-link">← Kembali</a>
  <img src="{{ asset('jelajah/assets/logo.png')}}" alt="Jelajah Mojokerto" class="login-logo">
  <div class="speech-bubble">
  Siap menjelajah?
</div>

  <div class="login-box">
    <h1>Selamat Datang<br>Penjelajah Muda!</h1>
    <form action="{{ route('jelajah.map') }}">
      <input type="text" placeholder="Nama/username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>
    <p class="register-text">Belum punya akun? <a href="{{ route('jelajah.register') }}">Daftar di sini</a></p>
  </div>

  <img src="{{ asset('jelajah/assets/karakter-membawa-kaca-pembesar.png')}}" alt="Penjelajah muda" class="character-login">
</body>
</html>
