<?php
session_start();
 //koneksi ke database 
 include 'koneksi.php';

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Packing | Katun Silungkang</title>

		<link rel="icon" type="image/png" href="img/.png">
		<link rel="stylesheet" href="css/febi.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css">
	</head>
	<body>
		<!-- Header-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

<!-- konten -->
<section class="">
	


</section>
<section class="konten">
	<div class="container">
		<center><h1>Tampilan Packing</h1>

		<div class="row">


			<?php $ambil = $koneksi->query("SELECT * FROM packing"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			
			<div class="col-md-4">
				<br>
				<div class="card">
					<img src="foto_packing/<?php echo $perproduk['foto_packing']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['jenis_packing']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['tarif_packing']); ?></h5>
						<br><br>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
		</center
	</div>
</section>
<br><br>
<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>

		<!-- Scroll Up Button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.singlePageNav.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>
		<script>
			$('.carousel').carousel({			//Waktu Carousel
				interval: 3000
			})
		</script>
</body>
</html>