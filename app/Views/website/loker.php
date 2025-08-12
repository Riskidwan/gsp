<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Gemilang Sapta Perdana</title>
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
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
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
            list-style: none;
            padding-left: 0;
        }

        .requirements li {
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
    <?php include 'header.php'; ?>
    <!-- Loker Section -->
    <br>
    <section id="loker" class="section">
        <div class="container">
            <h2 class="section-title">Lowongan Kerja Terbaru</h2>
            <div class="card-grid">
                <!-- Security Officer -->
                   <div class="card">
        <div class="urgent-badge">Urgent</div>
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=200&fit=crop" alt="Factory Production">
        <div class="card-content">
            <h3>Operator Produksi - PT INKOM</h3>
            <div class="salary-range">Gaji Kompetitif + Tunjangan</div>
            <p class="job-description">Bertugas mengoperasikan mesin produksi dan memastikan proses produksi berjalan dengan lancar. Bertanggung jawab dalam menjaga kualitas produk sesuai standar perusahaan.</p>

             <div class="job-details">
                <div class="detail-item">
                    <span class="detail-label">Lokasi</span>
                    <span class="detail-value">PT Industri Komkar Indonesia</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Tipe Kerja</span>
                    <span class="detail-value">Full Time</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Jam Kerja</span>
                    <span class="detail-value">Shift</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Pengalaman</span>
                    <span class="detail-value">Fresh Graduate Welcome</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Pendidikan</span>
                    <span class="detail-value">SMA/SMK/MA Sederajat</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Gender</span>
                    <span class="detail-value">Laki-laki / Perempuan</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Kesehatan Mata</span>
                    <span class="detail-value">Tidak buta warna & tidak minus</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Tinggi Badan</span>
                    <span class="detail-value">L: 150cm, P: 145cm</span>
                </div>
            </div>

            <div class="requirements">
                <h4>Persyaratan Umum:</h4>
                <ul>
                   <li>Surat lamaran pekerjaan</li>
                    <li>CV/Daftar riwayat hidup</li>
                    <li>Pas foto 4x6 (2 lembar)</li>
                    <li>Fotocopy KTP & Kartu Keluarga</li>
                    <li>Fotocopy SKCK</li>
                    <li>Fotocopy Ijazah/SKL</li>
                    <li>Surat keterangan sehat dari IHC Klinik GSP</li>
                    <li>Sertifikat pendukung lainnya</li>
                </ul>
            </div>

            

            <a href="/inputloker" class="apply-btn">Lamar Sekarang</a>
        </div>
    </div>

                <!-- Cleaning Service -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=400&h=180&fit=crop" alt="Cleaning Service">
                    <div class="card-content">
                        <h3>Cleaning Service - Semarang</h3>
                        <div class="salary-range">Rp 3.200.000 - Rp 4.000.000</div>
                        <p class="job-description">Menjaga kebersihan area kantor dan fasilitas umum dengan standar tinggi. Memastikan lingkungan kerja yang bersih dan nyaman.</p>

                        <div class="job-details">
                            <div class="detail-item">
                                <span class="detail-label">Lokasi</span>
                                <span class="detail-value">Semarang Tengah</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tipe Kerja</span>
                                <span class="detail-value">Full Time</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Jam Kerja</span>
                                <span class="detail-value">08:00 - 17:00</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Pengalaman</span>
                                <span class="detail-value">Fresh Graduate</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Pendidikan</span>
                                <span class="detail-value">SMP/SMA</span>
                            </div>
                        </div>

                        <div class="requirements">
                            <h4>Persyaratan:</h4>
                            <ul>
                                <li>Pria/Wanita, usia 20-35 tahun</li>
                                <li>Sehat jasmani dan rohani</li>
                                <li>Rajin dan teliti dalam bekerja</li>
                                <li>Mampu menggunakan peralatan cleaning</li>
                                <li>Dapat bekerja sama dalam tim</li>
                                <li>Berpenampilan rapi dan sopan</li>
                            </ul>
                        </div>

                        <a href="/inputloker" class="apply-btn">Lamar Sekarang</a>
                    </div>
                </div>

                <!-- Driver -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=180&fit=crop" alt="Driver">
                    <div class="card-content">
                        <h3>Driver Operasional - Surabaya</h3>
                        <div class="salary-range">Rp 4.000.000 - Rp 5.000.000</div>
                        <p class="job-description">Mengantar dan menjemput sesuai kebutuhan operasional perusahaan. Memastikan perjalanan yang aman dan tepat waktu.</p>

                        <div class="job-details">
                            <div class="detail-item">
                                <span class="detail-label">Lokasi</span>
                                <span class="detail-value">Surabaya Timur</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tipe Kerja</span>
                                <span class="detail-value">Full Time</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Jam Kerja</span>
                                <span class="detail-value">07:00 - 16:00</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Pengalaman</span>
                                <span class="detail-value">Min. 2 tahun</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Pendidikan</span>
                                <span class="detail-value">SMA/SMK</span>
                            </div>
                        </div>

                        <div class="requirements">
                            <h4>Persyaratan:</h4>
                            <ul>
                                <li>Pria, usia 25-45 tahun</li>
                                <li>Memiliki SIM A yang masih berlaku</li>
                                <li>Pengalaman mengendarai mobil min. 2 tahun</li>
                                <li>Mengenal rute Surabaya dan sekitarnya</li>
                                <li>Tidak memiliki catatan pelanggaran lalu lintas</li>
                                <li>Komunikatif dan ramah</li>
                            </ul>
                        </div>
                        <a href="/inputloker" class="apply-btn">Lamar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'Footer.php'; ?>

    <script src="Website/js/scripts.js"></script>
</body>

</html>