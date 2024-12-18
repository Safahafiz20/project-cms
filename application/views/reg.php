
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>regristrasi</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/oo/src/')?>assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="<?=base_url('assets/oo/src/')?>assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="<?=base_url('assets/oo/src/')?>index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                </a>
                <p class="text-center">Silahkan Login</p>
                <form action="<?= base_url('auth/simpan')?>" method="post">
                  <div class="mb-3">
                    <input type="hidden"name="level" value='user'>
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">reg</button>
                  <a href=""></a> <a href="<?= base_url('auth/login')?>">login</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>