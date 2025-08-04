<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami</title>
    <link rel="stylesheet" href="website/css/services.css">
   
</head>

<body>
    <?php include 'header.php'; ?>
    <br>
    <section id="services" class="section">
        <div class="container">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=180&fit=crop"
                        alt="Security Services" class="service-image">
                    <h3>Security Services</h3>
                    <p>Menyediakan jasa pengamanan yang profesional dalam melindungi karyawan, gedung, dan lingkungan para mitra bisnis selama 24 jam.</p>
                    <a class="detail-btn" href="services_security.php">Lihat Detail</a>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=400&h=180&fit=crop"
                        alt="Cleaning Service" class="service-image">
                    <h3>Cleaning Service</h3>
                    <p>Menyediakan jasa layanan kebersihan terbaik dalam menciptakan lingkungan yang bersih dan nyaman untuk seluruh mitra bisnis.</p>
                     <a class="detail-btn" href="cleaning_service.php">Lihat Detail</a>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400&h=180&fit=crop"
                        alt="Gardening Service" class="service-image">
                    <h3>Gardening</h3>
                    <p>Menyediakan jasa perawatan tanaman dan taman agar selalu terlihat ASRI dan memberikan suasana yang nyaman.</p>
                    <a class="detail-btn" href="gardening.php">Lihat Detail</a>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=180&fit=crop"
                        alt="Receptionist Service" class="service-image">
                    <h3>Receptionist Service</h3>
                    <p>Menyediakan jasa receptionist yang dilatih untuk memberi pelayanan informasi yang prima, ramah, dan teliti sehingga alur komunikasi di lokasi mitra bisnis berjalan dengan baik.</p>
                      <a class="detail-btn" href="receptionist.php">Lihat Detail</a>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=180&fit=crop"
                        alt="Driver Service" class="service-image">
                    <h3>Driver</h3>
                    <p>Menyediakan jasa driver yang mengutamakan ketepatan waktu, keselamatan, dan kenyamanan perjalanan bagi mitra bisnis.</p>
                     <a class="detail-btn" href="driver.php">Lihat Detail</a>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=400&h=180&fit=crop"
                        alt="Labor Supply Service" class="service-image">
                    <h3>Labor Supply</h3>
                    <p>Menyediakan jasa penyediaan tenaga kerja yang sesuai dengan standar operasional dan kriteria kebutuhan mitra bisnis.</p>
                    <a class="detail-btn" href="labor_supply.php">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle"></h2>
                <button class="close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Content will be dynamically inserted here -->
            </div>
        </div>
    </div>

  
      <script src="Website/js/scripts.js"></script>
</body>

</html>
 <?php include 'Footer.php'; ?>