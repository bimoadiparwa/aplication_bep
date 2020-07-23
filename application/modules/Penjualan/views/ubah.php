<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open_multipart('penjualan/update/'.$penjualan['id_lapkeu']);?>
			<div class="form-body">
				<div class="row">	
				<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Produk</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="produk"
									value="<?= $penjualan['produk'] ?>"></div>
									
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tahun</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="tahun"
									value="<?=$penjualan['tahun']?>"> 
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Unit</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="unit"
									value="<?= $penjualan['unit'] ?>"></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Harga</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="harga"
									value="<?=$penjualan['harga']?>"> 
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Biaya Variabel</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="biaya_variabel"
									value="<?= $penjualan['biaya_variabel'] ?>"></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Biaya Tetap</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="biaya_tetap"
									value="<?= $penjualan['biaya_tetap']?>"> 
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Margin Kontribusi</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="mc"
									value="<?= $penjualan['mc'] ?>"></div>
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<input type="text" class="form-control" name="id_lapkeu"
									value="<?= $penjualan['id_lapkeu'] ?>" hidden></div>
					</div>
					<!--/span-->
				</div>

			</div>
			<!--/row-->
		</div>
		<hr>
		<div class="form-actions">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn btn-success">Submit</button>
							<a href="<?= base_url('penjualan'); ?>" class="btn btn-inverse">Cancel</a>
						</div>
					</div>
				</div>
				<div class="col-md-6"> </div>
			</div>
		</div>
		<?= 
								form_close();
								 ?>
	</div>
</div>
</div>
