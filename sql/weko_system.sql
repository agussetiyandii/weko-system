-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 08:30 AM
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

--
-- Dumping data for table `t_sub_kategori`
--

INSERT INTO `t_sub_kategori` (`id`, `id_kategori`, `sub_kategori`) VALUES
(1, 1, 'NOTEBOOK'),
(2, 1, 'GAMING'),
(3, 1, 'APPLE'),
(4, 1, 'TABLET'),
(5, 1, 'WORKSTATION'),
(6, 2, 'MOUSE'),
(7, 2, 'BATERAI'),
(8, 2, 'COOLER FAN'),
(9, 2, 'FLASHDISK'),
(10, 2, 'KABEL POWER'),
(11, 2, 'ADAPTOR'),
(12, 2, 'KABEL DVI'),
(13, 2, 'KEYBOARD'),
(14, 2, 'KABEL VGA'),
(15, 2, 'OPTICAL DRIVE'),
(16, 2, 'PORTABLE HDD'),
(17, 2, 'TAS DAN CASE'),
(18, 2, 'WEB CAM'),
(19, 2, 'SPEAKER'),
(20, 2, 'AKSESORIS LAINNYA'),
(21, 3, 'ALL IN ONE'),
(22, 3, 'CPU'),
(23, 3, 'MINI PC'),
(24, 3, 'TOWER'),
(25, 3, 'SFF'),
(26, 4, 'LCD PC'),
(27, 4, 'LED PC'),
(28, 4, 'LCD LAPTOP'),
(29, 4, 'LED LAPTOP'),
(30, 4, 'LCD TOUCHSCREENS'),
(31, 5, 'TOWER'),
(32, 5, 'UDP'),
(33, 5, 'CISCO'),
(34, 6, 'AKSESORIS PRINTER'),
(35, 6, 'CARTRIDGE'),
(36, 6, 'COPIER'),
(37, 6, 'TINTA PRINTER'),
(38, 6, 'UNIT PRINTER'),
(39, 7, 'AKSESORIS HP'),
(40, 7, 'MEMORY CARD'),
(41, 7, 'POWER BANK'),
(42, 7, 'SMARTPHONE'),
(43, 7, 'SMARTWATCH'),
(44, 7, 'SPARE PARTS HP'),
(45, 7, 'TABLET'),
(46, 8, 'RAM'),
(47, 8, 'HARDDISK'),
(48, 8, 'SSD'),
(49, 8, 'MSATA'),
(50, 8, 'VGA'),
(51, 8, 'PROCESSOR'),
(52, 8, 'MOTHERBOARD'),
(53, 8, 'UPS'),
(54, 9, 'AC'),
(55, 9, 'CD DVC BLU RAY'),
(56, 9, 'HEADPHONE'),
(57, 9, 'HOME THEATER'),
(58, 9, 'PROYEKTOR'),
(59, 9, 'TELEPON'),
(60, 9, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `t_sub_lokasi`
--

CREATE TABLE `t_sub_lokasi` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `sub_lokasi_1` varchar(128) NOT NULL,
  `sub_lokasi_2` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sub_lokasi`
--

INSERT INTO `t_sub_lokasi` (`id`, `id_lokasi`, `sub_lokasi_1`, `sub_lokasi_2`) VALUES
(1, 1, 'LT.1 (Gudang)', NULL),
(2, 1, 'LT.2', NULL),
(3, 2, 'LT.1', 'RAK 1'),
(4, 2, 'LT.1', 'RAK 2'),
(5, 2, 'LT.1', 'RAK 3'),
(6, 2, 'LT.1', 'RAK 4'),
(7, 2, 'LT.2', 'RAK 1'),
(8, 2, 'LT.2', 'RAK 2'),
(9, 2, 'LT.2', 'RAK 3'),
(10, 2, 'LT.2', 'RAK 4'),
(11, 2, 'LT.3', 'RAK 1'),
(12, 2, 'LT.3', 'RAK 2'),
(13, 2, 'LT.3', 'RAK 3'),
(14, 2, 'LT.3', 'RAK 4'),
(15, 3, 'LT.1', NULL),
(16, 3, 'LT.2', NULL),
(17, 4, 'GUDANG', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `t_sub_lokasi`
--
ALTER TABLE `t_sub_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
