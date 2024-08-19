-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 06:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `contact`, `photo`, `username`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Kamal Uddin', 'kamal@yahoo.com', NULL, NULL, 'kamal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-06-11 06:01:07', NULL, NULL, NULL, NULL),
(2, NULL, 'jhraj963@gmail.com', NULL, NULL, 'jhraj963', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-06-13 21:26:52', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Football', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `cupon_code` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `cupon_code`, `discount`, `start_date`, `finish_date`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 'DD5XIF', 52, '2024-07-01', '2024-07-30', '1', '2024-07-03', '1', '2024-07-01', NULL),
(2, 'DD5XIF', 50, '2024-07-01', '2024-07-22', '1', '2024-07-01', '1', '0000-00-00', NULL),
(3, '', 0, '0000-00-00', '0000-00-00', '1', '2024-07-02', '1', '2024-07-02', '2024-07-02'),
(4, 'sdfsd', 74, '2024-07-10', '2024-07-24', '1', '2024-07-02', '1', '2024-07-02', '2024-07-02'),
(5, 'r59', 5, '2024-07-02', '2024-07-04', '1', '2024-07-02', '1', '2024-07-02', '0000-00-00'),
(6, 'r59', 10, '2024-07-05', '2024-07-09', '1', '2024-07-07', '', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `company_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact`, `status`, `due`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `country`, `first_name`, `last_name`, `photo`, `password`, `company_name`, `address`, `email`, `state`, `post`, `phone`) VALUES
(1, 'kamal', '016', '0', '500.00', '2024-06-09 09:43:27', 1, '2024-06-09 09:53:24', 1, '2024-06-10 06:35:38', '', '', '', '', '', '', '', '', '', '', 0),
(2, 'jamal', '057', '0', '500.00', '2024-06-09 09:45:39', 1, '2024-06-09 09:53:39', 1, NULL, '', '', '', '', '', '', '', '', '', '', 0),
(3, '', '', '', NULL, '2024-08-14 18:35:12', NULL, NULL, NULL, NULL, '2', 'Julfiqur', 'Haidar', '17236533123899.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Hifs', 'Chattogram', 'jhraj963@gmail.com', 'Hathazari', 'Fatahabad', 54737);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `catagory_id` int(11) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `details`, `photo`, `price`, `catagory_id`, `company_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '', '', NULL, '0.00', 0, '', '2024-07-02 17:31:55', 1, NULL, NULL, NULL),
(2, 'Football', 'fgfg', '17199343318545.jpg', '40.00', 1, 'DEER', '2024-07-02 17:32:11', 1, '2024-07-02 17:32:16', 1, '2024-07-02 17:32:19'),
(3, 'Football', 'sdfsd', '17199343871191.jpg', '40.00', 1, 'DEER', '2024-07-02 17:33:07', 1, NULL, 1, '2024-07-07 19:31:24'),
(4, 'sdfsd', 'sdfsd', '17199344151536.jpg', '2.00', 1, 'sdfsd', '2024-07-02 17:33:35', 1, '2024-07-07 19:31:28', 1, '2024-07-07 19:31:30'),
(5, 'Chair', 'Funrichar', '17204126173719.jpg', '100.00', 1, 'Bd Publice Service', '2024-07-08 06:23:37', 1, NULL, NULL, NULL),
(6, 'Table', 'Funrichar', '17204126368731.jpg', '100.00', 1, 'Bd Publice Service', '2024-07-08 06:23:56', 1, NULL, NULL, NULL),
(7, 'Cycle', '', NULL, '5000.00', 1, '', '2024-08-12 20:34:04', 1, NULL, NULL, NULL),
(8, 'Motor', 'gaga', '17234891996230.jpg', '5000.00', 1, '', '2024-08-12 20:59:59', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `generic_name` varchar(255) DEFAULT NULL,
  `dose` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type_id` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `brand_name`, `generic_name`, `dose`, `photo`, `type_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `price`) VALUES
(1, 'Napa Extend', 'Flucloxacillin Sodium', '25 mg', '17235746266189.jpg', 1, 1, '2024-07-15 22:29:21', 2, '2024-08-13 20:43:46', 1, NULL, '2'),
(4, 'Abex', 'Flucloxacillin Sodium', '5 mg', '300-80.jpg', 1, 1, '2024-07-15 22:42:38', 2, NULL, NULL, NULL, '2'),
(5, 'Ace', 'Flucloxacillin Sodium', '100 mg', '300-300(New).jpg', 1, 1, '2024-07-15 22:48:05', 2, NULL, NULL, NULL, '5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bill_country` varchar(50) NOT NULL,
  `ship_country` varchar(50) NOT NULL,
  `bill_first_name` varchar(50) NOT NULL,
  `ship_first_name` varchar(50) NOT NULL,
  `bill_last_name` varchar(50) NOT NULL,
  `ship_last_name` varchar(50) NOT NULL,
  `bill_company_name` varchar(100) NOT NULL,
  `ship_company_name` varchar(100) NOT NULL,
  `bill_address` varchar(100) NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `bill_state` varchar(50) NOT NULL,
  `ship_state` varchar(50) NOT NULL,
  `bill_post` varchar(50) NOT NULL,
  `ship_post` varchar(50) NOT NULL,
  `bill_email` varchar(50) NOT NULL,
  `ship_email` varchar(50) NOT NULL,
  `bill_phone` int(15) NOT NULL,
  `ship_phone` int(15) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `cart_data` text NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `notes` varchar(500) NOT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `cancel_request` int(11) NOT NULL DEFAULT 0 COMMENT '0 active 1 request to cancel',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending 1 processing 2 delivered 3 canceled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `supplier_id`, `purchase_date`, `qty`, `sub_amount`, `discount`, `vat`, `total_amount`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, '2024-06-13', 10000, '20000.00', '5000.00', '1000.00', '16000.00', '2024-06-13 21:21:16', 1, NULL, NULL, NULL),
