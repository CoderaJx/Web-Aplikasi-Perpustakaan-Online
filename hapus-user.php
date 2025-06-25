<?php 

require 'koneksi.php';

$id = $_GET['id_member'];

mysqli_query($koneksi, "DELETE FROM member WHERE id_member = '$id'");

header("location:daftar-user.php?pesan=hapus");

 ?>