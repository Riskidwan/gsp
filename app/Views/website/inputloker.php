<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Lamaran Kerja - PT Gemilang</title>
    <?php include('header.php'); ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .job-application-container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255,255,255,0.05) 10px,
                rgba(255,255,255,0.05) 20px
            );
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translateX(-50%) translateY(-50%) rotate(0deg); }
            100% { transform: translateX(-50%) translateY(-50%) rotate(360deg); }
        }

        .form-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
            font-weight: 700;
        }

        .form-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .form-content {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
        }

        .required {
            color: #e74c3c;
            margin-left: 3px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafbfc;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-control:hover {
            border-color: #667eea;
            background: white;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        select.form-control {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 40px;
            appearance: none;
            cursor: pointer;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 2;
        }

        .file-upload-label {
            display: block;
            padding: 20px;
            border: 2px dashed #667eea;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9ff;
            position: relative;
        }

        .file-upload-label:hover {
            border-color: #5a67d8;
            background: #eef2ff;
            transform: translateY(-2px);
        }

        .file-upload-icon {
            font-size: 2rem;
            color: #667eea;
            margin-bottom: 10px;
        }

        .file-upload-text {
            color: #667eea;
            font-weight: 600;
        }

        .file-upload-subtext {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .file-list {
            margin-top: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            display: none;
        }

        .file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e1e8ed;
        }

        .file-item:last-child {
            border-bottom: none;
        }

        .file-name {
            color: #333;
            font-weight: 500;
        }

        .file-size {
            color: #666;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            transition: all 0.6s ease;
            transform: translate(-50%, -50%);
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        .btn-primary:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none !important;
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            display: none;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .job-application-container {
                margin: 20px;
                max-width: calc(100% - 40px);
            }
        }

        @media (max-width: 768px) {
            .job-application-container {
                margin: 15px;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            }
            
            .form-header {
                padding: 30px 15px;
            }
            
            .form-header h1 {
                font-size: 2rem;
                margin-bottom: 8px;
            }
            
            .form-header p {
                font-size: 1rem;
            }
            
            .form-content {
                padding: 25px 20px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-control {
                padding: 12px;
                font-size: 16px; /* Prevents zoom on iOS */
            }
            
            .btn-primary {
                width: 100%;
                padding: 15px;
                font-size: 1rem;
            }
            
            .file-upload-label {
                padding: 15px;
            }
            
            .file-upload-icon {
                font-size: 1.5rem;
            }

            .file-item {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 0;
            }
            
            .file-size {
                margin-top: 5px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .job-application-container {
                margin: 10px;
            }

            .form-header {
                padding: 25px 15px;
            }
            
            .form-header h1 {
                font-size: 1.75rem;
            }
            
            .form-content {
                padding: 20px 15px;
            }
            
            .form-control {
                padding: 10px 12px;
            }
            
            .form-group label {
                font-size: 0.9rem;
            }
            
            .file-upload-label {
                padding: 12px;
            }
            
            .file-upload-text {
                font-size: 0.9rem;
            }
            
            .file-upload-subtext {
                font-size: 0.8rem;
            }
            
            .btn-primary {
                padding: 14px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 360px) {
            .form-header h1 {
                font-size: 1.6rem;
            }
            
            .form-content {
                padding: 15px 12px;
            }
            
            .form-control {
                padding: 10px;
            }
        }

        /* Focus states for better accessibility */
        .form-control:focus-visible,
        .btn-primary:focus-visible {
            outline: 2px solid #667eea;
            outline-offset: 2px;
        }

        /* Touch-friendly hover states for mobile */
        @media (hover: hover) {
            .form-control:hover {
                border-color: #667eea;
                background: white;
            }
            
            .file-upload-label:hover {
                border-color: #5a67d8;
                background: #eef2ff;
                transform: translateY(-2px);
            }
            
            .btn-primary:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            }
        }
    </style>
</head>
<body>
    <div class="job-application-container">
        <div class="form-header">
            <h1>PT Gemilang</h1>
            <p>Formulir Lamaran Kerja</p>
        </div>
        
        <div class="form-content">
            <div class="success-message" id="successMessage">
                ✅ Lamaran Anda berhasil dikirim! Terima kasih atas minat Anda bergabung dengan PT Gemilang.
            </div>
            
            <div class="error-message" id="errorMessage">
                ❌ Mohon lengkapi semua field yang wajib diisi.
            </div>

            <form id="jobApplicationForm" method="POST" action="process_application.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullName">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" id="fullName" name="fullName" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor HP <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="08xxxxxxxxxx" required>
                </div>

                <div class="form-group">
                    <label for="position">Posisi yang Dilamar <span class="required">*</span></label>
                    <select id="position" name="position" class="form-control" required>
                        <option value="">Pilih Posisi</option>
                        <option value="software-engineer">Software Engineer</option>
                        <option value="data-analyst">Data Analyst</option>
                        <option value="marketing-specialist">Marketing Specialist</option>
                        <option value="hr-specialist">HR Specialist</option>
                        <option value="finance-staff">Finance Staff</option>
                        <option value="customer-service">Customer Service</option>
                        <option value="project-manager">Project Manager</option>
                        <option value="sales-executive">Sales Executive</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Alamat Domisili <span class="required">*</span></label>
                    <textarea id="address" name="address" class="form-control" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                </div>

                <div class="form-group">
                    <label for="cv">Unggah CV/Lamaran <span class="required">*</span></label>
                    <div class="file-upload">
                        <input type="file" id="cv" name="cv[]" accept=".pdf,.doc,.docx" multiple required>
                        <label for="cv" class="file-upload-label">
                            <div class="file-upload-icon">📄</div>
                            <div class="file-upload-text">Klik untuk memilih file</div>
                            <div class="file-upload-subtext">Maksimum 5 file, masing-masing 10MB<br>Format: PDF, DOC, DOCX</div>
                        </label>
                    </div>
                    <div class="file-list" id="fileList"></div>
                </div>

                <div class="form-group">
                    <label for="experience">Pengalaman Kerja</label>
                    <textarea id="experience" name="experience" class="form-control" placeholder="Deskripsikan pengalaman kerja Anda (opsional)"></textarea>
                </div>

                <div class="btn-container">
                    <button type="submit" class="btn-primary">
                        <span>Kirim Lamaran</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // File upload handling
        document.getElementById('cv').addEventListener('change', function(e) {
            const files = e.target.files;
            const fileList = document.getElementById('fileList');
            const maxFiles = 5;
            const maxSize = 10 * 1024 * 1024; // 10MB
            
            if (files.length > maxFiles) {
                alert(`Maksimum ${maxFiles} file yang dapat diunggah.`);
                e.target.value = '';
                return;
            }
            
            let fileListHTML = '';
            let totalSize = 0;
            let validFiles = true;
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                if (file.size > maxSize) {
                    alert(`File "${file.name}" terlalu besar. Maksimum 10MB per file.`);
                    e.target.value = '';
                    validFiles = false;
                    break;
                }
                
                totalSize += file.size;
                const fileSize = (file.size / 1024 / 1024).toFixed(2);
                
                fileListHTML += `
                    <div class="file-item">
                        <span class="file-name">${file.name}</span>
                        <span class="file-size">${fileSize} MB</span>
                    </div>
                `;
            }
            
            if (validFiles && files.length > 0) {
                fileList.innerHTML = fileListHTML;
                fileList.style.display = 'block';
            } else if (files.length === 0) {
                fileList.style.display = 'none';
            }
        });

        // Form submission handling
        document.getElementById('jobApplicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');
            
            // Reset messages
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            
            // Basic validation
            const requiredFields = ['fullName', 'email', 'phone', 'position', 'address', 'cv'];
            let isValid = true;
            
            for (let field of requiredFields) {
                const element = document.getElementById(field);
                if (!element.value || (field === 'cv' && element.files.length === 0)) {
                    isValid = false;
                    element.style.borderColor = '#e74c3c';
                } else {
                    element.style.borderColor = '#e1e8ed';
                }
            }
            
            if (!isValid) {
                errorMessage.style.display = 'block';
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }
            
            // Simulate form submission
            const submitBtn = document.querySelector('.btn-primary');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span>Mengirim...</span>';
            submitBtn.disabled = true;
            
            // In real implementation, you would send data to server here
            // fetch('process_application.php', {
            //     method: 'POST',
            //     body: formData
            // }).then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         // Handle success
            //     } else {
            //         // Handle error
            //     }
            // });
            
            setTimeout(() => {
                successMessage.style.display = 'block';
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Reset form
                this.reset();
                document.getElementById('fileList').style.display = 'none';
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Log form data for development
                console.log('Form data submitted:', Object.fromEntries(formData));
            }, 2000);
        });

        // Phone number formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            // Convert international format to local format
            if (value.startsWith('62')) {
                value = '0' + value.substring(2);
            }
            
            e.target.value = value;
        });

        // Email validation
        document.getElementById('email').addEventListener('blur', function(e) {
            const email = e.target.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                e.target.style.borderColor = '#e74c3c';
            } else {
                e.target.style.borderColor = '#e1e8ed';
            }
        });

        // Clear error states on input
        document.querySelectorAll('.form-control').forEach(field => {
            field.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(231, 76, 60)') {
                    this.style.borderColor = '#e1e8ed';
                }
            });
        });
    </script>

    <?php include('footer.php'); ?>
</body>
</html>