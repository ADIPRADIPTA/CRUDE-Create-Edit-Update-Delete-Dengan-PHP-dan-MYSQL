<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA SISWA</title>
</head>
<body>
	<h2>Tambah Data Siswa</h2>
	<p><a href="index.php">Home</a></p>
	
	<form action="tambah-proses.php" method="post">
	<table cellpadding="5" cellspacing="0">
		<tr>
			<td>NIS</td>
			<td>:</td>
			<td><input type="text" name="nis" required></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" size="50" required></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td>
			<input type="radio" name="jenis_kelamin" value="L" required=""> Laki-laki <br>
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan
			</td>
		</tr>
		<tr>
			<td>ANGKATAN</td>
			<td>:</td>
			<td>
			<select name="angkatan" required="">
				<option value="">- PILIH ANGKATAN - </option>
				<option value="2015">2015</option>
				<option value="2015">2016</option>
				<option value="2015">2017</option>
				<option value="2015">2018</option>
				<option value="2015">2019</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td>
			<textarea name="alamat" cols="30" rows="4" required></textarea>
			</td>
		</tr>
		<tr>
			<td>NO HP</td>
			<td>:</td>
			<td><input type="text" name="no_hp" required></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><input type="submit" value="TAMBAH" name="tambah"></td>
		</tr>
	</table>
	</form>
</body>
</html>