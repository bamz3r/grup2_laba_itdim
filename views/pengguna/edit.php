<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Pengguna</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Pengguna</h2>
<form action="/pengguna/update/<?= $pengguna['IdPengguna'] ?>" method="POST">
    <label>ID Pengguna:</label>
    <input type="text" name="IdPengguna" value="<?= $pengguna['IdPengguna'] ?>" readonly><br>
    <label>ID Akses:</label>
    <input type="text" name="IdAkses" value="<?= $pengguna['IdAkses'] ?>"><br>
    <label>Nama Pengguna:</label>
    <input type="text" name="NamaPengguna" value="<?= $pengguna['NamaPengguna'] ?>"><br>
    <label>Password:</label>
    <input type="password" name="Password" value="<?= $pengguna['Password'] ?>"><br>
    <label>Nama Depan:</label>
    <input type="text" name="NamaDepan" value="<?= $pengguna['NamaDepan'] ?>"><br>
    <label>Nama Belakang:</label>
    <input type="text" name="NamaBelakang" value="<?= $pengguna['NamaBelakang'] ?>"><br>
    <label>No HP:</label>
    <input type="text" name="NoHP" value="<?= $pengguna['NoHP'] ?>"><br>
    <label>Alamat:</label>
    <input type="text" name="Alamat" value="<?= $pengguna['Alamat'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>