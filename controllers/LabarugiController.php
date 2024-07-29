<?php
require_once BASE_DIR.'models/Labarugi.php';

CheckLogin::check();
class LabarugiController extends BaseController {
    public function index() {
        $labarugi = new labarugi();
        $data['labarugi'] = $labarugi->all();
        $this->view('labarugi/index', $data);
    }
}