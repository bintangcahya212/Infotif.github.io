<div class="container-fluid">



	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('assets/img/pcc_logo.jpg')  ?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/pcc_logo.jpg')  ?>" class="d-block w-100" alt="...">
			</div>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br><br>
	<div class="row">




		<?php foreach ($barang as $brg) : ?>

			<div class="card" style="width: 19rem; height: 26rem; margin:15px;">

				<div class="card-body">
					<div class="row text-center">
						<h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
					</div>
					<div style="height: 6rem;">
						<img src="<?php echo base_url() . '/assets/img/' . $brg->gambar ?>" class="card-img-top" alt="..." style="height: fix-content;"></br>
					</div>
					<!-- Display the countdown timer in an element -->
					<p id="demo"></p>

					<script>
						// Set the date we're counting down to
						var countDownDate = new Date(<?php echo $brg->waktu_daftar ?>).getTime();

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
					<span class="badge badge-primary"><?php echo $brg->harga ?></span>
					<p class="card-text">Tempat:<?php echo $brg->tempat ?></p>
					<p class="card-text">Waktu:<?php echo $brg->waktu ?></p>
					<p class="card-text">Waktu:<?php echo $brg->waktu_daftar ?></p>
					<td>
						<?php echo anchor('dashboard/detail/' . $brg->id, ' <div class="btn btn-primary"><i>Detail</i></div>') ?>
					</td>
				</div>
			</div>
			&ensp; &ensp;

		<?php endforeach; ?>
	</div>
</div>
