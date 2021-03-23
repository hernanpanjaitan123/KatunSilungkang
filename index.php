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
		<title> Katun Silungkang</title>

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

		<div class="main-slider">
			<div id="myCarousel" class="carousel slide" dataride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- deklarasi carousel -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/slider/y2.jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Design Modern</h3>
							<p>Design Kain mengikuti era perkembangan</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/slider/y.jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Bahan</h3>
							<p>Bahan yang digunakan tidak mudah luntur dan kualitas baik</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/slider/kado2.jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Harga</h3>
							<p>Harga yang terjangkau namun hasil berkualitas</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
			<div style="background-color: white;color: white;padding: 200px">
		  <div style="margin-bottom: -180px;" align="center">
		    <h2 style="color : black">Apa itu Katun Silungkang?</h2>
		    <p style="color: black; align="center">
		      Katun Silungkang adalaha kain tenun yang berasala dari Tapanuli Selatan
		    </p>
    <br>

    <video width="1000" height="500" controls><source src="img/produk/video.mp4" type="video/mp4"/></video>
			</div>
		</div>
		<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
		<section class="main-produk">
			<div class="container">
				<div class="row">
				<center>
				<h1>Produk Kain Tenun</h1>
					<div class="row">


			<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			<div class="col-md-4">
				<br>
				<div class="card">
					<a href ="beli.php?id=<?php echo $perproduk['id_produk']; ?>"><img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt=""></a>
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>"class="btn btn-primary">beli</a>
						<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
						<br><br>
					</div>
				</div>
			</div>
			
			<?php } ?>

		</div>
		<br>
				</div>

				<center><p><a href="produk.php"><button class="more">More &raquo</button></a></p></center>
			</div>
		</section>
		</div>
		<hr>
		<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">

		</div>
		<hr>
<section class="box">
			<h4>MENGAPA MEMILIH KATUN SILUNGKANG?</b></h4>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
							<div class="services">
								<div class="icons">
									<a href="about.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
								</div>
								<h4><b>INFORMASI</b></h4>
								<p>
									Merupakan salah satu home industri di daerah Sipirok yang memproduksi Kain Tenun Silungkang
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
								<div class="icons">
									<a href="packing.php"><i class="fa fa-gift fa-2x" aria-hidden="true"></i></a>
								</div>
								<h4><b>PACKING</b></h4>
								<p>
									Ayoo packing Produk kalian dengan bentuk -bentuk yang lucu dan menarikkk ayoo semua buruannn
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
								<div class="icons">
									<a href="produk.php"><i class="fa fa-archive fa-2x" aria-hidden="true"></i></a>
								</div>
								<h4><b>PRODUK</b></h4>
								<p>
									Produk yang disediakan merupakan buatan asli masyarakat Siprok, Tapanuli Utara
									yang kualitasnya terjamin.
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
								<div class="icons">
									<a href="checkout.php"><i class="fa fa-truck fa-2x" aria-hidden="true"></i></a>
								</div>
								<h4><b>PENGIRIMAN</b></h4>
								<p>
									Menyediakan produk kain Tenun Silungkang yang siap untuk dikirimkan
									keseluruh wilayah Indonesia.
								</p>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 f-about">
							<h1>Katun Silungkang</h1>
							<p>Sebuah Website yang dibangun yang bertujuan untuk mempromosikan produk Kain Tenun Silungkang
							agar dapat lebih dikenal oleh seluruh masyarakat diseluruh Indonesia.<br></p>

						</div>
						<div class="col-md-4 l-posts">
							<h3 class="widgetheading">Visit</h3>
								<ul>
									<li><a href="http://www.del.ac.id/">Institut Teknologi Del</a></li>
									<li><a href="about.php"> Usaha Tenun Irsan</a></li>
								</ul>
						</div>
						<div class="col-md-4 f-contact">
							<h3 class="widgetheading">Hubungi Kami</h3>
							<a href="#"><p><i class="fa fa-envelope"></i> nur_Lina@gmail.com</p></a>
							<p><i class="fa fa-phone"></i>  +6282249719766</p>
							<p><i class="fa fa-home"></i> Usaha Tenun Irsan  |  Kode POS 22411
								Sitoluama Laguboti Toba Samosir, Sumatera Utara <br>
								INDONESIA</p>
						</div>
					</div>
				</div>
			</div>

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
