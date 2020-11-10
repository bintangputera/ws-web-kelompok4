-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 05:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tanggal_lahir`, `agama`, `username`, `password`) VALUES
('1111', 'dsa', '2020-12-02', 'Islam', 'dsa', 'dsa'),
('111111111', '111', '2020-12-01', 'Islam', 'dsa', 'das'),
('111122244', 'eew', '2020-12-10', 'Islam', 'sadsa', 'ads'),
('121111111', 'dsa', '2020-12-01', 'Kristen', 'viky2311lorent@gmail.com', ''),
('122012120', 'dsa', '2020-11-11', 'Kristen', 'viky2311lorent@gmail.com', ''),
('122031930', 'das', '0000-00-00', '', '', ''),
('1222', 'viky', '2020-11-12', 'Islam', 'viky', '123'),
('123345566', 'das', '2020-11-18', 'Hindu', 'dasad', ''),
('213123211', 'das', '2020-12-03', 'Kristen', 'das', ''),
('asd', 'asd', '2020-11-10', 'Islam', 'das', 'das'),
('cz', 'csa', '0000-00-00', '', '', ''),
('da', '', '2020-11-03', 'Islam', 'das', 'das'),
('das', 'das', '2020-11-02', 'Islam', 'das', 'das'),
('dsa', 'dsa', '0000-00-00', '', '', ''),
('E41192227', 'VIKY LORENT SEA PUTRA', '2000-11-08', 'Islam', 'viky', ''),
('sa', '', '0000-00-00', '', '', ''),
('sda', 'das', '2020-11-03', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
