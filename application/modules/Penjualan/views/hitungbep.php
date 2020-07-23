<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-block">
			<?=form_open('penjualan/hitung/'.$penjualan['id_lapkeu']);?>
			<div class="form-body">
				<div class="row">
                <?php $rmc = ($penjualan['mc'] / $penjualan['total_penjualan']) * 100; ?>
                <?php $bep_u = $penjualan['biaya_tetap'] / ($penjualan['harga'] * ($rmc/100)); ?>
                <?php $bep_rp = $penjualan['biaya_tetap'] / ($rmc/100); ?>
                <?php $mc_unit = $penjualan['mc']/$penjualan['unit']?> 
                <?php $bv = $penjualan['harga'] - $mc_unit?>    
                <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <tr>
                        <td></td>
                        <td>Jumlah</td>
                        <td>Harga (Rp)/unit</td>
                    </tr>
                    <tr>
                        <td>Penjualan (<?=$penjualan['unit'].' '.$penjualan['produk']?>)</td>
                        <td>Rp <?= number_format($penjualan['total_penjualan'])?></td>
                        <td>Rp <?= number_format($penjualan['harga'])?></td>
                    </tr>
                    <tr>
                        <td>Biaya Variabel</td>
                        <td>Rp <?= number_format($penjualan['biaya_variabel'])?></td>
                        <td>Rp <?= number_format($bv)?></td>
                    </tr>
                    <tr>
                        <td>Margin Kontribusi</td>
                        <td>Rp <?= number_format($penjualan['mc'])?></td>
                        <td>Rp <?= number_format($mc_unit)?></td>
                    </tr>
                    <tr>
                        <td>Biaya Tetap</td>
                        <td>Rp <?= number_format($penjualan['biaya_tetap'])?></td>
                    </tr>
                </table>
				</div>
			</div>
			<!--/row-->
		</div>
        <hr>
        <div class="form-group row">
        <input type="text" name="id_lapkeu" class="form-control" id="id_lapkeu"
												value="<?= $penjualan['id_lapkeu'] ?>" hidden>
										<label for="rmc"
											class="col-sm-3 text-left control-label col-form-label">Rasio Margin Kontribusi</label>
										<div class="col-sm-1">
											<input type="text" name="rmc" class="form-control" id="rmc"
												value="<?= $rmc ?> %" readonly>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label for="bep_u"
											class="col-sm-3 text-left control-label col-form-label">Break Event Point (Unit)</label>
										<div class="col-sm-2">
                                            
											<input type="text" name="bep_u" class="form-control" id="bep_u"
												value="<?= round($bep_u).' '.$penjualan['produk'] ?>" readonly>
										</div>
									</div>
                                    <div class="form-group row">
										<label for="bep_rp"
											class="col-sm-3 text-left control-label col-form-label">Break Event Point (Rp)</label>
										<div class="col-sm-2">
											<input type="text" name="bep_rp" class="form-control" id="bep_rp"
												value="<?= round($bep_rp) ?>" readonly>
										</div>
									</div>
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
