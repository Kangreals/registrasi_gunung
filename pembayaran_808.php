<?php
// Validasi pengiriman data internal/pembayaran jika diperlukan
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

    <?php
        $success_message = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kode_pendaftaran = htmlspecialchars($_POST['kode_pendaftaran_808']);
            $metode_pembayaran = htmlspecialchars($_POST['metode_bayar_808']);
            $nominal_transfer = htmlspecialchars($_POST['nominal_transfer_808']);
            
            $success_message = "ID: " . $kode_pendaftaran . " telah lunas pembayaran sebesar Rp " . $nominal_transfer . " dengan metode pembayaran " . $metode_pembayaran . ".";
        }
        ?>

        <?php if (!empty($success_message)): ?>
            <div class="alert_kelompok4">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

<link rel="stylesheet" href="./style/kelompok4.css">
<section id="pembayaran_808" class="card_810" style="grid-column: span 2;">
    <h2 class="section-title">Formulir Konfirmasi Pembayaran SIMAKSI</h2>
    <p style="color: var(--text-light); margin-bottom: 20px;">
        Silakan unggah bukti transfer perizinan pendakian Anda. Pastikan nominal sesuai dengan tarif gunung tujuan yang dipilih.
    </p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?page=pembayaran_821#alert" method="POST" enctype="multipart/form-data">
        <div class="form-group_821">
            <label for="kode_pendaftaran_808">Kode / ID Pendaftaran</label>
            <input type="text" id="kode_pendaftaran_808" name="kode_pendaftaran_808" class="form-control_821" required placeholder="Contoh: REG-2513010808">
        </div>

        <div class="form-group_821">
            <label for="metode_bayar_808">Metode Transaksi</label>
            <select id="metode_bayar_808" name="metode_bayar_808" class="form-control_821" required>
                <option value="" disabled selected>-- Pilih Metode Pembayaran --</option>
                <option value="Transfer Mandiri">Transfer Bank Mandiri (VA)</option>
                <option value="Transfer BCA">Transfer Bank BCA</option>
                <option value="QRIS">QRIS PetaPendaki Statis</option>
                <option value="E-Wallet">E-Wallet (Dana / OVO / GoPay)</option>
            </select>
        </div>

        <div class="form-group_821">
            <label for="nominal_transfer_808">Nominal yang Ditransfer (Rp)</label>
            <input type="number" id="nominal_transfer_808" name="nominal_transfer_808" class="form-control_821" required placeholder="Contoh: 150000">
        </div>

        <div class="form-group_821">
            <label for="bukti_tf_808">Unggah Berkas Bukti Transfer (Gambar/PDF)</label>
            <input type="file" id="bukti_tf_808" name="bukti_tf_808" class="form-control_821" required>
        </div>

        <button type="submit" name="action_pembayaran_808" class="btn_821">Konfirmasi Pembayaran</button>
    </form>
</section>
