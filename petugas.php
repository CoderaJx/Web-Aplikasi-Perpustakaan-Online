<?php
require 'koneksi.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Petugas</title>
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
  <?php 

  session_start();

  if ($_SESSION['level']=="") {
    header("location:login.php?pesan=gagal");
  }

   ?>

   <?php 

   if (isset($_GET['pesan'])) {
     if ($_GET['pesan']=="done") {
       echo "
       <script>
       alert('Success Login');
       </script>
       ";
     }
   }

    ?>
  <div class="wrapper">


    <nav class="navbar navbar-expand navbar-orange navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link"><?php echo $_SESSION['username']; ?></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="petugas.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link">Log Out</a>
        </li>
      </ul>

    


    <!-- /.card -->
  </div>
</body>
<!-- /.col -->
</div>
<!-- ./row -->


<div style="background: orange; color : blue; font-size: 25px; font-weight: bold; letter-spacing: 0,5em;">
  <h2 align="center">HALAMAN PETUGAS</h2>
</div>







<br>

  <div class="col">
    <!-- small card -->
    <?php
    $tampil = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku");
    $total = mysqli_num_rows($tampil);
    ?>
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo $total; ?></h3>

        <p>Daftar Buku</p>
      </div>
      <div class="icon">
        <i class="fas fa-book"></i>
      </div>
      <a href="buku3.php" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
<br>
  <!-- ./col -->
  <div class="col">
    <!-- small card -->
    <?php
    
    $tam = mysqli_query($koneksi, "SELECT * FROM member WHERE level = 'pengunjung'");
    
    $tot = mysqli_num_rows($tam);
  
    ?>
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo $tot; ?></h3>

        <p>USER</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="daftar-user.php" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- ./col -->
<div class="col">
    <!-- small card -->
    <?php
    $tamp = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi");
    $tota = mysqli_num_rows($tamp);
    ?>
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo $tota; ?></h3>

        <p>TRANSAKSI</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="daftar-transaksi.php" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>



</div>
<!-- /.row -->










<!-- jQuery -->
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