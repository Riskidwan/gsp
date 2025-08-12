<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Gemilang Sapta Perdana</title>
    <!-- <link rel="stylesheet" href="website/assets/css/main.css"> -->
    <link rel="stylesheet" href="<?= base_url('Website/css/main.css') ?>">

</head>

<body>
    <header class="header">
        <div class="nav-container">
            <a href="#home" class="logo">
                <img src="website/images/logo_baru.png" alt="Logo GSP" class="logo-img" />
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
                    <li class="dropdown-parent">
                        <a href="about">Tentang Kami <i class="fas fa-chevron-down"></i></a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="about">Profil Perusahaan</a></li>

                            <li><a href="struktur">Struktur Manajemen</a></li>
                            <li><a href="keunggulan">Keunggulan</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown-parent">
                        <a>Layanan &#9662;</a> <!-- &#9662; adalah ▼ -->
                        <ul class="dropdown-menu">
                            <a href="services_security">Security Services</a>

                            <a href="cleaning_service">Cleaning Service</a>
                            <a href="gardening">Gardening</a>
                            <a href="receptionist">Receptionist Service</a>

                            <a href="driver">Driver</a>
                            <a href="labor_supply">Labor Supply</a>
                        </ul>
                    </li>
                 <li class="dropdown-parent">
  <a href="#">LPK &#9662;</a> <!-- ▼ dropdown trigger -->
  <ul class="dropdown-menu">
    <a href="/rubber_seal">Rubber Seal</a>
    <a href="/wiring_harness">Wiring Harness</a>  
    <a href="/sewing">Sewing</a>
    <a href="/packing">Packing</a>
    <a href="/molding_operator">Molding Operator</a>
  </ul>
</li>



                    
                    <li><a href="loker">Loker</a></li>
                    <li><a href="berita">Berita</a></li>
                    <li><a href="contact">Kontak</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <!-- Tambahkan konten lain di sini -->
</body>

</html>