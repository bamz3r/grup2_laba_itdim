<?php
class BaseModel {
    protected $conn;
    protected $table;
    protected $primaryKey;

    public function __construct() {
        $database = new MyDatabase();
        $this->conn = $database->getConnection();
    }

    public function all() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE " . $this->primaryKey . " = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save($keys) {
        $placeholders = implode(", ", array_map(function ($col) {
            return ":$col";
        }, $keys));
        $query = "INSERT INTO " . $this->table . " (" . implode(", ", $keys) . ") VALUES ($placeholders)";

        $stmt = $this->conn->prepare($query);
        foreach ($keys as $key) {
            $stmt->bindValue(":$key", $this->{$key});
        }
        return $stmt->execute();
    }

    public function update($keys, $id) {
        $setPart = implode(", ", array_map(function ($col) {
            return "$col = :$col";
        }, $keys));
        $query = "UPDATE " . $this->table . " SET $setPart WHERE " . $this->primaryKey . " = :id";

        $stmt = $this->conn->prepare($query);
        foreach ($keys as $key) {
            $stmt->bindValue(":$key", $this->{$key});
        }
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    /*public function save() {
        $query = "INSERT INTO " . $this->table . " SET IdBarang=:IdBarang, IdPengguna=:IdPengguna, NamaBarang=:NamaBarang, Keterangan=:Keterangan, Satuan=:Satuan";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':IdBarang', $this->IdBarang);
        $stmt->bindParam(':IdPengguna', $this->IdPengguna);
        $stmt->bindParam(':NamaBarang', $this->NamaBarang);
        $stmt->bindParam(':Keterangan', $this->Keterangan);
        $stmt->bindParam(':Satuan', $this->Satuan);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET IdPengguna=:IdPengguna, NamaBarang=:NamaBarang, Keterangan=:Keterangan, Satuan=:Satuan WHERE IdBarang=:IdBarang";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':IdBarang', $this->IdBarang);
        $stmt->bindParam(':IdPengguna', $this->IdPengguna);
        $stmt->bindParam(':NamaBarang', $this->NamaBarang);
        $stmt->bindParam(':Keterangan', $this->Keterangan);
        $stmt->bindParam(':Satuan', $this->Satuan);
        return $stmt->execute();
    }*/

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE " . $this->primaryKey . " = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function where($conditions) {
        $sql = "SELECT * FROM " . $this->table . " WHERE ";
        $sql .= implode(' AND ', array_map(function($key) {
            return "$key = :$key";
        }, array_keys($conditions)));

        $stmt = $this->conn->prepare($sql);
        foreach ($conditions as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first($conditions) {
        $results = $this->where($conditions);
        return $results ? $results[0] : null;
    }
}