
    <link rel="stylesheet" href="Website/css/keunggulan.css">
<?= $this->extend('website\website') ?>

     <?= $this->section('content') ?>
<br>
<body>
    <!-- Keunggulan Section -->
    <section id="keunggulan" class="section advantages">
        <div class="container">
            <h2 class="section-title">Keunggulan Kami</h2>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">🏢</div>
                    <h3>Fasilitas Terdepan</h3>
                    <p>PT Gemilang Sapta Perdana memiliki fasilitas untuk meningkatkan kualitas pelayanan yang responsif dan cepat, memastikan setiap kebutuhan mitra bisnis terpenuhi dengan standar terbaik.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">⚡</div>
                    <h3>Pelayanan Responsif</h3>
                    <p>Dengan komitmen terhadap kecepatan dan ketepatan, kami menyediakan solusi yang efisien untuk segala kebutuhan facility service Anda dengan respons time yang cepat.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">🤝</div>
                    <h3>Mitra Terpercaya</h3>
                    <p>Bekerjasama dengan Balai Perluasan Kesempatan Kerja Pemalang, kami memastikan kualitas tenaga kerja yang kompeten dan profesional sesuai standar industri.</p>
                </div>
            </div>
        </div>
    </section>
      <script src="Website/js/scripts.js"></script>
</body>

</html>
 <?= $this->endSection() ?>