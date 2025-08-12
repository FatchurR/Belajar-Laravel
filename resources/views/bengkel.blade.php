<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FatchurR_otomotif - Bengkel Mobil Terpercaya</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* Import Font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* Reset dan Pengaturan Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Variabel Warna */
        :root {
            --primary-color: #1a237e; /* Biru Tua */
            --secondary-color: #ffc107; /* Kuning */
            --background-dark: #222;
            --background-light: #f4f4f4;
            --text-light: #ffffff;
            --text-dark: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigasi */
        .header {
            background: var(--text-light);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background 0.3s ease;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary-color);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            color: var(--text-light);
        }

        .btn-secondary {
            background: var(--secondary-color);
            color: var(--text-dark);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(https://images.unsplash.com/photo-1617094228393-21c7d890e5f4?q=80&w=2070&auto=format&fit=crop);
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--text-light);
        }

        .hero-content {
            max-width: 700px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Judul Section */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        /* Layanan Section */
        .layanan {
            padding: 80px 0;
            background: var(--background-light);
        }

        .layanan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .layanan-card {
            background: var(--text-light);
            padding: 2rem;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .layanan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .layanan-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .layanan-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        /* Tentang Section */
        .tentang {
            padding: 80px 0;
            background: var(--text-light);
        }

        .tentang-flex {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .tentang-img img {
            max-width: 450px;
            width: 100%;
            border-radius: 10px;
        }

        .tentang-content {
            flex: 1;
        }

        .tentang-content ul {
            list-style: none;
            margin-top: 1.5rem;
        }

        .tentang-content li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .tentang-content i {
            color: var(--primary-color);
            margin-right: 0.5rem;
            font-size: 1.2rem;
        }

        /* Kontak Section */
        .kontak {
            padding: 80px 0;
            background: var(--background-light);
        }

        .kontak-sub {
            text-align: center;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .kontak-info {
            text-align: center;
            margin-bottom: 2rem;
        }

        .kontak-info p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .kontak-info i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        /* Footer */
        .footer {
            background: var(--background-dark);
            color: var(--text-light);
            text-align: center;
            padding: 1.5rem 0;
        }

        /* Responsif untuk Mobile */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none; /* Sembunyikan untuk template sederhana */
            }

            .tentang-flex {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">FatchurR_<span>otomotif</span></a>
                <ul class="nav-links">
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
                <a href="#kontak" class="btn btn-primary">Booking Servis</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero" class="hero">
            <div class="hero-content">
                <h1>Solusi Perawatan Kendaraan Anda</h1>
                <p>Mekanik profesional, suku cadang asli, dan layanan yang bisa Anda andalkan.</p>
                <a href="#layanan" class="btn btn-secondary">Lihat Layanan Kami</a>
            </div>
        </section>

        <section id="layanan" class="layanan">
            <div class="container">
                <h2 class="section-title">Layanan Unggulan Kami</h2>
                <div class="layanan-grid">
                    <div class="layanan-card">
                        <i class="fas fa-oil-can"></i>
                        <h3>Ganti Oli & Filter</h3>
                        <p>Menggunakan oli berkualitas sesuai standar pabrikan untuk performa mesin maksimal.</p>
                    </div>
                    <div class="layanan-card">
                        <i class="fas fa-cogs"></i>
                        <h3>Tune-Up Mesin</h3>
                        <p>Pemeriksaan dan penyetelan komprehensif untuk mengembalikan efisiensi mesin.</p>
                    </div>
                    <div class="layanan-card">
                        <i class="fas fa-car-battery"></i>
                        <h3>Servis Rem & Kaki-Kaki</h3>
                        <p>Memastikan sistem pengereman dan suspensi kendaraan Anda aman dan nyaman.</p>
                    </div>
                    <div class="layanan-card">
                        <i class="fas fa-spray-can"></i>
                        <h3>Body Repair & Cat</h3>
                        <p>Perbaikan bodi penyok dan pengecatan ulang dengan hasil seperti baru.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang" class="tentang">
            <div class="container tentang-flex">
                <div class="tentang-img">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="Tim FatchurR Otomotif">
                </div>
                <div class="tentang-content">
                    <h2 class="section-title">Kenapa Memilih Kami?</h2>
                    <p>Berdiri sejak 2015, <strong>FatchurR_otomotif</strong> berkomitmen untuk memberikan pelayanan terbaik bagi setiap pelanggan. Kami percaya bahwa kejujuran, kualitas kerja, dan kepuasan pelanggan adalah pilar utama bisnis kami.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Mekanik Bersertifikat dan Berpengalaman</li>
                        <li><i class="fas fa-check-circle"></i> Penggunaan Suku Cadang Asli (Original)</li>
                        <li><i class="fas fa-check-circle"></i> Pengerjaan Tepat Waktu dan Bergaransi</li>
                        <li><i class="fas fa-check-circle"></i> Harga Kompetitif dan Transparan</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="kontak" class="kontak">
            <div class="container">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="kontak-sub">Siap melayani Anda. Jadwalkan servis atau konsultasi sekarang!</p>
                <div class="kontak-info">
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Otomotif No. 123, Sidoarjo, Jawa Timur</p>
                    <p><i class="fas fa-phone"></i> (031) 123-4567 atau WhatsApp: 0812-3456-7890</p>
                    <p><i class="fas fa-envelope"></i> kontak@fatchurr-otomotif.com</p>
                </div>
                 <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63319.34442484044!2d112.67756185136717!3d-7.44781489999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6df5992ec49%3A0x3027a76e352bd90!2sSidoarjo%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1723434645224!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>© 2025 FatchurR_otomotif. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Menambahkan efek bayangan pada header saat di-scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(5px)';
            } else {
                header.style.backgroundColor = 'var(--text-light)';
                header.style.backdropFilter = 'none';
            }
        });

        // Pesan sederhana di konsol untuk memastikan file JS terhubung
        console.log("Selamat datang di FatchurR_otomotif!");
    </script>

</body>
</html>
