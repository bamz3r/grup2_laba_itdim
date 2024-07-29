<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form class="form-signin" action="<?= $base_url; ?>login/submit" method="post" style="margin: auto;">
                        <img class="mb-4" src="<?= $public_url; ?>image/logo-long.png" alt="" width="100%" height="auto">
                        <h2 class="h3 mb-3 font-weight-normal">Silahkan masuk</h2>
                        <label for="login_type" class="sr-only">Jenis Pengguna</label>
                        <div class="radio mb-3">
                            <label>
                                <input type="radio" name="login_type" value="pengguna" required> Pengguna
                            </label>
                            <label class="ml-2">
                                <input type="radio" name="login_type" value="pelanggan"> Pelanggan
                            </label>
                            <label class="ml-2">
                                <input type="radio" name="login_type" value="supplier"> Supplier
                            </label>
                        </div>
                        <label for="username" class="sr-only">Nama Pengguna</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Nama Pengguna" required autofocus>
                        <label for="password" class="sr-only mt-4">Kata sandi</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Kata sandi" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                        <?php include_once $base_path."views/page_footer.php"; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include_once $base_path."views/bootstrap_footer.php"; ?>
</body>
</html>