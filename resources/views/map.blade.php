<!DOCTYPE html>
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

<section class="map-page" id="jelajah">
 
    {{-- =========================
        PROFILE
    ========================== --}}
    <div class="profile-menu">

        <div class="profile-card">

            <div class="profile-avatar">
    <img
        src="{{ asset('jelajah/assets/' . (auth()->user()->avatar ?: 'avatar.png')) }}"
        alt="Avatar {{ auth()->user()->name }}"
    >
   
</div>

            <div>
                <strong>{{ $user->name }}</strong>
                <span class="player-level">
    Level {{ auth()->user()->level }}
</span>
            </div>

        </div>

        <div class="profile-dropdown">
    <a href="{{ route('student.profile') }}">Profil</a>
    <a href="{{ route('student.settings') }}">Pengaturan</a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>
@if (empty(auth()->user()->avatar))
    <a href="{{ route('student.settings') }}" class="character-hint">
        <span class="character-hint-icon">🧭</span>
        <span class="character-hint-text">
            <strong>Pilih Karaktermu!</strong>
            <small>Pilih avatar untuk memulai petualangan.</small>
        </span>
        <i class="fa-solid fa-chevron-right"></i>
    </a>
@endif
    </div>

{{-- =========================
    STATUS PROGRES SEMUA MISI
========================== --}}

@php
    $missionSlugs = [
        'candi',
        'pasar',
        'sawah',
        'sungai',
        'kampung',
    ];

    $missionData = [];

    foreach ($missionSlugs as $index => $slug) {
        $mission = $missions->firstWhere('slug', $slug);

        if (!$mission) {
            continue;
        }

        $progress = $progressByMission->get($mission->id);

        $isCompleted = $progress && $progress->is_completed;

        // Misi pertama terbuka sejak awal.
        // Misi berikutnya terbuka jika misi sebelumnya selesai.
        $previousSlug = $missionSlugs[$index - 1] ?? null;
        $previousMission = $previousSlug
            ? $missions->firstWhere('slug', $previousSlug)
            : null;

        $previousProgress = $previousMission
            ? $progressByMission->get($previousMission->id)
            : null;

        $isUnlocked = $index === 0
            || ($previousProgress && $previousProgress->is_completed);

        $missionData[$slug] = [
            'mission' => $mission,
            'completed' => (bool) $isCompleted,
            'unlocked' => (bool) $isUnlocked,
        ];
    }
@endphp


{{-- =========================
    CANDI
========================== --}}

@if (isset($missionData['candi']))
    @php
        $candi = $missionData['candi']['mission'];
        $candiCompleted = $missionData['candi']['completed'];
        $candiUnlocked = $missionData['candi']['unlocked'];
    @endphp

    <div class="map-location location-candi">
        @if ($candiUnlocked)
            <a href="{{ route('candi') }}">
                <button class="location-button unlocked">
                    <img src="{{ asset('jelajah/assets/candi.png') }}" alt="Candi">
                    <strong>{{ $candi->name }}</strong>

                    @if ($candiCompleted)
                        <span>✓ Selesai</span>
                    @else
                        <span>(Terbuka)</span>
                    @endif
                </button>
            </a>
        @else
            <button class="location-button locked" onclick="showLocked(this)">
                <img src="{{ asset('jelajah/assets/candi.png') }}" alt="Candi">
                <strong>{{ $candi->name }}</strong>
                <span>(Terkunci)</span>
            </button>

            <div class="locked-message">
                <strong>Misi belum terbuka</strong>
                <span>Selesaikan misi sebelumnya</span>
            </div>
        @endif
    </div>
@endif


{{-- =========================
    PASAR
========================== --}}

@if (isset($missionData['pasar']))
    @php
        $pasar = $missionData['pasar']['mission'];
        $pasarCompleted = $missionData['pasar']['completed'];
        $pasarUnlocked = $missionData['pasar']['unlocked'];
    @endphp

    <div class="map-location location-pasar">
        @if ($pasarUnlocked)
            {{-- <a href="{{ route('mission.show', $pasar->slug) }}"> --}}
            <a href="{{route('pasar')}}">
                <button class="location-button unlocked">
                    <img src="{{ asset('jelajah/assets/pasar.png') }}" alt="Pasar">
                    <strong>{{ $pasar->name }}</strong>

                    @if ($pasarCompleted)
                        <span>✓ Selesai</span>
                    @else
                        <span>(Terbuka)</span>
                    @endif
                </button>
            </a>
        @else
            <button class="location-button locked" onclick="showLocked(this)">
                <img src="{{ asset('jelajah/assets/pasar.png') }}" alt="Pasar">
                <strong>{{ $pasar->name }}</strong>
                <span>(Buka Misi 1)</span>
            </button>

            <div class="locked-message">
                <strong>Misi belum terbuka</strong>
                <span>Selesaikan misi sebelumnya</span>
            </div>
        @endif
    </div>
