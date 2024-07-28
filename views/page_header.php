<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?= $public_url; ?>image/logo-long.png" width="100" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?= $base_url;?>">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $base_url;?>barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>penjualan">Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>pembelian">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>pengguna">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>supplier">Supplier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>pelanggan">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url;?>pelanggan">Lap. Laba Rugi</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $user['NamaPengguna'];?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!--<a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>-->
                        <a class="dropdown-item" href="<?= $base_url;?>login/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">