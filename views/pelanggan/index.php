<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Pelanggan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Data Pelanggan</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>pelanggan/create">Tambah Pelanggan</a>
<table class="table table-stripped table-bordered">
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pengguna</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pelanggan as $item): ?>
        <tr>
            <td><?= $item['IdPelanggan'] ?></td>
            <td><?= $item['NamaPengguna'] ?></td>
            <td><?= $item['NamaDepan'] ?></td>
            <td><?= $item['NamaBelakang'] ?></td>
            <td><?= $item['NoHP'] ?></td>
            <td><?= $item['Alamat'] ?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?= $base_url;?>pelanggan/edit/<?= $item['IdPelanggan'] ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= $base_url;?>pelanggan/delete/<?= $item['IdPelanggan'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>