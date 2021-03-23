<h2>Update Ongkir</h2>
<?php 

$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kota</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_kota']; ?>">
	</div>
	<div class="form-group">
		<label>Tarif Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['tarif']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Update</button>		
</form>

<?php
	if (isset($_POST['ubah']))
	{
		
		$koneksi->query("UPDATE ongkir SET nama_kota= '$_POST[nama]',
		tarif='$_POST[harga]' WHERE id_ongkir = '$_GET[id]'");

		echo "<script>alert('data produk telah diubah');</script>";
		echo "<script>location='index.php?halaman=ongkir;'</script>";
	}
?>