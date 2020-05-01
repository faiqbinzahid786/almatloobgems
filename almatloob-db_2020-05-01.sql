-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2020 at 06:46 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almatloob`
--

-- --------------------------------------------------------

--
-- Table structure for table `earings`
--

CREATE TABLE `earings` (
  `ID` varchar(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `earings`
--

INSERT INTO `earings` (`ID`, `img`, `name`, `description`, `size`, `weight`, `amount`, `price`) VALUES
('123', '../pictures/E100.jpg', 'Editted Faiq', 'Faiq Bin Zahid', '1212', '1212', 12121, 12122),
('E100', '../pictures/E100.jpg', 'Italy Earrings', 'Silver Earrings with modern Italy design', '3x3', '87', 19, 78),
('E101', '../pictures/E101.jpg', '5 Star Earring ', '5 differnt size of diamond and aligned in ascending order with Silver body', '30x60', '43', 32, 769),
('E102', '../pictures/E102.jpg', 'Deep in the sea', 'Blue Sapphire with Diamonds around it', '14x15', '43', 12, 299);

-- --------------------------------------------------------

--
-- Table structure for table `pendants`
--

CREATE TABLE `pendants` (
  `ID` varchar(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendants`
--

INSERT INTO `pendants` (`ID`, `img`, `name`, `description`, `size`, `weight`, `amount`, `price`) VALUES
('876543', 'hgfds', 'Update Works', 'asdfgbnm', '765432', '5432', 876543, 1000),
('P100', '../pictures/P100.jpg', 'Greenish Neck ', 'Green stone with diamonds all around it in square shape', '30x25', '109', 4, 999),
('P101', '../pictures/P101.jpg', 'Love in the neck', 'Pendant with a heart shape. Pure Silver body with Silver chain', '20x40', '140', 2, 100),
('P102', '../pictures/P102.jpg', 'Wing Pendant ', 'Pendant in a wing shape purely designed in Italy. Pure Silver body with Silver chain', '20x80', '98', 4, 350);

-- --------------------------------------------------------

--
-- Table structure for table `rings`
--

CREATE TABLE `rings` (
  `ID` varchar(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rings`
--

INSERT INTO `rings` (`ID`, `img`, `name`, `description`, `size`, `weight`, `amount`, `price`) VALUES
('1234', '121212', 'Wow it works', 'asasasas', '2332', '232323', 32323, 35353),
('R100', '../pictures/R100.jpg', 'Diamond Ring', '5x5 15crt Round Diamond with Silver Body', '6', '20', 5, 499),
('R101', '../pictures/R101.jpg', 'Multi Diamond Ring', '34 1x1 2crt Diamonds all along the ring with 5x4 8crt White Sapphire in the middle ', '8', '125', 3, 1299),
('R102', '../pictures/R102.jpg', 'The Sky is Blue ', 'Sky Blue stone with diamond in a single row', '9', '41', 32, 659);

-- --------------------------------------------------------

--
-- Table structure for table `stones`
--

CREATE TABLE `stones` (
  `ID` int(10) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `shape` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stones`
--

INSERT INTO `stones` (`ID`, `type`, `size`, `amount`, `price`, `shape`) VALUES
(101, 'Ruby', '4', 50, 43, 'oval'),
(102, 'Ruby', '3x3', 30, 65, 'square'),
(103, 'Ruby', '4x5', 70, 87, 'oval'),
(104, 'Blue Sapphire', '2x3', 76, 76, 'oval'),
(105, 'Blue Sapphire', '4x6', 65, 106, 'oval'),
(106, 'Emerald', '3x4', 36, 350, 'oval'),
(107, 'Diamond', '4x5', 11, 500, 'oval'),
(108, 'Tanzanite', '2.5x6', 65, 65, 'oval'),
(109, 'Cubic Zircone', '2x3', 78, 23, 'oval'),
(110, 'Burmese Ruby', '3x6', 43, 199, 'oval'),
(111, 'Blue Topaz', '4x3', 52, 98, 'oval'),
(113, 'Turquoise', '5', 12, 34, 'round');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earings`
--
ALTER TABLE `earings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pendants`
--
ALTER TABLE `pendants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rings`
--
ALTER TABLE `rings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stones`
--
ALTER TABLE `stones`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
