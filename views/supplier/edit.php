<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Supplier</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col">
        <div class="row">
            <h2 class="mt-5">Edit Supplier</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
        
                <form action="<?= $base_url ?>supplier/update/<?= $supplier['IdSupplier'] ?>" method="POST">
                    <div class="mb-3">
                        <label>ID Supplier:</label>
                        <input type="text" class="form-control" name="IdSupplier" value="<?= $supplier['IdSupplier'] ?>" readonly><br>
                    </div>
                    <div class="mb-3">
                        <label>Nama Supplier:</label>
                        <input type="text" class="form-control" name="NamaSupplier" value="<?= $supplier['NamaSupplier'] ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label>Nama Pengguna:</label>
                        <input type="text" class="form-control" name="NamaPengguna" value="<?= $supplier['NamaPengguna'] ?>"><br>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="text" class="form-control" name="Password" value="" placeholder="tidak diubah" autocomplete="no" readonly><br>
                    </div>
                    <div class="mb-3">
                        <label>Alamat:</label>
                        <input type="text" class="form-control" name="Alamat" value="<?= $supplier['Alamat'] ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label>No HP:</label>
                        <input type="text" class="form-control" name="NoTelp" value="<?= $supplier['NoTelp'] ?>"><br>
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