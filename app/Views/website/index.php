 <!DOCTYPE html>



 <body>
     <?= $this->extend('website\website') ?>

     <?= $this->section('content') ?>
     <br>
     <br>
    <section id="home" class="hero" style="background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?= base_url('website/images/bg_gsp1.png') ?>');">
         <div class="hero-content">
             <h1 class="fade-in-up">PT GEMILANG SAPTA PERDANA</h1>
             <p class="hero-subtitle fade-in-up">Facility Services Company</p>
             <div class="hero-tagline fade-in-up">
                 Menjadi solusi tepat terhadap penyediaan tenaga kerja yang kompeten dan memudahkan Anda menunjang segala
                 aktivitas sesuai kebutuhan.
             </div>
         </div>
     </section>

     <section id="about" class="section about">
         <div class="container">
             <h2 class="section-title">Tentang Kami</h2>
             <div class="about-content" style="max-width: 1000px; margin: 0 auto; color: #444; display: flex; flex-wrap: wrap; gap: 32px; align-items: center;">
                 <div style="flex: 1 1 380px; min-width: 280px;">
                     <p style="font-size: 1.15rem; line-height: 1.8;">
                         <strong>PT Gemilang Sapta Perdana (GSP)</strong> adalah perusahaan jasa fasilitas terintegrasi yang telah berdiri sejak 2019. Kami melayani kebutuhan tenaga kerja profesional di bidang keamanan, kebersihan, transportasi, receptionist, gardening, dan manajemen fasilitas untuk perusahaan nasional maupun multinasional di seluruh Indonesia.<br><br>
                         Dengan pengalaman lebih dari 6 tahun, GSP dikenal karena komitmen pada kualitas, inovasi layanan, dan kepuasan pelanggan. Didukung lebih dari 2000 karyawan terlatih, kami siap menjadi mitra andalan bisnis Anda.
                     </p>
                     <div style="text-align:center; margin-top:32px;">
                         <a href="https://wa.me/6282328085554" target="_blank" style="display:inline-block; background:#25d366; color:#fff; font-size:1.1rem; font-weight:600; padding: 0.9rem 2.2rem; border-radius: 32px; text-decoration:none; box-shadow:0 2px 8px rgba(0,0,0,0.08); transition:background 0.2s;">
                             Hubungi Kami Sekarang
                         </a>
                     </div>
                 </div>
                 <div style="flex: 1 1 320px; min-width: 220px; text-align: center;">
                     <img src="<?= base_url('website/images/logo_gsp.png') ?>" alt="Logo PT Gemilang Sapta Perdana" style="max-width: 260px; width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); margin-bottom: 12px;">
                 </div>
             </div>
             <div class="about-stats" style="display: flex; flex-wrap: wrap; gap: 32px; justify-content: center; margin-top: 32px;">
                 <div style="flex: 1 1 180px; min-width: 180px; background: #f7fafd; border-radius: 12px; text-align: center; padding: 1.5rem 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                     <div style="font-size: 2rem; color: #1a73e8; font-weight: bold;">6+</div>
                     <div style="font-size: 1rem; color: #555;">Tahun Pengalaman</div>
                 </div>
                 <div style="flex: 1 1 180px; min-width: 180px; background: #f7fafd; border-radius: 12px; text-align: center; padding: 1.5rem 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                     <div style="font-size: 2rem; color: #1a73e8; font-weight: bold;">2000+</div>
                     <div style="font-size: 1rem; color: #555;">Karyawan Profesional</div>
                 </div>
                 <div style="flex: 1 1 180px; min-width: 180px; background: #f7fafd; border-radius: 12px; text-align: center; padding: 1.5rem 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                     <div style="font-size: 2rem; color: #1a73e8; font-weight: bold;">20+</div>
                     <div style="font-size: 1rem; color: #555;">Klien Lokal & Nasional</div>
                 </div>
                 <div style="flex: 1 1 180px; min-width: 180px; background: #f7fafd; border-radius: 12px; text-align: center; padding: 1.5rem 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                     <div style="font-size: 2rem; color: #1a73e8; font-weight: bold;">ISO 9001,3700, 370001 & 4500</div>
                     <div style="font-size: 1rem; color: #555;">Standar Mutu, K3  & anti suap</div>
                 </div>
             </div>
             <div style="text-align:center; margin-top:32px;">

             </div>
         </div>
     </section>

     <!-- Mengapa Memilih PT Gemilang Sapta Perdana -->
     <section id="why-gsp" class="section" style="background: #f7fafd; padding: 48px 0 32px 0;">
         <div class="container">
             <h2 class="section-title" style="text-align:center;">Mengapa Memilih PT Gemilang Sapta Perdana?</h2>
             <div style="display: flex; flex-wrap: nowrap; overflow-x: auto; gap: 2rem; justify-content: flex-start; margin-top: 2.5rem; scrollbar-width: thin;">
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">🌱</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Ramah Lingkungan</h3>
                     <p style="color:#555; font-size:1rem;">Menggunakan produk dan metode kerja eco-friendly, mendukung program go green dan keberlanjutan lingkungan.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">👨‍💼</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Tim Ahli & Profesional</h3>
                     <p style="color:#555; font-size:1rem;">Didukung oleh tenaga kerja bersertifikat, berpengalaman, dan pelatihan berkelanjutan di bidangnya.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">⚡</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Layanan Responsif</h3>
                     <p style="color:#555; font-size:1rem;">Respon cepat dan solusi tepat untuk setiap kebutuhan klien, didukung sistem pelaporan real-time.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">💡</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Teknologi Modern</h3>
                     <p style="color:#555; font-size:1rem;">Mengadopsi teknologi monitoring dan manajemen fasilitas terkini untuk efisiensi dan transparansi layanan.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">🏆</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Bersertifikat & Terpercaya</h3>
                     <p style="color:#555; font-size:1rem;">Memiliki sertifikasi ISO dan penghargaan industri, serta dipercaya oleh banyak perusahaan nasional dan multinasional.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">🤝</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Komitmen Kepuasan</h3>
                     <p style="color:#555; font-size:1rem;">Fokus pada kepuasan pelanggan dengan layanan personal, konsultasi gratis, dan garansi kualitas kerja.</p>
                 </div>
                 <div style="flex: 0 0 260px; min-width: 220px; background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); padding: 2rem 1.2rem; text-align: center;">
                     <div style="font-size:2.2rem; margin-bottom: 0.7rem;">🛠️</div>
                     <h3 style="color:#1a73e8; margin-bottom:0.5rem;">Layanan Lengkap</h3>
                     <p style="color:#555; font-size:1rem;">Solusi fasilitas terintegrasi: keamanan, cleaning, driver, receptionist, gardening, hingga manajemen fasilitas dalam satu atap.</p>
                 </div>
             </div>
         </div>
     </section>




     <!-- <section id="keunggulan" class="section advantages">
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
     </section> -->

    <section id="services" class="section">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="services-grid">

            <div class="service-card">
                <img src="website/images/satpam1.jpeg" alt="Security Services" class="service-image">
                <div class="service-content">
                    <h3>Security Services</h3>
                    <p>Menyediakan jasa pengamanan profesional untuk melindungi karyawan, gedung, dan lingkungan mitra bisnis selama 24 jam.</p>
                    <a class="detail-btn" href="services_security">Lihat Detail</a>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/cleaning/cleaning2.jpg" alt="Cleaning Service" class="service-image">
                <div class="service-content">
                    <h3>Cleaning Service</h3>
                    <p>Menyediakan layanan kebersihan terbaik untuk menciptakan lingkungan yang bersih dan nyaman bagi seluruh mitra bisnis.</p>
                    <a class="detail-btn" href="cleaning_service">Lihat Detail</a>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/gardener/gardener3.jpg" alt="Gardening Service" class="service-image">
                <div class="service-content">
                    <h3>Gardening</h3>
                    <p>Menyediakan jasa perawatan tanaman dan taman agar selalu terlihat ASRI dan memberikan suasana yang nyaman.</p>
                    <a class="detail-btn" href="gardening">Lihat Detail</a>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/receptionist/receptionist1.jpg" alt="Receptionist Service" class="service-image">
                <div class="service-content">
                    <h3>Receptionist Service</h3>
                    <p>Menyediakan receptionist terlatih untuk memberi pelayanan informasi yang prima, ramah, dan teliti.</p>
                    <a class="detail-btn" href="receptionist">Lihat Detail</a>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/driver/driver3.png" alt="Driver Service" class="service-image">
                <div class="service-content">
                    <h3>Driver</h3>
                    <p>Menyediakan jasa driver yang mengutamakan ketepatan waktu, keselamatan, dan kenyamanan perjalanan bagi mitra bisnis.</p>
                    <a class="detail-btn" href="driver">Lihat Detail</a>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/Labor_supply/Labor Supply1.jpg" alt="Labor Supply Service" class="service-image">
                <div class="service-content">
                    <h3>Labor Supply</h3>
                    <p>Menyediakan tenaga kerja yang sesuai dengan standar operasional dan kriteria kebutuhan mitra bisnis Anda.</p>
                    <a class="detail-btn" href="labor_supply">Lihat Detail</a>
                </div>
            </div>

        </div>
    </div>
