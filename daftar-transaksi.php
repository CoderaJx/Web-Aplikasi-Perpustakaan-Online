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
                      <a href="petugas.php" class="nav-link">Home petugas</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="logout.php" class="nav-link">Log Out</a>
                    </li>
                  </ul>

                  <!-- SEARCH FORM -->
                  <form action="daftar-transaksi.php" method="get">
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
<br>

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
      <th>Nama Peminjam</th>
      <th>Judul Buku</th>
      <th>Genre</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Rak</th>
      <th>Jumlah Pinjam</th>
      <th>Tanggal Pinjam</th>
      <th>Tanggal Kembali</th>
      <th>Opsi</th>
    </tr>
  </thead>
   

<?php 
if (isset($_GET['cari'])){
$cari=$_GET['cari'];
$c=mysqli_query($koneksi,"SELECT * FROM transaksi where peminjam like '%$cari%' OR nama_buku like '%$cari%' ");

}else{
  $c=mysqli_query($koneksi,"SELECT * FROM transaksi");
}


 ?>


 <?php 
$no=1;
while($d =mysqli_fetch_array($c)){


  ?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['peminjam']; ?></td>
    <td><?php echo $d['nama_buku']; ?></td>
    <td><?php echo $d['genre']; ?></td>
    <td><?php echo $d['pengarang']; ?></td>
    <td><?php echo $d['penerbit']; ?></td>
    <td><?php echo $d['rak']; ?></td>
    <td><?php echo $d['jumlah']; ?></td>
    <td><?php echo $d['tanggal_pinjam']; ?></td>
    <td><?php echo $d['tanggal_kembali']; ?></td>
    <td>
      <a class="btn btn-warning btn-block btn-flat" href="profil.php?peminjam=<?php echo $d['peminjam']; ?>&id_transaksi=<?php echo $d['id_transaksi']; ?>">Profil</a>

      <a class="btn btn-primary btn-block btn-flat" href="kembali-buku.php?id_transaksi=<?php echo $d['id_transaksi']; ?>&nama_buku=<?php echo $d['nama_buku']; ?>">Kembalikan Buku</a>
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