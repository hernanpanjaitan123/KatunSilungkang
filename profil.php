<?php 
session_start();
// $s = "SELECT * FROM Pelanggan";

// require_once(dirname(__FILE__).'/koneksi.php')
// $ambil = $koneksi->query("SELECT * FROM pelanggan");
// $yangcocok = $ambil->num_rows;

?>
<?php 

include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profil</title>

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
	
			require_once(dirname(__FILE__).'/commons/menubar.php');
	?>
	
	<div class="container">
	
			<h1>Data Diri Pelanggan</h1>
		<table border="0">
	
		<tr>
			<td>Nama </td> 
			<td>:</td>
			<td> <?php echo $_SESSION["pelanggan"]['nama_pelanggan'] ;?></td>
		</tr>	
		<br>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td> <?php echo $_SESSION["pelanggan"]['email_pelanggan'] ;?></td>
			</tr>
		<br>
		<tr>
			<td>No.Telepon</td>
			<td>:</td>
			 <td><?php echo $_SESSION["pelanggan"]['telepon_pelanggan'] ;?></td>
			</tr>
		<br>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_SESSION["pelanggan"]['alamat_pelanggan'] ;?></td>
		</tr>
	</h2>

		</table>
		
    </div>
</div>
<br>
<br>

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