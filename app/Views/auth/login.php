<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>

    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">

    
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100 m-0">
            <!-- Form Login -->
            <div class="col-lg-5 col-12 p-0">
                <div id="auth-left">
                    <h1 class="auth-title text-primary mb-2">Log In</h1>
                    <p class="auth-subtitle mb-4 text-muted">Silakan masuk username dan password.</p>

                    <form action="index.html" method="post">
                        <div class="form-group position-relative has-icon-left mb-3">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-3">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg shadow-lg mt-3">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Logo GSP -->
            <div class="col-lg-7 d-none d-lg-block p-0">
                <div id="auth-right">
                    <img src="./website/images/wp2.jpeg" alt="Company Logo">
                </div>
            </div>
        </div>
    </div>
</body>

</html>