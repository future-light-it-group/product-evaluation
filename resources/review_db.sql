-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2013 at 03:54 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `review_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisment_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_advertisment_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` tinyint(4) NOT NULL,
  `order_by` tinyint(4) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE IF NOT EXISTS `tbl_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `full_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` date DEFAULT NULL,
  `view_number` int(10) DEFAULT NULL,
  `approved` tinyint(4) DEFAULT NULL,
  `resource_img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_audio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_video` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `article_category_id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_articl385654` (`user_id`),
  KEY `FKtbl_articl44219` (`article_category_id`),
  KEY `FKtbl_articl674486` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_category`
--

CREATE TABLE IF NOT EXISTS `tbl_article_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `keyword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`keyword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` date NOT NULL,
  `customer_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_contac53742` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributor`
--

CREATE TABLE IF NOT EXISTS `tbl_distributor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_custom309889` (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_distributor`
--

INSERT INTO `tbl_distributor` (`id`, `name`, `address`, `email`, `phone`, `payment_id`) VALUES
(1, 'Hoàn Long ', '123 Nguyen Thi Minh Khai ', 'hl@yahoo.com', '3221', 1),
(3, 'Phong Vũ', '23 CMT8', 'pv@hcm.vb', '21312', 1),
(6, 'FPT Telecom', '32 Láng Hạ - Hà Nội', 'fpt@hcm.vn', '321321', 1),
(7, 'Tân doanh', '481 Nguyễn Tri Phương', 'tandoanh@hcm.vn', '32131', 2),
(8, 'Silicom ', '32 Láng Hạ - Hà Nội', 'fpt@hcm.vn', '321321', 1),
(9, 'Thành Nhân ', '281 Nguyễn Thị Minh Khai  ', 'thanhnhan@hcm.vn', '32131', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'HP'),
(5, 'Cooler Master '),
(6, 'Apple'),
(7, 'nVidia '),
(8, 'AMD'),
(9, 'Intel '),
(10, 'Acbel'),
(11, 'Samsung'),
(12, 'Asus'),
(13, 'Dell'),
(14, 'HP'),
(15, 'Cooler Master '),
(16, 'Apple'),
(17, 'nVidia '),
(18, 'AMD'),
(19, 'Intel '),
(20, 'Acbel'),
(21, 'MSI'),
(22, 'Gigabyte '),
(23, 'Sparke '),
(24, 'Gkill '),
(25, 'Corsair'),
(26, 'Seagate');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `create_at` datetime NOT NULL,
  `total` double NOT NULL,
  `customer_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_order459561` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_order_176564` (`order_id`),
  KEY `FKtbl_order_15709` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `name`, `desc`) VALUES
(1, 'Tiền Mặt', NULL),
(2, 'Chuyển khoản 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price_table`
--

CREATE TABLE IF NOT EXISTS `tbl_price_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `old_price` double DEFAULT NULL,
  `in_stock` int(10) NOT NULL,
  `create_at` date NOT NULL,
  `origin` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warranty` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approved` tinyint(4) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_video` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_audio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category_id` int(10) DEFAULT NULL,
  `manufacture_id` int(10) DEFAULT NULL,
  `distributor_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_produc216297` (`product_category_id`),
  KEY `FKtbl_produc456999` (`manufacture_id`),
  KEY `FKtbl_produc451850` (`distributor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `old_price`, `in_stock`, `create_at`, `origin`, `warranty`, `approved`, `image`, `status`, `resource_img`, `resource_video`, `resource_audio`, `product_category_id`, `manufacture_id`, `distributor_id`) VALUES
