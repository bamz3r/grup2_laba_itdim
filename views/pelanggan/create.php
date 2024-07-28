<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Pelanggan</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col-md-4">
        <h2 class="mt-5">Tambah Pelanggan</h2>

        <form action="<?= $base_url ?>pelanggan/store" method="POST" class="needs-validation" novalidate="">

            <div class="mb-3">
                <label for="IdPelanggan">ID Pelanggan</label>
                <input type="text" class="form-control" id="IdPelanggan" name="IdPelanggan" required>
                <div class="invalid-feedback">
                    Harap isi ID Pelanggan.
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaPengguna">Nama Pengguna</label>
                <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna" required>
                <div class="invalid-feedback">
                    Harap isi Nama Pengguna.
                </div>
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" required>
                <div class="invalid-feedback">
                    Harap isi Password.
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaDepan">Nama Depan</label>
                <input type="text" class="form-control" id="NamaDepan" name="NamaDepan" required>
                <div class="invalid-feedback">
                    Harap isi Nama Depan.
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaBelakang">Nama Belakang</label>
                <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang" required>
                <div class="invalid-feedback">
                    Harap isi Nama Belakang.
                </div>
            </div>

            <div class="mb-3">
                <label for="NoHP">No HP</label>
                <input type="text" class="form-control" id="NoHP" name="NoHP" required>
                <div class="invalid-feedback">
                    Harap isi No HP.
                </div>
            </div>

            <div class="mb-3">
                <label for="Alamat">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" required>
                <div class="invalid-feedback">
                    Harap isi Alamat.
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
        </form>
    </div>
</div>
<?php include_once $base_path."views/page_footer.php"; ?>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>
