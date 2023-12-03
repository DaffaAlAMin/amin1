<div class="card">
    <div class="card-header">
        <h3 class="card-title">Transaksi Jurnal</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <button type="button" class="btn btn-primary" onclick="window.location.href='C_tjurnal/Tambahtjurnal'">Tambah Transaksi</button>


        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_bukti_jurnal">
            Tambah Transaksi
        </button> -->

        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Keterangan</th>
                    <th>Nama Akun</th>
                    <th>Jenis Saldo</th>
                    <th>Saldo</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($tb_tjurnal as $tjun) : ?>
                    <tr>


                        <td><?php echo $tjun->id_tjurnal ?></td>
                        <td><?php echo $tjun->tanggal ?></td>
                        <td><?php echo $tjun->nama_pelanggan ?></td>
                        <td><?php echo $tjun->keterangan ?></td>
                        <td><?php echo $tjun->nama_akun1 ?></td>
                        <td><?php echo $tjun->jenis_saldo ?></td>
                        <td><?php echo rupiah($tjun->saldo) ?></td>

                        <td>
                            <a href="<?php echo base_url('index.php/jurnal/C_tjurnal/hapus_tjurnal/' . $tjun->id_tjurnal) ?> " class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Delete</a>
                            <a href="<?php echo base_url('index.php/jurnal/C_tjurnal/Vubah_tjurnal/' . $tjun->id_tjurnal) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>




                    </tr>


                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('adminlte/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('adminlte/dist/js/demo.js') ?>"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
           "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


<!-- 
        <div class="modal fade" id="tambah_bukti_jurnal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Input Bukti Jurnal Umum</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('index.php/jurnal/C_tjurnal/tambah_tjurnal') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan:</label>
                                <select name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                                    <option value="">Pilih Pelanggan</option>
                                    <?php foreach ($pelanggan as $plg) : ?>
                                        <option value="<?php echo $plg->nama_pelanggan; ?>"><?php echo $plg->nama_pelanggan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_akun_debit">Akun Debit:</label>
                                <select name="nama_akun_debit" id="nama_akun_debit" class="form-control" required>
                                    <option value="">Pilih Akun Debit</option>
                                    <?php foreach ($akun1 as $akun) : ?>
                                        <option value="<?php echo $akun->nama_akun1; ?>"><?php echo $akun->id_akun1; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="debit">Debit:</label>
                                <input type="number" name="debit" id="debit" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_akun_kredit">Akun Kredit:</label>
                                <select name="nama_akun_kredit" id="nama_akun_kredit" class="form-control" required>
                                    <option value="">Pilih Akun Kredit</option>
                                    <?php foreach ($akun1 as $akun) : ?>
                                        <option value="<?php echo $akun->id_akun1; ?>"><?php echo $akun->nama_akun1; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kredit">Kredit:</label>
                                <input type="number" name="kredit" id="kredit" class="form-control" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> -->
        

        