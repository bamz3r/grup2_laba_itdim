<?php
require_once BASE_DIR.'models/Supplier.php';

CheckLogin::check();
class SupplierController extends BaseController {

    public function index() {
        $supplier = new Supplier();
        $data['supplier'] = $supplier->all();
        $this->view('supplier/index', $data);
    }

    public function create() {
        $this->view('supplier/create');
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
        $supplier->update($columns);
        header('Location: '.Config::getBaseUrl().'supplier');
    }

    public function delete($id) {
        $supplier = new Supplier();
        $supplier->delete($id);
        header('Location: '.Config::getBaseUrl().'supplier');
    }
}