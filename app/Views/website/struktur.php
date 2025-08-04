<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Gemilang Sapta Perdana - Struktur Organisasi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header p {
            font-size: 1.2em;
            color: #7f8c8d;
            font-weight: 300;
        }

        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
        }

        .level {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            position: relative;
        }

        .card {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            min-width: 200px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            border-radius: 15px 15px 0 0;
        }

        .komisaris .card::before {
            background: linear-gradient(90deg, #FF6B6B, #FF8E8E);
        }

        .direktur .card::before {
            background: linear-gradient(90deg, #4ECDC4, #44A08D);
        }

        .manager .card::before {
            background: linear-gradient(90deg, #45B7D1, #96CEB4);
        }

        .supervisor .card::before {
            background: linear-gradient(90deg, #FFA07A, #FFB347);
        }

        .staff .card::before {
            background: linear-gradient(90deg, #DDA0DD, #98D8C8);
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 15px;
            border: 4px solid #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .card:hover .avatar {
            transform: scale(1.1);
        }

        .card h3 {
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .card p {
            color: #7f8c8d;
            font-size: 0.9em;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .card .department {
            color: #3498db;
            font-size: 0.8em;
            font-weight: 400;
            font-style: italic;
        }

        .level-title {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.3em;
            color: #34495e;
            font-weight: 600;
        }

        .connection-line {
            width: 2px;
            height: 30px;
            background: linear-gradient(180deg, #bdc3c7, #95a5a6);
            margin: 0 auto;
        }

        .horizontal-line {
            height: 2px;
            background: linear-gradient(90deg, #bdc3c7, #95a5a6);
            margin: 15px 0;
        }

        .vision-mission {
            margin-top: 50px;
            padding: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            color: white;
        }

        .vision-mission h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
            text-align: center;
        }

        .vision-mission p {
            font-size: 1.1em;
            line-height: 1.6;
            text-align: center;
            font-weight: 300;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .stat-number {
            font-size: 2em;
            font-weight: bold;
            display: block;
        }

        .stat-label {
            font-size: 0.9em;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .header h1 {
                font-size: 2em;
            }

            .level {
                gap: 20px;
            }

            .card {
                min-width: 180px;
                padding: 20px;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>PT. Gemilang Sapta Perdana</h1>
            <p>Struktur Organisasi yang Profesional dan Terstruktur</p>
        </div>

        <div class="org-chart">
            <!-- Komisaris -->
            <div class="level komisaris">
                <div class="level-title">DEWAN KOMISARIS</div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/60.jpg" alt="Komisaris Utama" class="avatar">
                    <h3>Dewa Murti Yoga Raharjo</h3>
                    <p>Komisaris Utama</p>
                    <div class="department">Pengawasan & Tata Kelola</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/55.jpg" alt="Komisaris" class="avatar">
                    <h3>Dr. Sari Indrawati, M.M</h3>
                    <p>Komisaris</p>
                    <div class="department">Audit & Risiko</div>
                </div>
            </div>

            <div class="connection-line"></div>

            <!-- Direktur -->
            <div class="level direktur">
                <div class="level-title">DEWAN DIREKSI</div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Direktur Utama" class="avatar">
                    <h3>Sapto Murti Jiwo Raharjo</h3>
                    <p>Direktur Utama</p>
                    <div class="department">Kepemimpinan Strategis</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Direktur Operasional" class="avatar">
                    <h3>Ratna Dewi Lestari, S.T</h3>
                    <p>Direktur Operasional</p>
                    <div class="department">Operasional & Produksi</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Direktur Keuangan" class="avatar">
                    <h3>Bambang Sutrisno, S.E</h3>
                    <p>Direktur Keuangan</p>
                    <div class="department">Keuangan & Akuntansi</div>
                </div>
            </div>

            <div class="connection-line"></div>

            <!-- Manager -->
            <div class="level manager">
                <div class="level-title">TINGKAT MANAJER</div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/30.jpg" alt="Manajer HRD" class="avatar">
                    <h3>Lina Marlina, S.Psi</h3>
                    <p>Manajer HRD</p>
                    <div class="department">Sumber Daya Manusia</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Manajer Operasional" class="avatar">
                    <h3>Hendra Gunawan, S.T</h3>
                    <p>Manajer Operasional</p>
                    <div class="department">Operasional & Logistik</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Manajer Marketing" class="avatar">
                    <h3>Rio Saputra, S.E</h3>
                    <p>Manajer Marketing</p>
                    <div class="department">Pemasaran & Penjualan</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/38.jpg" alt="Manajer IT" class="avatar">
                    <h3>Diana Putri, S.Kom</h3>
                    <p>Manajer IT</p>
                    <div class="department">Teknologi Informasi</div>
                </div>
            </div>

            <div class="connection-line"></div>

            <!-- Supervisor -->
            <div class="level supervisor">
                <div class="level-title">SUPERVISOR</div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Supervisor Produksi" class="avatar">
                    <h3>Ahmad Fauzi, S.T</h3>
                    <p>Supervisor Produksi</p>
                    <div class="department">Produksi & QC</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/35.jpg" alt="Supervisor Keuangan" class="avatar">
                    <h3>Eka Sari, S.E</h3>
                    <p>Supervisor Keuangan</p>
                    <div class="department">Keuangan & Pajak</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/40.jpg" alt="Supervisor Sales" class="avatar">
                    <h3>Budi Santoso, S.E</h3>
                    <p>Supervisor Sales</p>
                    <div class="department">Penjualan & Distribusi</div>
                </div>
            </div>

            <div class="connection-line"></div>

            <!-- Staff -->
            <div class="level staff">
                <div class="level-title">STAFF & KARYAWAN</div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="Staff Administrasi" class="avatar">
                    <h3>Ayu Ningsih</h3>
                    <p>Staff Administrasi</p>
                    <div class="department">Administrasi Umum</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Staff IT" class="avatar">
                    <h3>Imam Fauzi, S.Kom</h3>
                    <p>Staff IT</p>
                    <div class="department">IT Support</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/70.jpg" alt="Staff Keuangan" class="avatar">
                    <h3>Sri Wahyuni, S.E</h3>
                    <p>Staff Keuangan</p>
                    <div class="department">Akuntansi & Keuangan</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Staff Marketing" class="avatar">
                    <h3>Andi Kurniawan</h3>
                    <p>Staff Marketing</p>
                    <div class="department">Digital Marketing</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Staff HRD" class="avatar">
                    <h3>Maya Sari, S.Psi</h3>
                    <p>Staff HRD</p>
                    <div class="department">Rekrutmen & Training</div>
                </div>
                <div class="card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/80.jpg" alt="Security" class="avatar">
                    <h3>Joko Pranoto</h3>
                    <p>Security</p>
                    <div class="department">Keamanan & Keselamatan</div>
                </div>
            </div>
        </div>

        <div class="vision-mission">
            <h3>Visi Organisasi</h3>
            <p>
                Menjadi perusahaan terdepan dengan struktur organisasi yang solid, dinamis, dan profesional. 
                Setiap individu memiliki peran strategis dalam mencapai kesuksesan bersama melalui kepemimpinan yang kuat, 
                tim yang kompak, dan komitmen tinggi untuk memberikan layanan terbaik kepada seluruh stakeholder.
            </p>
            
            <div class="stats">
                <div class="stat-card">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Karyawan Profesional</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">5</span>
                    <span class="stat-label">Departemen Utama</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">3</span>
                    <span class="stat-label">Tingkat Manajemen</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Komitmen Kualitas</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeIn 0.6s ease-in-out';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });

        // Add hover effects
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>