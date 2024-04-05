<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function index(): string
    {
        return view('admin/index');
    }

    public function register()
    {
        return view('admin/register');
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'name' => 'required',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/admin/signup')->withInput()->with('error', $validation->getErrors());
        }

        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getVar('username'),
            'name' => $this->request->getVar('name'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/admin/login')->with('success', 'Akun behasil dibuat. Silahkan login.');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[6]'
        ]);

        if(!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/admin/login')->withInput()->with('errors', $validation->getErrors());
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', $this->request->getVar('username'))->first();

        if (!$user || !password_verify($this->request->getVar('password'), $user['password'])) {
            return redirect()->to('/admin/login')->withInput()->with('error', 'Email atau password salah.');
        }

        $session = session();
        $session->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'logged_in' => true
        ]);

        return redirect()->to('/admin');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/admin/login')->with('success', 'Anda telah berhasil logout.');
    }

    
}
