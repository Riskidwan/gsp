<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Detail Berita') ?></title>
    <link rel="stylesheet" href="<?= base_url('website/css/berita.css') ?>">
    <link rel="stylesheet" href="<?= base_url('website/css/main.css') ?>">
</head>

<body>
    <?= $this->include('website/header') ?>


    <section class="section">
        <div class="container">
            <!-- Back Button -->
            <a href="<?= base_url('berita') ?>" class="back-btn-custom">&larr; Kembali ke Berita</a>

            <!-- News Detail -->
            <div class="news-detail">
                <h2><?= esc($berita['judul']) ?></h2>
                <div class="news-meta">
                    <span class="news-category"><?= esc($berita['nama_kategori']) ?></span> |
                    <span class="news-date">📅 <?= date('d F Y', strtotime($berita['published_at'])) ?></span> |
                    <span class="news-author">✍️ <?= esc($berita['penulis']) ?></span>
                </div>

                <?php if (!empty($berita['gambar'])): ?>
                    <img src="<?= base_url($berita['gambar']) ?>" alt="<?= esc($berita['judul']) ?>">
                <?php endif; ?>

                <div class="content">
                    <?= $berita['konten'] ?>
                </div>

                <div class="views-counter">
                    👁️ Dibaca <?= number_format($berita['views']) ?> kali
                </div>
            </div>

            <!-- Social Share -->
            <div class="social-share">
                <h4>Bagikan Berita Ini:</h4>
                <div class="share-buttons">
                    <a href="#" onclick="shareToFacebook()" class="share-btn facebook">Facebook</a>
                    <a href="#" onclick="shareToTwitter()" class="share-btn twitter">Twitter</a>
                    <a href="#" onclick="shareToWhatsApp()" class="share-btn whatsapp">WhatsApp</a>
                    <a href="#" onclick="shareToTelegram()" class="share-btn telegram">Telegram</a>
                </div>
            </div>

            <!-- Related News -->
            <?php if (!empty($relatedBerita)): ?>
                <div class="related-news">
                    <h3>Berita Terkait</h3>
                    <div class="related-news-grid">
                        <?php foreach ($relatedBerita as $related): ?>
                            <article class="related-news-item" onclick="readMore('<?= esc($related['slug']) ?>')">
                                <img src="<?= base_url($related['gambar']) ?>" alt="<?= esc($related['judul']) ?>">
                                <div class="content">
                                    <span class="news-category"><?= esc($related['nama_kategori']) ?></span>
                                    <h4><?= esc($related['judul']) ?></h4>
                                    <p><?= esc($related['excerpt']) ?></p>
                                    <div class="news-date">📅 <?= date('d M Y', strtotime($related['published_at'])) ?></div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <script>
        function readMore(slug) {
            window.location.href = '<?= base_url('berita/detail/') ?>' + slug;
        }

        function shareToFacebook() {
            const url = encodeURIComponent(window.location.href);
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank', 'width=600,height=400');
        }

        function shareToTwitter() {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent('<?= esc($berita['judul']) ?>');
            window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank', 'width=600,height=400');
        }

        function shareToWhatsApp() {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent('<?= esc($berita['judul']) ?> - <?= esc($berita['excerpt']) ?>');
            window.open(`https://wa.me/?text=${text} ${url}`, '_blank');
        }

        function shareToTelegram() {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent('<?= esc($berita['judul']) ?>');
            window.open(`https://t.me/share/url?url=${url}&text=${text}`, '_blank');
        }
    </script>
    <script src="<?= base_url('Website/js/scripts.js') ?>"></script>
    <?= $this->include('website/footer') ?>

</body>

</html>