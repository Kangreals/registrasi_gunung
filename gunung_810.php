<?php 
$gunung = [
    "merapi" => [
        "nama" => "Gunung Merapi",
        "lokasi" => "Yogyakarta",
        "deskripsi" => "Gunung Merapi merupakan salah satu gunung api aktif di Indonesia.",
        "gambar" => "./image/gunung-merapi.jpg"
    ],

    "prau" => [
        "nama" => "Gunung Prau",
        "lokasi" => "Jawa Tengah",
        "deskripsi" => "Gunung Prau terkenal dengan pemandangan sunrise yang indah.",
        "gambar" => "./image/gunung-prau.jpg"
    ],

    "merbabu" => [
        "nama" => "Gunung Merbabu",
        "lokasi" => "Jawa Tengah",
        "deskripsi" => "Gunung Merbabu merupakan salah satu gunung yang memiliki pemandangan yang indah.",
        "gambar" => "./image/gunung-merbabu.jpg"
    ]
];
?>



<!-- template -->
<div class="isi-gunung">
    <div class="card-gunung" id="card">
        <?php 
            foreach ($gunung as $key => $data) {
        ?>

            <div class="<?php echo $key;?>">
                <h2>
                    <strong><?php echo htmlspecialchars($data['nama']); ?></strong>
                </h2>
                <img src="<?php echo htmlspecialchars($data['gambar']); ?>" alt="<?php echo htmlspecialchars($data['nama']); ?>">
                <p><?php echo htmlspecialchars($data['deskripsi']) ?></p>
            </div>

        <?php
        }?>
    </div>
</div>