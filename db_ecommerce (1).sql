-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 09:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(200) NOT NULL,
  `adminPass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`) VALUES
(1, 'Esha', 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(4, 'DELL'),
(9, 'DCL'),
(11, 'Hp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(260) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(86, 'hu0btdjici1005lsnf3gq0mc66', 22, 'Laptop', 415.54, 1, 'uploads/e521926b2e.jpeg'),
(87, 't76m9se8e7brfpostj7pch8tie', 21, 'Desktop_cassing ', 505.22, 1, 'uploads/fd5c35b413.jpg'),
(88, 't76m9se8e7brfpostj7pch8tie', 20, 'Graphics card ', 620.87, 1, 'uploads/4dca97a7be.jpg'),
(89, 't76m9se8e7brfpostj7pch8tie', 22, 'Laptop', 415.54, 3, 'uploads/e521926b2e.jpeg'),
(93, '3ehipac0bqig1q0eaf3834mdia', 22, 'Laptop', 415.54, 1, 'uploads/e521926b2e.jpeg'),
(95, 'pr3qt6nu2brnb5dmqrds83f7fd', 20, 'Graphics card ', 620.87, 1, 'uploads/4dca97a7be.jpg'),
(96, '9r83caovcsr40kild660anc58m', 21, 'Desktop_cassing ', 505.22, 1, 'uploads/fd5c35b413.jpg'),
(97, '6gjo7q7ddlnd4gifm89m9kp9s9', 22, 'Laptop', 415.54, 1, 'uploads/e521926b2e.jpeg'),
(99, 'eronrvl51llgpipk4e72pbli3i', 28, 'Desktop_cassing', 505.22, 1, 'uploads/693c0523bf.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(4, 'Accessories'),
(5, 'Software'),
(6, 'Components'),
(7, 'Accessories'),
(9, 'Keyboard'),
(10, 'Mouse'),
(11, 'Desktop'),
(12, 'Components'),
(14, 'Laptop'),
(15, 'Accessories'),
(16, 'Computer Components');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `phone_number`, `address`, `email`, `password`) VALUES
(1, 'esha', '01558987623', 'dhaka', 'esha@gmail.com', '123'),
(2, 'jarin', '012345798', 'asdf', 'jarin@gmail.com', '12345678'),
(3, 'jarin', '012345', 'qwer', 'JAAD@gmail.com', '1234'),
(4, 'jarin', '012234556', 'asfkfkh', 'jarin12@gmail.com', '12345'),
(5, 'rimu', '017263455', 'kalabagan', 'rimuuu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'esha1', '0123456899', 'savar dhaka', 'esha005@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'adnan', '016245678', 'Dhanmondi', 'adnan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`) VALUES
(1, 5, 21, 'Desktop_cassing ', 1, 505.22, 'uploads/fd5c35b413.jpg'),
(2, 5, 20, 'Graphics card ', 1, 620.87, 'uploads/4dca97a7be.jpg'),
(3, 5, 19, 'Laptop', 1, 415.54, 'uploads/a160a5bb0b.jpg'),
(4, 5, 21, 'Desktop_cassing ', 1, 505.22, 'uploads/fd5c35b413.jpg'),
(5, 5, 31, 'Monitor ', 1, 403.66, 'uploads/faee82320e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(279) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `body`, `price`, `image`, `type`) VALUES
(16, 'Laptop', 15, 4, '<p><span>15-inch laptop delivering an exceptional viewing experience, a head-turning finish and Inspiron 15 7000 laptop with NVIDIA&reg; GeForce&reg; MX130 graphics.</span></p>', 505.22, 'uploads/d89830641b.jpg', 1),
(17, 'Laptop', 15, 10, '<p><span>ASUS ZenBook Pro 15 UX580 Price in the Philippines and Specs </span>.</p>', 403.66, 'uploads/7444019f03.jpg', 0),
(18, 'Laptop', 15, 4, '<p><span>Dell Inspiron 5567 Laptop - Intel Core i7-7500U, 15.6-Inch FHD, 2TB, 8GB, 4GB VGA, En-Ar Keyboard, Win 10, Glossy Black</span>.</p>', 220.97, 'uploads/185b476fd8.jpg', 0),
(19, 'Laptop', 15, 4, '<p><span>Dell - Inspiron 15.6\" Laptop - AMD A9-- 8GB - AMD Radeon R5 Graphics - 1TB HD - Red - </span></p>', 415.54, 'uploads/a160a5bb0b.jpg', 0),
(20, 'Graphics card ', 12, 5, '<p><span>NVIDIA Quadro FX 5800 Graphics Card, Nvidia Q6000</span></p>', 620.87, 'uploads/4dca97a7be.jpg', 0),
(21, 'Desktop_cassing ', 12, 9, '<p><span>Cooler Master MasterBox Lite 3.1 mATX Case with Tempered Glass, DarkMirror Front Panel</span></p>', 505.22, 'uploads/fd5c35b413.jpg', 0),
(22, 'Laptop', 15, 4, '<p><span>Dell - Inspiron 15.6\" Laptop - AMD A9-- 8GB - AMD Radeon R5 Graphics - 1TB HD - Red </span></p>', 415.54, 'uploads/e521926b2e.jpeg', 0),
(23, 'Graphics card Test', 14, 11, '<p>Adbfjmbvk</p>', 233.90, 'uploads/137ed8c441.jpg', 1),
(26, 'Laptop', 15, 11, '<p><span>24\" Full HD TN Monitor ASUS - 24\" LED FHD FreeSync Monitor - Black </span></p>', 428.02, 'uploads/c5c42382ec.jpg', 0),
(27, 'Graphics card ', 15, 11, '<p><span>NVIDIA Quadro FX 5800 Graphics Card, Nvidia Q6000</span></p>', 620.87, 'uploads/33a16c41b1.jpg', 2),
(28, 'Desktop_cassing', 16, 11, '<p>Cooler Master MasterBox Lite 3.1 mATX Case with Tempered Glass, DarkMirror Front Panel</p>', 505.22, 'uploads/693c0523bf.jpeg', 2),
(29, 'RAM', 16, 11, '<p>Computer component random access memory (RAM) isolated om white Stock</p>', 220.97, 'uploads/d9c6621efb.jpg', 2),
(30, 'Processor', 16, 11, '<p>Intel Core i5 8600 8th Gen Processor</p>', 415.54, 'uploads/a577ec463e.jpg', 2),
(31, 'Monitor ', 15, 4, '<p><span>Acer GN246HL Bbid 24\" 16:9 LCD </span></p>', 403.66, 'uploads/faee82320e.jpg', 0),
(33, 'keyboard', 15, 11, '<p><span>ZoomText Large Print Keyboard White Letters on Black </span></p>', 621.75, 'uploads/4868f26637.jpg', 3),
(34, 'Monitor', 15, 11, '<p><span>24\" Full HD TN Monitor ASUS - 24\" LED FHD FreeSync Monitor - Black </span></p>', 428.02, 'uploads/83af30cef0.jpg', 3),
(35, 'Betary', 15, 4, '<p><span>Laptop Charger for HP Probook 640 640 G1 645 645 G1 650</span></p>', 403.66, 'uploads/0d63ea0181.jpg', 3),
(36, 'Laptop', 14, 11, '<h2>HP Pavilion 15-cw0998na Full-HD Laptop (Sapphire Blue)</h2>', 621.75, 'uploads/a7d01616c9.jpg', 1),
(37, 'Laptop', 14, 11, '<h2>HP Pavilion Intel Core i5 15.6-inch FHD Thin and Light Laptop (8GB/</h2>', 428.02, 'uploads/ce65d95b98.jpg', 1),
(38, 'Laptop', 15, 11, '<p><span>Dell - Inspiron 15.6\" Laptop - AMD A9-- 8GB - AMD..</span></p>', 415.54, 'uploads/4cfe2e59a7.jpeg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
