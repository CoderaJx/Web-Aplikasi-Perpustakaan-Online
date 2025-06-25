<?php 

require 'koneksi.php';

$id = $_POST['id_transaksi'];
$nama = $_POST['peminjam'];
$judul = $_POST['nama_buku'];
$genre = $_POST['genre'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$rak = $_POST['rak'];
$pinjam = $_POST['tanggal_pinjam'];
$kembali = $_POST['tanggal_kembali'];

mysqli_query($koneksi, "UPDATE transaksi SET peminjam = '$nama', nama_buku = '$judul',genre = '$genre',pengarang = '$pengarang', penerbit = '$penerbit',rak = '$rak', tanggal_pinjam = '$pinjam', tanggal_kembali = '$kembali' WHERE id_transaksi = '$id' ");

header("location:daftar-transaksi.php?pesan=edit");

 ?>