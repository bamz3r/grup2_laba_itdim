<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Pelanggan extends BaseModel {
    public $IdPelanggan;
    public $NamaPengguna;
    public $Password;
    public $NamaDepan;
    public $NamaBelakang;
    public $NoHP;
    public $Alamat;

    public function __construct() {
        parent::__construct();
        $this->table = 'Pelanggan';
        $this->primaryKey = 'IdPelanggan';
    }
}