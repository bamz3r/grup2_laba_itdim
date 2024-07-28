<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Supplier</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Supplier</h2>
<form action="<?= $base_url ?>supplier/update/<?= $supplier['IdSupplier'] ?>" method="POST">
    <label>ID Supplier:</label>
    <input type="text" name="IdSupplier" value="<?= $supplier['IdSupplier'] ?>" readonly><br>
    <label>Nama Supplier:</label>
    <input type="text" name="NamaSupplier" value="<?= $supplier['NamaSupplier'] ?>"><br>
    <label>Nama Pengguna:</label>
    <input type="text" name="NamaPengguna" value="<?= $supplier['NamaPengguna'] ?>"><br>
    <label>Password:</label>
    <input type="text" name="Password" value="" placeholder="tidak diubah" autocomplete="no"><br>
    <label>Alamat:</label>
    <input type="text" name="Alamat" value="<?= $supplier['Alamat'] ?>"><br>
    <label>No HP:</label>
    <input type="text" name="NoTelp" value="<?= $supplier['NoTelp'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>