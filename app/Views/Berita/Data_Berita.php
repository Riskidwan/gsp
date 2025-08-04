<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <!-- Page Header -->
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Berita</h3>
                <p class="text-subtitle text-muted">Tampilan daftar berita terbaru</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('dashboard'); ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="section">
        <div class="card">
            <!-- Card Header -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Data Berita</h5>
                <a href="<?= base_url('berita/tambah'); ?>" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Berita
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <!-- Table Controls -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div id="custom-selector"></div>
                    <div id="custom-search"></div>
                </div>

                <!-- Data Table -->
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No</th>
                                <th width="20%">Judul</th>
                                <th width="10%">Kategori</th>
                                <th width="12%">Tanggal</th>
                                <th width="12%">Penulis</th>
                                <th width="25%">Deskripsi Singkat</th>
                                <th width="10%">Gambar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Data Row 1 -->
                            <tr>
                                <td class="text-center">1</td>
                                <td>
                                    <strong>Kebakaran Gudang Surabaya</strong>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Nasional</span>
                                </td>
                                <td>2025-07-20</td>
                                <td>Riski Dwi</td>
                                <td>
                                    <small class="text-muted">
                                        Terjadi kebakaran hebat di kawasan industri...
                                    </small>
                                </td>
                                <td class="text-center">
                                    <img src="<?= base_url('uploads/berita/kebakaran.jpg'); ?>"
                                        class="img-thumbnail"
                                        width="60"
                                        height="60"
                                        alt="Kebakaran Gudang"
                                        style="object-fit: cover;">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="<?= base_url('berita/detail/1'); ?>"
                                            class="btn btn-sm btn-outline-info"
                                            title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="<?= base_url('berita/edit/1'); ?>"
                                            class="btn btn-sm btn-outline-warning"
                                            title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus"
                                            onclick="confirmDelete('<?= base_url('berita/hapus/1'); ?>')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Sample Data Row 2 -->
                            <tr>
                                <td class="text-center">2</td>
                                <td>
                                    <strong>Peluncuran Satelit Telkom</strong>
                                </td>
                                <td>
                                    <span class="badge bg-primary">Teknologi</span>
                                </td>
                                <td>2025-07-18</td>
                                <td>Admin rerererere</td>
                                <td>
                                    <small class="text-muted">
                                        Telkom berhasil meluncurkan satelit komunikasi terbaru...
                                    </small>
                                </td>
                                <td class="text-center">
                                    <img src="<?= base_url('Website/images/satpam2.jpeg'); ?>"
                                        class="img-thumbnail"
                                        width="60"
                                        height="60"
                                        alt="Satelit Telkom"
                                        style="object-fit: cover;">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="<?= base_url('berita/detail/2'); ?>"
                                            class="btn btn-sm btn-outline-info"
                                            title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="<?= base_url('berita/edit/2'); ?>"
                                            class="btn btn-sm btn-outline-warning"
                                            title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus"
                                            onclick="confirmDelete('<?= base_url('berita/hapus/2'); ?>')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Tambahkan data berita lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2025 &copy;</p>
        </div>
        <div class="float-end">
            <p>Dibuat dengan
                <span class="text-danger">
                    <i class="bi bi-heart-fill icon-mid"></i>
                </span>
                oleh <a href="https://saugi.me" target="_blank">PT GSP</a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= base_url('assets/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
<script src="<?= base_url('assets/static/js/pages/simple-datatables.js'); ?>"></script>

<!-- Custom JavaScript -->
<script>
    // Fungsi konfirmasi hapus
    function confirmDelete(deleteUrl) {
        if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
            window.location.href = deleteUrl;
        }
    }

    // Inisialisasi DataTable dengan konfigurasi custom
    document.addEventListener('DOMContentLoaded', function() {
        const dataTable = new simpleDatatables.DataTable("#table1", {
            searchable: true,
            fixedHeight: false,
            perPageSelect: [5, 10, 20, 50],
            perPage: 10,
            labels: {
                placeholder: "Cari berita...",
                searchTitle: "Pencarian dalam tabel",
                perPage: "data per halaman",
                noRows: "Tidak ada data yang ditemukan",
                info: "Menampilkan {start} sampai {end} dari {rows} data"
            }
        });
    });
</script>

<?= $this->endSection(); ?>