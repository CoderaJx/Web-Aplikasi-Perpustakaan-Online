<?php 

require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


mysqli_query($koneksi, "UPDATE member SET password = '$password' WHERE username = '$username'");

header("location:login.php?pesan=ganti");

 ?>