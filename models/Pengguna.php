<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Pengguna extends BaseModel {
    public $IdPengguna;
    public $IdAkses;
    public $NamaPengguna;
    public $Password;
    public $NamaDepan;
    public $NamaBelakang;
    public $NoHP;
    public $Alamat;

    public function __construct() {
        parent::__construct();
        $this->table = 'Pengguna';
        $this->primaryKey = 'IdPengguna';
    }
}