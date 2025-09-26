<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Login' ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/compiled/svg/favicon.svg') ?>" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/compiled/css/app.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/compiled/css/app-dark.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/compiled/css/auth.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-box {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .auth-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
            text-align: center;
        }

        .auth-subtitle {
            color: #718096;
            margin-bottom: 30px;
            text-align: center;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 12px 16px 12px 45px;
            font-size: 14px;
            background: #fafafa;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            border-color: #3182ce;
            box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.1);
            background: #fff;
            outline: none;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 16px;
        }

        .btn-login {
            background: #3182ce;
            border: none;
            border-radius: 6px;
            padding: 12px 24px;
            font-weight: 500;
            font-size: 14px;
            width: 100%;
            color: #fff;
            transition: background-color 0.2s ease;
        }

        .btn-login:hover {
            background: #2c5282;
        }

        .alert {
            border-radius: 6px;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: 14px;
            border: none;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-section img {
            height: 80px;
            width: auto;
            margin-bottom: 15px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #a0aec0;
        }

        @media (max-width: 575.98px) {
            .login-box {
                padding: 30px 25px;
                margin: 10px;
            }

            .auth-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="login-box">
            <!-- Logo -->
            <div class="logo-section">
                <img src="<?= base_url('website/images/logo_baru.png') ?>" alt="PT GSP Logo">
            </div>

            <!-- Title -->
            <h1 class="auth-title">Login</h1>
            <p class="auth-subtitle">Silakan masukkan username dan password</p>

            <!-- Flash Message -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <i class="bi bi-check-circle me-2"></i>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form action="<?= base_url('auth/loginProcess') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Username -->
                <div class="form-group">
                    <div class="form-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <input type="text" name="username" id="username"
                        class="form-control <?= (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : '' ?>"
                        placeholder="Username" value="<?= old('username') ?>" required>
                    <?php if (isset($validation) && $validation->hasError('username')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <div class="form-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                    <input type="password" name="password" id="password"
                        class="form-control <?= (isset($validation) && $validation->hasError('password')) ? 'is-invalid' : '' ?>"
                        placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="bi bi-eye" id="toggleIcon"></i>
                    </span>
                    <?php if (isset($validation) && $validation->hasError('password')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-login">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                </button>
            </form>

            <!-- Back to Website -->
            <div class="text-center mt-3">
                <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-globe me-2"></i> Kembali ke Website
                </a>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("bi-eye-slash", "bi-eye");
            }
        }
    </script>
</body>

</html>
