# Proyek Toko Online dengan Laravel

Proyek ini dirancang untuk membangun aplikasi web Toko Online menggunakan Laravel, dengan mengikuti pedoman yang disajikan dalam buku "Practical Laravel: Develop Clean MVC Web Applications" oleh Daniel Correa. Dibuat sebagai sumber belajar pribadi, proyek ini bertujuan untuk mendalami framework Laravel.

## Deskripsi

Aplikasi web Toko Online ini diterapkan dengan konsep Model-View-Controller (MVC) sebagaimana diajarkan dalam buku. Menggabungkan berbagai fitur umum dalam aplikasi toko online, seperti manajemen produk, keranjang belanja, proses checkout, dan manajemen pengguna.

## Fitur Utama

- **Otentikasi Pengguna:** Menggunakan `laravel/ui` untuk mengelola otentikasi pengguna.
- **Tampilan Produk:** Antarmuka produk yang memungkinkan pengguna menjelajahi dan melihat daftar produk yang tersedia.
- **Tambahkan ke Keranjang:** Fasilitas untuk menambahkan produk ke dalam keranjang belanja menggunakan session.
- **Checkout:** Proses pembayaran dan pengaturan pesanan untuk menyelesaikan pembelian produk di keranjang.
- **Riwayat Pesanan:** Menampilkan riwayat pesanan untuk setiap pengguna.

## Pengembangan Tambahan

- **Peringatan Saldo:** Menampilkan peringatan jika saldo pengguna mencapai batas saat akan melakukan proses checkout.
- **Validasi Saldo:** Mencegah pembayaran jika saldo pengguna tidak mencukupi untuk total harga pesanan.

## Instalasi

Berikut adalah langkah-langkah instalasi proyek ini:

1. Clone repositori ke mesin lokal Anda.
   ```bash
   git clone https://github.com/Javastick/laravel-online-store.git
   ```
2. Masuk ke direktori proyek
   ```bash
   cd laravel-online-store
   ```
3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database.
4. Generate kunci aplikasi
   ```bash
   php artisan key:generate
   ```
5. Instal dependensi menggunakan Composer.
   ```bash
   composer install
   ```
6. Jalankan migrasi database.
   ```bash
   php artisan migrate
   ```
7. Hubungkan storage dengan public
   ```bash
   php artisan storage:link
   ```
8. Jalankan server lokal.
   ```bash
   php artisan serve
   ```

Aplikasi dapat diakses di http://localhost:8000. Selamat menjelajahi dan belajar!