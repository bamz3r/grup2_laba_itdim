<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Edit Pengguna</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col-md-4">
        <h2 class="mt-5">Edit Pengguna</h2>


        <form action="<?= $base_url ?>pengguna/update/<?= $pengguna['IdPengguna'] ?>" method="POST" class="needs-validation" novalidate="">

            <div class="mb-3">
                <label for="IdPengguna">Id Pengguna</label>
                <input type="text" class="form-control" id="IdPengguna" name="IdPengguna" value="<?= $pengguna['IdPengguna'] ?>" placeholder="format BRXXX" required>
                <div class="invalid-feedback">
                    Harap isi Id Pengguna.
                </div>
            </div>
            
            <div class="mb-3">
                <label for="IdAkses">Id Akses</label>
                <select class="custom-select d-block w-100" id="IdAkses" name="IdAkses" required>
                    <option value="">Pilih...</option>
                    <?php foreach ($data['hakakses_list'] as $item): ?>
                        <option value="<?= $item['IdAkses'] ?>"<?= $item['IdAkses'] == $pengguna['IdAkses'] ? " selected" : "" ?>><?= $item['NamaAkses'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Harap pilih Id Akses
                </div>
            </div>
            

            <div class="mb-3">
                <label for="NamaPengguna">Nama Pengguna</label>
                <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna" value="<?= $pengguna['NamaPengguna'] ?>" placeholder="format BRXXX" required>
                <div class="invalid-feedback">
                    Harap isi Nama Pengguna.
                </div>
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" value="" placeholder="Tidak Diubah" required>
                <div class="invalid-feedback">
                    Harap isi Password.
                </div>
            </div>
            
            <div class="mb-3">
                <label for="NamaDepan">Nama Depan</label>
                <input type="text" class="form-control" id="NamaDepan" name="NamaDepan" placeholder="" value="<?= $pengguna['NamaDepan'] ?>" required>
                <div class="invalid-feedback">
                    Harap masukan Nama Depan
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaBelakang">Nama Belakang</label>
                <input type="text" class="form-control" id="NamaBelakang" name="NamaBelakang" placeholder="" value="<?= $pengguna['NamaBelakang'] ?>" required>
                <div class="invalid-feedback">
                    Harap masukan Nama Belakang
                </div>
            </div>

            <div class="mb-3">
                <label for="NoHP">NO HP</label>
                <input type="text" class="form-control" id="NoHP" name="NoHP" value="<?= $pengguna['NoHP'] ?>" placeholder="format BRXXX" required>
                <div class="invalid-feedback">
                    Harap isi NO HP.
                </div>
            </div>

            <div class="mb-3">
                <label for="Alamat">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $pengguna['Alamat'] ?>" placeholder="format BRXXX" required>
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