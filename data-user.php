<?php 

require 'koneksi.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data User</title>
 </head>
 <body>
 	<?php 

 	session_start();

 	 ?>

 	<h1 align="center">Data User</h1>

 	<?php 

 	
 	$no = 1;
 	$q = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member");
 	while($d =mysqli_fetch_array($q)){

 	 ?>


 	<form action="" method="post">
 		<table align="center">

 			<tr>
 				<td>Nama</td>
 				<td><input type="hidden" name="id_member" value="<?php echo $d['id_member']; ?>">
 					<input type="text" name="nama" readonly value="<?php echo $d['nama'] ?>">
 				</td>
 			</tr>

 			<tr>
 				<td>Username</td>
 				<td><input type="text" name="username" readonly value="<?php echo $_SESSION['username']; ?>"></td>
 			</tr>

 			<tr>
 				<td>Email</td>
 				<td><input type="text" name="email" readonly value="<?php echo $d['email']; ?>"></td>
 			</tr>

 			<tr>
 				<td>Level</td>
 				<td><input type="text" name="level" readonly value="<?php echo $d['level']; ?>"></td>
 			</tr>

 			<tr>
 				<td>Alamat</td>
 				<td><input type="text" name="alamat"></td>
 			</tr>

 			<tr>
 				<td>No Telepon</td>
 				<td><input type="text" name="no_telp"></td>
 			</tr>

 			<tr>
 				<td>Jenis Kelamin</td>
 				<td><input type="text" name="jns_kel"></td>
 			</tr>

 			<tr>
 				<td></td>
 				<td><button type=" submit" name="oke">Simpan</button></td>
 			</tr>
 			

 		</table>
 	</form>
 <?php } ?>
 </body>
 </html>