<?php 

require 'koneksi.php';



  
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Petugas</title>
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

   ?>

 

  

<div class="wrapper">

 
                <nav class="navbar navbar-expand navbar-orange navbar-dark">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="admin.php" class="nav-link"> <i class="fas fa-user"> <?php echo $_SESSION['username']; ?></i></a>
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
<br>
<!-- Main content -->

<?php 

$id = $_GET['id_petugas'];
$q = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas = '$id'");
$no=1;
while($d = mysqli_fetch_array($q)){

 ?>

 <!-- left column -->
          <div>
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h1 class="card-title">Edit Petugas</h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="update-petugas.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Petugas</label>
                    <input type="hidden" class="form-control" name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
                    <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    
                    <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    
                    <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    
                    <select type="text" class="form-control" name="jenis_kel">
                      <option>Jenis Kelamin</option>
                      <option>Laki - Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">TTL</label>
                    
                    <input type="text" class="form-control" name="ttl" value="<?php echo $d['ttl']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    
                    <input type="password" class="form-control" name="password">
                  </div>
                  
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning" name="simpan">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

<?php } ?>
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