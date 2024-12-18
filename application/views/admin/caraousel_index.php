<div id='ngilang'>
	<?=$this->session->flashdata('alert') ?>
</div>
<div class="card mb-0">
	<div class="card-body">
		<form action="<?= base_url('admin/caraousel/simpan')?>" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="disabledTextInput" class="form-label">judul</label>
				<input type="text" class="form-control" placeholder="judul foto" name="judul" required>
			</div>
			<div class="mb-3">
				<label for="disabledSelect" class="form-label">pilih foto ukuran (1:3)</label>
				<input type="file" class="form-control" name="foto">
			</div>
			<div class="mb-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<div class="col-md-12 mb-3 ">
	<?php foreach($caraousel as $aa){?>
	<div class="card">
		<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul']?></h5>
			<a href="<?php echo site_url('admin/caraousel/delete/'.$aa['foto']); ?>" class="btn btn-sm btn-danger"
				onClick="return confirm('Apakah Anda Yakin Menghapus?')"><span
					class="tf-icons bx bx-trash">Hapus</span></a>
		</div>
	</div>
</div>
<?php } ?>
