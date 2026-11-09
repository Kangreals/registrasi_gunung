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
            <section id="gunung_810" class="card_810">
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
