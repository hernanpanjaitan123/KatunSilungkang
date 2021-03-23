<?php 
session_start();
?>
<?php 

include 'koneksi.php';

?>
<?php 
//mendapatkan produk dari url
$id_produk = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk ='$id_produk'");
$detail = $ambil->fetch_assoc();


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
<section class="kontent">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive">
			</div>
			<div class="col-md-6">
				<h2><?php echo $detail["nama_produk"]; ?></h2>
				<h3><?php echo $detail["deskripsi_produk"]; ?></h3>
				<h3><b>Rp. <?php echo number_format($detail["harga_produk"]); ?></b></h3>

				<h4>Stok : <?php echo $detail["stok_produk"]; ?></h4>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="number" min="1" class="form-control" name="jumlah" max="<?php echo $detail['stok_produk']; ?>">
							<div class="input-group-btn">
								<button class="btn btn-primary" name="beli">Beli</button>
							</div>
						</div>
					</div>
				</form>

				<?php 
				//jika ada tombol beli
				if (isset($_POST["beli"]))
				{
					//mendapatkan jumlah yang diinputkan
					$jumlah = $_POST["jumlah"];
					//masukan ke keranjang belanja
					$_SESSION["keranjang"][$id_produk] = $jumlah;

					echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";	
					echo "<script>location='keranjang.php';</script>";	
				}

				?>


				
			</div>
		</div>
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
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
    
</body>
</html>