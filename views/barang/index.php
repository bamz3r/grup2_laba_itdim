<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Barang</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="mt-5">Data Barang</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>barang/create">Tambah Barang</a>

<table border="1" class="table table-striped table-bordered">
    <tr>
        <th>ID Barang</th>
        <th>ID Pengguna</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Satuan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $item): ?>
        <tr>
            <td><?= $item['IdBarang'] ?></td>
            <td><?= $item['IdPengguna'] ?></td>
            <td><?= $item['NamaBarang'] ?></td>
            <td><?= $item['Keterangan'] ?></td>
            <td><?= $item['Satuan'] ?></td>
            <td>
                <a class="btn btn-sm btn-info" href="barang/edit/<?= $item['IdBarang'] ?>">Edit</a>
                <a class="btn btn-sm btn-danger" href="barang/delete/<?= $item['IdBarang'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
