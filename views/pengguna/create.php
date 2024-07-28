<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Pengguna</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col-md-4">
        <h2 class="mt-5">Tambah Pengguna</h2>

        <form action="<?= $base_url ?>pengguna/store" method="POST" class="needs-validation" novalidate="">

    
            <div class="mb-3">
                <label for="IdPengguna">ID Pengguna</label>
                <input type="text" class="form-control" id="IdPengguna" name="IdPengguna" value="" placeholder="" required>
                <div class="invalid-feedback">
                    Harap masukan ID Pengguna
                </div>
            </div>

            <div class="mb-3">
                <label for="IdAkses">Id Akses </label>
                <select class="custom-select d-block w-100" id="IdAkses" name="IdAkses" required>
                    <option value="">Pilih...</option>
                    <?php foreach ($data['hakakses_list'] as $item): ?>
                    <option value="<?= $item['IdAkses'] ?>"><?= $item['NamaAkses'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Harap pilih Id Akses
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaPengguna">Nama Pengguna</label>
                <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukanNamaPengguna
                </div>
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="text" class="form-control" id="Password" name="Password" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukan Password
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaDepan">Nama Depan</label>
                <input type="text" class="form-control" id="NamaDepan" name="NamaDepan" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukan Nama Depan
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaBelakang">Nama Belakang</label>
                <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukan Nama Belakang
                </div>
            </div>

            <div class="mb-3">
                <label for="NoHP">No HP</label>
                <input type="text" class="form-control" id="NoHP" name="NoHP" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukan No HP
                </div>
            </div>

            <div class="mb-3">
                <label for="Alamat">Alamat</label>
                <textarea class="form-control" id="Alamat" name="Alamat" placeholder="" required></textarea>
                <div class="invalid-feedback">
                    Harap masukan Alamat
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