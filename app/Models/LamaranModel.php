<?php

namespace App\Models;

use CodeIgniter\Model;

class LamaranModel extends Model
{
    protected $table = 'lamaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'email',
        'phone',
        'position',
        'address',
        'cv_file',
        'experience',
        'created_at',
        'status'
    ];
}
