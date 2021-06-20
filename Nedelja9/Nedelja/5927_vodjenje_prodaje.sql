-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodjenje_prodaje`
--
CREATE DATABASE IF NOT EXISTS `5927_vodjenje_prodaje` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `5927_vodjenje_prodaje`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` int(3) NOT NULL,
  `kolicina` int(3) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, 123, 5, '110.00', '2021-06-17'),
(2, 124, 3, '150.00', '2021-06-16'),
(3, 125, 2, '200.00', '2021-05-01'),
(4, 126, 2, '275.00', '2021-06-17'),
(5, 124, 1, '165.00', '2021-06-17'),
(6, 126, 3, '250.00', '2021-06-16'),
(7, 123, 5, '100.00', '2021-05-01'),
(8, 126, 3, '250.00', '2021-05-01'),
(9, 124, 3, '150.00', '2021-05-01'),
(10, 125, 5, '220.00', '2021-06-17'),
(11, 123, 3, '100.00', '2021-06-16'),
(13, 789, 20, '220.00', '2021-06-17'),
(14, 789, 40, '275.00', '2021-06-17'),
(15, 789, 10, '242.00', '2021-06-17'),
(16, 776, 30, '50.00', '2021-05-01'),
(17, 761, 10, '96.80', '2021-06-17'),
(18, 761, 20, '72.60', '2021-06-17'),
(19, 761, 30, '60.50', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` int(3) NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
(123, 'krompir', '100.00'),
(124, 'breskva', '150.00'),
(125, 'tresnje', '200.00'),
(126, 'jagode', '250.00'),
(761, 'beli luk', '80.00'),
(776, 'crni luk', '50.00'),
(789, 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodaja_ibfk_1` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
