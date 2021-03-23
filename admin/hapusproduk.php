<?php 
   include 'koneksi.php';
?>

<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_produk = $pecah['foto_produk'];
if (file_exists("../foto_produk/$fotoproduk"))
{
	unlink("../foto_produk/$fotoproduk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo "<script>alert('produk sudah dihapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";

?>
