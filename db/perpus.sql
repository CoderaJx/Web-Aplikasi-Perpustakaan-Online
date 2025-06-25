-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 01.49
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `rak_buku` varchar(50) NOT NULL,
  `jumlah_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `genre`, `pengarang`, `penerbit_buku`, `rak_buku`, `jumlah_buku`) VALUES
(1, 'Konspirasi Alam Semesta', 'Romantis', 'Fiersa Besari', 'Fiersa Besari', 'rak1', '50'),
(2, 'Sebuah Usaha Melupakan', 'Romantis', 'Boy Candra', 'Boy Chandra', 'rak1', '50'),
(3, 'Mariposa', 'Romantis', 'Luluk HF', 'Luluk HF', 'rak1', '50'),
(4, 'Dear Nathan', 'Romantis', 'Erisca Febrianti', 'Erisca Febrianti', 'rak1', '50'),
(5, 'Antologi Rasa', 'Romantis', 'Ika Natassa', 'Ika Natassa', 'rak1', '50'),
(6, 'Love Across Time', 'Romantis', 'Ade Saragih', 'Ade Saragih', 'rak1', '50'),
(7, 'Night In Rodanthe', 'Romantis', 'Nicolas Spark', 'Nicolas Spark', 'rak1', '50'),
(8, 'The Wedding Date', 'Romantis', 'Jasmine Guillory', 'Jasmine Guillory', 'rak1', '50'),
(10, 'Rindu', 'Romantis', 'Tere Liye', 'Tere Liye', 'rak1', '50'),
(11, 'Gerbang Dialog Danur', 'Horor', 'Risa Sarasvati', 'Risa Sarasvati', 'rak2', '50'),
(12, 'Lost', 'Horor', 'Eve Shi', 'Eve Shi', 'rak2', '50'),
(13, 'Misteri Patung Garam', 'Horor', 'Ruwi Meita', 'Ruwi Meita', 'rak2', '50'),
(14, 'Tewasnya Gagak Hitam', 'Horor', 'Sidik Nugroho', 'Sidik Nugroho', 'rak2', '50'),
(15, 'The Silence of The Lambs', 'Horor', 'Thomas Harris', 'Thomas Harris', 'rak2', '50'),
(17, 'The Exorcist', 'Horor', 'William Peter Blatty', 'William Peter Blatty', 'rak2', '50'),
(19, 'Interview with The Vampire', 'Horor', 'Anne Rice', 'Anne Rice', 'rak2', '50'),
(20, 'Dracula', 'Horor', 'Bram Stoker', 'Bram Stoker', 'rak2', '50'),
(22, 'Bajak Laut & Purnama Terakhir', 'Komedi', 'Adhitya Mulya', 'Adhitya Mulya', 'rak3', '50'),
(23, '(EX)PERIENCE', 'Komedi', 'Reza Pahlevi', 'Reza Pahlevi', 'rak3', '50'),
(25, 'Ubur-Ubur Lembur', 'Komedi', 'Raditya Dika', 'Raditya Dika', 'rak3', '50'),
(26, 'Manusia Setengah Salmon', 'Komedi', 'Raditya Dika', 'Raditya Dika', 'rak3', '50'),
(27, 'The Freaky Teppy', 'Komedi', 'Stephanie Josephine', 'Stephanie Josephine', 'rak3', '50'),
(30, 'The Hating Game: A Novel', 'Komedi', 'Sally Thorne', 'Sally Thorne', 'rak3', '50'),
(32, 'Tetralogi Buru', 'Sejarah', 'Pramoedya Ananta Toer', 'Pramoedya Ananta Toer', 'rak4', '50'),
(36, 'Jugun Lanfu', 'Sejarah', 'E. Rokajat Asura', 'E. Rokajat Asura', 'rak4', '50'),
(37, 'Halaman Terakhir', 'Sejarah', 'Yudhi Herwibowo', 'Yudhi Herwibowo', 'rak4', '50'),
(38, 'Amba', 'Sejarah', 'Laksmi Pamuntjak', 'Laksmi Pamuntjak', 'rak4', '50'),
(39, 'Saksi Mata', 'Sejarah', 'Seno Gumira Ajidarma', 'Seno Gumira Ajidarma', 'rak4', '50'),
(40, 'Tiga Sandra Terakhir', 'Sejarah', 'Brahmanto Anindito', 'Brahmanto Anindito', 'rak4', '50'),
(60, 'Laut Bercerita', 'Sejarah', 'Leila Chudori', 'Leila Chudori', 'rak4', '50'),
(62, 'Pasar', 'Sejarah', 'Kuntowijoyo', 'Kuntowijoyo', 'rak4', '50'),
(68, 'Wado Bucin', 'Romantis', 'FabFab', 'FabFab', 'rak1', '50'),
(70, 'Skripsick:Derita Mahasiswa Abadi', 'Komedi', 'Chara Perdana', 'Chara Perdana', 'rak3', '50'),
(74, 'The Vampire Diaries', 'Fantasi', 'L.J Smith', 'L.J Smith', 'rak5', '50'),
(77, 'Salmon Goreng', 'Komedi', 'Fabio', 'Fab', 'rak3', '50'),
(81, 'The Heroes of Olympus', 'Fantasi', 'Rick Riordan', 'Rick Riordan', 'rak5', '50'),
(83, 'Lorien Legacies', 'Fantasi', 'Pittacus Lore', 'Pittacus Lore', 'rak5', '50'),
(84, 'Meomi', 'Sejarah', 'Marion Bloem', 'Marion Bloem', 'rak4', '50'),
(90, 'Trilogi The Maze Runner', 'Fantasi', 'James Dashner', 'James Dashner', 'rak5', '1'),
(91, 'Ngenest', 'Komedi', 'Ernest Prakasa', 'Ernest Prakasa', 'rak3', '50'),
(93, 'The Haunting of Hill House', 'Horor', 'Shirley Jackson', 'Shirley Jackson', 'rak2', '50'),
(94, 'Tenggelamnya Kapal Van der Wijck', 'Sejarah', 'Buya Hamka', 'Buya Hamka', 'rak4', '50'),
(95, 'Carrie', 'Horor', 'Stephen King', 'Stephen King', 'rak2', '50'),
(96, 'My Stupid Boss', 'Komedi', 'Chaos@work', 'Chaos@work', 'rak3', '50'),
(97, 'Seri Immortal', 'Fantasi', 'Alyson Noel', 'Alyson Noel', 'rak5', '50'),
(98, 'Kane Chronicles', 'Fantasi', 'Rick Riordan', 'Rick Riordan', 'rak5', '50'),
(99, 'Trials of Apolloo', 'Fantasi', 'Rick Riordan', 'Rick Riordan', 'rak5', '50'),
(100, 'Twilight Saga', 'Fantasi', 'Stephenie Meyer', 'Stephenie Meyer', 'rak5', '50'),
(101, 'The Not So Amazing Life of Amrazing', 'Komedi', 'Alexander Thain', 'Alexander Thain', 'rak3', '50'),
(102, 'Garis Waktu', 'Romantis', 'Fiersa Besari', 'Fiersa Besari', 'rak1', '50'),
(103, 'Vampire Academy', 'Fantasi', 'Richelle Mead', 'Richelle Mead', 'rak5', '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `jns_kel` varchar(50) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `rak_buku` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal_pinjam` varchar(50) NOT NULL,
  `tanggal_kembali` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `peminjam`, `email`, `alamat`, `no_telp`, `jns_kel`, `nama_buku`, `genre`, `pengarang`, `penerbit_buku`, `rak_buku`, `jumlah`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(3, 'fabiofajar', 'fabiofajark@yahoo.com', 'Surabaya ', '081231348105 ', 'Laki - Laki ', 'Trilogi The Maze Runner', 'Fantasi', 'James Dashner', 'James Dashner', 'rak5', '5', '28-11-2019', '08-12-2019', 'KEMBALI'),
