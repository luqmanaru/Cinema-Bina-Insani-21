# Cinema-Bina-Insani-21

![PHP](https://img.shields.io/badge/PHP-7.x-blue.svg)
![HTML](https://img.shields.io/badge/HTML5-orange.svg)
![CSS](https://img.shields.io/badge/CSS3-purple.svg)

Aplikasi pemesanan tiket bioskop sederhana dengan perhitungan harga otomatis berdasarkan film, hari, dan waktu tayang.

## 📋 Deskripsi

Cinema Bina Insani 21 adalah aplikasi web sederhana yang dibuat untuk memudahkan pemesanan tiket bioskop. Aplikasi ini menghitung harga tiket secara otomatis berdasarkan kode film, hari, dan waktu tayang yang dipilih oleh pengguna.

## ✨ Fitur Utama

- **Pemilihan Film**: Memilih dari 4 film yang tersedia
- **Pemilihan Waktu**: Memilih waktu tayang dari 6 pilihan jam
- **Pemilihan Hari**: Memilih kategori hari (Senin-Minggu, Jumat, Sabtu-Minggu)
- **Perhitungan Harga Otomatis**: Harga tiket dihitung berdasarkan film, hari, dan waktu
- **Struk Pembayaran**: Menampilkan struk pembayaran setelah pemesanan
- **Navigasi Mudah**: Tombol untuk memesan lagi atau membatalkan

## 🎬 Daftar Film

| Kode | Judul Film |
|-------|------------|
| TRM | Transformers The Last Knight |
| MID | Mission Impossible - Dead Reckoning Part One |
| TMM | The Mummy |
| TWM | Wonder Woman |

## 💰 Harga Tiket

Harga tiket bervariasi berdasarkan film, hari, dan waktu tayang:

- **Transformers The Last Knight**:
  - Senin-Minggu: Rp 40.000 (12.30-13.30), Rp 60.000 (15.30-20.30)
  - Jumat: Rp 50.000 (semua jam)

- **Mission Impossible - Dead Reckoning Part One**:
  - Senin-Minggu: Rp 60.000 (12.30-13.30), Rp 80.000 (15.30-20.30)
  - Jumat: Rp 70.000 (semua jam)

- **The Mummy**:
  - Senin-Minggu: Rp 45.000 (12.30-13.30), Rp 65.000 (15.30-20.30)
  - Jumat: Rp 55.000 (semua jam)

- **Wonder Woman**:
  - Senin-Minggu: Rp 70.000 (12.30-13.30), Rp 90.000 (15.30-20.30)
  - Jumat: Rp 80.000 (semua jam)

## 🛠 Teknologi yang Digunakan

- **Frontend**: HTML5, CSS3
- **Backend**: PHP 7.x
- **Server**: Apache/Nginx

## 📁 Struktur File

```
cinema-bina-insani-21/
├── index.php (atau index-hanif_luqmanul_hakim_soal1.php)
├── css/
│   └── style.css
└── README.md
```

## 🚀 Cara Instalasi

### Persyaratan
- PHP 7.x atau lebih tinggi
- Web Server (Apache, Nginx, dll.)

### Langkah-langkah instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/luqmanaru/cinema-bina-insani-21.git
   ```

2. **Pindahkan ke direktori web server**
   ```bash
   # Untuk XAMPP
   cp -R cinema-bina-insani-21 /opt/lampp/htdocs/cinema
   
   # Untuk server Linux
   sudo cp -R cinema-bina-insani-21 /var/www/html/cinema
   ```

3. **Akses aplikasi**
   - Buka browser dan akses `http://localhost/cinema/`
   - Atau sesuai dengan direktori yang Anda atur

## 💻 Cara Penggunaan

1. Buka halaman utama aplikasi
2. Pilih film dari dropdown "Kode Tiket"
3. Pilih waktu tayang dengan radio button
4. Pilih kategori hari dari dropdown
5. Masukkan jumlah tiket yang ingin dibeli
6. Klik tombol "Simpan"
7. Struk pembayaran akan ditampilkan dengan rincian:
   - Kode film
   - Nama film
   - Harga tiket per lembar
   - Hari
   - Waktu
   - Jumlah beli
   - Total bayar
8. Klik "Ingin memesan lagi?" untuk kembali ke halaman pemesanan

## 🧪 Pengujian

Untuk menguji aplikasi, coba kombinasi berikut:

1. **Transformers The Last Knight**:
   - Hari: Senin-Minggu, Waktu: 12.30, Jumlah: 2
   - Hasil: Total Bayar = Rp 80.000

2. **Mission Impossible**:
   - Hari: Jumat, Waktu: 19.30, Jumlah: 3
   - Hasil: Total Bayar = Rp 210.000

3. **The Mummy**:
   - Hari: Sabtu-Minggu, Waktu: 15.30, Jumlah: 1
   - Hasil: Total Bayar = Rp 65.000

4. **Wonder Woman**:
   - Hari: Senin-Minggu, Waktu: 20.30, Jumlah: 4
   - Hasil: Total Bayar = Rp 360.000

---
**luqmanaru**

Ini adalah proyek Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web Dasar di Universitas Bina Insani.
