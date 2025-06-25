<?php 

session_start();

require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$q = mysqli_query($koneksi, "SELECT * FROM member WHERE username = '$username' AND password = '$password'");


$cek = mysqli_num_rows($q);

if ($cek > 0) {
	
	$data = mysqli_fetch_assoc($q);

	//login admin
	if ($data['level']=='admin') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin.php?pesan=sip");

		//login petugas
	}elseif ($data['level']=="petugas") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		header("location:petugas.php?pesan=done");

		//login user
	}elseif ($data['level']=="pengunjung") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengunjung";
		header("location:user.php?pesan=berhasil");

	}else{
		header("location:login.php?pesan=gagal");

	}

}else{
	header("location:login.php?pesan=gagal");	
}

 ?>