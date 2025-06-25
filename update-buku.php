<?php 

include 'koneksi.php';

$id = $_POST['id_buku'];
$nama = $_POST['nama_buku'];
$genre = $_POST['genre'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit_buku'];
$rak = $_POST['rak_buku'];
$jumlah = $_POST['jumlah_buku'];

mysqli_query($koneksi, "UPDATE buku SET nama_buku='$nama', genre='$genre', pengarang='$pengarang', penerbit_buku='$penerbit', rak_buku='$rak', jumlah_buku='$jumlah' WHERE id_buku='$id'");

header("location:buku2.php?pesan=update");

?>