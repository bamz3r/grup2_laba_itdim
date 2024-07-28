<?php
class MyDatabase {
    private $host = "localhost";
    private $db_name = "tk3_grup2";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Koneksi db error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}