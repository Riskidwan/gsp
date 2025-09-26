<?= $this->extend('website\website') ?>

<?= $this->section('content') ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    /* General Styles */
    .news-page {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
        padding: 80px 0 20px 0; /* Tambahkan padding-top agar tidak tertutup header */
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Section Header */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #3498db, #2980b9);
        border-radius: 2px;
    }

    /* Breaking News Ticker */
    .breaking-news-wrapper {
        margin-bottom: 40px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    .breaking-ticker {
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
        color: white;
        padding: 12px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }
    
    .breaking-ticker a {
        color: white;
        text-decoration: none;
    }
    .breaking-ticker a:hover {
        text-decoration: underline;
    }

    .breaking-ticker::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        animation: shimmer 2s infinite;
    }

    .breaking-label {
        background: linear-gradient(135deg, #f1c40f 0%, #f39c12 100%);
        color: #2c3e50;
        padding: 8px 16px;
        margin-right: 20px;
        font-weight: 700;
        border-radius: 25px;
        flex-shrink: 0;
        font-size: 0.9rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .ticker-wrapper {
        overflow: hidden;
        flex: 1;
        mask: linear-gradient(90deg, transparent, black 5%, black 95%, transparent);
    }

    .ticker-content {
        display: inline-block;
        white-space: nowrap;
        animation: ticker 25s linear infinite;
        font-weight: bold;
        font-size: 1.2rem;
        color: #fff;
    }

    .ticker-content span, .ticker-content a {
        margin-right: 60px;
        padding-right: 15px;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
    }
    .ticker-content span:last-child, .ticker-content a:last-child {
        border-right: none;
    }

    @keyframes ticker {
        0% { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* News List */
    .news-list {
        display: flex;
        flex-direction: column;
        gap: 25px;
        margin-bottom: 50px;
    }

    .news-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        align-items: stretch;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .news-image-container {
        width: 280px;
        flex-shrink: 0;
        overflow: hidden;
    }

    .news-card .card-img-top {
        width: 100%;
        height: 100%; /* Ubah agar gambar mengisi penuh container */
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .news-card:hover .card-img-top {
        transform: scale(1.05);
    }

    .news-card .card-body {
        padding: 25px 30px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .news-card .card-title {
        font-size: 1.4rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-card .card-text {
        color: #7f8c8d;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex-grow: 1;
    }

    .news-meta {
        display: flex;
        flex-wrap: wrap; /* Agar bisa turun ke bawah di layar kecil */
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
        font-size: 0.85rem;
        color: #95a5a6;
    }

    .news-meta i {
        margin-right: 5px;
    }

    .btn-read-more {
        background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        border: none;
        color: white;
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        align-self: flex-start; /* Agar tombol tidak meregang */
    }

    .btn-read-more:hover {
        background: linear-gradient(135deg, #2980b9 0%, #21618c 100%);
        color: white;
        transform: translateX(5px);
    }

    /* Load More Button */
    .load-more-container {
        text-align: center;
        margin-top: 40px;
    }

    .load-more-btn {
        background: linear-gradient(135deg, #27ae60 0%, #229954 100%);
        color: white;
        border: none;
        padding: 15px 40px;
        border-radius: 30px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
    }

    .load-more-btn:hover {
        background: linear-gradient(135deg, #229954 0%, #1e8449 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
    }

    .load-more-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .section-title { font-size: 2.2rem; }
        .breaking-label {
            padding: 6px 12px;
            font-size: 0.8rem;
            margin-right: 15px;
        }
        .news-card { flex-direction: column; }
        .news-image-container { width: 100%; }
        .news-card .card-img-top { height: 200px; }
        .news-card .card-body { padding: 20px; }
    }

    /* Pause animation on hover */
    .breaking-ticker:hover .ticker-content {
        animation-play-state: paused;
    }
</style>

<main class="news-page">
    <section id="berita" class="section">
        <div class="container">
            <div class="section-header">
                <h1 class="section-title">Berita Terbaru</h1>
            </div>

            <?php if (!empty($breakingNews)) : ?>
                <div class="breaking-news-wrapper mb-4">
                    <div class="breaking-ticker">
                        <span class="breaking-label"><i class="fas fa-fire"></i> Breaking</span>
                        <div class="ticker-wrapper">
                            <div class="ticker-content">
                                <?php foreach ($breakingNews as $breaking) : ?>
                                    <?php if (!empty($breaking['link'])) : ?>
                                        <a href="<?= esc($breaking['link']) ?>" target="_blank" rel="noopener">
                                            <span><?= esc($breaking['judul']) ?></span>
                                        </a>
                                    <?php else : ?>
                                        <span><?= esc($breaking['judul']) ?></span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="news-list" id="news-container">
                <?php if (!empty($beritaList)) : ?>
                    <?php foreach ($beritaList as $index => $berita) : ?>
                        <div class="news-card">
                            <?php if ($berita['gambar']) : ?>
                                <div class="news-image-container">
                                    <img src="<?= base_url('uploads/berita/' . $berita['gambar']) ?>" class="card-img-top" alt="<?= esc($berita['judul']) ?>">
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="news-content">
                                    <div class="news-meta">
                                        <span><i class="fas fa-calendar-alt"></i> <?= date('d M Y', strtotime($berita['created_at'] ?? 'now')) ?></span>
                                        <span><i class="fas fa-user"></i> Admin</span>
                                        <span><i class="fas fa-eye"></i> <?= $berita['views'] ?? rand(100, 999) ?></span>
                                    </div>
                                    <h3 class="card-title"><?= esc($berita['judul']) ?></h3>
                                    <p class="card-text"><?= esc(strip_tags($berita['excerpt'])) ?></p>
                                </div>
                                <a href="<?= base_url('berita/detail/' . $berita['slug']) ?>" class="btn-read-more">
                                    Baca Selengkapnya
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center">Belum ada berita yang tersedia.</p>
                <?php endif; ?>
            </div>

            <?php if (!empty($hasMoreNews)) : ?>
                <div class="load-more-container">
                    <button class="load-more-btn" onclick="loadMoreNews()" id="loadMoreBtn">
                        <i class="fas fa-plus-circle"></i>
                        Muat Berita Lainnya
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<script>
    let currentOffset = <?= count($beritaList ?? []) ?>;

    function loadMoreNews() {
        const button = document.getElementById('loadMoreBtn');
        const container = document.getElementById('news-container');

        if (!button || !container) return;

        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memuat...';
        button.disabled = true;

        fetch('<?= base_url('berita/load-more') ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: 'offset=' + currentOffset
            })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.html) {
                    container.insertAdjacentHTML('beforeend', data.html);
                    currentOffset += data.count; 

                    if (!data.hasMore) {
                        button.style.display = 'none';
                    }
                } else {
                    button.style.display = 'none';
                }

                button.innerHTML = '<i class="fas fa-plus-circle"></i> Muat Berita Lainnya';
                button.disabled = false;
            })
            .catch(error => {
                console.error('Error:', error);
                button.innerHTML = '<i class="fas fa-plus-circle"></i> Muat Berita Lainnya';
                button.disabled = false;
            });
    }
</script>

<?= $this->endSection() ?>