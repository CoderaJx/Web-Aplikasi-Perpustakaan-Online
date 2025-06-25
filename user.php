<?php 

require 'koneksi.php';

 ?>

 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User</title>
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
     if ($_GET['pesan']=="ya") {
       echo "
       <script>
       alert('Berhasil Update Identitas');
       </script>
       ";
     }
   }

    ?>

    <?php 

   if (isset($_GET['pesan'])) {
     if ($_GET['pesan']=="berhasil") {
       echo "
       <script>
       alert('Succes Login');
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
                      <a href="user.php" class="nav-link"> <i class="fas fa-user"> <?php echo $_SESSION['username']; ?></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="buku.php" class="nav-link">Daftar Buku</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="update-profil.php" class="nav-link">Update Profile</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="update-image.php" class="nav-link">Update Image</a>
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
                     <?php
                      $user = $_SESSION['username'];
                        $query=mysqli_query($koneksi,"SELECT * FROM member WHERE username = '$user' ");
                        while($data=mysqli_fetch_array($query)){
                        
                        ?>
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header text-white"
                   style="background: url('img/bg.jpg') center center;">
                <h3 class="widget-user-username"><?php echo $_SESSION['username']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $_SESSION['level']; ?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?php echo "file/".$data['file']; ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo $data['alamat']; ?></h5>
                      <span class="description-text">Alamat</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo $data['email']; ?></h5>
                      <span class="description-text">Email</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo $data['jns_kel'] ?></h5>
                      <span class="description-text">Jenis Kelamin</span>
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
<?php } ?>

        <div>
          <div class="col">
            <!-- small card -->
              <?php
            $user = $_SESSION['username'];
            $tampil = mysqli_query($koneksi, "SELECT * FROM log WHERE peminjam = '$user'");
            while($data = mysqli_fetch_array($tampil)){
              $total = mysqli_num_rows($tampil);
            }
            ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                          if (mysqli_num_rows($tampil) > 0) {
                            echo $total;
                          }else{
                            echo "Belum Ada Riwayat Peminjaman";
                          }

                 ?></h3>

                <p>RIWAYAT PEMINJAMAN</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="log-user.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div>
          <div class="col">
            <!-- small card -->
              <?php
            $user = $_SESSION['username'];
            $tam = mysqli_query($koneksi, "SELECT * FROM log WHERE peminjam = '$user' AND status = 'DIPINJAM'");
            while($d = mysqli_fetch_array($tam)){
              $tot = mysqli_num_rows($tam);
            }
            ?>
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php
                          if (mysqli_num_rows($tam) > 0) {
                            echo $tot;
                          }else{
                            echo "Belum Ada Buku Yang Dipinjam Untuk Saat Ini";
                          }

                 ?></h3>

                <p>BUKU YANG SEDANG DIPINJAM</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="dipinjam.php" class="small-box-footer">
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