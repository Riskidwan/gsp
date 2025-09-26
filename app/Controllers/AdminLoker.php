<?php

namespace App\Controllers;

use App\Models\LokerModel;

class AdminLoker extends BaseController
{
    protected $lokerModel;

    public function __construct()
    {
        $this->lokerModel = new LokerModel();
    }
    public function loker()
    {
        $data['loker'] = $this->lokerModel->findAll();
        return view('website/loker', $data);
    }
    public function index()
    {
        $model = new LokerModel();
        $data['lowongan'] = $model->findAll();
        return view('loker/data_loker', $data);
    }

    public function create()
    {
        return view('Loker/Input_Loker');;
    }

    public function store()
    {
        // ✅ Validasi input
        $validation = \Config\Services::validation();

        $rules = [
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama perusahaan wajib diisi.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi pekerjaan wajib diisi.'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The lokasi field is required.'
                ]
            ],
            'tipe_kerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The tipe_kerja field is required.'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]',
                'errors' => [
                    'uploaded' => 'Gambar wajib diupload.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new LokerModel();

        // Upload Gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = null;
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads', $namaGambar);
        }

        $slug = url_title($this->request->getPost('judul'), '-', true);

        $model->save([
            'judul' => $this->request->getPost('judul'),
            'perusahaan' => $this->request->getPost('perusahaan'),
            // 'gaji' => $this->request->getPost('gaji'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tipe_kerja' => $this->request->getPost('tipe_kerja'),
            'jam_kerja' => $this->request->getPost('jam_kerja'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'gender' => $this->request->getPost('gender'),
            'kesehatan_mata' => $this->request->getPost('kesehatan_mata'),
            'tinggi_badan' => $this->request->getPost('tinggi_badan'),
            'persyaratan' => $this->request->getPost('persyaratan'),
            'gambar' => $namaGambar,
            'slug' => $slug
        ]);

        return redirect()->to('/data_loker')->with('success', 'Lowongan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new LokerModel();
        $data['lowongan'] = $model->find($id);

        if (!$data['lowongan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Lowongan dengan ID $id tidak ditemukan");
        }

        return view('loker/edit_loker', $data);
    }

    public function update($id)
    {
        $model = new LokerModel();
        $lowongan = $model->find($id);

        if (!$lowongan) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Lowongan dengan ID $id tidak ditemukan");
        }

        // Upload gambar baru jika ada
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $lowongan['gambar']; // default gambar lama

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Hapus gambar lama
            if ($namaGambar && file_exists('uploads/' . $namaGambar)) {
                unlink('uploads/' . $namaGambar);
            }
            // Upload gambar baru
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads', $namaGambar);
        }

        // Update slug jika judul berubah
        $slug = url_title($this->request->getPost('judul'), '-', true);

        $model->update($id, [
            'judul'          => $this->request->getPost('judul'),
            'perusahaan'     => $this->request->getPost('perusahaan'),
            // 'gaji'           => $this->request->getPost('gaji'),
            'deskripsi'      => $this->request->getPost('deskripsi'),
            'lokasi'         => $this->request->getPost('lokasi'),
            'tipe_kerja'     => $this->request->getPost('tipe_kerja'),
            'jam_kerja'      => $this->request->getPost('jam_kerja'),
            'pengalaman'     => $this->request->getPost('pengalaman'),
            'pendidikan'     => $this->request->getPost('pendidikan'),
            'gender'         => $this->request->getPost('gender'),
            'kesehatan_mata' => $this->request->getPost('kesehatan_mata'),
            'tinggi_badan'   => $this->request->getPost('tinggi_badan'),
            'persyaratan'    => $this->request->getPost('persyaratan'),
            'gambar'         => $namaGambar,
            'slug'           => $slug
        ]);

        return redirect()->to('data_loker')->with('success', 'Lowongan berhasil diperbarui');
    }

    public function delete($id)
    {
        $model = new LokerModel();
        $lowongan = $model->find($id);

        if (!$lowongan) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Lowongan dengan ID $id tidak ditemukan");
        }

        // Hapus file gambar
        if ($lowongan['gambar'] && file_exists('uploads/' . $lowongan['gambar'])) {
            unlink('uploads/' . $lowongan['gambar']);
        }

        $model->delete($id);

        return redirect()->to('data_loker')->with('success', 'Lowongan berhasil dihapus');
    }
}
