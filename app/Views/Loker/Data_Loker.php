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

                <h5 class="card-title">
                    Daftar Lamaran Masuk
                </h5>

            </div>


            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div id="custom-selector"></div>

                    <div id="custom-search"></div>
                </div>
                <form method="get" action="<?= base_url('data_loker') ?>">
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
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Posisi</th>
                            <th>Alamat</th>
                            <th>CV</th>
                            <th>Pengalaman</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($lamaran as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($row['nama_lengkap']) ?></td>
                                <td><?= esc($row['email']) ?></td>
                                <td><?= esc($row['phone']) ?></td>
                                <td><?= esc($row['position']) ?></td>

                                <td><?= esc($row['address']) ?></td>
                                <td>
                                    <?php foreach (explode(',', $row['cv_file']) as $file): ?>
                                        <a href="<?= base_url('uploads/cv/' . $file) ?>" target="_blank">
                                            <?= esc($file) ?>
                                        </a><br>
                                    <?php endforeach; ?>

                                </td>
                                <td><?= esc($row['experience']) ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td><?= esc($row['status']) ?></td>
                                <td>
                                    <!-- Tombol tandai sudah dipanggil -->
                                    <a href="<?= base_url('dashboard/tandai/' . $row['id']) ?>" class="btn btn-sm btn-success"
                                        onclick="return confirm('Tandai lamaran ini sudah dipanggil?')">
                                        Tandai
                                    </a>

                                    <!-- Tombol hapus -->
                                    <a href="<?= base_url('dashboard/hapus/' . $row['id']) ?>" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus lamaran ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

<?= $this->endSection(); ?>