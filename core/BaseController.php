<?php
class BaseController {
    public function view($view, $data = []) {
        extract($data);
//        print_r($_SESSION);
        $base_path = Config::getBasePath();
//        die($base_path);
        $base_url = Config::getBaseUrl();
//        die($base_url);
        $public_url = Config::getPublicUrl();
//        die($public_url);
        $user = $_SESSION['user'];
        $login_type = $_SESSION['login_type'];
//        die($login_type);
        $error_message = $_SESSION['error_message'];
        $success_message = $_SESSION['success_message'];
        $current_page = $this->getCurrentControllerName();
//        die($current_page);
        require_once BASE_DIR.'views/' . $view . '.php';
    }

    private function getIncludeFile($filename) {
        ob_start();
        include $filename;
        $fileContents = ob_get_clean();

        return $fileContents;
    }

    function getCurrentControllerName() {
        $reflect = new ReflectionClass($this);
        $shortName = str_replace('Controller', '', $reflect->getShortName());
        return strtolower($shortName);
    }

}