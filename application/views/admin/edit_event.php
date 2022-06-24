<div class="container fluid">
	<div class="content-wrapper">
		<section class="content">
			<?php foreach ($event as $brg) { ?>
				<form enctype="multipart/form-data" action="<?php echo site_url('admin/event/update'); ?>" method="post" style="margin-left: 5px; margin-right:5px;">
					<div class="form-group">
						<label>Nama Kegiatan</label>
						<input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
						<input type="text" name="event" class="form-control" value="<?php echo $brg->event ?>">
					</div>

					<div class="form-group">
						<label>Keterangn</label>
						<textarea id="keterangan_event" name="keterangan" class="form-control" style="height: 20rem;"><?php echo $brg->keterangan ?> </textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" class="form-control-file <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" />
						<input type="hidden" name='gambar_lama' value="<?php echo $brg->gambar ?>" />
						<div class="invalid-feedback">
							<?php echo form_error('image') ?>
						</div>
					</div>
					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
				<script>
					CKEDITOR.replace('keterangan_event');
				</script>

			<?php } ?>

		</section>
	</div>
</div>
