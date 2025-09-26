<?php

namespace App\Models;

use CodeIgniter\Model;

class LamaranModel extends Model
{
    protected $table = 'lamaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'nik',      
        'email',
        'phone',
        'position',
        'address',
        'asal_sekolah',
        'status',
        'created_at'
    ];
}
