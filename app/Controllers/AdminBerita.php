<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KategoriBeritaModel;
use App\Models\BreakingNewsModel;

// Admin Controller untuk mengelola berita
class AdminBerita extends BaseController
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

    public function index()
    {
        $kategori = $this->kategoriModel->findAll();

        $berita = $this->beritaModel
            ->select('berita.*, kategori_berita.nama_kategori') // ambil field nama_kategori
            ->join('kategori_berita', 'kategori_berita.id = berita.kategori_id', 'left')
            ->orderBy('berita.published_at', 'DESC')
            ->findAll();

        $data = [
            'title'        => 'Manajemen Berita',
            'beritaList'   => $berita,
            'kategoriList' => $kategori,
        ];

        return view('berita/data_berita', $data);
    }
    // ✅ Halaman detail berita
    // public function detail($slug)
    // {
    //     $berita = $this->beritaModel->where('slug', $slug)->first();

    //     if (!$berita) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
    //     }

    //     // Tambah views
    //     $this->beritaModel->update($berita['id'], [
    //         'views' => $berita['views'] + 1
    //     ]);

    //     // Ambil berita terkait
    //     $relatedBerita = $this->beritaModel
    //         ->where('kategori_id', $berita['kategori_id'])
    //         ->where('id !=', $berita['id'])
    //         ->orderBy('published_at', 'DESC')
    //         ->limit(3)
    //         ->findAll();

    //     $data = [
    //         'title'        => $berita['judul'],
    //         'berita'       => $berita,
    //         'relatedBerita' => $relatedBerita
    //     ];

    //     return view('website/detail_berita', $data);
    // }

    // ✅ Load more berita (AJAX)
    public function loadMore()
    {
        $offset     = $this->request->getPost('offset');
        $beritaList = $this->beritaModel
            ->orderBy('published_at', 'DESC')
            ->findAll(6, $offset);

        $html = "";
        foreach ($beritaList as $berita) {
            $html .= view('website/berita/_item', ['berita' => $berita]);
        }

        return $this->response->setJSON([
            'success' => !empty($beritaList),
            'html'    => $html,
            'hasMore' => count($beritaList) == 6
        ]);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Berita Baru',
            'kategoriList' => $this->kategoriModel->findAll()
        ];

        return view('berita/input_berita', $data);
    }

    // ✅ Simpan data baru
    /**
     * Menyimpan berita baru
     */
    public function store()
    {
        // Validation rules
        $rules = [
            'judul' => 'required|min_length[3]|max_length[255]',
            'konten' => 'required|min_length[10]',
            'penulis' => 'required|min_length[3]|max_length[100]',
            'kategori_id' => 'required|numeric',
            'gambar' => 'permit_empty|uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png,image/webp]|max_size[gambar,2048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambarName = null;

        // Handle file upload
        if ($this->request->getFile('gambar')->isValid()) {
            $gambar = $this->request->getFile('gambar');
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads/berita/', $gambarName);
        }

        // Prepare data
        $data = [
            'judul' => $this->request->getPost('judul'),
            'slug' => $this->request->getPost('slug') ?: url_title($this->request->getPost('judul'), '-', true),
            'konten' => $this->request->getPost('konten'),
            'excerpt' => $this->request->getPost('excerpt'),
            'penulis' => $this->request->getPost('penulis'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'published_at' => $this->request->getPost('published_at') ?: date('Y-m-d H:i:s'),
            'gambar' => $gambarName,
            'status' => 'published',
            'views' => 0
        ];

        if ($this->beritaModel->save($data)) {
            session()->setFlashdata('success', 'Berita berhasil ditambahkan');
            return redirect()->to(base_url('data_berita'));
        } else {
            return redirect()->back()->withInput()->with('errors', $this->beritaModel->errors());
        }
    }

    /**
     * Menampilkan form untuk mengedit berita
     */

    // Form edit berita
    public function edit($id)
    {
        $berita = $this->beritaModel->find($id);

        if (!$berita) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Berita',
            'berita' => $berita,
            'kategoriList' => $this->kategoriModel->findAll()
        ];

        return view('berita/edit_berita', $data);
    }

    // Update berita
    public function update($id)
    {
        // Ambil berita lama dari DB
        $beritaLama = $this->beritaModel->find($id);
        if (!$beritaLama) {
            return redirect()->back()->with('error', 'Berita tidak ditemukan');
        }

        // Validasi input
        $rules = [
            'judul'      => 'required|min_length[3]',
            'konten'     => 'required',
            'kategori_id' => 'required|integer',
            'penulis'    => 'required|min_length[3]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil semua input
        $judul       = $this->request->getPost('judul');
        $konten      = $this->request->getPost('konten');
        $kategori_id = $this->request->getPost('kategori_id');
        $penulis     = $this->request->getPost('penulis');
        $status      = $this->request->getPost('status');
        $excerpt     = $this->request->getPost('excerpt');
        $slug        = url_title($judul, '-', true);

        // Default gunakan gambar lama
        $gambar = $beritaLama['gambar'];

        // Proses upload gambar baru
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {

            // Cari semua gambar lama berdasarkan slug
            $files = glob(FCPATH . "uploads/berita/{$slug}-*");

            // Tentukan urutan nama file berikutnya
            $nextNumber = count($files) + 1;
            $newName = $slug . '-' . $nextNumber . '.' . $fileGambar->getExtension();

            // Pindahkan ke folder yang konsisten (uploads/berita)
            $fileGambar->move(FCPATH . 'uploads/berita', $newName);

            // Jika sudah ada >= 3 file lama, hapus yang paling tua
            if (count($files) >= 3) {
                sort($files); // urutkan dari yang paling lama
                $hapus = array_shift($files); // ambil file pertama
                if (is_file($hapus)) {
                    unlink($hapus);
                }
            }

            // Simpan nama file baru ke DB
            $gambar = $newName;
        }

        // Simpan perubahan ke DB
        $data = [
            'judul'       => $judul,
            'slug'        => $slug,
            'konten'      => $konten,
            'excerpt'     => $excerpt,
            'kategori_id' => $kategori_id,
            'penulis'     => $penulis,
            'status'      => $status,
            'gambar'      => $gambar,
            'updated_at'  => date('Y-m-d H:i:s'),
        ];

        $this->beritaModel->update($id, $data);

        return redirect()->to('data_berita')->with('success', 'Berita berhasil diperbarui.');
    }


    public function delete($id)
    {
        $berita = $this->beritaModel->find($id);

        if (!$berita) {
            return redirect()->to('/data_berita')->with('error', 'Berita tidak ditemukan');
        }

        // Jika ada gambar, hapus dari folder
        if (!empty($berita['gambar']) && file_exists(FCPATH . 'uploads/berita/' . $berita['gambar'])) {
            unlink(FCPATH . 'uploads/berita/' . $berita['gambar']);
        }

        $this->beritaModel->delete($id);

        return redirect()->to('/data_berita')->with('success', 'Berita berhasil dihapus');
    }


    // Manage Breaking News
    public function breakingNews()
    {
        $data = [
            'title' => 'Kelola Breaking News',
            'breakingList' => $this->breakingModel->orderBy('urutan', 'ASC')->findAll()
        ];

        return view('admin/breaking_news/index', $data);
    }

    public function storeBreaking()
    {
        $data = $this->request->getPost();

        if ($this->breakingModel->save($data)) {
            return redirect()->to('/berita/breaking-news')->with('success', 'Breaking news berhasil ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->breakingModel->errors());
        }
    }
    public function latest()
    {
        $data['latestNews'] = $this->beritaModel->getLatest();
        return view('website/latest', $data);
    }
    // API untuk generate slug
    public function byKategori($kategoriSlug)
    {
        $kategori = $this->kategoriModel->where('slug_kategori', $kategoriSlug)->first();

        if (!$kategori) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kategori tidak ditemukan');
        }

        $data = [
            'title' => 'Berita Kategori: ' . $kategori['nama_kategori'],
            'beritaList' => $this->beritaModel->getBeritaByKategori($kategori['id']),
            'kategori' => $kategori,
            'kategoriList' => $this->kategoriModel->findAll()
        ];

        return view('berita/by_kategori', $data);
    }


    public function popular()
    {
        $beritaPopular = $this->beritaModel->getPopularBerita(10);
        return $this->response->setJSON($beritaPopular);
    }
    // ✅ Fungsi untuk generate slug unik
    private function generateUniqueSlug($slug, $id = null)
    {
        $originalSlug = $slug;
        $i = 1;

        while ($this->beritaModel
            ->where('slug', $slug)
            ->where('id !=', $id) // abaikan berita yang sedang diedit
            ->first()
        ) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }

        return $slug;
    }
    // public function search()
    // {
    //     $keyword = $this->request->getGet('q');

    //     if (!$keyword) {
    //         return redirect()->to('data_berita');
    //     }

    //     $beritaList = $this->beritaModel->searchBerita($keyword);

    //     $data = [
    //         'title' => 'Hasil Pencarian: ' . $keyword . ' - PT Guna Setia Prima',
    //         'keyword' => $keyword,
    //         'beritaList' => $beritaList
    //     ];

    //     return view('berita/data_berita', $data);
    // }
    // public function breaking()
    // {
    //     $data = [
    //         'title' => 'Beranda',
    //         'breakingNews' => $this->breakingModel->getActiveBreakingNews()
    //     ];

    //     return view('frontend/home', $data);
    // }
    
}
