<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title', 'content', 'image_url', 'meta_desc', 'status', 'created_at', 'author', 'slug'];

    protected $validationRules = [
        'title' => 'required',
        'content' => 'required'
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'Title harus diisi.'
        ],
        'content' => [
            'required' => 'Content harus diisi.'
        ]
    ];

    // Definisikan properti untuk ENUM status
    protected $enum = [
        'status' => ['publish', 'draft', 'pending']
    ];

    public function getPosts($max)
    {
        // Mengambil konten dari database
        $posts = $this->findAll($max);

        // Memotong konten menjadi 100 karakter
        foreach ($posts as &$post) {
            $post['content'] = substr($post['content'], 0, 100) . '...';
        }

        return $posts;
    }
}
