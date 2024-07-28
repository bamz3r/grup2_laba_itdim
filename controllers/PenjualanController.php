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
        $columns = ['IdPenjualan', 'IdPengguna', 'IdBarang', 'IdPelanggan', 'TanggalPembelian', 'JumlahPenjualan', 'HargaJual'];
        foreach ($columns as $column) {
            $penjualan->{$column} = $_POST[$column];
        }
        $penjualan->save($columns);
        header('Location: '.Config::getBaseUrl().'penjualan');
    }

    public function delete($id) {
        $penjualan = new Penjualan();
        $penjualan->delete($id);
        header('Location: '.Config::getBaseUrl().'penjualan');
    }
}