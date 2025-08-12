<?php

namespace App\Controllers;

use App\Models\LamaranModel;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function template(): string
    {
        return view('template');
    }
    public function lamaran()
    {
        $model = new LamaranModel();
        $position = $this->request->getGet('position');

        if ($position) {
            $data['lamaran'] = $model->where('position', $position)
                ->orderBy('created_at', 'DESC')
                ->findAll();
        } else {
            $data['lamaran'] = $model->orderBy('created_at', 'DESC')->findAll();
        }

        $data['positions'] = $model->select('position')->distinct()->findAll();

        return view('loker/data_loker', $data);
    }


    public function hapus($id)
    {
        $model = new LamaranModel();
        $model->delete($id);
        return redirect()->to('/data_loker')->with('success', 'Lamaran berhasil dihapus');
    }

    public function tandai($id)
    {
        $model = new LamaranModel();

        // Pastikan data ditemukan
        $lamaran = $model->find($id);
        if (!$lamaran) {
            return redirect()->to('/data_loker')->with('error', 'Data lamaran tidak ditemukan');
        }

        // Update status
        $model->update($id, ['status' => 'dipanggil']);

        return redirect()->to('/data_loker')->with('success', 'Lamaran ditandai sudah dipanggil');
    }
}
