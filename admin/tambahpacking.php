<h2>Tambah Packing</h2>

<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Jenis Packing</label>
		<input type="text" class="form-control" name="jenis">

	<div class="form-group">
		<label>Tarif Packing</label>
		<input type="number" class="form-control" name="tarif">
	</div>
	<div class="form-group">
		<label>Foto Packing</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT INTO packing 
		(jenis_packing, tarif_packing,foto_packing)
		VALUES('$_POST[jenis]', '$_POST[tarif]' , '$nama')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=packing'>";
}
?>