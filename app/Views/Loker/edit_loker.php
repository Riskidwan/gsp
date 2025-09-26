<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Lowongan</h3>
                <p class="text-subtitle text-muted">Ubah informasi lowongan kerja.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('AdminLoker'); ?>">Data Loker</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Loker</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <form action="<?= base_url('loker/update/' . $lowongan['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Edit Lowongan</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Judul</label>
                               <input type="text" name="judul" value="<?= $lowongan['judul'] ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Perusahaan</label>
                                <input type="text" name="perusahaan" value="<?= old('perusahaan', $lowongan['perusahaan']) ?>" class="form-control" required>
                            </div>
                            <!-- <div class="mb-3">
                                <label>Gaji</label>
                                <input type="text" name="gaji" value="<?= old('gaji', $lowongan['gaji']) ?>" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <label>Deskripsi Pekerjaan</label>
                                <textarea name="deskripsi" class="form-control"><?= old('deskripsi', $lowongan['deskripsi']) ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Lokasi</label>
                                <input type="text" name="lokasi" value="<?= old('lokasi', $lowongan['lokasi']) ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tipe Kerja</label>
                                <input type="text" name="tipe_kerja" value="<?= old('tipe_kerja', $lowongan['tipe_kerja']) ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Gambar</label><br>
                                <?php if ($lowongan['gambar']): ?>
                                    <img src="<?= base_url('uploads/' . $lowongan['gambar']) ?>" width="100" class="mb-2"><br>
                                <?php endif; ?>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Jam Kerja</label>
                                <input type="text" name="jam_kerja" value="<?= old('jam_kerja', $lowongan['jam_kerja']) ?>" class="form-control" placeholder="Contoh: 07:00 - 16:00">
                            </div>
                            <div class="mb-3">
                                <label>Pengalaman</label>
                                <input type="text" name="pengalaman" value="<?= old('pengalaman', $lowongan['pengalaman']) ?>" class="form-control" placeholder="Contoh: Min. 2 tahun">
                            </div>
                            <div class="mb-3">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan" value="<?= old('pendidikan', $lowongan['pendidikan']) ?>" class="form-control" placeholder="Contoh: SMA/SMK">
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <input type="text" name="gender" value="<?= old('gender', $lowongan['gender']) ?>" class="form-control" placeholder="Contoh: Laki-laki/Perempuan">
                            </div>
                            <div class="mb-3">
                                <label>Kesehatan Mata</label>
                                <input type="text" name="kesehatan_mata" value="<?= old('kesehatan_mata', $lowongan['kesehatan_mata']) ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tinggi Badan</label>
                                <input type="text" name="tinggi_badan" value="<?= old('tinggi_badan', $lowongan['tinggi_badan']) ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Persyaratan Tambahan</label>
                                <textarea name="persyaratan" class="form-control" rows="4"><?= old('persyaratan', $lowongan['persyaratan']) ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="<?= base_url('data_loker') ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </section>
</div>

<?= $this->endSection(); ?>