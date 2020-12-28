-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 04:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(7) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `telephone_type` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_type` varchar(10) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `firstname`, `lastname`, `s_address`, `city`, `pincode`, `address_type`, `telephone`, `telephone_type`, `email`, `email_type`, `note`) VALUES
(1, 'swati', 'basu', 'dakshinpara', 'kolkata', 712235, 'home', '988569874', 'work', 'swati@gmail.com', 'other', 'heloooooo'),
(2, 'susmita', 'basu', 'dakshinpara', 'kolkata', 712235, 'home', '6290288118', 'work', 'susmitabasumallick51@gmail.com', 'work', 'note2'),
(3, 'archita', 'basu', 'D.J.Road', 'konnagar', 712235, 'home', '6290288146', 'home', 'archita@gmail.com', 'home', 'hellohii'),
(4, 'alok', 'basu', 'Dwarik Road', 'kolkata', 712235, 'home', '923698566', 'work', 'alok@gmail.com', 'other', 'note1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
