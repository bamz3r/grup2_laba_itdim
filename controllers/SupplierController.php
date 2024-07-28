<?php
require_once BASE_DIR.'models/Supplier.php';
require_once BASE_DIR.'models/Pengguna.php';


CheckLogin::check();
class SupplierController extends BaseController {

    public function index() {
        $supplier = new Supplier();
        $data['supplier'] = $supplier->all();
        $this->view('supplier/index', $data);
    }

    public function create() {
        $pengguna_list = new Pengguna();
        $data['pengguna_list'] = $pengguna_list->all();
        $this->view('supplier/create',$data);
    }

    public function store() {
        
        $supplier = new Supplier();
        $columns = ['IdSupplier', 'NamaPengguna', 'Password', 'NamaSupplier', 'Alamat', 'NoTelp'];
        foreach ($columns as $column) {
            if ($column == "Password") {
                $supplier->{$column} = md5($_POST[$column]);
            } else {
                $supplier->{$column} = $_POST[$column];
            }
        }
        $supplier->save($columns);
        header('Location: '.Config::getBaseUrl().'supplier');
    }

    public function edit($id) {
        $supplier = new Supplier();
        $data['supplier'] = $supplier->find($id);
        $pengguna_list = new Pengguna();
        $data['pengguna_list'] = $pengguna_list->all();
        $this->view('supplier/edit', $data);
    }

    public function update($id) {
        $supplier = new Supplier();
        $columns = ['IdSupplier', 'NamaPengguna', 'NamaSupplier', 'Alamat', 'NoTelp'];
        if (!empty($_POST['Password'])) {
            array_push($columns, 'Password');
        }
        foreach ($columns as $column) {
            if ($column == "Password") {
                $supplier->{$column} = md5($_POST[$column]);
            } else {
                $supplier->{$column} = $_POST[$column];
            }
        }
        $supplier->update($columns,$id);
        header('Location: '.Config::getBaseUrl().'supplier');
    }

    public function delete($id) {
        $supplier = new Supplier();
        $supplier->delete($id);
        header('Location: '.Config::getBaseUrl().'supplier');
    }
}