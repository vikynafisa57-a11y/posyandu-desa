document.addEventListener('DOMContentLoaded', function () {

    // Mengambil elemen kata sandi
    const kolomKataSandi = document.getElementById('password');

    // Membuat tombol untuk melihat kata sandi
    const tombolLihatSandi = document.getElementById('lihat-sandi');

    if (kolomKataSandi && tombolLihatSandi) {
        tombolLihatSandi.addEventListener('click', function () {

            if (kolomKataSandi.type === 'password') {
                kolomKataSandi.type = 'text';
                tombolLihatSandi.textContent = 'Sembunyikan';
            } else {
                kolomKataSandi.type = 'password';
                tombolLihatSandi.textContent = 'Lihat';
            }

        });
    }

});