<h2>Ubah Pelanggan</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>No.Telp</label>
		<input type="number" class="form-control" name="no" value="<?php echo $pecah['telepon_pelanggan']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>	
</form>

 <!-- <?php
	if (isset($_POST['ubah']))
	{
		
			$koneksi->query("UPDATE pelanggan SET email_pelanggan= '$_POST[email]',
				nama_pelanggan='$_POST[nama]', telepon_pelanggan='$_POST[no]' WHERE id_pelanggan = '$_GET[id]'");
		}
		echo "<script>alert('data pelanggan telah diubah');</script>";
		echo "<script>location='index.php?halaman=pelanggan;'</script>";
?> -->