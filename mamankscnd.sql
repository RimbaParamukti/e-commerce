-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamankscnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('Usr05', 'admin', '$2y$10$sBJmQbFIdtPUUS5veGN7dehUCZAMWb4PAxuS4Zz9YSJCG9EnRRmNC');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id_galeri` varchar(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_produk`
--

INSERT INTO `galeri_produk` (`id_galeri`, `id_produk`, `foto`) VALUES
('GLR01', 'PR002', '61a3085891fa8.jpg'),
('GLR02', 'PR002', '61a30865c4e95.jpg'),
('GLR03', 'PR002', '61a30873c3d7b.jpg'),
('GLR05', 'PR001', '61a30897aa132.jpg'),
('GLR06', 'PR001', '61a308acc7483.jpg'),
('GLR08', 'PR001', '61a38cb137ad5.jpg'),
('GLR09', 'PR003', '61a4e28b3e035.jpg'),
('GLR10', 'PR003', '61a4e2977933f.jpg'),
('GLR11', 'PR003', '61a4e2a25cbe9.jpg'),
('GLR12', 'PR003', '61a4e2af4e75e.jpg'),
('GLR13', 'PR005', '61a4e2bcb55cf.jpg'),
('GLR14', 'PR005', '61a4e2cba5ded.jpg'),
('GLR15', 'PR005', '61a4e2d8ca9d9.jpg'),
('GLR17', 'PR004', '61a4e311bb0ac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(3) NOT NULL,
  `nama_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('K00', 'Sepatu'),
('K01', 'BAJU'),
('K02', 'Topin'),
('K03', 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(7) NOT NULL,
  `harga_diskon` int(7) DEFAULT NULL,
  `ukuran` char(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `harga_diskon`, `ukuran`, `stok`, `id_kategori`) VALUES
('PR003', 'Pinguin', 'sadsdhdas isahdiha sadasod', 2000000, 150000, 'K', 203, 'K03'),
('PR004', 'Bawd', 'sidai', 2132, 0, 'xl', 206, 'K01'),
('PR005', 'adsadsad', 'sndandjnasdn', 130000, 20000, '44', 942, 'K00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `bukti_transaksi` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `total` int(7) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `resi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `bukti_transaksi`, `status`, `total`, `tanggal`, `kota`, `kodepos`, `alamat`, `resi`) VALUES
('TR001', 'Usr00', '61defd5986133.jpg', '0', 462132, '2022-01-12', 'Surabaya', '12321', 'tstsdjasdds sadhasdsa sadhasihd                   ', ''),
('TR002', 'Usr00', '61df0effe2407.png', '3', 12132, '2022-01-13', 'Surabaya', '12321', 'tstsdjasdds sadhasdsa sadhasihd                   ', 'aaaa'),
('TR003', 'Usr04', '61df0fad76372.png', '3', 12132, '2022-01-13', 'KAA', '23810', 'asdkjasdjk                                        ', 'jsadbbsd'),
('TR004', 'Usr04', '61e13a272567c.png', '3', 632132, '2022-01-14', 'KAA', '23810', 'asdkjasdjk                                        ', '123213'),
('TR005', 'Usr04', '61e153a393243.png', '3', 32132, '2022-01-14', 'KAA', '23810', 'asdkjasdjk                                        ', '2131232131');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_detail_transaksi` varchar(5) NOT NULL,
  `id_transaksi` varchar(5) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `id_produk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_detail_transaksi`, `id_transaksi`, `jumlah`, `id_produk`) VALUES
('Dtr00', 'TR001', 1, 'PR004'),
('Dtr01', 'TR001', 3, 'PR003'),
('Dtr02', 'TR002', 1, 'PR004'),
('Dtr03', 'TR003', 1, 'PR004'),
('Dtr04', 'TR004', 1, 'PR004'),
('Dtr05', 'TR004', 1, 'PR005'),
('Dtr06', 'TR004', 4, 'PR003'),
('Dtr07', 'TR005', 1, 'PR005'),
('Dtr08', 'TR005', 1, 'PR004');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama_pelanggan` varchar(20) DEFAULT NULL,
  `notelp` char(12) NOT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kodepos` char(6) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_pelanggan`, `notelp`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodepos`, `alamat_lengkap`) VALUES
('Usr00', 'BB', '$2y$10$89k7cVHIXQ5WizOor/.gnOKRywahDUNPT8sXl0ceSgfueil2c.p8K', 'rimba paramukti', '31727391', 'Jawa Tengah', 'Surabaya', 'Sidomuncul', 'Tolak Angin', '12321', 'tstsdjasdds sadhasdsa sadhasihd                                                                                                                 '),
('Usr04', 'rimba', '$2y$10$QJhTI/FCZEuNYatUicfKK.bHrCX/bt1qz7LW3vIKI9ecptFVcgWIi', 'rimba paramukti', '081931109690', 'Jawa Tengah', 'KAA', 'adks', 'asdk', '23810', 'asdkjasdjk                                                                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_user`, `id_produk`) VALUES
('WL000', 'PR005', 'Usr00'),
('WL001', 'Usr04', 'PR004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
