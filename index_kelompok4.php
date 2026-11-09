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
    <link rel="stylesheet" href="./style/style_kelompok4.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">🗻 PetaPendaki</a>
            <ul class="navbar-menu">
                <li><a href="#beranda_kelompok4">Beranda</a></li>
                <li><a href="#gunung_810">List Gunung</a></li>
                <li><a href="#registrasi_821">Registrasi</a></li>
                <li><a href="#admin_808">Panel Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="hero_kelompok4" id="beranda_kelompok4">
        <h1>Sistem Registrasi Pendakian Gunung Online</h1>
        <p>Aplikasi Manajemen Kuota Simaksi Mandiri oleh Kelompok 4</p>
    </header>

    <main class="container">
        
        <!-- Notifikasi jika formulir disubmit -->

        <?php
        $success_message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_pendaki = htmlspecialchars($_POST['nama_pendaki']);
            $gunung_tujuan = htmlspecialchars($_POST['gunung_tujuan']);
            $tanggal = htmlspecialchars($_POST['tanggal_berangkat']);
            $jumlah_anggota = intval($_POST['jumlah_anggota']);
            
            $success_message = "<strong>Registrasi Berhasil!</strong><br>Terima kasih " . $nama_pendaki . ", rombongan Anda (" . $jumlah_anggota . " orang) telah terdaftar untuk pendakian " . $gunung_tujuan . " pada tanggal " . date('d F Y', strtotime($tanggal)) . ".";
        }
        ?>

        <?php if (!empty($success_message)): ?>
            <div class="alert_kelompok4">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <div class="grid-two-columns">
            
            <!-- LIST GUNUNG -->
            
            <?php
                include("gunung_810.php")
            ?>

            <!-- FORM REGISTRASI -->
            <?php
                include("regis_821.php")
            ?>

        </div>

        <!-- PANEL ADMINISTRATOR (Nama dan NIM Mahasiswa) -->
        <?php
            include("admin_808.php")
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> PetaPendaki - Kelompok 4 (NIM: 808, 810, 821). All Rights Reserved.</p>
    </footer>

</body>
</html>
