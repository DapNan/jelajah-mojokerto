
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaturan | Jelajah Mojokerto</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('jelajah/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('jelajah/css/profile.css') }}">

    <style>
        .settings-workspace {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto 40px;
            display: grid;
            grid-template-columns: 250px minmax(0, 1fr);
            align-items: start;
            gap: 24px;
        }

        .settings-sidebar {
            background: #fff;
            padding: 18px;
            border: 1px solid #eee8dc;
            border-radius: 22px;
            box-shadow: 0 8px 28px rgba(35, 40, 60, 0.06);
        }

        .settings-sidebar-label {
            margin: 4px 10px 16px;
            color: #8a8fa0;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.2px;
        }

        .settings-menu {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            width: 100%;
            margin-bottom: 8px;
            padding: 14px 12px;
            border: none;
            border-radius: 14px;
            background: transparent;
            color: #344054;
            text-align: left;
            font-family: inherit;
            cursor: pointer;
            transition: background .2s, color .2s;
        }

        .settings-menu > i {
            width: 20px;
            margin-top: 3px;
            text-align: center;
            font-size: 17px;
        }

        .settings-menu span {
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 14px;
            font-weight: 800;
        }

        .settings-menu small {
            color: #858b9a;
            font-size: 11px;
            font-weight: 500;
            line-height: 1.5;
        }

        .settings-menu:hover {
            background: #f7f4ff;
        }

        .settings-menu.active {
            color: #6d28d9;
            background: #f0e9ff;
        }

        .settings-menu.active small {
            color: #7c62aa;
        }

        .settings-content {
            min-width: 0;
            padding: 30px;
            background: #fff;
            border: 1px solid #eee8dc;
            border-radius: 22px;
            box-shadow: 0 8px 28px rgba(35, 40, 60, .06);
        }

        .settings-panel {
            display: none;
        }

        .settings-panel.active {
            display: block;
        }

        .settings-panel h2 {
            margin: 0 0 6px;
            font-size: 22px;
            font-weight: 800;
        }

        .settings-description {
            margin: 0 0 24px;
            color: #718096;
            line-height: 1.6;
            font-size: 14px;
        }

        .settings-avatar-preview {
            display: flex;
            align-items: center;
            gap: 18px;
            margin: 20px 0 26px;
        }

        .settings-avatar-preview > img {
            width: 100px;
            height: 100px;
            flex-shrink: 0;
            object-fit: contain;
            border-radius: 50%;
            background: #f8f6ff;
        }

        .settings-avatar-preview h3 {
            margin: 0 0 5px;
            font-size: 17px;
        }

        .settings-avatar-preview p {
            margin: 0;
            color: #718096;
            font-size: 13px;
            line-height: 1.5;
        }

        .settings-avatar-picker {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
            margin-top: 20px;
        }

        .settings-avatar-option {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 7px;
            min-width: 0;
            padding: 12px 6px;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            background: #fff;
            cursor: pointer;
            transition: .2s;
        }

        .settings-avatar-option:hover {
            border-color: #c4b5fd;
            transform: translateY(-2px);
        }

        .settings-avatar-option:has(input:checked) {
            border-color: #7c3aed;
            background: #f3e8ff;
            box-shadow: 0 0 0 2px rgba(124, 58, 237, .08);
        }

        .settings-avatar-option input {
            position: absolute;
            top: 8px;
            left: 8px;
            accent-color: #7c3aed;
        }

        .settings-avatar-option img {
            width: 100%;
            max-width: 76px;
            aspect-ratio: 1;
            object-fit: contain;
        }

        .settings-avatar-option span {
            color: #26344a;
            font-size: 12px;
            font-weight: 700;
            text-align: center;
        }

        .settings-field {
            margin-bottom: 18px;
        }

        .settings-field label {
            display: block;
            margin-bottom: 8px;
            color: #26344a;
            font-weight: 700;
            font-size: 14px;
        }

        .settings-field input,
        .settings-field textarea {
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 12px 14px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: #fff;
            color: #26344a;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: border-color .2s;
        }

        .settings-field input:focus,
        .settings-field textarea:focus {
            border-color: #8b5cf6;
        }

        .settings-field textarea {
            resize: vertical;
        }

        .settings-field input::placeholder {
            color: #a0a6b4;
        }

        .settings-divider {
            margin: 24px 0;
            border: 0;
            border-top: 1px solid #eee8dc;
        }

        .settings-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #eee8dc;
        }

        .settings-save,
        .settings-cancel {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .2s;
        }

        .settings-save {
            border: 0;
            background: #7c3aed;
            color: #fff;
        }

        .settings-save:hover {
            background: #6d28d9;
            transform: translateY(-1px);
        }

        .settings-cancel {
            border: 1px solid #e5e7eb;
            background: #fff;
            color: #344054;
        }

        .settings-cancel:hover {
            background: #f8fafc;
        }

        .settings-notice {
            margin-bottom: 20px;
            padding: 13px 16px;
            border-radius: 12px;
            font-size: 14px;
        }

        .settings-notice.success {
            background: #ecfdf3;
            border: 1px solid #a7f3d0;
            color: #166534;
        }

        .settings-notice.error {
            background: #fff1f2;
            border: 1px solid #fecdd3;
            color: #9f1239;
        }

        .settings-notice ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        @media (max-width: 760px) {
            .settings-workspace {
                width: calc(100% - 28px);
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .settings-sidebar {
                padding: 12px;
            }

            .settings-sidebar-label {
                margin-bottom: 10px;
            }

            .settings-menu {
                display: inline-flex;
                width: calc(50% - 5px);
                box-sizing: border-box;
                vertical-align: top;
                padding: 12px 9px;
            }

            .settings-menu span {
                font-size: 12px;
            }

            .settings-menu small {
                font-size: 10px;
            }

            .settings-content {
                padding: 22px 18px;
            }
        }

        @media (max-width: 480px) {
            .settings-avatar-preview {
                align-items: flex-start;
                flex-direction: column;
            }

            .settings-avatar-picker {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .settings-actions {
                flex-direction: column;
            }

            .settings-save,
            .settings-cancel {
                width: 100%;
                box-sizing: border-box;
            }
        }

        @media (max-width: 360px) {
            .settings-menu {
                width: 100%;
            }
        }
/* Tombol pilih karakter */
.avatar-open-modal {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
    padding: 10px 16px;
    border: none;
    border-radius: 12px;
    background: #7c3aed;
    color: #fff;
    font-family: inherit;
    font-size: 13px;
    font-weight: 800;
    cursor: pointer;
    transition: .2s;
}

.avatar-open-modal:hover {
    background: #6d28d9;
    transform: translateY(-2px);
}

/* Latar modal */
.avatar-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.avatar-modal.open {
    display: flex;
}

.avatar-modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(22, 27, 45, .65);
    backdrop-filter: blur(5px);
}

/* Kotak modal */
.avatar-modal-card {
    position: relative;
    z-index: 1;
    width: min(620px, 100%);
    max-height: min(85vh, 760px);
    overflow-y: auto;
    padding: 30px;
    border: 1px solid #eee8dc;
    border-radius: 24px;
    background: #fff;
    box-shadow: 0 24px 80px rgba(20, 25, 45, .25);
    animation: avatarModalIn .22s ease-out;
}

@keyframes avatarModalIn {
    from {
        opacity: 0;
        transform: translateY(12px) scale(.98);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.avatar-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    display: grid;
    place-items: center;
    width: 36px;
    height: 36px;
    border: none;
    border-radius: 50%;
    background: #f3f0fa;
    color: #4b4260;
    font-size: 18px;
    cursor: pointer;
}

.avatar-modal-label {
    color: #7c3aed;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.avatar-modal-card h2 {
    margin: 8px 35px 6px 0;
    color: #26344a;
    font-size: 25px;
    font-weight: 800;
}

.avatar-modal-description {
    margin: 0 0 22px;
    color: #718096;
    font-size: 13px;
    line-height: 1.6;
}

/* Grid karakter */
.avatar-modal-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 12px;
}

.avatar-choice {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    min-width: 0;
    padding: 12px 6px;
    border: 2px solid #e5e7eb;
    border-radius: 16px;
    background: #fff;
    font-family: inherit;
    cursor: pointer;
    transition: .2s;
}

.avatar-choice:hover {
    border-color: #c4b5fd;
    background: #faf7ff;
    transform: translateY(-3px);
}

.avatar-choice.selected {
    border-color: #7c3aed;
    background: #f3e8ff;
    box-shadow: 0 0 0 3px rgba(124, 58, 237, .08);
}

.avatar-choice img {
    display: block;
    width: 100%;
    max-width: 88px;
    aspect-ratio: 1;
    object-fit: contain;
}

.avatar-choice > span:last-child {
    color: #26344a;
    font-size: 12px;
    font-weight: 800;
}

.avatar-choice-check {
    position: absolute;
    top: 7px;
    right: 7px;
    display: none;
    align-items: center;
    justify-content: center;
    width: 23px;
    height: 23px;
    border-radius: 50%;
    background: #7c3aed;
    color: #fff;
    font-size: 11px;
}

.avatar-choice.selected .avatar-choice-check {
    display: flex;
}

/* Bagian bawah modal */
.avatar-modal-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 22px;
    padding-top: 18px;
    border-top: 1px solid #eee8dc;
}

