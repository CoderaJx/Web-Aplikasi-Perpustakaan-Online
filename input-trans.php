<?php 

require 'koneksi.php';

//hitung
if (isset($_POST['submit'])) {
  $bil1 = $_POST['jumlahskrg'];
  $bil2 = $_POST['jumlah'];
  $hasil = $bil1-$bil2;
}


  //profil
  $nama = $_POST['peminjam'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $no = $_POST['no_telp'];
  $jns = $_POST['jns_kel'];

  //log
  $status = $_POST['status'];
  
  //transaksi
  $peminjam = $_POST['peminjam'];
  $nama_buku = $_POST['nama_buku'];
  $genre = $_POST['genre'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit_buku'];
  $rak = $_POST['rak_buku'];
  $jumlah = $_POST['jumlah'];
  $pinjam = $_POST['tanggal_pinjam'];
  $kembali = $_POST['tanggal_kembali'];

  //input transaksi
  $q = "INSERT INTO transaksi VALUES('','$peminjam','$nama_buku','$genre','$pengarang','$penerbit','$rak','$jumlah','$pinjam','$kembali')";

  mysqli_query($koneksi, $q);

  //input log
  $p = "INSERT INTO log VALUES('','$nama','$email','$alamat','$no','$jns','$nama_buku','$genre','$pengarang','$penerbit','$rak','$jumlah','$pinjam','$kembali','$status')";

  mysqli_query($koneksi, $p);


 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Konfirmasi</title>
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
<br>
<!-- Main content -->

<?php 
  $id = $_GET['id_buku'];
  $query_mysql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
  $nomor = 1;
  while($data = mysqli_fetch_array($query_mysql)){
  ?>

 <!-- left column -->
          <div>
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h1 class="card-title">Detail Buku Dan Konfirmasi Peminjaman</h1>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pinjam.php?id_buku=<?php echo $data['id_buku']; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul Buku</label>
                    <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                    <input type="text" class="form-control" name="nama_buku" readonly value="<?php echo $data['nama_buku']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Genre</label>
                    
                    <input type="text" class="form-control" name="genre" readonly value="<?php echo $data['genre']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pengarang</label>
                    
                    <input type="text" class="form-control" name="pengarang" readonly value="<?php echo $data['pengarang']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    
                    <input type="text" class="form-control" name="penerbit_buku" readonly value="<?php echo $data['penerbit_buku']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rak</label>
                    
                    <input type="text" class="form-control" name="rak_buku" readonly value="<?php echo $data['rak_buku']; ?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Buku</label>
                    
                    <input type="text" class="form-control" name="jumlah_buku" readonly value="<?php echo $hasil; ?>" >
                  </div>
                  
                  <div hidden class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    
                    <input type="text" class="form-control" name="status" readonly value="DIPINJAM">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning" name="submit">Konfirmasi</button>
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