<div id='ngilang'>
	<?=$this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			tambah konten
		</button>
		<!-- Modal -->
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<form action="<?= base_url('admin/konten/simpan')?>" method="post" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">tambah konten</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">judul</label>
									<input type="text" class="form-control" placeholder="nama" name="judul" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach( $kategori as $aa) { ?>
										<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Harga</label>
									<input type="text" class="form-control" placeholder="harga" name="harga" required />
								</div>
							</div>
							<div class="col mb-3">
								<label class="form-label">keterangan</label>
								<textarea name="keterangan" class="form-control"></textarea>
							</div>
						</div>
						<div class="col mb-3">
							<label class="form-label">foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png,image/jpeg" />
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								Close
							</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>


</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<form action="<?= base_url('admin/user/simpan')?>" method='post'>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">tambah user</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" placeholder="nama" name="nama" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">username</label>
							<input type="text" class="form-control" placeholder="username" name="username" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">password</label>
							<input type="password" class="form-control" placeholder="password" name="password"
								required />
						</div>

						<div class="row">
							<div class="col mb-3">
								<label class="form-label">level</label>
								<select name="level" class="form-control">
									<option value="admin">admin</option>
									<option value="kontributor">kontributor</option>
								</select>
							</div>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">daftar</button>

				</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="table-responsive text-nowrap">
	<h5>Kategori</h5>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>no</th>
				<th>judul</th>
				<th>kategori konten</th>
				<th>Tanggal</th>
				<th>Kreator</th>
				<th>Foto</th>
				<th>aksi</th>

			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1; foreach( $konten as $aa){?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $aa['judul']?></td>
				<td><?= $aa['nama_kategori']?></td>
				<td><?= $aa['tanggal']?></td>
				<td><?= $aa['nama']?></td>
				<td>
					<a href="<?=base_url('assets/upload/konten/') . $aa['foto']?>" target="_blank">
						<span class="tf-icons bx bx-search"></span>Lihat foto
					</a>
				</td>
				<td>
					<a href="<?php echo site_url('admin/konten/delete/'.$aa['foto']); ?>" class="btn btn-sm btn-danger"
						onClick="return confirm('Apakah Anda Yakin Menghapus?')"><span
							class="tf-icons bx bx-trash">Hapus</span></a>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
						data-bs-target="#konten<?= $no; ?>">
						edit
					</button>
					<!-- Modal -->
					<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<form action="<?= base_url('admin/konten/update')?>" method="post"
								enctype="multipart/form-data">
								<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul']?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">judul</label>
												<input type="text" class="form-control" value="<?= $aa['judul']?>"
													name="judul" />
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach( $kategori as $uu) { ?>
													<option
														<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";}?>
														value="<?= $uu['id_kategori']?>"><?= $uu['nama_kategori']?>
													</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col mb-3">
											<label class="form-label">harga</label>
											<textarea name="harga"
												class="form-control"><?= $aa['harga']?></textarea>
										</div>
										<div class="col mb-3">
											<label class="form-label">keterangan</label>
											<textarea name="keterangan"
												class="form-control"><?= $aa['keterangan']?></textarea>
										</div>
									</div>
									<div class="col mb-3">
										<label class="form-label">foto</label>
										<input type="file" name="foto" class="form-control"
											accept="image/png,image/jpeg" />
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
											Cancel
										</button>
										<button type="submit" class="btn btn-primary">Update</button>
							</form>
						</div>
					</div>

				</td>
			</tr>
			<?php $no++;} ?>
		</tbody>
	</table>
</div>
