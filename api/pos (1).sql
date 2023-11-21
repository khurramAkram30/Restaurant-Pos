-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 10:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Drinks'),
(3, 'juice');

-- --------------------------------------------------------

--
-- Table structure for table `collectionorder`
--

CREATE TABLE `collectionorder` (
  `collectionOrderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryorders`
--

CREATE TABLE `deliveryorders` (
  `deliveryOrderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliveryorders`
--

INSERT INTO `deliveryorders` (`deliveryOrderId`, `userId`, `status`, `time`) VALUES
(1, 1, '04:56:14am', 'Confirm'),
(2, 4, '02:23:14am', 'Confirm'),
(3, 4, '02:24:24am', 'Confirm'),
(4, 5, '02:26:35am', 'Confirm'),
(5, 4, '04:21:09pm', 'Confirm'),
(6, 4, '04:23:06pm', 'Confirm'),
(7, 4, '04:27:33pm', 'Confirm'),
(8, 4, '04:30:09pm', 'Confirm'),
(9, 4, '04:32:08pm', 'Confirm'),
(10, 4, '04:33:51pm', 'Confirm'),
(11, 4, '04:38:15pm', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `expense_type` varchar(255) NOT NULL,
  `expense_amount` int(11) NOT NULL,
  `expense_description` varchar(255) NOT NULL,
  `expense_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `expense_type`, `expense_amount`, `expense_description`, `expense_date`) VALUES
(1, 'testng123', 1500, 'Testingasdad', '2023-10-26'),
(2, 'asdsadasdasd', 12399, 'adasdasdasdasdasdasd', '2023-10-24'),
(3, 'test123', 100, 'testing123455', '2023-11-05'),
(4, 'sadasddsada', 1234, 'adaSsASasASasA', '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `item_id`, `quantity`) VALUES
(1, 1, 8),
(2, 2, -28),
(3, 3, -2),
(4, 4, 15),
(5, 5, -22),
(6, 6, -9),
(7, 7, 14),
(8, 8, 29),
(9, 9, 21),
(10, 8, 29),
(11, 8, 29),
(12, 8, 29);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sell` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `subcategory_id`, `name`, `sell`, `image`) VALUES
(1, 1, 1, 'Apple Juice', 400, 'Desktop -21 1.png'),
(2, 1, 1, 'Mango Juice', 200, 'Search icon.png'),
(3, 2, 2, 'Cheese Burger', 200, 'Search icon.png'),
(4, 2, 2, 'Chicken Burger', 150, 'Search icon.png'),
(5, 1, 3, 'Coke 500ml', 10, 'Search icon.png'),
(6, 1, 3, 'Pepsi 500ml', 10, 'Search icon.png'),
(7, 3, 4, 'Mango Cake', 25, 'Search icon.png'),
(8, 2, 5, 'Club Sanwich', 350, 'png.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `CustomOrderId` varchar(255) NOT NULL,
  `table_id` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `Subtotal` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `CustomOrderId`, `table_id`, `order_status`, `order_date`, `Subtotal`, `Discount`, `Total`, `paymentMethod`) VALUES
(0, 'ORDER002', 0, 'Completed', '15/10/2023', 680, 10, 612, ''),
(1, 'ORDER001', 1, 'Completed', '13/10/2023', 620, 0, 620, ''),
(2, 'ORDER001', 0, 'Completed', '13/10/2023', 620, 0, 620, ''),
(3, 'ORDER009', 4, 'Completed', '13/10/2023', 0, 0, 500, ''),
(5, 'ORDER005', 1, 'Completed', '16/10/2023', 4625, 0, 4625, ''),
(6, 'ORDER006', 1, 'Completed', '16/10/2023', 4410, 0, 4410, ''),
(7, 'ORDER003', 3, 'Completed', '25/10/2023', 7700, 0, 7700, ''),
(8, 'ORDER0010', 3, 'Completed', '27/10/2023', 610, 0, 610, ''),
(9, 'ORDER0011', 4, 'Completed', '27/10/2023', 620, 0, 620, ''),
(10, 'ORDER0012', 4, 'Completed', '27/10/2023', 610, 0, 610, ''),
(11, 'ORDER00113', 3, 'Completed', '27/10/2023', 610, 0, 610, ''),
(12, 'ORDER00114', 3, 'Completed', '27/10/2023', 8460, 0, 8460, ''),
(13, 'ORDER00115', 3, 'Completed', '27/10/2023', 620, 0, 620, 'cash'),
(14, 'ORDER1224001', 1, 'Completed', '31/10/2023', 620, 0, 620, 'Cash'),
(15, 'ORDER1232251', 1, 'Completed', '31/10/2023', 620, 0, 620, 'Not selected');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_items_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `modifiers` varchar(255) NOT NULL,
  `modifier_price` int(11) NOT NULL,
  `print_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_items_id`, `order_id`, `item_id`, `quantity`, `subtotal`, `modifiers`, `modifier_price`, `print_status`) VALUES
(1, 'ORDER001', 1, 1, 412, 'extra', 12, 'Printed'),
(3, 'ORDER001', 5, 1, 10, '', 0, 'Printed'),
(4, 'ORDER001', 5, 1, 33, 'test', 23, 'Printed'),
(5, 'ORDER001', 2, 13, 2700, 'test12', 100, 'Printed'),
(6, 'ORDER001', 1, 11, 4555, 'test14', 155, 'Printed'),
(7, 'ORDER001', 1, 1, 400, '', 0, 'Printed'),
(8, 'ORDER001', 2, 1, 200, '', 0, 'Printed'),
(9, 'ORDER001', 5, 1, 10, '', 0, 'Printed'),
(10, 'ORDER001', 1, 1, 410, 'ice ', 10, 'Printed'),
(11, 'ORDER001', 2, 1, 250, 'Extra Cream', 50, 'Printed'),
(12, 'ORDER001', 5, 1, 10, '', 0, 'Printed'),
(13, 'ORDER001', 6, 1, 10, '', 0, 'Printed'),
(14, 'ORDER005', 1, 1, 500, 'ice', 100, 'Not Printed'),
(15, 'ORDER005', 2, 1, 200, '', 0, 'Not Printed'),
(16, 'ORDER005', 1, 1, 500, 'ice', 100, 'Not Printed'),
(17, 'ORDER005', 2, 1, 200, '', 0, 'Not Printed'),
(18, 'ORDER001', 1, 10, 4000, '', 0, 'Printed'),
(19, 'ORDER001', 1, 10, 4000, '', 0, 'Printed'),
(20, 'ORDER006', 1, 1, 400, '', 0, 'Not Printed'),
(21, 'ORDER006', 2, 1, 200, '', 0, 'Not Printed'),
(22, 'ORDER003', 5, 10, 100, '', 0, 'Not Printed'),
(23, 'ORDER003', 2, 12, 2400, '', 0, 'Not Printed'),
(24, 'ORDER003', 1, 13, 5200, '', 0, 'Not Printed'),
(25, 'ORDER0010', 2, 1, 200, '', 0, 'Not Printed'),
(26, 'ORDER0010', 1, 1, 400, '', 0, 'Not Printed'),
(27, 'ORDER0010', 5, 1, 10, '', 0, 'Not Printed'),
(28, 'ORDER0010', 2, 1, 200, '', 0, 'Not Printed'),
(29, 'ORDER0010', 1, 1, 400, '', 0, 'Not Printed'),
(30, 'ORDER0010', 5, 1, 10, '', 0, 'Not Printed'),
(31, 'ORDER001', 1, 1, 400, '', 0, 'Printed'),
(32, 'ORDER001', 2, 1, 200, '', 0, 'Printed'),
(33, 'ORDER001', 5, 1, 10, '', 0, 'Printed'),
(34, 'ORDER001', 6, 1, 10, '', 0, 'Printed'),
(35, 'ORDER0011', 5, 1, 10, '', 0, 'Not Printed'),
(36, 'ORDER0011', 2, 1, 200, '', 0, 'Not Printed'),
(37, 'ORDER0011', 1, 1, 400, '', 0, 'Not Printed'),
(38, 'ORDER0011', 6, 1, 10, '', 0, 'Not Printed'),
(39, 'ORDER0012', 5, 1, 10, '', 0, 'Not Printed'),
(40, 'ORDER0012', 2, 1, 200, '', 0, 'Not Printed'),
(41, 'ORDER0012', 1, 1, 400, '', 0, 'Not Printed'),
(42, 'ORDER00113', 1, 1, 400, '', 0, 'Not Printed'),
(43, 'ORDER00113', 2, 1, 200, '', 0, 'Not Printed'),
(44, 'ORDER00113', 5, 1, 10, '', 0, 'Not Printed'),
(45, 'ORDER00114', 5, 11, 110, '', 0, 'Not Printed'),
(46, 'ORDER00114', 2, 13, 2600, '', 0, 'Not Printed'),
(47, 'ORDER00114', 1, 14, 5600, '', 0, 'Not Printed'),
(48, 'ORDER00114', 6, 15, 150, '', 0, 'Not Printed'),
(49, 'ORDER00115', 2, 1, 200, '', 0, 'Not Printed'),
(50, 'ORDER00115', 5, 1, 10, '', 0, 'Not Printed'),
(51, 'ORDER00115', 1, 1, 400, '', 0, 'Not Printed'),
(52, 'ORDER00115', 6, 1, 10, '', 0, 'Not Printed'),
(53, 'ORDER1224001', 2, 1, 200, '', 0, 'Not Printed'),
(54, 'ORDER1224001', 1, 1, 400, '', 0, 'Not Printed'),
(55, 'ORDER1224001', 5, 1, 10, '', 0, 'Not Printed'),
(56, 'ORDER1224001', 6, 1, 10, '', 0, 'Not Printed'),
(57, 'ORDER1232251', 1, 1, 400, '', 0, 'Not Printed'),
(58, 'ORDER1232251', 2, 1, 200, '', 0, 'Not Printed'),
(59, 'ORDER1232251', 5, 1, 10, '', 0, 'Not Printed'),
(60, 'ORDER1232251', 6, 1, 10, '', 0, 'Not Printed');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttransaction`
--

CREATE TABLE `paymenttransaction` (
  `transactionId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `paymentAmount` varchar(255) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymenttransaction`
--

INSERT INTO `paymenttransaction` (`transactionId`, `orderId`, `paymentMethod`, `paymentAmount`, `time`) VALUES
(1, 1, 'cash', '1010', '04:56:14am'),
(2, 2, 'cash', '370', '02:23:14am'),
(3, 3, 'cash', '370', '02:24:24am'),
(4, 4, 'cash', '1250', '02:26:35am'),
(5, 5, 'card', '220', '04:21:09pm'),
(6, 6, 'card', '850', '04:23:06pm'),
(7, 7, 'card', '850', '04:27:33pm'),
(8, 8, 'card', '850', '04:30:09pm'),
(9, 9, 'card', '850', '04:32:08pm'),
(10, 10, 'card', '850', '04:33:51pm'),
(11, 11, 'card', '850', '04:38:15pm');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'wine'),
(2, 2, 'juice'),
(3, 1, 'Fresh juices');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `staus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `staus`) VALUES
(1, 'table 1', 'Available'),
(2, 'table 2', 'Available'),
(3, 'table 3', 'Available'),
(4, 'table 4', 'Available'),
(5, 'table 5', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `phone`, `fax`, `password`, `postcode`, `address1`, `address2`, `city`, `userType`) VALUES
(1, 'khurram', 'Akram', 'khurram@gmail.com', '123445678990', '', '', '75460', 'House#E-27,Street#8,mehmoodabad#4', '', 'Karachi', 'Guest'),
(2, 'Naeem', 'Sheikh', 'Naeem@gmail.com', '123445678', 'adsdasdas', '123456789', '76543', 'mehmoodabad karachi', 'mehmoodabad 4', 'karachi', 'user'),
(3, 'Naeem', 'Sheikh', 'Naeem@gmail.com', '123445678', 'adsdasdas', '123456789', '76543', 'mehmoodabad karachi', 'mehmoodabad 4', 'karachi', 'user'),
(4, 'khurram', 'Akram', 'khurram.akram43@gmail.com', '+4420712345622', '02012345678', 'Pakistan123', 'SW1A 1AA', '10 London ', '10 London ', 'London', 'user'),
(5, 'arsalan', 'ahmed', 'Arsalan@gmail.com', '12345678863', '', '', '75460', 'House#E-27,Street#8,mehmoodabad#4', 'House#E-27,Street#8,mehmoodabad#4', 'Karachi', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `websiteorder`
--

CREATE TABLE `websiteorder` (
  `id` int(11) NOT NULL,
  `CustomOrderId` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websiteorder`
--

INSERT INTO `websiteorder` (`id`, `CustomOrderId`, `userId`, `status`, `total`, `time`, `date`, `notes`) VALUES
(1, '1', 1, 'Completed', 1010, '04:56:14am', '17-11-2023', 'khurram testing'),
(2, '2', 4, 'In Progress', 370, '02:23:14am', '21-11-2023', 'asd'),
(3, '3', 4, 'In Progress', 370, '02:24:24am', '21-11-2023', 'asd'),
(4, '4', 5, 'In Progress', 1250, '02:26:35am', '21-11-2023', 'testing'),
(5, '5', 4, 'In Progress', 220, '04:21:09pm', '21-11-2023', ''),
(6, '6', 4, 'In Progress', 850, '04:23:06pm', '21-11-2023', 'khurrma'),
(7, '7', 4, 'In Progress', 850, '04:27:33pm', '21-11-2023', 'khurrma'),
(8, '8', 4, 'In Progress', 850, '04:30:09pm', '21-11-2023', 'khurrma'),
(9, '9', 4, 'In Progress', 850, '04:32:08pm', '21-11-2023', 'khurrma'),
(10, '10', 4, 'In Progress', 850, '04:33:51pm', '21-11-2023', 'khurrma'),
(11, '11', 4, 'In Progress', 850, '04:38:15pm', '21-11-2023', 'khurrma');

-- --------------------------------------------------------

--
-- Table structure for table `websiteorderitems`
--

CREATE TABLE `websiteorderitems` (
  `id` int(11) NOT NULL,
  `websiteOrderId` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websiteorderitems`
--

INSERT INTO `websiteorderitems` (`id`, `websiteOrderId`, `item_id`, `quantity`, `subtotal`) VALUES
(1, 1, 3, 1, 200),
(2, 1, 2, 1, 200),
(3, 1, 1, 1, 400),
(4, 1, 4, 1, 150),
(5, 1, 5, 1, 10),
(6, 2, 6, 1, 10),
(7, 2, 5, 1, 10),
(8, 2, 4, 2, 300),
(9, 3, 6, 1, 10),
(10, 3, 5, 1, 10),
(11, 3, 4, 2, 300),
(12, 4, 3, 3, 600),
(13, 4, 2, 1, 200),
(14, 4, 1, 1, 400),
(15, 5, 6, 1, 10),
(16, 5, 5, 1, 10),
(17, 5, 4, 1, 150),
(18, 6, 2, 1, 200),
(19, 6, 1, 1, 400),
(20, 6, 3, 1, 200),
(21, 7, 2, 1, 200),
(22, 7, 1, 1, 400),
(23, 7, 3, 1, 200),
(24, 8, 2, 1, 200),
(25, 8, 1, 1, 400),
(26, 8, 3, 1, 200),
(27, 9, 2, 1, 200),
(28, 9, 1, 1, 400),
(29, 9, 3, 1, 200),
(30, 10, 2, 1, 200),
(31, 10, 1, 1, 400),
(32, 10, 3, 1, 200),
(33, 11, 2, 1, 200),
(34, 11, 1, 1, 400),
(35, 11, 3, 1, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectionorder`
--
ALTER TABLE `collectionorder`
  ADD PRIMARY KEY (`collectionOrderId`);

--
-- Indexes for table `deliveryorders`
--
ALTER TABLE `deliveryorders`
  ADD PRIMARY KEY (`deliveryOrderId`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_items_id`);

--
-- Indexes for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  ADD PRIMARY KEY (`transactionId`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteorder`
--
ALTER TABLE `websiteorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteorderitems`
--
ALTER TABLE `websiteorderitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collectionorder`
--
ALTER TABLE `collectionorder`
  MODIFY `collectionOrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliveryorders`
--
ALTER TABLE `deliveryorders`
  MODIFY `deliveryOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websiteorder`
--
ALTER TABLE `websiteorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `websiteorderitems`
--
ALTER TABLE `websiteorderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