#avatar-modal-selected {
    color: #718096;
    font-size: 12px;
    font-weight: 700;
}

#confirm-avatar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 17px;
    border: none;
    border-radius: 12px;
    background: #7c3aed;
    color: #fff;
    font-family: inherit;
    font-size: 13px;
    font-weight: 800;
    cursor: pointer;
}

#confirm-avatar:hover:not(:disabled) {
    background: #6d28d9;
}

#confirm-avatar:disabled {
    opacity: .45;
    cursor: not-allowed;
}

body.avatar-modal-open {
    overflow: hidden;
}

@media (max-width: 480px) {
    .avatar-modal {
        padding: 10px;
    }

    .avatar-modal-card {
        padding: 24px 16px;
        border-radius: 20px;
    }

    .avatar-modal-card h2 {
        font-size: 21px;
    }

    .avatar-modal-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }

    .avatar-choice img {
        max-width: 90px;
    }

    .avatar-modal-footer {
        align-items: stretch;
        flex-direction: column;
    }

    #confirm-avatar {
        width: 100%;
    }
}

    </style>
</head>

<body>

<main class="profile-page">

    <a href="{{ route('student.profile') }}" class="profile-back">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali ke Profil
    </a>

    <header class="profile-header">
        <span class="mission-label">PENGATURAN PENJELAJAH</span>
        <h1>Atur Profilmu</h1>
        <p>Kelola identitas dan keamanan akun Jelajah Mojokerto.</p>
    </header>

    <div class="settings-workspace">

        <!-- SIDEBAR -->
        <aside class="settings-sidebar">
            <p class="settings-sidebar-label">PENGATURAN</p>

            <button type="button"
                    class="settings-menu active"
                    data-panel="profile-panel">
                <i class="fa-solid fa-user"></i>
                <span>
                    Pengaturan Profil
                    <small>Karakter dan identitasmu</small>
                </span>
            </button>

            <button type="button"
                    class="settings-menu"
                    data-panel="security-panel">
                <i class="fa-solid fa-shield-halved"></i>
                <span>
                    Keamanan Akun
                    <small>Ganti password akunmu</small>
                </span>
            </button>
        </aside>

        <!-- CARD PENGATURAN -->
        <section class="settings-content">

            @if (session('success'))
                <div class="settings-notice success">
                    <i class="fa-solid fa-circle-check"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="settings-notice error">
                    <strong>Periksa kembali data berikut:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('student.settings.update') }}"
                  method="POST">
                @csrf
                @method('PUT')

                <!-- PANEL PROFIL -->
                <div class="settings-panel active" id="profile-panel">

                    <h2>Pengaturan Profil</h2>
                    <p class="settings-description">
                        Ubah karakter dan informasi yang digunakan pada akun penjelajahmu.
                    </p>

