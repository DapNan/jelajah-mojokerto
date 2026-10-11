
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa - Jelajah Mojokerto</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f7f5fb;
            color: #2f2b3a;
        }

        .layout {
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #5b3c96;
            color: white;
            padding: 25px 18px;
            position: fixed;
            inset: 0 auto 0 0;
        }

        .brand {
            padding: 5px 12px 30px;
            border-bottom: 1px solid #ffffff26;
            margin-bottom: 25px;
        }

        .brand h2 {
            font-size: 21px;
            line-height: 1.4;
        }

        .brand p {
            margin-top: 6px;
            font-size: 12px;
            opacity: .7;
        }

        .menu-title {
            margin: 0 12px 10px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: .6;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 14px;
            border-radius: 10px;
            color: #ffffffcc;
            text-decoration: none;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #ffffff24;
            color: white;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 25px;
            left: 18px;
            right: 18px;
        }

        .admin-profile {
            padding: 14px;
            margin-bottom: 10px;
            border-radius: 12px;
            background: #ffffff17;
        }

        .admin-profile small {
            opacity: .7;
        }

        .admin-profile strong {
            display: block;
            margin-top: 5px;
            font-size: 13px;
        }

        .logout-button {
            width: 100%;
            padding: 10px 14px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            color: white;
            text-align: left;
            cursor: pointer;
        }

        .main {
            width: calc(100% - 250px);
            margin-left: 250px;
            padding: 35px;
            min-width: 0;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .topbar h1 {
            color: #3e2b64;
            font-size: 27px;
        }

        .topbar p {
            margin-top: 7px;
            color: #85818d;
            font-size: 14px;
        }

        .back-button {
            display: inline-block;
            padding: 11px 15px;
            background: #eee7fa;
            color: #5b3c96;
            border-radius: 9px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            white-space: nowrap;
        }

        .profile-card {
            display: flex;
            align-items: center;
            gap: 22px;
            padding: 27px;
            margin-bottom: 22px;
            background: white;
            border: 1px solid #eeeaf4;
            border-radius: 17px;
            box-shadow: 0 4px 18px #37235a0a;
        }

        .avatar {
            width: 95px;
            height: 95px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            object-fit: cover;
            background: #eee7fa;
            color: #5b3c96;
            font-size: 34px;
            font-weight: bold;
        }

        .profile-info h2 {
            color: #3e2b64;
            font-size: 23px;
        }

        .profile-info p {
            margin-top: 8px;
            color: #85818d;
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        .joined {
            display: inline-block;
            margin-top: 12px;
            padding: 7px 10px;
            background: #f5f1fb;
            border-radius: 7px;
            color: #62429c;
            font-size: 12px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card,
        .section-card {
            padding: 22px;
            background: white;
            border: 1px solid #eeeaf4;
            border-radius: 15px;
            box-shadow: 0 4px 18px #37235a08;
        }

        .stat-card span {
            color: #85818d;
            font-size: 13px;
        }

        .stat-card strong {
            display: block;
            margin-top: 12px;
            color: #3e2b64;
            font-size: 29px;
        }

        .section-card {
            margin-bottom: 23px;
        }

        .section-heading {
            margin-bottom: 18px;
        }

        .section-heading h2 {
            color: #3e2b64;
            font-size: 18px;
        }

        .section-heading p {
            margin-top: 6px;
            color: #85818d;
            font-size: 12px;
        }

        .table-scroll {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 14px 12px;
            border-bottom: 1px solid #f0edf4;
            text-align: left;
            font-size: 13px;
        }

        th {
            background: #faf9fc;
            color: #96919e;
            font-size: 11px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .status {
            display: inline-block;
            padding: 6px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            white-space: nowrap;
        }

        .completed {
            background: #e4f7ec;
            color: #24834b;
        }

        .pending {
            background: #f1eef5;
            color: #777080;
        }

        .score {
            color: #5b3c96;
            font-weight: bold;
        }

        .reflection {
            padding: 17px;
            margin-top: 14px;
            background: #faf9fc;
            border: 1px solid #eeeaf4;
            border-radius: 11px;
        }

        .reflection h3 {
            color: #5b3c96;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .reflection p {
            color: #5f596b;
            font-size: 13px;
            line-height: 1.7;
            overflow-wrap: anywhere;
            white-space: pre-wrap;
        }

        .reflection-date {
            margin-top: 10px;
            color: #96919e !important;
            font-size: 11px !important;
        }

        .empty {
            padding: 30px 15px !important;
            text-align: center;
            color: #999;
        }

        @media (max-width: 950px) {
            .main {
                padding: 25px 18px;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {
            .sidebar {
                width: 65px;
                padding: 20px 8px;
            }

            .brand h2,
            .brand p,
            .menu-title,
            .menu a span:last-child,
            .admin-profile,
            .logout-button {
                display: none;
            }

            .brand {
                padding: 5px;
                border: 0;
            }

            .menu a {
                justify-content: center;
                padding: 13px 5px;
            }

            .sidebar-bottom {
                left: 8px;
                right: 8px;
            }

            .main {
                width: calc(100% - 65px);
                margin-left: 65px;
                padding: 20px 12px;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .topbar h1 {
                font-size: 23px;
            }

            .profile-card {
                align-items: flex-start;
                flex-direction: column;
                padding: 20px;
            }

            .profile-info h2 {
                font-size: 20px;
            }

            .section-card {
                padding: 16px;
            }
        }
        .reflection-list {
    display: grid;
    gap: 16px;
}

.reflection-card {
    padding: 20px;
    border: 1px solid #e8e2f2;
    border-radius: 14px;
    background: #fff;
}

.reflection-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 18px;
}

.reflection-header h3 {
    margin: 0;
    color: #5b3c96;
}

.reflection-header span {
    color: #888;
    font-size: 12px;
}

.reflection-question {
    margin-bottom: 8px;
    font-weight: 600;
    color: #555;
}

.reflection-text {
    margin: 0;
    padding: 14px;
    border-radius: 10px;
    background: #f7f4fc;
    color: #333;
    line-height: 1.6;
    white-space: pre-wrap;
}
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="brand">
            <h2>Jelajah<br>Mojokerto</h2>
            <p>Panel Administrator</p>
        </div>

        <div class="menu-title">Menu Utama</div>

        <nav class="menu">
            <a href="{{ route('admin.dashboard') }}">
                <span>🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.students.index') }}" class="active">
                <span>👨‍🎓</span>
                <span>Siswa</span>
            </a>

            <a href="{{ route('admin.missions.index') }}">
                <span>🗺️</span>
                <span>Misi</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="admin-profile">
                <small>Login sebagai</small>
                <strong>{{ auth()->user()->name }}</strong>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">
                    🚪 Keluar
                </button>
            </form>
        </div>

    </aside>

    <!-- KONTEN -->
    <main class="main">

        <div class="topbar">
            <div>
                <h1>Detail Siswa</h1>
                <p>Informasi profil dan perkembangan belajar siswa.</p>
            </div>

            <a href="{{ route('admin.students.index') }}" class="back-button">
                ← Kembali ke Daftar
            </a>
        </div>

        <!-- PROFIL -->
        <section class="profile-card">

            @if ($student->avatar)
                <img
                    src="{{ asset('jelajah/assets/' . $student->avatar) }}"
                    alt="Avatar {{ $student->name }}"
                    class="avatar"
                >
            @else
                <div class="avatar">
                    {{ strtoupper(substr($student->name, 0, 1)) }}
                </div>
            @endif

            <div class="profile-info">
                <h2>{{ $student->name }}</h2>
                <p>{{ $student->email }}</p>

                <span class="joined">
                    Bergabung {{ $student->created_at->format('d M Y') }}
                </span>
            </div>

        </section>

        <!-- STATISTIK -->
        <section class="stats">

            <div class="stat-card">
                <span>Level Siswa</span>
                <strong>Level {{ $student->level }}</strong>
            </div>

            <div class="stat-card">
                <span>Total XP</span>
                <strong>{{ number_format($student->total_score) }}</strong>
            </div>

            <div class="stat-card">
                <span>Misi Selesai</span>
                <strong>
                    {{ $progress->where('is_completed', true)->count() }}
                </strong>
            </div>

        </section>

        <!-- PROGRES MISI -->
        <section class="section-card">

            <div class="section-heading">
                <h2>Progres Misi</h2>
                <p>Daftar misi yang sudah dan belum diselesaikan siswa.</p>
            </div>

            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Misi</th>
                            <th>Status</th>
                            <th>Skor</th>
                            <th>Waktu Selesai</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($progress as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $item->mission->name ?? 'Misi tidak ditemukan' }}
                                </td>

                                <td>
                                    @if ($item->is_completed)
                                        <span class="status completed">
                                            Selesai
                                        </span>
                                    @else
                                        <span class="status pending">
                                            Belum selesai
                                        </span>
                                    @endif
                                </td>

                                <td class="score">
                                    {{ $item->score }}
                                </td>

                                <td>
                                    {{ $item->completed_at
                                        ? $item->completed_at->format('d M Y, H:i')
                                        : '-' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="empty">
                                    Siswa belum memiliki data progres misi.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>

        <!-- REFLEKSI -->
        <section class="section-card">
<div class="reflection-list">
    @forelse ($reflections as $reflection)
        @php
            $questions = [
                'learned' => 'Apa yang kamu pelajari dari misi Candi Bajang Ratu?',
            ];
        @endphp

        <div class="reflection-card">
            <div class="reflection-header">
                <h3>{{ $reflection->mission->name ?? 'Misi Candi' }}</h3>
                <span>
                    Disimpan
                    {{ $reflection->updated_at->format('d M Y, H:i') }}
                </span>
            </div>

            @forelse (($reflection->answers ?? []) as $key => $answer)
                <div class="reflection-answer">
                    <p class="reflection-question">
                        {{ $questions[$key] ?? ucfirst($key) }}
                    </p>

                    <p class="reflection-text">
                        {{ $answer }}
                    </p>
                </div>
            @empty
                <p>Belum ada jawaban refleksi.</p>
            @endforelse
        </div>
    @empty
        <p>Siswa belum mengisi refleksi.</p>
    @endforelse
</div>


        </section>

    </main>
</div>

</body>
</html>
