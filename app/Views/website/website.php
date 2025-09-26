<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Gemilang Sapta Perdana</title>

    <link rel="stylesheet" href="<?= base_url('Website/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('Website/css/services.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('website/images/logo_baru.png'); ?>" type="image/x-icon">

    <style>
        /* CSS yang sudah ada (tidak terkait navigasi) */
        .cleaning-title {
            color: #1565c0;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            position: relative;
            font-weight: 600;
        }

        .cleaning-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #1565c0, #0d47a1);
            margin: 20px auto 0;
            border-radius: 2px;
        }

        .cleaning-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            justify-content: center;
            margin-top: 2rem;
        }

        .cleaning-card {
            flex: 1 1 300px;
            max-width: 350px;
            background: #fff;
            border-radius: 15px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(21, 101, 192, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .cleaning-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(21, 101, 192, 0.15);
        }

        .cleaning-image-container {
            position: relative;
            width: 100%;
            height: 250px;
            margin-bottom: 25px;
            overflow: hidden;
            border-radius: 12px;
            background: #f8f9fa;
        }

        .cleaning-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 12px;
            transition: transform 0.4s ease;
        }

        .cleaning-card:hover .cleaning-image {
            transform: scale(1.1);
        }

        .cleaning-card h3 {
            color: #1565c0;
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .cleaning-card p {
            color: #555;
            line-height: 1.7;
            font-size: 1rem;
            margin: 0;
        }

        .cleaning-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #1565c0, #0d47a1);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .logo-text {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2d3748;
        }

        /* ================================================= */
        /* CSS NAVIGASI (DESKTOP & MOBILE) - SUDAH DIPERBAIKI */
        /* ================================================= */

        /* Aturan dasar untuk Navigasi */
        nav ul {
            list-style: none;
            display: flex;
            /* Default untuk Desktop */
            align-items: center;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #2d3748;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        nav ul li a:hover {
            color: #3182ce;
        }

        /* Tombol Hamburger (disembunyikan di desktop) */
        .mobile-toggle {
            display: none;
            /* Sembunyi di desktop */
            cursor: pointer;
        }

        .mobile-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 5px 0;
            transition: all 0.3s ease;
        }

        /* Animasi untuk tombol hamburger menjadi 'X' */
        .mobile-toggle.active span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .mobile-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-toggle.active span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* Dropdown Styling */
        .dropdown-parent .arrow {
            font-size: 0.7rem;
            margin-left: 5px;
        }

        .dropdown-menu {
            position: absolute;
            top: 120%;
            left: 0;
            min-width: 180px;
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            display: none;
            flex-direction: column;
            padding: 8px 0;
            z-index: 1000;
        }

        .dropdown-menu a {
            padding: 10px 16px;
            color: #2d3748;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .dropdown-menu a:hover {
            background: #f1f5f9;
            color: #3182ce;
        }

        /* Logika hover dropdown untuk desktop (dihapus agar konsisten dengan klik) */
        /* .dropdown-parent:hover .dropdown-menu {
            display: flex;
        } */

        /* Logika klik dropdown (ditangani JS) */
        .dropdown-parent.active .dropdown-menu {
            display: flex;
        }

        /* ================================================= */
        /* ATURAN RESPONSIVE UNTUK MOBILE (DITARUH DI AKHIR) */
        /* ================================================= */
        @media (max-width: 768px) {

            /* Tampilkan tombol hamburger di mobile */
            .mobile-toggle {
                display: block;
                /* Tampilkan di mobile */
            }

            /* Sembunyikan menu utama di mobile secara default */
            .nav-menu {
                display: none;
                /* Sembunyikan menu */
                flex-direction: column;
                /* Ubah orientasi jadi vertikal */
                position: absolute;
                top: 100%;
                /* Posisi di bawah header */
                left: 0;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
            }

            /* Tampilkan menu jika punya kelas .active */
            .nav-menu.active {
                display: flex;
                /* Tampilkan lagi menunya */
            }

            /* Tampilkan dropdown saat parent diklik (punya kelas .active) */
            .dropdown-parent.active .dropdown-menu {
                display: flex;
            }

            /* Atur ulang style dropdown untuk mobile */
            .dropdown-menu {
                position: static;
                /* Hapus posisi absolut */
                box-shadow: none;
                border-top: 1px solid #eee;
                padding-left: 20px;
                /* Beri indentasi agar terlihat seperti submenu */
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="nav-container">
            <a href="/" class="logo">
                <img src="<?= base_url('website/images/logo_baru.png') ?>" alt="Logo GSP" class="logo-img" />
                <span class="logo-text">PT GEMILANG SAPTA PERDANA</span>
            </a>

            <nav>
                <div class="mobile-toggle" id="mobileToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="/">Home</a></li>
                    <li><a href="about">Tentang Kami</a></li>
                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="menu-link">
                            Layanan&#9662; <span class="arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="services_security">Security Services</a>
                            <a href="cleaning_service">Cleaning Service</a>
                            <a href="gardening">Gardening</a>
                            <a href="receptionist">Receptionist Service</a>
                            <a href="driver">Driver</a>
                            <a href="labor_supply">Labor Supply</a>
                        </div>
                    </li>
                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="menu-link">
                            LPK&#9662; <span class="arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="rubber_seal">Rubber Seal</a>
                            <a href="wiring_harness">Wiring Harness</a>
                            <a href="sewing">Sewing</a>
                            <a href="packing">Packing</a>
                            <a href="molding_operator">Molding Operator</a>
                        </div>
                    </li>
                    <li><a href="loker">Loker</a></li>
                    <li><a href="berita">Berita</a></li>
                    <li><a href="contact">Kontak</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?= $this->renderSection('content') ?>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 PT Gemilang Sapta Perdana. All rights reserved.</p>
            <p>Facility Services Company - Solusi Terpercaya untuk Kebutuhan Bisnis Anda</p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mobileToggle = document.getElementById("mobileToggle");
            const navMenu = document.getElementById("navMenu");

            // Bagian untuk toggle menu mobile (hamburger)
            if (mobileToggle) {
                mobileToggle.addEventListener("click", () => {
                    navMenu.classList.toggle("active");
                    mobileToggle.classList.toggle("active");
                });
            }

            // Logika untuk Dropdown Klik
            const dropdownParents = document.querySelectorAll(".dropdown-parent");

            dropdownParents.forEach(parent => {
                const link = parent.querySelector("a.menu-link");

                if (link) {
                    link.addEventListener("click", (e) => {
                        e.preventDefault();

                        // Cek apakah dropdown yang diklik sudah aktif
                        const isActive = parent.classList.contains("active");

                        // Tutup semua dropdown lain terlebih dahulu
                        document.querySelectorAll(".dropdown-parent").forEach(el => {
                            if (el !== parent) { // jangan tutup diri sendiri
                                el.classList.remove("active");
                            }
                        });

                        // Buka atau tutup dropdown yang diklik
                        parent.classList.toggle("active");
                    });
                }
            });

            // Klik di luar menu untuk menutup semua dropdown yang aktif
            document.addEventListener("click", (e) => {
                // Cek apakah yang diklik bukan bagian dari dropdown atau mobile toggle
                if (!e.target.closest(".dropdown-parent") && !e.target.closest("#mobileToggle")) {
                    document.querySelectorAll(".dropdown-parent").forEach(el => {
                        el.classList.remove("active");
                    });
                }
            });
        });
    </script>
</body>

</html>