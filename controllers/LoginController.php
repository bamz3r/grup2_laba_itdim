<?php
require_once BASE_DIR.'models/Pengguna.php';
require_once BASE_DIR.'models/Pelanggan.php';
require_once BASE_DIR.'models/Supplier.php';

class LoginController extends BaseController {
    public function index() {
        $this->view('login/index');
    }

    public function submit() {
        $loginType = $_POST['login_type'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = null;
        if ($loginType == 'pengguna') {
            $pengguna = new Pengguna();
            $user = $pengguna->first(['NamaPengguna' => $username, 'password' => md5($password)]);
        } elseif ($loginType == 'pelanggan') {
            $pelanggan = new Pelanggan();
            $user = $pelanggan->first(['NamaPengguna' => $username, 'Password' => md5($password)]);
        } elseif ($loginType == 'supplier') {
            $supplier = new Supplier();
            $user = $supplier->first(['NamaPengguna' => $username, 'Password' => md5($password)]);
        }

        if ($user != null) {
            $_SESSION['user'] = $user;
            $_SESSION['login_type'] = $loginType;
            header('Location: '.Config::getBaseUrl());
        } else {
            header('Location: '.Config::getBaseUrl().'login');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: '.Config::getBaseUrl().'login');
    }
}