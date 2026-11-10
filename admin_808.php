<?php
// Data Anggota Kelompok (Admin) berdasarkan NIM yang diminta
$admins = [
    [
        'nim' => '2513010808',
        'nama' => 'Vannesa Alma Azahra',
        'peran' => 'Super Admin / Database Administrator',
        'email' => 'admin808@pendakian4.com'
    ],
    [
        'nim' => '2513010810',
        'nama' => 'Alvetta Wahyu Anggara',
        'peran' => 'Web Developer / System Analyst',
        'email' => 'admin810@pendakian4.com'
    ],
    [
        'nim' => '2513010821',
        'nama' => 'Syahrial Ristatanto Qolbi Al Hafizh',
        'peran' => 'UI/UX Designer / Security Operations',
        'email' => 'admin821@pendakian4.com'
    ]
];
?>

<!-- template -->

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


        <link rel="stylesheet" href="./style/kelompok4.css">
        <section id="admin_808" class="admin-section_808">
            <h2 class="section-title" style="border-bottom-color: var(--accent-color);">Panel Administrator (Kelompok 4)</h2>
            <p style="color: var(--text-light);">Hak akses kelola data validasi perizinan pendaki dipegang oleh tim admin terdaftar di bawah ini:</p>
            
            <div class="admin-grid_808">
                <?php foreach ($admins as $admin): ?>
                    <div class="admin-card_808">
                        <span class="nim-badge_808">NIM: <?php echo $admin['nim']; ?></span>
                        <h4><?php echo $admin['nama']; ?></h4>
                        <p style="font-size: 14px; font-weight: 600; color: var(--accent-color); margin-bottom: 5px;">
                            <?php echo $admin['peran']; ?>
                        </p>
                        <p style="font-size: 13px; color: var(--text-light);">
                            📧 <?php echo $admin['email']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>