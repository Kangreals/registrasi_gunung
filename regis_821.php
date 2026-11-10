<!-- data gunung -->
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


    <?php 
        if($_GET['page']=="regis_821") {
            include("regis_821.php");
        } elseif ($_GET['page'] == "logistik_810") {
            include("list_logistik_821.php");
        } elseif ($_GET['page'] == "pembayaran_808") {
            include("pembayaran_808.php");
        } else {
            echo '<script>console.log("page tidak ditemukan")</script>';
        }
        ?>


<link rel="stylesheet" href="./style/kelompok4.css">

<!-- Notifikasi jika formulir disubmit -->

        <?php
        $success_message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_pendaki = htmlspecialchars($_POST['nama_pendaki_821']);
            $gunung_tujuan = htmlspecialchars($_POST['gunung_tujuan_821']);
            $tanggal = htmlspecialchars($_POST['tanggal_berangkat_821']);
            $jumlah_anggota = intval($_POST['jumlah_anggota_821']);
            
            $success_message = "<strong>Registrasi Berhasil!</strong><br>Terima kasih " . $nama_pendaki . ", rombongan Anda (" . $jumlah_anggota . " orang) telah terdaftar untuk pendakian " . $gunung_tujuan . " pada tanggal " . date('d F Y', strtotime($tanggal)) . ".";
        }
        ?>

        <?php if (!empty($success_message)): ?>
            <div class="alert_kelompok4">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

            <section id="regis_821" class="card_821">
                <h2 class="section-title">Formulir Pendaftaran</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?page=regis_821#alert" method="POST">
                    
                    <div class="form-group_821">
                        <label for="nama_pendaki_821">Nama Ketua Rombongan</label>
                        <input type="text" id="nama_pendaki_821" name="nama_pendaki_821" class="form-control_821" required placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="form-group_821">
                        <label for="gunung_tujuan_821">Gunung Tujuan</label>
                        <select id="gunung_tujuan_821" name="gunung_tujuan_821" class="form-control_821" required>
                            <option value="" disabled selected>-- Pilih Gunung --</option>
                            <?php foreach ($mountains as $m): ?>
                                <?php if (strpos($m['status'], 'Buka') !== false): ?>
                                    <option value="<?php echo $m['nama']; ?>"><?php echo $m['nama']; ?> (<?php echo $m['tinggi']; ?>)</option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group_821">
                        <label for="tanggal_berangkat_821">Tanggal Keberangkatan</label>
                        <input type="date" id="tanggal_berangkat_821" name="tanggal_berangkat_821" class="form-control_821" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>

                    <div class="form-group_821">
                        <label for="jumlah_anggota_821">Jumlah Anggota Rombongan (Termasuk Ketua)</label>
                        <input type="number" id="jumlah_anggota_821" name="jumlah_anggota_821" class="form-control_821" min="1" max="10" required placeholder="Maks. 10 orang">
                    </div>

                    <button type="submit" class="btn_821">Kirim Pendaftaran</button>
                </form>
            </section>