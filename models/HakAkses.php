<?php
require_once BASE_DIR.'config/MyDatabase.php';

class HakAkses extends BaseModel {
    public $IdAkses;
    public $NamaAkses;
    public $Keterangan;

    public function __construct() {
        parent::__construct();
        $this->table = 'HakAkses';
        $this->primaryKey = 'IdAkses';
    }
}