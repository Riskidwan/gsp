<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT. Gemilang Sapta Perdana</title>
    <link rel="stylesheet" href="Website/css/main.css">
    <link rel="stylesheet" href="Website/css/main.css?v=<?php echo time(); ?>">
    <!-- 
   <link rel="scripts" href="assets/js/scripts.js"> -->
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
<br>
    <!-- Contact Section -->
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
                            <div class="contact-value">PT. Gemilang Sapta Perdana</div>
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
                            <div class="contact-value">Balai Perluasan Kesempatan Kerja</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">⏰</div>
                        <div class="contact-details">
                            <div class="contact-label">Jam Operasional</div>
                            <div class="contact-value">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</div>
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

    <?php include 'Footer.php'; ?>

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
    <script src="Website/js/scripts.js"></script>
</body>

</html>