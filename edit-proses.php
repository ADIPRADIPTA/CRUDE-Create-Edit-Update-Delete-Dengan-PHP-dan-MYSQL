<?php
	if(isset($_POST['nis']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['simpan']))
	{	
	include('koneksi.php');
		
		$id = $_POST['id'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$angkatan = $_POST['angkatan'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		
		$input = mysql_query("UPDATE biodata SET nis = , '$nis', nama = '$nama', jenis_kelamin = '$jenis_kelamin', angkatan = '$angkatan', alamat = '$alamat', no_hp = '$no_hp' WHERE id_siswa = '$id'") or die(mysql_error());
		
		if($input){
		echo "DATA BERHASIL DI UPDATE";
		echo "<a href='index.php'> Back </a>";
	}
	else{
		echo "GAGAL UPDATE DATA";
		echo "<a href='index.php'> Back </a>";
	}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='index.php'> Back </a>";
	}
?>