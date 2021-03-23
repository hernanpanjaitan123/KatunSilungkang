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

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Riwayat Belanja</title>
		<link rel="stylesheet" href="css/febi.css">
	

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
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



<section class="riwayat">
	<div class="container">
		<center><h1>Riwayat Belanja <?php echo $_SESSION["pelanggan"]["nama_pelanggan"] ?></h1></center><br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Total</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<?php $nomor=1; ?>
			<?php 
				//mendapatkan id pelanggan yang login dari session
				$id_pelanggan = $_SESSION["pelanggan"]['id_pelanggan'];

				$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan'");
				 while($pecah = $ambil->fetch_assoc()) { 
			?>
			<tbody>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["tanggal_pembelian"] ?></td>
					<td><?php echo $pecah["status_pembelian"] ?></td>
					<td>Rp. <?php echo number_format($pecah["total_pembelian"]); ?></td>
					<td>
						<a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-info">Nota</a>
						<!-- <a href="pembayaran.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-success">Pembayaran</a> -->

					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>
<br> <br>

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