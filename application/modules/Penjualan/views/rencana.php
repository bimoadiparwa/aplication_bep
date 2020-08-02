<div class="row">
        <div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="card card-outline-info">
				<div class="card-header">
					Rencana Penjualan
				</div>
				<div class="card-body" style="background-color: lightcyan;">
				<?= form_open('penjualan/buat_rencana/'.$penjualan['id_lapkeu'])?>
				<?php $mc_unit = $penjualan['mc']/$penjualan['unit']?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label for="" class="control-label text-right col-md-4">Laba Diharapkan</label>
								<div class="col-md-6">
									<input type="text" name="laba_bersih" class="form-control" value="">
								</div>
                            </div>
                            <div class="form-group row">
								<label for="" class="control-label text-right col-md-4">Margin Kontribusi/unit</label>
								<div class="col-md-6">
									<input type="text" name="mc_unit" class="form-control" value="<?= $mc_unit?>">
								</div>
                            </div>
                            <div class="form-group row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-info">Hitung</button>
								</div>
							</div>
						</div>
					</div>
				<?= form_close() ?>
				</div>
			</div>
        </div>
        <div class="col-lg-3"></div>
	</div>