<div class="settings-avatar-preview">
    <img
        src="{{ asset('jelajah/assets/' . ($user->avatar ?: 'avatars1.jpg')) }}"
        alt="Avatar Penjelajah"
        id="avatar-preview"
    >

    <div class="avatar-preview-info">
        <h3>Pilih Karakter Penjelajah</h3>
        <p id="selected-avatar-name">
            Karakter yang akan menemanimu menjelajahi Mojokerto.
        </p>

        <button type="button" class="avatar-open-modal" id="open-avatar-modal">
            <i class="fa-solid fa-user-astronaut"></i>
            Pilih Karakter
        </button>
    </div>
</div>

<input
    type="hidden"
    name="avatar"
    id="selected-avatar"
    value="{{ old('avatar', $user->avatar ?? 'avatars1.jpg') }}"
>

<!-- MODAL PILIH KARAKTER -->
<div class="avatar-modal" id="avatar-modal" aria-hidden="true">
    <div class="avatar-modal-backdrop" id="avatar-modal-backdrop"></div>

    <div
        class="avatar-modal-card"
        role="dialog"
        aria-modal="true"
        aria-labelledby="avatar-modal-title"
    >
        <button
            type="button"
            class="avatar-modal-close"
            id="close-avatar-modal"
            aria-label="Tutup modal"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <span class="avatar-modal-label">PENJELAJAH MOJOKERTO</span>
        <h2 id="avatar-modal-title">Pilih Karakter Favoritmu!</h2>
        <p class="avatar-modal-description">
            Pilih teman petualanganmu sebelum menjelajahi Mojokerto.
        </p>

        @php
            $characters = [
                1 => ['name' => 'Jaka', 'title' => 'Penjelajah Tangguh'],
                2 => ['name' => 'Dyah', 'title' => 'Penjelajah Cerdas'],
                3 => ['name' => 'Bara', 'title' => 'Petualang Berani'],
                4 => ['name' => 'Kirana', 'title' => 'Pemburu Pengetahuan'],
                5 => ['name' => 'Genta', 'title' => 'Penjaga Warisan'],
                6 => ['name' => 'Sekar', 'title' => 'Sahabat Budaya'],
                7 => ['name' => 'Cakra', 'title' => 'Penakluk Tantangan'],
                8 => ['name' => 'Aruna', 'title' => 'Cahaya Petualangan'],
            ];

            $currentAvatar = old('avatar', $user->avatar ?? 'avatars1.jpg');
        @endphp

        <div class="avatar-modal-grid">
            @foreach ($characters as $i => $character)
                <button
                    type="button"
                    class="avatar-choice {{ $currentAvatar === "avatars{$i}.jpg" ? 'selected' : '' }}"
                    data-avatar="avatars{{ $i }}.jpg"
                    data-avatar-name="{{ $character['name'] }}"
                    data-avatar-title="{{ $character['title'] }}"
                >
                    <span class="avatar-choice-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <img
                        src="{{ asset('jelajah/assets/avatars' . $i . '.jpg') }}"
                        alt="{{ $character['name'] }}"
                        loading="lazy"
                    >

                    <span>{{ $character['name'] }}</span>
                    <small>{{ $character['title'] }}</small>
                </button>
            @endforeach
        </div>

        <div class="avatar-modal-footer">
            <span id="avatar-modal-selected">
                Pilih satu karakter
            </span>

            <button type="button" id="confirm-avatar" disabled>
                <i class="fa-solid fa-check"></i>
                Gunakan Karakter
            </button>
        </div>
    </div>
