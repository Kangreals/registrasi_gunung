<?php
// Data Anggota Kelompok (Admin) berdasarkan NIM yang diminta
$admins = [
    [
        'nim' => '2513010808',
        'nama' => 'Vannesa Alma Azahra',
        'peran' => 'Super Admin / Database Administrator',
        'email' => 'admin808@pendakian4.com',
        'image' => './image/vannesa.jpg'
    ],
    [
        'nim' => '2513010810',
        'nama' => 'Alvetta Wahyu Anggara',
        'peran' => 'Web Developer / System Analyst',
        'email' => 'admin810@pendakian4.com',
        'image' => './image/alvetta.jpg'
    ],
    [
        'nim' => '2513010821',
        'nama' => 'Syahrial Ristatanto Qolbi Al Hafizh',
        'peran' => 'UI/UX Designer / Security Operations',
        'email' => 'admin821@pendakian4.com',
        'image' => './image/syahrial.jpg'
    ]
];
?>

<!-- template -->

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP -->
        
        <link rel="stylesheet" href="./style/kelompok4.css">
        <section id="admin_808" class="admin-section_808">
            <h2 class="section-title" style="border-bottom-color: var(--accent-color);">Panel Administrator (Kelompok 4)</h2>
            <p style="color: var(--text-light);">Hak akses kelola data validasi perizinan pendaki dipegang oleh tim admin terdaftar di bawah ini:</p>
            
            <div class="admin-grid_808">
                <?php foreach ($admins as $admin): ?>
                    <div class="admin-card_808">
                        <img src="<?php echo $admin['image'] ?>" 
                        class="img-<?php echo $admin['nim'] ?> <?php 
                            // Dibuat satu per satu untuk setiap NIM
                            if ($admin['nim'] === '2513010808') {
                                echo 'rounded-circle border border-secondary shadow-sm'; // Bulat untuk Vannesa
                            } 
                            
                            if ($admin['nim'] === '2513010810') {
                                echo 'rounded-circle border border-secondary shadow-sm'; // Bulat untuk Alvetta
                            } 
                            
                            if ($admin['nim'] === '2513010821') {
                                echo 'rounded-3 border border-secondary shadow-sm'; // Kotak untuk Syahrial
                            } 
                        ?>" 
                        style="width: 150px; height: 150px; object-fit: cover;">


                        <br>
                        <span class="nim-badge_808">NIM: <?php echo $admin['nim']; ?></span>
                        <h4><?php echo $admin['nama']; ?></h4>
                        <p style="font-size: 14px; font-weight: 600; color: var(--accent-color); margin-bottom: 5px;">
                            <?php echo $admin['peran']; ?>
                        </p>
                        <p style="font-size: 13px; color: var(--text-light);">
                            📧 <?php echo $admin['email']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>