</section>

     <!-- conatct -->

     <section id="contact" class="contact">
         <div class="container">
             <h2 class="section-title">Hubungi Kami</h2>
             <p class="section-subtitle">
                 Kami siap membantu Anda dengan layanan terbaik. Jangan ragu untuk menghubungi tim profesional kami kapan saja.
             </p>

             <div class="contact-wrapper">
                 <!-- Contact Information -->
                 <div class="contact-info">
                     <h3>Informasi Kontak</h3>

                     <div class="contact-item">
                         <div class="contact-icon">📧</div>
                         <div class="contact-details">
                             <div class="contact-label">Email</div>
                             <div class="contact-value">marketing.gemilangsaptaperdana@gmail.com</div>
                         </div>
                     </div>

                     <div class="contact-item">
                         <div class="contact-icon">🏢</div>
                         <div class="contact-details">
                             <div class="contact-label">Perusahaan</div>
                             <div class="contact-value">PT Gemilang Sapta Perdana</div>
                         </div>
                     </div>

                     <div class="contact-item">
                         <div class="contact-icon">📍</div>
                         <div class="contact-details">
                             <div class="contact-label">Lokasi</div>
                             <div class="contact-value">Pemalang, Jawa Tengah<br>Indonesia</div>
                         </div>
                     </div>

                     <div class="contact-item">
                         <div class="contact-icon">🤝</div>
                         <div class="contact-details">
                             <div class="contact-label">Mitra Strategis</div>
                             <div class="contact-value">BKK di Pemalang</div>
                         </div>
                     </div>

                     <div class="contact-item">
                         <div class="contact-icon">⏰</div>
                         <div class="contact-details">
                             <div class="contact-label">Jam Operasional</div>
                             <div class="contact-value">Senin - Jumat: 08:00 - 17:00<br></div>
                         </div>
                     </div>
                 </div>

                 <!-- Contact Form -->
                 <div class="contact-form">
                     <h3>Kirim Pesan</h3>
                     <form action="https://script.google.com/macros/s/AKfycbwJrh-8PkI90ta7PoKs_TyTQxa3jvAZCQrVjS8FHC88NVzz-2nYyw1dvRAWNIAX3aByxw/exec" method="POST" style="background:#f9fff9; padding:30px; border-radius:20px; box-shadow:0 10px 25px rgba(0,0,0,0.06);">
                         <div class="form-group">
                             <label for="name">Nama Lengkap *</label>
                             <input type="text" id="name" name="name" required placeholder="Masukkan nama lengkap Anda">
                         </div>

                         <div class="form-group">
                             <label for="email">Email *</label>
                             <input type="email" id="email" name="email" required placeholder="contoh@email.com">
                         </div>

                         <div class="form-group">
                             <label for="phone">Nomor Telepon</label>
                             <input type="tel" id="phone" name="phone" placeholder="08xxxxxxxxxx">
                         </div>

                         <div class="form-group">
                             <label for="subject">Subjek *</label>
                             <input type="text" id="subject" name="subject" required placeholder="Subjek pesan Anda">
                         </div>

                         <div class="form-group">
                             <label for="message">Pesan *</label>
                             <textarea id="message" name="message" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                         </div>

                         <button type="submit" class="submit-btn">Kirim Pesan</button>
                     </form>
                 </div>
             </div>
         </div>
     </section>

     <!-- Modal -->
     <div id="serviceModal" class="modal">
         <div class="modal-content">
             <div class="modal-header">
                 <h2 id="modalTitle"></h2>
                 <!-- <button class="close" onclick="closeModal()">&times;</button> -->
             </div>
             <div class="modal-body" id="modalBody">
                 <!-- Content will be dynamically inserted here -->
             </div>
         </div>
     </div>


 </body>


 <?= $this->endSection() ?>


 <!-- JavaScript -->
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const form = document.querySelector("form");
         const btn = form.querySelector("button[type='submit']");
         const btnText = btn.textContent;

         form.addEventListener("submit", function(e) {
             e.preventDefault();

             btn.disabled = true;
             btn.style.opacity = "0.6";
             btn.textContent = "Mengirim...";

             fetch(form.action, {
                     method: "POST",
                     body: new FormData(form),
                 })
                 .then((res) => res.text())
                 .then((data) => {
                     alert("✅ Masukan berhasil dikirim!");
                     form.reset();

                     btn.disabled = false;
                     btn.style.opacity = "1";
                     btn.textContent = btnText;
                 })
                 .catch((err) => {
                     alert("❌ Gagal mengirim. Coba lagi.");
                     console.error(err);

                     btn.disabled = false;
                     btn.style.opacity = "1";
                     btn.textContent = btnText;
                 });
         });
     });
 </script>
 <script src="website/js/scripts.js"></script>
 </body>

 </html>