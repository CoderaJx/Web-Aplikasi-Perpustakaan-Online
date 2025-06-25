<?php 
include 'koneksi.php';

$id = $_GET['id_petugas'];


mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'")or die(mysqli_error());

header("location:daftar-petugas.php?pesan=hapus");
?>