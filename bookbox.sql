-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 08:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `publish` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `type`, `publish`, `company`, `price`, `amount`, `img`) VALUES
('1', 'จัดการฐานข้อมูลด้วย MySQL + MariaDB', 'เทคโนโลยีสารสนเทศ', 'Simplify ซิมพลิฟาย', 'บริษัท บุ๊คสเคป จำกัด', 195, 100, '1.jpg'),
('2', 'VACCINE WAR สมรภูมิวัคซีนโควิด-19', 'บทความและสารคดี', 'มติชน Matichon', 'บริษัท มติชน จำกัด (มหาชน)', 250, 35, '2.jpg'),
('3', 'สายเลือดแห่งเอลฟ์ The Witcher I', 'นวนิยาย', 'แพรว สำนักพิมพ์', 'อมรินทร์พริ้นติ้ง แอนด์ พับลิชชิ่ง', 375, 30, '3.jpg'),
('4', 'One Piece PARTY เล่มที่ 7', 'การ์ตูน ', 'Siam Inter Comics', 'Kinomiya St.', 100, 10, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surename` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `surename`, `email`, `birthday`, `tel`) VALUES
(1, 'chakon5', 'e10adc3949ba59abbe56e057f20f883e', 'Chakorn', 'Wangsoh', 'chakon-2543@outlook.com', '2021-09-01', '0840680473');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
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
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
