<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA</title>
</head>
<body>
	<h2>Data Siswa</h2>
	<p><a href="tambah.php">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ccc">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Angkatan</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>Aksi</th>
		</tr>
		<?php
		include("koneksi.php");
		$query = mysql_query("SELECT * FROM biodata ORDER BY id_siswa DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){ ?>
			<tr><td colspan="8">Tidak ada data</td></tr>
		<?php }
		else{ 
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['nis'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['jenis_kelamin'] ?></td>
				<td><?php echo $data['angkatan'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['no_hp'] ?></td>
				<td><a href="edit.php?id=<?php echo $data['id_siswa'] ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $data['id_siswa'] ?>" 
					onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Hapus</a></td>
			</tr>
		<?php 
		$no++;
	} 
}
		?>
	</table>
</body>
</html>