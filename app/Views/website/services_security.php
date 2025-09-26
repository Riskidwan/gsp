<?= $this->extend('website\website') ?>

<?= $this->section('content') ?>


<body>

  <br>
  <!-- SLIDE 1: Hero Section -->
  <section class="hero" style="background: linear-gradient(135deg, #02a85a 0%, #02a85a 100%); color: #fff; min-height: 100vh; display: flex; align-items: center; padding: 0;">
    <div style="max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; align-items:center; gap:32px; padding:56px 24px;">
      <div style="flex:1 1 420px; min-width:280px; z-index:2;">
        <h1 style="font-size:2.8rem; margin-bottom:0.7rem;">Security Services</h1>
        <p style="font-size:1.35rem; color:#bbdefb; margin-bottom:1.2rem;">Layanan Keamanan Profesional & Terpercaya</p>
        <p style="font-size:1.13rem; color:#e3f2fd; margin-bottom:1.5rem; max-width:500px;">
          Kami menyediakan layanan keamanan 24/7 untuk area komersial dan residensial, dengan personel terlatih, sistem keamanan modern, dan manajemen risiko yang komprehensif.
        </p>
        <a href="https://wa.me/6282328085554" target="_blank" style="background:#2196f3; color:#fff; padding: 0.8rem 2.2rem; font-weight:600; font-size:1.1rem; border-radius:32px; text-decoration:none;">Hubungi Kami Sekarang</a>
      </div>
      <div style="flex:1 1 420px; min-width:280px; text-align:center;">
        <img src="website/security/satpam8.png" alt="Security Services" style="width:100%; max-width:440px; border-radius:18px; box-shadow:0 2px 16px rgba(0,0,0,0.13);" />
      </div>
    </div>
  </section>

  <!-- SLIDE 2: Tentang Layanan -->
  <section class="section" style="background:#f8fbff;">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:32px; align-items:center;">
      <div style="flex:1 1 340px; min-width:260px;">
        <h2 style="color:#1565c0;">Tentang Layanan Security</h2>
        <p style="font-size:1.08rem; color:#444;">
          PT Gemilang Sapta Perdana memberikan solusi keamanan terintegrasi untuk perusahaan, perumahan, mall, hotel, dan fasilitas publik. Didukung personel security bersertifikat dan teknologi keamanan terkini.
        </p>
        <ul style="font-size:1rem; color:#444; margin-top:1rem; padding-left:18px;">
          <li>Security Guard & Patrol Service</li>
          <li>CCTV Monitoring & Surveillance</li>
          <li>Access Control & Visitor Management</li>
          <li>Emergency Response & Crisis Management</li>
        </ul>
      </div>
      <div style="flex:1 1 340px; min-width:260px; text-align:center;">
        <img src="website/security/satpam2.jpg" alt="Security Overview" style="width:100%; max-width:340px; border-radius:14px;">
      </div>
    </div>
  </section>

  <!-- SLIDE 3: Mengapa Memilih GSP? -->
  <section class="section">
    <div class="container" style="display:flex; flex-wrap:wrap; gap:32px; align-items:center;">
      <div style="flex:1 1 340px; min-width:260px; text-align:center;">
        <img src="website/security/satpam10.jpg" alt="Keunggulan Security" style="width:100%; max-width:340px; border-radius:14px;">
      </div>
      <div style="flex:1 1 340px; min-width:260px;">
        <h2 style="color:#1565c0;">Mengapa Memilih GSP?</h2>
        <ul style="font-size:1rem; color:#444; margin-top:1rem; padding-left:18px;">
          <li>Personel security bersertifikat dan terlatih</li>
          <li>Sistem keamanan teknologi terdepan</li>
          <li>Layanan 24/7 dengan response time cepat</li>
          <li>Pengalaman melayani klien korporat ternama</li>
          <li>Harga kompetitif dengan kualitas terjamin</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SLIDE 4: Jenis Layanan -->
  <section class="cleaning-section">
    <div class="cleaning-container">
      <h2 class="cleaning-title">Jenis Layanan Security</h2>
      <div class="cleaning-grid">

        <!-- Security Guard & Patrol -->
        <div class="cleaning-card">
          <div class="cleaning-image-container">
            <img src="Website/security/satpam2.jpg"
              alt="Security Guard & Patrol" class="cleaning-image">
          </div>
          <h3>Security Guard & Patrol</h3>
          <p>Layanan security guard profesional dan patroli keamanan 24/7 untuk berbagai fasilitas, memastikan keamanan lingkungan terjaga setiap saat.</p>
        </div>

        <!-- CCTV Monitoring -->
        <div class="cleaning-card">
          <div class="cleaning-image-container">
            <img src="Website/security/satpam9.jpg"
              alt="CCTV & Surveillance" class="cleaning-image">
          </div>
          <h3>CCTV & Surveillance</h3>
          <p>Sistem monitoring CCTV canggih dengan teknologi AI untuk pengawasan optimal, pencegahan risiko, dan dokumentasi insiden secara real time.</p>
        </div>

        <!-- Bodyguard / Personal Security -->
        <div class="cleaning-card">
          <div class="cleaning-image-container">
            <img src="Website/security/satpam3.jpg"
              alt="Bodyguard / Personal Security" class="cleaning-image">
          </div>
          <h3>Bodyguard / Personal Security</h3>
          <p>Layanan keamanan pribadi oleh petugas profesional untuk melindungi tokoh publik, eksekutif, atau tamu penting, dengan kesiapan menghadapi situasi darurat.</p>
        </div>

      </div>
    </div>
  </section>



  <!-- SLIDE 5: Hasil Proyek yang Sudah Dikerjakan -->
  <section id="projects" class="section">
    <div class="container">
      <h2 class="section-title">Hasil Proyek yang Sudah Dikerjakan</h2>
      <p class="section-subtitle">Berikut adalah dokumentasi dari beberapa hasil proyek Security Services yang telah kami kerjakan bersama mitra kami.</p>
      <div class="services-grid">

        <!-- Proyek 1 -->
        <div class="service-card">
          <div class="service-image-container">
            <img src="Website/security/satpam2.jpg"
              alt="Keamanan PT Inkom" class="service-image">
          </div>
          <div class="service-content">
            <div>
              <h3>Keamanan PT Inkom</h3>
              <p>Penerapan sistem keamanan industri yang mencakup penjagaan ketat area produksi, pengawasan keluar-masuk barang dan kendaraan, serta dukungan CCTV untuk seluruh area pabrik. Tim security bertugas memastikan keselamatan pekerja, perlindungan aset, dan kelancaran aktivitas operasional.</p>
            </div>

          </div>
        </div>
        <!-- Proyek 2 -->
        <div class="service-card">
          <div class="service-image-container">
            <img src="Website/security/satpam4.jpeg"
              alt="Keamanan DPRD Pemalang" class="service-image">
          </div>
          <div class="service-content">
            <div>
              <h3>Keamanan Gedung DPRD Pemalang</h3>
              <p>Penyediaan tenaga pengamanan profesional dengan standar tinggi untuk mendukung keamanan gedung DPRD Pemalang. Fokus layanan mencakup pengaturan akses keluar-masuk tamu, pengawasan area publik, serta kesiapan tim dalam penanganan situasi darurat.</p>
            </div>

          </div>
        </div>

        <!-- Proyek 3 -->
        <div class="service-card">
          <div class="service-image-container">
            <img src="Website/security/foto.jpg"
              alt="Keamanan PT Casuarida Herusida" class="service-image">
          </div>
          <div class="service-content">
            <div>
              <h3>Keamanan PT Cassuarina Harnessindo</h3>
              <p>Implementasi sistem keamanan industri untuk mendukung lingkungan kerja yang aman dan produktif. Layanan mencakup penjagaan akses area produksi, monitoring aset vital perusahaan, serta penerapan protokol keselamatan sesuai standar K3.</p>
            </div>

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
          <img src="Website/images/pt casuarina.jpeg" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Cassuarina Harnessindo</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/PT Inkom.png" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Industri Komkar Indonesia</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/khas_tegal.png" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">KHAS Tegal Hotel</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/Joglo_Ageng.jpeg" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">Joglo Ageng Hotel & Resort</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/Bufftim_Cell.png" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">Bufftim Cell</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/BPS_Pemalang.jpeg" alt="Bank Mandiri" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">BPS Pemalang</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/DPRD.png" alt="Shangri-La Hotels" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">DPRD Pemalang</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/PT_Shinsung.jpeg" alt="Shangri-La Hotels" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Grand Shinsung Indonesia</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/kemnaker.svg" alt="Shangri-La Hotels" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">kemnaker</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/PT_Indonesia_Xin.png" alt="Shangri-La Hotels" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Indonesia Xin Hai Steel Structure</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/PT_Yoga_Cipta_Perkasa.jpeg" alt="Grand Indonesia" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Yoga Cipta Perkasa</p>
        </div>
        <div style="text-align:center;">
          <img src="Website/images/PT-Aida-Rottan-Industry.webp" alt="PT-Aida-Rottan-Industry" style="max-width:100px;">
          <p style="margin-top:10px; font-size:0.95rem; color:#333;">PT Aida Rottan</p>
        </div>

      </div>
    </div>
  </section>

  <!-- SLIDE 7: Form Umpan Balik Pelanggan -->
  <section class="section" style="background:#fff; padding:60px 20px;">
    <div class="container" style="max-width:600px; margin:auto;">
      <h2 style="color:#1565c0; text-align:center; font-size:2.5rem; font-weight:700; margin-bottom:10px;">
        Berikan Masukan Jasa Kami
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
            <option value="security">Security Service</option>
            <option value="gardening">Gardening</option>
            <option value="cleaning">Cleaning Service</option>
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
            style="background-color:#1565c0; color:#fff; padding:12px 30px; font-size:1rem; font-weight:600; border:none; border-radius:8px; cursor:pointer; transition:background 0.3s;">
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
  <section class="section" style="background:#f8fbff; padding:100px 0;">
    <div class="container" style="max-width:1200px; margin:auto; padding:0 24px;">
      <h2 style="color:#1565c0; text-align:center; font-size:2.8rem; margin-bottom:3rem;">Testimoni Klien</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(350px, 1fr)); gap:40px;">
        <div style="background:#fff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#1565c0; margin:0;">Budi Santoso</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">Security Manager Plaza Indonesia</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Tim security GSP sangat profesional dan responsif. Sistem keamanan kami jadi lebih optimal dan terjaga 24/7."</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>

        <div style="background:#fff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#1565c0; margin:0;">Sari Dewi</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">General Manager Hotel Kempinski</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Layanan security untuk hotel kami sangat memuaskan. Tamu merasa aman dan nyaman selama menginap."</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>

        <div style="background:#fff; border-radius:20px; padding:40px; box-shadow:0 10px 25px rgba(0,0,0,0.08);">
          <div style="display:flex; align-items:center; margin-bottom:1.5rem;">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" style="width:60px; height:60px; border-radius:50%; margin-right:15px;">
            <div>
              <h4 style="color:#1565c0; margin:0;">Ahmad Hidayat</h4>
              <p style="color:#666; margin:0; font-size:0.9rem;">Facility Manager Bank Mandiri</p>
            </div>
          </div>
          <p style="font-size:1.1rem; color:#444; font-style:italic;">"Sistem CCTV dan access control yang dipasang GSP sangat canggih. Keamanan bank kami meningkat signifikan."</p>
          <div style="color:#ffd700; font-size:1.2rem; margin-top:1rem;">⭐⭐⭐⭐⭐</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section" style="background:linear-gradient(135deg, #02a85a 0%, #02a85a 100%); color:#fff; text-align:center; padding:80px 0;">
    <div class="container">
      <h2 style="font-size:2.5rem; margin-bottom:1rem; color:#fff;">Butuh Layanan Keamanan Terpercaya?</h2>
      <p style="font-size:1.2rem; margin-bottom:2rem; color:#bbdefb;">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi keamanan terbaik!</p>
      <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">
        <a href="https://wa.me/6282328085554" target="_blank" style="background:#2196f3; color:#fff; padding:14px 32px; border-radius:32px; text-decoration:none; font-weight:600; font-size:1.1rem;">
          📱 WhatsApp Konsultasi
        </a>
        <a href="tel:+6282328085554" style="background:transparent; color:#fff; padding:14px 32px; border:2px solid #2196f3; border-radius:32px; text-decoration:none; font-weight:600; font-size:1.1rem;">
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