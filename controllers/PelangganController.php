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
        $pelanggan->IdPelanggan = $_POST['IdPelanggan'];
        $pelanggan->NamaPengguna = $_POST['NamaPengguna'];
        if (!empty($_POST['Password'])) {
            $pelanggan->Password = md5($_POST['Password']);
        }
        $pelanggan->NamaDepan = $_POST['NamaDepan'];
        $pelanggan->NamaBelakang = $_POST['NamaBelakang'];
        $pelanggan->NoHP = $_POST['NoHP'];
        $pelanggan->Alamat = $_POST['Alamat'];
        $pelanggan->save();
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }

    public function edit($id) {
        $pelanggan = new Pelanggan();
        $data['pelanggan'] = $pelanggan->find($id);
        $this->view('pelanggan/edit', $data);
    }

    public function update($id) {
        $pelanggan = new Pelanggan();
        $pelanggan->IdPelanggan = $id;
        $pelanggan->NamaPengguna = $_POST['NamaPengguna'];
        $pelanggan->Password = md5($_POST['Password']);
        $pelanggan->NamaDepan = $_POST['NamaDepan'];
        $pelanggan->NamaBelakang = $_POST['NamaBelakang'];
        $pelanggan->NoHP = $_POST['NoHP'];
        $pelanggan->Alamat = $_POST['Alamat'];
        $pelanggan->update();
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }

    public function delete($id) {
        $pelanggan = new Pelanggan();
        $pelanggan->delete($id);
        header('Location: '.Config::getBaseUrl().'pelanggan');
    }
}