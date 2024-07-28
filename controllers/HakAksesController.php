<?php
require_once BASE_DIR.'models/HakAkses.php';

CheckLogin::check();
class HakAksesController extends BaseController {

    public function index() {
        $hakAkses = new HakAkses();
        $data['hakAkses'] = $hakAkses->all();
        $this->view('hakAkses/index', $data);
    }

    public function create() {
        $this->view('hakAkses/create');
    }

    public function store() {
        $hakAkses = new HakAkses();
        $hakAkses->IdAkses = $_POST['IdAkses'];
        $hakAkses->NamaAkses = $_POST['NamaAkses'];
        $hakAkses->Keterangan = $_POST['Keterangan'];
        $hakAkses->save();
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }

    public function edit($id) {
        $hakAkses = new HakAkses();
        $data['hakAkses'] = $hakAkses->find($id);
        $this->view('hakAkses/edit', $data);
    }

    public function update($id) {
        $hakAkses = new HakAkses();
        $hakAkses->IdAkses = $id;
        $hakAkses->NamaAkses = $_POST['NamaAkses'];
        $hakAkses->Keterangan = $_POST['Keterangan'];
        $hakAkses->update();
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }

    public function delete($id) {
        $hakAkses = new HakAkses();
        $hakAkses->delete($id);
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }
}