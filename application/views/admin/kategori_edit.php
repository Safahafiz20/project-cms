<?php foreach($kategori as $aa){ ?>
        <h2 class="mb-4">Edit kategori</h2>
        <form action="<?= base_url('admin/kategori/update')?>" method="post">
          
            <div class="mb-3">
                <label for="username" class="form-label">nama kategori</label>
                <input type="text" class="form-control" id="username" name="nama_kategori" placeholder="Masukkan username" value="<?= $aa['nama_kategori'];?>">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id_kategori" value="<?= $aa['id_kategori'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php }?>