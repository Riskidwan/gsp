<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Lowongan Kerja</h3>
                <p class="text-subtitle text-muted">Daftar lowongan yang tersedia di website.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Lowongan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Daftar Lowongan</h5>
            </div>

            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6 d-flex align-items-center" id="custom-selector"></div>
                    <div class="col-md-6 d-flex justify-content-end" id="custom-search"></div>
                </div>

                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Perusahaan</th>
                            <th>Lokasi</th>
                            <!-- <th>Gaji</th> -->
                            <th>Tipe Kerja</th>
                            <th>Pengalaman</th>
                            <th>Pendidikan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($lowongan as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($row['judul']) ?></td>
                                <td><?= esc($row['perusahaan']) ?></td>
                                <td><?= esc($row['lokasi']) ?></td>
                                <!-- <td><?= esc($row['gaji']) ?></td> -->
                                <td><?= esc($row['tipe_kerja']) ?></td>
                                <td><?= esc($row['pengalaman']) ?></td>
                                <td><?= esc($row['pendidikan']) ?></td>
                                <td>
                                    <?php if ($row['gambar']): ?>
                                        <img src="<?= base_url('uploads/' . $row['gambar']) ?>" width="80">
                                    <?php else: ?>
                                        <em>Tidak ada</em>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('loker/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('loker/delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
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
                by <a href="#">PT GSP</a></p>
        </div>
    </div>
</footer>

<script src="<?= base_url('assets/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
<script src="<?= base_url('assets/static/js/pages/simple-datatables.js'); ?>"></script>

<?= $this->endSection(); ?>