@endif


{{-- =========================
    SAWAH
========================== --}}

@if (isset($missionData['sawah']))
    @php
        $sawah = $missionData['sawah']['mission'];
        $sawahCompleted = $missionData['sawah']['completed'];
        $sawahUnlocked = $missionData['sawah']['unlocked'];
    @endphp

    <div class="map-location location-sawah">
        @if ($sawahUnlocked)
            {{-- <a href="{{ route('mission.show', $sawah->slug) }}"> --}}
                <a href="">
                <button class="location-button unlocked">
                    <img src="{{ asset('jelajah/assets/sawah.png') }}" alt="Sawah">
                    <strong>{{ $sawah->name }}</strong>

                    @if ($sawahCompleted)
                        <span>✓ Selesai</span>
                    @else
                        <span>(Terbuka)</span>
                    @endif
                </button>
            </a>
        @else
            <button class="location-button locked" onclick="showLocked(this)">
                <img src="{{ asset('jelajah/assets/sawah.png') }}" alt="Sawah">
                <strong>{{ $sawah->name }}</strong>
                <span>(Buka Misi 2)</span>
            </button>

            <div class="locked-message">
                <strong>Misi belum terbuka</strong>
                <span>Selesaikan misi sebelumnya</span>
            </div>
        @endif
    </div>
@endif


{{-- =========================
    SUNGAI
========================== --}}

@if (isset($missionData['sungai']))
    @php
        $sungai = $missionData['sungai']['mission'];
        $sungaiCompleted = $missionData['sungai']['completed'];
        $sungaiUnlocked = $missionData['sungai']['unlocked'];
    @endphp

    <div class="map-location location-sungai">
        @if ($sungaiUnlocked)
            {{-- <a href="{{ route('mission.show', $sungai->slug) }}"> --}}
                <a href="">
                <button class="location-button unlocked">
                    <img src="{{ asset('jelajah/assets/sungai.png') }}" alt="Sungai">
                    <strong>{{ $sungai->name }}</strong>

                    @if ($sungaiCompleted)
                        <span>✓ Selesai</span>
                    @else
                        <span>(Terbuka)</span>
                    @endif
                </button>
            </a>
        @else
            <button class="location-button locked" onclick="showLocked(this)">
                <img src="{{ asset('jelajah/assets/sungai.png') }}" alt="Sungai">
                <strong>{{ $sungai->name }}</strong>
                <span>(Buka Misi 3)</span>
            </button>

            <div class="locked-message">
                <strong>Misi belum terbuka</strong>
                <span>Selesaikan misi sebelumnya</span>
            </div>
        @endif
    </div>
@endif


{{-- =========================
    KAMPUNG
========================== --}}

@if (isset($missionData['kampung']))
    @php
        $kampung = $missionData['kampung']['mission'];
        $kampungCompleted = $missionData['kampung']['completed'];
        $kampungUnlocked = $missionData['kampung']['unlocked'];
    @endphp

    <div class="map-location location-kampung">
        @if ($kampungUnlocked)
            {{-- <a href="{{ route('mission.show', $kampung->slug) }}"> --}}
                <a href="">
                <button class="location-button unlocked">
                    <img src="{{ asset('jelajah/assets/kampung.png') }}" alt="Kampung">
                    <strong>{{ $kampung->name }}</strong>

                    @if ($kampungCompleted)
                        <span>✓ Selesai</span>
                    @else
                        <span>(Terbuka)</span>
                    @endif
                </button>
            </a>
        @else
            <button class="location-button locked" onclick="showLocked(this)">
                <img src="{{ asset('jelajah/assets/kampung.png') }}" alt="Kampung">
                <strong>{{ $kampung->name }}</strong>
                <span>(Buka Misi 4)</span>
            </button>

            <div class="locked-message">
                <strong>Misi belum terbuka</strong>
                <span>Selesaikan misi sebelumnya</span>
            </div>
        @endif
    </div>
@endif

</section>


<script>
function showLocked(button) {

    const message =
        button.parentElement.querySelector('.locked-message');

    button.classList.remove('shake');

    void button.offsetWidth;

    button.classList.add('shake');

    if (message) {
        message.classList.add('show');

        setTimeout(() => {
            message.classList.remove('show');
        }, 2500);
    }
}
</script>

</body>
</html>