-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16 فبراير 2025 الساعة 14:36
-- إصدار الخادم: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- بنية الجدول `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `size` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `size`) VALUES
(1, 'heel 1', 72, 0),
(2, 'heel 2', 99, 0),
(3, 'heel 3', 80, 0),
(4, 'heel 4', 85, 0),
(5, 'boot 1', 100, 0),
(6, 'boot 2', 110, 0),
(7, 'boot 3', 120, 0),
(8, 'boot 4', 130, 0),
(9, 'Flatshoes 1', 90, 0),
(10, 'Flatshoes 2', 150, 0),
(11, 'Flatshoes 3', 170, 0),
(12, 'Flatshoes 4', 175, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total_price` int NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` enum('Card','Cash on Pickup') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `pick_up`
--

DROP TABLE IF EXISTS `pick_up`;
CREATE TABLE IF NOT EXISTS `pick_up` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `pick_up_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(6, 'aa', 'aa@gmail.com', '7c3d596ed03ab9116c547b0eb678b247', 'aaa', 'aa', 'aaaa'),
(7, 'aa', 'aaaa@gmail.com', '7c3d596ed03ab9116c547b0eb678b247', 'aa', 'aa', 'aa'),
(8, 'a', '141@gmail.com', '11', 's', 'd', 'f');

-- --------------------------------------------------------

--
-- بنية الجدول `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `size` int NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `size`, `status`) VALUES
(7, 3, 3, 0, 'Added to cart'),
(8, 3, 4, 0, 'Added to cart'),
(9, 3, 5, 0, 'Added to cart'),
(10, 3, 11, 0, 'Added to cart'),
(11, 1, 9, 0, 'Added to cart'),
(12, 1, 2, 0, 'Added to cart'),
(13, 1, 8, 0, 'Added to cart'),
(14, 4, 2, 0, 'Confirmed'),
(18, 5, 11, 0, 'Added to cart'),
(20, 5, 5, 0, 'Added to cart'),
(30, 6, 1, 0, 'Confirmed'),
(31, 6, 2, 0, 'Confirmed'),
(32, 6, 3, 0, 'Confirmed'),
(33, 6, 4, 0, 'Confirmed'),
(34, 6, 8, 0, 'Confirmed'),
(35, 6, 7, 0, 'Confirmed'),
(36, 6, 6, 0, 'Confirmed'),
(37, 6, 5, 0, 'Confirmed'),
(38, 6, 9, 0, 'Confirmed'),
(39, 6, 10, 0, 'Confirmed'),
(40, 6, 11, 0, 'Confirmed'),
(41, 6, 12, 0, 'Confirmed'),
(42, 6, 2, 0, 'Added to cart');

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `pick_up_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pick_up_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
