<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title"><?= $title ?></h3>
                    <a href="<?= base_url('input_breaking') ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Breaking News
                    </a>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="breakingNewsTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Link</th>
                                    <th>Urutan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($breakingNews)): ?>
                                    <?php foreach ($breakingNews as $key => $item): ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= esc($item['judul']) ?></td>
                                            <td>
                                                <?php if ($item['link']): ?>
                                                    <a href="<?= esc($item['link']) ?>" target="_blank">Lihat</a>
                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td><?= $item['urutan'] ?></td>
                                            
                                            <td>
                                                <form action="<?= base_url('breaking-news/toggle-status/' . $item['id']) ?>" method="post" style="display:inline-block;">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" class="btn btn-sm <?= $item['aktif'] ? 'btn-success' : 'btn-secondary' ?>">
                                                        <?= $item['aktif'] ? 'Aktif' : 'Nonaktif' ?>
                                                    </button>
                                                </form>
                                            </td>

                                            
                                            <td><?= date('d M Y H:i', strtotime($item['created_at'])) ?></td>
                                            <td>
                                                <a href="<?= base_url('breaking_news/edit_breaking/' . $item['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="<?= base_url('breaking-news/delete/' . $item['id']) ?>" method="post" style="display:inline-block;">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">Belum ada data</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {

        // Judul counter
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
        updateJudulCount();



        // Toggle status
        $(document).on('change', '.toggle-status', function() {
            let id = $(this).data('id');
            $.post('<?= base_url("breaking-news/toggle-status") ?>/' + id, {}, function(res) {
                if (res.success) {
                    alert(res.message);
                } else {
                    alert(res.message);
                }
            }, 'json').fail(function() {
                alert('Terjadi kesalahan saat mengubah status');
            });
        });

    });
</script>
<?= $this->endSection() ?>