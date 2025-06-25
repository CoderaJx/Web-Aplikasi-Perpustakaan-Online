<?php 

require 'koneksi.php';

$id = $_POST['id_buku'];
$jumlah = $_POST['jumlah_buku'];
	

mysqli_query($koneksi, "UPDATE buku SET jumlah_buku = '$jumlah' WHERE id_buku = '$id' ");

header("location:buku.php?pesan=pinjam")

 ?>