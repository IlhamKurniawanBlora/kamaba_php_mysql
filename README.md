# Kamaba News

Kamaba News adalah aplikasi blog sederhana yang memungkinkan pengguna untuk melihat berita dan kegiatan Kamaba. Aplikasi ini memiliki fitur login untuk mengakses halaman admin.

## Fitur
- Login sebagai admin dengan email `superadmin@gmail.com` dan password `superadmin`.
- Menampilkan aktivitas Kamaba dengan gambar dan keterangan.
- Dashboard untuk pengelolaan konten.

## Instalasi

### Prasyarat
- Web server (Apache/Nginx)
- PHP 7.4 atau lebih tinggi
- MySQL atau MariaDB

### Langkah-langkah
1. Clone repository ini ke dalam direktori web server Anda.
    ```bash
    git clone https://github.com/IlhamKurniawanBlora/kamaba_news.git
    ```
2. Buat database `kamaba_news` di MySQL dan import file `database.sql` yang tersedia di dalam repository ini.
3. Edit file konfigurasi koneksi database di `config.php` (jika diperlukan).
4. Akses aplikasi di browser dengan membuka `localhost/login.php`.

## Login
Untuk login, gunakan kredensial berikut:
- **Email:** `superadmin@gmail.com`
- **Password:** `superadmin`

## Lisensi
MIT License
