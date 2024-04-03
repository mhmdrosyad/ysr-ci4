<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }

    public function register()
    {
        return view('admin/register');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function post()
    {
        return view('admin/post/add_post'); 
    }
}
