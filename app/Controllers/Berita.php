<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriBeritaModel;
use App\Models\BreakingNewsModel;

class Berita extends BaseController
{
    protected $beritaModel;
    protected $kategoriModel;
    protected $breakingModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->kategoriModel = new KategoriBeritaModel();
        $this->breakingModel = new BreakingNewsModel();
    }
    public function input_berita()
    {
        return view('Berita/Input_Berita');
    }
    public function data_berita()
    {
        return view('Berita/data_berita');
    }

     public function berita()
    {
        $data['title'] = "Berita Terbaru";
        $data['breakingNews'] = $this->breakingModel->getActiveBreakingNews();
        $data['beritaList'] = $this->beritaModel
            ->orderBy('created_at', 'DESC')
            ->findAll();
            

        return view('website/berita', $data);
    }

     public function detail($slug)
{
    $berita = $this->beritaModel->where('slug', $slug)->first();

    if (!$berita) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Berita tidak ditemukan");
    }

    // Update views
    $this->beritaModel->set('views', 'views+1', false)
                      ->where('id', $berita['id'])
                      ->update();

    // Ambil berita terkait
    $relatedBerita = $this->beritaModel
        ->where('kategori_id', $berita['kategori_id'])
        ->where('id !=', $berita['id'])
        ->orderBy('published_at', 'DESC')
        ->limit(3)
        ->findAll();

    $data = [
        'title'        => $berita['judul'],
        'berita'       => $berita,
        'relatedBerita'=> $relatedBerita
    ];

    return view('website/berita_detail', $data); // ✅ bukan website/berita lagi
}


    public function kategori($slug)
    {
        $kategori = $this->kategoriModel->where('slug', $slug)->first();

        if (!$kategori) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kategori tidak ditemukan');
        }

        $beritaList = $this->beritaModel->getByKategori($slug);

        $data = [
            'title' => 'Kategori: ' . $kategori['nama_kategori'] . ' - PT Guna Setia Prima',
            'kategori' => $kategori,
            'beritaList' => $beritaList
        ];

        return view('berita/kategori', $data);
    }

    

    // AJAX endpoint untuk load more berita
    public function loadMore()
    {
        if (!$this->request->isAJAX()) {
            return $this->response->setJSON(['error' => 'Invalid request']);
        }

        $offset = $this->request->getPost('offset') ?? 0;
        $limit = 6;

        $builder = $this->beritaModel->builder();
        $builder->select('berita.*, kategori_berita.nama_kategori');
        $builder->join('kategori_berita', 'kategori_berita.id = berita.kategori_id', 'left');
        $builder->where('berita.status', 'published');
        $builder->where('berita.published_at <=', date('Y-m-d H:i:s'));

        $builder->where('berita.is_featured', false);
        $builder->orderBy('berita.published_at', 'DESC');
        $builder->limit($limit, $offset);

        $beritaList = $builder->get()->getResultArray();

        $html = '';
        foreach ($beritaList as $berita) {
            $html .= view('berita/partials/news_card', ['berita' => $berita]);
        }

        return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'hasMore' => count($beritaList) === $limit
        ]);
    }
    // Ambil berita terbaru dengan kategori
    // Ambil berita terbaru dengan kategori
public function getLatestBerita($limit = 5, $excludeFeatured = false)
{
    $builder = $this->beritaModel->builder();
    $builder->select('b.*, k.nama_kategori, k.slug as kategori_slug');
    $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
    $builder->where('b.status', 'published');
    $builder->where('b.published_at <=', date('Y-m-d H:i:s'));

    if ($excludeFeatured) {
        $builder->where('b.is_featured', 0);
    }

    $builder->orderBy('b.published_at', 'DESC');
    $builder->limit($limit);

    return $builder->get()->getResultArray();
}

}
