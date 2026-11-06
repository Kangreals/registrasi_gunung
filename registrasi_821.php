
<!-- template -->

    <form action="" method="POST" class="form-registrasi">
        <div class="form-group">
            <label for="nama">Nama Lengkap  :</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan Nama Lengkap" required>
        </div>
        <div class="form-group">
            <label for="tanggalLahir">Tanggal lahir :</label>
            <input type="date" id="tanggalLahir" name="tanggalLahir" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="4" placeholder="Masukan Alamat Lengkap Anda"></textarea>
        </div>
        <button type="submit" id="tanggalLahir" name="tanggalLahir" class="btn-registrasi">Daftar</button>
    </form>

<?php        
        // NOTIFIKASI
        $pesan = '';
        $pesan_error = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nama = $_POST['nama'] ?? '';
            $tanggalLahir = $_POST['tanggalLahir'] ?? '';
            $alamat = $_POST['alamat'] ?? '';

            if (empty($nama) || empty($tanggalLahir) || empty($alamat)) {
                $pesan_error = "Semua kolom harus diisi!";
            } else {
                $pesan_sukses = "Registrasi berhasil! || Selamat Datang <strong>$nama</strong>.";
            }
        }
?>


<!-- Notifikasi Error  -->

<?php if (!empty($pesan_error)): ?>
    <div class="pesan-error"><?php echo $pesan_error; ?></div>
<?php endif; ?>

<!-- Notifikasi Sukses -->
<?php if (!empty($pesan_sukses)): ?>
    <div class="pesan-sukses"><?php echo $pesan_sukses; ?></div>
<?php endif; ?> 