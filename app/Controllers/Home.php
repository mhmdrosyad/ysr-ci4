<?php

namespace App\Controllers;
use App\Models\PostModel;

class Home extends BaseController
{
    public function index(): string
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->orderBy('id', 'desc')->getPosts(3);
        return view('common/index', $data);
    }

    public function post($slug) {
        $postModel = new PostModel();
        $post = $postModel->where('slug', $slug)->first();

        if($post) {
            $data['post'] = $post;
            $data['title'] = $post['title'];
            return view('common/post', $data);
        } else {
            return "Post not found";
        }
    }
}
