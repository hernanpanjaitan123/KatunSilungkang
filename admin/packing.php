<h2>Packing</h2>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Jenis Packing</th>
			<th>Tarif Packing</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php 
		$ambil=$koneksi->query("SELECT * FROM packing"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['jenis_packing']; ?></td>
			<td><?php echo $pecah['tarif_packing']; ?></td>
			<td>
				<img src="../foto_packing/<?php echo $pecah['foto_packing']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapuspacking&id=<?php echo $pecah['id_packing']; ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=updatepacking&id=<?php echo $pecah['id_packing']; ?>" class="btn-info btn">Update</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpacking" class="btn btn-primary">Tambah Packing</a>	