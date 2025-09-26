<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BreakingNewsModel;

class BreakingNews extends BaseController
{
    protected $breakingNewsModel;

    public function __construct()
    {
        $this->breakingNewsModel = new BreakingNewsModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Breaking News',
            'breakingNews' => $this->breakingNewsModel->orderBy('urutan', 'ASC')->findAll()
        ];

        return view('breaking_news/data_breaking', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Breaking News',
            'validation' => \Config\Services::validation()
        ];

        return view('breaking_news/input_breaking', $data);
    }

    public function store()
    {
        $rules = [
            'judul' => 'required|min_length[10]|max_length[255]',
            'link' => 'permit_empty|valid_url_strict',
            'urutan' => 'required|is_natural',
            'aktif' => 'in_list[0,1]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'link' => $this->request->getPost('link') ?: '',
            'urutan' => $this->request->getPost('urutan'),
            'aktif' => $this->request->getPost('aktif') ? 1 : 0
        ];

        if ($this->breakingNewsModel->insert($data)) {
            session()->setFlashdata('success', 'Breaking news berhasil ditambahkan');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan breaking news');
        }

        return redirect()->to('data_breaking');
    }

    public function edit($id)
    {
        $breakingNews = $this->breakingNewsModel->find($id);

        if (!$breakingNews) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Breaking news tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Breaking News',
            'breakingNews' => $breakingNews,
            'validation' => \Config\Services::validation()
        ];

        return view('breaking_news/edit_breaking', $data);
    }

    public function update($id)
    {
        $breakingNews = $this->breakingNewsModel->find($id);

        if (!$breakingNews) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Breaking news tidak ditemukan');
        }

        $rules = [
            'judul' => 'required|min_length[10]|max_length[255]',
            'link' => 'permit_empty|valid_url_strict',
            'urutan' => 'required|is_natural',
            'aktif' => 'in_list[0,1]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'link' => $this->request->getPost('link') ?: '',
            'urutan' => $this->request->getPost('urutan'),
            'aktif' => $this->request->getPost('aktif') ? 1 : 0
        ];

        if ($this->breakingNewsModel->update($id, $data)) {
            session()->setFlashdata('success', 'Breaking news berhasil diperbarui');
        } else {
            session()->setFlashdata('error', 'Gagal memperbarui breaking news');
        }

        return redirect()->to('data_breaking');
    }

    public function delete($id)
    {
        $this->breakingNewsModel->delete($id);
        return redirect()->to(base_url('data_breaking'))->with('success', 'Breaking news berhasil dihapus');
    }


    public function toggleStatus($id)
    {
        $breakingNews = $this->breakingNewsModel->find($id);

        if (!$breakingNews) {
            return redirect()->back()->with('error', 'Breaking news tidak ditemukan');
        }

        $newStatus = $breakingNews['aktif'] ? 0 : 1;

        $this->breakingNewsModel->update($id, ['aktif' => $newStatus]);

        return redirect()->back()->with('success', 'Status berhasil diubah');
    }
}
