<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Login Pelanggan</title>

		<link rel="icon" type="image/png" href="img/.png">
		<link rel="stylesheet" href="css/febi.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css">
	</head>
<body>
<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

<br><br>
<center>	
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Masuk Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-goup">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-goup">
							<label>Kata Sandi</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-goup">
							<p>belum punya akun ? <a href="daftar.php">daftarkan akun anda </a> </p>
							
						</div>	
						<br>
						<button class="btn btn-primary" name="login">Masuk</button>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
</center>

<?php 
// jika tombol login ditekan
if (isset($_POST["login"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	//lakukan query untuk ngecek pelanggan dari db
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password' ");

	//menghitung akun yang terambil
	$akunyangcocok = $ambil->num_rows;

	// jika 1 akun yang cocok maka dapat login
	if ($akunyangcocok==1)
	{
		//anda sudah login
		//mendapatkan akun dalam bentuk array
		$akun = $ambil->fetch_assoc();
		//simpan di session pelanggan
		$_SESSION["pelanggan"] = $akun;
		echo "<script>alert('anda sukses Login');</script>";
		echo "<script>location='index.php';</script>";	

		//jika sudah belanja
		if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"]))
		{
			echo "<script>location='checkout.php';</script>";		
		}
		else
		{
			echo "<script>location='riwayat.php';</script>";	
		}
		

	}
	else
	{
		//anda gagal login
		echo "<script>alert('anda gagal login, periksa akun anda');</script>";
		echo "<script>location='login.php';</script>";
	}
}	
?>

</body>
</html>