<?php
// Header include file for Toko Kain Hasanah
// Usage: include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TOKO KAIN DAN ALAT JAHIT HASANAH - Lengkap & Terpercaya untuk Kebutuhan Jahit Anda. Menyediakan berbagai macam kain, alat jahit, dan aksesoris dengan harga terjangkau di Sragen, Jawa Tengah.">
    <meta name="keywords" content="toko kain, alat jahit, kain katun, batik, benang jahit, mesin jahit, sragen, jawa tengah">
    <meta name="author" content="TOKO KAIN DAN ALAT JAHIT HASANAH">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hasanahtokokain.com/">
    <meta property="og:title" content="TOKO KAIN DAN ALAT JAHIT HASANAH - Lengkap & Terpercaya">
    <meta property="og:description" content="Menyediakan berbagai macam kain, alat jahit, dan aksesoris dengan harga terjangkau di Sragen, Jawa Tengah.">
    <meta property="og:image" content="images/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://hasanahtokokain.com/">
    <meta property="twitter:title" content="TOKO KAIN DAN ALAT JAHIT HASANAH - Lengkap & Terpercaya">
    <meta property="twitter:description" content="Menyediakan berbagai macam kain, alat jahit, dan aksesoris dengan harga terjangkau di Sragen, Jawa Tengah.">
    <meta property="twitter:image" content="images/og-image.jpg">
    
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>TOKO KAIN DAN ALAT JAHIT HASANAH</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🧵</text></svg>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="logo">
                    <div class="logo-icon">H</div>
                    <div class="logo-text">
                        TOKO HASANAH
                        <span>KAIN & ALAT JAHIT</span>
                    </div>
                </a>
                
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="tentang-kami.php" class="nav-link <?php echo $activePage === 'about' ? 'active' : ''; ?>">Tentang Kami</a></li>
                    <li><a href="produk.php" class="nav-link <?php echo $activePage === 'products' ? 'active' : ''; ?>">Produk</a></li>
                    <li><a href="lokasi.php" class="nav-link <?php echo $activePage === 'location' ? 'active' : ''; ?>">Lokasi</a></li>
                    <li><a href="kontak.php" class="nav-link <?php echo $activePage === 'contact' ? 'active' : ''; ?>">Kontak</a></li>
                </ul>
                
                <div class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
