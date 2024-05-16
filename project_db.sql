-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `oid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `cost` double NOT NULL,
  `email` varchar(30) NOT NULL,
  `handle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`oid`, `name`, `pname`, `image`, `price`, `quantity`, `cost`, `email`, `handle`) VALUES
(1, 'gbf', ' k   n', 'v', 456, 2, 0, 'chris@mail.com', 'nj'),
(7, 'Rishabh', 'Java Chip Frappuccino', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 149, 149, 0, 'rish@mail.com', 'boss'),
(10, 'Rishabh', 'Solo Espresso', 'images/menu/bestsellers/Solo Espresso.jpg', 219, 219, 0, 'rish@mail.com', 'boss'),
(32, 'Ronaldo', 'Java Chip Frappuccino', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 149, 2, 298, 'chris@mail.com', 'cr7'),
(63, 'test', 'Solo Espresso', 'images/menu/bestsellers/Solo Espresso.jpg', 219, 1, 219, 'rkumar994@rku.ac.in', 'test2'),
(72, 'Christiano', 'Cappuccino', 'images/menu/bestsellers/Cappuccino.jpg', 179, 4, 716, 'chris@mail.com', 'user14'),
(74, 'Naruto', 'Java Chip Frappuccino', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 149, 0, 0, 'naruto@mail.com', 'HokageSama'),
(75, 'Naruto', 'Chocolate Frappuccino', 'images/menu/bestsellers/Chocolate Frappuccino.jpg', 249, 4, 996, 'naruto@mail.com', 'HokageSama'),
(76, 'Naruto', 'Cold Coffee', 'images/menu/bestsellers/Cold coffee.jpg', 99, 1, 99, 'naruto@mail.com', 'HokageSama'),
(77, 'Naruto', 'Solo Espresso', 'images/menu/bestsellers/Solo Espresso.jpg', 219, 1, 219, 'naruto@mail.com', 'HokageSama');

-- --------------------------------------------------------

--
-- Table structure for table `complete_table`
--

CREATE TABLE `complete_table` (
  `cid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `image` varchar(400) NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `cost` double NOT NULL,
  `email` varchar(30) NOT NULL,
  `handle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complete_table`
--

INSERT INTO `complete_table` (`cid`, `oid`, `name`, `pname`, `image`, `price`, `quantity`, `cost`, `email`, `handle`) VALUES
(7, 0, 'Ronaldo', 'Ronaldo', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 1, 199, 'chris@mail.com', 'cr7'),
(10, 0, 'Naruto', 'Naruto', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 0, 0, 'naruto@mail.com', 'test4'),
(11, 0, 'XYZ', 'XYZ', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 1, 199, 'chris@mail.com', 'cr7'),
(13, 34, 'Ronaldo', 'Java Chip Frappuccino', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 149, 1, 0, 'chris@mail.com', 'cr7'),
(14, 40, 'Ronaldo', 'Caffe Americano', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 1, 199, 'chris@mail.com', 'cr7'),
(15, 66, 'XYZ', 'Cappuccino', 'images/menu/bestsellers/Cappuccino.jpg', 179, 1, 179, 'chris@mail.com', 'cr7'),
(16, 67, 'XYZ', 'Caffe Americano', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 1, 0, 'chris@mail.com', 'cr7'),
(17, 61, 'XYZ', 'Cappuccino', 'images/menu/bestsellers/Cappuccino.jpg', 179, 3, 179, 'chris@mail.com', 'cr7'),
(18, 46, 'Ronaldo', 'Caffe Americano', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 1, 199, 'chris@mail.com', 'cr7'),
(19, 5, 'Ronaldo', 'Caffe Americano', 'images/menu/bestsellers/Caffe Americano.jpg', 199, 3, 597, 'chris@mail.com', 'cr7'),
(20, 70, 'Naruto', 'Cappuccino', 'images/menu/bestsellers/Cappuccino.jpg', 179, 1, 179, 'naruto@mail.com', 'HokageSama'),
(21, 69, 'Naruto', 'Java Chip Frappuccino', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 149, 1, 149, 'naruto@mail.com', 'HokageSama');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `price` varchar(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `pquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`pid`, `pname`, `descrip`, `price`, `image`, `pquantity`) VALUES
(101, 'Java Chip Frappuccino', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!', '149', 'images/menu/bestsellers/Java Chip Frappuccino.jpg', 15),
(102, 'Caffe Americano', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, sapiente.', '199', 'images/menu/bestsellers/Caffe Americano.jpg', 13),
(103, 'Cold Coffee', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, doloremque!', '99', 'images/menu/bestsellers/Cold coffee.jpg', 19),
(104, 'Cappuccino', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, doloremque!', '179', 'images/menu/bestsellers/Cappuccino.jpg', 15),
(105, 'Solo Espresso', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, reprehenderit?', '219', 'images/menu/bestsellers/Solo Espresso.jpg', 17),
(106, 'Chocolate Frappuccino', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, reprehenderit?', '249', 'images/menu/bestsellers/Chocolate Frappuccino.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `location` varchar(15) NOT NULL,
  `handle` varchar(15) NOT NULL,
  `access` varchar(5) NOT NULL,
  `image` varchar(400) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `email`, `phone`, `pass`, `cpass`, `location`, `handle`, `access`, `image`, `password_hash`, `reset_token_hash`, `reset_token_expires_at`, `status`) VALUES
(1, 'Rishabh', 'rish@mail.com', 6001519413, '1234', '1234', 'RJK', 'boss', 'Admin', 'images/', '', NULL, NULL, 0),
(2, 'test', 'rkumar994@rku.ac.in', 100, '4567', '', 'amdbd', 'test2', 'User', 'images/', '', NULL, NULL, 0),
(3, 'Naruto', 'naruto@mail.com', 999999, '0000', '', 'Hidden Leaf', 'HokageSama', 'User', 'images/', '', NULL, NULL, 0),
(7, 'Messi', 'lionel@mail.com', 99009900, '1010', '', 'barca', 'LM10', 'Admin', 'images/lm10.jpg', '', NULL, NULL, 0),
(8, 'Christiano', 'chris@mail.com', 884477, '7777', '', 'madrido', 'user14', 'User', 'images/', '', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `complete_table`
--
ALTER TABLE `complete_table`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`pid`);
ALTER TABLE `product_table` ADD FULLTEXT KEY `pname` (`pname`);
ALTER TABLE `product_table` ADD FULLTEXT KEY `pname_2` (`pname`,`descrip`);
ALTER TABLE `product_table` ADD FULLTEXT KEY `price` (`price`);
ALTER TABLE `product_table` ADD FULLTEXT KEY `image` (`image`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `complete_table`
--
ALTER TABLE `complete_table`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
