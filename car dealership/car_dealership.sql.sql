-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 05:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_dealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessiories`
--

CREATE TABLE `accessiories` (
  `name` varchar(50) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `special_feature` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `paypal_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessiories`
--

INSERT INTO `accessiories` (`name`, `product_id`, `special_feature`, `size`, `brand`, `price`, `image`, `paypal_id`) VALUES
('headphone', 1, 'soothing', 'big', 'samsung', 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN', '01734365'),
('kjhflsud', 2, 'soothing', '3', 'samsung', 40, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN', '54w4398759'),
('kjhflsud', 3, 'soothing', '3', 'samsung', 40, 'https://m.media-amazon.com/images/I/51ixWHI-aaL._A', '54w4398759'),
('kjhflsud', 4, 'soothing', '3', 'samsung', 40, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD', '54w4398759'),
('kjhflsud', 5, 'soothing', '3', 'samsung', 40, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUXFxcaGxsaGxobGxsgGxoaGxsaGxgaGiAbJCwkICApIBoXJTYlKS4wMzMzGiI5PjkyPSwyMzABCwsLEA4QHRISHjIpJCkyMjIyMjAyMjIyMDIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIAKwBJQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAgMEBgcAAQj/xABFEAACAQIEAgcFBAcGBgMBAAABAhEAAwQSITEFQQYTIlFhcYEyQpGhsVLB0fAHFGJygpLhFSMzY6KyFiRDU8LSk6Pxc//EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACYRAAICAwACAgICAwEAAAAAAAABAhEDEiExQRNhIlGhsSNx4QT/2gAMAwEAAhEDEQA/AIVo3', '54w4398759');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `book_id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `payment_status` varchar(10) DEFAULT NULL,
  `approval` varchar(10) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`book_id`, `car_id`, `user_id`, `date`, `duration`, `payment_status`, `approval`, `payment_id`) VALUES
(3, 2, 2, '2022-08-01', 2, 'yes', 'YES', '3'),
(4, 1, 2, '2022-08-16', 2, 'yes', NULL, '1'),
(5, 1, 1, '2022-08-17', 5, 'yes', NULL, '21421421');

-- --------------------------------------------------------

--
-- Table structure for table `book_accessiories`
--

CREATE TABLE `book_accessiories` (
  `book_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_accessiories`
--

INSERT INTO `book_accessiories` (`book_id`, `product_id`, `user_id`, `payment_id`, `date`) VALUES
(1, 1, 1, '123', '2022-08-01'),
(2, 4, 4, '66', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `car_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `available` varchar(10) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `exterior_color` varchar(50) DEFAULT NULL,
  `interior_color` varchar(50) DEFAULT NULL,
  `drivetrain` varchar(50) DEFAULT NULL,
  `mpg` varchar(50) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `engine` varchar(50) DEFAULT NULL,
  `vin` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `milage` varchar(50) DEFAULT NULL,
  `entertainment` varchar(50) DEFAULT NULL,
  `safety` varchar(50) DEFAULT NULL,
  `seating` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `paypal_id` varchar(50) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`car_id`, `name`, `available`, `price`, `exterior_color`, `interior_color`, `drivetrain`, `mpg`, `transmission`, `engine`, `vin`, `stock`, `milage`, `entertainment`, `safety`, `seating`, `rating`, `image`, `paypal_id`, `description`) VALUES
(1, '2020 BMW X3 xDrive30', 'YES', 50, ' Mineral White', ' Black', ' All-wheel Drive', '24–29', '8-Speed Automatic', ' 2.0L I4 16V GDI DOHC Turbo', ' 5UXTY5C04L9D03721', ' P25204', ' 30,071 mi.', 'Bluetooth', ' Brake Assist Stability Control', ' Leather Seats Memory Seat', 4, 'https://cdn.motor1.com/images/mgl/3WW1j1/s3/2022-bmw-i7.jpg', '5134141', 'lorem ipsum'),
(2, 'kdfhkurek', 'no', 40, 'black', 'blue', 'lrkjri', 'kfjghsltghp', 'ljgoipg', 'lkgjrp8turliuper8', 'klj;rwoit;', 'l;gjprit', ';tijtipj', ';glgfpoh[d', 'ljpreo', 'fhgfhg', 3, 'rkgirpigpfgos', 'f.,jbnsflghrugr', 'dfkjghro7gr');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nid` varchar(12) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `area_name` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gmail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `name`, `gender`, `nid`, `phone`, `house_no`, `area_name`, `city`, `password`, `gmail`) VALUES
(1, 'Niloy', 'male', '12321312', '123', '123', '3123123', '123', '1234', 'niloy@gmail.com'),
(3, 'taki', 'male', '12321312', '01305722022', '123', '3123123', 'bd', '5678', 'taki@gmail.com'),
(4, 'taki', 'male', '12321312', '01305722022', '123', '3123123', 'bd', '5678', 'taki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE `driver_info` (
  `name` varchar(20) DEFAULT NULL,
  `li_no` varchar(20) NOT NULL,
  `experience` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `available_status` varchar(10) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `paypal_id` varchar(50) DEFAULT NULL,
  `rate_per_hour` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`name`, `li_no`, `experience`, `address`, `rating`, `available_status`, `phone_number`, `paypal_id`, `rate_per_hour`) VALUES
('Shahee', '1', '5', 'brac', 2, 'no', '018927', '953737', 40),
('niloy', '3', '5', 'rajshai', 5, 'no', '01305722022', '123h344', 50);

-- --------------------------------------------------------

--
-- Table structure for table `hire_details`
--

CREATE TABLE `hire_details` (
  `li_no` varchar(20) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approval` varchar(10) DEFAULT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire_details`
--

INSERT INTO `hire_details` (`li_no`, `start_date`, `end_date`, `payment_id`, `user_id`, `approval`, `book_id`) VALUES
('2', '0000-00-00', '2022-08-02', '2', 2, 'YES', 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager_info`
--

CREATE TABLE `manager_info` (
  `manager_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_info`
--

INSERT INTO `manager_info` (`manager_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '0166666666', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessiories`
--
ALTER TABLE `accessiories`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_accessiories`
--
ALTER TABLE `book_accessiories`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `driver_info`
--
ALTER TABLE `driver_info`
  ADD PRIMARY KEY (`li_no`);

--
-- Indexes for table `hire_details`
--
ALTER TABLE `hire_details`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `manager_info`
--
ALTER TABLE `manager_info`
  ADD PRIMARY KEY (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_accessiories`
--
ALTER TABLE `book_accessiories`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hire_details`
--
ALTER TABLE `hire_details`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
