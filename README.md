# Simpel-blog-laravel

Proyek ini adalah aplikasi blog berbasis Laravel yang memungkinkan pengguna untuk membuat, membaca, dan mengelola postingan berdasarkan kategori.
Setiap pengguna dapat menulis postingan di kategori tertentu, dan pengunjung bisa menelusuri atau mencari postingan berdasarkan judul.
Selain itu, setiap postingan dilengkapi fitur “Read More” agar tampilan halaman utama tetap ringkas dan rapi.

---

## Daftar Isi

- [Fitur](#fitur)  
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)  
- [Struktur Proyek](#struktur-proyek)
- [Penjelasan struktur](#penjelasan-struktur)  
- [Tangkapan Layar](#tangkapan-layar)  
- [Informasi Kontak](#informasi-kontak)  
- [Lisensi](#lisensi)  
- [Tautan Sosial](#tautan-sosial)  
- [Ucapan Terima Kasih](#ucapan-terima-kasih)  

---

## Fitur

- **CRUD Postingan**: pengguna dapat membuat, mengedit, dan menghapus postingan.
- **Kategori Postingan**: setiap postingan dapat dikelompokkan berdasarkan kategori tertentu.
- **Multi User**: beberapa pengguna dapat menulis postingan pada kategori berbeda.
- **Pencarian Postingan**: pengunjung dapat mencari postingan berdasarkan judul.
- **Read More**: menampilkan ringkasan postingan di halaman utama dengan opsi membaca selengkapnya.

---

## Teknologi yang Digunakan

- **HTML5**: digunakan untuk menyusun struktur konten secara semantik, sehingga mendukung SEO dan meningkatkan aksesibilitas.
- **CSS3**: berperan dalam mengatur tampilan serta layout agar website terlihat menarik dan responsif di berbagai perangkat.
- **JavaScript**: menambahkan interaktivitas dan fungsi dinamis pada halaman, membuat pengalaman pengguna menjadi lebih hidup.
- **PHP**: digunakan sebagai bahasa pemrograman server-side untuk memproses data dan menjalankan logika aplikasi.
- **SQLite**: menjadi sistem basis data yang menyimpan dan mengelola data seperti pengguna, kategori, serta postingan.
- **Laravel**: berfungsi sebagai framework backend untuk mengelola data, routing, autentikasi, dan logika aplikasi secara efisien.
- **Alpine.js**: membantu menangani interaksi antarmuka dengan cara yang ringan dan sederhana tanpa perlu JavaScript yang kompleks.
- **Tailwind CSS**: digunakan untuk membangun tampilan modern dan responsif dengan utilitas yang mudah disesuaikan.

---

## Struktur Proyek

```
/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   ├── Providers/
│   └── … (lain-lain)
├── bootstrap/
│   └── cache/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── index.php
├── resources/
│   ├── views/
│   ├── css/
│   ├── js/
│   └── components/
├── routes/
│   ├── web.php
│   ├── api.php
│   └── … (opsional: channels.php, console.php)
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
│   ├── Feature/
│   └── Unit/
├── vendor/
├── .env
├── artisan
├── composer.json
├── package.json
├── tailwind.config.js
├── vite.config.js
└── README.md

```

## Penjelasan struktur

- **app/**: Tempat kode utama aplikasi - Models, Controllers, Providers, dll.
- **bootstrap/**: File bootstrap-framework, cache konfigurasi, dll.
- **config/**: File konfigurasi aplikasi Laravel.
- **database/**: Migrations (definisi tabel), seeders (data awal), factories (untuk testing).
- **public/**: Entry point index.php + aset statis (CSS/JS/gambar) yang diakses publik.
- **resources/**: Views (Blade), aset front-end sumber, komponen UI.
- **routes/**: File rute aplikasi - web, API, dll.
- **storage/**: File log, sesi, cache, upload, dll.
- **tests/**: Testing otomatis aplikasi (unit & fitur).
- **vendor/**: Dependensi Composer.
- **Konfigurasiroot**: (composer.json, package.json, tailwind.config.js, vite.config.js) untuk manajemen paket dan tooling front-end.
- **LICENSE**: Menyediakan informasi tentang lisensi penggunaan proyek.
- **README.md**: Dokumentasi proyek yang menjelaskan tentang aplikasi, fitur, dan cara penggunaan.

---

## Tangkapan Layar

#### Halaman Login
![Preview Website](assets/images/login.png)

#### Halaman Utama
![Preview Website](assets/images/home.png)

#### Halaman Managemen Jenis Layanan
![Preview Website](assets/images/jenis%20layanan.png)

#### Halaman Managemen Jenis Laundry Satuan
![Preview Website](assets/images/jenis%20laundry%20satuan.png)

#### Halaman Managemen Jenis Laundry Kiloan
![Preview Website](assets/images/jenis%20laundry%20kiloan.png)

#### Halaman managemen Pelanggan
![Preview Website](assets/images/managemen%20pelanggan.png)

#### Halaman Transaksi
![Preview Website](assets/images/transaksi%20baru.png)

#### Halaman Hasil Transaksi Berhasil
![Preview Website](assets/images/transaksi%20berhasil.png)

#### Halaman Hasil Transaksi 
![Preview Website](assets/images/hasil%20transaksi.png)

---

## Informasi Kontak
Jika Anda tertarik bekerja sama atau memiliki pertanyaan, hubungi saya:
- Email: suriapratama0job@gmail.com
- WhatsApp: +62 831-9026-0337
- Lokasi: Cikarang, Indonesia

---

## Lisensi
Proyek ini dilisensikan di bawah **MIT License**. Lihat file [LICENSE](LICENSE) untuk detail.

---

## Tautan Sosial
Terhubung dengan saya di:
- [LinkedIn](https://www.linkedin.com/in/suria-pratama-97805434b/)
- [Twitter](https://x.com/SuriaPratama0)
- [Instagram](https://www.instagram.com/suria_pratama0/)
- [Dribbble]

---

## Ucapan Terima Kasih
- Font Awesome: Ikon yang digunakan untuk mempercantik tampilan antarmuka.
- Bootstrap: Framework CSS yang membantu membuat desain responsif dan konsisten.
- Inspirasi dari berbagai aplikasi laundry dan sistem manajemen bisnis.
- Terima kasih untuk semua masukan, dukungan, dan bantuan selama pengembangan proyek ini.
