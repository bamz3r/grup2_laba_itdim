<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Supplier</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Data Supplier</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>supplier/create">Tambah Supplier</a>
<table class="table table-stripped table-bordered">
    <tr>
        <th>ID Supplier</th>
        <th>Nama Pengguna</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($supplier as $item): ?>
        <tr>
            <td><?= $item['IdSupplier'] ?></td>
            <td><?= $item['NamaPengguna'] ?></td>
            <td><?= $item['NamaSupplier'] ?></td>
            <td><?= $item['Alamat'] ?></td>
            <td><?= $item['NoTelp'] ?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?= $base_url;?>supplier/edit/<?= $item['IdSupplier'] ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= $base_url;?>supplier/delete/<?= $item['IdSupplier'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>