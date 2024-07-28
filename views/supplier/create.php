<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Supplier</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Tambah Supplier</h2>
<form action="/supplier/store" method="POST">
    <label>ID Supplier:</label>
    <input type="text" name="IdSupplier"><br>
    <label>Nama Supplier:</label>
    <input type="text" name="NamaSupplier"><br>
    <label>Alamat:</label>
    <input type="text" name="Alamat"><br>
    <label>No HP:</label>
    <input type="text" name="NoTelp"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
