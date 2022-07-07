-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 10:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edepartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `pbsname` varchar(50) NOT NULL,
  `officename` varchar(30) NOT NULL,
  `depname` varchar(30) NOT NULL,
  `depcode` varchar(10) NOT NULL,
  `iprange` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `pbsname`, `officename`, `depname`, `depcode`, `iprange`) VALUES
(4, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'HR', '2', '192.168.100.120 - 192.168.100.130'),
(5, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'IT', '3', '192.168.100.130 - 192.168.100.135'),
(6, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'O and M', '4', '192.168.100.136 - 192.168.100.145'),
(7, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'E and C', '5', '192.168.100.146 - 192.168.100.155'),
(8, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'MS', '6', '192.168.100.156 - 192.168.100.165'),
(9, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'FI', '7', '192.168.100.166 - 192.168.100.185'),
(14, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'Admin', '1', '192.168.100.110 - 192.168.100.120'),
(15, 'Narsingdi Palli Bidyut Samity-1', 'Head Quater', 'Marketing', '8', '192.168.100.120 - 192.168.100.130'),
(16, 'Narsingdi Palli Bidyut Samity-1', 'Gorashal Zonal Office', 'other', '8', '192.168.100.130 - 192.168.100.135');

-- --------------------------------------------------------

--
-- Table structure for table `empdata`
--

