<?php

namespace App\Controllers;

use App\Models\LamaranModel;
use App\Models\LokerModel;
use App\Models\BeritaModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $lamaranModel = new LamaranModel();
        $lokerModel   = new LokerModel();
        $beritaModel  = new BeritaModel();
        $userModel    = new UserModel();

        // Hitung total data
        $totalLoker   = $lokerModel->countAllResults();
        $totalLamaran = $lamaranModel->countAllResults();
        $totalBerita  = $beritaModel->countAllResults();
        $totalAkun    = $userModel->countAllResults();

        // Ambil data jumlah pelamar per bulan & posisi
        $builder = $lamaranModel->select("MONTH(created_at) as bulan, position, COUNT(*) as total")
            ->groupBy("bulan, position")
            ->orderBy("bulan", "ASC")
            ->findAll();

        // Semua bulan fix
        $allMonths = [
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        ];


        // Olah data posisi
        $posisiData = [];
        foreach ($builder as $row) {
            $posisiData[$row['position']][$row['bulan']] = $row['total'];
        }

        // Bentuk data series untuk ApexCharts
        $series = [];
        foreach ($posisiData as $posisi => $data) {
            $dataSeries = [];
            foreach ($allMonths as $num => $namaBulan) {
                $dataSeries[] = $data[$num] ?? 0; // isi 0 kalau tidak ada data
            }
            $series[] = [
                "name" => $posisi,
                "data" => $dataSeries
            ];
        }
        // Hitung total lamaran per posisi (untuk donut chart)
        $donutData = $lamaranModel->select("position, COUNT(*) as total")
            ->groupBy("position")
            ->findAll();

        $donutSeries = [];
        $donutLabels = [];
        foreach ($donutData as $row) {
            $donutLabels[] = $row['position'];
            $donutSeries[] = $row['total'];
        }
        $maxTotal = 0;
        foreach ($posisiData as $posisi => $data) {
            foreach ($data as $bulan => $jumlah) {
                $maxTotal = max($maxTotal, $jumlah);
            }
        }

        // Biar lebih rapi, bikin max jadi kelipatan 10/50/100
        $maxTotal = ceil($maxTotal / 50) * 50;
        // Hitung total per bulan & detail breakdown
        $bulanTotal = [];
        $bulanBreakdown = [];

        foreach ($allMonths as $num => $namaBulan) {
            $total = 0;
            $detail = [];
            foreach ($posisiData as $posisi => $data) {
                $jumlah = $data[$num] ?? 0;
                if ($jumlah > 0) {
                    $detail[] = $posisi . ': ' . $jumlah;
                }
                $total += $jumlah;
            }
            $bulanTotal[] = $total;
            $bulanBreakdown[] = implode('<br>', $detail);
        }
        $data = [
            'chart_bulan'   => json_encode(array_values($allMonths)), // label X: semua bulan
            'chart_posisi'  => json_encode($series, JSON_NUMERIC_CHECK),
              'chart_total'      => json_encode($bulanTotal, JSON_NUMERIC_CHECK), // total per bulan
            'chart_breakdown'  => json_encode($bulanBreakdown), //
            'donut_labels'  => json_encode($donutLabels),
            'donut_series'  => json_encode($donutSeries, JSON_NUMERIC_CHECK),
            'max_total'    => $maxTotal,
            'total_loker'   => $totalLoker,
            'total_lamaran' => $totalLamaran,
            'total_berita'  => $totalBerita,
            'total_akun'    => $totalAkun,
            'username'      => $session->get('username'),
            'role'          => $session->get('role'),
        ];

        return view('dashboard', $data);
    }
    public function template(): string
    {
        return view('template');
    }



    public function hapus($id)
    {
        $model = new LamaranModel();
        $model->delete($id);
        return redirect()->to('/data_lamaran')->with('success', 'Lamaran berhasil dihapus');
    }
}
