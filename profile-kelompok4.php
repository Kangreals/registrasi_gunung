<?php 

$mahasiswa = [
    'vannesa' => [
        'nama' => 'vannesa',
        'nim' => '2513010808',
    ],

    'alvetta' => [
        'nama' => 'alvetta',
        'nim' => '2513010810',
    ],

    'syahrial' => [
        'nama' => 'Syahrial Ristanto Qolbi Al Hafizh',
        'nim' => '2513010821',
    ]
];

$MHS = 'kartu-mahasiswa';
?>

<!-- template -->

    <div class="mhs">
        <?php 
        foreach($mahasiswa as $MHS => $data_mhs) {
        ?>

        <div class="<?php echo $MHS; ?>">
            <h3>
                <strong><?php echo htmlspecialchars($data_mhs['nama']) ?></strong>
            </h3>
            <p><?php echo htmlspecialchars($data_mhs['nim']) ?></p>
        </div>

        <?php
        }
        ?>
    </div>