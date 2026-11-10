<?php
// Set timezone
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pendakian Online - Kelompok 4</title>
    <link rel="stylesheet" href="./style/kelompok4.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">🗻 PetaPendaki</a>
            <ul class="navbar-menu">
                <li><a href="kelompok4.php?page=kelompok">Beranda</a></li>
                <li><a href="gunung_810.php?page=gunung_810">List Gunung</a></li>
                <li><a href="regis_821.php?page=registrasi_821">Registrasi</a></li>
                <li><a href="list_logistik_810.php?page=list_logistik_810">List Logistik</a></li>
                <li><a href="pembayaran_808.php?page=registrasi_808">Registrasi</a></li>
                <li><a href="admin_808.php?page=admin_808">Panel Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="hero_kelompok4" id="beranda_kelompok4">
        <h1>Sistem Registrasi Pendakian Gunung Online</h1>
        <p>Aplikasi Manajemen Kuota Simaksi Mandiri oleh Kelompok 4</p>
    </header>

    <main class="container">

        <div class="grid-two-columns">
            
            <?php 
                if($_GET) {
                if($_GET["page"]=="gunung_810") {
                    include("gunung_810.php");
                } else if($_GET["page"]=="regis_821") {
                    include("regis_821.php");
                } else if($_GET["page"]=="admin_808") {
                    include("admin_808.php");
                } else if($_GET["page"]=="kelompok4") {
                    include("kelompok4.php");
                } else {
                    echo "halaman tidak ditemukan";
                }
                }
            ?>

        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> PetaPendaki - Kelompok 4 (NIM: 808, 810, 821). All Rights Reserved.</p>
    </footer>

</body>
</html>
