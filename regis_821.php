

<!-- template -->
<section id="registrasi_821" class="card_821">
                <h2 class="section-title">Formulir Pendaftaran</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>#registrasi" method="POST">
                    
                    <div class="form-group_821">
                        <label for="nama_pendaki">Nama Ketua Rombongan</label>
                        <input type="text" id="nama_pendaki" name="nama_pendaki_821" class="form-control_821" required placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="form-group_821">
                        <label for="gunung_tujuan">Gunung Tujuan</label>
                        <select id="gunung_tujuan" name="gunung_tujuan_808" class="form-control_821" required>
                            <option value="" disabled selected>-- Pilih Gunung --</option>
                            <?php foreach ($mountains as $m): ?>
                                <?php if (strpos($m['status'], 'Buka') !== false): ?>
                                    <option value="<?php echo $m['nama']; ?>"><?php echo $m['nama']; ?> (<?php echo $m['tinggi']; ?>)</option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group_821">
                        <label for="tanggal_berangkat">Tanggal Keberangkatan</label>
                        <input type="date" id="tanggal_berangkat" name="tanggal_berangkat_810" class="form-control_821" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>

                    <div class="form-group_821">
                        <label for="jumlah_anggota">Jumlah Anggota Rombongan (Termasuk Ketua)</label>
                        <input type="number" id="jumlah_anggota" name="jumlah_anggota_821" class="form-control_821" min="1" max="10" required placeholder="Maks. 10 orang">
                    </div>

                    <button type="submit" class="btn_821">Kirim Pendaftaran</button>
                </form>
            </section>