(4, 'fabiofajar', 'fabiofajark@yahoo.com', 'Surabaya ', '081231348105 ', 'Laki - Laki ', 'Trilogi The Maze Runner', 'Fantasi', 'James Dashner', 'James Dashner', 'rak5', '5', '28-11-2019', '08-12-2019', 'KEMBALI'),
(5, 'fabiofajar', 'fabiofajark@yahoo.com', 'Surabaya ', '081231348105 ', 'Laki - Laki ', 'Seri Immortal', 'Fantasi', 'Alyson Noel', 'Alyson Noel', 'rak5', '15', '28-11-2019', '08-12-2019', 'KEMBALI'),
(6, 'fabiofajar', 'fabiofajark@yahoo.com', 'Surabaya ', '081231348105 ', 'Laki - Laki ', 'Trilogi The Maze Runner', 'Fantasi', 'James Dashner', 'James Dashner', 'rak5', '49', '28-11-2019', '08-12-2019', 'DIPINJAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `jns_kel` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username`, `email`, `password`, `level`, `alamat`, `no_telp`, `jns_kel`, `file`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin', '', '', '', ''),
(2, 'petugas', 'petugas@petugas.com', '123456', 'petugas', '', '', '', ''),
(19, 'eric', 'eric@gmail.com', 'eric123', 'pengunjung', 'Sidoarjo', '08123456789', 'Laki-Laki', ''),
(20, 'fabiofajar', 'fabiofajark@yahoo.com', 'fabiofajar', 'pengunjung', 'Surabaya', '081231348105', 'Laki - Laki', 'IMG_20191118_222754.jpg'),
(21, 'hagi', 'hagi12@gmail.com', 'hagi', 'pengunjung', 'Sidoarjo', '14045', 'Laki-Laki', ''),
(22, 'ferdyan', 'frdynramadhani25@gmail.com', 'suwototbn', 'pengunjung', 'Surabaya', '085735807165', 'Laki-Laki', ''),
(23, 'asd', 'asd@gmail.com', 'asd', 'pengunjung', 'asodsa', '012371273', 'Laki-Laki', ''),
(24, 'poi', 'poi@gmailc.o', '123', 'pengunjung', 'Surabaya', '213213', 'Laki-Laki', ''),
(25, 'enrico', 'enrico99@gmai.com', '123q1234', 'pengunjung', 'Surabaya', '123456', 'Laki-Laki', ''),
(26, 'fabfab', 'fabiofajark22@gmail.com', 'fabfab', 'pengunjung', 'Malang', '08123456789', 'Laki-Laki', 'fabio.jpg'),
(27, 'golden', 'golden@gmail.com', 'golden', 'pengunjung', 'Malang', '085735807165', 'Laki-Laki', ''),
(28, 'fab', 'fabiofaj0009@gmail.com', '12345', 'pengunjung', 'Sjsjudd', '213213', 'Laki-Laki', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kel` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `email`, `alamat`, `jenis_kel`, `ttl`, `password`) VALUES
(1, 'Fabiofab', 'fabiofajark@yahoo.com', 'Surabaya', 'Jenis Kelamin', 'Surakarta, 15 November 2000', ''),
(2, 'Fabio', 'fabiofajark1@yahoo.com', 'Surabaya', 'Laki - Laki', 'Surakarta, 16 November 2000', 'fabiofajar12'),
(3, 'awewe', 'awewe@yahoo.com', 'Sidoarjo', 'Perempuan', 'Sidoarjo, 20 Desember 2001', '$2y$10$/SrT122cElIWkFlEg650q.jAQ22vLYPvW53JBu8mxBtUPVlPcp09y'),
(4, 'Fabbbbbbbbbiiiooooooo', 'gatau@yahoo.com', 'Malang', 'Laki-Laki', '9 Mei 2002', '$2y$10$SqdbPvGPPpAwZ6HWlZS.N.YMbvUcHQ6G9G8eKDc7OLq6WEmA1aAoe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `rak` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal_pinjam` varchar(50) NOT NULL,
  `tanggal_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `peminjam`, `nama_buku`, `genre`, `pengarang`, `penerbit`, `rak`, `jumlah`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(6, 'fabiofajar', 'Trilogi The Maze Runner', 'Fantasi', 'James Dashner', 'James Dashner', 'rak5', '49', '28-11-2019', '08-12-2019');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
