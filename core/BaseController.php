<?php
class BaseController {
    public function view($view, $data = []) {
        extract($data);
        $base_path = Config::getBasePath();
//        die($base_path);
        $base_url = Config::getBaseUrl();
//        die($base_url);
        $public_url = Config::getPublicUrl();
//        die($public_url);
        $user = $_SESSION['user'];
        $login_type = $_SESSION['login_type'];
        require_once BASE_DIR.'views/' . $view . '.php';
    }

    private function getIncludeFile($filename) {
        ob_start();
        include $filename;
        $fileContents = ob_get_clean();

        return $fileContents;
    }

}