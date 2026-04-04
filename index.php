<?php
$pageTitle = 'Beranda';
$activePage = 'home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-container">
            <div class="hero-content scroll-animate">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>Toko Kain Terpercaya di Sragen</span>
                </div>
                <h1 class="hero-title">
                    Lengkap & Terpercaya untuk <span>Kebutuhan Jahit Anda</span>
                </h1>
                <p class="hero-description">
                    Menyediakan berbagai macam kain berkualitas, alat jahit, dan aksesoris lengkap dengan harga terjangkau. Melayani penjahit pemula hingga profesional sejak tahun 2010.
                </p>
                <div class="hero-buttons">
                    <a href="https://wa.me/6281218248892?text=Halo%20Toko%20Hasanah,%20saya%20ingin%20bertanya%20tentang%20produk%20Anda" target="_blank" class="btn btn-whatsapp">
                        <i class="fab fa-whatsapp"></i>
                        Chat WhatsApp
                    </a>
                    <a href="produk.php" class="btn btn-outline">
                        <i class="fas fa-box-open"></i>
                        Lihat Produk
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">14+</span>
                        <span class="stat-label">Tahun Pengalaman</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Pelanggan Puas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Produk Tersedia</span>
                    </div>
                </div>
            </div>
            <div class="hero-image scroll-animate">
                <img src="images/hero-store.jpg" alt="Interior Toko Kain Hasanah">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="section-title scroll-animate">
            <h2>Mengapa Memilih Kami?</h2>
            <p>Kami berkomitmen memberikan pelayanan terbaik dan produk berkualitas untuk setiap kebutuhan menjahit Anda</p>
        </div>
        <div class="features">
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Kualitas Terjamin</h3>
                <p>Kain dan alat jahit dengan kualitas premium yang telah teruji dan terpercaya oleh para penjahit profesional</p>
            </div>
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <h3>Harga Terjangkau</h3>
                <p>Harga kompetitif dengan berbagai pilihan produk yang sesuai dengan budget Anda</p>
            </div>
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3>Produk Lengkap</h3>
                <p>Tersedia berbagai jenis kain, alat jahit, benang, dan aksesoris dalam satu tempat</p>
            </div>
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Pelayanan Ramah</h3>
                <p>Tim kami siap membantu memberikan rekomendasi produk sesuai kebutuhan Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section section-alt">
    <div class="container">
        <div class="about-container">
            <div class="about-image scroll-animate">
                <img src="images/about-fabrics.jpg" alt="Koleksi Kain Toko Hasanah">
            </div>
            <div class="about-content scroll-animate">
                <h2>Tentang Toko Hasanah</h2>
                <p>
                    TOKO KAIN DAN ALAT JAHIT HASANAH telah melayani masyarakat Sragen dan sekitarnya sejak tahun 2010. Kami adalah toko keluarga yang berkomitmen menyediakan kebutuhan menjahit berkualitas dengan harga yang bersahabat.
                </p>
                <p>
                    Dari penjahit pemula yang baru belajar, hingga profesional dengan pesanan banyak, kami siap menjadi partner terpercaya dalam setiap karya Anda.
                </p>
                <div class="about-values">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>Kualitas Premium</span>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>Harga Bersahabat</span>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>Pelayanan Terbaik</span>
                    </div>
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>Komunitas Lokal</span>
                    </div>
                </div>
                <a href="tentang-kami.php" class="btn btn-primary mt-4">
                    <i class="fas fa-arrow-right"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Products Preview Section -->
