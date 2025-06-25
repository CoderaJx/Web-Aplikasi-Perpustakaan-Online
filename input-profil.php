<?php 

require 'koneksi.php';


	$id = $_POST['id_member'];
	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no_telp'];
	$jns = $_POST['jns_kel'];

$us = "SELECT username FROM member WHERE username = '$user'";
	$cek = mysqli_query($koneksi, $us);

	if (mysqli_fetch_assoc($cek)) {
		echo "
		<script>
		alert('Username Telah Digunakan');
		document.location.href = 'update-profil.php';
		</script>
		";

		return false;
	}

	mysqli_query($koneksi, "UPDATE member SET username = '$user', email = '$email', password = '$pass', alamat = '$alamat', no_telp = '$no', jns_kel = '$jns' WHERE id_member = '$id'");

	mysqli_query($koneksi, "UPDATE log SET peminjam = '$user', alamat = '$alamat', no_telp = '$no', jns_kel = '$jns' WHERE email = '$email' ");

header("location:logout.php");
 ?>