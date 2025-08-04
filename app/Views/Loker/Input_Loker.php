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
                    <h4 class="card-title">Form Input Loker</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Judul Posisi</label>
                                <input type="text" name="judul" class="form-control" placeholder="Contoh: Driver Operasional - Surabaya" required>
                            </div>

                            <div class="form-group">
                                <label>Range Gaji</label>
                                <input type="text" name="gaji" class="form-control" placeholder="Contoh: Rp 4.000.000 - Rp 5.000.000" required>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Pekerjaan</label>
                                <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Tipe Kerja</label>
                                <select name="tipe" class="form-control" required>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
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
                                <label>Jam Kerja</label>
                                <input type="text" name="jam_kerja" class="form-control" placeholder="Contoh: 07:00 - 16:00">
                            </div>

                            <div class="form-group">
                                <label>Pengalaman</label>
                                <input type="text" name="pengalaman" class="form-control" placeholder="Contoh: Min. 2 tahun">
                            </div>

                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" placeholder="Contoh: SMA/SMK">
                            </div>

                            <div class="form-group">
                                <label>Persyaratan Tambahan</label>
                                <textarea name="syarat" class="form-control" rows="4" placeholder="Pisahkan dengan baris baru jika lebih dari satu." required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Status Urgent?</label>
                                <select name="urgent" class="form-control">
                                    <option value="0">Biasa</option>
                                    <option value="1">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="button" class="btn btn-primary" id="btnShowConfirm">Simpan Loker</button>
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