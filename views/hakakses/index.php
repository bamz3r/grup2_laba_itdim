<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Hak Akses</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Data Hak Akses</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>hakAkses/create">Tambah Hak Akses</a>
<table class="table table-stripped table-bordered">
    <tr>
        <th>ID Akses</th>
        <th>Nama Akses</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($hakAkses as $item): ?>
        <tr>
            <td><?= $item['IdAkses'] ?></td>
            <td><?= $item['NamaAkses'] ?></td>
            <td><?= $item['Keterangan'] ?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?= $base_url;?>hakAkses/edit/<?= $item['IdAkses'] ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= $base_url;?>hakAkses/delete/<?= $item['IdAkses'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>