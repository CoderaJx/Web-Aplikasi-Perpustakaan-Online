<?php 

require 'koneksi.php';

$id = $_POST['id_petugas'];
$nama = ($_POST['nama']);
$email = ($_POST['email']);
$alamat = ($_POST['alamat']);
$jen = ($_POST['jenis_kel']);
$ttl = ($_POST['ttl']);
$pass = ($_POST['password']);

mysqli_query($koneksi, "UPDATE petugas SET nama = '$nama', email = '$email', alamat = '$alamat', jenis_kel = '$jen', ttl = '$ttl', password = '$password' WHERE id_petugas = '$id' ");

header("location:daftar-petugas.php?pesan=edit");

 ?>