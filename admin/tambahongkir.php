<h2>Tambah Ongkir</h2>

<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Nama Kota</label>
		<input type="text" class="form-control" name="kota">

	<div class="form-group">
		<label>Tarif</label>
		<input type="number" class="form-control" name="tarif">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO ongkir 
		(nama_kota, tarif)
		VALUES('$_POST[kota]', '$_POST[tarif]' )");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=ongkir'>";
}
?>