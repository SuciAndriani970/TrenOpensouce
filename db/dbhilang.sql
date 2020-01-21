-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 04:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhilang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kejadian`
--

CREATE TABLE `tbl_kejadian` (
  `id_kejadian` int(7) NOT NULL,
  `pelapor_kejadian` varchar(25) NOT NULL,
  `tanggal_lapor` date NOT NULL,
  `jenis_kasus` varchar(25) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `thn_kendaraan` varchar(10) NOT NULL,
  `merk_jenis` varchar(50) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `tempat_kejadian` varchar(25) NOT NULL,
  `dugaan` text NOT NULL,
  `kronologi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kejadian`
--

INSERT INTO `tbl_kejadian` (`id_kejadian`, `pelapor_kejadian`, `tanggal_lapor`, `jenis_kasus`, `nopol`, `thn_kendaraan`, `merk_jenis`, `tgl_kejadian`, `tempat_kejadian`, `dugaan`, `kronologi`) VALUES
(102, 'mariza', '2019-12-31', 'pencurian', 'BK 0000 VK', '2008', 'Honda/Sepeda motor', '2019-12-31', 'dirumah', 'dibawa kabur ', 'motor dipinjam tetangga sampai sore tetangga juga pulang dan tidak bisa dihubungi sampai sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelapor`
--

CREATE TABLE `tbl_pelapor` (
  `id_pelapor` int(7) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(3) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelapor`
--

INSERT INTO `tbl_pelapor` (`id_pelapor`, `nama`, `alamat`, `jk`, `kewarganegaraan`, `pekerjaan`, `no_telp`) VALUES
(2, 'Lesmana', 'Jln durian No.09 Kisaran Barat', 'P', 'Indonesia', 'PNS', '087890876524');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(23) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('fadillah', '12345678', 'source1@gmail.com', 'aulia fadillah siddiq', 1, 'staff pidana'),
('source1', '25d55ad283aa400af464c76d713c07ad', 'source1@gmail.com', 'aulia siddiq', 1, 'staff pidana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kejadian`
--
ALTER TABLE `tbl_kejadian`
  ADD PRIMARY KEY (`id_kejadian`);

--
-- Indexes for table `tbl_pelapor`
--
ALTER TABLE `tbl_pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kejadian`
--
ALTER TABLE `tbl_kejadian`
  MODIFY `id_kejadian` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `tbl_pelapor`
--
ALTER TABLE `tbl_pelapor`
  MODIFY `id_pelapor` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
