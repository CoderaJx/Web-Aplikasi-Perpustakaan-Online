<?php 

require 'koneksi.php';

 ?>

 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
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

  //cek login
  if ($_SESSION['level']=="") {
    header("login.php?pesan=gagal");
  }


   ?>

   <?php 
   if (isset($_GET['pesan'])) {
     if ($_GET['pesan']=="sip") {
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
                      <a href="" class="nav-link"><?php echo $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                  </ul>

          
                </nav>

                
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->


          <div>
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header text-white"
                   style="background: url('img/bg.jpg') center center;">
                <h3 class="widget-user-username"><?php echo $_SESSION['username']; ?></h3>
                <h5 class="widget-user-desc">Founder, CEO & Admin</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="img/fabio.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">2,4T</h5>
                      <span class="description-text">RICH</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">25JT</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->



<div>
          <div class="col">
            <!-- small card -->
            <?php
            $tampil = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku");
            $total = mysqli_num_rows($tampil);
            ?>
            <div class="small-box bg-info" >
              <div class="inner">
                <h3><?php echo $total; ?></h3>

                <p>BUKU</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="buku2.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col">
            <!-- small card -->
            <?php
            $tam = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id_petugas");
            $tot = mysqli_num_rows($tam);
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $tot; ?></h3>

                <p>PETUGAS</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="daftar-petugas.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          

           <!-- ./col -->
          <div class="col">
            <!-- small card -->
            <?php
            $ta = mysqli_query($koneksi, "SELECT * FROM log ORDER BY id_log");
            $to = mysqli_num_rows($ta);
            ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $to; ?></h3>

                <p>LOG PEMINJAMAN USER</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="log.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
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
