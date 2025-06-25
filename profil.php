<?php 

require 'koneksi.php';

 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Transaksi</title>
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
                      <a href="daftar-transaksi.php" class="nav-link">Daftar Transaksi</a>
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








 <div class="card-body">
  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      
      <th>Nama Peminjam</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Jenis Kelamin</th>
    </tr>
  </thead>
   



 <?php
 $user = $_GET['peminjam'];
 $id = $_GET['id_transaksi'];
$a=mysqli_query($koneksi, "SELECT * FROM transaksi INNER JOIN member ON peminjam = username WHERE peminjam = '$user' AND id_transaksi = '$id'"); 
$no=1;
while($d = mysqli_fetch_array($a)){



  ?>

  <tr>
    <td> <?php echo $d['peminjam']; ?></td>
    <td> <?php echo $d['email']; ?></td>
    <td> <?php echo $d['alamat']; ?></td>
    <td> <?php echo $d['no_telp']; ?></td>
    <td> <?php echo $d['jns_kel'] ?></td>
    
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