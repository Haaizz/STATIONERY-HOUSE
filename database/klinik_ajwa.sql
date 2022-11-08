-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 11:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_ajwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_A` int(4) NOT NULL,
  `FullName_A` varchar(40) CHARACTER SET latin1 NOT NULL,
  `UserName_A` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Phone_A` int(15) NOT NULL,
  `Password_A` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_A`, `FullName_A`, `UserName_A`, `Phone_A`, `Password_A`) VALUES
(1000, 'Admin ft Staff', 'admin', 1159774532, 'admin123@');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID_S` int(4) NOT NULL,
  `FullName_S` varchar(40) CHARACTER SET latin1 NOT NULL,
  `UserName_S` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Phone_S` int(15) NOT NULL,
  `Password_S` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID_S`, `FullName_S`, `UserName_S`, `Phone_S`, `Password_S`) VALUES
(3001, 'amin bakar', 'amin_b', 123456, 'amin123@@');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_U` int(4) NOT NULL,
  `FullName_U` varchar(40) CHARACTER SET latin1 NOT NULL,
  `UserName_U` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Phone_U` int(20) NOT NULL,
  `Password_U` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_U`, `FullName_U`, `UserName_U`, `Phone_U`, `Password_U`) VALUES
(1006, 'amirul faiz', 'faiz', 123456, 'faruqi123'),
(1008, 'faiz rahimy', 'haaizz', 12345678, 'faiz123'),
(1009, 'faiz rahimy', 'fafaizz', 12345, 'faiz123@@'),
(1013, 'azim hakimie', 'jimbo', 1234567, 'jimbo123'),
(1014, 'aisy haikal', 'aisy_h', 12345678, 'aisy123@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_A`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_S`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_U`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_A` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID_S` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_U` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
