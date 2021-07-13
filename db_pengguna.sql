-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 03:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengguna`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_telefon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `no_telefon`) VALUES
(4, 'Minah Do Re Mi', '0123456978'),
(7, 'Sollehuddin Salleh', '0123456978'),
(8, 'Mat Hassan', '0123456978'),
(9, 'Mamat Exists', '0123456978'),
(11, 'Abby Abadi', '0123456978'),
(12, 'Adibah Yunus', '0123456978'),
(13, 'Ani Maiyuni', '0123456978'),
(14, 'Bella Nazari', '0123456978'),
(15, 'Bella Dowanna', '0123456978'),
(16, 'Cristina Suzanne Stockstill', '0123456978'),
(17, 'Duerra Mitilda', '0123456978'),
(18, 'Erra Fazira', '0123456978'),
(19, 'Eyka Farhana', '0123456978'),
(20, 'Elly Azman', '0123456978'),
(21, 'Fatimah Abu Bakar', '0123456978'),
(22, 'Feeya Iskandar', '0123456978'),
(23, 'Janna Nick\r\n', '0123456978'),
(24, 'Intan Ladyana', '0123456978'),
(25, 'Isyariana Che Azmi', '0123456978'),
(26, 'Izara Aishah', '0123456978'),
(27, 'Ika Nabila', '0123456978'),
(28, 'Abu Bakar', '0123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
