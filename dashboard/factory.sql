-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 04:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `branding`
--

CREATE TABLE `branding` (
  `id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `firm` varchar(255) DEFAULT NULL,
  `branding` varchar(255) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` text NOT NULL,
  `rubber_status` varchar(255) DEFAULT NULL,
  `quality` varchar(255) NOT NULL,
  `sub_quality` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `gauge` varchar(255) NOT NULL,
  `point` varchar(255) DEFAULT NULL,
  `printing_type` varchar(255) DEFAULT NULL,
  `folding_type` varchar(255) NOT NULL,
  `folding_value` varchar(255) NOT NULL,
  `cutting` varchar(255) NOT NULL,
  `punching` varchar(255) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`id`, `customer_name`, `firm`, `branding`, `brand_name`, `image`, `color`, `rubber_status`, `quality`, `sub_quality`, `width`, `height`, `gauge`, `point`, `printing_type`, `folding_type`, `folding_value`, `cutting`, `punching`, `treatment`, `package`, `delivery`) VALUES
(22, '5', '7', 'Plain', NULL, NULL, '', NULL, '2', '2', '18', '36', '200', NULL, NULL, '3 ', '2', '4 ', '6 ', '3', ' 2 ', '1'),
(23, '5', '7', 'Plain', NULL, NULL, '', NULL, '2', '5', '17', '34', '200', NULL, NULL, '3 ', '2', '4 ', '6 ', '3', ' 3 ', '1'),
(26, '5', '7', 'Printing', 'testing', '614675.jpg', '#d41616 ,#d41616 ', '2', '2', '5', '20', '25', '35', NULL, 'Point', '2 ', '2', '3 ', '2 ', '2', ' 2 ', '1'),
(27, '14', '17 ', 'Plain', NULL, NULL, '', NULL, '2', '2', '12', '18', '200', NULL, NULL, '2 ', '2', '3 ', '6 ', '2', ' 2 ', '1'),
(28, '15', '18', 'Printing', 'Misthi', '614675.jpg', 'Yellow ,Black ,Green ,Red ', '3', '2', '2', '12', '18', '200', NULL, 'Point', '4 ', '0', '3 ', '2 ', '2', ' 2 ', '1'),
(34, '15', '18', 'Printing', 'testing', '2557471.jpg', 'Black ,Green ,Red ', '3', '4', '7', '220.5', '254.3', '35.1', NULL, 'Point', '3 ', '2.4', '4 ', '3 ', '4', ' 2 ', '1'),
(35, '15', '18', 'Printing', 'Seven Hills', 'images (2).jpg', 'Yellow ,Green ', '3', '3', '4', '125.5', '150.5', '250', NULL, 'Point', '2 ', '25.5', '3 ', '2 ', '2', ' 2 ', '1'),
(36, '15', '', 'Printing', 'Maruti Electronics', 'images.jpg', 'Yellow ,Green ,Red ', '3', '3', '3', '151.5', '125.5', '25', NULL, 'Point', '3 ', '2.5', '3 ', '2 ', '2', ' 4 ', '1'),
(37, '15', '', 'Printing', 'Bailly Printing', '2548766.jpg', 'Yellow ,Green ', '3', '2', '2', '25.5', '455', '45', NULL, 'Point', '2 ', '2', '4 ', '3 ', '3', ' 3 ', '1'),
(38, '15', '18', 'Printing', 'Seven Hills', 'images (1).jpg', 'Yellow ,Black ,Green ', '4', '2', '2', '25.5', '35.5', '24', NULL, 'Point', '2 ', '2.5', '3 ', '2 ', '3', ' 2 ', '1'),
(45, '25', '34', 'Plain', NULL, NULL, '', NULL, '2', '2', '20', '25', '22', NULL, NULL, '2 ', '2.5', '3 ', '2 ', '2', ' 3 ', '1'),
(46, '25', '34', 'Printing', 'NewTon', 'wp1985498.jpg', 'Yellow ,Green ', '4', '2', '5', '20', '20', '20', NULL, 'Point', '2 ', '1', '3 ', '2 ', '3', ' 3 ', '1'),
(47, '25', '34', 'Printing', 'NewTonOne', 'download.jpg', 'Green ,Red ', '3', '3', '4', '20.5', '20.5', '25', NULL, 'Running', '2 ', '2', '3 ', '3 ', '2', ' 2 ', '1'),
(48, '25', '34', 'Plain', NULL, NULL, '', NULL, '5', '8', '100', '100', '25', NULL, NULL, '2 ', '2.5', '3 ', '2 ', '2', ' 2 ', '1'),
(49, '25', '34', 'Plain', NULL, NULL, '', NULL, '6', '9', '25', '24', '25', NULL, NULL, '2 ', '2', '4 ', '2 ', '4', ' 4 ', '1'),
(50, '25', '34', 'Printing', 'NewTonTwo', '14-140412_amazing-high-resolution-images-for-desktop-wallpaper-high.jpg', 'Yellow ,Green ', '3', '2', '2', '25', '25', '25', NULL, 'Point', '2 ', '2', '3 ', '2 ', '2', ' 3 ', '1'),
(51, '25', '34', 'Plain', NULL, NULL, '', NULL, '3', '4', '80', '80', '25', NULL, NULL, '2 ', '2.5', '3 ', '2 ', '3', ' 2 ', '1'),
(52, '25', '', 'Plain', NULL, NULL, '', NULL, '5', '8', '200', '200', '20', NULL, NULL, '2 ', '2', '3 ', '2 ', '3', ' 2 ', '1'),
(53, '25', '34 ', 'Plain', NULL, NULL, '', NULL, '5', '8', '200', '200', '20', NULL, NULL, '2 ', '2', '3 ', '2 ', '3', ' 2 ', '1'),
(54, '25', '34', 'Plain', NULL, NULL, '', NULL, '3', '4', '25', '25', '20', NULL, NULL, '3 ', '2', '3 ', '2 ', '3', ' 2 ', '1'),
(55, '25', '34', 'Printing', 'NewTonThree', '6454667.jpg', 'Yellow ,Green ', '3', '5', '8', '65.5', '75.5', '25', NULL, 'Point', '3 ', '3.5', '5 ', '6 ', '3', ' 3 ', '1'),
(56, '26', '35', 'Printing', 'YD ', 'download (2).jpg', 'Yellow ,Green ,Red ', '3', '2', '5', '56', '57', '84', NULL, '', '3 ', '2.5', '3 ', '3 ', '3', ' 2 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `clr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `clr_code`) VALUES
(9, 'Yellow', '#fff700'),
(10, 'Black', '#000000'),
(11, 'Green', '#1eff00'),
(12, 'Red', '#f10909');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mcontact` varchar(255) NOT NULL,
  `maddress` varchar(255) NOT NULL,
  `dcontact` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `mcontact`, `maddress`, `dcontact`, `daddress`) VALUES
(5, 'Chetan Yeldi', '9689772321', 'vinodnalla9@gmail.com', '', ''),
(14, 'Raj Bolli', '9999999999', 'E111MIDC ,Solapur 413006', '8888888888', 'E111MIDC ,Solapur 413006'),
(15, 'Ram Sharma', '7878878787', 'Park Chowk', '7676767676', '7 rastta'),
(25, 'New One', '9999999991', 'Ashok Chowk, Solapur', '9999999992', 'MIDC, Solapur'),
(26, 'Onkar Yadav', '8888888888', 'Solapur', '8525858542', 'Satara');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `firm` varchar(255) NOT NULL,
  `branding` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total_value` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `salesman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `cname`, `firm`, `branding`, `quantity`, `rate`, `total_value`, `advance`, `date`, `note`, `status`, `salesman`) VALUES
(14, '5', '7', 'Plain', '100', '125', '12500', '', '2023-04-22', 'na', 'Pending', 'admin'),
(15, '5', '7', 'Plain', '20', '200', '4000', '0', '2023-04-27', '2001', 'Pending', 'admin'),
(16, '5', '7', '26', '20', '251', '5020', '', '2023-04-27', 'Noting', 'Completed', 'admin'),
(17, '5', '7', '22', '30', '300', '9000', '1000', '2023-04-22', 'Advance Taken', 'Completed', 'admin'),
(27, '15', '18', '38', '121', '500', '60500', '20000', '2023-04-28', 'Last Chance', 'Pending', 'admin'),
(34, '25', '34', '45', '200', '201', '40200', '1000', '2023-04-30', 'New Test', 'Pending', 'admin'),
(35, '25', '34', '46', '1', '1000', '1000', '100', '2023-04-30', 'PLEASE', 'Pending', 'admin'),
(36, '25', '34', '47', '2', '1000', '2000', '200', '2023-04-30', 'Okk', 'Pending', 'admin'),
(37, '25', '34', '53', '200', '100', '20000', '1000', '2023-04-26', 'ybhdds', 'Pending', 'admin'),
(38, '25', '34', '54', '2000', '100', '200000', '10000', '2023-04-30', 'fghvyufyu', 'Pending', 'admin'),
(39, '25', '34', '55', '250', '2500', '625000', '25000', '2023-04-30', 'Testing done', 'Pending', 'admin'),
(40, '26', '35', '56', '250', '650', '162500', '15200', '2023-04-30', 'Note', 'Pending', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cutting`
--

CREATE TABLE `cutting` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cutting`
--

INSERT INTO `cutting` (`id`, `name`) VALUES
(3, 'POINT'),
(4, 'RUNNING'),
(5, 'NO SEALING');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `name`) VALUES
(1, 'product type');

-- --------------------------------------------------------

--
-- Table structure for table `firm`
--

CREATE TABLE `firm` (
  `id` int(255) NOT NULL,
  `firm_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firm`
--

INSERT INTO `firm` (`id`, `firm_name`, `address`, `cid`) VALUES
(7, 'Chetan ltd', 'solapur MIDC', 5),
(17, 'Raj Pvt ltd', 'E111MIDC ,Solapur 413006', 14),
(18, 'Ram pvt ltd', 'Park Chowk', 15),
(19, 'yadav dairy', 'Sangli', 16),
(20, 'Yadav Dairy', 'solapur', 17),
(21, 'medical', 'pune', 18),
(22, 'MK traders', 'Solapur', 18),
(23, 'Sure Industries', 'Solapur', 19),
(27, 'Satish Marketing Dealer', 'Solapur', 20),
(28, 'MK traders', 'Delhi', 20),
(29, 'Ankam farm products', 'Kolhapur', 21),
(30, 'Ankam farm products', 'Satara', 21),
(31, 'Jayesh seeds', 'pune', 22),
(32, 'Siddhesh Yards', 'Solapur', 23),
(33, 'Trading', 'Solapur', 24),
(34, 'New Company', 'Solapur', 25),
(35, 'Yadav Dairy', 'Solapur', 26);

-- --------------------------------------------------------

--
-- Table structure for table `folding_type`
--

CREATE TABLE `folding_type` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `folding_type`
--

INSERT INTO `folding_type` (`id`, `name`) VALUES
(2, 'ONLINE'),
(3, 'AFTER'),
(4, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `email`, `user_type`, `password`, `log_date`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '2023-04-08 10:54:17'),
(2, 'sale', 'sale', 'sales@gmail.com', 'sales', 'sale', '2023-04-08 11:02:50'),
(5, 'abc', 'abc', 'abc@gmail.com', 'sales', 'abc', '2023-04-08 12:24:39'),
(6, 'Onkar Yadav', 'onkar', 'onkar@gmail.com', 'sales', 'onkar', '2023-04-09 12:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`) VALUES
(2, '30kg STD'),
(3, 'Transport'),
(4, 'BUNDDLE');

