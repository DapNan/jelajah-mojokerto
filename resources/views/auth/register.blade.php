<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Daftar - Jelajah Mojokerto</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  >

<link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">
</head>

<body class="register-page">

  <!-- KEMBALI -->
  <a href="{{ route('login') }}" class="back-link">
    ← Kembali
  </a>


  <!-- LOGO -->
  <img
    src="{{ asset('jelajah/assets/logo.png')}}"
    alt="Jelajah Mojokerto"
    class="register-logo"
  >


  <!-- KARAKTER -->
  <img
    src="{{ asset('jelajah/assets/karakter-membawa-kaca-pembesar.png')}}"
    alt="Penjelajah muda"
    class="character-register"
  >


  <!-- KOTAK DAFTAR -->
  <div class="register-box">

    <h1>
      Yuk, Daftar!
    </h1>

    <p class="register-subtitle">
      Buat akun dan mulai petualanganmu
    </p>


@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    
<form action="{{ route('register.process') }}" method="POST">
@csrf
      <input
        type="text" name="name"
        placeholder="Nama lengkap"
        required
      >

      <input
        type="email" name="email"
        placeholder="Email"
        required
      >

      <input
        type="password" name="password"
        placeholder="Password"
        required
      >

      <input
        type="password" name="password_confirmation"
        placeholder="Konfirmasi password"
        required
      >



      <button type="submit">
        Daftar
      </button>

    </form>


    <p class="login-text">
      Sudah punya akun?
      <a href="{{route ('login')}}">
        Masuk di sini
      </a>
    </p>

  </div>

</body>
</html>