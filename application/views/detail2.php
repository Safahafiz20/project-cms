<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $judul; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=base_url('assets/detail/')?>style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
		crossorigin="anonymous" />
</head>

<body>



	<div class="card-wrapper">
		<div class="card">
			<!-- card left -->
			<div class="product-imgs">
				<div class="img-display">
					<div class="img-showcase">
						<img style="height:600px; width:500px;" src="<?=base_url('assets/upload/konten/' . $konten->foto)?>">
					</div>
				</div>
				<div class="img-select">


				</div>
			</div>
			<!-- card right -->
			<div class="product-content">
				<h2 class="product-title"><?=$konten->judul;?></h2>
				<div class="product-detail">
					<h2>about this item: </h2>
					<p style="font-size:30px;"><?=$konten->keterangan;?></p>
				</div>


				<div class="social-links">
					<p>Share At: </p>
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
	</div>


	<script src="script.js"></script>
</body>

</html>
