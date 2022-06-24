<div class="container-fluid">

	<br><br>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 50pt;"><i class="fa fa-plus">Tambah Kegiatan </i></button>

	<div class="row" style="margin-top: 20px; margin-left:60px;">

		<?php $id = 0;
		foreach ($barang as $brg) {

		?>


			<div class="card" style="width: 19rem; height: 26rem; margin:6px;">

				<div class="card-body">
					<div class="row text-center">

						<h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
					</div><br>
					<div style="height: 6rem;">
						<img src="<?php echo base_url() . '/assets/img/' . $brg->gambar ?>" class="card-img-top" alt="..." style="height: 100px;"></br>
					</div>

					<!-- Display the countdown timer in an element -->




					<span class="badge badge-primary"><?php echo $brg->harga ?></span>
					<p class="card-text">Tempat:<?php echo $brg->tempat ?></p>
					<p class="card-text">Waktu:<?php echo $brg->waktu ?></p>
					<div class="">
						<td>
							<?php echo anchor('admin/dashboard_admin/edit/' . $brg->id, ' <div class="btn btn-primary"><i>Edit</i></div>') ?>
							<?php echo anchor('admin/dashboard_admin/hapus/' . $brg->id, ' <div class="btn btn-primary"><i>Hapus</i></div>') ?>
							<?php echo anchor('admin/dashboard_admin/detail/' . $brg->id, ' <div class="btn btn-primary" name="detail" id="detail"><i>Detail</i></div>') ?>

						</td>
					</div>

				</div>
			</div>
			&ensp; &ensp;

		<?php $id++;
		} ?>




		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Kegiatan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?= form_open_multipart('admin/dashboard_admin/tambah_aksi'); ?>

						<div class="form-group">
							<label>Nama Kegiatan</label>
							<input type="text" name="nama_barang" class="form-control">
						</div>

						<div class="form-group">
							<label>Tempat</label>
							<input type="text" name="tempat" class="form-control">
						</div>

						<div class="form-group">
							<label>Waktu</label>
							<input type="text" name="waktu" class="form-control">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga" class="form-control">
						</div>
						<div class="form-group">
							<label>Batas Pendaftararan</label>
							<input type="datetime-local" name="waktu_daftar" class="form-control">
						</div>

					</div>
					<div class="form-group">
						<label>Keterangn</label>
						<textarea id="keterangan_barang" name="keterangan" class="form-control" style="height: 20rem;"></textarea>
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
				CKEDITOR.replace('keterangan_barang');
			</script>
		</div>


	</div>
</div>
