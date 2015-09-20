-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2015 at 08:26 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codingbird.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE IF NOT EXISTS `billing_address` (
  `billing_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `country` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `optional_address` text NOT NULL,
  `city_state` varchar(50) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`billing_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`billing_id`, `user_id`, `country`, `first_name`, `last_name`, `company_name`, `address`, `optional_address`, `city_state`, `zip_code`, `email_address`, `phone`, `created_time`, `status`) VALUES
(1, 1, '880', 'Tasfir Hossain', 'Suman', 'Sata 1517', 'House#01, Road# 06, Block# C, Banasree, Rampura', 'Dhaka-1219', 'Dhaka', 1219, 'tasfir_suman@yahoo.com', '01672839609', '2015-08-24 00:06:33', 1),
(2, 2, 'Select Country....', 'sumon', 'kais', 'cambric', 'House-24, Road-3, Block-E, Banasree,', 'Dhaka-1219', 'Dhaka', 1219, 'sumonkais@gmail.com', '01977012007', '2015-08-27 07:17:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category-created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category-created`, `category_status`) VALUES
(1, 'graphics_desgin', '2015-08-27 08:42:33', 1),
(2, 'online_vote', '2015-08-27 08:43:05', 1),
(3, 'web_design', '2015-08-27 08:43:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(3) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_package` varchar(255) NOT NULL,
  `product_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_image` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_price`, `product_quantity`, `product_package`, `product_created`, `product_image`, `product_status`) VALUES
(1, 1, 'Facebook Cover Design', 34.99, 1, '', '2015-08-27 10:59:41', 'img/order-page/logo-facebook.png', 1),
(2, 1, 'Twitter Cover Design', 34.99, 1, '', '2015-08-27 10:59:41', 'img/order-page/twitter_thumb.png', 1),
(3, 1, 'Logo Design', 34.99, 1, '', '2015-08-27 10:59:41', 'img/order-page/logo image.png', 1),
(4, 1, 'Web Design', 199.99, 1, '', '2015-08-27 10:59:41', 'img/order-page/Responsive-Web-Design.png', 1),
(5, 2, 'Facebook Voting', 20, 150, '', '2015-08-27 10:59:41', 'img/order-page/vote on.png', 1),
(6, 1, 'Banner Design', 34.99, 1, '', '2015-08-27 10:59:41', 'img/order-page/Banner.jpg', 1),
(7, 2, 'Email Voting', 15, 100, '', '2015-08-27 10:59:41', 'img/order-page/vote on.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `optional_address` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_address`, `password`, `first_name`, `last_name`, `date_of_birth`, `address`, `optional_address`, `country`, `state`, `zip_code`, `phone_no`, `profile_picture`, `status`) VALUES
(1, '', 'tasfir_suman@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', 1),
(2, '', 'sumonkais@gmail.com', '21ff79afd15c5db4360f3884fe7d4ec9', 'sumon', 'kais', '1987-03-11', '', '', '', '', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
