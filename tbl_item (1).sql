-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 01:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_item`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Error reading structure for table tbl_item.login: #1932 - Table 'tbl_item.login' doesn't exist in engine
-- Error reading data for table tbl_item.login: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `tbl_item`.`login`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `ID` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`ID`, `username`, `password`, `name`, `level`) VALUES
(1, 'admin', '123', 'adminLBTech', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `details`, `barcode`, `qty`, `img`) VALUES
(6, 'คีย์บอรด์     ', 'Razer', '100000001', '0', ' ESDFFG.jpg'),
(15, 'เมาส์', 'Razer', '100000002', '4', 'ESDFFG.jpg'),
(64, 'mmmm', 'cccc', ' 11111111', '4', '5.png\'image/');

-- --------------------------------------------------------

--
-- Table structure for table `tran_borrow`
--

CREATE TABLE `tran_borrow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `borrowed_date` datetime DEFAULT current_timestamp(),
  `date_of_return` datetime DEFAULT NULL,
  `withdraw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tran_borrow`
--

INSERT INTO `tran_borrow` (`id`, `user_id`, `product_id`, `borrowed_date`, `date_of_return`, `withdraw`) VALUES
(24, 27, 6, '2022-12-25 00:33:07', NULL, 2),
(25, 25, 6, '2022-12-25 00:38:30', NULL, 2),
(26, 26, 6, '2022-12-25 00:38:52', NULL, 4),
(30, 25, 15, '2023-01-04 07:45:38', NULL, 2),
(31, 27, 6, '2023-01-04 13:10:03', NULL, 1),
(32, 25, 6, '2023-01-11 15:20:15', '2023-01-15 13:25:29', 2),
(33, 27, 6, '2023-01-11 15:23:47', NULL, 1),
(34, 31, 15, '2023-01-11 15:27:48', '2023-01-15 13:25:17', 2),
(35, 25, 15, '2023-01-15 13:29:03', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `levels` varchar(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `id_st` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `levels`, `user_name`, `id_st`, `department`) VALUES
(25, 'ปวส', 'ภมรมนตรี สิงห์ชาติ', '64301280016', 'คอมพิวเตอร์ซอฟแวร์'),
(26, 'ปวส', 'โยธา กะวนิช', '64301280019', 'คอมพิวเตอร์ซอฟแวร์'),
(27, '    ปวส ', '  รชตนันท์ เอกอินทร์  ', '  64301280020  ', '  คอมพิวเตอร์ซอฟแวร์  '),
(29, '      ปวส  ', '  รัชชานนท์ วงศ์ตา  ', '  64121280022  ', '  คอมพิวเตอร์ซอฟแวร์  '),
(30, '   ปวส', ' ภัทรโมกข์ ชูช่วย ', ' 64301280017 ', ' คอมพิวเตอร์ซอฟแวร์ '),
(31, '   ปวส ', 'ชิษณุพงศ์ กิตติปาโล', '64301280006', 'คอมพิวเตอร์ซอฟแวร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tran_borrow`
--
ALTER TABLE `tran_borrow`
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
-- AUTO_INCREMENT for table `login1`
--
ALTER TABLE `login1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tran_borrow`
--
ALTER TABLE `tran_borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
