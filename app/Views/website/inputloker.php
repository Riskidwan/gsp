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
            background: linear-gradient(135deg, #f0f8f5 0%, #e8f5e8 100%);
            min-height: 100vh;
            padding: 60px 0 20px 0;
        }

        .job-application-container {
            max-width: 800px;
            margin: 40px auto 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #e8f5e8;
        }

        .form-header {
            background: linear-gradient(135deg, #1a5c3a 0%, #2e7d5a 50%, #1a5c3a 100%);
            color: white;
            text-align: center;
            padding: 50px 30px;
            position: relative;
            overflow: hidden;
        }

        .form-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(45deg,
                    transparent,
                    transparent 15px,
                    rgba(255, 255, 255, 0.05) 15px,
                    rgba(255, 255, 255, 0.05) 30px);
        }

        .form-header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-header p {
            font-size: 1.2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .form-content {
            padding: 50px;
            background: white;
        }

        .form-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.4rem;
            color: #1a5c3a;
            margin-bottom: 25px;
            font-weight: 700;
            border-bottom: 2px solid #4ade80;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .section-icon {
            margin-right: 10px;
            font-size: 1.6rem;
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #1f2937;
            font-size: 1rem;
            letter-spacing: 0.3px;
        }

        .required {
            color: #dc2626;
            margin-left: 4px;
            font-weight: 700;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            background: #fafbfc;
            font-family: inherit;
            color: #1f2937;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #22c55e;
            background: white;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
        }

        .form-control:hover {
            border-color: #4ade80;
            background: white;
        }

        .form-control::placeholder {
            color: #6b7280;
            opacity: 0.8;
        }

        /* Input styling yang konsisten */
        input[type="text"].form-control,
        input[type="email"].form-control,
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            background: #fafbfc;
            font-family: inherit;
            color: #1f2937;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #22c55e;
            background: white;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
        }

        input[type="text"]:hover,
        input[type="email"]:hover {
            border-color: #4ade80;
            background: white;
        }

        textarea {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            background: #fafbfc;
            font-family: inherit;
            color: #1f2937;
            resize: vertical;
            min-height: 130px;
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        textarea:focus {
            outline: none;
            border-color: #22c55e;
            background: white;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
        }

        textarea:hover {
            border-color: #4ade80;
            background: white;
        }

        select.form-control {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2322c55e' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 16px center;
            background-repeat: no-repeat;
            background-size: 18px;
            padding-right: 50px;
            appearance: none;
            cursor: pointer;
        }

        .file-upload {
            position: relative;
            display: block;
            width: 100%;
        }

        .file-upload input[type="file"] {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            background: #fafbfc;
            font-family: inherit;
            color: #1f2937;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-upload input[type="file"]:focus {
            outline: none;
            border-color: #22c55e;
            background: white;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.1);
        }

        .file-upload input[type="file"]:hover {
            border-color: #4ade80;
            background: white;
        }

        .btn-primary,
        button[type="submit"] {
            background: linear-gradient(135deg, #16a34a 0%, #22c55e 50%, #16a34a 100%);
            color: white;
            border: none;
            padding: 20px 50px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(22, 163, 74, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            min-width: 200px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover,
        button[type="submit"]:hover {
            background: linear-gradient(135deg, #15803d 0%, #16a34a 50%, #15803d 100%);
            box-shadow: 0 12px 30px rgba(22, 163, 74, 0.4);
            transform: translateY(-2px);
        }

        .btn-container {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 2px solid #f0fdf4;
        }

        .alert {
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        .alert-success {
            background: linear-gradient(135deg, #dcfce7 0%, #f0fdf4 100%);
            color: #15803d;
            border: 2px solid #86efac;
            box-shadow: 0 4px 15px rgba(34, 197, 94, 0.1);
        }

        .alert-error {
            background: linear-gradient(135deg, #fef2f2 0%, #fef7f7 100%);
            color: #dc2626;
            border: 2px solid #fecaca;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.1);
        }

        .form-footer {
            background: #1f2937;
            color: white;
            text-align: center;
            padding: 30px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Flash messages styling */
        div[style*="color:red"] {
            background: linear-gradient(135deg, #fef2f2 0%, #fef7f7 100%);
            color: #dc2626 !important;
            border: 2px solid #fecaca;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.1);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        div[style*="color:green"] {
            background: linear-gradient(135deg, #dcfce7 0%, #f0fdf4 100%);
            color: #15803d !important;
            border: 2px solid #86efac;
            box-shadow: 0 4px 15px rgba(34, 197, 94, 0.1);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 30px 15px 20px 15px;
            }

            .job-application-container {
                margin: 20px auto 0 auto;
                border-radius: 12px;
            }

            .form-header {
                padding: 35px 20px;
            }

            .form-header h1 {
                font-size: 2.2rem;
            }

            .form-header p {
                font-size: 1.1rem;
            }

            .form-content {
                padding: 30px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .section-title {
                font-size: 1.2rem;
            }

            .form-control,
            input[type="text"],
            input[type="email"],
            textarea {
                padding: 14px 16px;
                font-size: 16px;
                /* Prevents zoom on iOS */
            }

            .btn-primary,
            button[type="submit"] {
                width: 100%;
                padding: 18px;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 10px 15px 10px;
            }

            .job-application-container {
                margin: 15px auto 0 auto;
                border-radius: 10px;
            }

            .form-header {
                padding: 30px 15px;
            }

            .form-header h1 {
                font-size: 1.9rem;
                line-height: 1.2;
            }

            .form-header p {
                font-size: 1.05rem;
                line-height: 1.3;
            }

            .form-content {
                padding: 20px 15px;
            }

            .form-control,
            input[type="text"],
            input[type="email"],
            textarea {
                padding: 12px 14px;
            }

            .section-title {
                font-size: 1.1rem;
                margin-bottom: 20px;
            }

            .btn-primary,
            button[type="submit"] {
                padding: 16px;
                font-size: 0.95rem;
            }
        }
    </style>  
 
    <br>
</head>

<body>
    <div class="job-application-container">
        <div class="form-header">
            <h1>Form Lamaran Pekerjaan</h1>
            <p>Bergabunglah dengan PT Gemilang Sapta Perdana dan wujudkan karir impian Anda</p>
        </div>

        <div class="form-content">
            <?php if (session()->get('errors')): ?>
                <ul>
                    <?php foreach (session()->get('errors') as $error): ?>
                        <li class="text-danger"><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


            <?php if (session()->getFlashdata('success')): ?>
                <div style="color:green;">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <form action="/lamaran/save" method="post">
                <?= csrf_field() ?>
                <div class="form-section">
                    <h3 class="section-title">
                        <span class="section-icon">👤</span>
                        Informasi Personal
                    </h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap:</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="form-group">
                            <label for="nik">Nomer Induk Kependudukan (NIK)</label>
                            <input type="text" name="nik" id="nik" class="form-control" value="<?= old('nik') ?>" placeholder="Masukkan Nomer induk kependudukan (NIK)">
                        </div>


                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="<?= old('email') ?>" placeholder="contoh@email.com">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Nomor Telepon:</label>
                            <input type="text" id="phone" name="phone" value="<?= old('phone') ?>" placeholder="08xxxxxxxxxx">
                        </div>

                        <div class="form-group">
                            <label for="position">Posisi yang Dilamar:</label>
                            <select id="position" name="position" class="form-control" required>
                                <option value="">Pilih posisi yang diminati</option>
                                <option value="Marketing Manager" <?= old('position') == 'Marketing Manager' ? 'selected' : '' ?>>Marketing Manager</option>
                                <option value="Marketing Staff" <?= old('position') == 'Marketing Staff' ? 'selected' : '' ?>>Marketing Staff</option>
                                <option value="Sales Executive" <?= old('position') == 'Sales Executive' ? 'selected' : '' ?>>Sales Executive</option>
                                <option value="Sales Representative" <?= old('position') == 'Sales Representative' ? 'selected' : '' ?>>Sales Representative</option>
                                <option value="Operator Produksi" <?= old('position') == 'Operator Produksi' ? 'selected' : '' ?>>Operator Produksi</option>
                                <option value="Operator Mesin" <?= old('position') == 'Operator Mesin' ? 'selected' : '' ?>>Operator Mesin</option>
                                <option value="Quality Control" <?= old('position') == 'Quality Control' ? 'selected' : '' ?>>Quality Control</option>
                                <option value="Admin" <?= old('position') == 'Admin' ? 'selected' : '' ?>>Admin</option>
                                <option value="HRD Staff" <?= old('position') == 'HRD Staff' ? 'selected' : '' ?>>HRD Staff</option>
                                <option value="Finance Staff" <?= old('position') == 'Finance Staff' ? 'selected' : '' ?>>Finance Staff</option>
                                <option value="IT Support" <?= old('position') == 'IT Support' ? 'selected' : '' ?>>IT Support</option>
                                <option value="Warehouse Staff" <?= old('position') == 'Warehouse Staff' ? 'selected' : '' ?>>Warehouse Staff</option>
                                <option value="Customer Service" <?= old('position') == 'Customer Service' ? 'selected' : '' ?>>Customer Service</option>
                                <option value="Supervisor" <?= old('position') == 'Supervisor' ? 'selected' : '' ?>>Supervisor</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="asal_sekolah">Pendidikan Terakhir:</label>
                            <input type="text" id="asal_sekolah" name="asal_sekolah" value="<?= old('asal_sekolah') ?>" placeholder="Masukkan asal sekolah Anda">
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <textarea id="address" name="address" placeholder="Masukkan alamat lengkap Anda"><?= old('address') ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="btn-container">
                    <button type="submit">Kirim Lamaran</button>
                </div>
            </form>

        </div>

        <div class="form-footer">
            © 2025 PT Gemilang Sapta Perdana. Semua data yang Anda berikan akan dijaga kerahasiaannya.
        </div>
    </div>
</body>

</html>
 <?= $this->endSection() ?>
<script>
    document.getElementById('cv').addEventListener('change', function(e) {
        let fileList = document.getElementById('fileList');
        fileList.innerHTML = '';

        let files = Array.from(e.target.files);
        files.forEach((file, index) => {
            let fileRow = document.createElement('div');
            fileRow.style.display = 'grid';
            fileRow.style.gridTemplateColumns = '40px 1fr 100px';
            fileRow.style.alignItems = 'center';
            fileRow.style.padding = '6px 0';
            fileRow.style.borderBottom = '1px solid #ddd';

            // Nomor
            let fileNum = document.createElement('div');
            fileNum.textContent = index + 1;

            // Nama file + ukuran
            let fileInfo = document.createElement('div');
            fileInfo.textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`;

            // Tombol hapus
            let deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Hapus';
            deleteBtn.style.background = '#dc3545';
            deleteBtn.style.color = '#fff';
            deleteBtn.style.border = 'none';
            deleteBtn.style.padding = '4px 10px';
            deleteBtn.style.borderRadius = '4px';
            deleteBtn.style.cursor = 'pointer';

            deleteBtn.addEventListener('click', () => {
                files.splice(index, 1); // hapus file dari array
                let dt = new DataTransfer();
                files.forEach(f => dt.items.add(f));
                document.getElementById('cv').files = dt.files;
                fileRow.remove();
            });

            fileRow.appendChild(fileNum);
            fileRow.appendChild(fileInfo);
            fileRow.appendChild(deleteBtn);
            fileList.appendChild(fileRow);
        });
    });
    let selectedFiles = [];

    // document.getElementById('cv').addEventListener('change', function(e) {
    //     // Gabungkan file yang sudah ada + yang baru dipilih
    //     selectedFiles = [...selectedFiles, ...e.target.files];
    //     updateFileList();
    // });

    function updateFileList() {
        let fileList = document.getElementById('fileList');
        fileList.innerHTML = '';

        selectedFiles.forEach((file, index) => {
            let fileSize = (file.size / 1024 / 1024).toFixed(2);
            let fileItem = document.createElement('div');
            fileItem.style.marginBottom = '5px';
            fileItem.innerHTML = `
                ${file.name} (${fileSize} MB)
                <button type="button" style="margin-left:10px; background:#dc3545; color:white; border:none; padding:2px 6px; border-radius:4px; cursor:pointer;">
                    Hapus
                </button>
            `;

            // Event tombol hapus
            fileItem.querySelector('button').addEventListener('click', () => {
                selectedFiles.splice(index, 1);
                updateFileList();
            });

            fileList.appendChild(fileItem);
        });

        // Update input file agar sesuai file yang tersisa
        let dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        document.getElementById('cv').files = dataTransfer.files;
    }
</script>