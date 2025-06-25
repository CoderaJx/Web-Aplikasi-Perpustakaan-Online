<?php 
include 'koneksi.php';

$id = $_GET['id_buku'];


mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'")or die(mysqli_error());

header("location:buku2.php?pesan=hapus");
?>