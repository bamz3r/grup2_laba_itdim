<?php
require_once BASE_DIR.'models/Pengguna.php';

CheckLogin::check();
class PenggunaController extends BaseController {

    public function index() {
        $pengguna = new Pengguna();
        $data['pengguna'] = $pengguna->all();
        $this->view('pengguna/index', $data);
    }

    public function create() {
        $this->view('pengguna/create');
    }

    public function store() {
        $pengguna = new Pengguna();
        $columns = ['IdPengguna', 'IdAkses', 'NamaPengguna', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        if (!empty($_POST['Password'])) {
            array_push($columns, 'Password');
        }
        foreach ($columns as $column) {
            if ($column == "Password") {
                $pengguna->{$column} = md5($_POST[$column]);
            } else {
                $pengguna->{$column} = $_POST[$column];
            }
        }
        $pengguna->save($columns);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function edit($id) {
        $pengguna = new Pengguna();
        $data['pengguna'] = $pengguna->find($id);
        $this->view('pengguna/edit', $data);
    }

    public function update($id) {
        $pengguna = new Pengguna();
        $columns = ['IdPengguna', 'IdAkses', 'NamaPengguna', 'Password', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        if (!empty($_POST['Password'])) {
            array_push($columns, 'Password');
        }
        foreach ($columns as $column) {
            if ($column == "Password") {
                $pengguna->{$column} = md5($_POST[$column]);
            } else {
                $pengguna->{$column} = $_POST[$column];
            }
        }
        $pengguna->update($columns, $id);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function delete($id) {
        $pengguna = new Pengguna();
        $pengguna->delete($id);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }
}