<?php
	if(isset($_POST['nis']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['tambah']))
	{	
	include('koneksi.php');
		
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$angkatan = $_POST['angkatan'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		
		$input = mysql_query("INSERT INTO biodata VALUES(NULL, '$nis', '$nama', '$jenis_kelamin', '$angkatan', '$alamat', '$no_hp')") or die(mysql_error());
		
		if($input){
		echo "DATA BERHASIL DITAMBAHKAN";
		echo "<a href='tambah.php'> Back </a>";
	}
	else{
		echo "GAGAL MENAMBAHKAN DATA";
		echo "<a href='tambah.php'> Back </a>";
	}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='tambah.php'> Back </a>";
	}
?>