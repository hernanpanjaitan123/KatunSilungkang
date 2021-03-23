<h2>Ongkir</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kota</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php 
		$ambil=$koneksi->query("SELECT * FROM ongkir"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kota']; ?></td>
			<td><?php echo $pecah['tarif']; ?></td>
			<td>
				<a href="index.php?halaman=hapusongkir&id=<?php echo $pecah['id_ongkir']; ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=updateongkir&id=<?php echo $pecah['id_ongkir']; ?>" class="btn-info btn">Update</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahongkir" class="btn btn-primary">Tambah Ongkir</a>