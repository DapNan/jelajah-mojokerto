
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal - Jelajah Mojokerto</title>

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

        /* SIDEBAR - SAMA DENGAN HALAMAN KELOLA SOAL */
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
        }

        /* KONTEN */
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
            margin-bottom: 25px;
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

        .back-link {
            display: inline-block;
            color: #67469f;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* FORM */
        .form-card,
        .choice-card {
            background: white;
            border: 1px solid #eeeaf4;
            border-radius: 15px;
            padding: 22px;
            margin-bottom: 18px;
            box-shadow: 0 4px 16px rgba(55,35,90,.04);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 18px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        label {
            font-size: 13px;
            font-weight: 600;
            color: #4b3a69;
        }

        input:not([type="checkbox"]),
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd6e9;
            border-radius: 8px;
            background: white;
            color: #302b3a;
            font: inherit;
            font-size: 13px;
        }

        textarea {
            resize: vertical;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: 2px solid #e4d9f7;
            border-color: #7957b8;
        }

        small {
            color: #898391;
            font-size: 11px;
            line-height: 1.5;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .checkbox-group label,
        .correct-option {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin: 28px 0 16px;
        }

        .section-heading h2 {
            margin: 0 0 6px;
            font-size: 19px;
            color: #3e2b64;
        }

        .section-heading p {
            margin: 0;
            font-size: 12px;
            color: #85818d;
        }

        .choice-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
            color: #3e2b64;
        }

        .btn-add,
        .btn-remove,
        .btn-save,
        .btn-cancel {
            border: none;
            border-radius: 8px;
            padding: 11px 15px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-add {
            background: #eee7fa;
            color: #5b3c96;
        }

        .btn-remove {
            background: #ffeded;
            color: #b54848;
        }

        .btn-save {
            background: #5b3c96;
            color: white;
        }

        .btn-cancel {
            background: #eee7fa;
            color: #5b3c96;
        }

        .correct-option {
            margin-top: 14px;
            font-size: 12px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 10px;
            margin: 25px 0;
        }

        .alert-error {
            background: #ffeded;
            color: #a83232;
            padding: 15px 20px;
            border-radius: 9px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .alert-error ul {
            margin: 8px 0 0 20px;
        }

        .alert-error li {
            margin-top: 5px;
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
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 25px 18px;
            }
        }

        @media (max-width: 600px) {
            .main {
                padding: 20px 12px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .form-card,
            .choice-card {
                padding: 16px;
            }

            .topbar h1 {
                font-size: 23px;
            }

            .admin-badge {
                font-size: 10px;
                padding: 8px 10px;
            }
        }
    </style>
</head>

<body>
<div class="admin-layout">

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

    <main class="main">
        <a class="back-link"
           href="{{ route('admin.missions.questions.index', $mission) }}">
            ← Kembali ke daftar soal
        </a>

        <div class="topbar">
            <div>
                <h1>Edit Soal</h1>
                <p>
                    Misi {{ $mission->icon }} {{ $mission->name }}
                </p>
            </div>

            <div class="admin-badge">Administrator</div>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <strong>Periksa kembali data yang kamu masukkan.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ route('admin.missions.questions.update', [$mission, $question]) }}"
            method="POST"
        >
            @csrf
            @method('PUT')

            @include('admin.questions._form')
        </form>
    </main>

</div>
</body>
</html>