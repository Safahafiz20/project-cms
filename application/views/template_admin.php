<!doctype html>
<html lang="en">


<title><?= $judul_halaman ?></title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cms</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/oo/src/')?>assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="<?=base_url('assets/oo/src/')?>assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?=base_url('assets/oo/src/')?>assets/images/logos/logo-light.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Admin Dasboard</span>
            </li>
            <?php $menu = $this->uri->segment(2);?>
            <li class="sidebar-item" <?php if($menu=="home") { echo "aktive"; }?>>
              <a class="sidebar-link" href="<?= site_url('admin/home')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item" <?php if($menu=="user") { echo "aktive"; }?>>
             <a class="sidebar-link" href="<?= site_url('admin/user')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">user</span>
              </a>
            </li>
            <li class="sidebar-item"<?php if($menu=="caraousel") { echo "aktive"; }?>>
              <a class="sidebar-link" href="<?= site_url('admin/caraousel')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">caraousel</span>
              </a>
            </li>
            <li class="sidebar-item"<?php if($menu=="kategori") { echo "aktive"; }?>>
              <a class="sidebar-link" href="<?= site_url('admin/kategori')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">kategori konten</span>
              </a>
            </li>
            <li class="sidebar-item"<?php if($menu=="konten") { echo "aktive"; }?>>
              <a class="sidebar-link" href="<?= site_url('admin/konten')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">konten</span>
              </a>
            </li>
            <li class="sidebar-item"<?php if($menu=="konfigurasi") { echo "aktive"; }?>>
              <a class="sidebar-link" href="<?= site_url('admin/konfigurasi')?>" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">konfigurasi</span>
              </a>
            </li>
           
          <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3"> 
            <div class="d-flex">
              <div class="unlimited-access-img">
                <img src="<?=base_url('assets/oo/src/')?>assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?=base_url('assets/oo/src/')?>assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    
                    <a href="<?= base_url('home')?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
    
            <div class="col-lg-12">
          <?=$contents;?>

      </div>
    </div>
  </div>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/js/sidebarmenu.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/js/app.min.js"></script>
  <script src="<?=base_url('assets/oo/src/')?>assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>