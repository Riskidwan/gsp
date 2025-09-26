<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role', 'status'];
    protected $useTimestamps = true; // created_at & updated_at otomatis

    public function createUser($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $insert = $this->insert($data);

        if (!$insert) {
            log_message('error', json_encode($this->errors()));
        }

        return $insert;
    }
     public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    // Kalau kamu pakai role & permission
    public function getRolePermissions($role)
    {
        // Bisa ambil dari tabel lain misal role_permissions
        // Contoh dummy
        if ($role === 'admin') {
            return ['manage_users', 'manage_posts', 'view_reports'];
        } else {
            return ['view_posts'];
        }
    }
}
