
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
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" rows="4" placeholder="Masukan Alamat Lengkap Anda"></textarea>
        </div>
        <div class="form-group">
            <label for="gunung">Pilih Gunung:</label>
            <select name="nama" id="gunung">
                <option value="">Pilih gunung yang akan di daftarkan</option>
                <option value="merapi">Merapi</option>
                <option value="prau">Prau</option>
                <option value="merbabu">Merbabu</option>
            </select>
        </div>
        <button type="submit" id="tanggalLahir" name="tanggalLahir" class="btn-registrasi">Daftar</button>
    </form>




    
<!-- NOTIFIKASI -->

<?php        
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

