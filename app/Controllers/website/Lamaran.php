<?php

namespace App\Controllers\website;

use App\Controllers\BaseController;
use App\Models\LamaranModel;

class Lamaran extends BaseController
{
    public function input()
    {
        return view('website/inputloker');
    }

    public function save()
    {
        $lamaranModel = new LamaranModel();

        // Validasi input
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'email'    => 'required|valid_email',
            'phone'    => 'required',
            'position' => 'required',
            'address'  => 'required',
            'cv'       => 'uploaded[cv.0]|max_size[cv,10240]|ext_in[cv,pdf,doc,docx]'
        ])) {
            return redirect()->back()->with('error', 'Mohon isi semua field dengan benar.');
        }

        // Upload file CV
        $cvFiles = $this->request->getFileMultiple('cv');
        $uploadedFiles = [];
        foreach ($cvFiles as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $originalName = $file->getClientName(); // ambil nama asli
                $file->move('uploads/cv', $originalName);
                $uploadedFiles[] = $originalName;
            }
        }

        // Simpan ke database
        $lamaranModel->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
            'position'  => $this->request->getPost('position'),
            'address'   => $this->request->getPost('address'),
            'cv_file'   => implode(',', $uploadedFiles),
            'experience'=> $this->request->getPost('experience')
        ]);

        return redirect()->to('/loker')->with('success', 'Lamaran berhasil dikirim!');
    }
}
