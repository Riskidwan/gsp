<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>
    <link rel="stylesheet" href="Website/css/berita.css">
    <link rel="stylesheet" href="Website/css/main.css">

</head>

<body>

    <?php include 'header.php'; ?>
    <br>
    <section id="berita" class="section">
        <div class="container">
            <h2 class="section-title">Berita Terkini</h2>
            <p class="section-subtitle">Ikuti perkembangan terbaru dari PT Guna Setia Prima</p>

            <!-- Breaking News -->
            <div class="breaking-news">
                <div class="breaking-content">
                    <span class="breaking-label">🔥 Breaking</span>
                    <div class="breaking-text">
                        PT GSP meraih penghargaan "Best Security Service Provider 2024" dari Asosiasi Keamanan Indonesia
                    </div>
                </div>
            </div>

            <!-- Main News Grid -->
            <div class="news-grid">
                <!-- Featured News -->
                <article class="featured-news" onclick="readMore('featured')">
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800&h=400&fit=crop" alt="Kerja Sama Strategis">
                    <div class="news-overlay">
                        <span class="news-category">Partnership</span>
                        <h3>Kerja Sama Strategis dengan PT Mitra Sejahtera</h3>
                        <p>PT GSP menandatangani kontrak kerja sama strategis untuk penyediaan 500 tenaga kerja profesional di berbagai sektor, menandai ekspansi bisnis terbesar tahun ini.</p>
                        <div class="news-meta">
                            <div class="news-date">
                                📅 28 Juni 2025
                            </div>
                            <div class="news-author">
                                ✍️ Tim Redaksi GSP
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Side News -->
                <div class="side-news">
                    <article class="news-item" onclick="readMore('training')">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=200&h=150&fit=crop" alt="Training Security">
                        <div class="news-item-content">
                            <span class="news-category">Training</span>
                            <h4>Program Pelatihan Security Tingkat Lanjut</h4>
                            <p>125 petugas security mengikuti pelatihan khusus penanganan situasi darurat dan teknologi keamanan modern.</p>
                            <div class="news-date">📅 26 Juni 2025</div>
                        </div>
                    </article>

                    <article class="news-item" onclick="readMore('expansion')">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=150&fit=crop" alt="Ekspansi Layanan">
                        <div class="news-item-content">
                            <span class="news-category">Expansion</span>
                            <h4>Pembukaan Cabang Baru di Semarang</h4>
                            <p>GSP resmi membuka kantor cabang ketiga di Semarang untuk melayani wilayah Jawa Tengah lebih optimal.</p>
                            <div class="news-date">📅 24 Juni 2025</div>
                        </div>
                    </article>

                    <article class="news-item" onclick="readMore('technology')">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=200&h=150&fit=crop" alt="Teknologi Baru">
                        <div class="news-item-content">
                            <span class="news-category">Technology</span>
                            <h4>Implementasi Sistem Digital Monitoring</h4>
                            <p>Peluncuran platform digital terintegrasi untuk monitoring real-time seluruh layanan GSP.</p>
                            <div class="news-date">📅 22 Juni 2025</div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Regular News Grid -->
            <div class="regular-news-grid">
                <article class="news-card" onclick="readMore('award')">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=400&h=220&fit=crop" alt="Penghargaan">
                    <div class="news-card-content">
                        <span class="news-category">Achievement</span>
                        <h3>Meraih ISO 45001:2018 Certification</h3>
                        <p>PT GSP berhasil meraih sertifikasi ISO 45001:2018 untuk Sistem Manajemen Keselamatan dan Kesehatan Kerja, membuktikan komitmen terhadap standar internasional.</p>
                        <div class="news-meta">
                            <div class="news-date">📅 20 Juni 2025</div>
                            <div class="news-author">✍️ Divisi QA/QC</div>
                        </div>
                    </div>
                </article>

                <article class="news-card" onclick="readMore('csr')">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=400&h=220&fit=crop" alt="Program CSR">
                    <div class="news-card-content">
                        <span class="news-category">CSR</span>
                        <h3>Program Bantuan Pendidikan Anak Pekerja</h3>
                        <p>GSP meluncurkan program beasiswa pendidikan untuk 50 anak karyawan berprestasi sebagai bentuk apresiasi dan investasi masa depan.</p>
                        <div class="news-meta">
                            <div class="news-date">📅 18 Juni 2025</div>
                            <div class="news-author">✍️ Tim CSR GSP</div>
                        </div>
                    </div>
                </article>

                <article class="news-card" onclick="readMore('innovation')">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=220&fit=crop" alt="Inovasi Layanan">
                    <div class="news-card-content">
                        <span class="news-category">Innovation</span>
                        <h3>Layanan Cleaning Ramah Lingkungan</h3>
                        <p>Introduksi produk pembersih organik dan metode cleaning eco-friendly untuk mendukung program go green perusahaan klien.</p>
                        <div class="news-meta">
                            <div class="news-date">📅 16 Juni 2025</div>
                            <div class="news-author">✍️ Divisi R&D</div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="load-more-container">
                <button class="load-more-btn" onclick="loadMoreNews()">
                    Muat Berita Lainnya
                </button>
            </div>
        </div>
    </section>

    <script>
        function readMore(newsId) {
            // Redirect ke halaman detail berita sesuai id
            let detailMap = {
                'award': 'berita_detail_award',
                'csr': 'berita_detail_csr.php',
                'innovation': 'berita_detail_innovation.php',
                'featured': 'berita_detail_featured.php',
                'training': 'berita_detail_training.php',
                'expansion': 'berita_detail_expansion.php',
                'technology': 'berita_detail_technology.php'
            };
            if (detailMap[newsId]) {
                window.location.href = detailMap[newsId];
            } else {
                alert('Detail berita belum tersedia.');
            }
        }

        function loadMoreNews() {
            // Simulasi load more functionality
            const button = document.querySelector('.load-more-btn');
            button.textContent = 'Memuat...';
            button.disabled = true;

            setTimeout(() => {
                alert('Fitur load more akan menampilkan berita-berita lama dari database atau API.');
                button.textContent = 'Muat Berita Lainnya';
                button.disabled = false;
            }, 1500);
        }

        // Auto-update breaking news (simulasi)
        const breakingTexts = [
            "PT GSP meraih penghargaan 'Best Security Service Provider 2024' dari Asosiasi Keamanan Indonesia",
            "Pembukaan lowongan kerja untuk 200 posisi security, cleaning, dan driver di seluruh Indonesia",
            "Partnership baru dengan 15 perusahaan multinasional untuk layanan fasilitas management",
            "Investasi teknologi AI untuk sistem monitoring keamanan senilai 2 miliar rupiah"
        ];

        let currentBreakingIndex = 0;
        setInterval(() => {
            const breakingText = document.querySelector('.breaking-text');
            currentBreakingIndex = (currentBreakingIndex + 1) % breakingTexts.length;
            breakingText.textContent = breakingTexts[currentBreakingIndex];
        }, 10000); // Change every 10 seconds
    </script>
      <script src="Website/js/scripts.js"></script>
</body>

</html>
<?php include 'Footer.php'; ?>