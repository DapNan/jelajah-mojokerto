<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Jelajah Mojokerto</title>

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

        /* =========================
           LAYOUT
        ========================= */

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 250px;
            background: #5b3c96;
            color: white;
            padding: 25px 18px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
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

        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        }

        /* =========================
           STATISTICS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 21px;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .06);
            border: 1px solid #eeeaf4;
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

        /* =========================
           QUICK ACTION
        ========================= */

        .section-title {
            font-size: 18px;
            color: #3e2b64;
            margin-bottom: 15px;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .action-card {
            background: white;
            border: 1px solid #eeeaf4;
            border-radius: 15px;
            padding: 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 17px;
            transition: .2s;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .04);
        }

        .action-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(55, 35, 90, .09);
        }

        .action-icon {
            width: 50px;
            height: 50px;
            border-radius: 13px;
            background: #eee7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
        }

        .action-card h3 {
            color: #3e2b64;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .action-card p {
            color: #88838f;
            font-size: 12px;
        }

        /* =========================
           MISSION TABLE
        ========================= */

        .mission-container {
            background: white;
            border-radius: 15px;
            border: 1px solid #eeeaf4;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .05);
            overflow: hidden;
        }

        .mission-header {
            padding: 20px 22px;
            border-bottom: 1px solid #eeeaf4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mission-header h2 {
            font-size: 17px;
            color: #3e2b64;
        }

        .mission-header a {
            color: #6b48aa;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        .mission-table {
            width: 100%;
            border-collapse: collapse;
        }

        .mission-table th,
        .mission-table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #f0edf4;
        }

        .mission-table th {
            font-size: 11px;
            text-transform: uppercase;
            color: #96919e;
            background: #faf9fc;
        }

        .mission-table td {
            font-size: 13px;
        }

        .mission-name {
            font-weight: 600;
            color: #3e2b64;
        }

        .mission-location {
            color: #85818d;
            font-size: 12px;
            margin-top: 3px;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        .status.active {
            background: #e8f7ee;
            color: #23844b;
        }

        .status.inactive {
            background: #f2f0f3;
            color: #888;
        }

        .status.unlocked {
            background: #fff4d7;
            color: #a56b00;
        }

        .status.locked {
            background: #eeeaf3;
            color: #777;
        }

        .manage-button {
            display: inline-block;
            text-decoration: none;
            color: #62429c;
            background: #f0eafa;
            padding: 7px 12px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 600;
        }

        .manage-button:hover {
            background: #e5daf8;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
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
            .menu a span,
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

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 25px 18px;
            }

            .quick-actions {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 550px) {

            .stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
            }

            .admin-badge {
                display: none;
            }

            .mission-table {
                min-width: 700px;
            }

            .mission-container {
                overflow-x: auto;
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

        <div class="menu-title">
            Menu Utama
        </div>

        <nav class="menu">

            <a href="{{ route('admin.dashboard') }}" class="active">
                <span class="menu-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.students.index') }}">
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


    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <div>
                <h1>Dashboard</h1>

                <p>
                    Kelola media pembelajaran Jelajah Mojokerto.
                </p>
            </div>

            <div class="admin-badge">
                Administrator
            </div>

        </div>


        <!-- STATISTICS -->
        <div class="stats">

            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-label">
                        Total Siswa
                    </span>

                    <div class="stat-icon">
                        👨‍🎓
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalUsers }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-label">
                        Total Misi
                    </span>

                    <div class="stat-icon">
                        🗺️
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalMissions }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-label">
                        Misi Aktif
                    </span>

                    <div class="stat-icon">
                        🚩
                    </div>

                </div>

                <div class="stat-number">
                    {{ $activeMissions }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-label">
                        Total Soal
                    </span>

                    <div class="stat-icon">
                        📝
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalQuestions }}
                </div>

            </div>

        </div>


        <!-- QUICK ACTION -->
        <h2 class="section-title">
            Akses Cepat
        </h2>

        <div class="quick-actions">

            <a
                href="{{ route('admin.students.index') }}"
                class="action-card"
            >

                <div class="action-icon">
                    👨‍🎓
                </div>

                <div>
                    <h3>Kelola Siswa</h3>

                    <p>
                        Lihat data dan perkembangan siswa.
                    </p>
                </div>

            </a>


            <a
                href="{{ route('admin.missions.index') }}"
                class="action-card"
            >

                <div class="action-icon">
                    🗺️
                </div>

                <div>
                    <h3>Kelola Misi</h3>

                    <p>
                        Atur misi dan soal pembelajaran.
                    </p>
                </div>

            </a>

        </div>


        <!-- MISSION LIST -->
        <div class="mission-container">

            <div class="mission-header">

                <h2>
                    Daftar Misi
                </h2>

                <a href="{{ route('admin.missions.index') }}">
                    Lihat Semua →
                </a>

            </div>


            <table class="mission-table">

                <thead>

                    <tr>
                        <th>Misi</th>
                        <th>Soal</th>
                        <th>Status</th>
                        <th>Akses</th>
                        <th>Aksi</th>
                    </tr>

                </thead>


                <tbody>

                    @forelse ($missions as $mission)

                        <tr>

                            <td>

                                <div class="mission-name">
                                    {{ $mission->icon }}
                                    {{ $mission->name }}
                                </div>

                                <div class="mission-location">
                                    {{ $mission->location ?? 'Lokasi belum diatur' }}
                                </div>

                            </td>


                            <td>
                                {{ $mission->questions_count }} soal
                            </td>


                            <td>

                                @if ($mission->is_active)

                                    <span class="status active">
                                        Aktif
                                    </span>

                                @else

                                    <span class="status inactive">
                                        Nonaktif
                                    </span>

                                @endif

                            </td>


                            <td>

                                @if ($mission->is_unlocked)

                                    <span class="status unlocked">
                                        Terbuka
                                    </span>

                                @else

                                    <span class="status locked">
                                        Terkunci
                                    </span>

                                @endif

                            </td>


                            <td>

                                <a
                                    href="{{ route('admin.missions.edit', $mission) }}"
                                    class="manage-button"
                                >
                                    Kelola
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" style="text-align:center; padding:35px; color:#888;">
                                Belum ada misi.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>