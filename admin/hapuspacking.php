<?php

$ambil = $koneksi->query("SELECT * FROM packing WHERE id_packing='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM packing WHERE id_packing ='$_GET[id]'");

echo "<script>alert('packing sudah dihapus');</script>";
echo "<script>location='index.php?halaman=packing';</script>";


?>