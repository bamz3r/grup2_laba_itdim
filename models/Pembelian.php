<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Pembelian extends BaseModel {
    public $IdPembelian;
    public $IdPengguna;
    public $IdSupplier;
    public $IdBarang;
    public $TanggalPembelian;
    public $JumlahPembelian;
    public $HargaBeli;

    public function __construct() {
        parent::__construct();
        $this->table = 'Pembelian';
        $this->primaryKey = 'IdPembelian';
    }
}