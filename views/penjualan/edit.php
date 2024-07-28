<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Penjualan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Penjualan</h2>
<form action="/penjualan/update/<?= $penjualan['IdPenjualan'] ?>" method="POST">
    <label>ID Penjualan:</label>
    <input type="text" name="IdPenjualan" value="<?= $penjualan['IdPenjualan'] ?>" readonly><br>
    <label>ID Pengguna:</label>
    <input type="text" name="IdPengguna" value="<?= $penjualan['IdPengguna'] ?>"><br>
    <label>ID Barang:</label>
    <input type="text" name="IdBarang" value="<?= $penjualan['IdBarang'] ?>"><br>
    <label>ID Pelanggan:</label>
    <input type="text" name="IdPelanggan" value="<?= $penjualan['IdPelanggan'] ?>"><br>
    <label>Tanggal Pembelian:</label>
    <input type="datetime-local" name="TanggalPembelian" value="<?= $penjualan['TanggalPembelian'] ?>"><br>
    <label>Jumlah Penjualan:</label>
    <input type="number" name="JumlahPenjualan" value="<?= $penjualan['JumlahPenjualan'] ?>"><br>
    <label>Harga Jual:</label>
    <input type="text" name="HargaJual" value="<?= $penjualan['HargaJual'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
