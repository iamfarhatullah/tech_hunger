-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 08:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techhunger_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_ID` int(11) NOT NULL,
  `cat_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_ID`, `cat_name`) VALUES
(1, 'PC'),
(2, 'Laptop'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `name`, `email`, `password`, `address`, `phone`) VALUES
(6, 'Mustafa', 'mustafa@gmail.com', '123123', 'Mingora City, 23000, District Swat KPK Pakistan', '032432232'),
(7, 'Shah Hassan', 'hassan@gmail.com', ' ', 'Gunyar Road, Thana District Malakand, KPK Pakistan', '033323232');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_ID` int(11) NOT NULL,
  `order_datetime` datetime NOT NULL,
  `order_qty` int(11) NOT NULL,
  `prod_FK` int(11) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_ID`, `order_datetime`, `order_qty`, `prod_FK`, `user_FK`, `order_status`) VALUES
(18, '2022-10-31 20:12:50', 2, 2, 6, 0),
(19, '2022-10-31 20:14:52', 1, 3, 6, 2),
(20, '2022-10-31 20:14:46', 1, 8, 6, 2),
(21, '2022-10-31 20:17:57', 1, 9, 6, 1),
(22, '2022-10-31 20:15:45', 3, 7, 6, 1),
(23, '2022-10-31 20:17:38', 2, 4, 6, 0),
(24, '2022-10-31 20:19:36', 1, 8, 7, 1),
(28, '2022-11-01 20:51:25', 2, 7, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prod_ID` int(11) NOT NULL,
  `prod_name` varchar(45) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_pic` text NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`prod_ID`, `prod_name`, `prod_desc`, `prod_qty`, `prod_pic`, `prod_price`, `prod_category`) VALUES
(2, 'Wireless RGB Mouse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 32, 'uploads/products/1666301645-Razer-Mamba-Elite-Right-Handed-Gaming-Mouse-Price-in-Pakistan-01.jpg', 11000, 3),
(3, 'High Quality Headphones', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 31, 'uploads/products/1666301561-headphone2.jpg', 32000, 3),
(4, 'Xbox | Gaming PC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 60, 'uploads/products/1666301470-laptop-acces-slider1.png', 54900, 1),
(7, 'HP Laptop Latitude', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 12, 'uploads/products/1666301420-presets-cover1.jpg', 99500, 2),
(8, 'Gaming PC | Max SSD 512 | 32 GB RAM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 37, 'uploads/products/1666301366-clx-gaming-pc-kit-image-cpu-png.png', 160500, 1),
(9, 'Gaming PC with RGB Lighting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 122, 'uploads/products/1666301329-199-1994237_gaming-computer-png-transparent-png.png', 120000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `profile_ID` int(11) NOT NULL,
  `profile_first_name` varchar(50) NOT NULL,
  `profile_last_name` varchar(50) NOT NULL,
  `profile_bio` text NOT NULL,
  `profile_phone` varchar(15) NOT NULL,
  `profile_picture` text NOT NULL,
  `user_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profile_ID`, `profile_first_name`, `profile_last_name`, `profile_bio`, `profile_phone`, `profile_picture`, `user_FK`) VALUES
(1, 'Farhat', 'Ullah', 'NA', '03425453956', '', 1),
(6, 'Shah', 'Hassan', 'Nothing to show', '03424343233', '', 7),
(7, 'Mustafa', 'Khan', 'Nothing to show', '023423443', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_ID` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_permissions` int(1) NOT NULL,
  `user_type_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_ID`, `user_username`, `user_email`, `user_password`, `user_permissions`, `user_type_FK`) VALUES
(1, 'farhat', 'iamfarhatullah@gmail.com', 'farhat', 3, 1),
(6, 'mustafa', 'mustafa@gmail.com', 'mustafa', 3, 1),
(7, 'hassan', 'imshahhassan@gmail.com', 'hassan', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_type`
--

CREATE TABLE `tbl_users_type` (
  `type_ID` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `type_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users_type`
--

INSERT INTO `tbl_users_type` (`type_ID`, `type_name`, `type_description`) VALUES
(1, 'Admin', ''),
(2, 'Customer', ''),
(3, 'Publisher', ''),
(4, 'Blogger', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_ID`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`prod_ID`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`profile_ID`),
  ADD KEY `user_FK` (`user_FK`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `user_type_FK` (`user_type_FK`);

--
-- Indexes for table `tbl_users_type`
--
ALTER TABLE `tbl_users_type`
  ADD PRIMARY KEY (`type_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `profile_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users_type`
--
ALTER TABLE `tbl_users_type`
  MODIFY `type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD CONSTRAINT `tbl_profile_ibfk_1` FOREIGN KEY (`user_FK`) REFERENCES `tbl_users` (`user_ID`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`user_type_FK`) REFERENCES `tbl_users_type` (`type_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
