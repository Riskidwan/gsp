<link rel="stylesheet" href="Website/css/services.css" />
<?= $this->extend('website\website') ?>

<?= $this->section('content') ?>

<body>

  <br>
  <!-- SLIDE 1: Hero Section -->
  <section class="hero" style="background: linear-gradient(135deg, #02a85a 0%, #02a85a 100%);; color: #fff; min-height: 100vh; display: flex; align-items: center; padding: 0;">
    <div style="max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; align-items:center; gap:32px; padding:56px 24px;">
      <div style="flex:1 1 420px; min-width:280px; z-index:2;">
        <h1 style="font-size:2.8rem; margin-bottom:0.7rem;">Gardening Services</h1>
        <p style="font-size:1.35rem; color:#c8e6c9; margin-bottom:1.2rem;">Layanan Pertamanan Profesional & Estetis</p>
        <p style="font-size:1.13rem; color:#e8f5e9; margin-bottom:1.5rem; max-width:500px;">
          Kami menyediakan layanan taman lengkap untuk area komersial dan residensial, mulai dari desain, instalasi, hingga pemeliharaan berkala oleh tenaga ahli pertamanan.
        </p>
        <a href="https://wa.me/6282328085554" target="_blank" style="background:#66bb6a; color:#fff; padding: 0.8rem 2.2rem; font-weight:600; font-size:1.1rem; border-radius:32px; text-decoration:none;">Hubungi Kami Sekarang</a>
      </div>
      <div style="flex:1 1 420px; min-width:280px; text-align:center;">
        <img src="Website/gardener/gardener1.png" alt="Gardening Services" style="width:100%; max-width:440px; border-radius:18px; box-shadow:0 2px 16px rgba(0,0,0,0.13);" />
      </div>
    </div>
  </section>

  <!-- SLIDE 2: Tentang Layanan -->
  <section class="section" style="background:#f1fdf7;">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:32px; align-items:center;">
      <div style="flex:1 1 340px; min-width:260px;">
        <h2 style="color:#388e3c;">Tentang Layanan Gardening</h2>
        <p style="font-size:1.08rem; color:#444;">
          PT Gemilang Sapta Perdana memberikan solusi pertamanan modern dan estetis untuk perusahaan, hotel, kompleks perumahan, dan instansi. Didukung tim ahli hortikultura dan landscaper profesional.
        </p>
        <ul style="font-size:1rem; color:#444; margin-top:1rem; padding-left:18px;">
          <li>Desain dan instalasi taman</li>
          <li>Perawatan tanaman hias & rumput</li>
          <li>Vertical garden dan taman kering</li>
          <li>Irigasi otomatis dan sistem drainase</li>
        </ul>
      </div>
      <div style="flex:1 1 340px; min-width:260px; text-align:center;">
        <img src="Website/gardener/gardener6.jpg" alt="Gardening Overview" style="width:100%; max-width:340px; border-radius:14px;">

      </div>
    </div>
  </section>

  <!-- SLIDE 3: Mengapa Memilih GSP? -->
  <section class="section">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:32px; align-items:center;">
      <div style="flex:1 1 340px; min-width:260px; text-align:center;">
        <img src="Website/gardener/gardener4.jpg" alt="Keunggulan Gardening" style="width:100%; max-width:340px; border-radius:14px;">
      </div>
      <div style="flex:1 1 340px; min-width:260px;">
        <h2 style="color:#388e3c;">Mengapa Memilih GSP?</h2>
        <ul style="font-size:1rem; color:#444; margin-top:1rem; padding-left:18px;">
          <li>Desain taman kreatif dan fungsional</li>
          <li>Tanaman berkualitas dari nursery terpercaya</li>
          <li>Tim ahli taman dan horticulture</li>
          <li>Pemeliharaan berkala & inspeksi rutin</li>
          <li>Harga kompetitif & transparan</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SLIDE 4: Jenis Layanan -->
  
  <section class="cleaning-section">
    <div class="cleaning-container">
      <h2 class="cleaning-title">Jenis Layanan Gardening</h2>
      <div class="cleaning-grid">

        <div class="cleaning-card">

          <div class="cleaning-image-container">
            <img src="Website/gardener/gardener3.jpg"
              alt="Taman Rumah & Perumahan" class="cleaning-image">
          </div>
          <h3>Taman Rumah & Perumahan</h3>
          <p>Desain dan perawatan taman perumahan modern dan minimalis.</p>
        </div>

        <div class="cleaning-card">

          <div class="cleaning-image-container">
            <img src="Website/gardener/gardener5.jpg"
              alt="Vertical Garden" class="cleaning-image">
          </div>
          <h3>Vertical Garden</h3>
          <p>Solusi taman hijau di ruang terbatas seperti dinding kantor atau apartemen.</p>
        </div>

        <div class="cleaning-card">

          <div class="cleaning-image-container">
            <img src="Website/gardener/gardener2.jpg"
              alt="Pemeliharaan Taman" class="cleaning-image">
          </div>
          <h3>Pemeliharaan Taman</h3>
          <p>Perawatan rumput, pemangkasan, pemupukan, dan irigasi taman secara berkala.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- SLIDE 5: Hasil Proyek yang Sudah Dikerjakan -->
 <section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">Hasil Proyek yang Sudah Dikerjakan</h2>
        <p class="section-subtitle">Berikut adalah dokumentasi dari beberapa hasil proyek Gardening Services yang telah kami kerjakan bersama mitra kami.</p>
        <div class="services-grid">

            <div class="service-card">
                <img src="Website/gardener/gardener4.jpg" alt="Pemeliharaan Taman Kota Cendana" class="service-image">
                <div class="service-content">
                    <h3>Pemeliharaan Taman Kota Cendana</h3>
                    <p>Kerjasama rutin dengan pemerintah daerah untuk menjaga kebersihan dan keindahan taman kota sebagai ruang publik.</p>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/gardener/gardener3.jpg" alt="Vertical Garden Gedung Sentral" class="service-image">
                <div class="service-content">
                    <h3>Vertical Garden Gedung Sentral</h3>
                    <p>Instalasi taman vertikal di dinding gedung perkantoran sebagai elemen penghijauan modern dan penyejuk udara alami.</p>
                </div>
            </div>

            <div class="service-card">
                <img src="Website/gardener/gardener2.jpg" alt="Taman Edukasi Sekolah Harapan Bangsa" class="service-image">
                <div class="service-content">
                    <h3>Taman Edukasi Sekolah Harapan Bangsa</h3>
                    <p>Pembuatan taman interaktif sebagai media pembelajaran anak-anak untuk mengenal tanaman dan lingkungan secara langsung.</p>
                </div>
            </div>

        </div>
    </div>
