-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 05:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatawan_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisatawan`
--

CREATE TABLE `wisatawan` (
  `no_wisatawan` int(11) NOT NULL,
  `nama_wisatawan` varchar(30) NOT NULL,
  `gender_wisatawan` varchar(15) NOT NULL,
  `umur_wisatawan` int(11) NOT NULL,
  `asal_wisatawan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisatawan`
--

INSERT INTO `wisatawan` (`no_wisatawan`, `nama_wisatawan`, `gender_wisatawan`, `umur_wisatawan`, `asal_wisatawan`) VALUES
(1, 'Yudi Argana', 'Laki-Laki', 25, 'Lumajang, Jawa TImur'),
(2, 'Regina Sekar', 'Perempuan', 21, 'Probolinggo, Jawa TImur'),
(5, 'Ayudia Monica', 'Perempuan', 20, 'Bandung, Jawa Barat'),
(6, 'Legimin', 'Laki-Laki', 29, 'Malang, Jawa Timur'),
(9, 'Fero Wira', 'Laki-Laki', 29, 'Nganjuk. Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`no_wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `no_wisatawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
