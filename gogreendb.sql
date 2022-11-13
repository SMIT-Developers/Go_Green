-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 10:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogreendb`
--
CREATE DATABASE IF NOT EXISTS `gogreendb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gogreendb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_Id` int(6) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(60) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_type` char(1) NOT NULL DEFAULT 'S',
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`admin_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`, `isActive`) VALUES
(1, 'admin', 'admin@example.com', 'admin123', 'A', 1),
(2, 'subAdmin', 'subAdmin@example.com', 'subadmin123', 'S', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_Id` int(10) NOT NULL,
  `cus_fname` varchar(50) NOT NULL,
  `cus_lname` varchar(50) NOT NULL,
  `cus_city` varchar(100) NOT NULL,
  `cus_postal_code` int(5) NOT NULL,
  `cus_phone_no` int(10) NOT NULL,
  `cus_email` varchar(150) NOT NULL,
  `cus_password` varchar(50) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`cus_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_Id`, `cus_fname`, `cus_lname`, `cus_city`, `cus_postal_code`, `cus_phone_no`, `cus_email`, `cus_password`, `isActive`) VALUES
(1, 'Kamal', 'Perera', 'Gampaha', 60000, 716543256, 'kamal@example.com', 'kamal123', 1),
(2, 'Samal', 'Kariyawsam', 'Badulla', 90000, 718945299, 'samal@example.com', 'samal123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_Id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `cus_id` int(10) DEFAULT NULL,
  `researcher_Id` int(10) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`feedback_Id`),
  KEY `fk_cus_id` (`cus_id`),
  KEY `fk_admin_id` (`admin_id`),
  KEY `fk_researcher_id` (`researcher_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_Id`, `content`, `cus_id`, `researcher_Id`, `admin_id`) VALUES
(1, 'Lorem lorem', 1, NULL, NULL),
(2, 'Lorem lorem', 2, NULL, NULL),
(3, 'Lorem lorem', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(10) NOT NULL,
  `gallery_tittle` varchar(100) NOT NULL,
  `gallery_type` char(1) NOT NULL,
  `gallery_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_tittle`, `gallery_type`, `gallery_created_date`) VALUES
(1, 'Plastic', 'R', '2021-06-18 15:44:36'),
(2, 'Compost', 'R', '2021-06-18 15:44:36'),
(3, 'Eco friend', 'E', '2021-06-18 15:45:34'),
(4, 'Plastic bags', 'E', '2021-06-18 15:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `gallery-item`
--

DROP TABLE IF EXISTS `gallery-item`;
CREATE TABLE IF NOT EXISTS `gallery-item` (
  `gallery_Item_Id` int(10) NOT NULL AUTO_INCREMENT,
  `gallery_Item_title` varchar(100) NOT NULL,
  `gallery_Item_description` varchar(255) NOT NULL,
  `galery_item_url` varchar(100) NOT NULL,
  `gallerry_id` int(10) NOT NULL,
  PRIMARY KEY (`gallery_Item_Id`),
  KEY `fk_gallery_id` (`gallerry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery-item`
--

INSERT INTO `gallery-item` (`gallery_Item_Id`, `gallery_Item_title`, `gallery_Item_description`, `galery_item_url`, `gallerry_id`) VALUES
(1, 'tittle1', 'des1', 'url1', 1),
(2, 'title2', 'des2', 'url2', 1),
(3, 'item3', 'des3', 'url3', 2),
(4, 'item4', 'des4', 'url4', 2),
(5, 'item5', 'de5', 'url5', 3),
(6, 'item6', 'des6', 'url6', 3),
(7, 'item7', 'des7', 'url7', 4),
(8, 'item8', 'des8', 'url8', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_Id` int(10) NOT NULL AUTO_INCREMENT,
  `ordered_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_weight` float NOT NULL,
  `cart_id` int(10) NOT NULL,
  PRIMARY KEY (`order_Id`),
  KEY `fk_cart_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_Id`, `ordered_Date`, `order_weight`, `cart_id`) VALUES