</div>

                    

                    <hr class="settings-divider">

                    <div class="settings-field">
                        <label for="name">Nama Penjelajah</label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            maxlength="255"
                            required
                        >
                    </div>

                    <div class="settings-field">
                        <label for="email">Alamat Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            maxlength="255"
                            required
                        >
                    </div>

                    <div class="settings-field">
                        <label for="bio">Tentang Saya</label>
                        <textarea
                            id="bio"
                            name="bio"
                            rows="3"
                            maxlength="500"
                            placeholder="Ceritakan sedikit tentang dirimu..."
                        >{{ old('bio', $user->bio) }}</textarea>
                    </div>

                </div>

                <!-- PANEL KEAMANAN -->
                <div class="settings-panel" id="security-panel">

                    <h2>Keamanan Akun</h2>
                    <p class="settings-description">
                        Jaga keamanan akunmu. Kosongkan semua kolom
                        jika tidak ingin mengganti password.
                    </p>

                    <div class="settings-field">
                        <label for="current_password">Password Lama</label>
                        <input
                            id="current_password"
                            type="password"
                            name="current_password"
                            autocomplete="current-password"
                            placeholder="Masukkan password lama"
                        >
                    </div>

                    <div class="settings-field">
                        <label for="password">Password Baru</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            autocomplete="new-password"
                            placeholder="Minimal 8 karakter"
                        >
                    </div>

                    <div class="settings-field">
                        <label for="password_confirmation">
                            Konfirmasi Password Baru
                        </label>
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            autocomplete="new-password"
                            placeholder="Ulangi password baru"
                        >
                    </div>

                    <div style="padding:14px 16px; background:#f8f6ff; border-radius:12px; color:#6d5b91; font-size:13px; line-height:1.6;">
                        <i class="fa-solid fa-circle-info"></i>
                        Password lama hanya diperlukan jika kamu ingin
                        mengganti password akun.
                    </div>

                </div>

                <!-- TOMBOL SIMPAN -->
                <div class="settings-actions">
                    <button type="submit" class="settings-save">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('student.profile') }}"
                       class="settings-cancel">
                        Batal
                    </a>
                </div>

            </form>
        </section>

    </div>
