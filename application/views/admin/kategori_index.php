<div id='ngilang'>
	<?=$this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
			Tambah Kategori
		</button>
		<!-- Modal -->
		<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/kategori/simpan')?>" method='post'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama kategori</label>
									<input type="text" class="form-control" placeholder="nama" name="nama_kategori"
										required />
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
									Close
								</button>
								<button type="submit" class="btn btn-primary">Tambah</button>

							</div>
						</div>

					</div>

				</form>
			</div>
			<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<form action="<?= base_url('admin/user/simpan')?>" method='post'>
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalCenterTitle">tambah user</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col mb-3">
										<label class="form-label">Nama</label>
										<input type="text" class="form-control" placeholder="nama" name="nama"
											required />
									</div>
								</div>
								<div class="row">
									<div class="col mb-3">
										<label class="form-label">username</label>
										<input type="text" class="form-control" placeholder="username" name="username"
											required />
									</div>
								</div>
								<div class="row">
									<div class="col mb-3">
										<label class="form-label">password</label>
										<input type="password" class="form-control" placeholder="password"
											name="password" required />
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
				<th>nama kategori konten</th>

				<th>aksi</th>

			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1; foreach( $kategori as $aa){?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $aa['nama_kategori']?></td>
				<td>
					<a href="<?php echo site_url('admin/kategori/delete/'.$aa['id_kategori']); ?>"
						class="btn btn-sm btn-danger" onClick="return confirm('Apakah Anda Yakin Menghapus?')"><span
							class="tf-icons bx bx-trash">Hapus</span></a>
					<a href="<?= base_url('admin/kategori/edit/'.$aa['id_kategori'])?>" id="delete-button"
						class="btn btn-warning btn-sm"><span class="tf-icons bx bx-edit">Edit</span></a>
					<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-md" role="document">
							<form action="<?= base_url('admin/user/simpan')?>" method='post'>
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalCenterTitle">tambah user</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Nama</label>
												<input type="text" class="form-control" placeholder="nama" name="nama"
													required />
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">username</label>
												<input type="text" class="form-control" placeholder="username"
													name="username" required />
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">password</label>
												<input type="password" class="form-control" placeholder="password"
													name="password" required />
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
							</form>
						</div>
				</td>
			</tr>
			<?php $no++;} ?>
		</tbody>
	</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
