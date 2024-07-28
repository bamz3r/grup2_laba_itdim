<?php
require_once BASE_DIR.'models/Pembelian.php';

CheckLogin::check();
class PembelianController extends BaseController {

    public function index() {
        $pembelian = new Pembelian();
        $data['pembelian'] = $pembelian->all();
        $this->view('pembelian/index', $data);
    }

    public function create() {
        $this->view('pembelian/create');
    }

    public function store() {
        $pembelian = new Pembelian();
        $pembelian->IdPembelian = $_POST['IdPembelian'];
        $pembelian->IdPengguna = $_POST['IdPengguna'];
        $pembelian->IdSupplier = $_POST['IdSupplier'];
        $pembelian->IdBarang = $_POST['IdBarang'];
        $pembelian->TanggalPembelian = $_POST['TanggalPembelian'];
        $pembelian->JumlahPembelian = $_POST['JumlahPembelian'];
        $pembelian->HargaBeli = $_POST['HargaBeli'];
        $pembelian->save();
        header('Location: '.Config::getBaseUrl().'pembelian');
    }

    public function edit($id) {
        $pembelian = new Pembelian();
        $data['pembelian'] = $pembelian->find($id);
        $this->view('pembelian/edit', $data);
    }

    public function update($id) {
        $pembelian = new Pembelian();
        $pembelian->IdPembelian = $id;
        $pembelian->IdPengguna = $_POST['IdPengguna'];
        $pembelian->IdSupplier = $_POST['IdSupplier'];
        $pembelian->IdBarang = $_POST['IdBarang'];
        $pembelian->TanggalPembelian = $_POST['TanggalPembelian'];
        $pembelian->JumlahPembelian = $_POST['JumlahPembelian'];
        $pembelian->HargaBeli = $_POST['HargaBeli'];
        $pembelian->update();
        header('Location: '.Config::getBaseUrl().'pembelian');
    }

    public function delete($id) {
        $pembelian = new Pembelian();
        $pembelian->delete($id);
        header('Location: '.Config::getBaseUrl().'pembelian');
    }
}
?>
