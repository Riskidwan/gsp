<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Loker</h3>
                <p class="text-subtitle text-muted">Form untuk menambahkan lowongan kerja baru.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Loker</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <form enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Input Berita</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" name="judul" class="form-control" placeholder="Contoh: Kebakaran di Gudang Surabaya" required>
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Hiburan">Hiburan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>">
                            </div>

                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="text" name="penulis" class="form-control" placeholder="Contoh: Rudi Hartono" required>
                            </div>

                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input type="file" name="gambar[]" class="form-control" multiple>
                                <small class="text-muted">Bisa pilih lebih dari satu.</small>
                            </div>
                        </div>

                        <!-- Kanan -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Deskripsi Singkat</label>
                                <textarea name="deskripsi_singkat" class="form-control" rows="4" placeholder="Ringkasan isi berita..." required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Konten Lengkap</label>
                                <textarea name="konten" class="form-control" rows="8" placeholder="Isi berita lengkap di sini..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan Berita</button>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="confirmModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    Apakah semua data sudah benar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" id="btnConfirmSave">Ya, Simpan</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const btnShowConfirm = document.getElementById('btnShowConfirm');
    const btnConfirmSave = document.getElementById('btnConfirmSave');
    const formLoker = document.getElementById('formLoker');
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

    // Array penyimpanan sementara
    const lokerSementara = [];

    // Show modal saat klik tombol
    btnShowConfirm.addEventListener('click', () => {
        confirmModal.show();
    });

    // Setelah konfirmasi simpan ke array
    btnConfirmSave.addEventListener('click', () => {
        const formData = new FormData(formLoker);
        const data = Object.fromEntries(formData.entries());
        lokerSementara.push(data);

        console.log("Data loker tersimpan sementara:");
        console.log(lokerSementara);

        // Reset form dan tutup modal
        formLoker.reset();
        confirmModal.hide();
    });
</script>


<?= $this->endSection(); ?>