<?php
require_once BASE_DIR.'models/Pengguna.php';
require_once BASE_DIR.'models/HakAkses.php';

CheckLogin::check();
class PenggunaController extends BaseController {

    public function index() {
        $pengguna = new Pengguna();
        $data['pengguna'] = $pengguna->all();
        $this->view('pengguna/index', $data);
    }

    public function create() {
        $hakakses_list = new HakAkses();
        $data['hakakses_list'] = $hakakses_list->all();
        $this->view('pengguna/create', $data);
    }

    public function store() {
        $pengguna = new Pengguna();
        $columns = ['IdPengguna', 'IdAkses', 'NamaPengguna', 'Password', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        foreach ($columns as $column) {
            $pengguna->{$column} = $_POST[$column];
        }
        $pengguna->save($columns);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function edit($id) {
        $pengguna = new Pengguna();
        $data['pengguna'] = $pengguna->find($id);
        $hakakses_list = new HakAkses();
        $data['hakakses_list'] = $hakakses_list->all();
        $this->view('pengguna/edit', $data);
    }

    public function update($id) {
        $pengguna = new Pengguna();
        $columns = ['IdPengguna', 'IdAkses', 'NamaPengguna', 'Password', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        foreach ($columns as $column) {
            $pengguna->{$column} = $_POST[$column];
        }
        $pengguna->update($columns, $id);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function delete($id) {
        $pengguna = new pengguna();
        $pengguna->delete($id);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }
}