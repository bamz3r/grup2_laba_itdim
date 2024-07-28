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
        $columns = ['IdPembelian', 'IdPengguna', 'IdSupplier', 'IdBarang', 'TanggalPembelian', 'JumlahPembelian', 'HargaBeli'];
        foreach ($columns as $column) {
            $pembelian->{$column} = $_POST[$column];
        }
        $pembelian->save($columns);
        header('Location: '.Config::getBaseUrl().'pembelian');
    }

    public function delete($id) {
        $pembelian = new Pembelian();
        $pembelian->delete($id);
        header('Location: '.Config::getBaseUrl().'pembelian');
    }
}
?>