<section class="section">
    <div class="container">
        <div class="section-title scroll-animate">
            <h2>Kategori Produk Kami</h2>
            <p>Temukan berbagai kebutuhan menjahit dengan kualitas terbaik di toko kami</p>
        </div>
        <div class="products-grid">
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-kain-katun.jpg" alt="Kain Katun">
                    <span class="product-category">Kain</span>
                </div>
                <div class="product-info">
                    <h3>Kain Katun</h3>
                    <p>Berbagai jenis kain katun premium dengan tekstur lembut dan nyaman dipakai</p>
                    <span class="product-price">Mulai Rp 25.000/m</span>
                </div>
            </div>
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-batik.jpg" alt="Kain Batik">
                    <span class="product-category">Kain</span>
                </div>
                <div class="product-info">
                    <h3>Kain Batik</h3>
                    <p>Koleksi batik tradisional dan modern dengan motif eksklusif</p>
                    <span class="product-price">Mulai Rp 75.000/m</span>
                </div>
            </div>
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-mesin-jahit.jpg" alt="Mesin Jahit">
                    <span class="product-category">Alat</span>
                </div>
                <div class="product-info">
                    <h3>Mesin Jahit</h3>
                    <p>Mesin jahit portable dan industri dari berbagai merek terpercaya</p>
                    <span class="product-price">Mulai Rp 1.500.000</span>
                </div>
            </div>
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-benang.jpg" alt="Benang Jahit">
                    <span class="product-category">Aksesoris</span>
                </div>
                <div class="product-info">
                    <h3>Benang Jahit</h3>
                    <p>Benang berkualitas dalam berbagai warna dan ketebalan</p>
                    <span class="product-price">Mulai Rp 5.000</span>
                </div>
            </div>
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-gunting.jpg" alt="Gunting dan Alat Potong">
                    <span class="product-category">Alat</span>
                </div>
                <div class="product-info">
                    <h3>Gunting & Alat Potong</h3>
                    <p>Gunting profesional, rotary cutter, dan alat pemotong kain</p>
                    <span class="product-price">Mulai Rp 35.000</span>
                </div>
            </div>
            <div class="product-card scroll-animate">
                <div class="product-image">
                    <img src="images/product-aksesoris.jpg" alt="Aksesoris Jahit">
                    <span class="product-category">Aksesoris</span>
                </div>
                <div class="product-info">
                    <h3>Aksesoris Lengkap</h3>
                    <p>Kancing, resleting, pita, dan berbagai aksesoris menjahit</p>
                    <span class="product-price">Mulai Rp 2.000</span>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="produk.php" class="btn btn-primary">
                <i class="fas fa-th-large"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-alt">
    <div class="container">
        <div class="section-title scroll-animate">
            <h2>Apa Kata Pelanggan Kami?</h2>
            <p>Testimoni dari pelanggan setia yang telah mempercayakan kebutuhan menjahit mereka kepada kami</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card scroll-animate">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">
                    "Toko langganan saya sejak buka usaha konveksi. Kualitas kainnya bagus dan harganya bersahabat. Pelayanannya juga sangat ramah dan membantu."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">BS</div>
                    <div class="author-info">
                        <h4>Bu Siti</h4>
                        <span>Pemilik Konveksi, Sragen</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card scroll-animate">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">
                    "Saya baru belajar menjahit dan staff di sini sangat sabar membantu memilih kain dan alat yang sesuai. Recommended banget untuk pemula!"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">RA</div>
                    <div class="author-info">
                        <h4>Rina A.</h4>
                        <span>Penjahit Pemula</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card scroll-animate">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="testimonial-text">
                    "Produk lengkap, dari kain sampai aksesoris kecil semua ada. Harga juga transparan dan bersaing. Pelayanan cepat dan profesional."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">DP</div>
                    <div class="author-info">
                        <h4>Dedi P.</h4>
                        <span>Tailor Professional</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Preview Section -->
<section class="section">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info scroll-animate">
                <h2>Kunjungi Toko Kami</h2>
                <p>
                    Kami berlokasi di Guworejo, Karangmalang, Sragen. Datang langsung ke toko kami untuk melihat dan merasakan kualitas produk kami.
                </p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Alamat</h4>
                            <p>Guworejo, Karangmalang, Sragen Regency, Central Java, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telepon / WhatsApp</h4>
                            <p>0812-1824-8892</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Jam Operasional</h4>
                            <p>Buka Setiap Hari - Tutup Pukul 03:30 AM</p>
                        </div>
                    </div>
                </div>
                <a href="lokasi.php" class="btn btn-primary mt-4">
                    <i class="fas fa-map-marked-alt"></i>
                    Lihat Peta Lokasi
                </a>
            </div>
            <div class="contact-map scroll-animate">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.788503674058!2d110.9973105!3d-7.4431884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1ca9bff1cd7f%3A0xcba7f2d09bc4047c!2shasanah!5e0!3m2!1sen!2sid!4v1744000000000!5m2!1sen!2sid" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Lokasi Toko Kain Hasanah">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-container">
            <div class="cta-content">
                <h2>Siap Memulai Proyek Jahit Anda?</h2>
                <p>Hubungi kami sekarang untuk konsultasi gratis atau kunjungi toko kami untuk melihat koleksi lengkap kami.</p>
            </div>
            <div class="cta-buttons">
                <a href="https://wa.me/6281218248892?text=Halo%20Toko%20Hasanah,%20saya%20ingin%20bertanya%20tentang%20produk%20Anda" target="_blank" class="btn btn-whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    Chat WhatsApp
                </a>
                <a href="tel:081218248892" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>