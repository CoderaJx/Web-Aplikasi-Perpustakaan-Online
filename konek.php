<?php 

$koneksi = mysqli_connect("localhost", "root", "", "perpus");


function daftar ($v){
	global $koneksi;

	$username = strtolower(stripslashes($v["username"]));
	$email = mysqli_real_escape_string($koneksi, $v["email"]);
	$password = mysqli_real_escape_string($koneksi, $v["password"]);
	$level = ($v["level"]);
	$alamat = ($v["alamat"]);
	$no = ($v["no_telp"]);
	$jns = ($v["jns_kel"]);

	$user = "SELECT username FROM member WHERE username = '$username'";
	$cek = mysqli_query($koneksi, $user);

	if (mysqli_fetch_assoc($cek)) {
		echo "
		<script>
		alert('Username Telah Digunakan');
		</script>
		";

		return false;
	}







$q = "INSERT INTO member VALUES ('','$username','$email','$password','$level','$alamat','$no','$jns','')";

mysqli_query($koneksi, $q);



return mysqli_affected_rows($koneksi);	
}

function buku2 ($uwu){
	global $koneksi;

	$judul = ($uwu["nama_buku"]);
	$genre = ($uwu["genre"]);
	$pengarang = ($uwu["pengarang"]);
	$penerbit = ($uwu["penerbit_buku"]);
	$rak = ($uwu["rak_buku"]);

	$uye = "INSERT INTO buku VALUES ('','$judul','$genre','$pengarang','$penerbit','$rak')";

	mysqli_query($koneksi, $uye);

	return mysqli_affected_rows($koneksi);
}

 ?>