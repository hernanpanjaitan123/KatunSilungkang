<?php 
		session_start();
		    //koneksi ke database 
		    include 'koneksi.php';
		 // jika belum ada sesion pelanggan(belum login)maka dilarikan ke login.php
		    if (!isset($_SESSION["pelanggan"])) 
		    {
		    	echo "<script>alert('anda harus loginterlebih dahulu');</script>";
		    	echo "<script>location='login.php';</script>";
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


		

	<section class="kontent">
			<div class="container">
				<h1>Keranjang Belanja</h1>
				<hr>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subharga</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1; ?>
						<?php $totalbelanja = 0; ?>
						<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
						<!-- menampilkan produk yang sedang diperulang berdasarkan id_produk -->
						<?php 
						$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
						$pecah = $ambil->fetch_assoc();
						$subharga = $pecah["harga_produk"]*$jumlah;
						// echo "<pre>";
						// print_r($pecah);
						// echo "</pre>";
						?>

						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $pecah["nama_produk"]; ?></td>
							<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
							<td><?php echo $jumlah; ?></td>
							<td>Rp. <?php echo number_format($subharga); ?></td>
						</tr>
						<?php $nomor++; ?>
						<?php $totalbelanja += $subharga; ?>
						<?php endforeach  ?>

					</tbody>
					<tfoot>
						<tr>
							<th colspan="4">Total Belanja</th>
							<th>Rp.<?php echo number_format($totalbelanja)?> </th>
						</tr>
					</tfoot>
				</table>
				<form method="post">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<input type="text" readonly="" value="<?php echo $_SESSION["pelanggan"]['nama_pelanggan'] ?>" class="form-control">
						</div>
					</div>
						<div class="col-md-3">
							<div class="form-group">
							<input type="text" readonly="" value="<?php echo $_SESSION["pelanggan"]['telepon_pelanggan'] ?>" class="form-control">
							</div>
					</div>
						<div class="col-md-3">
							<select class="form-control" name="id_ongkir">
								<option value="">Pilih Ongkos Kirim</option>
								<?php 
									$ambil=$koneksi->query("SELECT * FROM ongkir");
									while ($perongkir = $ambil->fetch_assoc()) {
								?>
								<option value="<?php echo $perongkir["id_ongkir"]?>">
									<?php echo $perongkir['nama_kota']?>-
									Rp. <?php echo number_format($perongkir['tarif']) ?>
								</option>
								<?php } ?>
							</select>
						</div>	
						<div class="col-md-3">
							<select class="form-control" name="id_packing">
								<option value="">Pilih Packing anda</option>
								<?php 
									$bikin=$koneksi->query("SELECT * FROM packing");
									while ($perpacking = $bikin->fetch_assoc()) {
								?>
								<option value="<?php echo $perpacking["id_packing"]?>">
									<?php echo $perpacking['jenis_packing']?>-
									Rp. <?php echo number_format($perpacking['tarif_packing']) ?>
								</option>
								<?php } ?>
							</select>
						</div>	
					</div>
					<div class="form-group">
							<label>Alamat Lengkap Pengiriman</label>
							<textarea class="form-control" name="alamat_pengiriman" placeholder="masukan alamat lengkap Pengiriman (termasuk kode pos)"></textarea>
						</div>
					<button class="btn btn-primary" name="checkout">Checkout</button>
				</form>
				<?php 
					if(isset($_POST["checkout"]))
					{
						$id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
						$id_ongkir = $_POST["id_ongkir"];
						$tanggal_pembelian = date("y-m-d");
						$alamat_pengiriman = $_POST['alamat_pengiriman'];
						$id_packing = $_POST["id_packing"];

						$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir' ");
						$arrayongkir = $ambil->fetch_assoc();
						$nama_kota = $arrayongkir['nama_kota'];
						$tarif = $arrayongkir['tarif'];

						$bikin = $koneksi->query("SELECT * FROM packing WHERE id_packing='$id_packing' ");
						$arraypacking = $bikin->fetch_assoc();
						$jenis_packing= $arraypacking['jenis_packing'];
						$tarif_packing = $arraypacking['tarif_packing'];

						 $total_pembelian = $totalbelanja + $tarif + $tarif_packing;
						 //menyimpan data ke tabel pembelian
						 $koneksi->query("INSERT INTO pembelian (id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian,nama_kota,tarif,jenis_packing,tarif_packing,alamat_pengiriman) VALUES 
						 ('$id_pelanggan', '$id_ongkir', '$tanggal_pembelian', '$total_pembelian', '$nama_kota', '$tarif', '$jenis_packing', '$tarif_packing', '$alamat_pengiriman') ");


						 //mendapatkan id pembelian yang barusan terjadi
						$id_pembelian_barusan = $koneksi->insert_id;

						foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
						{

							//mendapatkan id_produk berdasarkan id_produk
							$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk' ");
							$perproduk = $ambil->fetch_assoc();

							$nama = $perproduk ['nama_produk'];
							$harga = $perproduk['harga_produk'];
						
							$subharga = $perproduk['harga_produk']*$jumlah;
							$koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,nama,harga,subharga,jumlah)
								VALUES ('$id_pembelian_barusan', '$id_produk', '$nama' , '$harga' ,'$subharga' ,'$jumlah') ");


							//skrip Update Stok
							$koneksi->query("UPDATE produk SET stok_produk=stok_produk -$jumlah WHERE id_produk='$id_produk' ");
						}

						//Mengkosongkan keranjang belanja
						unset($_SESSION["keranjang"]);

						// tampilan dialihkan ke halaman nota, Nota dari pembelian yang barusan
						echo "<script>alert('pembelian Sukses');</script>";
						echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";
					}
				?>
			</div>
		</section>
		<br></br>

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