<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Lamaran Masuk</h3>
                <p class="text-subtitle text-muted">Daftar lamaran yang masuk, bisa dihapus atau ditandai sudah dipanggil.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Lamaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Daftar Lamaran Masuk</h5>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <form method="get" action="<?= base_url('data_lamaran') ?>">
                            <label>Pilih Posisi:</label>
                            <select name="position" onchange="this.form.submit()">
                                <option value="">-- Semua Posisi --</option>
                                <?php foreach ($positions as $p): ?>
                                    <option value="<?= $p['position'] ?>"
                                        <?= (isset($_GET['position']) && $_GET['position'] == $p['position']) ? 'selected' : '' ?>>
                                        <?= $p['position'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </div>
                    <div id="custom-search"></div>
                </div>


                <form action="<?= base_url('dashboard/hapus_multiple') ?>" method="post">
                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <div id="custom-selector"></div>
                        <button type="submit" class="btn btn-danger mt-2">
                            <i class="bi bi-trash"></i> Hapus yang Dipilih
                        </button>
                    </div>

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th style="width: 40px;">
                                    <input type="checkbox" id="select-all">
                                </th>
                                <th style="width: 50px;">No</th>
                                <th>Nama Lengkap</th>
                                <th>Nik</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Posisi</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th style="width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($lamaran as $row): ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="selected_ids[]" value="<?= $row['id'] ?>">
                                    </td>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($row['nama_lengkap']) ?></td>
                                    <td><?= esc($row['nik']) ?></td>
                                    <td><?= esc($row['email']) ?></td>
                                    <td><?= esc($row['phone']) ?></td>
                                    <td><?= esc($row['position']) ?></td>
                                    <td><?= esc($row['asal_sekolah']) ?></td>
                                    <td><?= esc($row['address']) ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td>
                                        <?php if ($row['status'] == 'Sudah Dipanggil'): ?>
                                            <span class="badge bg-success">Sudah Dipanggil</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning text-dark">Belum Dipanggil</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('dashboard/tandai/' . $row['id']) ?>"
                                            class="btn btn-sm btn-success"
                                            onclick="return confirm('Tandai lamaran ini sudah dipanggil?')">
                                            Tandai
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </form>
            </div>
        </div>
    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p><?= date('Y'); ?> &copy; PT GSP</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">PT GSP</a></p>
        </div>
    </div>
</footer>

<script src="<?= base_url('assets/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
<script src="<?= base_url('assets/static/js/pages/simple-datatables.js'); ?>"></script>
<!-- <script>
    // Pilih semua checkbox
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.getElementsByName('selected_ids[]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
</script> -->
<script>
    // Select All Checkbox
    document.getElementById('select-all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('input[name="selected_ids[]"]');
        checkboxes.forEach(cb => cb.checked = event.target.checked);
    });
</script>
<?= $this->endSection(); ?>