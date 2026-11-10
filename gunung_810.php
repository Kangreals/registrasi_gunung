<?php
// Data List Gunung
$mountains = [
    [
        'nama' => 'Gunung Rinjani',
        'lokasi' => 'Lombok, NTB',
        'tinggi' => '3.726 mdpl',
        'tarif' => 150000,
        'status' => 'Buka'
    ],
    [
        'nama' => 'Gunung Semeru',
        'lokasi' => 'Lumajang, Jawa Timur',
        'tinggi' => '3.676 mdpl',
        'tarif' => 75000,
        'status' => 'Tutup (Aktivitas Meningkat)'
    ],
    [
        'nama' => 'Gunung Merbabu',
        'lokasi' => 'Boyolali, Jawa Tengah',
        'tinggi' => '3.142 mdpl',
        'tarif' => 50000,
        'status' => 'Buka'
    ],
    [
        'nama' => 'Gunung Gede',
        'lokasi' => 'Cianjur, Jawa Barat',
        'tinggi' => '2.958 mdpl',
        'tarif' => 65000,
        'status' => 'Buka'
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
            <section id="gunung_tujuan_810" class="card_810">
                <h2 class="section-title_810">Daftar Gunung Tersedia</h2>
                <p style="color: var(--text-light); margin-bottom: 15px;">Pilih destinasi pendakian Anda. Pastikan status jalur dalam keadaan operasional (Buka).</p>
                
                <div class="table-responsive_810">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Gunung</th>
                                <th>Lokasi</th>
                                <th>Ketinggian</th>
                                <th>Tarif SIMAKSI</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mountains as $m): ?>
                                <tr>
                                    <td><strong><?php echo $m['nama']; ?></strong></td>
                                    <td><?php echo $m['lokasi']; ?></td>
                                    <td><?php echo $m['tinggi']; ?></td>
                                    <td>Rp <?php echo number_format($m['tarif'], 0, ',', '.'); ?></td>
                                    <td>
                                        <span class="badge <?php echo (strpos($m['status'], 'Buka') !== false) ? 'badge-success' : 'badge-danger'; ?>">
                                            <?php echo $m['status']; ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
