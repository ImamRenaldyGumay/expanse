# Cashflow Management System

Aplikasi **Cashflow Management System** adalah sebuah sistem manajemen keuangan yang dibangun menggunakan **Laravel 10** dan **MySQL** untuk membantu pengguna dalam mengelola pemasukan dan pengeluaran mereka dengan lebih efisien.

## Fitur Utama
- **Pencatatan Keuangan**: Mencatat pemasukan dan pengeluaran dengan kategori.
- **Dashboard Interaktif**: Menampilkan ringkasan keuangan dalam bentuk grafik.
- **Smart Notifikasi**: Memberikan peringatan atau saran terkait keuangan.
- **Manajemen Pengguna**: Multi-user dengan hak akses berbeda.
- **Laporan Keuangan**: Ekspor laporan dalam format CSV atau PDF.

## Teknologi yang Digunakan
- **Backend**: Laravel 10
- **Database**: MySQL
- **Frontend**: Blade, Tailwind CSS, JavaScript
- **Library Tambahan**: SweetAlert2, Chart.js

## Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/username/repository.git
cd repository
```

### 2. Instal Dependency
```bash
composer install
```

### 3. Konfigurasi Environment
- Salin file `.env.example` menjadi `.env`
- Sesuaikan konfigurasi database di dalam file `.env`

### 4. Generate Key
```bash
php artisan key:generate
```

### 5. Migrasi dan Seeder Database
```bash
php artisan migrate --seed
```

### 6. Jalankan Server
```bash
php artisan serve
```

Akses aplikasi melalui browser: `http://127.0.0.1:8000`

## Cara Penggunaan
1. **Login** dengan akun yang telah dibuat.
2. **Tambahkan pemasukan dan pengeluaran** sesuai kategori.
3. **Pantau keuangan** melalui dashboard interaktif.
4. **Ekspor laporan** jika diperlukan.

## Kontribusi
Jika ingin berkontribusi, silakan fork repository ini dan buat pull request dengan perubahan yang ingin diajukan.

## Lisensi
Proyek ini dirilis di bawah lisensi **MIT**.

---

**Dibuat dengan ❤️ oleh M Imam Renaldy Gumay**

