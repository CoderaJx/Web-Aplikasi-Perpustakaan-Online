<?php 

require 'koneksi.php';

  
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Buku</title>
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



 <!-- left column -->
          <div>
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h1 class="card-title">Tambah Buku</h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="input-buku.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul Buku</label>
                    <input type="text" class="form-control" name="nama_buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Genre</label>
                    <select class="form-control" name="genre" placeholder="Genre">
                      <option></option>
                      <option>Romantis</option>
                      <option>Horor</option>
                      <option>Komedi</option>
                      <option>Sejarah</option>
                      <option>Fantasi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengarang</label>
                    
                    <input type="text" class="form-control" name="pengarang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    
                    <input type="text" class="form-control" name="penerbit_buku">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rak</label>
                    
                     <select class="form-control" name="rak_buku" placeholder="Rak">
                      <option></option>
                      <option>rak1</option>
                      <option>rak2</option>
                      <option>rak3</option>
                      <option>rak4</option>
                      <option>rak5</option>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    
                    <input type="text" class="form-control" name="jumlah_buku">
                  </div>
                  
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning" name="submit">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


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