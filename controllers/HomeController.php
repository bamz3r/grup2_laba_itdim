<?php
CheckLogin::check();
class HomeController extends BaseController {
    public function index() {
        $this->view('index');
    }
}