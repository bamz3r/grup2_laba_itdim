<?php
class CheckLogin {
    public static function check() {
//        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: ' . Config::getBaseUrl() . 'login');
            exit();
        }
    }
}