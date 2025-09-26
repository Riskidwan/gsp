     <?= $this->extend('website\website') ?>

     <?= $this->section('content') ?>

     <br>
     <br>
     <!-- SECTION: Profil Perusahaan -->
     <section id="about" class="section about" style="background-color: #f9f9f9; padding: 60px 0;">
         <div class="container">
             <h2 class="section-title" style="text-align:center;">Profil Perusahaan</h2>
             <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                 <p style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 20px;">
                     <strong>PT Gemilang Sapta Perdana</strong> adalah perusahaan yang bergerak di bidang jasa penyediaan layanan fasilitas (facility service) secara komprehensif dan efektif untuk mendukung kelancaran operasional dan pemeliharaan gedung para mitra bisnis. Layanan kami meliputi berbagai sektor mulai dari pengelolaan keamanan (security service), kebersihan (cleaning service), perawatan gedung (building maintenance), perawatan taman (gardening), hingga penyediaan tenaga kerja (labor supply) baik di lingkup industri maupun instansi secara kompeten, efektif, dan efisien.
                 </p>
                 <p style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 20px;">
                     Kami memahami bahwa setiap klien memiliki kebutuhan yang unik dengan spesifikasi berbeda, maka dari itu kami menawarkan layanan yang dapat disesuaikan secara fleksibel. Dengan pengalaman bertahun-tahun di instansi pemerintahan maupun swasta, serta didukung oleh tim manajemen yang berpengalaman dan kompeten, PT Gemilang Sapta Perdana siap memberikan pelayanan dan dukungan terbaik bagi para mitra bisnis.</p> 
             </div>
         </div>
     </section>

     <!-- SECTION: Visi dan Misi -->
     <section id="visi" class="section" style="padding: 60px 0;">
         <div class="container">
             <h2 class="section-title" style="text-align:center;">Visi dan Misi</h2>
             <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; margin-top: 2rem;">
                 <!-- VISI -->
                 <div style="flex: 1 1 300px; background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                     <h3 style="color: #2c3e50; text-align: center; margin-bottom: 1rem;">Visi</h3>
                     <p style="color: #555; line-height: 1.6; text-align: center;">
                         Menjadi pilihan utama mitra bisnis di bidang penyediaan jasa dan pengelolaan tenaga kerja dalam skala nasional
                     </p>
                 </div>
                 <!-- MISI -->
                 <div style="flex: 1 1 300px; background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                     <h3 style="color: #2c3e50; text-align: center; margin-bottom: 1rem;">Misi</h3>
                     <ul style="color: #555; line-height: 1.6; padding-left: 1.2rem;">
                         <li>Memberikan pelayanan profesional,terprogram, dan sistematis untuk mewujudkan kepuasan mitra bisnis</li>
                         <li>Meningkatkan kemampuan dan kompetensi setiap tenaga kerja dalam tujuan peningkatan sumber daya manusia</li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>
     <?= $this->endSection() ?>
     <script src="website/js/scripts.js"></script>
     </body>

     </html>