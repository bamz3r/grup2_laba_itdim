<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Profit and Loss Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<div class="container">
    <h2 class="mt-5">Profit and Loss Dashboard</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Stok Tersedia</th>
                <th>Total Jumlah Penjualan</th>
                <th>Rata-rata Harga Jual</th>
                <th>Rata-rata Harga Beli</th>
                <th>Keuntungan</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($labarugi as $item): ?>
                    <tr>
                        <td><?= $item['idBarang'] ?></td>
                        <td><?= $item['NamaBarang'] ?></td>
                        <td><?= $item['StokTersedia'] ?></td>
                        <td><?= number_format($item['TotalJumlahPenjualan'],0,",","."); ?></td>
                        <td><?= number_format($item['AvgHargaJual'],0,",","."); ?></td>
                        <td><?= number_format($item['AvgHargaBeli'],0,",","."); ?></td>
                        <td><?= number_format($item['Keuntungan'],0,",","."); ?></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
