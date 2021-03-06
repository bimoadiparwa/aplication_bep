<div class="row align-items-center">
	<div class="col-md-8">
		<h4 class="page-title mb-1"><?= $sub_title; ?></h4>
	</div>
	<div class="col-md-4">
		<div class="float-right d-none d-md-block">
			<div class="dropdown">
				<!--<a href="#form" class="btn btn-light btn-rounded float-right" data-target="#tambahdata"
					data-toggle="modal" aria-haspopup="true" aria-expanded="false">
					<i class="mdi mdi-plus-outline mr-1"></i> Tambah Data
				</a>-->
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-info btn-rounded float-right" data-toggle="modal"
					data-target="#exampleModal">
					<i class="mdi mdi-plus-outline mr-1"></i> Tambah Data
				</button>


				<!--<button class="btn btn-outline-info btn-rounded float-right"
							onclick="add_data()"><i class="ti ti-plus"></i> Tambah Data</button>-->
			</div>
		</div>
	</div>
</div>

<table id="datatable" class="table table-bordered table-striped dt-responsive nowrap"
	style="border-collapse: collapse; border-spacing: 0; width: 100%;">
	<thead>
		<tr>
			<th>Produk</th>
			<th>Tahun</th>
			<th>Unit Terjual</th>
			<th>Harga</th>
			<th>Total Penjualan</th>
			<th>Biaya Variabel</th>
			<th>Biaya Tetap</th>
			<th>Margin Kontribusi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($penjualan as $pen) : ?>
		<tr>
			<td><?= $pen['produk']; ?></td>
			<td><?= $pen['tahun']; ?></td>
			<td><?= $pen['unit']; ?></td>
			<td>Rp <?= number_format($pen['harga']); ?></td>
			<td>Rp <?= number_format($pen['total_penjualan']); ?></td>
			<td>Rp <?= number_format($pen['biaya_variabel']); ?></td>
			<td>Rp <?= number_format($pen['biaya_tetap']); ?></td>
			<td>Rp <?= number_format($pen['mc']); ?></td>
			<td>
				<a href="<?php echo base_url('penjualan/hitungbep/'.$pen['id_lapkeu']); ?>"
					class='btn btn-sm btn-outline-info fas fa-calculator' data-toggle="tooltip" title=""
					data-original-title="Hitung BEP"></a>
				<a href="<?php echo base_url('penjualan/detail/'.$pen['id_lapkeu']); ?>"
					class='btn btn-sm btn-outline-info fas fa-eye' data-toggle="tooltip" title=""
					data-original-title="Detail Penjualan"></a>
				<a href="<?php echo base_url('penjualan/ubah/'.$pen['id_lapkeu']); ?>"
					class='btn btn-sm btn-outline-info ti-pencil-alt' data-toggle="tooltip" title=""
					data-original-title="Ubah Data Laporan"></a>
				<a href="<?php echo base_url('penjualan/hapus/'.$pen['id_lapkeu']); ?>"
					class='btn btn-sm btn-outline-danger ti-trash' data-toggle="tooltip" title=""
					data-original-title="Hapus Data Laporan"></a>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post" id="form">
				<div class="form-body">
						<div class="form-group row">
							<label for="produk" class="col-md-4 text-right control-label col-form-label">Produk</label>
							<div class="col-md-6">
								<input type="text" name="produk" class="form-control" id="produk"
									placeholder="Masukkan nama produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="tahun" class="col-md-4 text-right control-label col-form-label">Tahun</label>
							<div class="col-md-3">
								<input type="year" name="tahun" class="form-control" id="tahun"
									placeholder="Tahun penjualan" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="unit" class="col-md-4 text-right control-label col-form-label">Unit
								Terjual</label>
							<div class="col-md-3">
								<input type="year" name="unit" class="form-control" id="unit" placeholder="Unit terjual"
									required>
							</div>
						</div>
						<div class="form-group row">
							<label for="harga" class="col-md-4 text-right control-label col-form-label">Harga
								(/unit)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="harga" name="harga"
									placeholder="Harga /unit" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="biaya_variabel" class="col-md-4 text-right control-label col-form-label">Biaya
								Variabel
								(Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="biaya_variabel" name="biaya_variabel"
									placeholder="Biaya variabel (Rp)" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="biaya_tetap" class="col-md-4 text-right control-label col-form-label">Biaya
								Tetap (Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="biaya_tetap" name="biaya_tetap"
									placeholder="Biaya tetap (Rp)" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="mc" class="col-md-4 text-right control-label col-form-label">Margin
								Kontribusi (Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="mc" name="mc"
									placeholder="Margin kontribusi (Rp)" required>
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="tambah">Tambah</button>
			</div>
		</div>
	</div>
</div>
<!--div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form">
				<form action="#" id="form">
					<div class="form-body">
						<div class="form-group row">
							<label for="produk" class="col-md-4 text-right control-label col-form-label">Produk</label>
							<div class="col-md-6">
								<input type="text" name="produk" class="form-control" id="produk"
									placeholder="Masukkan nama produk" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="tahun" class="col-md-4 text-right control-label col-form-label">Tahun</label>
							<div class="col-md-3">
								<input type="year" name="tahun" class="form-control" id="tahun"
									placeholder="Tahun penjualan" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="unit" class="col-md-4 text-right control-label col-form-label">Unit
								Terjual</label>
							<div class="col-md-3">
								<input type="year" name="unit" class="form-control" id="unit" placeholder="Unit terjual"
									required>
							</div>
						</div>
						<div class="form-group row">
							<label for="harga" class="col-md-4 text-right control-label col-form-label">Harga
								(/unit)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="harga" name="harga"
									placeholder="Harga /unit" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="biaya_variabel" class="col-md-4 text-right control-label col-form-label">Biaya
								Variabel
								(Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="biaya_variabel" name="biaya_variabel"
									placeholder="Biaya variabel (Rp)" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="biaya_tetap" class="col-md-4 text-right control-label col-form-label">Biaya
								Tetap (Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="biaya_tetap" name="biaya_tetap"
									placeholder="Biaya tetap (Rp)" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="mc" class="col-md-4 text-right control-label col-form-label">Margin
								Kontribusi (Rp)</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="mc" name="mc"
									placeholder="Margin kontribusi (Rp)" required>
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="save()">Submit</button>
			</div>
		</div>
	</div>
</div>
<!--<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title text-center" id="exampleModalScrollableTitle"><?= $modal_title; ?></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<?php $attributes = array('id' => 'form'); ?>
							<?=form_open_multipart('penjualan/tambah/',$attributes);?>
							<div class="card-body">
								<div class="form-group row">
									<label for="produk"
										class="col-sm-3 text-left control-label col-form-label">Produk</label>
									<div class="col-sm-4">
										<input type="text" name="produk" class="form-control" id="produk"
											placeholder="Masukkan nama produk" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="tahun"
										class="col-sm-3 text-left control-label col-form-label">Tahun</label>
									<div class="col-sm-2">
										<input type="year" name="tahun" class="form-control" id="tahun"
											placeholder="Tahun penjualan" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="unit" class="col-sm-3 text-left control-label col-form-label">Unit
										Terjual</label>
									<div class="col-sm-2">
										<input type="year" name="unit" class="form-control" id="unit"
											placeholder="Unit terjual" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="harga" class="col-sm-3 text-left control-label col-form-label">Harga
										(/unit)</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="harga" name="harga"
											placeholder="Harga /unit" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="biaya_variabel"
										class="col-sm-3 text-left control-label col-form-label">Biaya Variabel
										(Rp)</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="biaya_variabel"
											name="biaya_variabel" placeholder="Biaya variabel (Rp)" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="biaya_tetap"
										class="col-sm-3 text-left control-label col-form-label">Biaya Tetap (Rp)</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="biaya_tetap" name="biaya_tetap"
											placeholder="Biaya tetap (Rp)" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="mc" class="col-sm-3 text-left control-label col-form-label">Margin
										Kontribusi (Rp)</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="mc" name="mc"
											placeholder="Margin kontribusi (Rp)" required>
									</div>
								</div>
							</div>
							<hr>
							<div class="form-group m-b-0 text-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-info waves-effect waves-light"><i
										class="fas fa-save"></i> Simpan</button>
							</div>
							<?=
							form_close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->

