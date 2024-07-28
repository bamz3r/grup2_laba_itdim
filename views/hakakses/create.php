<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Hak Akses</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Tambah Hak Akses</h2>
<form action="<?= $base_url ?>hakAkses/store" method="POST">
    <label>ID Akses:</label>
    <input type="text" name="IdAkses"><br>
    <label>Nama Akses:</label>
    <input type="text" name="NamaAkses"><br>
    <label>Keterangan:</label>
    <input type="text" name="Keterangan"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>