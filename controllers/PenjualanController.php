<?php
require_once BASE_DIR.'models/Penjualan.php';

CheckLogin::check();
class PenjualanController extends BaseController {

    public function index() {
        $penjualan = new Penjualan();
        $data['penjualan'] = $penjualan->all();
        $this->view('penjualan/index', $data);
    }

    public function create() {
        $this->view('penjualan/create');
    }

    public function store() {
        $penjualan = new Penjualan();
        $penjualan->IdPenjualan = $_POST['IdPenjualan'];
        $penjualan->IdPengguna = $_POST['IdPengguna'];
        $penjualan->IdBarang = $_POST['IdBarang'];
        $penjualan->IdPelanggan = $_POST['IdPelanggan'];
        $penjualan->TanggalPembelian = $_POST['TanggalPembelian'];
        $penjualan->JumlahPenjualan = $_POST['JumlahPenjualan'];
        $penjualan->HargaJual = $_POST['HargaJual'];
        $penjualan->save();
        header('Location: '.Config::getBaseUrl().'penjualan');
    }

    public function edit($id) {
        $penjualan = new Penjualan();
        $data['penjualan'] = $penjualan->find($id);
        $this->view('penjualan/edit', $data);
    }

    public function update($id) {
        $penjualan = new Penjualan();
        $penjualan->IdPenjualan = $id;
        $penjualan->IdPengguna = $_POST['IdPengguna'];
        $penjualan->IdBarang = $_POST['IdBarang'];
        $penjualan->IdPelanggan = $_POST['IdPelanggan'];
        $penjualan->TanggalPembelian = $_POST['TanggalPembelian'];
        $penjualan->JumlahPenjualan = $_POST['JumlahPenjualan'];
        $penjualan->HargaJual = $_POST['HargaJual'];
        $penjualan->update();
        header('Location: '.Config::getBaseUrl().'penjualan');
    }

    public function delete($id) {
        $penjualan = new Penjualan();
        $penjualan->delete($id);
        header('Location: '.Config::getBaseUrl().'penjualan');
    }
}