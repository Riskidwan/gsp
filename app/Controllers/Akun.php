<?php

namespace App\Controllers;

use App\Models\UserModel;

class Akun extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Akun',
            'users' => $this->userModel->findAll()
        ];
        return view('auth/data_akun', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Akun';
        return view('auth/tambah_akun', $data);
    }

    public function store()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'role' => 'required|in_list[super_admin,admin,hrd,direksi]',
            'status'   => 'required|in_list[active,inactive]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role'     => $this->request->getPost('role'),
            'status'   => $this->request->getPost('status')
        ];

        if ($this->userModel->createUser($data)) {
           return redirect()->to(base_url('data_akun'))->with('success', 'Akun berhasil ditambahkan');

        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan akun');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Akun',
            'user'  => $this->userModel->find($id)
        ];

        if (!$data['user']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
        }

        return view('auth\edit_akun', $data);
    }

    public function update($id)
    {
        $rules = [
            'username' => "required|min_length[3]|max_length[50]|is_unique[users.username,id,{$id}]",
            'role' => 'required|in_list[super_admin,admin,hrd,direksi]',
            'status'   => 'required|in_list[active,inactive]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'role'     => $this->request->getPost('role'),
            'status'   => $this->request->getPost('status')
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        if ($this->userModel->update($id, $data)) {
            return redirect()->to('/data_akun')->with('success', 'Akun berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui akun');
        }
    }

    public function delete($id)
    {
        if ($this->userModel->delete($id)) {
            return redirect()->to('/data_akun')->with('success', 'Akun berhasil dihapus');
        } else {
            return redirect()->to('/data_akun')->with('error', 'Gagal menghapus akun');
        }
    }
}