(2, 1, '2024-06-19', 10000654, '20001308.00', '5000000.00', '2000130.80', '17001438.00', '2024-06-19 19:00:30', 2, NULL, NULL, NULL),
(3, 1, '2024-06-22', 10000, '20000.00', '5.00', '1000.00', '20995.00', '2024-06-22 15:58:55', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `purchase_date`, `medicine_id`, `qty`, `price`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, '2024-06-13', 1, '10000.00', '2.00', '2024-06-13 21:21:16', 1, NULL, NULL, NULL),
(2, 2, '2024-06-19', 1, '10000654.00', '2.00', '2024-06-19 19:00:30', 2, NULL, NULL, NULL),
(3, 3, '2024-06-22', 1, '10000.00', '2.00', '2024-06-22 15:58:55', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sales_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `sales_date` date DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `orders_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `purchase_id`, `sales_id`, `orders_id`, `medicine_id`, `qty`, `price`, `stock_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, NULL, 12, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 20:32:02', 1, NULL, NULL, NULL),
(2, NULL, 13, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 20:36:03', 1, NULL, NULL, NULL),
(3, NULL, 14, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 20:39:00', 1, NULL, NULL, NULL),
(4, NULL, 15, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 21:26:49', 1, NULL, NULL, NULL),
(5, NULL, 16, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 21:34:09', 1, NULL, NULL, NULL),
(6, NULL, 17, NULL, 3, '-1.00', '2000.00', '2024-08-14', '2024-08-14 21:51:20', 1, NULL, NULL, NULL),
(7, NULL, NULL, 1, 5, '-1.00', '5.00', '2024-08-19', '2024-08-19 06:32:26', 1, NULL, NULL, NULL),
(8, NULL, NULL, 1, 4, '-1.00', '2.00', '2024-08-19', '2024-08-19 06:32:26', 1, NULL, NULL, NULL),
(9, NULL, NULL, 1, 1, '-1.00', '2.00', '2024-08-19', '2024-08-19 06:32:26', 1, NULL, NULL, NULL),
(10, NULL, NULL, 2, 4, '-1.00', '2.00', '2024-08-19', '2024-08-19 06:47:31', 1, NULL, NULL, NULL),
(11, NULL, NULL, 2, 1, '-1.00', '2.00', '2024-08-19', '2024-08-19 06:47:31', 1, NULL, NULL, NULL),
(12, NULL, NULL, 3, 5, '-1.00', '5.00', '2024-08-19', '2024-08-19 06:49:26', 1, NULL, NULL, NULL),
(13, NULL, NULL, 4, 5, '-1.00', '5.00', '2024-08-19', '2024-08-19 06:50:16', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact`, `due`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Bismillah Enterperise', '017716897579', '0.00', NULL, '2024-06-13 21:20:25', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Tablet', '2024-06-13 06:21:50', 1, '2024-06-13 21:12:53', 1, NULL),
(2, 'Capsule', '2024-06-13 21:12:43', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
