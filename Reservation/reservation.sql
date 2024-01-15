-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phoneNum` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`id`, `name`, `phoneNum`) VALUES
(1, 'sdfghnjgfd', 12345),
(2, 'chamathka', 7684),
(3, 'Livini', 759874561),
(4, 'Chanupa', 75896541),
(5, 'Athsara', 78964512);

-- --------------------------------------------------------

--
-- Table structure for table `userres`
--

CREATE TABLE `userres` (
  `id` int(12) NOT NULL,
  `name` varchar(18) NOT NULL,
  `phoneNum` int(14) NOT NULL,
  `day` varchar(16) NOT NULL,
  `hour` varchar(16) NOT NULL,
  `persons` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userres`
--

INSERT INTO `userres` (`id`, `name`, `phoneNum`, `day`, `hour`, `persons`) VALUES
(2, 'chanupa', 789456, 'sunday', '10', 3),
(3, 'livini', 789453, 'tuesday', '10', 3),
(4, 'chanupa', 789456, 'wednesday', '10', 2),
(5, 'yasith', 78965412, 'monday', '10', 5),
(6, 'Nimal', 784512369, 'wednesday', '10', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userres`
--
ALTER TABLE `userres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userres`
--
ALTER TABLE `userres`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
