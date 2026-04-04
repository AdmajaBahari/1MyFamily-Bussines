# TOKO KAIN DAN ALAT JAHIT HASANAH

Website resmi untuk TOKO KAIN DAN ALAT JAHIT HASANAH - toko kain dan alat jahit terlengkap di Sragen, Jawa Tengah.

## Deskripsi

Website ini dibuat untuk memperkenalkan dan mempromosikan TOKO KAIN DAN ALAT JAHIT HASANAH kepada masyarakat luas. Website ini menampilkan informasi lengkap tentang toko, produk yang dijual, lokasi, dan cara menghubungi kami.

## Fitur

- **Desain Responsif**: Tampilan optimal di desktop, tablet, dan mobile
- **Navigasi Mudah**: Menu yang jelas dan intuitif
- **Integrasi WhatsApp**: Tombol chat WhatsApp langsung
- **Google Maps**: Peta lokasi toko yang akurat
- **Galeri Produk**: Menampilkan berbagai kategori produk
- **Form Kontak**: Formulir untuk mengirim pesan
- **SEO Friendly**: Dioptimalkan untuk mesin pencari

## Halaman

1. **Beranda (index.php)** - Halaman utama dengan hero section, fitur, dan highlight produk
2. **Tentang Kami (tentang-kami.php)** - Cerita, visi, misi, dan nilai-nilai toko
3. **Produk (produk.php)** - Katalog produk dengan filter kategori
4. **Lokasi (lokasi.php)** - Informasi lokasi lengkap dengan peta
5. **Kontak (kontak.php)** - Informasi kontak dan formulir pesan

## Teknologi

- **PHP** - Bahasa pemrograman server-side
- **HTML5** - Markup struktur halaman
- **CSS3** - Styling dengan custom CSS variables
- **JavaScript** - Interaktivitas dan animasi
- **Font Awesome** - Ikon
- **Google Fonts** - Font Poppins

## Struktur Folder

```
hasanah-toko-kain/
├── css/
│   └── style.css          # File CSS utama
├── js/
│   └── main.js            # File JavaScript utama
├── images/                # Folder gambar
│   ├── hero-store.jpg
│   ├── about-fabrics.jpg
│   └── product-*.jpg
├── includes/
│   ├── header.php         # Header template
│   └── footer.php         # Footer template
├── pages/                 # Folder untuk halaman tambahan (jika ada)
├── index.php              # Halaman beranda
├── tentang-kami.php       # Halaman tentang
├── produk.php             # Halaman produk
├── lokasi.php             # Halaman lokasi
├── kontak.php             # Halaman kontak
├── .htaccess              # Konfigurasi Apache
└── README.md              # File ini
```

## Instalasi

1. Upload semua file ke server web (Apache dengan mod_rewrite enabled)
2. Pastikan PHP versi 7.4 atau lebih baru
3. Akses website melalui browser

## Konfigurasi

### WhatsApp
Edit nomor WhatsApp di file `includes/footer.php` dan halaman lainnya:
```php
https://wa.me/6281218248892
```

### Google Maps
Edit URL Google Maps di file `index.php` dan `lokasi.php`:
```html
<iframe src="https://www.google.com/maps/embed?pb=..."></iframe>
```

### Warna
Warna tema dapat diubah di file `css/style.css` pada bagian `:root`:
```css
:root {
    --color-primary: #9CAF88;
    --color-secondary: #A8C5D9;
    --color-cream: #FDF8F3;
    /* ... */
}
```

## Informasi Kontak

- **Nama Toko**: TOKO KAIN DAN ALAT JAHIT HASANAH
- **Alamat**: Guworejo, Karangmalang, Sragen Regency, Central Java, Indonesia
- **Telepon/WhatsApp**: 0812-1824-8892
- **Jam Operasional**: Buka Setiap Hari, Tutup Pukul 03:30 AM

## Lisensi

© 2024 TOKO KAIN DAN ALAT JAHIT HASANAH. All Rights Reserved.

---

Dibuat dengan ❤️ untuk komunitas penjahit Sragen
