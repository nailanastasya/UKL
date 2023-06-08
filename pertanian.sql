-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 02:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertanian`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah_asal`
--

CREATE TABLE `daerah_asal` (
  `id_asal` int(10) NOT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `Kabupaten` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `Desa` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daerah_asal`
--

INSERT INTO `daerah_asal` (`id_asal`, `provinsi`, `Kabupaten`, `kecamatan`, `Desa`) VALUES
(1, 'Jawa Timur', 'Sidoarjo', 'Tulangan', 'Kenongo'),
(2, 'Jawa Tengah', 'Salatiga', 'Sidorejo', 'Sidorejo');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panen`
--

CREATE TABLE `hasil_panen` (
  `id_hasil` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_asal` int(10) DEFAULT NULL,
  `jenis_panen` varchar(20) DEFAULT NULL,
  `berat` int(10) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `harga_kilo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_panen`
--

INSERT INTO `hasil_panen` (`id_hasil`, `tanggal`, `id_asal`, `jenis_panen`, `berat`, `id_satuan`, `harga_kilo`) VALUES
(26, '2023-06-08', 1, 'Padi', 580000, 1, 550000),
(29, '2023-06-13', 2, 'Tebu', 34, 1, 65000),
(30, '0000-00-00', 2, 'Cabai', 20, 1, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(8) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `role_user` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `email`, `pass`, `username`, `role_user`) VALUES
(1, 'budi12@gmail.com', '12345678', 'naii11', NULL),
(2, 'nailah4nastasya@gmail.com', '12345679', 'naiiiiiiiiiiii', NULL),
(5, 'naiijk11@gmail.com', 'nai@1234', 'nailah1107', NULL),
(6, 'anton13@gmail.com', 'anton11', 'Anton', NULL),
(8, 'Ketty', '12345987', 'Kettyr.04@gmail.com', NULL),
(9, 'Anton', '12345678', 'Kettyr.04@gmail.com', NULL),
(10, 'Anton', '33333333', 'Kettyr.04@gmail.com', NULL),
(11, 'admin', 'admin', 'admin', '01'),
(12, 'admin2', 'admin', 'nailah4nastasya.28@gmail.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id_petani` int(10) NOT NULL,
  `nama_petani` varchar(20) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `nomor_telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `id_user`, `jenis_kelamin`, `nomor_telepon`) VALUES
(1, 'Budi', 1, 'Laki laki', '0897655312443'),
(2, 'Anton', 6, 'Laki laki', '0897476362543');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(10) NOT NULL,
  `jenis_satuan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `jenis_satuan`) VALUES
(1, 'kg'),
(3, 'hg'),
(4, 'dag'),
(5, 'g'),
(6, 'dg'),
(7, 'cg'),
(8, 'mg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah_asal`
--
ALTER TABLE `daerah_asal`
  ADD PRIMARY KEY (`id_asal`);

--
-- Indexes for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `id_asal` (`id_asal`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daerah_asal`
--
ALTER TABLE `daerah_asal`
  MODIFY `id_asal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `id_petani` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD CONSTRAINT `hasil_panen_ibfk_1` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id_satuan`),
  ADD CONSTRAINT `hasil_panen_ibfk_2` FOREIGN KEY (`id_asal`) REFERENCES `daerah_asal` (`id_asal`);

--
-- Constraints for table `petani`
--
ALTER TABLE `petani`
  ADD CONSTRAINT `petani_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
