<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Penjualan extends BaseModel {
    public $IdPenjualan;
    public $IdPengguna;
    public $IdBarang;
    public $IdPelanggan;
    public $TanggalPembelian;
    public $JumlahPenjualan;
    public $HargaJual;

    public function __construct() {
        parent::__construct();
        $this->table = 'Penjualan';
        $this->primaryKey = 'IdPenjualan';
    }
}