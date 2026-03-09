<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


#  Website Himatika POLINEMA Kampus Kediri

Website Himpunan Mahasiswa Manajemen Informatika (Himatika) POLINEMA Kampus Kediri.

---

## Preview Website

<p align="center">
  <img src="https://github.com/user-attachments/assets/1e167915-8d6f-426c-b510-efd079e4efde" width="100%" alt="Hero Section">
</p>

<table style="width: 100%;">
  <tr>
    <td width="50%">
      <img src="https://github.com/user-attachments/assets/c917d060-c47e-49ae-84d6-8a8b7f296597" alt="Tentang Kami">
      <p align="center"><i>Halaman Deskripsi & Tujuan</i></p>
    </td>
    <td width="50%">
      <img src="https://github.com/user-attachments/assets/8995bafe-0f67-4393-8db0-39c4601fde09" alt="Struktur BPH">
      <p align="center"><i>Halaman Struktur Pengurus</i></p>
    </td>
  </tr>
</table>

<p align="center">
  <img src="https://github.com/user-attachments/assets/1ef8f0c8-f794-4855-b618-63e5b9dd5e17" width="100%" alt="Departemen SDM">
  <br><i>Halaman Anggota Departemen</i>
</p>

---

## 📂 Penjelasan Fitur

1. **Beranda Utama**: Desain landing page dengan identitas warna Himatika.
2. **Tentang Kami**: Informasi lengkap mengenai tujuan organisasi.
3. **Struktur Organisasi**: Menampilkan profil Pengurus.
4. **Detail Departemen**: Menampilkan Informasi mengenai divisi (seperti SDM) dan daftar anggota per angkatan.

---

## ⚙️ Cara Menjalankan Proyek

Ikuti perintah berikut secara berurutan di terminal/CMD:

| No | Perintah | Keterangan |
|:--:|:---|:---|
| 1 | `composer install` | Install dependensi PHP |
| 2 | `npm install` | Install dependensi JS |
| 3 | `cp .env.example .env` | Buat file konfigurasi (jika belum ada) |
| 4 | `php artisan key:generate` | Generate app key |
| 5 | `npm run dev` | Jalankan Vite (Terminal 1) |
| 6 | `php artisan serve` | Jalankan server (Terminal 2) |

> **Note:** Kamu bisa skip langkah migrasi database (`php artisan migrate`) karena proyek ini pada dasarnya **website statis** — hanya menampilkan view tanpa ada interaksi database.

Setelah semua langkah selesai, buka browser ke **http://127.0.0.1:8000** dan website langsung jalan! 