CREATE TABLE `empdata` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `office` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `ip` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empdata`
--

INSERT INTO `empdata` (`id`, `name`, `designation`, `office`, `department`, `email`, `contact`, `image`, `date`, `ip`, `address`) VALUES
(21, 'MD ABDUL HASIM', 'Junior engineer it', 'Head Quater', 'IT', 'hasimfci@gmail.com', '01820230983', 'e34dddd01688f7730ef447bc82436cab.jpg', '2022-06-08', '192.168.100.131', 'Char kolakupa, Char Badam 3730,Ramgoti, Luxmipur.'),
(22, 'Innitum nayem', 'Junior engineer it', 'Head Quater', 'IT', 'nayem@gmail.com', '01285202000', 'ee8069d689fec62b35590cf505f75073.jpg', '2022-06-07', '192.168.100.132', 'Rangpur'),
(28, 'Mijanur Rahman', 'AGm Fi', 'Head Quater', 'FI', 'm@gmail.com', '10582222', 'e88e2c47a83219176cae898563ece325.jpg', '2022-06-21', '192.168.100.168', 'dhaka'),
(29, 'Poritosh Das', 'AGM Ms', 'Head Quater', 'MS', 'pori@gmail.com', '01820230983', '55111ec078c63fdbbec50abb1a342603.jpg', '2022-06-08', '192.168.100.156', 'mymknsing'),
(30, 'Shariar Haasan', 'AGM Admin', 'Head Quater', 'Admin', 'sha@gmail.com', '018202308522', '0eab556944641dd5022795b21e1ca3ba.jpg', '2022-06-07', '192.168.100.110', 'Feni'),
(31, 'Masudur Rahman', 'Agm E&C', 'Head Quater', 'E and C', 'm@gmail.com', '0511111323', '35ff7ad29c10c20a0787d8aa6e19142a.jpg', '2022-06-14', '192.168.100.146', 'dhaka'),
(32, 'Shaoaharab hossain', 'AGM IT', 'Head Quater', 'IT', 'cpds@seu.edu.bd', '0182222545', '63200b8944df0728c52588e25909daa6.jpg', '2022-06-16', '192.168.100.134', 'Cumilla'),
(33, 'Mofijul Islam', 'AGm o&M', 'Head Quater', 'O and M', 'cpds@seu.edu.bd', '018220001122', '2d9dbf76bdf16d490a81a8c7f420f3cc.jpg', '2022-06-14', '192.168.100.136', 'chittagomg'),
(34, 'Abdullah Al Hadi', 'DGM Tech', 'Head Quater', 'E and C', 'hadi@gmail.com', '012820000', 'e0f02e311aa47ee317a9a5bc9a2f4d74.jpg', '2022-06-07', '192.168.100.147', 'dhaka'),
(35, 'Kobir', 'wi', 'Head Quater', 'MS', 'kobir@gmail.com', '01820015552', 'fdfdf270d75f800b82f6c40c4e380da9.jpg', '2022-06-14', '192.168.100.157', 'Noagoa'),
(36, 'Firoj Alam', 'EC', 'Head Quater', 'Admin', 'nayem@gmail.com', '0855655555', '3f5f092b92480964c8210246f1c8bd4b.jpg', '2022-06-13', '192.168.100.111', 'Rangpur'),
(38, 'Mostofa', 'JE', 'Head Quater', 'O and M', 'mahdi@gmail.com', '055545', '76c81a70e5c946ccc8aa011551999987.jpg', '2022-06-14', '192.168.100.137', 'Dhaka'),
(39, 'Salam saheb', 'Acccountant', 'Head Quater', 'FI', 'cpds@seu.edu.bd', '45452332', '8addbaa06fe9d705f198bd68efc13bd4.jpg', '2022-06-16', '192.168.100.168', 'narsigndi'),
(40, 'Kamrul Islam', 'EC HR', 'Head Quater', 'HR', 'hasimfci@gmail.com', '542352345', 'b11ee0a49b8a0df80600e7c2b4131b90.jpg', '2022-06-15', '192.168.100.126', 'manikgonj'),
(41, 'Suborna ', 'CO', 'Head Quater', 'HR', 'cpds@seu.edu.bd', '018885', '8459bed198723a5980633c833f2dab3d.jpg', '2022-06-14', '192.168.100.125', 'Jianidhaba'),
(42, 'Mohor', 'JE', 'Head Quater', 'O and M', 'mohor@gmail.com', '0158882', 'f15100890d015ee20e27ebca1bbdc27b.jpg', '2022-06-08', '192.168.100.138', 'dhaka'),
(43, 'Mehedi', 'Junior engineer it', 'Head Quater', 'IT', 'm@gmail.com', '01585522222', 'e696da4a48970af86e1f9ee38d1a4ada.jpg', '2022-06-23', '192.168.100.134', 'dhaka'),
(44, 'mehedi', 'CO', 'Head Quater', 'Marketing', 'hasimfci@gmail.com', '018220200', 'bad54c361724c3f2b7b6f3901305ebb0.jpg', '2022-06-08', '192.168.100.122', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `subnet` varchar(30) NOT NULL,
  `office` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `name`, `ip`, `subnet`, `office`) VALUES
(5, 'Dlink Router 300', '192.168.100.1', '255.255.255.0', 'Head Quater'),
(6, 'TP link100', '192.168.0.1', '255.255.255.0', 'Madhabdi zonal Office'),
(7, 'netish router', '192.168.0.1', '255.255.255.0', 'Taltoli Subzonal Office'),
(8, 'Dlink Router', '192.168.100.1', '255.255.255.0', 'Gorashal Zonal Office'),
(9, 'Netish', '192.168.100.1', '255.255.255.0', 'Keranigonj Zonal');

-- --------------------------------------------------------

--
-- Table structure for table `officeinfo`
--

CREATE TABLE `officeinfo` (
  `id` int(10) NOT NULL,
  `pbsname` varchar(50) NOT NULL,
  `officename` varchar(40) NOT NULL,
  `officecode` varchar(10) NOT NULL,
  `officetype` varchar(20) NOT NULL,
  `officeaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeinfo`
--

INSERT INTO `officeinfo` (`id`, `pbsname`, `officename`, `officecode`, `officetype`, `officeaddress`) VALUES
(2, 'Narsingdi Palli Bidyut Samity-1', 'Madhabdi zonal Office', '2', 'Zonal', 'Madhabdi,Narsingdi'),
(3, 'Narsingdi Palli Bidyut Samity-1', 'Gorashal Zonal Office', '2', 'Zonal', 'Gorashal ,Narsingdi'),
(4, 'Narsingdi Palli Bidyut Samity-1', 'Taltoli Subzonal Office', '3', 'Sub-Zonal', 'Taltoli,Polash,Narsingdi.'),
(6, 'Dhaka Pallli Bidyut samity 1', 'Head Quater', '1', 'Zonal', 'Madhabdi,Narsingdi'),
(11, 'Narsingdi Palli Bidyut Samity-1', 'Gorashal Zonal Office', '1', 'Head Quater', 'Madhabdi,Narsingdi pbs1');

-- --------------------------------------------------------

--
-- Table structure for table `pbsinfo`
--

CREATE TABLE `pbsinfo` (
  `id` int(10) NOT NULL,
  `pbsname` varchar(50) NOT NULL,
  `pbsid` int(30) NOT NULL,
  `pbslocation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pbsinfo`
--

INSERT INTO `pbsinfo` (`id`, `pbsname`, `pbsid`, `pbslocation`) VALUES
(1, 'Narsingdi Palli Bidyut Samity-1', 33, 'Dhaka'),
(2, 'Narsingdi Palli Bidyut Samity-2', 34, 'Dhaka'),
(3, 'Dhaka Pallli Bidyut samity 1', 10, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`) VALUES
(4, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(5, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(6, 'hasim', 'hasimfci@gmail.com', 'hasim', 'hasim'),
(7, 'mehedi', 'mehedi@gmail.com', 'mehedi', 'mehedi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empdata`
--
ALTER TABLE `empdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officeinfo`
--
ALTER TABLE `officeinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pbsinfo`
--
ALTER TABLE `pbsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `empdata`
--
ALTER TABLE `empdata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `officeinfo`
--
ALTER TABLE `officeinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pbsinfo`
--
ALTER TABLE `pbsinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
