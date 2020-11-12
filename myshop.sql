-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:34 PM
-- Server version: 8.0.22
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerName` varchar(250) DEFAULT NULL,
  `customerPhone` varchar(12) NOT NULL,
  `customerAddress` varchar(250) DEFAULT NULL,
  `customerEmail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerName`, `customerPhone`, `customerAddress`, `customerEmail`) VALUES
('', '', '', ''),
('aaaa', '00000', 'aaaaa', 'aaaaa'),
('aybc', '0123455', 'aha', 'haha'),
('ha', '038780002', 'thanh yen', 'thuha'),
('Dương', '039394838', 'Ninh Bình', 'duong@hahah.com'),
('Thu Ha', '0902129939', 'Thanh Yen', 'thuha@gmail.com'),
('Viet', '0902187989', 'Kim Nguu', 'viet@gmail.com'),
('Luận', '090334443', 'Hà Tình', 'luannguyen@gmail.com'),
('viet', '09043139289', 'aaaaa', 'aaaa'),
('thu ha', '0904837465', 'hahah', 'hahaha'),
('Luận', '0904848574', 'Hà Tĩnh', 'luan@abch.com'),
('aaa', '0907183738', 'aaaaaa', 'aaaaaa'),
('Duc Viet', '0908283454', 'ha noi', 'ducviet300397@'),
('alalal', '0909292929', 'Haha', 'hahah'),
('Dũng', '0949574637', 'Hà Tĩnh', 'dung_nguyen@gmail.com'),
('aa', '098766', 'ajaha', 'kkkaa'),
('bbbb', '0987766', 'hahah', 'hahahaa'),
('ihhh', '123456', 'ahah', 'ahaha'),
('aaaa', 'aaaa', 'aaaa', 'aaaa'),
('aaaaa', 'aadad', 'adada', 'adadad'),
('aaaa', 'bbbb', 'ccccc', 'bbbbb'),
('ahaha', 'hahaha', 'ahaha', 'ahhaah'),
('aaaac', 'ssss', 'ccc', 'ca'),
('uhb', 'uhb', 'uhb', 'uhb');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `quantityOrder` int DEFAULT NULL,
  `productId` int DEFAULT NULL,
  `orderId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`quantityOrder`, `productId`, `orderId`) VALUES
(2, 21, 2),
(2, NULL, NULL),
(2, 55, 36),
(1, 54, 41),
(1, 54, 41),
(1, 90, 43),
(2, 85, 44),
(1, 21, 45);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderDate` varchar(250) DEFAULT NULL,
  `customerPhone` varchar(12) DEFAULT NULL,
  `orderId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderDate`, `customerPhone`, `orderId`) VALUES
('23/02/2020', '0902187989', 2),
('11/11/2020', '0902129939', 36),
('11/11/2020', '0904848574', 41),
('11/11/2020', '038780002', 43),
('11/11/2020', '039394838', 44),
('11/11/2020', '0949574637', 45);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int NOT NULL,
  `productName` varchar(250) DEFAULT NULL,
  `productType` varchar(250) DEFAULT NULL,
  `productCompany` varchar(250) DEFAULT NULL,
  `productDesc` varchar(250) DEFAULT NULL,
  `productImg` varchar(250) DEFAULT NULL,
  `buyPrice` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productType`, `productCompany`, `productDesc`, `productImg`, `buyPrice`) VALUES
(21, 'ULTRABOOST 20 SHOES', 'Shoes', 'Adidas', 'Men\'s Shoe', 'das1.jpg', '2900000'),
(54, 'ADILETTE COMFORT SLIDES', 'Slide', 'Adidas', 'Men\'s Slide', 'das4.jpg', '650000'),
(55, 'SHERPA BUCKET HAT', 'Hat', 'Adidas', 'Original Hat', 'das5.jpg', '570000'),
(56, 'MUST HAVES BADGE OF SPORT TEE', 'Shirt', 'Adidas', 'Women\'s Shirt', 'das6.jpg', '470000'),
(57, 'STAN SMITH SHOES', 'Shoes', 'Adidas', 'Kid\'s Shoes', 'das7.jpg', '670000 '),
(58, 'NEMEZIZ+ FIRM GROUND CLEATS', 'Shoes', 'Adidas', 'Men\'s Soccer Shoes', 'das8.jpg', '4250000'),
(67, 'Air Jordan 1 Zoom Cmft', 'Shoes', 'Nike', 'Men\'s Shoe', 'nike1.jpg', '4100000'),
(68, 'Air Jordan 1 Mid', 'Shoes', 'Nike', 'Kid\'s Shoes', 'nike2.jpg', '2450000'),
(69, 'Nike Air Force 1 \'07', 'Shoes', 'Nike', 'Men\'s Shoe', 'ninke3.jpg', '2700000'),
(70, 'Nike Air Force 1 \'07 LV8', 'Shoes', 'Nike', 'Men\'s Shoe', 'nike4.jpg', '2900000'),
(71, 'Air Jordan 1 Low', 'Shoes', 'Nike', 'Men\'s Shoe', 'nike5.jpg', '2800000'),
(72, 'Jordan Sport DNA', 'Hoodie', 'Nike', 'Men\'s Hoodie', 'nike8.jpg', '1900000'),
(73, 'Nike Air Zoom UNVRS FlyEase', 'Shoes', 'Nike', 'Basketball\'s Shoes', 'nike7.jpg', '4700000'),
(74, 'Nike Air Max 1', 'Shoes', 'Nike', 'Men\'s Shoe', 'ninke9.jpg', '4100000'),
(81, 'DOWN PUFFER JACKET', 'Coat', 'Adidas', 'Woman\'s Coat', 'das12.jpg', '5800000'),
(82, '3D TREFOIL 3-STRIPES TRACK JACKET', 'Track Jacket', 'Adidas', 'Original', 'das13.jpg', '1900000'),
(83, 'CYCLING TIGHTS', 'Short', 'Adidas', 'Woman\'s Short', 'das14.jpg', '450000'),
(84, 'JUVENTUS 20/21 AWAY JERSEY', 'Soccer', 'Adidas', 'Original Soccer', 'das15.jpg', '1800000'),
(85, '3D TREFOIL CREW SOCKS 3 PAIRS', 'Socks', 'Adidas', 'Socks', 'das16.jpg', '450000'),
(86, 'CLEAR CASE IPHONE 6.1-INCH', 'Case', 'Adidas', 'Phone\'s Case', 'das127.jpg', '325000'),
(87, 'Jordan Legacy 91', 'Cap', 'Nike', 'Cap', 'nike9.jpg', '610000'),
(88, 'Nike ACG', 'Jacket', 'Nike', 'Men\'s Jacket', 'nike10.jpg', '3650000'),
(89, 'Jordan Hydro 8', 'Slides', 'Nike', 'Men\'s Slides', 'nike12.jpg', '1650000'),
(90, 'Nike Sportswear Heritage Windrunner', 'Jacket', 'Nike', 'Men\'s Jacket', 'nike14.jpg', '1250000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `Id`) VALUES
('admin', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerPhone`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `productId` (`productId`),
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customerPhone` (`customerPhone`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerPhone`) REFERENCES `customers` (`customerPhone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