</main>

<script>
    const menuButtons = document.querySelectorAll('.settings-menu');
    const panels = document.querySelectorAll('.settings-panel');

    menuButtons.forEach((button) => {
        button.addEventListener('click', () => {
            menuButtons.forEach((item) => {
                item.classList.remove('active');
            });

            panels.forEach((panel) => {
                panel.classList.remove('active');
            });

            button.classList.add('active');

            const targetPanel = document.getElementById(
                button.dataset.panel
            );

            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });

    // Preview avatar langsung saat karakter dipilih
    document.querySelectorAll('input[name="avatar"]').forEach((input) => {
        input.addEventListener('change', () => {
            if (input.checked) {
                document.getElementById('avatar-preview').src =
                    "{{ asset('jelajah/assets') }}/" + input.value;
            }
        });
    });

    // Jika ada error validasi password, langsung tampilkan menu keamanan
    @if ($errors->has('current_password') ||
         $errors->has('password') ||
         $errors->has('password_confirmation'))
        document.querySelector('[data-panel="security-panel"]').click();
    @endif

// Modal pemilihan karakter
const avatarModal = document.getElementById('avatar-modal');
const openAvatarModal = document.getElementById('open-avatar-modal');
const closeAvatarModal = document.getElementById('close-avatar-modal');
const avatarBackdrop = document.getElementById('avatar-modal-backdrop');
const confirmAvatar = document.getElementById('confirm-avatar');
const selectedAvatarInput = document.getElementById('selected-avatar');
const avatarPreview = document.getElementById('avatar-preview');
const selectedAvatarName = document.getElementById('selected-avatar-name');
const modalSelectedText = document.getElementById('avatar-modal-selected');
const avatarChoices = document.querySelectorAll('.avatar-choice');

let pendingAvatar = selectedAvatarInput.value;

function updateAvatarSelection(avatar) {
    pendingAvatar = avatar;

    avatarChoices.forEach((button) => {
        const isSelected = button.dataset.avatar === avatar;
        button.classList.toggle('selected', isSelected);
    });

    const selectedButton = document.querySelector(
        `.avatar-choice[data-avatar="${avatar}"]`
    );

    if (selectedButton) {
        modalSelectedText.textContent =
            selectedButton.dataset.avatarName + ' dipilih';

        confirmAvatar.disabled = false;
    } else {
        modalSelectedText.textContent = 'Pilih satu karakter';
        confirmAvatar.disabled = true;
    }
}

function showAvatarModal() {
    pendingAvatar = selectedAvatarInput.value;
    updateAvatarSelection(pendingAvatar);

    avatarModal.classList.add('open');
    avatarModal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('avatar-modal-open');
}

function hideAvatarModal() {
    avatarModal.classList.remove('open');
    avatarModal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('avatar-modal-open');
}

openAvatarModal.addEventListener('click', showAvatarModal);
closeAvatarModal.addEventListener('click', hideAvatarModal);
avatarBackdrop.addEventListener('click', hideAvatarModal);

avatarChoices.forEach((button) => {
    button.addEventListener('click', () => {
        updateAvatarSelection(button.dataset.avatar);
    });
});

confirmAvatar.addEventListener('click', () => {
    if (!pendingAvatar) return;

    selectedAvatarInput.value = pendingAvatar;
    avatarPreview.src =
        "{{ asset('jelajah/assets') }}/" + pendingAvatar;

    const selectedButton = document.querySelector(
        `.avatar-choice[data-avatar="${pendingAvatar}"]`
    );

    if (selectedButton) {
        selectedAvatarName.textContent =
            selectedButton.dataset.avatarName +
            ' siap menemanimu menjelajahi Mojokerto.';
    }

    hideAvatarModal();
});

// Tutup modal dengan tombol Escape
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && avatarModal.classList.contains('open')) {
        hideAvatarModal();
    }
});

// Tampilkan nama karakter yang sedang digunakan
const initialAvatarButton = document.querySelector(
    `.avatar-choice[data-avatar="${selectedAvatarInput.value}"]`
);

if (initialAvatarButton) {
    selectedAvatarName.textContent =
        initialAvatarButton.dataset.avatarName +
        ' siap menemanimu menjelajahi Mojokerto.';
}

</script>

</body>
</html>
