-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 10:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blueblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteerreg`
--

CREATE TABLE `volunteerreg` (
  `id` int(10) UNSIGNED NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Age` varchar(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Blood_Group` varchar(10) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Facebook` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteerreg`
--

INSERT INTO `volunteerreg` (`id`, `FullName`, `Age`, `Gender`, `Blood_Group`, `Location`, `Contact`, `Email`, `Facebook`, `Password`, `reg_date`) VALUES
(1, 'Munem Sahriar', '21', 'Male', 'B+', 'chittagong', '0183244434', 'munemsah@gmail.com', 'facebook', '4e3b7eb1ea39dac1215472db5fe1f1f3', '2020-09-12 19:50:38'),
(2, 'Maruf Hasan', '21', 'Male', 'AB+', 'chittagong', '01859197599', 'munemsah@gmail.com', 'facebook', '4e3b7eb1ea39dac1215472db5fe1f1f3', '2020-09-12 19:58:13'),
(3, 'Rashi Khanna', '25', 'Female', 'O-', 'India', '01111111111', 'yzk35jmj4jg@groupbuff.com', 'facebook', '4e3b7eb1ea39dac1215472db5fe1f1f3', '2020-09-12 20:01:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteerreg`
--
ALTER TABLE `volunteerreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteerreg`
--
ALTER TABLE `volunteerreg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
