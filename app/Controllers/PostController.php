<?php

namespace App\Controllers;

use App\Models\PostModel;

class PostController extends BaseController
{
    public function posts()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->orderBy('id', 'desc')->findAll();
        return view('admin/post/all_posts', $data); 
    }

    public function add()
    {
        return view('admin/post/add_post'); 
    }

    private function generateSlug($title)
    {
        $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $title));
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim($slug, '-');
        return $slug;
    }
    
    public function save()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required',
            'image' => 'uploaded[image]|max_size[image,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/admin/post/add')->withInput()->with('errors', $validation->getErrors());
        }

        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $image = $this->request->getFile('image');
        $slug = $this->request->getPost('slug');

        $newName = $image->getRandomName();
        $image->move('uploads', $newName);

        $createdAt = date('Y-m-d', strtotime('now'));

        $postModel = new PostModel();
        // $slug = $this->generateSlug($title);
        $author = $_SESSION['username'];
        try {
            $postModel->insert([
                'title' => $title,
                'slug'  => $slug,
                'content' => $content,
                'image_url' => $newName,
                'author' => $author,
                'status' => 'publish',
                'created_at' => $createdAt
            ]);
            return redirect()->to('/admin/post/add')->with('success', 'Postingan berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            echo 'Terjadi kesalahan: ' . $e->getMessage();
        }

    }

    public function delete($id)
    {
        $postModel = new PostModel();
        $post = $postModel->find($id);

        if(!$post) {
            return redirect()->back()->with('error', 'Post tidak ditemukan.');
        }

        if(!empty($post['image_url'])) {
            $imagePath = FCPATH . 'uploads/' . $post['image_url'];
            if(file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $postModel->delete($id);
        return redirect()->to('/admin/posts')->with('success', 'User berhasil dihapus.');
    }

    public function edit($id)
    {
        $postModel = new PostModel();
        $post = $postModel->find($id);
        if(!$post) {
            return redirect()->back()->with('error', 'Post tidak ditemukan.');
        }
        $data['post'] = $post;
        return view('admin/post/edit_post', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        $postModel = new PostModel();
        $post = $postModel->find($id);
        
        if (!$post) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $postModel->update($id, [
            'title' => $title,
            'content' => $content
        ]);

        return redirect()->to('/admin/posts')->with('success', 'Data berhasil diupdate.');
    }


}
