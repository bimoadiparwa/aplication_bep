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
					<?php $mos = $penjualan['total_penjualan'] - $bep_rp?>
					<?php $rmos= $penjualan['total_penjualan'] / $bep_rp?>
					<table id="datatable" class="table table-bordered table-hover dt-responsive nowrap"
						style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
		<div class="row">
			<div class="col-md-6">
				<div class="card-outline-info">
					<div class="card-header">Rasio Margin Kontribusi</div>
					<div class="card-body" style="background-color: lightcyan;">
						<div class="form-group row">
							<label class="control-label text-right col-md-5">
								<p></p>
								<br>
								<p>Rasio Margin Kontribusi = </p>
								<br>
								<br>
								<br>
								<br>
								<p></p>
								<p>=</p>
								<br>
								<p></p>
								<p>=</p>

							</label>
							<div class="col-md-5">
								<p>Margin Kontribusi</p>
								<p>------------------- x 100%</p>
								<p>Total Penjualan </p>
								<p><?= number_format($penjualan['mc'])?></p>
								<p>--------------- x 100</p>
								<p><?= number_format($penjualan['total_penjualan'])?></p>
								<p><?= round($rmc) ?> %</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card-outline-info">
					<div class="card-header">BEP Unit</div>
					<div class="card-body" style="background-color: lightcyan;">
						<div class="form-group row">
							<label class="control-label text-right col-md-5">
								<p></p>
								<p></p>
								<br>
								<p>BEP Unit = </p>
								<br>
								<br>
								<br>
								<br>
								<p></p>
								<p>=</p>
								<br>
								<p></p>
								<p>=</p>
							</label>
							<div class="col-md-5">
								<p>Biaya Tetap</p>
								<p>-------------------</p>
								<p>Harga x Biaya Variabel <b>(per unit)</b></p>
								<p><?= number_format($penjualan['biaya_tetap']) ?></p>
								<p>------------------</p>
								<p><?= number_format($penjualan['harga']) .' x '. number_format($bv)?></p>
								<p><?= $bep_u .' '. $penjualan['produk']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="card-outline-info">
					<div class="card-header">Margin of Safety (MOS)</div>
					<div class="card-body" style="background-color: lightcyan;">
						<div class="form-group row">
							<label class="control-label text-right col-md-5">
								<p>Margin of Safety = </p>
								<p>=</p>
								<p>=</p>
								<br>
								<br><br>
								<p>MOS (%) Penjualan = </p>
								<br>
								<br>
								<br>
								<p>=</p>
								<br>
								<br>
								<p>=</p>
							</label>

							<div class="col-md-5">
								<p>Total Penjualan - BEP</p>
								<p><?= number_format($penjualan['total_penjualan']) .' - '. number_format($bep_rp)?></p>
								<p><?= number_format($mos)?></p>
								<br>
								<p>Total Penjualan</p>
								<p>--------------- x 100%</p>
								<p>BEP</p>
								<p><?= number_format($penjualan['total_penjualan'])?></p>
								<p>--------------- x 100%</p>
								<p><?= number_format($bep_rp)?></p>
								<p><?= $rmos ?> %</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card-outline-info">
					<div class="card-header">BEP Rupiah</div>
					<div class="card-body" style="background-color: lightcyan;">
						<div class="form-group row">
							<label class="control-label text-right col-md-5">
								<p></p>
								<p></p>
								<br>
								<p>BEP Rupiah = </p>
								<br>
								<br>
								<p></p>
								<p></p>
								<p>=</p>
								<br><br>
								<p></p>
								<p>=</p>
							</label>
							<div class="col-md-5">
								<p>Biaya Tetap</p>
								<p>-------------------</p>
								<p>Rasio Margin Kontribusi</p>
								<p><?= number_format($penjualan['biaya_tetap']) ?></p>
								<p>------------------</p>
								<p><?= $rmc/100?></p>

								<p><?= number_format($bep_rp)?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<input type="text" name="id_lapkeu" class="form-control" id="id_lapkeu" value="<?= $penjualan['id_lapkeu'] ?>" hidden>
		<input type="text" name="mos" class="form-control" id="mos" value="<?= $mos ?>" hidden>
		<input type="text" name="rmc" class="form-control" id="rmc" value="<?= $rmc ?> %" hidden>
		<input type="text" name="bep_u" class="form-control" id="bep_u" value="<?= round($bep_u).' '.$penjualan['produk'] ?>" hidden>
		<input type="text" name="bep_rp" class="form-control" id="bep_rp" value="<?= round($bep_rp) ?>" hidden>

		<hr>
		<div class="form-actions">
			<div class="row align-content-md-center">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?= base_url('penjualan'); ?>" class="btn btn-inverse">Cancel</a>
				</div>

			</div>
		</div>
		<br>
		<?= 
			form_close();
		?>

	</div>
</div>
</div>
