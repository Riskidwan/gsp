<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriBeritaModel extends Model
{
    protected $table = 'kategori_berita';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['nama_kategori', 'slug', 'deskripsi'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'nama_kategori' => 'required|min_length[3]|max_length[100]',
        'slug' => 'required|is_unique[kategori_berita.slug,id,{id}]'
    ];

    public function generateSlug($namaKategori, $id = null)
    {
        $slug = url_title($namaKategori, '-', true);
        
        $builder = $this->db->table('kategori_berita');
        $builder->where('slug', $slug);
        if ($id) {
            $builder->where('id !=', $id);
        }
        
        $count = $builder->countAllResults();
        
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }
        
        return $slug;
    }
}