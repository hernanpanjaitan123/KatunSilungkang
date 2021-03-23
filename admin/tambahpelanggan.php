<h2>Tambah Pelanggan</h2>

<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>email</label>
		<input type="text" class="form-control" name="email">
	</div><div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>No. Telp</label>
		<input type="number" class="form-control" name="no">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>
<?php 
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO pelanggan 
		(email_pelanggan, nama_pelanggan, telepon_pelanggan)
		VALUES('$_POST[email]', '$_POST[nama]', '$_POST[no]' )");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
}
?>