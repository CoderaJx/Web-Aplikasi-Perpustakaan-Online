<?php 
include 'koneksi.php';
 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">

 
                <nav class="navbar navbar-expand navbar-orange navbar-dark">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="home2.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="login.php" class="nav-link">Keluar</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="register.php" class="nav-link">Daftar Sebagai User</a>
                    </li>
                  </ul>

                  <!-- SEARCH FORM -->
                  <form action="buku4.php" method="get">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" name="cari" placeholder="Search judul / genre" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </nav>

                
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->

<?php 
if (isset($_GET['cari'])){
  $cari=$_GET['cari'];
}






 ?>

 <?php 

if (isset($_GET['pesan'])) {
  $pesan = $_GET['pesan'];
  if ($pesan = "kembali") {
    echo "
    <script>
    alert('Berhasil Mengembalikan Buku');
    </script>

    ";
  }
}

  ?>




 <div class="card-body">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>NO</th>
      <th>Judul Buku</th>
      <th>Genre Buku</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Rak</th>
      <th>Jumlah</th>
      <th>Opsi</th>
    </tr>
  </thead>
   

<?php 
if (isset($_GET['cari'])){
$cari=$_GET['cari'];
$c=mysqli_query($koneksi,"SELECT * FROM buku where nama_buku like '%$cari%' OR genre like '%$cari%' ");

}else{
  $c=mysqli_query($koneksi,"SELECT * FROM buku ORDER BY genre");
}


 ?>


 <?php 
$no=1;
while($d =mysqli_fetch_array($c)){


  ?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_buku']; ?></td>
    <td><?php echo $d['genre']; ?></td>
    <td><?php echo $d['pengarang']; ?></td>
    <td><?php echo $d['penerbit_buku']; ?></td>
    <td><?php echo $d['rak_buku']; ?></td>
     <td><?php echo $d['jumlah_buku']; ?></td>
    <td>
      <button class="btn btn-danger btn-block btn-flat">Anda Harus Menjadi User Terlebih Dahulu</button>
    </td>
  </tr>

<?php } ?>

 </div>
 <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>