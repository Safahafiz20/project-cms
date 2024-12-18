<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
		rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?=base_url('assets/car/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/car/')?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?=base_url('assets/car/')?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?=base_url('assets/car/')?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Topbar Start -->
	<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
		<div class="row">
			<!-- <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
				<div class="d-inline-flex align-items-center">
					<a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i><?= $konfig->no_wa;?></a>
					<span class="text-body">|</span>
					<a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i><?= $konfig->email;?></a>
				</div>
			</div>
			<div class="col-md-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-body px-3" href="<?= $konfig->facebook;?>">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-body px-3" href="<?= $konfig->instagram;?>">
						<i class="fab fa-instagram"></i>
					</a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<div class="container-fluid position-relative nav-bar p-0">
		<div class="position-relative px-lg-5" style="z-index: 9;">
			<nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
				<a href="" class="navbar-brand">
					<h1 class="text-uppercase text-primary mb-1"><?= $konfig->judul_website;?> </h1>
				</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
					<div class="navbar-nav ml-auto py-0">
						<a href="<?= base_url('home') ?>" class="nav-item nav-link active">Home</a>
				
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
							<div class="dropdown-menu rounded-0 m-0">
								<?php foreach ($kategori as $kate) { ?>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="dropdown-item">
									<?= $kate['nama_kategori']?>
								</a>
								<?php }?>
							</div>
						</div>
						<a href="<?= base_url('auth')?>" class="nav-item nav-link">Login</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<br>
	<br>

	<!-- Carousel Start -->
	<div class="container-fluid p-0" style="margin-bottom: 90px;">
		<div id="header-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php $no = 1; foreach ($caraousel as $cc) { ?>
				<div class="carousel-item <?= $no === 1 ? 'active' : '' ?>">
					<img style="height:800px;" src="<?= base_url('assets/upload/caraousel/' . $cc['foto']) ?>"
						class="d-block w-100" alt="...">
				</div>
				<?php $no++; ?>
				<?php } ?>

			</div>
			<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
				<div class="btn btn-dark" style="width: 45px; height: 45px;">
					<span class="carousel-control-prev-icon mb-n2"></span>
				</div>
			</a>
			<a class="carousel-control-next" href="#header-carousel" data-slide="next">
				<div class="btn btn-dark" style="width: 45px; height: 45px;">
					<span class="carousel-control-next-icon mb-n2"></span>
				</div>
			</a>
		</div>
	</div>
	<!-- Carousel End -->


	<!-- About Start -->


	<!-- Rent A Car Start -->
	<div class="container-fluid py-5">
		<div class="container pt-5 pb-3">
			<h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary"><?= $konfig->judul_website;?> </span></h1>
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<img class="w-75 mb-4" src="img/about.png" alt="">
					<p><?= $konfig->profil_website;?></p>
				</div>
			</div>
			<div class="container-fluid py-5">
				<div class="container pt-5 pb-3">
					<center>

						<h2 class="mb-5">DISPLAY</h2>
					</center>
					<div class="row">

						<?php foreach ($konten as $aa) {?>
						<div class="col-lg-4 col-md- mb-2">
							<div class="rent-item mb-4">
								<img style="height:250px;" class="img-fluid"
									src="<?=base_url('assets/upload/konten/' . $aa['foto'])?>" alt="">
								<h4 class="text-uppercase mb-4"><?= $aa['judul']?></h4>
								<h4 class="text-uppercase mb-4">Rp. <?= number_format($aa['harga'],0,',','.')?></h4>


								<a class="btn btn-primary px-3"
									href="<?=base_url('home/artikel/' . $aa['slug'])?>">Detail</a>
							</div>
						</div>
						<?php }?>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Rent A Car End -->


	<!-- Team Start -->

	<!-- Team End -->


	<!-- Banner Start -->
	<div class="container-fluid py-5">
		<div class="container py-5">
			<div class="row mx-0">
				<div class="col-lg-6 px-0">
					<div class="px-5 bg-secondary d-flex align-items-center justify-content-between"
						style="height: 350px;">
						<img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="<?=base_url()?>img/banner-left.png" alt="">
						<div class="text-right">
							<h3 class="text-uppercase text-light mb-3">Want to buy your dream motorbike?</h3>
							<p class="mb-4">Please Contact and Come to Our Showroom</p>

						</div>
					</div>
				</div>
				<div class="col-lg-6 px-0">
					<div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
						
						<div class="text-left">
							<h3 class="text-uppercase text-light mb-3">Seeing Your Dream Motorcycle?</h3>
							<p class="mb-4">Please Come to Our Showroom</p>

						</div>
						<img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="<?=base_url()?>img/banner-right.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->


	<!-- Testimonial Start -->

	<!-- Testimonial End -->


	<!-- Contact Start -->

	<!-- Vendor End -->


	<!-- Footer Start -->
	<div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px; ">
		<div  style="position:relative;left:5rem;">
		<div class="row pt-5">

				<div class="col-lg-3 col-md-6 mb-5">
					<h4 class="text-uppercase text-light mb-4">Contack Us</h4>
					<p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i><?= $konfig->alamat;?></p>
					<p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i><?= $konfig->no_wa;?></p>
					<p><i class="fa fa-envelope text-white mr-3"></i><?= $konfig->email;?></p>
					<div class="d-flex justify-content-start">
						<!-- <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="<?= $konfig->facebook;?>"><i
						class="fab fa-facebook-f"></i></a>
						<a class="btn btn-lg btn-dark btn-lg-square" href="<?= $konfig->instagram;?>"><i
						class="fab fa-instagram"></i></a> -->
					</div>
				</div>
				<div class="col-lg-1 col-md-6 mb-5">
					<h4 class="text-uppercase text-light mb-4">categories</h4>
					<div class="d-flex flex-column justify-content-start">
						<?php foreach ($kategori as $kate) { ?>
							<a class="text-body mb-2" href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><i
							class="fa fa-angle-right text-white mr-2"></i><?= $kate['nama_kategori']?>
						</a>
						<?php }?>
						
					</div>
				</div>
				<div class="col-lg-1 col-md-1 mb-5">
					
					<div class="row mx-n1">
						<div class="col-4 px-1 mb-2">
							<a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
						</div>
						<div class="col-4 px-1 mb-2">
							<a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
						</div>
						<div class="col-4 px-1 mb-2">
							<a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
						</div>
						<div class="col-4 px-1 mb-2">
							<a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-5">
					<h4 class="text-uppercase text-light mb-4"><?= $konfig->judul_website;?></h4>
					<p class="mb-4"><?= $konfig->profil_website;?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
		<p class="mb-2 text-center text-body">&copy; <a href="#"><?= $konfig->judul_website;?></a></p>


		<!-- Footer End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/easing/easing.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/waypoints/waypoints.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/tempusdominus/js/moment.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/tempusdominus/js/moment-timezone.min.js"></script>
		<script src="<?=base_url('assets/car/')?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

		<!-- Template Javascript -->
		<script src="js/main.js"></script>
</body>

</html>
