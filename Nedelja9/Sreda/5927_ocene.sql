-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 05:02 PM
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
-- Database: `domaci_31_5927`
--
CREATE DATABASE IF NOT EXISTS `5927_ocene` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `5927_ocene`;

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ime_i_prezime` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `razred` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `odeljenje` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime_i_prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko Stojic', 'III', 5),
('14-2020', 'Janko Veselinovic', 'II', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ocena` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `broj_knjizice`, `naziv`, `ocena`) VALUES
(1, '14-2020', 'matematika', 5),
(2, '14-2020', 'srpski', 4),
(3, '13-2020', 'matematika', 2),
(4, '13-2020', 'srpski', 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `profesor` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`naziv`, `profesor`) VALUES
('matematika', 'MT'),
('srpski', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `naziv` (`naziv`),
  ADD KEY `broj_knjizice` (`broj_knjizice`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`naziv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`naziv`) REFERENCES `predmeti` (`naziv`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`broj_knjizice`) REFERENCES `djaci` (`broj_knjizice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
