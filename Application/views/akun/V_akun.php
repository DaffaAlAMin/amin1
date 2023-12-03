<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Akun</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <button class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#tambah_akun"><i class="fas fa-plus fa-sm"></i>Tambah akun</button>
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
                    <th>Nama Akun</th>
                    <th>Keterangan Akun</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($akun1 as $akn1) : ?>
                    <tr>
                        <td><?php echo $akn1->nama_akun1 ?></td>
                        <td><?php echo $akn1->keterangan ?></td>

                        <td>
                            <a href="<?php echo base_url('index.php/akun/C_akun/hapus_akun/' . $akn1->id_akun1) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Delete</a>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update_akun_<?php echo $akn1->id_akun1 ?>"><i class="fas fa-edit"></i> Edit</button>
                        </td>
                        </td>


                    </tr>


                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



    <!-- sistem input -->

    <div class="modal fade" id="tambah_akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input nama akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/akun/C_akun/tambah_akun') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Akun</label>
                            <input type="text" name="nama_akun" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keterangan Akun</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<!-- Modal Ubah Akun -->
<?php foreach ($akun1 as $akn1) : ?>
    <div class="modal fade" id="update_akun_<?php echo $akn1->id_akun1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/akun/C_akun/ubah_akun/' . $akn1->id_akun1) ?>" method="post">
                        <div class="form-group">
                            <label>Nama Akun</label>
                            <input type="text" name="nama_akun" class="form-control" value="<?php echo $akn1->nama_akun1 ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Akun</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $akn1->keterangan ?>" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- /.card -->
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
        //    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
<button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="window.location.href='<?php echo site_url('#'); ?>'">Go back!</button>