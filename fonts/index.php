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

		<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  height: 400px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 60s ease;
}

.active {
  background-color: #b80000;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@-webkit-keyframes fadeInUp {
	0% {
		opacity: 0;
		-webkit-transform: translateY(20px);
	}
	
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInUp {
	0% {
		opacity: 0;
		-moz-transform: translateY(20px);
	}
	
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInUp {
	0% {
		opacity: 0;
		-o-transform: translateY(20px);
	}
	
	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}

@keyframes fadeInUp {
	0% {
		opacity: 0;
		transform: translateY(20px);
	}
	
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInUp {
	-webkit-animation-name: fadeInUp;
	-moz-animation-name: fadeInUp;
	-o-animation-name: fadeInUp;
	animation-name: fadeInUp;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
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

		</br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slider/kado.jpg" style="width:100%">
  <div class="text">Yukk Packing Belanjamu</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slider/kado4.jpg" style="width:100%">
  <div class="text">Motif Agave</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slider/kado2.jpg" style="width:100%">
  <div class="text">Motif Pita</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">

</body>
</html> 
		
  <br>
  <br>
  <br>
    <section class="box">
		<br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
							<div class="services">
								<div class="icons">
									<a href="about.php"></a>
								</div>
								<h4><b>Kenapa Kami Membuat OnTenSi?</b></h4>
							<p>
								Tenun adalah unsur budaya yang berasal dari keterampilan yang diturunkan dari generasi ke generasi. Begitu banyak potensi ekonomi yang bisa dikembangkan dengan tenun. 

Perajin tenun yang selama ini hanya mengerjakan tenun yang penggunaannya terbatas pada kesempatan seremonial adat, diharapkan dapat mengembangkan desain motif yang lebih modern dan popular sehingga dapat mengembangkan pemasaran dan meluaskan pemakaian tenun kepada orang awam. 
</p>

				<center><p><a href="about.php"><button class="more">Selanjutnya</button></a></p></center>
	




								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
							 <video width="500" height="250" controls><source src="img/produk/video.mp4" type="video/mp4"/></video>
							
							
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</section>
  
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
					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
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
			<h4>MENGAPA MEMILIH OnTensi?</b></h4>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
							<div class="services">
								<div class="icons">
									<a href="about.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
								</div>
								<h4><b>LOKASI</b></h4>
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
