<?php

session_start();
include 'koneksi.php';

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
 <body style="background-color: white; color: black;">
	<!-- Heaader-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>
		
		<!--Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>
		<div>
<h2>Data Pembayaran</h2>

<?php 

//mendapatkan id_pembelian dari url
$id_pembelian = $_GET["id"];


//mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian ='$id_pembelian' ");
$detail = $ambil->fetch_assoc();

?>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail['nama'] ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail['bank'] ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp. <?php echo number_format($detail['jumlah']) ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail['tanggal'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../bukti_pembayaran/<?php echo $detail['bukti'] ?>" alt="" class="img-responsive">
	</div>
</div>


<?php
if(isset($_POST["proses"]))
{
	$resi = $_POST["resi"];
	$status = $_POST["status"];
	$koneksi->query("UPDATE pembelian SET resi_pengiriman='$resi', status_pembelian='$status' WHERE id_pembelian='$id_pembelian' ");

	echo "<script>alert('data pembelian terupdate');</script>"; 
	echo "<script>location='index.php?halaman=pembelian';</script>"; 
}

?>
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