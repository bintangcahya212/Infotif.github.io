<div class="content-wrapper">
	<section class="content">
		<div class="card" style="margin: 5%;">
			<div class="carousel-inner" style="margin-top:80px">
				<div class="carousel-item active">

					<img src=" <?php echo base_url(); ?>assets/img/<?php echo $detail->gambar; ?>" width="800" class="mx-auto d-block">

				</div>
			</div>
			<br><br><br>

			<div class="text-center" style="font-size: 40pt;">
				<?php echo $detail->event ?>
			</div>


			<div style="margin-top: 50px;margin-left:100px; width: 1000px;">
				<br>
				<?php echo $detail->keterangan ?> </th>
				<br>

				<a class="btn btn-primary" style="margin-bottom: 30px;" href=" <?= site_url('admin/event'); ?>">
					<span>kembali</span></a>

			</div>
		</div>

	</section>
</div>
