
<?php 
include 'koneksi.php';
 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log Peminjaman User</title>
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
                      <a href="user.php" class="nav-link"> <i class="fas fa-user"> <?php echo $_SESSION['username']; ?></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="user.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="user.php" class="nav-link">Kembali</a>
                    </li>
                  </ul>

                  <!-- SEARCH FORM -->
                  <form action="log-user.php" method="get">
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
      <th>Jumlah Peminjaman</th>
      <th>Tanggal Pinjam</th>
      <th>Tanggal Kembali</th>
      <th>Status</th>
    </tr>
  </thead>
   

<?php 
if (isset($_GET['cari'])){
$cari=$_GET['cari'];

$c=mysqli_query($koneksi,"SELECT * FROM log where peminjam like '$cari' OR nama_buku like '%$cari%' OR genre like '%$cari%' ");

}else{
  $user = $_SESSION['username'];
  $c=mysqli_query($koneksi,"SELECT * FROM log WHERE peminjam = '$user'");
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
    <td><?php echo $d['jumlah']; ?></td>
    <td><?php echo $d['tanggal_pinjam']; ?></td>
    <td><?php echo $d['tanggal_kembali']; ?></td>
    <td><?php echo $d['status']; ?></td>
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