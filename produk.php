<?php
$pageTitle = 'Produk Kami - TOKO HASANAH';
$activePage = 'produk';
include 'includes/header.php';
?>

<section class="hero page-header">
    <div class="container">
        <div class="page-header-content scroll-animate">
            <h2>Produk Kami</h2>
            <p>
                Temukan berbagai kebutuhan menjahit berkualitas dengan harga terjangkau. Dari kain, alat jahit, hingga aksesoris lengkap tersedia di sini.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="products-filter scroll-animate">
            <button class="filter-btn active" data-filter="all">Semua Produk</button>
            <button class="filter-btn" data-filter="kain">Kain & Tekstil</button>
            <button class="filter-btn" data-filter="alat">Alat Jahit</button>
            <button class="filter-btn" data-filter="aksesoris">Aksesoris</button>
        </div>
        
        <div class="products-grid">
            <div class="product-card scroll-animate" data-category="kain">
                <div class="product-image">
                    <img src="images/product-kain-katun.jpg" alt="Kain Katun" loading="lazy">
                    <span class="product-category">Kain</span>
                </div>
                <div class="product-info">
                    <h3>Kain</h3>
                    <p>Kain berkualitas tinggi dengan tekstur lembut, nyaman dipakai, dan mudah dijahit. Tersedia dalam berbagai warna.</p>
                    <span class="product-price">Mulai Rp 12.000/m</span>
                </div>
            </div>
            
            <div class="product-card scroll-animate" data-category="kain">
                <div class="product-image">
                    <img src="images/product-batik.jpg" alt="Kain Batik" loading="lazy">
                    <span class="product-category">Kain</span>
                </div>
                <div class="product-info">
                    <h3>Kain Batik Tradisional & Modern</h3>
                    <p>Koleksi batik dengan motif eksklusif dari berbagai daerah di Indonesia. Cocok untuk pakaian formal dan kasual.</p>
                    <span class="product-price">Mulai Rp 12.000/m</span>
                </div>
            </div>
            
            <div class="product-card scroll-animate" data-category="aksesoris">
                <div class="product-image">
                    <img src="images/product-benang.jpg" alt="Benang Jahit" loading="lazy">
                    <span class="product-category">Aksesoris</span>
                </div>
                <div class="product-info">
                    <h3>Benang Jahit Premium</h3>
                    <p>Benang berkualitas tinggi dalam berbagai warna dan ketebalan. Kuat, tidak mudah putus, dan hasil jahitan rapi.</p>
                    <span class="product-price">Rp 3.000/gulung</span>
                </div>
            </div>
            
            <div class="product-card scroll-animate" data-category="alat">
                <div class="product-image">
                    <img src="images/product-gunting.jpg" alt="Gunting dan Alat Potong" loading="lazy">
                    <span class="product-category">Alat</span>
                </div>
                <div class="product-info">
                    <h3>Gunting & Alat Potong Profesional</h3>
                    <p>Gunting tailor berkualitas, rotary cutter, cutting mat, dan alat pemotong kain lainnya.</p>
                    <span class="product-price">Rp 8.000</span>
                </div>
            </div>
            
            <div class="product-card scroll-animate" data-category="aksesoris">
                <div class="product-image">
                    <img src="images/product-aksesoris.jpg" alt="Aksesoris Jahit" loading="lazy">
                    <span class="product-category">Aksesoris</span>
                </div>
                <div class="product-info">
                    <h3>Aksesoris Jahit Lengkap</h3>
                    <p>Kancing, resleting, pita, renda, payet, dan berbagai aksesoris untuk melengkapi karya Anda.</p>
                    <span class="product-price">Rp 1.000</span>
                </div>
            </div>
        </div>
        
        <div class="section-alt" style="margin-top: 4rem; padding: 3rem; border-radius: var(--radius-lg);">
            <div class="section-title scroll-animate" style="margin-bottom: 2rem;">
                <h3>Produk Lainnya yang Tersedia</h3>
                <p>Berbagai pilihan produk tambahan untuk melengkapi kebutuhan menjahit Anda</p>
            </div>
            <div class="features" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Kain Rayon</h4>
                    <p style="font-size: 0.875rem;">Lembut dan jatuh, cocok untuk pakaian santai</p>
                </div>
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-couch"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Kain Blacu</h4>
                    <p style="font-size: 0.875rem;">Untuk tas, dompet, dan kerajinan tangan</p>
                </div>
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Kain Sifon</h4>
                    <p style="font-size: 0.875rem;">Elegan dan ringan untuk pakaian pesta</p>
                </div>
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Alat Ukur</h4>
                    <p style="font-size: 0.875rem;">Meteran, penggaris, dan pattern paper</p>
                </div>
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-thumbtack"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Jarum & Peniti</h4>
                    <p style="font-size: 0.875rem;">Berbagai ukuran untuk kebutuhan berbeda</p>
                </div>
                <div class="feature-card scroll-animate" style="padding: 1.5rem;">
                    <div class="feature-icon" style="width: 50px; height: 50px; font-size: 1.25rem;">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h4 style="font-size: 1rem;">Cat Kain</h4>
                    <p style="font-size: 0.875rem;">Untuk mendekorasi dan memperindah karya</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-title scroll-animate">
            <h2>Cara Pemesanan</h2>
            <p>Pilih cara yang paling nyaman untuk Anda berbelanja di toko kami</p>
        </div>
        <div class="features">
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-store"></i>
                </div>
                <h3>Kunjungi Toko</h3>
                <p>Datang langsung ke toko kami untuk melihat dan memilih produk secara langsung</p>
            </div>
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>Chat WhatsApp</h3>
                <p>Kirim pesan via WhatsApp untuk konsultasi dan pemesanan produk</p>
            </div>
            <div class="feature-card scroll-animate">
                <div class="feature-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Telepon</h3>
                <p>Hubungi kami langsung untuk informasi stok dan harga terkini</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-container">
            <div class="cta-content">
                <h2>Tidak Menemukan yang Anda Cari?</h2>
                <p>Hubungi kami untuk menanyakan ketersediaan produk atau request produk khusus</p>
            </div>
            <div class="cta-buttons">
                <a href="https://wa.me/6281218248892?text=Halo%20Toko%20Hasanah,%20saya%20ingin%20menanyakan%20produk%20" target="_blank" class="btn btn-whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    Tanya Produk
                </a>
                <a href="tel:081218248892" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    Telepon Kami
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>