(1, '2021-06-18 16:06:24', 7, 1),
(2, '2021-06-18 16:06:24', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE IF NOT EXISTS `orders_details` (
  `order_qty` int(5) NOT NULL,
  `order_id` int(10) NOT NULL,
  KEY `fk_order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`order_qty`, `order_id`) VALUES
(2, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_category_Id` int(10) NOT NULL AUTO_INCREMENT,
  `product_category_name` varchar(200) NOT NULL,
  PRIMARY KEY (`product_category_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_Id`, `product_category_name`) VALUES
(1, 'Plastic'),
(2, 'Glass'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

DROP TABLE IF EXISTS `product_item`;
CREATE TABLE IF NOT EXISTS `product_item` (
  `product_Item_Id` int(10) NOT NULL AUTO_INCREMENT,
  `product_item_name` varchar(100) NOT NULL,
  `product_weight` int(5) NOT NULL,
  `product_unit_price` float NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_category_id` int(10) NOT NULL,
  `product_image` varchar(150) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`product_Item_Id`),
  KEY `fk_categoryt_id` (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`product_Item_Id`, `product_item_name`, `product_weight`, `product_unit_price`, `product_description`, `product_category_id`, `product_image`, `isActive`) VALUES
(1, 'PVC', 50, 150, 'des1', 1, '', 1),
(2, 'PETE', 50, 200, 'des2', 1, '', 1),
(3, 'HDPE', 50, 250, 'des3', 1, '', 1),
(4, 'White', 100, 200, 'des', 2, '', 1),
(5, 'Brown', 100, 250, 'des', 2, '', 1),
(6, 'Green', 100, 250, 'des', 2, '', 1),
(7, 'Black', 100, 300, 'des', 2, '', 1),
(8, 'Compost', 200, 150, 'des', 3, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

DROP TABLE IF EXISTS `researcher`;
CREATE TABLE IF NOT EXISTS `researcher` (
  `researcher_Id` int(10) NOT NULL AUTO_INCREMENT,
  `researcher_fame` varchar(60) NOT NULL,
  `researcher_lame` varchar(50) NOT NULL,
  `researcher_email` varchar(100) NOT NULL,
  `researcher_password` varchar(50) NOT NULL,
  `researcher_university_name` varchar(150) NOT NULL,
  `researcher_city` varchar(100) NOT NULL,
  `feedback_Id` int(10) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`researcher_Id`),
  KEY `fk_feedback_id` (`feedback_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`researcher_Id`, `researcher_fame`, `researcher_lame`, `researcher_email`, `researcher_password`, `researcher_university_name`, `researcher_city`, `feedback_Id`, `isActive`) VALUES
(1, 'Nimal', 'Lansa', 'nimal@example.com', 'nimal123', 'Universityname1', 'Baadulla', NULL, 1),
(2, 'Surath', 'Dissanayake', 'surath@example.com', 'surath123', 'Universityname2', 'Gampaha', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `cart_Id` int(10) NOT NULL AUTO_INCREMENT,
  `cus_id` int(10) NOT NULL,
  PRIMARY KEY (`cart_Id`),
  KEY `fk_cus_id_shopping` (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`cart_Id`, `cus_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_item`
--

DROP TABLE IF EXISTS `shopping_cart_item`;
CREATE TABLE IF NOT EXISTS `shopping_cart_item` (
  `item_weight` int(5) NOT NULL,
  `item_amount` float NOT NULL,
  `cart_id` int(10) NOT NULL,
  `product_item_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart_item`
--

INSERT INTO `shopping_cart_item` (`item_weight`, `item_amount`, `cart_id`, `product_item_id`) VALUES
(2, 300, 1, 1),
(5, 750, 1, 8),
(2, 750, 2, 2),
(2, 500, 2, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cus_id` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_researcher_id` FOREIGN KEY (`researcher_Id`) REFERENCES `researcher` (`researcher_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery-item`
--
ALTER TABLE `gallery-item`
  ADD CONSTRAINT `fk_gallery_id` FOREIGN KEY (`gallerry_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `shopping_cart` (`cart_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_item`
--
ALTER TABLE `product_item`
  ADD CONSTRAINT `fk_categoryt_id` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`product_category_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `researcher`
--
ALTER TABLE `researcher`
  ADD CONSTRAINT `fk_feedback_id` FOREIGN KEY (`feedback_Id`) REFERENCES `feedback` (`feedback_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `fk_cus_id_shopping` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_cart_item`
--
ALTER TABLE `shopping_cart_item`
  ADD CONSTRAINT `fk_cart_id_stem` FOREIGN KEY (`cart_id`) REFERENCES `shopping_cart` (`cart_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_id_sitem` FOREIGN KEY (`product_item_id`) REFERENCES `product_item` (`product_Item_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
