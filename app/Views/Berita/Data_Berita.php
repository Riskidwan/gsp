<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= esc($title) ?></h3>
                <p class="text-subtitle text-muted">Kelola semua berita dan pengumuman perusahaan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Alert Message -->
    <?php if (session()->get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i> <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->get('error')): ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle"></i> <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Data Berita</h5>
                <div>
                    <a href="<?= base_url('admin/berita/create') ?>" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tambah Berita
                    </a>
                    <!-- <a href="<?= base_url('admin/berita/breaking-news') ?>" class="btn btn-warning">
                        <i class="bi bi-lightning-charge"></i> Breaking News
                    </a> -->
                    <!-- <button class="btn btn-outline-secondary" onclick="toggleFilters()">
                        <i class="bi bi-funnel"></i> Filter
                    </button> -->
                </div>
            </div>

            <!-- Filter Card -->
            <!-- <div class="card-body" id="filtersCard" style="display: none;">
               <form method="GET" action="<?= base_url('admin/berita') ?>">

                    <div class="row g-3">
                        <div class="col-md-3">
                            <select name="kategori" class="form-select">
                                <option value="">Semua Kategori</option>
                                <?php foreach ($kategoriList as $kategori): ?>
                                    <option value="<?= $kategori['id'] ?>" <?= (request()->getGet('kategori') == $kategori['id']) ? 'selected' : '' ?>>
                                        <?= esc($kategori['nama_kategori']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Cari berita..."
                                value="<?= esc(request()->getGet('search')) ?>">
                        </div>
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div> -->

            <!-- Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="table1">
                        <thead class="table-dark">
                            <tr>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Views</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($beritaList)): ?>
                                <?php foreach ($beritaList as $berita): ?>
                                    <tr>
                                        <td>
                                            <?php if ($berita['gambar']): ?>
                                                <img src="<?= base_url('uploads/berita/' . $berita['gambar']) ?>"

                                                    class="img-thumbnail"
                                                    style="width: 60px; height: 60px; object-fit: cover;">
                                            <?php else: ?>
                                                <div class="bg-light d-flex align-items-center justify-content-center"
                                                    style="width: 60px; height: 60px; border-radius: 5px;">
                                                    <i class="bi bi-image text-muted"></i>
                                                </div>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <strong><?= esc($berita['judul']) ?></strong><br>
                                            <small class="text-muted"><?= esc($berita['excerpt']) ?></small>
                                            <?php if ($berita['is_featured']): ?>
                                                <span class="badge bg-warning text-dark ms-2">Featured</span>
                                            <?php endif; ?>
                                            <?php if ($berita['is_breaking']): ?>
                                                <span class="badge bg-danger ms-2">Breaking</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><span class="badge bg-secondary"><?= esc($berita['nama_kategori']) ?></span></td>
                                        <td><?= esc($berita['penulis']) ?></td>

                                        <td><i class="bi bi-eye"></i> <?= number_format($berita['views']) ?></td>
                                        <td><small><?= date('d/m/Y H:i', strtotime($berita['published_at'] ?? $berita['created_at'])) ?></small></td>
                                        <td>
                                            <div class="btn-group">
                                                <!-- Tombol Detail -->
                                                <a href="<?= base_url('berita/detail/' . $berita['slug']) ?>"
                                                    class="btn btn-sm btn-outline-info" target="_blank">
                                                    <i class="bi bi-eye"></i>
                                                </a>

                                                <!-- Tombol Edit -->
                                                <a href="<?= base_url('berita/edit/' . $berita['id']) ?>"
                                                    class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <!-- Tombol Hapus (Form POST Aman) -->
                                                <form action="<?= base_url('berita/delete/' . $berita['id']) ?>"
                                                    method="post"
                                                    onsubmit="return confirm('Yakin mau hapus berita ini?')">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center py-4">
                                        <i class="bi bi-newspaper fs-1 text-muted mb-2"></i>
                                        <p class="text-muted">Belum ada berita</p>
                                        <a href="<?= base_url('berita/create') ?>" class="btn btn-primary">
                                            <i class="bi bi-plus-circle"></i> Tambah Berita Pertama
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus berita ini?</p>
                <p class="text-danger"><small>Data yang dihapus tidak dapat dikembalikan!</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    let deleteId = null;

    function toggleFilters() {
        const card = document.getElementById('filtersCard');
        card.style.display = card.style.display === 'none' ? 'block' : 'none';
    }

    function deleteBerita(id) {
        deleteId = id;
        const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    }

    function confirmDelete() {
        if (!deleteId) return;

        fetch('<?= base_url('admin/berita/delete/') ?>' + deleteId, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) location.reload();
                else alert('Error: ' + data.message);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menghapus berita');
            });

        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
        modal.hide();
    }

    // auto hide alert
    setTimeout(() => {
        document.querySelectorAll('.alert').forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
</script>

<?= $this->endSection(); ?>