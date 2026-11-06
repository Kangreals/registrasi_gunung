<?php
$pesan = '';
$pesan_error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['nama'] ?? '';
    $tanggalLahir = $_POST['tanggal_lahir'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    if (empty($nama)) || (empty($tanggalLahir)) || (empty($alamat)) {
        $pesan_error = "Semua kolom harus diisi!";
    } else {
        $pesan_sukses = "Registrasi berhasil! \nSelamat Datang <strong>$nama</strong>.";
}
}



?>

<!-- Notifikasi Error -->

<?php if (!empty($pesan_error)): ?>
    <div class="pesan-error"><?php echo $pesan_error; ?></div>
<?php endif; ?>

<!-- Notifikasi Sukses -->
<?php if (!empty($pesan_sukses)): ?>
    <div class="pesan-sukses"><?php echo $pesan_sukses; ?></div>
<?php endif; ?>
