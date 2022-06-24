<div class="container-fluid">

	<?php foreach ($event as $event) : ?>
		<div class="row" style="margin-left: 150px;">
			<div class="card" style="width: 50rem; margin-top:7%;">
				<img src="<?php echo base_url() . '/assets/img/' . $event->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $event->event ?> </h5>
					<p class="card-text"><?php echo $event->keterangan ?></p>
				</div>


			</div>
		</div>
		<hr class="sidebar-divider my-0">

	<?php endforeach; ?>

</div>
