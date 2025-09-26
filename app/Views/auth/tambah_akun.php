<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">
                        <i class="bi bi-person-plus-fill"></i> Tambah Akun
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

                    <form action="<?= base_url('akun/store') ?>" method="post">

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
                                        value="<?= old('username') ?>"
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
                                        <i class="bi bi-lock me-2"></i>Password <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>"
                                            id="password"
                                            name="password"
                                            placeholder="Masukkan password"
                                            required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye" id="toggleIcon"></i>
                                        </button>
                                        <?php if (isset($validation) && $validation->hasError('password')): ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-text">Minimal 6 karakter</div>
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
                                        <option value="super_admin" <?= old('role') === 'super_admin' ? 'selected' : '' ?>>
                                            Super Admin
                                        </option>
                                        <option value="admin" <?= old('role') === 'admin' ? 'selected' : '' ?>>
                                            Admin
                                        </option>
                                        <option value="hrd" <?= old('role') === 'hrd' ? 'selected' : '' ?>>
                                            HRD
                                        </option>
                                        <option value="direksi" <?= old('role') === 'direksi' ? 'selected' : '' ?>>
                                            Direksi
                                        </option>
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
                                        <option value="active" <?= old('status') === 'active' ? 'selected' : '' ?>>
                                            Aktif
                                        </option>
                                        <option value="inactive" <?= old('status') === 'inactive' ? 'selected' : '' ?>>
                                            Tidak Aktif
                                        </option>
                                    </select>
                                    <?php if (isset($validation) && $validation->hasError('status')): ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('status') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="mb-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <i class="bi bi-info-circle me-2"></i>Penjelasan Role:
                                    </h6>
                                    <ul class="mb-0">
                                        <li><strong>Super Admin:</strong> Akses penuh + manajemen akun</li>
                                        <li><strong>Admin:</strong> Akses penuh CRUD data (tanpa manajemen akun)</li>
                                        <li><strong>HRD:</strong> Dapat membuat, melihat, dan mengupdate data (tidak dapat menghapus)</li>
                                        <li><strong>Direksi:</strong> Hanya dapat melihat data (read-only)</li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-2"></i>Simpan
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-clockwise me-2"></i>Reset
                            </button>
                            <a href="<?= base_url('akun') ?>" class="btn btn-outline-danger">
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
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // ganti icon
                if (type === 'password') {
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            });
        }
    });
</script>

<?= $this->endSection() ?>