<?php
session_start();
 //koneksi ke database 
 include 'koneksi.php';

 //jika tidak ada sessio pelanggan (belum Login)
 if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
  {
 	echo "<script>alert('silahkan Login terlebih dahulu');</script>";
 	echo "<script>location='login.php';</script>";
 	exit();


 }	
 	//mendapatkan id pembelian dari Url
 	$idpem = $_GET["id"];
 	$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem' ");
 	$detpem = $ambil->fetch_assoc();

 	// echo "<pre>";

 	// print_r($detpem);
 	// print_r($_SESSION);

 	// echo "</pre>";

 	//mendapatkan id_pelanggan yang beli
 	$id_pelanggan_beli = $detpem["id_pelanggan"];
 	//mendapatkan id_pelanggan yang login
 	$id_pelanggan_login = $_SESSION["pelanggan"]["id_pelanggan"];

 	if ($id_pelanggan_login !== $id_pelanggan_beli) {
	 	echo "<script>alert('Maaf salah');</script>";
	 	echo "<script>location='riwayat.php';</script>";
	 	exit();
 	}

?>
<?php
	require_once(dirname(__FILE__).'/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda | Katun Silungkang</title>

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

	<div class="container"><center>
		<h1>Konfirmasi Pembayaran</h1></center>
		<p>Kirim Bukti Pembayaran Anda Disini</p>
		<div class="alert alert-info">Total Tagihan Anda
			<strong>Rp. <?php echo number_format($detpem["total_pembelian"]) ?></strong>
		</div>


		<form method="post" enctype="multipart/form-data">
			<div class="form-gorup">
				<label>Nama Penyetor</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-gorup">
				<label>Bank</label>
				<input type="text" class="form-control" name="bank">
			</div>
			<div class="form-gorup">
				<label>Jumlah</label>
				<input type="number" class="form-control" name="jumlah" min="1">
			</div>
			<div class="form-gorup">
				<label>Foto Bukti</label>
				<input type="file" class="form-control" name="bukti">
				<p class="text-danger">foto bukti harus JPG Max 2 MB</p>
			</div>
			<button class="btn btn-primary" name="Kirim" >Kirim</button>
		</form>
	</div>

	<?php 
	//jika ada toombol kirim
	if (isset($_POST["Kirim"]))
	{
		//upload dulu foto bukti_pembayaran  
		$idpem = $_GET['id'];
		$namabukti = $_FILES["bukti"]["name"];
		$lokasibukti = $_FILES["bukti"]["tmp_name"];
		$namafiks = date("YmdHis").$namabukti;
		move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

		$nama = $_POST["nama"];
		$bank = $_POST["bank"];
		$jumlah = $_POST["jumlah"];
		$tanggal = date("Y-m-d");

		//simpan pembayaran
		$koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,bank,jumlah,tanggal,bukti)
			VALUES('$idpem', '$nama', '$bank', '$jumlah', '$tanggal', '$namafiks') ");

		//update bukkti tf pemesanan dari pending menjadi sudah kirim pembayaran
		$koneksi->query("UPDATE pembelian SET status_pembelian='sudah kirim data pembayaran' WHERE id_pembelian='$idpem' ");

		echo "<script>alert('terimakasih, Sudah mengirimkan Bukti pembayaran');</script>";
	 	echo "<script>location='riwayat.php';</script>";

	}
	?>
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
