<?php
// Data Anggota Kelompok (Admin) berdasarkan NIM yang diminta
$admins = [
    [
        'nim' => '808',
        'nama' => 'Rangga Wijaya',
        'peran' => 'Super Admin / Database Administrator',
        'email' => 'admin808@pendakian4.com'
    ],
    [
        'nim' => '810',
        'nama' => 'Siti Nurhaliza',
        'peran' => 'Web Developer / System Analyst',
        'email' => 'admin810@pendakian4.com'
    ],
    [
        'nim' => '2513010821',
        'nama' => 'Syahrial Ristatanto Qolbi Al Hafizh',
        'peran' => 'UI/UX Designer / Security Operations',
        'email' => 'admin821@pendakian4.com'
    ]
];
?>

<!-- template -->
        <section id="admin_808" class="admin-section_808">
            <h2 class="section-title" style="border-bottom-color: var(--accent-color);">Panel Administrator (Kelompok 4)</h2>
            <p style="color: var(--text-light);">Hak akses kelola data validasi perizinan pendaki dipegang oleh tim admin terdaftar di bawah ini:</p>
            
            <div class="admin-grid_808">
                <?php foreach ($admins as $admin): ?>
                    <div class="admin-card_808">
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