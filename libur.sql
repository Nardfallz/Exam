-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `libur`
--

CREATE TABLE `libur` (
  `Nama` varchar(30) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Posisi` varchar(20) NOT NULL,
  `Cuti` date NOT NULL,
  `Berakhir` date NOT NULL,
  `Ket_cuti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libur`
--

INSERT INTO `libur` (`Nama`, `ID`, `Posisi`, `Cuti`, `Berakhir`, `Ket_cuti`) VALUES
('joni', '20022021', 'Admin', '2021-12-06', '2021-12-09', 'Cuti Besar'),
('joana', '20022022', 'Manager', '2021-12-06', '2021-12-09', 'Cuti Besar'),
('jaka', '20022023', 'Manager', '2021-12-06', '2021-12-07', 'Cuti Sakit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
