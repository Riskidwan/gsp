<?php

namespace App\Controllers\website;

use App\Controllers\BaseController;
use App\Models\LamaranModel;

class Lamaran extends BaseController
{
    protected $lamaranModel;

    public function __construct()
    {
        $this->lamaranModel = new LamaranModel();
    }

    public function input()
    {
        return view('website/inputloker');
    }

    public function save()
    {
        // Ambil nomor HP dari form
        $phone = $this->request->getPost('phone');

        // Cek apakah ada lamaran dengan nomor HP ini dalam 30 hari terakhir
        $lastApplication = $this->lamaranModel
            ->where('phone', $phone)
            ->where('created_at >=', date('Y-m-d H:i:s', strtotime('-30 days')))
            ->first();

        if ($lastApplication) {
            $nextAllowed = date('d-m-Y', strtotime($lastApplication['created_at'] . ' +30 days'));
            return redirect()->back()
                ->withInput()
                ->with('error', "Anda sudah melamar dalam 30 hari terakhir. Silakan daftar lagi setelah {$nextAllowed}.");
        }

        // 1. Buat rules validasi
        $validationRules = [
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap wajib diisi.'
                ]
            ],
            'nik' => [
                'rules' => 'required|numeric|exact_length[16]',
                'errors' => [
                    'required' => 'NIK wajib diisi.',
                    'numeric' => 'NIK harus berupa angka.',
                    'exact_length' => 'NIK harus terdiri dari 16 digit.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email wajib diisi.',
                    'valid_email' => 'Format email tidak valid.'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor HP wajib diisi.'
                ]
            ],
            'position' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posisi yang dilamar wajib diisi.'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat wajib diisi.'
                ]
            ],
            'asal_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Asal sekolah wajib diisi.'
                ]
            ]
        ];

        // 2. Jalankan validasi
        if (!$this->validate($validationRules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Simpan data
        $this->lamaranModel->save([
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'nik'           => $this->request->getPost('nik'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $phone,
            'position'      => $this->request->getPost('position'),
            'address'       => $this->request->getPost('address'),
            'asal_sekolah'  => $this->request->getPost('asal_sekolah'),
            'status'        => 'Pending',
            'created_at'    => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/inputloker')->with(
            'success',
            'Lamaran Anda berhasil dikirim. Terima kasih telah melamar di perusahaan kami. Silakan menunggu informasi tahap seleksi berikutnya melalui email atau nomor telepon yang telah Anda daftarkan.'
        );
    }

    public function hapus_multiple()
    {
        $ids = $this->request->getPost('selected_ids');
        if ($ids) {
            $this->lamaranModel->whereIn('id', $ids)->delete();
        }
        return redirect()->to(base_url('data_lamaran'))->with('success', 'Data terpilih berhasil dihapus');
    }

    public function lamaran()
    {
        $position = $this->request->getGet('position');

        if ($position) {
            $lamaran = $this->lamaranModel
                ->where('position', $position)
                ->findAll();
        } else {
            $lamaran = $this->lamaranModel->findAll();
        }

        $positions = $this->lamaranModel
            ->select('position')
            ->distinct()
            ->findAll();

        return view('loker/data_lamaran', [
            'lamaran'   => $lamaran,
            'positions' => $positions
        ]);
    }
    public function tandai($id)
    {
        $lamaran = $this->lamaranModel->find($id);
        if (!$lamaran) {
            return redirect()->to('/data_lamaran')->with('error', 'Data lamaran tidak ditemukan');
        }

        $this->lamaranModel->update($id, ['status' => 'Sudah Dipanggil']);

        return redirect()->to('/data_lamaran')->with('success', 'Lamaran ditandai sudah dipanggil');
    }
}
