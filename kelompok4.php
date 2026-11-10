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
                <li><a href="kelompok4.php#beranda_kelompok4">Beranda</a></li>
                <li><a href="kelompok4.php#gunung_810">List Gunung</a></li>
                <li><a href="kelompok4.php?page=registrasi#regis_821">Registrasi</a></li>
                <li><a href="kelompok4.php?page=logistik#logistik_810">List Logistik</a></li>
                <li><a href="kelompok4.php?page=bayar#pembayaran_808">Pembayaran</a></li>
                <li><a href="kelompok4.php#admin_808">Panel Admin</a></li>
            </ul>

        </div>
    </nav>


    <!-- HERO SECTION -->
    <header class="hero_kelompok4" id="beranda_kelompok4">
        <h1>Sistem Registrasi Pendakian Gunung Online</h1>
        <p>Aplikasi Manajemen Kuota Simaksi Mandiri oleh Kelompok 4</p>
    </header>

    <main class="container">

        <div class="main-content-stream-kelompok4">

            <section id="gunung_810">
                <?php include('gunung_810.php'); ?>
            </section>

            <section id="admin_808">
                <?php include('admin_808.php'); ?>
            </section>

        </div>

        <?php 
        if (isset($_GET['page'])) {
        if ($_GET['page'] == 'registrasi') {
            include("regis_821.php");
        } elseif ($_GET['page'] == 'logistik') {
            include("list_logistik_810.php");
        } elseif ($_GET['page'] == 'bayar') {
            include("pembayaran_808.php");
        }
        }

        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> PetaPendaki - Kelompok 4 (NIM: 808, 810, 821). All Rights Reserved.</p>
    </footer>

</body>
</html>
