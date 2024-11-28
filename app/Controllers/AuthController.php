<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function login()
    {
        helper('form');
        return view('login/login');
    }

    public function authenticate()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $model = new AuthModel();

        $data = $model->checkData($username, sha1($password));
        if ($data) {
            $sessionData = ['username' => $data->username, 'logged_in' => TRUE];
            $session->set($sessionData);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('msg', 'Username/Password Salah');
            return redirect()->to('/auth/login');
        }
    }
}
