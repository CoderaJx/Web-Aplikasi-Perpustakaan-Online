<?php 

include 'koneksi.php';

$nama = $_POST['nama_buku'];
$genre = $_POST['genre'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit_buku'];
$rak = $_POST['rak_buku'];
$jumlah = $_POST['jumlah_buku'];

mysqli_query($koneksi, "INSERT INTO buku VALUES('','$nama','$genre','$pengarang','$penerbit','$rak','$jumlah')");

header("location:buku2.php?pesan=tambah");

 ?>