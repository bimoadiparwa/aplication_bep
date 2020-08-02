<div class="col-lg-12">
	<div class="card card-outline-info">
		<div class="card-header">Detail Laporan Penjualan <?= $penjualan['produk'] ?> </div>
		<div class="card-body" style="background-color: lightcyan;">
			<div class="form-body">
				<div class="row">
					<?php $rmc = ($penjualan['mc'] / $penjualan['total_penjualan']) * 100; ?>
					<?php $bep_u = $penjualan['biaya_tetap'] / ($penjualan['harga'] * ($rmc/100)); ?>
					<?php $bep_rp = $penjualan['biaya_tetap'] / ($rmc/100); ?>
					<?php $mc_unit = $penjualan['mc']/$penjualan['unit']?>
					<?php $bv = $penjualan['harga'] - $mc_unit?>
					<?php $mos = $penjualan['total_penjualan'] - $bep_rp?>
					<?php $rmos= $penjualan['total_penjualan'] / $bep_rp?>
					<table id="table_id" class="table table-bordered table-hover dt-responsive nowrap"
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
						<tr>
							<td>Rasio Margin Kontribusi</td>
							<td><?= $penjualan['rmc']?> %</td>
						</tr>
						<tr>
							<td>Break Even Point (BEP) Unit</td>
							<td><?= $penjualan['bep_u'].' '.$penjualan['produk']?> </td>
						</tr>
						<tr>
							<td>Break Even Point (BEP) Rp</td>
							<td>Rp <?= number_format($penjualan['bep_rp'])?> </td>
						</tr>
						<tr>
							<td>Margin of Safety</td>
							<td>Rp <?= number_format($penjualan['mos'])?></td>
						</tr>
						<tr>
							<td>Margin of Safety (%) Penjualan</td>
							<td><?= $rmos?> %</td>
						</tr>
					</table>
					<div class="col-md-3">

					</div>
					<div class="col-md-6">
						<a href="<?= base_url('penjualan/rencana/'.$penjualan['id_lapkeu']); ?>" class="btn btn-outline-info btn-rounded fas fa-edit"> Buat Rencana Penjualan</a>
						<a href="<?= base_url('penjualan'); ?>" class="btn btn-success btn-rounded col-md-3">Back</a>
					</div>

				</div>
			</div>
			<!--/row-->
		</div>
	</div>
	<hr>
	<div class="row">
        <div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="card card-outline-info">
				<div class="card-header">
					Rencana Penjualan
				</div>
				<div class="card-body" style="background-color: lightcyan;">
					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label for="" class="control-label text-right col-md-4">Laba Diharapkan</label>
								<div class="col-md-6">
									<input type="text" name="laba_bersih" class="form-control" value="Rp <?= number_format($penjualan['laba_bersih']) ?>" readonly>
								</div>
                            </div>
                            <div class="form-group row">
								<label for="" class="control-label text-right col-md-4">Margin Kontribusi/unit</label>
								<div class="col-md-6">
									<input type="text" name="mc_unit" class="form-control" value="Rp <?= number_format($mc_unit) ?>" readonly>
								</div>
                            </div>
								<?php $unit = $penjualan['laba_bersih']/$mc_unit ?>
                            <div class="form-group row">
								<label for="" class="control-label text-right col-md-4">Unit Terjual</label>
								<div class="col-md-6">
									<input type="text" class="form-control" value="<?= $unit ?> Unit" readonly>
								</div>
                            </div>
						</div>
					</div>
				
				</div>
			</div>
        </div>
        <div class="col-lg-3"></div>
	</div>

</div>
</div>