<?php
require_once BASE_DIR.'models/Pelanggan.php';

CheckLogin::check();
class PelangganController extends BaseController {

    public function index() {
        $pelanggan = new Pelanggan();
        $data['pelanggan'] = $pelanggan->all();
        $this->view('pelanggan/index', $data);
    }

    public function create() {
        $this->view('pelanggan/create');
    }

    public function store() {
        $pelanggan = new Pelanggan();
        $columns = ['IdPelanggan', 'NamaPengguna', 'Password', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        foreach ($columns as $column) {
            if ($column == "Password") {
                $pelanggan->{$column} = md5($_POST[$column]);
            } else {
                $pelanggan->{$column} = $_POST[$column];
            }
        }
        $pelanggan->save($columns);
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }

    public function edit($id) {
        $pelanggan = new Pelanggan();
        $data['pelanggan'] = $pelanggan->find($id);
        $this->view('pelanggan/edit', $data);
    }

    public function update($id) {
        $pelanggan = new Pelanggan();
        $columns = ['IdPelanggan', 'NamaPengguna', 'NamaDepan', 'NamaBelakang', 'NoHP', 'Alamat'];
        if (!empty($_POST['Password'])) {
            array_push($columns, 'Password');
        }
        foreach ($columns as $column) {
            if ($column == "Password") {
                $pelanggan->{$column} = md5($_POST[$column]);
            } else {
                $pelanggan->{$column} = $_POST[$column];
            }
        }
        $pelanggan->update($columns, $id);
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }

    public function delete($id) {
        $pelanggan = new Pelanggan();
        $pelanggan->delete($id);
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }
}