-- --------------------------------------------------------

--
-- Table structure for table `punching`
--

CREATE TABLE `punching` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `punching`
--

INSERT INTO `punching` (`id`, `name`) VALUES
(2, 'D-CUT'),
(3, 'JABLA CUT'),
(4, '1 HOLE'),
(5, '2 HOLE'),
(6, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `name`) VALUES
(2, 'PP'),
(3, 'LD'),
(4, 'HM'),
(5, 'BOPP'),
(6, 'MULCHING'),
(7, 'GP');

-- --------------------------------------------------------

--
-- Table structure for table `rubber`
--

CREATE TABLE `rubber` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rubber`
--

INSERT INTO `rubber` (`id`, `name`) VALUES
(3, 'Availabe'),
(4, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `sub_quality`
--

CREATE TABLE `sub_quality` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_quality`
--

INSERT INTO `sub_quality` (`id`, `name`, `qid`) VALUES
(1, 'sub quality', 1),
(2, 'Plain', 2),
(3, 'Natural', 3),
(4, 'Milky', 3),
(5, 'MICRON', 2),
(6, 'Natural', 4),
(7, 'Milky', 4),
(8, 'BOPP', 5),
(9, 'PLAIN', 6),
(10, 'BHUMI', 6),
(11, 'KISAN', 6);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `name`) VALUES
(2, 'BST'),
(3, 'NT'),
(4, 'OSC'),
(5, 'BSC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutting`
--
ALTER TABLE `cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folding_type`
--
ALTER TABLE `folding_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punching`
--
ALTER TABLE `punching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rubber`
--
ALTER TABLE `rubber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_quality`
--
ALTER TABLE `sub_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cutting`
--
ALTER TABLE `cutting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `firm`
--
ALTER TABLE `firm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `folding_type`
--
ALTER TABLE `folding_type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `punching`
--
ALTER TABLE `punching`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rubber`
--
ALTER TABLE `rubber`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_quality`
--
ALTER TABLE `sub_quality`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
