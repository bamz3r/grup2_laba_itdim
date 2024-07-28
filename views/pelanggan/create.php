<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Pelanggan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Tambah Pelanggan</h2>
<form action="/pelanggan/store" method="POST">
    <label>ID Pelanggan:</label>
    <input type="text" name="IdPelanggan"><br>
    <label>Nama Pengguna:</label>
    <input type="text" name="NamaPengguna"><br>
    <label>Password:</label>
    <input type="password" name="Password"><br>
    <label>Nama Depan:</label>
    <input type="text" name="NamaDepan"><br>
    <label>Nama Belakang:</label>
    <input type="text" name="NamaBelakang"><br>
    <label>No HP:</label>
    <input type="text" name="NoHP"><br>
    <label>Alamat:</label>
    <input type="text" name="Alamat"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>