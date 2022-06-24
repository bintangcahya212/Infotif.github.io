<div class="content-wrapper">
	<section class="content">

		<div class="carousel-inner" style="margin-left: 180px;">
			<div class="carousel-item active">

				<img src="<?php echo base_url(); ?>assets/img/<?php echo $detail->gambar; ?>" width="800">

			</div>
		</div>
		<br><br><br>
		<div style="font-size: 40pt; margin-left:10%;">
			<?php echo $detail->event ?>
		</div>
		<div style="margin-left: 40px;">
			<br>
			<?php echo $detail->keterangan ?> </th>
			<br>
			<a class="btn btn-primary" href=" <?= site_url('event'); ?>">
				<span>kembali</span></a>
		</div>
	</section>
</div>
