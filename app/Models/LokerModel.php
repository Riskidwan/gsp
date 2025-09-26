<?php

namespace App\Models;

use CodeIgniter\Model;

class LokerModel extends Model
{
    protected $table = 'loker';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul', 'perusahaan',  'deskripsi', 'lokasi', 'tipe_kerja',
        'jam_kerja', 'pengalaman', 'pendidikan', 'gender', 'kesehatan_mata',
        'tinggi_badan', 'persyaratan', 'gambar', 'slug'
    ];//gaji
}
