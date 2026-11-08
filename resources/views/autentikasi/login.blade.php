<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - PosyanduCare</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <div class="halaman-login">

        <!-- Bagian Kiri -->
        <section class="bagian-kiri">

            <div class="identitas">
                <div class="logo">+</div>
                <span>PosyanduCare</span>
            </div>

            <div class="konten-kiri">
                <span class="label-atas">LAYANAN KESEHATAN IBU DAN ANAK</span>

                <h1>
                    Bersama Menjaga
                    <span>Tumbuh Kembang</span>
                    Generasi Masa Depan.
                </h1>

                <p>
                    Pantau pertumbuhan, kesehatan, dan perkembangan
                    buah hati melalui layanan Posyandu yang lebih
                    mudah, teratur, dan terintegrasi.
                </p>

                <div class="ilustrasi">
                    <div class="lingkaran-besar">
                        <div class="lingkaran-kecil">
                            <span>👶</span>
                        </div>
                    </div>

                    <div class="hiasan hiasan-satu">✚</div>
                    <div class="hiasan hiasan-dua">♡</div>
                    <div class="hiasan hiasan-tiga">✦</div>
                </div>
            </div>

            <div class="keterangan-kiri">
                Sistem Informasi Pelayanan Posyandu
            </div>

        </section>

        <!-- Bagian Kanan -->
        <section class="bagian-kanan">

            <div class="form-login">

                <div class="logo-ponsel">
                    <div class="logo">+</div>
                    <span>PosyanduCare</span>
                </div>

                <div class="judul-form">
                    <span class="sapaan">SELAMAT DATANG KEMBALI</span>

                    <h2>Masuk ke Akun Anda</h2>

                    <p>
                        Silakan masukkan alamat email dan kata sandi
                        untuk melanjutkan.
                    </p>
                </div>

                @if ($errors->any())
                <div class="pesan-error">
                    {{ $errors->first() }}
                </div>
                @endif

                <form action="{{ url('/login') }}" method="POST">
                    @csrf

                    <div class="form-grup">
                        <label for="email">Alamat Email</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="contoh@email.com"
                            value="{{ old('email') }}"
                            autocomplete="username"
                            required>
                    </div>

                    <div class="form-grup">
                        <div class="label-password">
                            <label for="password">Kata Sandi</label>
                        </div>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            autocomplete="current-password"
                            required>
                    </div>

                    <div class="pilihan-form">
                        <label>
                            <input type="checkbox" name="ingat_saya" value="1">
                            <span>Ingat saya</span>
                        </label>
                    </div>

                    <button type="submit" class="tombol-masuk">
                        Masuk Sekarang
                        <span>→</span>
                    </button>

                </form>

                <div class="garis-pemisah">
                    <span>PosyanduCare</span>
                </div>

                <div class="informasi-bawah">
                    <p>
                        Sistem Informasi Pelayanan Posyandu
                    </p>

                    <span>
                        © {{ date('Y') }} PosyanduCare. Hak cipta dilindungi.
                    </span>
                </div>

            </div>

        </section>

    </div>

</body>

</html>