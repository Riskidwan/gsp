<?php // app/Views/berita/edit.php 
?>
<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Berita</h3>
                <p class="text-subtitle text-muted">Form untuk mengedit berita.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('berita') ?>">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <!-- Alert -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- FORM EDIT -->
        <form action="<?= base_url('berita/update/' . $berita['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <!-- Informasi Dasar -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5>📝 Informasi Dasar</h5>
                </div>
                <div class="card-body row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Berita *</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="<?= old('judul', $berita['judul']) ?>" onkeyup="generateSlug()" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug URL</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                value="<?= old('slug', $berita['slug']) ?>">
                            <small class="text-muted">URL: <span id="slugPreview"><?= old('slug', $berita['slug']) ?></span></small>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal" class="form-label">Tanggal Berita</label>
                            <input type="datetime-local" class="form-control" id="tanggal" name="published_at"
                                value="<?= old('published_at', date('Y-m-d\TH:i', strtotime($berita['published_at']))) ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Kategori *</label>
                            <select class="form-select" id="kategori_id" name="kategori_id" required>
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($kategoriList as $kategori): ?>
                                    <option value="<?= $kategori['id'] ?>"
                                        <?= old('kategori_id', $berita['kategori_id']) == $kategori['id'] ? 'selected' : '' ?>>
                                        <?= esc($kategori['nama_kategori']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis *</label>
                            <input type="text" class="form-control" id="penulis" name="penulis"
                                value="<?= old('penulis', $berita['penulis']) ?>" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3 px-3">
                    <label for="excerpt" class="form-label">Ringkasan</label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="3"><?= old('excerpt', $berita['excerpt']) ?></textarea>
                </div>
            </div>

            <!-- Konten -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5>📑 Konten Berita</h5>
                </div>
                <div class="card-body">
                    <textarea class="form-control" id="konten" name="konten" rows="15"><?= old('konten', $berita['konten']) ?></textarea>
                </div>
            </div>

            <!-- Media -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5>🖼️ Media</h5>
                </div>
                <div class="card-body">
                    <?php if ($berita['gambar']): ?>
                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini:</label><br>
                            <img src="<?= base_url('uploads/berita/' . $berita['gambar']) ?>"
                                alt="<?= esc($berita['judul']) ?>"
                                class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                </div>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <a href="<?= base_url('berita') ?>" class="btn btn-secondary">← Kembali</a>
                <button type="submit" class="btn btn-primary">Update Berita</button>
            </div>
        </form>
    </section>
</div>

<script>
    function generateSlug() {
        const judul = document.getElementById('judul').value;
        const slug = judul.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
        document.getElementById('slug').value = slug;
        document.getElementById('slugPreview').textContent = slug;
    }
</script>

<?= $this->endSection(); ?>