<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-3">Ubah Jurnal Umum</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('index.php/jurnal/C_tjurnal/C_ubah_tjurnal'); ?>" method="post">
                <input type="hidden" name="id_tjurnal" value="<?php echo $tjurnal->id_tjurnal; ?>">
                <div class="row mb-4">
                    <div class="col-sm-3">
                        <label for="datepicker">Tanggal</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" id="datepicker" name="tanggal" type="date" value="<?php echo $tjurnal->tanggal; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan:</label>
                            <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                                <option value="">Pilih Pelanggan</option>
                                <?php foreach ($pelanggan as $plg) : ?>
                                    <option value="<?php echo $plg->nama_pelanggan; ?>" <?php if ($plg->nama_pelanggan == $tjurnal->nama_pelanggan) echo 'selected'; ?>><?php echo $plg->nama_pelanggan; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?php echo $tjurnal->keterangan; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">

                    <div class="col">
                        <div class="form-group">
                            <label for="nama_akun">Nama Akun</label>
                            <select name="nama_akun[]" id="nama_akun" class="form-control" required>
                                <option value="" disabled selected hidden>Pilih Nama Akun</option>
                                <?php foreach ($akun1 as $akun) : ?>
                                    <option value="<?php echo $akun->id_akun1; ?>" <?php if ($akun->id_akun1 == $tjurnal->id_akun1) echo 'selected'; ?>><?php echo $akun->nama_akun1; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="jenis_saldo">Jenis Saldo</label>
                        <select name="jenis_saldo[]" class="form-control jenis_saldo">
                          
                            <option value="debit" <?php if ($tjurnal->jenis_saldo === 'debit') echo 'selected'; ?>>Debit</option>
                            <option value="kredit" <?php if ($tjurnal->jenis_saldo === 'kredit') echo 'selected'; ?>>Kredit</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="saldo">Saldo</label>
                        <input type="text" name="saldo[]" class="form-control saldo" value="<?php echo $tjurnal->saldo; ?>">
                    </div>

                </div>

                <div>
                    <button class="btn btn-primary" type="submit" id="button_simpan">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>