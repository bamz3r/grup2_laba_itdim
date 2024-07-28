<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Pembelian</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Tambah Pembelian</h2>
<form action="<?= $base_url ?>pembelian/store" method="POST">
    <label>ID Pembelian:</label>
    <input type="text" name="IdPembelian"><br>
    <label>ID Pengguna:</label>
    <input type="text" name="IdPengguna"><br>
    <label>ID Supplier:</label>
    <input type="text" name="IdSupplier"><br>
    <label>ID Barang:</label>
    <input type="text" name="IdBarang"><br>
    <label>Tanggal Pembelian:</label>
    <input type="datetime-local" name="TanggalPembelian"><br>
    <label>Jumlah Pembelian:</label>
    <input type="number" name="JumlahPembelian"><br>
    <label>Harga Beli:</label>
    <input type="text" name="HargaBeli"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>