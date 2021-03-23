<?php
session_start();


//keranjang
include 'koneksi.php';

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>location='produk.php';</script>";
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
		<title>Keranjang</title>

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

<section class="kontent">
	<div class="container">
		<center><h1>Keranjang Belanja </h1></center>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
				<!-- menampilkan produk yang sedang diperulang berdasarkan id_produk -->
				<?php 
				$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah["harga_produk"]*$jumlah;
				?>

				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["nama_produk"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					<td>
						<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a>
						<a href="detail.php?id=<?php echo $id_produk ?>" class="btn btn-info btn-xs">Update</a>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php endforeach  ?>

			</tbody>
		</table>
		<br>
		<a href="produk.php" class="btn btn-default">Lanjutkan Belanja</a>
		<a href="checkout.php" class="btn btn-primary">Checkout</a>
	</div>
	<br><br><br><br>
</section>

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