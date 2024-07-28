<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Supplier extends BaseModel {
    public $IdSupplier;
    public $NamaSupplier;
    public $Alamat;
    public $NoHP;

    public function __construct() {
        parent::__construct();
        $this->table = 'Supplier';
        $this->primaryKey = 'IdSupplier';
    }
}