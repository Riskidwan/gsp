<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'judul',
        'slug',
        'konten',
        'excerpt',
        'gambar',
        'kategori_id',
        'penulis',
        'views',
        'published_at',
        'is_featured',
        'is_breaking'
    ];


    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'judul' => 'required|min_length[3]|max_length[255]',
        'slug' => 'required|is_unique[berita.slug,id,{id}]|alpha_dash',
        'konten' => 'required|min_length[10]',
        'kategori_id' => 'required|integer',
        'penulis' => 'required|min_length[3]|max_length[100]'
    ];

    protected $validationMessages = [
        'judul' => [
            'required' => 'Judul berita harus diisi',
            'min_length' => 'Judul minimal 3 karakter',
            'max_length' => 'Judul maksimal 255 karakter'
        ],
        'slug' => [
            'required' => 'Slug harus diisi',
            'is_unique' => 'Slug sudah digunakan',
            'alpha_dash' => 'Slug hanya boleh berisi huruf, angka, dan tanda hubung'
        ],
        'konten' => [
            'required' => 'Konten berita harus diisi',
            'min_length' => 'Konten minimal 10 karakter'
        ],
        'kategori_id' => [
            'required' => 'Kategori harus dipilih',
            'integer' => 'Kategori tidak valid'
        ],
        'penulis' => [
            'required' => 'Penulis harus diisi',
            'min_length' => 'Nama penulis minimal 3 karakter',
            'max_length' => 'Nama penulis maksimal 100 karakter'
        ]
    ];

    // Ambil berita dengan kategori
    public function getBeritaWithKategori($id = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('berita.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = berita.kategori_id', 'left');

        if ($id) {
            $builder->where('berita.id', $id);
            return $builder->get()->getRowArray();
        }

        $builder->orderBy('berita.created_at', 'DESC');
        return $builder->get()->getResultArray();
    }


    // Ambil berita berdasarkan slug
    public function getBySlug($slug)
    {
        $builder = $this->db->table('berita b');
        $builder->select('b.*, k.nama_kategori, k.slug as kategori_slug');
        $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
        $builder->where('b.slug', $slug);
        // $builder->where('b.status', 'published');

        return $builder->get()->getRowArray();
    }

    // Ambil berita terbaru (latest)
    public function getLatest()
    {
        return $this->orderBy('published_at', 'DESC')->findAll();
        // findAll tanpa LIMIT → semua berita diambil
    }


    // Ambil berita berdasarkan kategori
    public function getByKategori($kategoriSlug, $limit = null)
    {
        $builder = $this->db->table('berita b');
        $builder->select('b.*, k.nama_kategori');
        $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
        $builder->where('k.slug', $kategoriSlug);
        // $builder->where('b.status', 'published');
        $builder->orderBy('b.published_at', 'DESC');

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->get()->getResultArray();
    }

    // Pencarian berita
    public function searchBerita($keyword, $limit = 10)
    {
        $builder = $this->db->table('berita b');
        $builder->select('b.*, k.nama_kategori');
        $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
        $builder->groupStart();
        $builder->like('b.judul', $keyword);
        $builder->orLike('b.excerpt', $keyword);
        $builder->orLike('b.konten', $keyword);
        $builder->groupEnd();
        // $builder->where('b.status', 'published');
        $builder->orderBy('b.published_at', 'DESC');
        $builder->limit($limit);

        return $builder->get()->getResultArray();
    }

    // Update jumlah views
    public function updateViews($id)
    {
        $builder = $this->db->table('berita');
        $builder->set('views', 'views + 1', false);
        $builder->where('id', $id);
        return $builder->update();
    }

    // Generate slug otomatis
    public function generateSlug($judul)
    {
        $slug = url_title($judul, '-', true);
        $count = $this->where('slug', $slug)->countAllResults();
        if ($count > 0) $slug .= '-' . ($count + 1);
        return $slug;
    }

    // Validasi custom (edit/tambah)
    public function customValidationRules($id = null)
    {
        $slugRules = 'required';

        if ($id) {
            $slugRules .= "|is_unique[berita.slug,id,{$id}]";
        } else {
            $slugRules .= "|is_unique[berita.slug]";
        }

        return [
            'judul' => 'required|min_length[10]|max_length[255]',
            'slug' => $slugRules,
            'konten' => 'required|min_length[50]',
            'kategori_id' => 'required|is_natural_no_zero',
            'penulis' => 'required|max_length[100]',
            // 'status' => 'required|in_list[draft,published,archived]'
        ];
    }

    // Admin: semua berita
    public function getBeritaWithKategoriAdmin()
    {
        $builder = $this->db->table('berita b');
        $builder->select('b.*, k.nama_kategori, k.slug as kategori_slug');
        $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
        $builder->orderBy('b.updated_at', 'DESC');
        return $builder->get()->getResultArray();
    }
    // Ambil berita yang ditandai featured
    // 1. Berita terbaru


    // 2. Berita featured
    public function getFeaturedBerita($limit = 5)
    {
        return $this->where('is_featured', 1)
            // ->where('status', 'published')
            ->orderBy('published_at', 'DESC')
            ->findAll($limit);
    }

    // 3. Breaking news
    public function getBreakingNews($limit = 5)
    {
        return $this->where('is_breaking', 1)
            // ->where('status', 'published')
            ->orderBy('published_at', 'DESC')
            ->findAll($limit);
    }
    public function getLatestBerita($limit = 5, $excludeFeatured = false)
    {
        $builder = $this->db->table('berita b');
        $builder->select('b.*, k.nama_kategori, k.slug as kategori_slug');
        $builder->join('kategori_berita k', 'k.id = b.kategori_id', 'left');
        // $builder->where('b.status', 'published');
        $builder->where('b.published_at <=', date('Y-m-d H:i:s'));

        if ($excludeFeatured) {
            $builder->where('b.is_featured', 0);
        }

        $builder->orderBy('b.published_at', 'DESC');
        $builder->limit($limit);

        return $builder->get()->getResultArray();
    }
}
