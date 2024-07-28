<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Barang extends BaseModel {
    public $IdBarang;
    public $IdPengguna;
    public $NamaBarang;
    public $Keterangan;
    public $Satuan;

    public function __construct() {
        parent::__construct();
        $this->table = 'Barang';
        $this->primaryKey = 'IdBarang';
    }
}