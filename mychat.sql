-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 01:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mychat`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `mid` int(11) NOT NULL,
  `inc` int(222) NOT NULL,
  `outg` int(222) NOT NULL,
  `masg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`mid`, `inc`, `outg`, `masg`) VALUES
(1, 43345, 6876, 'hi'),
(2, 87687, 6876, 'hello'),
(3, 6876, 43345, 'ki khobor ?'),
(4, 6876, 43345, 'valo'),
(5, 87687, 43345, 'you'),
(6, 43345, 87687, 'kire ?'),
(7, 43345, 87687, 'rty'),
(8, 43345, 87687, 'ef'),
(9, 43345, 87687, 'df'),
(10, 43345, 87687, 'dftr'),
(11, 43345, 87687, 'rtfgh'),
(12, 6876, 87687, 'rakib kmn aso'),
(13, 6876, 87687, 'ki khobor rakib?'),
(14, 87687, 6876, 'aito vhai apni ?'),
(15, 87687, 6876, 'akhon koi tumi?'),
(16, 6876, 87687, 'ami bazar a apni ?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unid` int(11) NOT NULL,
  `nam` varchar(11) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unid`, `nam`, `pass`) VALUES
(1, 43345, 'rasel', 'admin'),
(2, 87687, 'mina', 'admin'),
(3, 6876, 'rakib', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
