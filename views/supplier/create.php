<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Supplier</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col">
        <div class="row">
            <h2 class="mt-5">Tambah Supplier</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="<?= $base_url ?>supplier/store" method="POST">
                <div class="mb-3">
                    <label>ID Supplier:</label>
                    <input class="form-control" type="text" name="IdSupplier" placeholder="format SPXXX" required><br>
                </div>
                <div class="mb-3">
                    <label>Nama Supplier:</label>
                    <input class="form-control" type="text" name="NamaSupplier" required><br>
                </div>
                <div class="mb-3">
                    <label>Nama Pengguna:</label>
                    <input class="form-control" type="text" name="NamaPengguna" required><br>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label>Alamat:</label>
                    <input class="form-control" type="text" name="Alamat" required><br>
                </div>
                <div class="mb-3">
                    <label>No HP:</label>
                    <input class="form-control" type="text" name="NoTelp" required><br>
                </div>
            </div>
        </div>
        <div class="row">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
