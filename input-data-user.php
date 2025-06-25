<?php 

require 'koneksi.php';

$alamat = $_POST['alamat'];
$no = $_POST['no_telp'];
$jns = $_POST['jns_kel'];

mysqli_query($koneksi, "INSERT INTO member VALUES('','','','','','','$alamat','$no','$jns')");

header("location:user.php?pesan=ya");

 ?>