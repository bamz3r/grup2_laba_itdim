<?php
require_once BASE_DIR.'models/Barang.php';
require_once BASE_DIR.'models/Pengguna.php';

CheckLogin::check();
class BarangController extends BaseController {

    public function index() {
        $barang = new Barang();
        $data['barang'] = $barang->all();
        $this->view('barang/index', $data);
    }

    public function create() {
        $pengguna_list = new Pengguna();
        $data['pengguna_list'] = $pengguna_list->all();
        $this->view('barang/create', $data);
    }

    public function store() {
        $barang = new Barang();
        $columns = ['IdBarang', 'IdPengguna', 'NamaBarang', 'Keterangan', 'Satuan'];
        foreach ($columns as $column) {
            $barang->{$column} = $_POST[$column];
        }
        $barang->save($columns);
        header('Location: '.Config::getBaseUrl().'barang');
    }

    public function edit($id) {
        $barang = new Barang();
        $data['barang'] = $barang->find($id);
        $pengguna_list = new Pengguna();
        $data['pengguna_list'] = $pengguna_list->all();
        $this->view('barang/edit', $data);
    }

    public function update($id) {
        $barang = new Barang();
        $columns = ['IdBarang', 'IdPengguna', 'NamaBarang', 'Keterangan', 'Satuan'];
        foreach ($columns as $column) {
            $barang->{$column} = $_POST[$column];
        }
        $barang->update($columns, $id);
        header('Location: '.Config::getBaseUrl().'barang');
    }

    public function delete($id) {
        $barang = new Barang();
        $barang->delete($id);
        header('Location: '.Config::getBaseUrl().'barang');
    }
}