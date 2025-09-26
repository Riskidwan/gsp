<?php

namespace App\Models;

use CodeIgniter\Model;

// Model untuk Breaking News
class BreakingNewsModel extends Model
{
    protected $table = 'breaking_news';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['judul', 'link', 'urutan', 'aktif'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'judul' => 'required|min_length[10]|max_length[255]',
        'urutan' => 'required|is_natural'
    ];

    // Get active breaking news
    public function getActiveBreakingNews()
    {
        return $this->where('aktif', true)
                    ->orderBy('urutan', 'ASC')
                    ->findAll();
    }
}