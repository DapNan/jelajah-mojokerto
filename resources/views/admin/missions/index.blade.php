<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Misi - Jelajah Mojokerto</title>

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

        /* HEADER */

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .page-header h2 {
            font-size: 18px;
            color: #3e2b64;
        }

        .page-header p {
            color: #85818d;
            font-size: 13px;
            margin-top: 5px;
        }

        .add-button {
            background: #5b3c96;
            color: white;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .add-button:hover {
            background: #4e3384;
        }

        /* ALERT */

        .alert {
            background: #e9f7ef;
            color: #267b49;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        /* TABLE */

        .mission-container {
            background: white;
            border-radius: 15px;
            border: 1px solid #eeeaf4;
            box-shadow: 0 4px 18px rgba(55, 35, 90, .05);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 16px 20px;
            text-align: left;
            border-bottom: 1px solid #f0edf4;
        }

        th {
            font-size: 11px;
            text-transform: uppercase;
            color: #96919e;
            background: #faf9fc;
        }

        td {
            font-size: 13px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .mission-name {
            font-weight: 600;
            color: #3e2b64;
        }

        .mission-location {
            color: #85818d;
            font-size: 11px;
            margin-top: 4px;
        }

        .icon {
            font-size: 25px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .active {
            background: #e8f7ee;
            color: #23844b;
        }

        .inactive {
            background: #f2f0f3;
            color: #888;
        }

        .unlocked {
            background: #fff4d7;
            color: #a56b00;
        }

        .locked {
            background: #eeeaf3;
            color: #777;
        }

        .question-count {
            font-weight: 600;
            color: #5b3c96;
        }

        /* ACTION */

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .action {
            border: none;
            text-decoration: none;
            cursor: pointer;
            padding: 7px 10px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 600;
        }

        .questions {
            background: #eee7fa;
            color: #5b3c96;
        }

        .edit {
            background: #edf4ff;
            color: #3b69a5;
        }

        .delete {
            background: #ffeded;
            color: #b54848;
        }

        .action:hover {
            opacity: .8;
        }

        .empty {
            text-align: center;
            padding: 45px !important;
            color: #999;
        }

        @media (max-width: 900px) {

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

            .mission-container {
                overflow-x: auto;
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

        <div class="menu-title">
            Menu Utama
        </div>

        <nav class="menu">

            <a href="{{ route('admin.dashboard') }}">
                <span class="menu-icon">🏠</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.students.index') }}">
                <span class="menu-icon">👨‍🎓</span>
                <span>Siswa</span>
            </a>

            <a href="{{ route('admin.missions.index') }}" class="active">
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
                <h1>Misi</h1>

                <p>
                    Kelola perjalanan dan aktivitas pembelajaran siswa.
                </p>
            </div>

            <div class="admin-badge">
                Administrator
            </div>

        </div>


        @if (session('success'))

            <div class="alert">
                ✓ {{ session('success') }}
            </div>

        @endif


        <div class="page-header">

            <div>
                <h2>Daftar Misi</h2>

                <p>
                    Atur misi, status, dan soal pembelajaran.
                </p>
            </div>

            <a
                href="{{ route('admin.missions.create') }}"
                class="add-button"
            >
                + Tambah Misi
            </a>

        </div>


        <div class="mission-container">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
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
                                {{ $loop->iteration }}
                            </td>


                            <td>

                                <div class="mission-name">

                                    <span class="icon">
                                        {{ $mission->icon }}
                                    </span>

                                    {{ $mission->name }}

                                </div>

                                <div class="mission-location">
                                    {{ $mission->location ?? 'Lokasi belum diatur' }}
                                </div>

                            </td>


                            <td>

                                <span class="question-count">
                                    {{ $mission->questions_count }}
                                </span>

                                soal

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

                                <div class="actions">

                                    <a
                                        href="{{ route('admin.missions.questions.index', $mission) }}"
                                        class="action questions"
                                    >
                                        📝 Soal
                                    </a>

                                    <a
                                        href="{{ route('admin.missions.edit', $mission) }}"
                                        class="action edit"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.missions.destroy', $mission) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus misi ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="action delete"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="empty">
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