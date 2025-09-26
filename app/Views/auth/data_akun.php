<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="page-heading">
    <h3>Data Akun</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Daftar Akun</h4>
                    <a href="<?= base_url('create') ?>" class="btn btn-primary">+ Tambah Akun</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)): ?>
                                <?php $no = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= esc($user['username']) ?></td>
                                        <td><?= esc($user['password']) ?></td> <!-- Tambah password -->
                                        <td><?= esc($user['role']) ?></td>
                                        <td>
                                            <?php if ($user['status'] == 'active'): ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Inactive</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('akun/edit/' . $user['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="<?= base_url('akun/delete/' . $user['id']) ?>" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin hapus akun ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada akun</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>

<script src="<?= base_url('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js') ?>"></script>
<script>
    let table1 = document.querySelector('#table1');
    if (table1) {
        new simpleDatatables.DataTable(table1);
    }
</script>
