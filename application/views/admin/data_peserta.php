<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Pserta</h1>
				</div><!-- /.col -->

			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

	</div>


	<section class="content">
		<table class="table">
			<tr>
				<th>NO</th>
				<th>NAMA Peserta</th>
				<th>NIK</th>
				<th>EMAIL</th>
				<th>NO HANDPHONE</th>
				<th>Nama Kegiatan</th>
				<th>Bukti Pembayaran</th>
				<th colspan="2">AKSI</th>
			</tr>
			<?php

			$no = 1;
			foreach ($kegiatan as $kgt) : ?> <tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $kgt->nama ?></td>
					<td><?php echo $kgt->nik ?></td>
					<td><?php echo $kgt->email ?></td>
					<td><?php echo $kgt->no_hp ?></td>
					<td><?php echo $kgt->kegiatan ?></td>
					<td>
						<?php
						if ($kgt->gambar == null) {
							echo "gambar kosong";
						} else {
						?><img src="<?php echo base_url(); ?>assets/img/<?php echo $kgt->gambar; ?>" width="80" class="mx-auto d-block"><?php
																																		}
																																			?>

					</td>


					<td onclick="javascript: return confirm('hapus data?')">
						<?php echo anchor('admin/data/hapus/' . $kgt->id, ' <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
</div>') ?> </td>
					<td>
				</tr>
			<?php endforeach; ?>
		</table>
	</section>





</div>