</section>


  <!-- SLIDE 6: Klien yang Pernah Dilayani -->
  <section class="section" style="background:#f8fbff;">
    <div class="container">
      <h2 style="color:#1565c0; text-align:center; font-size:2.5rem; margin-bottom:1rem;">Klien yang Pernah Dilayani</h2>
      <p style="text-align:center; font-size:1.1rem; color:#666; margin-bottom:3rem;">Dipercaya oleh perusahaan dan institusi ternama</p>

      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(150px, 1fr)); gap:30px; align-items:center;">
        <div style="text-align:center;">
          <img src="Website/images/Joglo_Ageng.jpeg" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">Joglo Ageng Hotel & Resort</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/Kemnaker.svg" alt="Kemnaker" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">Kemnaker</p>
        </div>
        
      </div>
    </div>
  </section>


  <!-- SLIDE 7: Form Umpan Balik Pelanggan -->
  <section class="section" style="background:#fff; padding:60px 20px;">
    <div class="container" style="max-width:600px; margin:auto;">
      <h2 style="color:#2e7d32; text-align:center; font-size:2.5rem; font-weight:700; margin-bottom:10px;">
        Berikan Masukan jasa kami
      </h2>

      <p style="text-align:center; font-size:1.1rem; color:#555; margin-bottom:30px;">
        Kami mengharapkan ulasan dari anda
      </p>

      <form action="https://script.google.com/macros/s/AKfycbwJrh-8PkI90ta7PoKs_TyTQxa3jvAZCQrVjS8FHC88NVzz-2nYyw1dvRAWNIAX3aByxw/exec" method="POST" style="background:#f9fff9; padding:30px; border-radius:20px; box-shadow:0 10px 25px rgba(0,0,0,0.06);">

        <div class="form-group" style="margin-bottom:20px;">
          <label for="nama" style="display:block; font-weight:500; margin-bottom:8px;">Nama Anda</label>
          <input type="text" id="nama" name="nama" placeholder="Boleh dikosongkan (anonim)"
            style="width:100%; padding:12px; border:1px solid #ccc; border-radius:10px; font-size:1rem;">
        </div>

        <div class="form-group" style="margin-bottom:20px;">
          <label for="layanan" style="display:block; font-weight:500; margin-bottom:8px;">Jenis Layanan</label>
          <select id="layanan" name="layanan"
            style="width:100%; padding:12px; border:1px solid #ccc; border-radius:10px; font-size:1rem;">
            <option value="">Pilih jenis layanan</option>
            <option value="gardening">Gardening</option>
            <option value="cleaning">Cleaning Service</option>
            <option value="security">Security Service</option>
            <option value="receptionist">Receptionist</option>
            <option value="driver">Driver</option>
            <option value="labor">Labor Supply</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom:20px;">
          <label for="pesan" style="display:block; font-weight:500; margin-bottom:8px;">Pesan</label>
          <textarea id="pesan" name="pesan" required
            placeholder="Tuliskan pengalaman Anda, saran, atau kritik membangun..."
            style="width:100%; padding:12px; border:1px solid #ccc; border-radius:10px; font-size:1rem; min-height:130px;"></textarea>
        </div>

        <div style="text-align:center; margin-top:30px;">
          <button type="submit"
            style="background-color:#2e7d32; color:#fff; padding:12px 30px; font-size:1rem; font-weight:600; border:none; border-radius:8px; cursor:pointer; transition:background 0.3s;">
            Kirim
          </button>
        </div>

        <p style="text-align:center; font-size:0.9rem; color:#777; margin-top:20px;">
          Terima kasih atas waktu dan kepercayaan Anda.
        </p>
      </form>
    </div>
  </section>



  <!-- SLIDE 8: Testimoni -->
  <section class="section" style="background:#f1fdf7; padding:100px 0;">
    <div class="container" style="max-width:1200px; margin:auto; padding:0 24px;">
      <h2 style="color:#388e3c; text-align:center; font-size:2.8rem; margin-bottom:3rem;">Testimoni Klien</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(350px, 1fr)); gap:40px;">
        <div style="background:#f8faff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#388e3c; margin:0;">Budi Prasetyo</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">Manajer Properti Green Estate</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Tim GSP berhasil menciptakan taman yang indah dan nyaman untuk kawasan perumahan kami. Warga sangat senang!"</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>

        <div style="background:#f8faff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#388e3c; margin:0;">Nadia Larasati</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">Direktur Marketing Eco Tower</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Taman rooftop kami kini menjadi daya tarik utama gedung kantor berkat sentuhan profesional dari GSP."</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>

        <div style="background:#f8faff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#388e3c; margin:0;">Ahmad Rizki</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">General Manager Shangri-La</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Vertical garden di lobby hotel kami menciptakan suasana yang sangat menyejukkan. Tamu-tamu terkesan!"</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section" style="background:linear-gradient(135deg, #02a85a 0%, #02a85a 100%);; color:#fff; text-align:center; padding:80px 0;">
    <div class="container">
      <h2 style="font-size:2.5rem; margin-bottom:1rem; color:#fff;">Siap Mewujudkan Taman Impian Anda?</h2>
      <p style="font-size:1.2rem; margin-bottom:2rem; color:#c8e6c9;">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik!</p>
      <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">
        <a href="https://wa.me/6282328085554" target="_blank" style="background:#66bb6a; color:#fff; padding:14px 32px; border-radius:32px; text-decoration:none; font-weight:600; font-size:1.1rem;">
          📱 WhatsApp Konsultasi
        </a>
        <a href="tel:+6282328085554" style="background:transparent; color:#fff; padding:14px 32px; border:2px solid #66bb6a; border-radius:32px; text-decoration:none; font-weight:600; font-size:1.1rem;">
          📞 Call Now
        </a>
      </div>
    </div>
  </section>

  <?= $this->endSection() ?>

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