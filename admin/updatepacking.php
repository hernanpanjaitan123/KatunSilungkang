<h2>Update Packing</h2>
<?php 

$ambil = $koneksi->query("SELECT * FROM packing WHERE id_packing='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Jenis Packing</label>
		<input type="text" class="form-control" name="jenis" value="<?php echo $pecah['jenis_packing']; ?>">
	</div>
	<div class="form-group">
		<label>Tarif Packing Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['tarif_packing']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Update</button>		
</form>

<?php
	if (isset($_POST['ubah']))
	{
		
		$koneksi->query("UPDATE packing SET jenis_packing = '$_POST[jenis]',
		tarif_packing='$_POST[harga]' WHERE id_packing = '$_GET[id]'");

		echo "<script>alert('packing telah diubah');</script>";
		echo "<script>location='index.php?halaman=packing;'</script>";
	}
?>