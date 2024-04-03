<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('common/index');
    }

    public function post() {
        return view('common/post');
    }
}
