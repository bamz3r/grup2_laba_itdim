<?php
require_once BASE_DIR.'config/MyDatabase.php';

class Labarugi extends BaseModel {
    public function all() {
        $query = "SELECT
        b.idBarang,
        b.NamaBarang,
        IFNULL(stok.StokTersedia, 0) AS StokTersedia, IFNULL(penjualan.TotalJumlahPenjualan, 0) AS TotalJumlahPenjualan, IFNULL(penjualan.AvgHargaJual, 0) AS AvgHargaJual, IFNULL(pembelian.AvgHargaBeli, 0) AS AvgHargaBeli,
        (IFNULL(penjualan.TotalJumlahPenjualan, 0) * (IFNULL(penjualan.AvgHargaJual, 0) - IFNULL(pembelian.AvgHargaBeli, 0))) AS Keuntungan
        FROM Barang b
        LEFT JOIN (SELECT
        idBarang,
        SUM(jumlahPenjualan) AS TotalJumlahPenjualan, AVG(hargaJual) AS AvgHargaJual
        FROM Penjualan
        GROUP BY
        idBarang) AS penjualan ON b.idBarang = penjualan.idBarang
        LEFT JOIN (SELECT
        idBarang,
        SUM(jumlahPembelian) AS TotalJumlahPembelian, AVG(hargaBeli) AS AvgHargaBeli
        FROM Pembelian
        GROUP BY
        idBarang) AS pembelian ON b.idBarang = pembelian.idBarang
        LEFT JOIN (SELECT
        idBarang,
        SUM(jumlahPembelian) - SUM(jumlahPenjualan) AS StokTersedia FROM
        (SELECT idBarang, jumlahPembelian, 0 AS jumlahPenjualan FROM Pembelian
        UNION ALL
        SELECT idBarang, 0 AS jumlahPembelian, jumlahPenjualan FROM Penjualan) AS Transaksi
        GROUP BY
        idBarang) AS stok ON b.idBarang = stok.idBarang;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}