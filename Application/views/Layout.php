<div class="container-fluid">
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Kas</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"> <?php rupiah($total_kas); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Pelanggan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_pelanggan - 1 ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pendapatan Jasa
							</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php rupiah($total_jasa); ?></div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pendapatan Dagang
							</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php rupiah($total_dagang); ?></div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Piutang Usaha</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php rupiah($total_piutang); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Biaya Operasional</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php rupiah($operasional); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Utang Bank</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php rupiah($utang_bank); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Pendapatan Bunga</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php rupiah($bunga); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	<div class="row text-center mt-3">
		<?php foreach ($pelanggan as $plg) : ?>
			<?php if ($plg->nama_pelanggan != 'Default') : ?>
				<div class="card ml-5 mt-2" style="width: 16rem;">
					<img src="<?php echo base_url() . 'pelanggan/' . $plg->gambar ?>" class="card-img-top" alt="..." style="height: 200px;">

					<div class="card-body">
						<!-- <span class="badge badge-info" style="font-size: 15px; color:black"><?php echo $plg->nama_pelanggan ?></span> <br>
					<span class="badge badge-info" style="font-size: 15px; color:black">No Hp: <?php echo $plg->no_hp ?></span> <br>
					<span class="badge badge-danger" style="font-size: 13px; color:black">Tanggal jatuh tempo: <?php echo $plg->jatuh_tempo ?></span><br>
					<span class="badge badge-danger" style="font-size: 13px; color:black">Biaya angsuran: Rp. <?php echo $plg->angsuran ?></span>
					<span class="badge badge-danger" style="font-size: 15px; color:black">Jumlah angsuran: <?php echo $plg->jumlah ?>x</span> <br> <br>
					<a href="<?php echo base_url('index.php/Layout/decrement_jumlah/' . $plg->id_pelanggan); ?>" class="btn btn-sm btn-warning">Dibayar</a> -->
						<a href="#" class="btn btn-sm btn-primary" style="font-size: 20px; color:white" data-toggle="modal" data-target="#editPelangganModal<?php echo $plg->id_pelanggan; ?>">Edit</a>
						<!-- <a href="<?php echo base_url('index.php/Layout/hapus_pelanggan/' . $plg->id_pelanggan); ?>" class="btn btn-sm btn-success" onclick="return confirm('Confirmasi pelunasan')">Lunas</a> -->
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>


	</div>
</div>
<?php foreach ($pelanggan as $plg) : ?>
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
							<input type="date" name="jatuh_tempo" class="form-control" id="jatuh_tempo" value="<?php echo $plg->jatuh_tempo; ?>" required>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $plg->alamat; ?>" required>
						</div>
						<div class="form-group">
							<label for="angsuran">Jumlah Angsuran (Rp.)</label>
							<input type="text" name="angsuran" class="form-control" id="angsuran" value="<?php echo $plg->angsuran; ?>" required>
						</div>
						<div class="form-group">
							<label for="jumlah">Sisa Angsuran</label>
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
<?php endforeach; ?>