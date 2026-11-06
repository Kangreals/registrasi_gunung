
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pendakian</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<body>
    <!-- nav -->
        <nav class="navbar">
            <!-- PROFILE / LOGO -->
            <div class="profile">
                <a href="index.php">
                    <img src="image/gunung.jpg" alt="Profile">
                </a>
                <span class="profile-text">Username</span>
            </div>
            
            <!-- MENU -->
            <div class="menu">
                <!-- hamburgers -->
                    
                    <button class="hamburgers" id="hamburgers-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- menu -->
                    <div class="menu">
                        <ul class="nav-link" id="nav-menu">
                            <p id="hidden">Menu</p>
                            <li><a href="#beranda">Beranda</a></li>
                            <li><a href="#list-gunung">List Gunung</a></li>
                            <li><a href="#registrasi">Registrasi</a></li>
                            <li><a href="#profile">Profile</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    <div class="container">
        <!-- content -->
        <div class="content">
            <section id="beranda">
                <div class="banner">
                <!-- banner -->
                <img src="image/gunung.jpg" alt="banner">
                <span class="text-banner">
                    <h1>WELCOME</h1>
                    <p>Registrasi dan pendaftaran pendaki bukan sekadar formalitas, melainkan langkah krusial untuk keselamatan jiwa. Dengan mendaftarkan diri secara resmi, data logistik dan anggota rombongan akan tercatat di sistem pemantauan pihak pengelola, sehingga mempermudah proses evakuasi oleh tim SAR jika terjadi keadaan darurat di sepanjang jalur pendakian.</p>
                </span>
            </div>
            </section>

            <!-- content box -->
            <div class="content-box">

                <section class="profile" id="profile">
                    <div class="box">
                        <h1>Profile</h1>
                        <p>Anda bisa lihat history anda registrasi dan mendaki gunung mana saja melalui website ini, tetapi jika anda tidak registrasi melalui website ini
                            maka tidak akan tercatat disini. <br><br>
                        </p>

                        <input type="button" value="Lihat Profile &gt;&gt;&gt;" class="toggle-content">

                    </div>
                </section>

                <section class="list-gunung" id="list-gunung">
                    <div class="box">
                        <h1>List Gunung</h1>
                        <p>Indonesia memiliki lebih dari 1 disetiap provinsi maupun setiap pulau 
                            dan gunung di indonesia memiliki ketinggian dan keindahan yang berbeda beda di setiap gunungnya.
                            <br><br>
                        </p>

                        <input type="button" value="Selengkapnya &gt;&gt;&gt;" class="toggle-content">
                    </div>

                    <div class="isi-gunung">
                        <div class="card-gunung">

                        <!-- MERAPI -->
                            <div class="merapi">
                                <h2>Gunung Merapi</h2>
                                <img src="./image/gunung-merapi.jpg" alt="Gunung Merapi">
                                <p><strong>Gunung Merapi</strong> merupakan salah satu gunung berapi/aktif di indonesia Gunung Merapi berada di Jawa Tengah, dan gunung merapi juga bersebelahan dengan gunung merbabu</p>
                            </div>

                            <!-- PRAU -->
                            <div class="prau">
                                <h2>Gunung Prau</h2>
                                <img src="./image/gunung-prau.jpg" alt="Gunung Prau">
                                <p></p>
                            </div>

                            <!-- MERBABU -->
                            <div class="merbabu"></div>
                        </div>
                    </div>
                </section>

                <section id="registrasi">
                    <div class="box">
                        <h1>Registrasi</h1>
                        <p>Mengapa setiap naik gunung harus registrasi? Setiap pendaki gunung 
                            wajib melakukan <b>Registrasi</b>/<b>SIMAKSI</b> (Surat Izin Masuk Kawasan Konservasi)
                            demi keselamatan, pengendalian lingkungan, dan tata kelola pendakian. <br><br>
                        </p>

                        <div class="isi-tambahan">
                            <h3>Form Registrasi pendakian</h3>

                            <form action="registrasi.php" method="POST" class="form-registrasi">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap  :</label>
                                    <input type="text" id="nama" placeholder="Masukan Nama Lengkap" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal lahir :</label>
                                    <input type="date" id="tanggalLahir" name="tangal-lahir" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="4" placeholder="Masukan Alamat Lengkap Anda"></textarea>
                                </div>

                                <button type="submit" id="tangglLahir" name="tanggalLahir" class="btn-registrasi">Daftar</button>
                            </form>
                        </div>

                        <input type="button" value="Registrasi &gt;&gt;&gt;" name="btn-registrasi" class="toggle-content">

                    </div>
                </section>
            </div>

            <!-- end content -->
            <div class="end-content">
                <div class="end-banner"></div>
                    <hr><br>
                    <div class="isi-end">
                        <ul class="info">
                            <li>
                                <h2>INFORMASI</h2>
                            </li>
                            <li>
                                <span class="material-icons">call</span> 
                                <p>085123456789</p>
                            </li>
                            <li>
                                <span class="material-icons">mail</span>
                                <p>registrasi@webdesain.com</p>
                            </li>
                        </ul>

                        <ul class="link">
                            <li>
                                <h2>LINK TERKAIT</h2>
                            </li>
                            <li>
                                <a href="#"><p>Panduan Pendaftaran</p></a>
                            </li>
                            <li>
                                <a href="#"><p>Privacy Policy</p></a>
                            </li>
                        </ul>

                        <ul class="follow">
                            <li>
                                <h2>IKUTI KAMI</h2>
                            </li>
                            <li>
                                <span>
                                    <img src="image/instagram-icon.svg" alt="instagram-icon">
                                </span>
                                <p>Registrasi_pendakian</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- footer -->

            <footer class="footer">
                <p>&copy; 2026 Website Registrasi</p>
            </footer>

        </div>
    </?>

    <!-- script javascript -->
    <script src="script.js"></script>
    <!-- script javascript -->
</body>
</html>