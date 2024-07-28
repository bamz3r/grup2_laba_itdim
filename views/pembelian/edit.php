<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Pembelian</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Pembelian</h2>
<form action="/pembelian/update/<?= $pembelian['IdPembelian'] ?>" method="POST">
    <label>ID Pembelian:</label>
    <input type="text" name="IdPembelian" value="<?= $pembelian['IdPembelian'] ?>" readonly><br>
    <label>ID Pengguna:</label>
    <input type="text" name="IdPengguna" value="<?= $pembelian['IdPengguna'] ?>"><br>
    <label>ID Supplier:</label>
    <input type="text" name="IdSupplier" value="<?= $pembelian['IdSupplier'] ?>"><br>
    <label>ID Barang:</label>
    <input type="text" name="IdBarang" value="<?= $pembelian['IdBarang'] ?>"><br>
    <label>Tanggal Pembelian:</label>
    <input type="datetime-local" name="TanggalPembelian" value="<?= $pembelian['TanggalPembelian'] ?>"><br>
    <label>Jumlah Pembelian:</label>
    <input type="number" name="JumlahPembelian" value="<?= $pembelian['JumlahPembelian'] ?>"><br>
    <label>Harga Beli:</label>
    <input type="text" name="HargaBeli" value="<?= $pembelian['HargaBeli'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>