<?php
	require_once(dirname(__FILE__).'/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar | Katun Silungkang</title>

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
<body background="img/background.jpg" style="background-size:cover;">
		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
			<div class="form">

 			<div class="first-row">
					<a href="index.php"><img src="img/avatar2.png" alt="login" class="icon-login"></a>
					<h2 class="first-login">DAFTAR AKUN</h2>
			  </div>
			  <div class="regisForm" >
					<form method="post"> 
						<div class="input-group">
								<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
								<span class="input-group-addon">
						  		<span class="fa fa-user fa-fw"></span>
								</span>
						</div>
					    <div class="input-group">
						 		<input type="email" name="email" class="form-control" placeholder="Email">
						 		<span class="input-group-addon">
								 <span class="fa fa-envelope fa-fw"></span>
						 		</span>
					    </div>
					     <div class="input-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
								<span class="input-group-addon">
								<span class="fa fa-key fa-fw"></span>
								</span>
					    </div>
					    <div class="input-group">
								<input type="text" name="alamat" class="form-control" placeholder="Alamat">
								<span class="input-group-addon">
								 <span class="fa fa-home fa-fw"></span>
								</span>
					    </div>
					    <div class="input-group">
								<input type="text" name="telepon" class="form-control" placeholder="Telepon">
								<span class="input-group-addon">
								<span class="fa fa-phone fa-fw"></span>
								</span>
					    </div>
					  <br>
					<button type="submit" class="btn btn-lg login-btn" name="daftar">DAFTAR</button>
				</form>
			  </div>
		</div>
	</div>

<?php
							//jika ada tombol daftar(tombol daftar ditekan)
							if (isset($_POST["daftar"]))
							 {
								//mengambil nama email,password, alamat, telp/Hp
								$nama = $_POST["nama"];
								$email = $_POST["email"];
								$password = $_POST["password"];
								$alamat = $_POST["alamat"];
								$telepon = $_POST["telepon"];	


								//cek apakan email sudah digunakan
								$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan = '$email' ");
								$yangcocok = $ambil->num_rows;
								if ($yangcocok==1) 
								{
									echo "<script>alert('Pendaftaran Gagal, Karena email sudah digunakan');</script>";
									echo "<script>location='daftar.php';</script>";
								}
								else
								{
									//kita melakukan Query insert ke pelanggan
									$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan) VALUES ('$email', '$password', '$nama', '$telepon', '$alamat')");

									echo "<script>alert('Pendaftaran anda sukses, Silahkan Login');</script>";
									echo "<script>location='login.php';</script>";
								}
							}
						?>



	
</body>
</html>