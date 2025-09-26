
<?= $this->extend('website\website') ?> 
   <?= $this->section('content') ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #2c3e50;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, #3498db, #2980b9);
            margin: 20px auto;
            border-radius: 2px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card.empty {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            font-style: italic;
            color: #777;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 25px;
        }

        .card-content h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #2c3e50;
            font-weight: 600;
        }

        .job-description {
            color: #666;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .job-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .detail-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
        }

        .detail-value {
            color: #6c757d;
            font-size: 0.9rem;
            text-align: right;
        }

        .requirements {
            margin-bottom: 20px;
        }

        .requirements h4 {
            color: #495057;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .requirements ul {
            padding-left: 20px;
        }

        .requirements li {
            list-style: none;
            padding: 5px 0;
            padding-left: 20px;
            position: relative;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .requirements li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .apply-btn {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .apply-btn:hover {
            background: linear-gradient(45deg, #2980b9, #1f5582);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .salary-range {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 15px;
        }

        .urgent-badge {
            background: #e74c3c;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            position: absolute;
            top: 15px;
            right: 15px;
            text-transform: uppercase;
        }

        .card {
            position: relative;
        }

        @media (max-width: 768px) {
            .card-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .section-title {
                font-size: 2rem;
            }

            .card-content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>


   
    <!-- Loker Section -->
    <br>
    <section id="loker" class="section">
        <div class="container">
            <h2 class="section-title">Lowongan Kerja Terbaru</h2>
            <div class="card-grid">
                <?php foreach ($loker as $item): ?>
                    <div class="card">
                        <img src="<?= base_url('uploads/' . $item['gambar']) ?>"
                            alt="<?= esc($item['judul']) ?>"
                            style="width:100%; height:200px; object-fit:cover; border-radius: 8px;">


                        <div class="card-content">
                            <h3><?= esc($item['judul']) ?> - <?= esc($item['perusahaan']) ?></h3>
                            <!-- <div class="salary-range"><?= esc($item['gaji']) ?></div> -->
                            <p class="job-description"><?= esc($item['deskripsi']) ?></p>

                            <div class="job-details">
                                <div class="detail-item">
                                    <span class="detail-label">Lokasi</span>
                                    <span class="detail-value"><?= esc($item['lokasi']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Tipe Kerja</span>
                                    <span class="detail-value"><?= esc($item['tipe_kerja']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Jam Kerja</span>
                                    <span class="detail-value"><?= esc($item['jam_kerja']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Pengalaman</span>
                                    <span class="detail-value"><?= esc($item['pengalaman']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Pendidikan</span>
                                    <span class="detail-value"><?= esc($item['pendidikan']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Gender</span>
                                    <span class="detail-value"><?= esc($item['gender']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Kesehatan Mata</span>
                                    <span class="detail-value"><?= esc($item['kesehatan_mata']) ?></span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Tinggi Badan</span>
                                    <span class="detail-value"><?= esc($item['tinggi_badan']) ?></span>
                                </div>
                            </div>

                            <div class="requirements">
                                <h4>Persyaratan Umum:</h4>
                                <ul class="checklist">
                                    <?php
                                    $persyaratan_list = explode("\n", $item['persyaratan']);
                                    foreach ($persyaratan_list as $persyaratan) {
                                        $persyaratan = trim($persyaratan);
                                        if (!empty($persyaratan)) {
                                            echo '<li>' . esc($persyaratan) . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                            <a href="<?= base_url('inputloker') ?>" class="apply-btn">Lamar Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php for ($i = count($loker); $i < 3; $i++): ?>
                    <div class="card empty">
                        <p>Belum ada lowongan</p>
                    </div>
                <?php endfor; ?>
            </div>


    </section>
   <?= $this->endSection() ?>

    <script src="Website/js/scripts.js"></script>
</body>

</html>