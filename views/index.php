<!DOCTYPE html>
<html>
<head>
    <?php include_once $base_path."views/bootstrap_header.php"; ?>
    <title>Dashboard</title>
</head>
<body>
<?php include_once $base_path."views/page_header.php"; ?>
<div class="container">
    <h3 class="mt-5 mb-5 text-center">Halo, <?= $user['NamaPengguna'];?></h3>
    <p class="text-center">Anda login sebagai <b><?= ucfirst($login_type);?></b></p>
    <?php include_once $base_path."views/page_footer.php"; ?>
    <?php include_once $base_path."views/bootstrap_footer.php"; ?>
</div>
</body>
</html>