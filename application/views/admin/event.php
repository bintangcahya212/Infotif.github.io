<div class="container-fluid">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus">Tambah Event </i></button>
	<br><br>


	<div class="row">

		<section>
			<?php foreach ($event as $event) : ?>
				<div class="card" style="width: 180rem; height: 25rem;">

					<div class="card-body">
						<div class="row text-center">
							<h5 class="card-title"><?php echo $event->event ?></h5>
						</div>
						<br><img src="<?php echo base_url() . '/assets/img/' . $event->gambar ?>" class="card-img-left" style="width: 15rem; float:left;" alt="...">
						<br><br>
						<div style="margin-left:250pt">
							<td>
								<?php echo anchor('admin/event/edit/' . $event->id, ' <div class="btn btn-primary"><i>Edit</i></div>') ?>
								<?php echo anchor('admin/event/hapus/' . $event->id, ' <div class="btn btn-primary"><i>Hapus</i></div>') ?>

								<?php echo anchor('admin/event/detail/' . $event->id, ' <div class="btn btn-primary"><i>Detail</i></div>') ?>

							</td>
						</div>




					</div>

				</div>

			<?php endforeach; ?>
		</section>

	</div><br>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Event</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?= form_open_multipart('admin/event/tambah_aksi'); ?>

					<div class="form-group">
						<label>Nama event</label>
						<input type="text" name="event" class="form-control">
					</div>

				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea id="keterangan_event" name="keterangan" class="form-control" style="height: 20rem;"></textarea>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="gambar" class="form-control-file" />
				</div>
				<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<?php echo form_close(); ?>
			</div>
		</div>
		<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace('keterangan_event');
		</script>

	</div>
</div>
