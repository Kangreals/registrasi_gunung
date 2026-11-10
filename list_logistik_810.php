<?php
// Validasi data manifes perlengkapan kelompok
?>


<!-- template -->

    <?php 
        if($_GET['page']=='regis_821') {
            include('regis_821.php');
        } elseif ($_GET['page'] == 'logistik_810') {
            include('list_logistik_821.php');
        } elseif ($_GET['page'] == 'pembayaran_808') {
            include('pembayaran_808.php');
        } else {
            echo '<script>console.log("page tidak ditemukan")</script>';
        }
        ?>

    <!-- Notifikasi jika formulir disubmit -->

        <?php
        $success_message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlah_tenda = htmlspecialchars($_POST['jumlah_tenda_810']);
            $jumlah_kompor = htmlspecialchars($_POST['jumlah_kompor_810']);
            $p3k_kit = htmlspecialchars($_POST['p3k_kit_810']);
            $durasi_logistik = intval($_POST['durasi_logistik_810']);
            
            $success_message = "<strong>Terima Kasih</strong>, anda membawa <i>tenda</i> (" . $jumlah_tenda . "), <i>Kompor</i> (" . $jumlah_kompor . "), <i>p3k kit</i> (" . $p3k_kit . "), <i>logistik untuk selama</i> (" . $durasi_logistik . ") hari";
        }
        ?>

        <?php if (!empty($success_message)): ?>
            <div class="alert_kelompok4">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

<link rel="stylesheet" href="./style/kelompok4.css">
<section id="logistik_810" class="card_810" style="grid-column: span 2;">
    <h2 class="section-title" style="border-bottom-color: var(--accent-color);">Manifes Manajemen Logistik & Perlengkapan</h2>
    <p style="color: var(--text-light); margin-bottom: 20px;">
        Demi standar keselamatan operasional di area perhutanan, Anda wajib mendeklarasikan perlengkapan kelompok bawaan sebelum divalidasi oleh petugas Ranger.
    </p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?page=list_logistik_810#alert" method="POST">
        <div class="form-group_821">
            <label for="jumlah_tenda_810">Jumlah Tenda Kelompok (Min. Kapasitas 2 Orang)</label>
            <input type="number" id="jumlah_tenda_810" name="jumlah_tenda_810" class="form-control_821" min="1" required placeholder="Jumlah unit tenda bawaan">
        </div>

        <div class="form-group_821">
            <label for="jumlah_kompor_810">Jumlah Kompor & Cadangan Bahan Bakar (Gas/Parafin)</label>
            <input type="number" id="jumlah_kompor_810" name="jumlah_kompor_810" class="form-control_821" min="1" required placeholder="Jumlah set alat masak">
        </div>

        <div class="form-group_821">
            <label for="p3k_kit_810">Ketersediaan Kotak Medis / P3K Kelompok</label>
            <select id="p3k_kit_810" name="p3k_kit_810" class="form-control_821" required>
                <option value="" disabled selected>-- Pilih Status Kelengkapan Obat --</option>
                <option value="Lengkap">Bawa Standard Lengkap (Miteela, Pembalut, Obat Pribadi, Antiseptik)</option>
                <option value="Kurang">Membawa Seadanya (Wajib disewa/dilengkapi di Pos Pemeriksaan)</option>
            </select>
        </div>

        <div class="form-group_821">
            <label for="durasi_logistik_810">Estimasi Ketahanan Logistik Makanan (Hari)</label>
            <input type="number" id="durasi_logistik_810" name="durasi_logistik_810" class="form-control_821" min="1" max="14" required placeholder="Contoh: 3">
        </div>

        <button type="submit" name="action_logistik_810" class="btn_821" style="background-color: var(--accent-color);">Simpan Manifes Logistik</button>
    </form>
</section>
