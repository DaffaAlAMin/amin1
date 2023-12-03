<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-3">Tambah Jurnal Umum</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('index.php/jurnal/C_tjurnal/simpantjurnal'); ?>" method="post">
                <div class="row mb-4">
                    <div class="col-sm-3">
                        <label for="datepicker">Tanggal</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" id="datepicker" name="tanggal" type="date">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan:</label>
                            <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                                <option value="">Pilih Pelanggan</option>
                                <?php foreach ($pelanggan as $plg) : ?>
                                    <option value="<?php echo $plg->nama_pelanggan; ?>"><?php echo $plg->nama_pelanggan; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" required>
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
                                    <option value="<?php echo $akun->id_akun1; ?>"><?php echo $akun->nama_akun1; ?></option>
                                <?php endforeach; ?>
                            </select>


                        </div>
                    </div>

                    <div class="col">
                        <label for="jenis_saldo">Jenis Saldo</label>
                        <select name="jenis_saldo[]" class="form-control jenis_saldo" id="jenis_saldo">
                            <option value="debit">Debit</option>
                            <option value="kredit">Kredit</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="saldo">Saldo</label>
                        <input type="text" name="saldo[]" class="form-control saldo" id="saldo" value="">
                    </div>
                </div>
                <div id="form_jurnal_prepend">
                    <button class="btn btn-info" type="button" id="button_jurnal">Tambah Input</button>
                    <button class="btn btn-primary" type="submit" id="button_simpan">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Fungsi untuk menambahkan input jurnal baru
        $("#button_jurnal").on("click", function(e) {
            e.preventDefault();
            var newInput = '<div class="row mb-4">' +
                '<div class="col">' +
                '<div class="form-group">' +
                '<label for="id_akun1">Akun Debit:</label>' +
                '<select name="nama_akun[]" class="form-control" required>' +
                '<option value="">Pilih Akun Debit</option>' +
                '<?php foreach ($akun1 as $akun) : ?>' +
                '<option value="<?php echo $akun->id_akun1; ?>"><?php echo $akun->nama_akun1; ?></option>' +
                '<?php endforeach; ?>' +
                '</select>' +
                '</div>' +
                '</div>' +
                '<div class="col">' +
                '<label for="jenis_saldo">Jenis Saldo</label>' +
                '<select name="jenis_saldo[]" class="form-control jenis_saldo">' +
                '<option value="debit">Debit</option>' +
                '<option value="kredit">Kredit</option>' +
                '</select>' +
                '</div>' +
                '<div class="col">' +
                '<label for="saldo">Saldo</label>' +
                '<input type="text" name="saldo[]" class="form-control saldo" value="">' +
                '</div>' +
                '</div>';

            $("#form_jurnal_prepend").prepend(newInput);
        });

        // Fungsi untuk mengubah nilai saldo berdasarkan jenis saldo yang dipilih
        $(document).on("change", ".jenis_saldo", function() {
            var saldoInput = $(this).closest(".row").find(".saldo");
            var jenisSaldo = $(this).val();

            if (jenisSaldo === "debit") {
                saldoInput.val("");
            } else if (jenisSaldo === "kredit") {
                saldoInput.val(""); // Misalnya, menambahkan tanda minus sebagai nilai default
            }
        });
    });
</script>