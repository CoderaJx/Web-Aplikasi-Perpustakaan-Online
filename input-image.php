<?php

require 'koneksi.php';

if (isset($_POST['upload'])) {
	$format = array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$user = $_POST['username'];


if (in_array($ekstensi, $format) === true) {
		if ($ukuran < 10440700) {
			move_uploaded_file($file_tmp, 'file/'.$nama);
			$q = mysqli_query($koneksi, "UPDATE member SET file = '$nama' WHERE username = '$user' ");
			if ($q) {
				header("location:logout.php");
			}else{
				echo "
				<script>
				alert('Gagal Update Profil');
				document.location.href = 'update-image.php';
				</script>
				";
			}
		}else{
			echo "
			<script>
				alert('Gagal Update Profil Ukuran File Terlalu Besar');
				document.location.href = 'update-image.php';			
				</script>
			";
		}
	}else{
		echo "
			<script>
				alert('Gagal Update Profil Ekstensi File Tidak Diperbolehkan');
				document.location.href = 'update-image.php';
				</script>
			";
	}
}

?>