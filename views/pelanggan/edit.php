<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Pelanggan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Pelanggan</h2>
<form action="<?= $base_url ?>pelanggan/update/<?= $pelanggan['IdPelanggan'] ?>" method="POST">
    <label>ID Pelanggan:</label>
    <input type="text" name="IdPelanggan" value="<?= $pelanggan['IdPelanggan'] ?>" readonly><br>
    <label>Nama Pengguna:</label>
    <input type="text" name="NamaPengguna" value="<?= $pelanggan['NamaPengguna'] ?>"><br>
    <label>Password:</label>
    <input type="password" name="Password" value="<?= $pelanggan['Password'] ?>"><br>
    <label>Nama Depan:</label>
    <input type="text" name="NamaDepan" value="<?= $pelanggan['NamaDepan'] ?>"><br>
    <label>Nama Belakang:</label>
    <input type="text" name="NamaBelakang" value="<?= $pelanggan['NamaBelakang'] ?>"><br>
    <label>No HP:</label>
    <input type="text" name="NoHP" value="<?= $pelanggan['NoHP'] ?>"><br>
    <label>Alamat:</label>
    <input type="text" name="Alamat" value="<?= $pelanggan['Alamat'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>