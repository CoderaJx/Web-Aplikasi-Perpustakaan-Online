<?php 

$koneksi = mysqli_connect("localhost","root","","perpus");




function petugas ($asyque){
	global $koneksi;

	$nama = ($asyque['nama']);
	$email = ($asyque['email']);
	$alamat = ($asyque['alamat']);
	$jen = ($asyque['jenis_kel']);
	$ttl = ($asyque['ttl']);
	$pass = ($asyque['password']);


	$ea = "INSERT INTO petugas VALUES('','$nama','$email','$alamat','$jen','$ttl','$pass')";

	mysqli_query($koneksi, $ea);



	return mysqli_affected_rows($koneksi);
}

function trans ($w){
	global $koneksi;

	$peminjam = $_POST['peminjam'];
	$nama_buku = $_POST['nama_buku'];
	$pinjam = $_POST['tanggal_pinjam'];
	$kembali = $_POST['tanggal_kembali'];

	$q = "INSERT INTO transaksi VALUES('','$peminjam','$nama_buku','$pinjam','$kembali')";

	mysqli_query($koneksi, $q);
	
	return mysqli_affected_rows($koneksi);

	
}

 ?>