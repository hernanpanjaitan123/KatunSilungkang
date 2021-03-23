<?php
session_start();
$id_produk=$_GET["id"];
unset($_SESSION["pembelian_produk"][$id_pembelian_produk]);

echo "<script>alert('produk telah dihapus dari pembelanjaan');</script>";
echo "<script>location='keranjang.php';</script>";
?>
