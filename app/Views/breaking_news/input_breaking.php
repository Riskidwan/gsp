<?= $this->extend('template'); ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title ?></h3>
                    <div class="card-tools">
                        <a href="<?= base_url('data_breaking') ?>" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open('breaking-news/store', ['class' => 'needs-validation', 'novalidate' => true]) ?>
                        
                        <div class="form-group">
                            <label for="judul" class="form-label">
                                Judul Breaking News <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control <?= $validation->hasError('judul') ? 'is-invalid' : '' ?>" 
                                      id="judul" name="judul" rows="2" maxlength="255" required
                                      placeholder="Masukkan judul breaking news (minimal 10 karakter)"><?= old('judul') ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul') ?>
                            </div>
                            <small class="form-text text-muted">
                                <span id="judulCount">0</span>/255 karakter
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="link" class="form-label">
                                Link URL <small class="text-muted">(Opsional)</small>
                            </label>
                            <input type="url" 
                                   class="form-control <?= $validation->hasError('link') ? 'is-invalid' : '' ?>" 
                                   id="link" name="link" value="<?= old('link') ?>"
                                   placeholder="https://example.com/berita">
                            <div class="invalid-feedback">
                                <?= $validation->getError('link') ?>
                            </div>
                            <small class="form-text text-muted">
                                Kosongkan jika tidak ada link yang dituju
                            </small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="urutan" class="form-label">
                                        Urutan Tampil <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" 
                                           class="form-control <?= $validation->hasError('urutan') ? 'is-invalid' : '' ?>" 
                                           id="urutan" name="urutan" value="<?= old('urutan') ?? 1 ?>" 
                                           min="1" max="999" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('urutan') ?>
                                    </div>
                                    <small class="form-text text-muted">
                                        Urutan tampil di breaking news ticker (1 = paling awal)
                                    </small>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="aktif" name="aktif" value="1" 
                                               <?= old('aktif') ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="aktif">
                                            <span class="switch-text">Aktifkan breaking news ini</span>
                                        </label>
                                    </div>
                                    <small class="form-text text-muted">
                                        Centang untuk menampilkan breaking news di website
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Breaking News
                            </button>
                            <a href="<?= base_url('admin/breaking-news') ?>" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </div>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
$(document).ready(function() {
    // Character counter for judul
    const judulField = $('#judul');
    const judulCount = $('#judulCount');
    
    function updateJudulCount() {
        const length = judulField.val().length;
        judulCount.text(length);
        
        if (length < 10) {
            judulCount.removeClass('text-success').addClass('text-warning');
        } else if (length > 240) {
            judulCount.removeClass('text-success text-warning').addClass('text-danger');
        } else {
            judulCount.removeClass('text-warning text-danger').addClass('text-success');
        }
    }
    
    judulField.on('input', updateJudulCount);
    updateJudulCount(); // Initial count
    
    // Form validation
    $('form.needs-validation').on('submit', function(e) {
        const form = this;
        
        if (form.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        $(form).addClass('was-validated');
    });
    
    // Switch text update
    $('#aktif').on('change', function() {
        const switchText = $('.switch-text');
        if ($(this).is(':checked')) {
            switchText.text('Breaking news akan ditampilkan');
        } else {
            switchText.text('Breaking news tidak akan ditampilkan');
        }
    });
    
    // Auto-focus first field
    $('#judul').focus();
});

</script>
<?= $this->endSection() ?>