(1, 'Asus Nvidia GTX 690 4GB ( 512 Bit ) DDR6', 23968047, 23968047, 342, '2013-02-08', 'USA', '36 Tháng ', 1, 'vga-asus-1.jpeg', 'Mới 100%', '', '', '', 3, 2, 9),
(2, 'Asus Nvidia GTX 680 Direct CU OC ', 12925996, 12925996, 32, '2013-02-08', 'USA', '36 Tháng ', 1, 'vga-asus-2.jpeg', 'Mới 100% ', '', '', '', 3, 2, 3),
(5, 'Corsair 8GB ( 1x8GB ) DDR3 Bus 1333', 499994, 499994, 32, '2013-02-08', 'China ', '36 Tháng', 1, 'ram-corsair-1.jpeg', 'Mới 100%', NULL, NULL, NULL, 13, 25, 9),
(6, 'Corsair 2GB ( 1x2GB ) DDR3 Bus 1333', 279994, 800000, 66, '2013-02-08', 'China ', '36 Tháng', 1, 'ram-corsair-2.jpeg', 'Mới 100%', '', '', '', 13, 25, 8),
(7, 'Intel Core i7-3960X ', 23800064, 23800064, 13, '2013-02-08', 'Costa Rica', '36 Tháng', 0, 'cpu-intel-1.jpeg', 'Mới 100%', NULL, NULL, NULL, 11, 9, 7),
(8, 'AMD Vishera FXV2 8320 ', 4299988, 4350000, 77, '2013-02-08', 'Mexico', '36 Tháng', 1, 'cpu-amd-1.jpeg', 'Mới 100%', NULL, NULL, NULL, 11, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE IF NOT EXISTS `tbl_product_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'PC'),
(3, 'VGA - card đồ họa'),
(4, 'Máy chơi game '),
(5, 'Điện thoại - máy tính bảng '),
(6, 'Laptop'),
(7, 'PC'),
(8, 'VGA - card đồ họa'),
(9, 'Máy chơi game '),
(10, 'Điện thoại - máy tính bảng '),
(11, 'CPU'),
(12, 'HDD - Ổ cứng '),
(13, 'RAM ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_info`
--

CREATE TABLE IF NOT EXISTS `tbl_product_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `short_desc` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtbl_produc594462` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resource`
--

CREATE TABLE IF NOT EXISTS `tbl_resource` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistic`
--

CREATE TABLE IF NOT EXISTS `tbl_statistic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `browser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approved` int(10) NOT NULL,
  `privilege` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `fullname`, `password`, `create_at`, `last_login`, `email`, `address`, `approved`, `privilege`) VALUES
(1, 'admin', 'Nguyen Van A', '202cb962ac59075b964b07152d234b70', '2013-02-07 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 1, 1),
(2, 'mod', 'Nguyen Van B', '202cb962ac59075b964b07152d234b70', '2013-02-07 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 1, 1),
(3, 'u1', 'Nguyen Van C', '202cb962ac59075b964b07152d234b70', '2013-02-08 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD CONSTRAINT `FKtbl_articl385654` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `FKtbl_articl44219` FOREIGN KEY (`article_category_id`) REFERENCES `tbl_article_category` (`id`),
  ADD CONSTRAINT `FKtbl_articl674486` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`);

--
-- Constraints for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD CONSTRAINT `FKtbl_contac53742` FOREIGN KEY (`customer_id`) REFERENCES `tbl_distributor` (`id`);

--
-- Constraints for table `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  ADD CONSTRAINT `FKtbl_custom309889` FOREIGN KEY (`payment_id`) REFERENCES `tbl_payment` (`id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `FKtbl_order459561` FOREIGN KEY (`customer_id`) REFERENCES `tbl_distributor` (`id`);

--
-- Constraints for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `FKtbl_order_15709` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`),
  ADD CONSTRAINT `FKtbl_order_176564` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `FKtbl_produc216297` FOREIGN KEY (`product_category_id`) REFERENCES `tbl_product_category` (`id`),
  ADD CONSTRAINT `FKtbl_produc451850` FOREIGN KEY (`distributor_id`) REFERENCES `tbl_distributor` (`id`),
  ADD CONSTRAINT `FKtbl_produc456999` FOREIGN KEY (`manufacture_id`) REFERENCES `tbl_manufacturer` (`id`);

--
-- Constraints for table `tbl_product_info`
--
ALTER TABLE `tbl_product_info`
  ADD CONSTRAINT `FKtbl_produc594462` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
