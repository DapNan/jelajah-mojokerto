
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Siswa - Jelajah Mojokerto</title>

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

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            background: #5b3c96;
            color: white;
            padding: 25px 18px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
        }

        .brand {
            padding: 5px 12px 30px;
            border-bottom: 1px solid rgba(255,255,255,.15);
            margin-bottom: 25px;
        }

        .brand h2 {
            font-size: 21px;
            line-height: 1.3;
        }

        .brand p {
            font-size: 12px;
            margin-top: 6px;
            opacity: .7;
        }

        .menu-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: .55;
            margin: 0 12px 10px;
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
            color: rgba(255,255,255,.8);
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            background: rgba(255,255,255,.14);
            color: white;
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 17px;
        }

        .sidebar-bottom {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 25px;
        }

        .admin-profile {
            padding: 14px;
            background: rgba(255,255,255,.09);
            border-radius: 12px;
            margin-bottom: 10px;
        }

        .admin-profile small {
            opacity: .6;
            font-size: 11px;
        }

        .admin-profile strong {
            display: block;
            margin-top: 4px;
            font-size: 13px;
        }

        .logout-button {
            width: 100%;
            border: none;
            background: transparent;
            color: rgba(255,255,255,.75);
            text-align: left;
            padding: 10px 14px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 13px;
        }

        .logout-button:hover {
            background: rgba(255,255,255,.1);
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 35px;
            min-width: 0;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 27px;
            color: #3e2b64;
        }

        .topbar p {
            color: #85818d;
            margin-top: 6px;
            font-size: 14px;
        }

        .admin-badge {
            background: #eee7fa;
            color: #5b3c96;
            padding: 9px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            white-space: nowrap;
        }

        /* STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 21px;
            border: 1px solid #eeeaf4;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .06);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-label {
            color: #85818d;
            font-size: 13px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: #f0eafa;
            font-size: 19px;
        }

        .stat-number {
            font-size: 29px;
            font-weight: 700;
            color: #3e2b64;
            margin-top: 15px;
        }

        /* TABEL SISWA */
        .student-container {
            background: white;
            border-radius: 15px;
            border: 1px solid #eeeaf4;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .05);
            overflow: hidden;
        }

        .table-header {
            padding: 20px 22px;
            border-bottom: 1px solid #eeeaf4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .table-header h2 {
            font-size: 17px;
            color: #3e2b64;
        }

        .table-header span {
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
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #f0edf4;
        }

        th {
            font-size: 11px;
            text-transform: uppercase;
            color: #96919e;
            background: #faf9fc;
            white-space: nowrap;
        }

        td {
            font-size: 13px;
        }

        tbody tr:hover {
            background: #fcfbfe;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* PROFIL SISWA */
        .student {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 200px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            background: #eee7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #6b48aa;
            font-weight: bold;
            flex-shrink: 0;
        }

        .student-info strong {
            display: block;
            color: #3e2b64;
            font-size: 13px;
        }

        .student-info small {
            color: #96919e;
            font-size: 11px;
        }

        .level {
            display: inline-block;
            background: #eee7fa;
            color: #62429c;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .score {
            font-weight: 700;
            color: #5b3c96;
            white-space: nowrap;
        }

        .date {
            color: #85818d;
            white-space: nowrap;
        }

        .detail-button {
            display: inline-block;
            padding: 9px 13px;
            background: #eee7fa;
            color: #5b3c96;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
            transition: .2s;
        }

        .detail-button:hover {
            background: #5b3c96;
            color: white;
            transform: translateY(-1px);
        }

        .empty {
            text-align: center;
            padding: 45px !important;
            color: #999;
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .main {
                padding: 25px;
            }
        }

        @media (max-width: 750px) {
            .sidebar {
                width: 70px;
                padding: 20px 10px;
            }

            .brand h2,
            .brand p,
            .menu-title,
            .menu a span:not(.menu-icon),
            .admin-profile,
            .logout-button {
                display: none;
            }

            .brand {
                border: none;
                padding: 5px;
            }

            .menu a {
                justify-content: center;
                padding: 13px 5px;
            }

            .sidebar-bottom {
                left: 10px;
                right: 10px;
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 22px 15px;
            }
        }

        @media (max-width: 550px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .admin-badge {
                display: none;
            }

            .topbar h1 {
                font-size: 23px;
            }

            .table-header {
                padding: 17px;
            }

            table {
                min-width: 850px;
            }
        }
    </style>
</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="brand">
            <h2>Jelajah<br>Mojokerto</h2>
            <p>Panel Administrator</p>
        </div>

        <div class="menu-title">Menu Utama</div>

        <nav class="menu">
            <a href="{{ route('admin.dashboard') }}">
                <span class="menu-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.students.index') }}" class="active">
                <span class="menu-icon">👨‍🎓</span>
                <span>Siswa</span>
            </a>

            <a href="{{ route('admin.missions.index') }}">
                <span class="menu-icon">🗺️</span>
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
                    🚪 &nbsp; Keluar
                </button>
            </form>
        </div>

    </aside>

    <!-- MAIN -->
    <main class="main">

        <div class="topbar">
            <div>
                <h1>Siswa</h1>
                <p>Pantau data dan perkembangan siswa Jelajah Mojokerto.</p>
            </div>

            <div class="admin-badge">Administrator</div>
        </div>

        <!-- STATISTIK -->
        <div class="stats">

            <div class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Total Siswa</span>
                    <div class="stat-icon">👨‍🎓</div>
                </div>
                <div class="stat-number">{{ $students->count() }}</div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Siswa Aktif</span>
                    <div class="stat-icon">🟢</div>
                </div>
                <div class="stat-number">
                    {{ $students->where('total_score', '>', 0)->count() }}
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Total Skor</span>
                    <div class="stat-icon">⭐</div>
                </div>
                <div class="stat-number">
                    {{ number_format($students->sum('total_score')) }}
                </div>
            </div>

        </div>

        <!-- DAFTAR SISWA -->
        <div class="student-container">

            <div class="table-header">
                <div>
                    <h2>Daftar Siswa</h2>
                    <span>Semua akun dengan role siswa</span>
                </div>

                <span>{{ $students->count() }} siswa</span>
            </div>

            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa</th>
                            <th>Level</th>
                            <th>Total Skor</th>
                            <th>Tanggal Bergabung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <div class="student">
                                        @if ($student->avatar)
                                            <img
                                                src="{{ asset('jelajah/assets/' . $student->avatar) }}"
                                                class="avatar"
                                                alt="Avatar {{ $student->name }}"
                                            >
                                        @else
                                            <div class="avatar">
                                                {{ strtoupper(substr($student->name, 0, 1)) }}
                                            </div>
                                        @endif

                                        <div class="student-info">
                                            <strong>{{ $student->name }}</strong>
                                            <small>{{ $student->email }}</small>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <span class="level">
                                        Level {{ $student->level }}
                                    </span>
                                </td>

                                <td>
                                    <span class="score">
                                        {{ number_format($student->total_score) }} XP
                                    </span>
                                </td>

                                <td>
                                    <span class="date">
                                        {{ $student->created_at->format('d M Y') }}
                                    </span>
                                </td>

                                <td>
                                    <a
                                        href="{{ route('admin.students.show', $student->id) }}"
                                        class="detail-button"
                                    >
                                        Lihat Detail →
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty">
                                    Belum ada siswa yang terdaftar.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </main>

</div>

</body>
</html>
