-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 08:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'katun', 'katun', 'katun Silungkang');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'pematangsiantar', 20000),
(2, 'medan', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `id_packing` int(11) NOT NULL,
  `jenis_packing` varchar(100) NOT NULL,
  `tarif_packing` int(11) NOT NULL,
  `foto_packing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id_packing`, `jenis_packing`, `tarif_packing`, `foto_packing`) VALUES
(1, 'Petak Pita', 30000, 'kado.jpg'),
(2, 'Kotak Merah', 20000, 'kado2.jpg'),
(4, 'Kado Petak Kuning', 15000, 'kado4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'cepo@gmail.com', 'cepo123', 'cepo123', '082361647111', ''),
(5, 'nola@gmail.com', '', 'layla', '098765432', ''),
(7, 'fandi@gmail.com', 'fandi123', 'fandi', '098765432', 'medan'),
(8, 'naldo@gmail.com', 'naldo123', 'naldo', '09876543', 'medan'),
(9, 'joni@gmail.com', 'joni123', 'joni', '0987654321', 'siheang parsoburan'),
(10, 'mutiaramagdalena.simamora@yahoo.co.id', 'tia', 'Mutiara simamora', '5667790', 'kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(5, 1, 'cepo', 'mandiri', 650000, '2018-12-11', '20181211074703bukti bayar.jpg'),
(6, 30, 'jokon', 'mandiri', 3086000, '2018-12-11', '20181211135559daniel.jpg'),
(7, 31, 'vfsf', 'vdfd', 2323, '2018-12-11', '20181211140146asdd.jpg'),
(8, 30, 'joni', 'mandiri', 342524636, '2018-12-11', '20181211174334Bukti Pembayaran.jpg'),
(9, 48, 'joni', 'mandiri', 90000, '2018-12-12', '20181212140458daniel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `id_packing` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `jenis_packing` varchar(100) NOT NULL,
  `tarif_packing` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `id_packing`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `jenis_packing`, `tarif_packing`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(1, 1, 1, 2, '2018-12-11', 650000, '', 0, '', 0, '', 'barang dikirim', 0),
(2, 1, 1, 0, '2018-12-29', 790000, '', 0, '', 0, '', 'pending', 0),
(4, 1, 0, 0, '2018-12-10', 1275000, '', 0, '', 0, '', 'pending', 0),
(5, 1, 0, 0, '2018-12-10', 1275000, '', 0, '', 0, '', 'pending', 0),
(6, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(7, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(8, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(9, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(10, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(11, 1, 2, 0, '2018-12-10', 1300000, '', 0, '', 0, '', 'pending', 0),
(12, 1, 1, 0, '2018-12-10', 1295000, '', 0, '', 0, '', 'pending', 0),
(13, 1, 0, 0, '2018-12-10', 1275000, '', 0, '', 0, '', 'pending', 0),
(14, 1, 2, 0, '2018-12-10', 1300000, '', 0, '', 0, '', 'pending', 0),
(15, 1, 2, 0, '2018-12-10', 1300000, '', 0, '', 0, '', 'pending', 0),
(16, 1, 2, 0, '2018-12-10', 30000, '', 0, '', 0, '', 'pending', 0),
(17, 1, 2, 0, '2018-12-10', 795400, '', 0, '', 0, '', 'pending', 0),
(18, 1, 1, 0, '2018-12-10', 25000, '', 0, '', 0, '', 'pending', 0),
(19, 1, 2, 0, '2018-12-10', 1290000, 'pematangsiantar', 20000, '', 0, '', 'pending', 0),
(20, 2, 1, 0, '2018-12-10', 326000, 'medan', 25000, '', 0, '', 'pending', 0),
(21, 1, 2, 0, '2018-12-10', 325000, 'medan', 25000, '', 0, '', 'pending', 0),
(22, 1, 1, 0, '2018-12-10', 31000, 'pematangsiantar', 20000, '', 0, '', 'pending', 0),
(23, 1, 1, 0, '2018-12-10', 325000, 'pematangsiantar', 20000, '', 0, 'jalan Bahkora II bawah ', 'pending', 0),
(24, 1, 1, 0, '2018-12-10', 326000, 'pematangsiantar', 20000, '', 0, '$jalan bahkora II bawah pematangsiantar kodepos 11317056', 'pending', 0),
(25, 1, 2, 0, '2018-12-10', 90000, 'medan', 25000, '', 0, '$asbckasbc a,sm ca,s c,asc savbasbv,asbvas v,a sv', 'pending', 0),
(26, 1, 2, 0, '2018-12-11', 3030000, 'medan', 25000, '', 0, '$jalan Letkol ksafkjasbfbaldg,amd vmsd v,msd vm,sd ,mv', 'pending', 0),
(27, 1, 1, 0, '2018-12-11', 320000, 'pematangsiantar', 20000, '', 0, '$zxcghjknl;klhgfdzdxfcvhbjnk', 'pending', 0),
(28, 1, 2, 0, '2018-12-11', 330000, 'medan', 25000, '', 0, '$sdfghjklkjhgfdsdfghjkl;lkjhgf', 'pending', 0),
(29, 1, 1, 0, '2018-12-11', 938000, 'pematangsiantar', 20000, '', 0, '$jalan marihat Landbow ', 'pending', 0),
(30, 9, 1, 0, '2018-12-11', 3086000, 'pematangsiantar', 20000, '', 0, '$sdfhjgkhjlkjkhfdfsdgfhjhklgfdfghjk', 'sudah kirim data pembayaran', 0),
(31, 9, 1, 0, '2018-12-11', 25000, 'pematangsiantar', 20000, '', 0, '$vsf', 'sudah kirim data pembayaran', 0),
(32, 1, 2, 0, '2018-12-11', 30000, 'medan', 25000, '', 0, '$jdbsfksdbvs,bvkjsdbvkjdsbvljds', 'pending', 0),
(33, 9, 2, 0, '2018-12-11', 45000, 'medan', 25000, '', 0, '$sgsdbgkjdsbgsgsdgdsgsdg', 'pending', 0),
(34, 1, 1, 0, '2018-12-11', 920000, 'pematangsiantar', 20000, '', 0, '$sdgfjhjhkgfhdsfdgfhg', 'pending', 0),
(35, 1, 2, 0, '2018-12-12', 3541000, 'medan', 25000, '', 0, '$zxfgvjkjljhgdsdfghjnkm', 'pending', 0),
(36, 9, 1, 0, '2018-12-12', 60000, 'pematangsiantar', 20000, '', 0, '$htyhthtyhtyhtyht', 'pending', 0),
(37, 1, 2, 0, '2018-12-12', 325000, 'medan', 25000, '', 0, '$zcxxzczxcxzczczxc', 'pending', 0),
(38, 1, 2, 0, '2018-12-12', 325000, 'medan', 25000, '', 0, '$cghvvjvjhjhvhgchgxgfxfggff', 'pending', 0),
(39, 9, 2, 0, '2018-12-12', 3625000, 'medan', 25000, '', 0, '$zdxfghjkl;lkjdsfghjkl;', 'pending', 0),
(40, 9, 0, 0, '2018-12-12', 5000, '', 0, '', 0, 'jfbsdfbmsdbfnmsdbfmnsdbfsndb', 'pending', 0),
(41, 9, 1, 0, '2018-12-12', 50000, '', 0, '', 0, 'mcz,xmc ,z c,zx c,mzx', 'pending', 0),
(42, 9, 1, 0, '2018-12-12', 1820000, 'pematangsiantar', 20000, '', 0, 'mbasds,bfsdbfsdfbmsdbf', 'pending', 0),
(43, 9, 1, 0, '2018-12-12', 18544000, 'pematangsiantar', 20000, 'bola', 65000, 'ssafsdbfdfsdfsdfsdf', 'pending', 0),
(44, 9, 1, 0, '2018-12-12', 385000, 'pematangsiantar', 20000, 'bola', 65000, 'parapat i', 'pending', 0),
(45, 9, 1, 0, '2018-12-12', 210000, 'pematangsiantar', 20000, 'bola', 65000, 'dksanfsdbfkjdsbfkj', 'pending', 0),
(46, 9, 1, 0, '2018-12-12', 101000, 'pematangsiantar', 20000, 'segitiga', 76000, ',jbbhcfxgfdfxf', 'pending', 0),
(47, 9, 2, 0, '2018-12-12', 866000, 'medan', 25000, 'segitiga', 76000, 'jbvnccbcbcm', 'pending', 0),
(48, 9, 1, 0, '2018-12-12', 90000, 'pematangsiantar', 20000, 'bola', 65000, 'dfghjklkjhgfdzx', 'barang dikirim', 2147483647),
(49, 9, 2, 0, '2018-12-12', 226000, 'medan', 25000, 'segitiga', 76000, 'gjhfgfghdgfdgfdgdgfdf', 'pending', 0),
(50, 9, 2, 0, '2018-12-12', 390000, 'medan', 25000, 'bola', 65000, 'serdtfyg', 'pending', 0),
(51, 1, 2, 0, '2018-12-13', 390000, 'medan', 25000, 'bola', 65000, 'tcyvubinj', 'pending', 0),
(52, 10, 0, 0, '2018-12-13', 23000, '', 0, '', 0, '', 'pending', 0),
(53, 10, 1, 0, '2018-12-13', 97000, 'pematangsiantar', 20000, 'bola', 65000, 'ghj', 'pending', 0),
(54, 10, 1, 0, '2018-12-13', 107000, 'pematangsiantar', 20000, 'segitiga', 76000, 'HJJL', 'pending', 0),
(55, 10, 2, 0, '2018-12-13', 100000, 'medan', 25000, 'bola', 65000, 'ghvjkhl', 'pending', 0),
(56, 9, 1, 0, '2018-12-14', 940000, 'pematangsiantar', 20000, 'Kotak Merah', 20000, 'Bandung', 'pending', 0),
(57, 9, 2, 0, '2018-12-14', 2345000, 'medan', 25000, 'Kotak Merah', 20000, 'Medan', 'pending', 0),
(58, 1, 2, 0, '2018-12-14', 5055000, 'medan', 25000, 'Petak Pita', 30000, 'Balige\r\n', 'pending', 0),
(59, 1, 2, 0, '2018-12-14', 345000, 'medan', 25000, 'Kotak Merah', 20000, 'Sitoluama', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 1, 1, '', 0, 0, 0, 0),
(2, 1, 2, 1, '', 0, 0, 0, 0),
(3, 0, 5, 1, '', 0, 0, 0, 0),
(4, 0, 3, 2, '', 0, 0, 0, 0),
(5, 0, 1, 1, '', 0, 0, 0, 0),
(6, 14, 5, 1, '', 0, 0, 0, 0),
(7, 14, 3, 2, '', 0, 0, 0, 0),
(8, 14, 1, 1, '', 0, 0, 0, 0),
(9, 15, 5, 1, '', 0, 0, 0, 0),
(10, 15, 3, 2, '', 0, 0, 0, 0),
(11, 15, 1, 1, '', 0, 0, 0, 0),
(12, 16, 3, 1, '', 0, 0, 0, 0),
(26, 24, 4, 1, 'Bujang Lapuk', 6000, 0, 0, 6000),
(27, 25, 3, 1, 'motif heang', 5000, 0, 0, 5000),
(28, 25, 4, 10, 'Bujang Lapuk', 6000, 0, 0, 60000),
(29, 26, 1, 10, 'motif banagau', 300000, 0, 0, 3000000),
(30, 26, 3, 1, 'motif heang', 5000, 0, 0, 5000),
(31, 27, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(32, 28, 3, 1, 'motif heang', 5000, 0, 0, 5000),
(33, 28, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(34, 29, 1, 3, 'motif banagau', 300000, 0, 0, 900000),
(35, 29, 4, 3, 'Bujang Lapuk', 6000, 0, 0, 18000),
(36, 30, 5, 4, 'ngewe', 765000, 0, 0, 3060000),
(37, 30, 4, 1, 'Bujang Lapuk', 6000, 0, 0, 6000),
(38, 31, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(39, 32, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(40, 33, 3, 4, 'motif Sijobar', 5000, 0, 0, 20000),
(41, 34, 1, 3, 'motif banagau', 300000, 0, 0, 900000),
(42, 35, 6, 4, 'jancuk', 879000, 0, 0, 3516000),
(43, 36, 3, 8, 'motif Sijobar', 5000, 0, 0, 40000),
(44, 37, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(45, 38, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(46, 39, 1, 12, 'motif banagau', 300000, 0, 0, 3600000),
(47, 40, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(48, 41, 3, 10, 'motif Sijobar', 5000, 0, 0, 50000),
(49, 42, 1, 6, 'motif banagau', 300000, 0, 0, 1800000),
(50, 43, 6, 21, 'Motif Meda', 879000, 0, 0, 18459000),
(51, 44, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(52, 45, 7, 1, 'Motif Parapat', 125000, 0, 0, 125000),
(53, 46, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(54, 47, 5, 1, 'Motif Siantar', 765000, 0, 0, 765000),
(55, 48, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(56, 49, 7, 1, 'Motif Parapat', 125000, 0, 0, 125000),
(57, 50, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(58, 51, 1, 1, 'motif banagau', 300000, 0, 0, 300000),
(59, 52, 4, 3, 'Motif Tarutung', 6000, 0, 0, 18000),
(60, 52, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(61, 53, 4, 2, 'Motif Tarutung', 6000, 0, 0, 12000),
(62, 54, 3, 1, 'motif Sijobar', 5000, 0, 0, 5000),
(63, 54, 4, 1, 'Motif Tarutung', 6000, 0, 0, 6000),
(64, 55, 3, 2, 'motif Sijobar', 5000, 0, 0, 10000),
(65, 56, 9, 2, 'Motif Iran-iran', 450000, 0, 0, 0),
(66, 57, 5, 10, 'Motif Singap', 230000, 0, 0, 0),
(67, 58, 6, 20, 'Motif Ruang', 250000, 0, 0, 5000000),
(68, 59, 4, 1, 'Motif  Sijobang', 300000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(4, 'Motif  Sijobang', 300000, 50, '1.jpg', 'kain yang bagus			', 3),
(5, 'Motif Singap', 230000, 30, '5.jpg', 'Banyak yang sangat menyukainya 		', 6),
(6, 'Motif Ruang', 250000, 400, 'aslkdas.jpg', 'Salah satu kain tenun yang bagus dan lembut			', 80),
(8, 'Angkar', 150000, 50, 'background.jpg', '			kainnya sangat bagus dujaidkan sebagai bakal bajau 		', 25),
(9, 'Motif Iran-iran', 450000, 50, 'FB_IMG_1543911539827.jpg', '			kain tenun yang lembut dan halus		', 28),
(10, 'Motif  Bunga Sungkit', 200000, 30, 'FB_IMG_1543911542112.jpg', '			Kain yang sangat halus		', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id_packing`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id_packing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
