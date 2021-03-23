<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aduan Layanan</title>

		<link rel="icon" type="image/png" href="img/parna_logo.png">
		<link rel="stylesheet" href="css/febi.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<body>
		<!-- Header-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Layanan Aduan</a></li>
					</ul>
				</div>
			</div>
		</div>
		</section>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="komentar">
							<h3>KIRIMKAN PESAN</h3><hr class="pg-titl-bdr-bta"></hr>
							<form action="help_process.php" method="post" role="form">
								<div class="form-group">
									<p>Subjek</p>
									<input type="text" name="subjek" class="form-control" required />
								</div>
								<div class="form-group">
									<p>Pesan</p>
									<textarea name="isi" class="form-control" row="7" required></textarea>
								</div>
								<div class="text-center"><button type="submit" class="btn btn-komentar btn-lg">Kirim Pesan</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>

		<!--Footer-->
		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>

		<!-- Scroll Up button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
