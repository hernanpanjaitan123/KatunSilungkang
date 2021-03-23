<?php
	require_once(dirname(__FILE__).'/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Help</title>

		<link rel="icon" type="image/png" href="img/parna_logo.png">
		<link rel="stylesheet" href="css/febi.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<body>
		<!-- Heaader-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!--Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Daftar Aduan</a></li>
					</ul>
				</div>
			</div>
		</div>
		</section>

		<div class="container">
			<div class="about">
				<div class="row">
					<div class="col-md-12">
						<h3>Daftar Aduan</h3><hr class="pg-titl-bdr-bta"></hr>
						<?php
							$query = "SELECT * FROM aduan_layanan";
							$item = mysqli_query($conn, $query);
							while($items = mysqli_fetch_array($item)){
						?>

						<?php
							if(isset($_SESSION['is_logged_in']))
							{

									   $role = $_SESSION['role'];
										 if($role == 2)
										 {
									?>

						<div class="col-md-4">
							<div class="panel panel-primary" style="text-align:center">
								<div class="heading"><h4><?=$items['nama_user']?><h4></div>
									<div class="panel-body1">
										<b><?=$items['subjek']?></b>
									</div>
									<div class="panel-body">
										<?=$items['isi']?>
									</div>
									<div class="panel-footer">
									<b>TANGGAPAN</b><br>
										<?=$items['tanggapan']?>
									</div>
							</div>
							<?php
								}
								else if($role == 1)
								{
							?>

							<div class="col-md-4">
								<div class="panel panel-primary" style="text-align:center">
									<div class="heading"><h4><?=$items['nama_user']?><h4></div>
										<div class="panel-body1">
											<b><?=$items['subjek']?></b>
										</div>
										<div class="panel-body">
											<?=$items['isi']?>
										</div>
										<div class="panel-footer">
										<b>TANGGAPAN</b><br>
											<?=$items['tanggapan']?>
										</div>
								</div>


							<center>
								<a href="tanggapan.php?items_id=<?=$items['id_aduan']?>"><button class="btn btn-info">Tanggapi</button></a>
							</center><br>

						<?php
								}
							}?>


						</div>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer-->
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
