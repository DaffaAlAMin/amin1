<div class="container-fluid">
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/slide/slide1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/slide/slide2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/slide/slide3.jpg') ?>" class="d-block w-100" alt="...">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
    <!-- tombol tambah pelanggan -->
    <h1>Data Pelanggan</h1>
    <div class="card-body" class="row text-center mt-3">
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahPelangganModal">Tambah Pelanggan</a>
    </div>

    <div class="row text-center mt-3">
        <?php foreach ($pelanggan as $plg) : ?>
<?php if($plg->nama_pelanggan != 'Default'): ?>
    
            <div class="card ml-5 mt-2" style="width: 16rem;">
                <img src="<?php echo base_url() . 'pelanggan/' . $plg->gambar ?>" class="card-img-top" alt="..." style="height: 200px;">

                <!-- card -->
                <!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> -->

                <div class="card-body">
                    <span class="badge badge-info" style="font-size: 15px; color:black"><?php echo $plg->nama_pelanggan ?></span> <br>
                    <span class="badge badge-info" style="font-size: 15px; color:black">No Hp: <?php echo $plg->no_hp ?></span> <br>
                    <span class="badge badge-info" style="font-size: 15px; color:black">Pinjaman: <?php echo rupiah($plg->pinjaman) ?></span> <br>
                    <span class="badge badge-info" style="font-size: 15px; color:black">Piutang: <?php echo rupiah($plg->piutang) ?></span> <br>
                    <span class="badge badge-info" style="font-size: 15px; color:black">Bunga: <?php echo rupiah(($plg->piutang - $plg->pinjaman) / $plg->cicilan, 2, ',', '.') ?></span> <br>
                    <span class="badge badge-danger" style="font-size: 13px; color:black">Tanggal jatuh tempo: <?php echo $plg->jatuh_tempo ?></span><br>
                    <span class="badge badge-danger" style="font-size: 13px; color:black">Biaya angsuran: Rp. <?php echo rupiah($plg->angsuran) ?></span>
                    <span class="badge badge-danger" style="font-size: 15px; color:black">Sisa angsuran: <?php echo $plg->jumlah  ?>x</span> <br> <br>
                    <a href="<?php echo base_url('index.php/Layout/decrement_jumlah/' . $plg->id_pelanggan); ?>" class="btn btn-sm btn-warning">Dibayar</a>
                    <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editPelangganModal<?php echo $plg->id_pelanggan; ?>">Edit</a> -->
                    <a href="<?php echo base_url('index.php/Layout/hapus_pelanggan/' . $plg->id_pelanggan); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Confirmasi pelunasan')">Hapus</a><br>
                    <span class="badge badge-danger">Ciclan: <?php echo $plg->cicilan ?>x</span>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <div class="card ml-5 mt-2" style="width: 16rem;">
            <div class="card-body">
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahPelangganModal">+</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Pelanggan -->
<div class="modal fade" id="tambahPelangganModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/Layout/tambah_pelanggan'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="cicilan">Cicilan Selama (Bulan)</label>
                        <input type="text" name="cicilan" class="form-control" id="cicilan" value="<?php echo $plg->cicilan; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pinjaman">Pinjaman</label>
                        <input type="text" name="pinjaman" class="form-control" id="pinjaman" value="<?php echo $plg->pinjaman; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="piutang">Piutang</label>
                        <input type="text" name="piutang" class="form-control" id="piutang" value="<?php echo $plg->piutang; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jatuh_tempo">Tanggal Jatuh Tempo</label>
                        <input type="date" name="jatuh_tempo" class="form-control" id="jatuh_tempo" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                    </div>
                      <div class="form-group">
                        <label for="angsuran">Jumlah Angsuran (Rp.)</label>
                        <input type="text" name="angsuran" class="form-control" id="angsuran" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Sisa Angsuran</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" required>
                    </div>
                  
                    <div class="form-group">
                        <label for="gambar">Foto Pelanggan</label>
                        <input type="file" name="gambar" class="form-control-file" id="gambar" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal edit pelanggan -->
<div class="modal fade" id="editPelangganModal<?php echo $plg->id_pelanggan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/Layout/edit_pelanggan/' . $plg->id_pelanggan); ?>" method="post">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" value="<?php echo $plg->nama_pelanggan; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?php echo $plg->no_hp; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pinjaman">Pinjaman</label>
                        <input type="text" name="pinjaman" class="form-control" id="pinjaman" value="<?php echo $plg->pinjaman; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="piutang">Piutang</label>
                        <input type="text" name="piutang" class="form-control" id="piutang" value="<?php echo $plg->piutang; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jatuh_tempo">Tanggal Jatuh Tempo</label>
                        <input type="date" name="jatuh_tempo" class="form-control" id="jatuh_tempo" value="<?php echo $plg->jatuh_tempo; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $plg->alamat; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="angsuran">Sisa Angsuran</label>
                        <input type="text" name="angsuran" class="form-control" id="angsuran" value="<?php echo $plg->angsuran; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Angsuran (Rp.)</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?php echo $plg->jumlah; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Foto Pelanggan</label>
                        <input type="file" name="gambar" class="form-control-file" id="gambar">

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>