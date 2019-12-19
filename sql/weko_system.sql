-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 06:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weko_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id`, `kategori`) VALUES
(1, 'LAPTOP'),
(2, 'AKSESORIS'),
(3, 'DESKTOP'),
(4, 'MONITOR'),
(5, 'SERVER'),
(6, 'PRINTER'),
(7, 'HANDPHONE'),
(8, 'HARDWARE'),
(9, 'ELEKTRONIK');

-- --------------------------------------------------------

--
-- Table structure for table `t_lokasi`
--

CREATE TABLE `t_lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lokasi`
--

INSERT INTO `t_lokasi` (`id`, `lokasi`) VALUES
(1, 'BATAM'),
(2, 'MEDAN'),
(3, 'JAKARTA'),
(4, 'SINGAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `t_merek`
--

CREATE TABLE `t_merek` (
  `id` int(11) NOT NULL,
  `merek` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_merek`
--

INSERT INTO `t_merek` (`id`, `merek`) VALUES
(1, 'ACER'),
(2, 'APPLE'),
(3, 'ASUS'),
(4, 'TOSHIBA'),
(5, 'HP'),
(6, 'DELL'),
(7, 'PANASONIC'),
(8, 'LENOVO'),
(9, 'MSI'),
(10, 'NEC'),
(11, 'MICROSOFT'),
(12, 'PACKARD BELL'),
(13, 'FUJITSU'),
(14, 'COMPAQ'),
(15, 'SAMSUNG'),
(16, 'SONY VAIO');

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id` int(11) NOT NULL,
  `asal_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_sub_lokasi` int(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `info_barang` varchar(128) NOT NULL,
  `harga` float NOT NULL,
  `remark` text NOT NULL,
  `gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_stok_barang`
--

CREATE TABLE `t_stok_barang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `stok_singapura` int(11) NOT NULL,
  `stok_batam` int(11) NOT NULL,
  `stok_medan` int(11) NOT NULL,
  `stok_jakarta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sub_kategori`
--

CREATE TABLE `t_sub_kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sub_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sub_lokasi`
--

CREATE TABLE `t_sub_lokasi` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `sub_lokasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_lokasi`
--
ALTER TABLE `t_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_merek`
--
ALTER TABLE `t_merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stok_barang`
--
ALTER TABLE `t_stok_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sub_kategori`
--
ALTER TABLE `t_sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sub_lokasi`
--
ALTER TABLE `t_sub_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_lokasi`
--
ALTER TABLE `t_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_merek`
--
ALTER TABLE `t_merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_stok_barang`
--
ALTER TABLE `t_stok_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sub_kategori`
--
ALTER TABLE `t_sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sub_lokasi`
--
ALTER TABLE `t_sub_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;