<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Data Penjualan</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<h2 class="h2 mt-5">Data Penjualan</h2>
<a class="btn btn-success mb-3" href="<?= $base_url;?>penjualan/create">Tambah Penjualan</a>
<table class="table table-stripped table-bordered">
    <tr>
        <th>ID Penjualan</th>
        <th>ID Pengguna</th>
        <th>ID Barang</th>
        <th>ID Pelanggan</th>
        <th>Tanggal Pembelian</th>
        <th>Jumlah Penjualan</th>
        <th>Harga Jual</th>
    </tr>
    <?php foreach ($penjualan as $item): ?>
        <tr>
            <td><?= $item['IdPenjualan'] ?></td>
            <td><?= $item['IdPengguna'] ?></td>
            <td><?= $item['IdBarang'] ?></td>
            <td><?= $item['IdPelanggan'] ?></td>
            <td><?= $item['TanggalPembelian'] ?></td>
            <td><?= $item['JumlahPenjualan'] ?></td>
            <td><?= $item['HargaJual'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>