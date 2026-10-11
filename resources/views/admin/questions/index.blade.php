<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Soal {{ $mission->name }} - Jelajah Mojokerto</title>

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

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        }

        .mission-info {
            background: white;
            padding: 20px;
            border: 1px solid #eeeaf4;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .mission-info h2 {
            color: #3e2b64;
            font-size: 18px;
        }

        .mission-info p {
            color: #85818d;
            font-size: 13px;
            margin-top: 5px;
        }

        .mission-actions {
            margin-top: 15px;
            display: flex;
            gap: 10px;
        }

        .button {
            display: inline-block;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .primary {
            background: #5b3c96;
            color: white;
        }

        .secondary {
            background: #eee7fa;
            color: #5b3c96;
        }

        .alert {
            background: #e9f7ef;
            color: #267b49;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .question-container {
            background: white;
            border: 1px solid #eeeaf4;
            border-radius: 15px;
            overflow: hidden;
        }

        .question-header {
            padding: 20px;
            border-bottom: 1px solid #eeeaf4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .question-header h2 {
            font-size: 17px;
            color: #3e2b64;
        }

        .question {
            padding: 22px;
            border-bottom: 1px solid #eeeaf4;
        }

        .question:last-child {
            border-bottom: none;
        }

        .question-top {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .question-number {
            color: #5b3c96;
            font-weight: 700;
            margin-right: 7px;
        }

        .question-text {
            color: #3e2b64;
            font-weight: 600;
            line-height: 1.5;
        }

        .points {
            color: #8a8492;
            font-size: 11px;
            white-space: nowrap;
        }

        .choices {
            margin-top: 15px;
            margin-left: 25px;
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .choice {
            background: #faf9fc;
            border: 1px solid #eeeaf4;
            padding: 9px 12px;
            border-radius: 7px;
            font-size: 12px;
        }

        .correct {
            background: #e9f7ef;
            border-color: #c9ead7;
            color: #267b49;
        }

        .question-actions {
            margin-top: 16px;
            display: flex;
            gap: 7px;
        }

        .edit {
            background: #edf4ff;
            color: #3b69a5;
        }

        .delete {
            background: #ffeded;
            color: #b54848;
            border: none;
            cursor: pointer;
        }

        .empty {
            text-align: center;
            padding: 50px;
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
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 25px 18px;
            }
        }
.question-type {
    display: inline-block;
    margin-top: 8px;
    padding: 5px 9px;
    border-radius: 6px;
    background: #eee7fa;
    color: #5b3c96;
    font-size: 11px;
    font-weight: 600;
}

.choice small {
    display: block;
    margin-top: 5px;
    color: #6d5b87;
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


    <main class="main">

        <div class="topbar">

            <div>
                <h1>Kelola Soal</h1>

                <p>
                    Atur pertanyaan dan pilihan jawaban untuk misi.
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


        <div class="mission-info">

            <h2>
                {{ $mission->icon }} {{ $mission->name }}
            </h2>

            <p>
                {{ $mission->location ?? 'Lokasi belum diatur' }}
            </p>

            <div class="mission-actions">

                <a
                    href="{{ route('admin.missions.questions.create', $mission) }}"
                    class="button primary"
                >
                    + Tambah Soal
                </a>

                <a
                    href="{{ route('admin.missions.index') }}"
                    class="button secondary"
                >
                    ← Kembali ke Misi
                </a>

            </div>

        </div>


        <div class="question-container">

            <div class="question-header">

                <h2>
                    Daftar Soal
                </h2>

                <span>
                    {{ $questions->count() }} soal
                </span>

            </div>


            @forelse ($questions as $question)

                <div class="question">

                    <div class="question-top">

                        <div>

                            <span class="question-number">
                                {{ $loop->iteration }}.
                            </span>

                             <span class="question-text">
    {{ $question->question }}
</span>

<div style="margin-top: 8px;">
    @php
        $typeLabels = [
            'multiple_choice' => 'Pilihan Ganda',
            'decision' => 'Pengambilan Keputusan',
            'true_false' => 'Benar / Salah',
            'number_input' => 'Jawaban Angka',
        ];
    @endphp

    <span class="question-type">
        {{ $typeLabels[$question->type] ?? 'Tipe tidak diketahui' }}
    </span>
</div>

                        </div>

                        <span class="points">
                            {{ $question->points }} poin
                        </span>

                    </div>


                   @if ($question->type === 'number_input')
    <div class="choices">
        <div class="choice correct">
            <strong>Kunci jawaban angka:</strong>
            {{ $question->correct_answer ?? 'Belum diatur' }}
        </div>
    </div>
@elseif ($question->choices->isNotEmpty())
    <div class="choices">
        @foreach ($question->choices as $choice)
            <div class="choice {{ $choice->is_correct ? 'correct' : '' }}">
                {{ $loop->iteration }}. {{ $choice->choice }}

                @if ($choice->is_correct)
                    ✓
                @endif

                @if ($question->type === 'decision')
                    <small>Skor: {{ $choice->score }}</small>
                @endif
            </div>
        @endforeach
    </div>
@else
    <div class="choices">
        <div class="choice">Pilihan jawaban belum tersedia.</div>
    </div>
@endif


                    <div class="question-actions">

                        <a
                            href="{{ route('admin.missions.questions.edit', [$mission, $question]) }}"
                            class="button edit"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route('admin.missions.questions.destroy', [$mission, $question]) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus soal ini?')"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="button delete"
                            >
                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="empty">

                    Belum ada soal untuk misi ini.

                </div>

            @endforelse

        </div>

    </main>

</div>

</body>

</html>