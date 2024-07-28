<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Tambah Barang</title>
</head>
<body class="d-flex flex-column h-100">
<?php include_once $base_path."views/page_header.php"; ?>
<div class="row">
    <div class="col-md-4">
        <h2 class="mt-5">Tambah Barang</h2>

        <form action="barang/store" method="POST" class="needs-validation" novalidate="">
            <div class="mb-3">
                <label for="IdBarang">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">BR</span>
                    </div>
                    <input type="text" class="form-control" id="IdBarang" name="IdBarang" placeholder="XXXXX" value="" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                        Harap isi Id Barang.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="IdPengguna">Id Pengguna </label>
                <select class="custom-select d-block w-100" id="IdPengguna" name="IdPengguna" required>
                    <option value="">Pilih...</option>
                    <?php foreach ($data['pengguna_list'] as $item): ?>
                    <option value="<?= $item['IdPengguna'] ?>"><?= $item['NamaDepan'] ?> <?= $item['NamaBelakang'] ?> </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Harap pilih pengguna
                </div>
            </div>

            <div class="mb-3">
                <label for="NamaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="" placeholder="" required>
                <div class="invalid-feedback">
                    Harap masukan nama baarang
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Keterangan</label>
                <textarea class="form-control" id="Keterangan" name="Keterangan" placeholder="" required></textarea>
                <div class="invalid-feedback">
                    Harap masukan keterangan
                </div>
            </div>

            <div class="mb-3">
                <label for="Satuan">Satuan</label>
                <input type="text" class="form-control" id="Satuan" name="Satuan" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Harap masukan satuan yang sesuai
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