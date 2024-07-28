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
        $pengguna->IdPengguna = $_POST['IdPengguna'];
        $pengguna->IdAkses = $_POST['IdAkses'];
        $pengguna->NamaPengguna = $_POST['NamaPengguna'];
        $pengguna->Password = $_POST['Password'];
        $pengguna->NamaDepan = $_POST['NamaDepan'];
        $pengguna->NamaBelakang = $_POST['NamaBelakang'];
        $pengguna->NoHP = $_POST['NoHP'];
        $pengguna->Alamat = $_POST['Alamat'];
        $pengguna->save();
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function edit($id) {
        $pengguna = new Pengguna();
        $data['pengguna'] = $pengguna->find($id);
        $this->view('pengguna/edit', $data);
    }

    public function update($id) {
        $pengguna = new Pengguna();
        $pengguna->IdPengguna = $id;
        $pengguna->IdAkses = $_POST['IdAkses'];
        $pengguna->NamaPengguna = $_POST['NamaPengguna'];
        $pengguna->Password = $_POST['Password'];
        $pengguna->NamaDepan = $_POST['NamaDepan'];
        $pengguna->NamaBelakang = $_POST['NamaBelakang'];
        $pengguna->NoHP = $_POST['NoHP'];
        $pengguna->Alamat = $_POST['Alamat'];
        $pengguna->update();
        header('Location: '.Config::getBaseUrl().'pengguna');
    }

    public function delete($id) {
        $pengguna = new Pengguna();
        $pengguna->delete($id);
        header('Location: '.Config::getBaseUrl().'pengguna');
    }
}