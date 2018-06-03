-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 01:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pdname` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `phonesell` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pdname`, `seller`, `phonesell`, `price`, `link`, `cate_id`) VALUES
(1, 'T-Shirt', 'Phúc', 113, 150000, 'ao1.jpg', 1),
(2, 'T-Shirt ', 'Áo thun', 0, 120000, 'ao2.jpg', 1),
(3, 'T-Shirt', 'Áo thun', 0, 110000, 'ao3.jpg', 1),
(4, 'T-Shirt', 'Áo thun', 0, 110000, 'ao4.jpg', 1),
(5, 'T-Shirt', 'Áo thun', 0, 100000, 'ao5.jpg', 1),
(6, 'Jean Denim', 'Jean Denimmie', 0, 140000, 'quan1.jpg', 2),
(7, 'Jean Denim', 'Jean Denimie', 0, 140000, 'quan2.jpg', 2),
(8, 'Jean Denim', 'Jean Denimie', 0, 140000, 'quan3.jpg', 2),
(9, 'Jean Denim', 'Jean Denimie', 0, 140000, 'quan4.jpg', 2),
(10, 'Jean Denim', 'Jean Denimie', 0, 140000, 'quan5.jpg', 2),
(11, 'Điện thoại quay số', 'Điện thoại quay số cũ', 0, 50000, 'phukien1.jpg', 3),
(12, 'Màn hình máy tính', 'Màn hình máy tính cũ ', 0, 40000, 'phukien2.jpg', 3),
(13, 'Đồng hồ', 'Đồng hồ treo tường cũ', 0, 40000, 'phukien3.jpg', 3),
(14, 'Đồng hồ', 'Đồng hồ để bàn cũ', 0, 30000, 'phukien4.jpg', 3),
(15, 'Túi xách', 'Túi xách quai chéo', 0, 20000, 'phukien5.jpg', 3),
(16, 'Lò viba', 'Lò vi sóng cũ', 0, 120000, 'giadung1.jpg', 4),
(17, 'Nồi cơm điện', 'Nồi cơm điện', 0, 120000, 'giadung2.jpg', 4),
(18, 'Cân', 'Cân đồ cũ', 0, 50000, 'giadung3.jpg', 4),
(19, 'Máy say sinh tố', 'Máy say sinh tố', 0, 120000, 'giadung4.jpg', 4),
(20, 'Máy khoan tường', 'Máy khoan', 0, 40000, 'giadung5.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
