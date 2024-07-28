<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Penjualan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Tambah Penjualan</h2>
<form action="/penjualan/store" method="POST">
    <label>ID Penjualan:</label>
    <input type="text" name="IdPenjualan"><br>
    <label>ID Pengguna:</label>
    <input type="text" name="IdPengguna"><br>
    <label>ID Barang:</label>
    <input type="text" name="IdBarang"><br>
    <label>ID Pelanggan:</label>
    <input type="text" name="IdPelanggan"><br>
    <label>Tanggal Pembelian:</label>
    <input type="datetime-local" name="TanggalPembelian"><br>
    <label>Jumlah Penjualan:</label>
    <input type="number" name="JumlahPenjualan"><br>
    <label>Harga Jual:</label>
    <input type="text" name="HargaJual"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>