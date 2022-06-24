<div class="content-wrapper">
	<section class="content">

		<div class="card" style="margin: 3%;">
			<div class="carousel-inner">


				<div class="carousel-item active" style="margin-top: 5%;">

					<img src="<?php echo base_url(); ?>assets/img/<?php echo $detail->gambar; ?>" width="800" class="mx-auto d-block">

				</div>


			</div><br><br><br>
			<div class="text-center" style="font-size: 40pt; margin-top:5%;">
				<?php echo $detail->nama_barang ?>
			</div>
			<b>
				<div class="row" style="margin-left: 80px; margin-top:20px;">
					<p>Batas Pendaftaran:</p>
					<p id="demo"></p>
					<script>
						// Set the date we're counting down to
						var countDownDate = new Date("<?php echo $detail->waktu_daftar ?>").getTime();

						// Update the count down every 1 second
						var x = setInterval(function() {

							// Get today's date and time
							var now = new Date().getTime();

							// Find the distance between now and the count down date
							var distance = countDownDate - now;

							// Time calculations for days, hours, minutes and seconds
							var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							var seconds = Math.floor((distance % (1000 * 60)) / 1000);

							// Display the result in the element with id="demo"
							document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
								minutes + "m " + seconds + "s ";

							// If the count down is finished, write some text
							if (distance < 0) {
								clearInterval(x);
								document.getElementById("demo").innerHTML = "EXPIRED";
							}
						}, 1000);
					</script>
				</div>
			</b>
			<div style="width:60rem; margin: 80px;">

				<?php echo $detail->tempat ?> </th>
				<br>
				<?php echo $detail->waktu ?> </th>
				<br><br>
				<?php echo $detail->keterangan ?> </th>
				<a class="btn btn-primary" href=" <?= site_url('admin/dashboard_admin'); ?>">
					<span>kembali</span></a>


			</div>
		</div>


	</section>
</div>
