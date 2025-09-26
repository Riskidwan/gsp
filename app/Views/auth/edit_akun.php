<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">
                        <i class="bi bi-pencil-square"></i> Edit Akun
                    </h4>
                </div>

                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Terjadi kesalahan:</strong>
                            <ul class="mb-0 mt-2">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('akun/update/' . $user['id']) ?>" method="post">

                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">
                                        <i class="bi bi-person me-2"></i>Username <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                        class="form-control <?= isset($validation) && $validation->hasError('username') ? 'is-invalid' : '' ?>"
                                        id="username"
                                        name="username"
                                        value="<?= old('username', $user['username']) ?>"
                                        placeholder="Masukkan username"
                                        required>
                                    <?php if (isset($validation) && $validation->hasError('username')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        <i class="bi bi-lock me-2"></i>Password
                                    </label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>"
                                            id="password"
                                            name="password"
                                            placeholder="Kosongkan jika tidak ingin mengubah password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye" id="toggleIcon"></i>
                                        </button>
                                        <?php if (isset($validation) && $validation->hasError('password')): ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-text">Kosongkan jika tidak ingin ganti password</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="role" class="form-label">
                                        <i class="bi bi-shield me-2"></i>Role <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select <?= isset($validation) && $validation->hasError('role') ? 'is-invalid' : '' ?>"
                                        id="role"
                                        name="role"
                                        required>
                                        <option value="">Pilih Role</option>
                                        <option value="super_admin" <?= old('role', $user['role']) === 'super_admin' ? 'selected' : '' ?>>Super Admin - Full Access</option>
                                        <option value="admin" <?= old('role', $user['role']) === 'admin' ? 'selected' : '' ?>>Admin - Full CRUD</option>
                                        <option value="hrd" <?= old('role', $user['role']) === 'hrd' ? 'selected' : '' ?>>HRD - Create, Read, Update</option>
                                        <option value="direksi" <?= old('role', $user['role']) === 'direksi' ? 'selected' : '' ?>>Direksi - Read Only</option>
                                    </select>
                                    <?php if (isset($validation) && $validation->hasError('role')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('role') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">
                                        <i class="bi bi-toggle2-on me-2"></i>Status <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select <?= isset($validation) && $validation->hasError('status') ? 'is-invalid' : '' ?>"
                                        id="status"
                                        name="status"
                                        required>
                                        <option value="">Pilih Status</option>
                                        <option value="active" <?= old('status', $user['status']) === 'active' ? 'selected' : '' ?>>Aktif</option>
                                        <option value="inactive" <?= old('status', $user['status']) === 'inactive' ? 'selected' : '' ?>>Tidak Aktif</option>
                                    </select>
                                    <?php if (isset($validation) && $validation->hasError('status')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-save me-2"></i>Update
                            </button>
                            <a href="<?= base_url('data_akun') ?>" class="btn btn-outline-danger">
                                <i class="bi bi-x-circle me-2"></i>Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const password = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');

        if (password.type === 'password') {
            password.type = 'text';
            icon.className = 'bi bi-eye-slash';
        } else {
            password.type = 'password';
            icon.className = 'bi bi-eye';
        }
    });

    // Auto hide alerts
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 7000);
</script>
<?= $this->endSection() ?>
