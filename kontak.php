<?php
$pageTitle = 'Hubungi Kami - TOKO HASANAH';
$activePage = 'kontak';
include 'includes/header.php';
?>

<section class="hero page-header">
    <div class="container">
        <div class="page-header-content scroll-animate">
            <h2>Hubungi Kami</h2>
            <p>
                Ada pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi kami melalui berbagai cara berikut.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info scroll-animate">
                <h2>Informasi Kontak</h2>
                <p>
                    Kami siap membantu Anda dengan segala kebutuhan menjahit. Hubungi kami melalui WhatsApp, telepon, atau kunjungi langsung toko kami.
                </p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-text">
                            <h4>WhatsApp</h4>
                            <p>0812-1824-8892</p>
                            <a href="https://wa.me/6281218248892?text=Halo%20Toko%20Hasanah,%20saya%20ingin%20bertanya" target="_blank" class="btn btn-whatsapp" style="margin-top: 0.5rem; padding: 0.5rem 1rem; font-size: 0.875rem;">
                                <i class="fab fa-whatsapp"></i> Chat Sekarang
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Telepon</h4>
                            <p>0812-1824-8892</p>
                            <a href="tel:081218248892" class="btn btn-primary" style="margin-top: 0.5rem; padding: 0.5rem 1rem; font-size: 0.875rem;">
                                <i class="fas fa-phone"></i> Hubungi
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Alamat Toko</h4>
                            <p>Turi Lor, Sine, Sragen, Central Java, Indonesia</p>
                            <a href="lokasi.php" class="btn btn-outline" style="margin-top: 0.5rem; padding: 0.5rem 1rem; font-size: 0.875rem;">
                                <i class="fas fa-map-marked-alt"></i> Lihat Peta
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Jam Operasional</h4>
                            <p>Buka Setiap Hari<br>07:30 - 15:30</p>
                        </div>
                    </div>
                </div>
                
                <div style="margin-top: 2rem;">
                    <h4 style="margin-bottom: 1rem;">Ikuti Kami</h4>
                    <div class="footer-social">
                        <a href="#" class="social-link" style="background: var(--color-primary);" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" style="background: var(--color-primary);" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" style="background: var(--color-primary);" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container scroll-animate">
                <h3 style="margin-bottom: 1.5rem;">Kirim Pesan</h3>
                
                <form method="POST" action="" id="contactForm">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="nama" name="nama" required 
                            class="form-control"
                            placeholder="Masukkan nama Anda">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required 
                            class="form-control"
                            placeholder="Masukkan email Anda">
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon</label>
                        <input type="tel" id="telepon" name="telepon" 
                            class="form-control"
                            placeholder="Masukkan nomor telepon (opsional)">
                    </div>
                    
                    <div class="form-group">
                        <label for="pesan">Pesan <span class="required">*</span></label>
                        <textarea id="pesan" name="pesan" rows="5" required 
                            class="form-control"
                            placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
                
                <p class="form-note">
                    <i class="fas fa-lock"></i>
                    Atau hubungi kami langsung via WhatsApp untuk respon lebih cepat
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-title scroll-animate">
            <h2>Pertanyaan Umum</h2>
            <p>Jawaban untuk pertanyaan yang sering ditanyakan oleh pelanggan kami</p>
        </div>
        
        <div class="faq-grid">
            <div class="faq-card scroll-animate">
                <h3><i class="fas fa-question-circle"></i> Apakah bisa memesan kain dalam jumlah besar?</h3>
                <p>Tentu! Kami melayani pembelian eceran maupun grosir. Untuk pembelian dalam jumlah besar, kami bisa memberikan harga khusus.</p>
            </div>
            
            <div class="faq-card scroll-animate">
                <h3><i class="fas fa-question-circle"></i> Apakah ada layanan pengiriman?</h3>
                <p>Ya, kami menyediakan layanan pengiriman untuk area Sragen dan sekitarnya. Untuk luar kota, bisa menggunakan jasa ekspedisi pilihan Anda.</p>
            </div>
            
            <div class="faq-card scroll-animate">
                <h3><i class="fas fa-question-circle"></i> Apakah mesin jahit ada garansi?</h3>
                <p>Semua mesin jahit yang kami jual dilengkapi dengan garansi resmi dari pabrik sesuai ketentuan masing-masing merek.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>