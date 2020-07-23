-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 04:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bep`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapkeu`
--

CREATE TABLE `lapkeu` (
  `id` int(11) NOT NULL,
  `id_lapkeu` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `produk` varchar(30) NOT NULL,
  `unit` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_penjualan` bigint(20) NOT NULL,
  `biaya_variabel` int(11) NOT NULL,
  `biaya_tetap` int(11) NOT NULL,
  `mc` int(11) NOT NULL,
  `rmc` int(11) DEFAULT NULL,
  `bep_u` int(11) DEFAULT NULL,
  `bep_rp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lapkeu`
--

INSERT INTO `lapkeu` (`id`, `id_lapkeu`, `tahun`, `produk`, `unit`, `harga`, `total_penjualan`, `biaya_variabel`, `biaya_tetap`, `mc`, `rmc`, `bep_u`, `bep_rp`) VALUES
(3, 'LAPKEU594', 2019, 'Kemeja', 500, 100000, 50000000, 42500000, 5000000, 7500000, 15, 333, 33333333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapkeu`
--
ALTER TABLE `lapkeu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_lapkeu` (`id_lapkeu`),
  ADD KEY `produk` (`produk`),
  ADD KEY `tahun` (`tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapkeu`
--
ALTER TABLE `lapkeu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
