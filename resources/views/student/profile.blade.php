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

<link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">

</head>

<body>

<section class="profile-page">


  <!-- ================= KEMBALI ================= -->

  <a href="{{ route('map') }}" class="profile-back">
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

<a href="{{ route('student.settings') }}"
   class="profile-settings-button">
    <i class="fa-solid fa-gear"></i>
    Pengaturan Profil
</a>

    <div class="profile-avatar-wrapper">

      <div class="profile-big-avatar">
<img
    src="{{ asset('jelajah/assets/' . ($user->avatar ?: 'avatars1.jpg')) }}"
    alt="Avatar Penjelajah"
    class="profile-big-avatar"
>

      </div>

      <span class="avatar-status">
        <i class="fa-solid fa-circle-check"></i>
      </span>

    </div>


<h2>{{ $user->name }}</h2>

   <span class="profile-level">
    Level {{ $user->level }}
</span>

   <p class="profile-description">
    {{ $user->bio ?: 'Penjelajah budaya Mojokerto' }}
</p>


    <!-- ================= XP ================= -->
@php
    $xp = $user->total_score;
    $targetXp = (intdiv($xp, 500) + 1) * 500;
    $xpProgress = ($xp % 500) / 500 * 100;

    $completedMissions = $progress
        ->where('is_completed', true);

    $completedCount = $completedMissions->count();
    $locationCount = $completedMissions
        ->pluck('mission_id')
        ->unique()
        ->count();
@endphp

    <div class="xp-section">

     <div class="xp-header">
    <span>Pengalaman</span>
    <strong>{{ $xp }} / {{ $targetXp }} XP</strong>
</div>

      <div class="xp-track">
    <div class="xp-fill" style="width: {{ $xpProgress }}%;"></div>
</div>

      <small>
    {{ $targetXp - $xp }} XP lagi untuk mencapai target berikutnya
</small>

    </div>


    <!-- ================= STATISTIK ================= -->

    <div class="profile-stats">

      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-star"></i>
        </div>

       {{-- Statistik XP --}}
<strong>{{ $user->total_score }}</strong>

        <span>
          XP
        </span>

      </div>


      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-flag-checkered"></i>
        </div>

       {{-- Misi selesai --}}
<strong>{{ $completedCount }}</strong>

        <span>
          Misi Selesai
        </span>

      </div>


      <div class="profile-stat">

        <div class="stat-icon">
          <i class="fa-solid fa-location-dot"></i>
        </div>

      {{-- Lokasi yang sudah dijelajahi --}}
<strong>{{ $locationCount }}</strong>

        <span>
          Lokasi
        </span>

      </div>

    </div>

  </div>


@php
    $xp = (int) $user->total_score;
    $targetXp = (intdiv($xp, 500) + 1) * 500;
    $xpProgress = ($xp % 500) / 500 * 100;

    $completedMissions = $progress->where('is_completed', true);

    $completedCount = $completedMissions
        ->pluck('mission_id')
        ->unique()
        ->count();

    $locationCount = $completedCount;

    // Daftar misi dan ID-nya
    $missions = [
        1 => [
            'name' => 'Candi Bajang Ratu',
            'badge' => 'Penjelajah Candi',
            'description' => 'Menyelesaikan Misi Candi Bajang Ratu',
            'icon' => 'fa-landmark',
            'url' => url('/misi1.html'),
        ],
        2 => [
            'name' => 'Pasar',
            'badge' => 'Penjelajah Pasar',
            'description' => 'Menyelesaikan Misi Pasar',
            'icon' => 'fa-store',
            'url' => url('/misi2.html'),
        ],
        3 => [
            'name' => 'Sawah',
            'badge' => 'Penjelajah Sawah',
            'description' => 'Menyelesaikan Misi Sawah',
            'icon' => 'fa-wheat-awn',
            'url' => null,
        ],
        4 => [
            'name' => 'Sungai',
            'badge' => 'Penjelajah Sungai',
            'description' => 'Menyelesaikan Misi Sungai',
            'icon' => 'fa-water',
            'url' => null,
        ],
        5 => [
            'name' => 'Kampung',
            'badge' => 'Penjelajah Kampung',
            'description' => 'Menyelesaikan Misi Kampung',
            'icon' => 'fa-house',
            'url' => null,
        ],
    ];

    // Periksa status setiap misi
    foreach ($missions as $id => &$mission) {
        $mission['completed'] = $completedMissions->contains(
            fn ($item) => (int) $item->mission_id === $id
        );

        // Misi pertama terbuka, misi selanjutnya terbuka
        // jika misi sebelumnya sudah selesai.
        $mission['available'] = $id === 1
            || $missions[$id - 1]['completed'] === true;
    }
    unset($mission);
@endphp

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
    @foreach ($missions as $mission)
        <div class="achievement-item {{ $mission['completed'] ? 'unlocked' : 'locked' }}">
            <div class="achievement-icon">
                <i class="fa-solid {{ $mission['icon'] }}"></i>
            </div>

            <div class="achievement-info">
                <strong>{{ $mission['badge'] }}</strong>
                <span>{{ $mission['description'] }}</span>
            </div>

            <i class="fa-solid {{ $mission['completed'] ? 'fa-check' : 'fa-lock' }} achievement-status"></i>
        </div>
    @endforeach
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
    @foreach ($missions as $id => $mission)
        @if ($mission['available'] && $mission['url'])
            <a href="{{ $mission['url'] }}"
               class="journey-item {{ $mission['completed'] ? 'completed' : 'available' }}">
        @else
            <div class="journey-item {{ $mission['completed'] ? 'completed' : 'locked' }}">
        @endif

            <div class="journey-icon">
                <i class="fa-solid {{ $mission['icon'] }}"></i>
            </div>

            <div class="journey-info">
                <strong>{{ $mission['name'] }}</strong>
                <span>
                    Misi {{ $id }} •
                    {{ $mission['completed'] ? 'Selesai' : ($mission['available'] ? 'Tersedia' : 'Terkunci') }}
                </span>
            </div>

            <div class="journey-status">
                @if ($mission['completed'])
                    <i class="fa-solid fa-circle-check"></i>
                @elseif ($mission['available'])
                    <i class="fa-solid fa-play"></i>
                @else
                    <i class="fa-solid fa-lock"></i>
                @endif
            </div>

        @if ($mission['available'] && $mission['url'])
            </a>
        @else
            </div>
        @endif
    @endforeach
</div>


  </div>


  <!-- ================= TOMBOL ================= -->

  <a
    href="{{ route('map') }}"
    class="profile-map-button"
  >

    <i class="fa-solid fa-map"></i>

    Kembali ke Peta

  </a>


</section>

</body>
</html>