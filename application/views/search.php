<div class="container-fluid">
	<div class="row">
		<?php foreach ($data as $brg) : ?>

			<div class="card" style="width: 19rem; height: 26rem; margin:15px;">

				<div class="card-body">
					<div class="row text-center">
						<h5 class="card-title"><?= $brg['nama_barang'] ?></h5>
					</div>
					<div style="height: 6rem;">
						<img src="<?php echo base_url() . '/assets/img/' . $brg['gambar'] ?>" class="card-img-top" alt="..." style="height: fix-content;"></br>
					</div>
					<span class="badge badge-primary"><?= $brg['harga'] ?></span>
					<p class="card-text">Tempat:<?= $brg['tempat'] ?></p>
					<p class="card-text">Waktu:<?= $brg['waktu'] ?></p>
					<td>
						<?php echo anchor('dashboard/detail/' . $brg['id'], ' <div class="btn btn-primary"><i>Detail</i></div>') ?>
					</td>
				</div>
			</div>
			&ensp; &ensp;

		<?php endforeach; ?>
	</div>
</div>
