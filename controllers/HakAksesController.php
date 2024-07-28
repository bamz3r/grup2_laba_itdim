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
        $columns = ['IdAkses', 'NamaAkses', 'Keterangan'];
        $hakAkses = new HakAkses();
        foreach ($columns as $column) {
            $hakAkses->{$column} = $_POST[$column];
        }
        $hakAkses->save($columns);
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }

    public function edit($id) {
        $hakAkses = new HakAkses();
        $data['hakAkses'] = $hakAkses->find($id);
        $this->view('hakAkses/edit', $data);
    }

    public function update($id) {
        $columns = ['IdAkses', 'NamaAkses', 'Keterangan'];
        $hakAkses = new HakAkses();
        foreach ($columns as $column) {
            $hakAkses->{$column} = $_POST[$column];
        }
        $hakAkses->update($columns, $id);
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }

    public function delete($id) {
        $hakAkses = new HakAkses();
        $hakAkses->delete($id);
        header('Location: '.Config::getBaseUrl().'hakAkses');
    }
}