<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Hak Akses</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Edit Hak Akses</h2>
<form action="/hakAkses/update/<?= $hakAkses['IdAkses'] ?>" method="POST">
    <label>ID Akses:</label>
    <input type="text" name="IdAkses" value="<?= $hakAkses['IdAkses'] ?>" readonly><br>
    <label>Nama Akses:</label>
    <input type="text" name="NamaAkses" value="<?= $hakAkses['NamaAkses'] ?>"><br>
    <label>Keterangan:</label>
    <input type="text" name="Keterangan" value="<?= $hakAkses['Keterangan'] ?>"><br>
    <input type="submit" value="Simpan">
</form>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>