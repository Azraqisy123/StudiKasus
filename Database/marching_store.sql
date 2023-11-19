-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 09:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marching_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `ID_Detail_Transaksi` int(11) NOT NULL,
  `ID_Transaksi` int(11) DEFAULT NULL,
  `ID_Produk` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`ID_Detail_Transaksi`, `ID_Transaksi`, `ID_Produk`, `Jumlah`, `Subtotal`) VALUES
(1, 1, 120, 1, 12000000.00),
(2, 2, 118, 1, 8000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `ID_Kategori` int(11) NOT NULL,
  `Nama_Kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`ID_Kategori`, `Nama_Kategori`) VALUES
(11, 'Percussion'),
(12, 'Hornline');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat`) VALUES
(100, 'Azraqi', 'Medan, Sumatera Utara'),
(200, 'Reza', 'Bandung, Sumatera Barat');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Nama_Produk` varchar(255) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Stok` int(11) DEFAULT NULL,
  `ID_Kategori` int(11) DEFAULT NULL,
  `Nama_Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Harga`, `Stok`, `ID_Kategori`, `Nama_Gambar`) VALUES
(111, 'Snare Drum', 9000000, 10, 11, 'Snare_Drum.png'),
(112, 'Trumpet', 2500000, 10, 12, 'Trumpet.png'),
(113, 'Bass Drum', 5000000, 10, 11, 'BassDrum2.png'),
(114, 'Mellophone', 6000000, 10, 12, 'mellophone.png'),
(115, 'Quarto', 14000000, 10, 11, 'Quarto.png'),
(116, 'Cymbal', 3000000, 10, 11, 'Cymbals.png'),
(117, 'Trombone', 12000000, 10, 12, 'Trombone.png'),
(118, 'Flugel Horn', 7000000, 10, 12, 'flugel.png'),
(119, 'Tuba', 24000000, 10, 12, 'tuba.png'),
(120, 'Euphonium', 16000000, 10, 12, 'Euphonium.png'),
(121, 'Baritone', 10000000, 6, 12, 'Baritone.png'),
(123, 'Bass Drum 20\" ', 5000000, 6, 11, 'BassDrum.png'),
(124, 'Trombone Slide', 8000000, 5, 12, 'TromSlide.png'),
(125, 'Quint Tom', 15000000, 4, 11, 'quint tom.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(11) NOT NULL,
  `Tanggal_Transaksi` date DEFAULT NULL,
  `ID_Pelanggan` int(11) DEFAULT NULL,
  `Total_Harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `Tanggal_Transaksi`, `ID_Pelanggan`, `Total_Harga`) VALUES
(1, '2023-11-02', 100, 500.00),
(2, '2023-11-09', 200, 300.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`ID_Detail_Transaksi`),
  ADD KEY `ID_Transaksi` (`ID_Transaksi`),
  ADD KEY `ID_Produk` (`ID_Produk`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`),
  ADD KEY `ID_Kategori` (`ID_Kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`ID_Transaksi`) REFERENCES `transaksi` (`ID_Transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`ID_Kategori`) REFERENCES `kategori_produk` (`ID_Kategori`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
