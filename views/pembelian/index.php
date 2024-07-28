<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Pembelian</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Data Pembelian</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>pembelian/create">Tambah Pembelian</a>
<table class="table table-stripped table-bordered">
    <tr>
        <th>ID Pembelian</th>
        <th>ID Pengguna</th>
        <th>ID Supplier</th>
        <th>ID Barang</th>
        <th>Tanggal Pembelian</th>
        <th>Jumlah Pembelian</th>
        <th>Harga Beli</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pembelian as $item): ?>
        <tr>
            <td><?= $item['IdPembelian'] ?></td>
            <td><?= $item['IdPengguna'] ?></td>
            <td><?= $item['IdSupplier'] ?></td>
            <td><?= $item['IdBarang'] ?></td>
            <td><?= $item['TanggalPembelian'] ?></td>
            <td><?= $item['JumlahPembelian'] ?></td>
            <td><?= $item['HargaBeli'] ?></td>
            <td>
                <a class="btn btn-info btn-sm" href="<?= $base_url;?>pembelian/edit/<?= $item['IdPembelian'] ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?= $base_url;?>pembelian/delete/<?= $item['IdPembelian'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>