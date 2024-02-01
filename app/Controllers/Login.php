<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $ModelLogin = new \App\Models\ModelLogin();
        $login = $this->request->getPost('login');
        
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = "Masukan username dan password";
            }

            if (empty($err)) {
                $dataUser = $ModelLogin->where("username", $username)->first();

                // Periksa apakah username ditemukan
                if (!$dataUser) {
                    $err = "Username tidak ditemukan";
                } else {
                    // Periksa apakah password sesuai
                    if ($dataUser['password'] != md5($password)) {
                        $err = "Password tidak sesuai";
                    }
                }
            }

            if (empty($err)) {
                $dataSesi = [
                    'id'       => $dataUser['id'],
                    'username' => $dataUser['username'],
                    'password' => $dataUser['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('keluarga');
            }

            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to(site_url("login"));
            }
        }

        return view('index');
    }
}