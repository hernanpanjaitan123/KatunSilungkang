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
		<title>Informasi</title>

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

<section class="">

	<div style="text-align:center;">
		<h2><b>USAHA TENUN IRSAN</b></h2></hr>
	</div>
	<div class="book">
		<div class="container">
			<div class="col-md-12" >
				<img src="img/icon/angkar.jpg" alt="" class="img-responsive" style="width:100%;height: 320px;border-radius:5px;" align="center" />	<br>
				<p style="text-align:justify;">
				</br>
				<font size=4>
				Usaha Tenun Irsan (Owner : Nur Lina Sihombing) merupakan salah satu home industri di daerah Sipirok yang memproduksi Kain Tenun Silungkang. Kain tenun ini memiliki kekhasan tersendiri baik dari segi bahan maupun ragam hias yang mendasari pembuatannya.
				Kain tenun Silungkang semakin banyak karena penggunaan nya lebih beragam bisa digunakan sebagai bahan dasar baju, rok, selendang dan pakaian lainnya, tidak seperti kain Ulos yang penggunaan nya hanya di waktu tertentu saja.
			<br>Berikut daftar beberapa jenis motif dari Kain tenun Silungkang :</br>
				</p>
			</div>		
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="col-md-4" >				
			<img src="img/icon/sijobar.jpg" alt="" class="img-thumbnail" />					
		</div>
		
		<div class="konten">
			<div class="col-md-8" >	
		
				<h2><b>Motif Kalimantan</b></h2>
				<p>
				Motif ini dipakai sebagai selendang, tali-tali, 
				juga motif ini diberikan kepada anak cucu yang 
				baru lahir terutama anak pertama yang memiliki 
				maksud dan tujuan sekaligus sebagai Simbol besarnya 
				keinginan agar si anak yang lahir baru kelak diiringi 
				kelahiran anak yang seterusnya, motif ini juga dapat 
				dipergunakan sebagai Parompa (alat gendong) untuk anak.
				</p>				
			</div>
		</div>
		</div>
		
		<hr>
	
	<div class="container">
			<div class="col-md-4" >
			<img src="img/icon/4.jpg" alt="" class="img-thumbnail" />	
				</div>
				
			<div class="konten">
			<div class="col-md-8" >	
				<h2><b>Motif Angkar</b></h2>
				<p>
				Motif angkar adalah lambang kehidupan. 
				Selain lambang kehidupan, motif ini juga lambang doa 
				restu untuk kebahagian dalam kehidupan, terutama dalam 
				hal keturunan, yakni banyak anak (gabe) bagi setiap keluarga 
				dan panjang umur (saur sarimatua). Dalam upacara adat perkahwinan, 
				kain tenun motif angkar ini diberikan oleh orng tua pengantin perempuan kepada ibu 
				pengantin lelaki sebagai ‘kain pargomgom’ yang maknanya agar besannya
				ini atas izin Tuhan YME tetap dapat melalui bersama sang menantu anak 
				dari sipemberi kain tenun tadi.
				</p>				
			</div>
		</div>	
	</div>
	
	
	<hr>
	<div class="container">
		<div class="col-md-4" >				
			<img src="img/icon/y2.jpg" alt="" class="img-thumbnail" />					
		</div>
		<div class="konten">
			<div class="col-md-8" >	
				<h2><b>Motif Sijobar</b></h2>
				<p> 
				Kain motif sijobar ini digunakan untuk mengulosi seseorang yang dianggap 
				picik dengan harapan agar Tuhan akan memberikan hasil yang baik, 
				dan orng yang rajin berkerja. Motif sijobar juga 
				digolongkan sebagai kain berderajat tinggi, sekalipun cara pembuatannya 
				lebih sederhana.
				</p>				
			</div>
		</div>
	</div>

	<hr>
	<div class="container">
		<div class="col-md-4" >				
			<img src="img/icon/test2.jpg" alt="" class="img-thumbnail" />					
		</div>
		<div class="konten">
			<div class="col-md-8" >	
				<h2><b>Motif Sirangkak</b></h2>
				<p>
				Motif ini di pakai sebagai Hande-hande (selendang) pada 
				waktu margondang (menari dengan alunanan musik) dan 
				juga di pergunakan oleh pihak Hula-hula (orang tua dari pihak 
				istri) untuk manggabei (memberikan berkat) kepada pihak borunya
				(keturunannya) karena itu disebut juga kain gabe-gabe (berkat).
				</p>				
			</div>
		</div>
	</div>
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
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
    
</body>
</html>