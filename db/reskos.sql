-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2017 at 05:57 AM
-- Server version: 5.6.32
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reskos`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bahan`
--

CREATE TABLE `data_bahan` (
  `no` int(11) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `nama_bahan` varchar(32) NOT NULL,
  `jumlah_bahan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_bahan`
--

INSERT INTO `data_bahan` (`no`, `id_resep`, `nama_bahan`, `jumlah_bahan`) VALUES
(1, 1, 'Tahu', '1 Kotak'),
(2, 1, 'Bawang merah besar', '1 Siung'),
(3, 1, 'Bawang putih kecil', '1 Siung'),
(4, 1, 'Cabe', '10 Buah'),
(5, 1, 'Garam', ''),
(6, 1, 'Gula', ''),
(7, 1, 'Telur ayam', '1 Buah');

-- --------------------------------------------------------

--
-- Table structure for table `data_resep`
--

CREATE TABLE `data_resep` (
  `id_resep` int(11) NOT NULL,
  `nama_resep` varchar(32) NOT NULL,
  `foto_resep` text NOT NULL,
  `deskripsi_resep` text NOT NULL,
  `pembuat_resep` varchar(32) NOT NULL,
  `foto_pembuat` text NOT NULL,
  `porsi_resep` varchar(20) NOT NULL,
  `sumber_resep` text NOT NULL,
  `langkah_resep` text NOT NULL,
  `rating_resep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_resep`
--

INSERT INTO `data_resep` (`id_resep`, `nama_resep`, `foto_resep`, `deskripsi_resep`, `pembuat_resep`, `foto_pembuat`, `porsi_resep`, `sumber_resep`, `langkah_resep`, `rating_resep`) VALUES
(1, 'Bola Tahu Cabe ala anak kos ', '1.jpg', 'Bola tahu dengan bumbu sederhana ala anak kos. Tanpa tambahan bumbu penyedap..\nEnjoy it....', 'pop farsar\n', '1.jpg', '2 - 3 Orang', 'https://cookpad.com/id/resep/1618011-bola-tahu-cabe-ala-anak-kos', '1.txt', 5),
(2, 'B', 'B', 'B', 'B', 'B', 'B', 'B', '1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bahan`
--
ALTER TABLE `data_bahan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_resep`
--
ALTER TABLE `data_resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bahan`
--
ALTER TABLE `data_bahan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
