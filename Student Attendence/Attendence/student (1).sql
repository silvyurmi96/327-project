-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 01:02 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `take_attendance`
--

CREATE TABLE `take_attendance` (
  `Student_ID` int(8) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Phone` varchar(25) NOT NULL,
  `Student_Check` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take_attendance`
--

INSERT INTO `take_attendance` (`Student_ID`, `Student_Name`, `Student_Phone`, `Student_Check`) VALUES
(1, 'Thiromy', '02184326', 'absent'),
(2, 'Urmi', '5452562065', 'absent'),
(9, 'Labib', '1234545', ''),
(10, 'Harun', '54653523', ''),
(11, 'Rabeya', '464265296', ''),
(12, 'rstusdu', '34215345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `take_attendance`
--
ALTER TABLE `take_attendance`
  MODIFY `Student_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
