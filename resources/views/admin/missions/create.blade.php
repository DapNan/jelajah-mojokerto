<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Misi</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f7f5ef;
            font-family: 'Baloo 2', sans-serif;
            color: #333;
        }

        .container {
            max-width: 850px;
            margin: auto;
            padding: 40px 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(0,0,0,.06);
        }

        h1 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 700;
        }

        input,
        textarea {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: inherit;
            font-size: 15px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .checkbox input {
            width: auto;
        }

        .button {
            padding: 11px 20px;
            border: 0;
            border-radius: 10px;
            font-family: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        .primary {
            background: #6c4ab6;
            color: white;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #6c4ab6;
            text-decoration: none;
            font-weight: 700;
        }

        .error {
            color: #c0392b;
            font-size: 14px;
            margin-top: 4px;
        }

        @media(max-width:600px) {
            .row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<main class="container">

    <a
        href="{{ route('admin.missions.index') }}"
        class="back"
    >
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah Misi</h1>

        <form
            action="{{ route('admin.missions.store') }}"
            method="POST"
        >

            @csrf

            <div class="form-group">

                <label>Nama Misi</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Contoh: Candi"
                    required
                >

                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>


            <div class="row">

                <div class="form-group">

                    <label>Lokasi</label>

                    <input
                        type="text"
                        name="location"
                        value="{{ old('location') }}"
                        placeholder="Contoh: Trowulan, Mojokerto"
                    >

                </div>


                <div class="form-group">

                    <label>Icon / Emoji</label>

                    <input
                        type="text"
                        name="icon"
                        value="{{ old('icon') }}"
                        placeholder="🏯"
                    >

                </div>

            </div>


            <div class="form-group">

                <label>Deskripsi</label>

                <textarea
                    name="description"
                    placeholder="Deskripsi singkat misi..."
                >{{ old('description') }}</textarea>

            </div>


            <div class="form-group">

                <label>Bacaan</label>

                <textarea
                    name="reading"
                    placeholder="Materi/bacaan sebelum siswa mengerjakan soal..."
                >{{ old('reading') }}</textarea>

            </div>


            <div class="row">

                <div class="form-group">

                    <label>Nama File Gambar</label>

                    <input
                        type="text"
                        name="image"
                        value="{{ old('image') }}"
                        placeholder="candi.jpg"
                    >

                </div>


                <div class="form-group">

                    <label>Urutan Misi</label>

                    <input
                        type="number"
                        name="order"
                        value="{{ old('order', 1) }}"
                        min="1"
                        required
                    >

                </div>

            </div>


            <div class="checkbox">

                <input
                    type="checkbox"
                    name="is_unlocked"
                    value="1"
                    id="is_unlocked"
                >

                <label for="is_unlocked">
                    Misi terbuka
                </label>

            </div>


            <div class="checkbox">

                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    id="is_active"
                    checked
                >

                <label for="is_active">
                    Misi aktif
                </label>

            </div>


            <button
                type="submit"
                class="button primary"
            >
                Simpan Misi
            </button>

        </form>

    </div>

</main>

</body>
</html>