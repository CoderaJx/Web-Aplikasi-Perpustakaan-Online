<?php 

require 'koneksi.php';

$id = $_GET['id_transaksi'];
$judul = $_POST['nama_buku'];
$hasil = $_POST['jumlah_buku'];

mysqli_query($koneksi, "UPDATE buku SET jumlah_buku = '$hasil' WHERE nama_buku = '$judul'");

mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi = '$id'");

header("location:daftar-transaksi.php?pesan=kembali");

 ?>