<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($berita['judul'] ?? 'Detail Berita') ?> - Website Berita</title>
    <meta name="description" content="<?= esc(substr(strip_tags($berita['konten'] ?? ''), 0, 160)) ?>">
    <link rel="stylesheet" href="<?= base_url('website/css/berita.css') ?>">
    <link rel="stylesheet" href="<?= base_url('website/css/main.css') ?>">
    <!-- Bootstrap CSS (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Custom styles for news detail page */
        .news-detail-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .back-btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 1.5rem;
            transition: color 0.3s ease;
        }
        
        .back-btn-custom:hover {
            color: #007bff;
        }
        
        .news-header {
            margin-bottom: 2rem;
        }
        
        .news-title {
            font-size: 2.2rem;
            font-weight: bold;
            line-height: 1.3;
            color: #212529;
            margin-bottom: 1rem;
        }
        
        .news-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 1.5rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .news-category-badge {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
        }
        
        .news-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .news-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 2rem;
        }
        
        .news-content p {
            margin-bottom: 1.5rem;
        }
        
        .news-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1rem 0;
        }
        
        .views-counter {
            background: #f8f9fa;
            padding: 0.8rem 1.2rem;
            border-radius: 8px;
            color: #6c757d;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .social-share {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 3rem;
        }
        
        .social-share h4 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .share-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }
        
        .share-btn {
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .share-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            color: white;
        }
        
        .share-btn.facebook { background: #1877f2; }
        .share-btn.twitter { background: #1da1f2; }
        .share-btn.whatsapp { background: #25d366; }
        .share-btn.telegram { background: #0088cc; }
        
        .related-news {
            margin-top: 3rem;
        }
        
        .related-news h3 {
            color: #333;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #007bff;
        }
        
        .related-news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .related-news-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .related-news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .related-news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .related-news-item .content {
            padding: 1.2rem;
        }
        
        .related-news-item .news-category {
            background: #007bff;
            color: white;
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.7rem;
            display: inline-block;
            margin-bottom: 0.8rem;
        }
        
        .related-news-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
            color: #333;
            line-height: 1.4;
        }
        
        .related-news-item p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 0.8rem;
        }
        
        .related-news-item .news-date {
            font-size: 0.8rem;
            color: #999;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .news-title {
                font-size: 1.8rem;
            }
            
            .news-meta {
                font-size: 0.8rem;
                gap: 0.8rem;
            }
            
            .share-buttons {
                justify-content: center;
            }
            
            .share-btn {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }
            
            .related-news-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
   

    <section class="section">
        <div class="container">
            <div class="news-detail-container">
                <!-- Back Button -->
                <a href="<?= base_url('berita') ?>" class="back-btn-custom">
                    <i class="fas fa-arrow-left"></i> Kembali ke Berita
                </a>

                <!-- News Header -->
                <div class="news-header">
                    <h1 class="news-title"><?= esc($berita['judul']) ?></h1>
                    
                    <div class="news-meta">
                        <?php if (!empty($berita['nama_kategori'])): ?>
                            <div class="meta-item">
                                <a href="#" class="news-category-badge"><?= esc($berita['nama_kategori']) ?></a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span><?= date('d F Y, H:i', strtotime($berita['created_at'])) ?> WIB</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-user-edit"></i>
                            <span><?= esc($berita['penulis']) ?></span>
                        </div>
                    </div>
                </div>

                <!-- News Image -->
                <?php if (!empty($berita['gambar'])): ?>
                    <img src="<?= base_url('uploads/berita/' . $berita['gambar']) ?>" 
                         alt="<?= esc($berita['judul']) ?>" 
                         class="news-image">
                <?php endif; ?>

                <!-- News Content -->
                <div class="news-content">
                    <?= $berita['konten'] ?>
                </div>

                <!-- Views Counter -->
                <div class="views-counter">
                    <i class="fas fa-eye"></i>
                    <span>Dibaca <?= number_format($berita['views']) ?> kali</span>
                </div>

                <!-- Social Share -->
                <div class="social-share">
                    <h4><i class="fas fa-share-alt"></i> Bagikan Berita Ini:</h4>
                    <div class="share-buttons">
                        <a href="#" onclick="shareToFacebook()" class="share-btn facebook">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" onclick="shareToTwitter()" class="share-btn twitter">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="#" onclick="shareToWhatsApp()" class="share-btn whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="#" onclick="shareToTelegram()" class="share-btn telegram">
                            <i class="fab fa-telegram-plane"></i> Telegram
                        </a>
                    </div>
                </div>

                <!-- Related News -->
                <?php if (!empty($relatedBerita)): ?>
                    <div class="related-news">
                        <h3><i class="fas fa-newspaper"></i> Berita Terkait</h3>
                        <div class="related-news-grid">
                            <?php foreach ($relatedBerita as $related): ?>
                                <article class="related-news-item" onclick="readMore('<?= esc($related['slug']) ?>')">
                                    <?php if (!empty($related['gambar'])): ?>
                                        <img src="<?= base_url('uploads/berita/' . $related['gambar']) ?>" 
                                             alt="<?= esc($related['judul']) ?>">
                                    <?php endif; ?>
                                    <div class="content">
                                        <?php if (!empty($related['nama_kategori'])): ?>
                                            <span class="news-category"><?= esc($related['nama_kategori']) ?></span>
                                        <?php endif; ?>
                                        <h4><?= esc($related['judul']) ?></h4>
                                        <?php if (!empty($related['excerpt'])): ?>
                                            <p><?= esc($related['excerpt']) ?></p>
                                        <?php endif; ?>
                                        <div class="news-date">
                                            <i class="fas fa-calendar-alt"></i>
                                            <?= date('d M Y', strtotime($related['published_at'] ?? $related['created_at'])) ?>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="<?= base_url('website/js/scripts.js') ?>"></script>
    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navigate to related news
        function readMore(slug) {
            window.location.href = '<?= base_url('berita/detail/') ?>' + slug;
        }

        // Social sharing functions
        function shareToFacebook() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${title}`, '_blank', 'width=600,height=400');
        }

        function shareToTwitter() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://twitter.com/intent/tweet?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
        }

        function shareToWhatsApp() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://wa.me/?text=${title}%20${url}`, '_blank');
        }

        function shareToTelegram() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://t.me/share/url?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
        }

        // Auto-update views (optional - call this after page load)
        function updateViews() {
            // You can implement AJAX call here to update view count
            // fetch('<?= base_url('berita/updateViews/') ?>' + '<?= $berita['id'] ?? '' ?>', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     }
            // });
        }

        // Call update views on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateViews();
        });
    </script>
</body>

</html>