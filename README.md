# Aplikasi Toko Sederhana

Aplikasi Toko ini adalah aplikasi berbasis web yang dikembangkan menggunakan **PHP**, **MySQL**, dan **CodeIgniter 4**. Aplikasi ini bertujuan untuk membantu pengelolaan data produk, pelanggan, dan transaksi secara sederhana dan efisien.

## ✨ Fitur

Berikut adalah fitur-fitur utama yang tersedia dalam aplikasi ini:

- **Manajemen Produk**: Tambah, ubah, dan hapus data produk.
- **Manajemen Kategori**: Menambahkan dan mengelompokkan produk berdasarkan kategori.
- **Manajemen Pelanggan**: Tambah, ubah, dan hapus data pelanggan.
- **Transaksi Penjualan**: Mencatat transaksi dan menghitung total harga otomatis.
- **Dashboard Admin**: Menampilkan ringkasan data produk, pelanggan, dan penjualan.
- **Autentikasi Login**: Login admin dan logout untuk akses backend sistem.

## ⚙️ Langkah Installasi

1. Pastikan sudah menginstall: `XAMPP`, `Composer`, dan `Git`.
2. Ekstrak folder proyek ke direktori `htdocs`, misalnya: `C:\xampp\htdocs\Tugas07`.
3. Buka terminal di folder proyek dan jalankan: `composer install`.
4. Salin file `.env.example` menjadi `.env` lalu konfigurasi database seperti berikut:

```env
database.default.hostname = localhost
database.default.database = toko_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

5. Buat database baru di phpMyAdmin (`toko_db`) dan import file SQL jika ada.
6. Jalankan server lokal dengan perintah: `php spark serve`.
7. Akses aplikasi di browser melalui alamat: `http://localhost:8080`.

## 📁 Struktur Proyek

```
Tugas07/
├── app/
│   ├── Controllers/        # Berisi controller utama aplikasi
│   ├── Models/             # Berisi model untuk berinteraksi dengan database
│   ├── Views/              # Template antarmuka pengguna (HTML + PHP)
│   └── Config/             # Konfigurasi sistem dan database
├── public/                 # Folder publik yang diakses dari web
├── .env                    # Konfigurasi lingkungan
├── composer.json           # Daftar dependency PHP
├── spark                   # File CLI bawaan CodeIgniter 4
└── README.md               # Dokumentasi proyek ini
```

## 👨‍💻 Pengembang

Yafi Humam Muzhafar — Teknik Informatika, Universitas Dian Nuswantoro
