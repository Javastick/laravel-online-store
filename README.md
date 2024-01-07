# Online Store Laravel Project

Proyek ini bertujuan untuk membangun sebuah aplikasi web Online Store menggunakan Laravel, yang dikembangkan dengan mengikuti arahan yang disajikan dalam buku "Practical Laravel: Develop Clean MVC Web Applications" yang ditulis oleh Daniel Correa. Proyek ini dibuat sebagai bahan belajar pribadi untuk mendalami framework Laravel.

## Deskripsi

Aplikasi web Online Store ini dibangun dengan menggunakan konsep Model-View-Controller (MVC) yang diajarkan didalam buku. Proyek ini mencakup berbagai fitur yang umumnya ditemui dalam aplikasi toko online, seperti manajemen produk, keranjang belanja, proses checkout, dan manajemen pengguna.

## Fitur Utama

- **User Authentication:** Menggunakan `laravel/ui` untuk mengelola otentikasi pengguna.
- **Menampilkan Produk:** Tampilan produk yang memungkinkan pengguna melihat daftar produk yang tersedia.
- **Tambahkan ke Keranjang:** Memungkinkan pengguna untuk menambahkan produk ke keranjang menggunakan session.
- **Checkout:** Proses checkout untuk melengkapi pembelian produk yang ada di keranjang.
- **Riwayat Pesanan:** Menampilkan riwayat pesanan untuk setiap pengguna.

## Fitur yang Saya Kembangkan

- **Peringatan Saldo:** Menampilkan peringatan saldo saat pengguna akan melakukan proses checkout.
- **Validasi Saldo:** Tidak memungkinkan pembayaran jika saldo pengguna kurang dari total harga pesanan.


## Instalasi

Berikut adalah langkah-langkah instalasi proyek ini:

1. Clone repositori ini ke mesin lokal Anda.
   ```bash
   git clone https://github.com/username/online-store-laravel.git
2. Masuk direktori proyek
   ```bash
    cd online-store-laravel
3. Salin file .env.example menjadi .env dan sesuaikan konfigurasi database.
4. Instal dependensi menggunakan Composer.
    ```bash
    composer install
5. Jalankan migrasi database.
    ```bash
    php artisan migrate
6. Jalankan server lokal.
    ```bash
    php artisan serve
Aplikasi dapat diakses di http://localhost:8000.
