-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 09:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girlyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catId` int(4) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `catImg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catId`, `catName`, `catImg`) VALUES
(1, 'Dresses', 'c1.jpg'),
(2, 'Tops', 'c2.jpg'),
(3, 'Jeans', 'c3.jpg'),
(4, 'Trousers', 'c4.png'),
(5, 'Skirts', 'c5.png'),
(6, 'Shorts', 'c6.png');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `orderProdId` int(4) NOT NULL,
  `orderNo` int(4) NOT NULL,
  `prodId` int(4) NOT NULL,
  `quantityOrdered` int(4) NOT NULL,
  `subTotal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNo` int(4) NOT NULL,
  `userId` int(4) NOT NULL,
  `orderDateTime` datetime NOT NULL,
  `orderTotal` decimal(8,2) NOT NULL DEFAULT 0.00,
  `paymentMethod` varchar(10) NOT NULL,
  `orderStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `catId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodPicName2` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `catId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodPicName2`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 1, 'Blooming Night Dress', '001.jpg', '001.jpg', '001-2.jpg', '\r\nRs. 2500.00', '* Dress<br>\r\n* Elbo Sleeve<br>\r\n* Occasional & Evening Wear<br>\r\n* Material : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '2500.00', 5),
(2, 1, 'Around Town Mini Dress', '002.jpg', '002.jpg', '002-2.jpg', '\r\nRs. 3100.00', '* Dress<br>\r\n* Sleeveless<br>\r\n* Casual Wear<br>\r\n* Material : Viscose<br>\r\n* Material Composition : Cotton 97% Spandex 3%<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '3100.00', 4),
(5, 1, 'Back Detailed Maxi Dress', '005.jpg', '005.jpg', '005-2.jpg', 'Rs. 3500.00', '* Dress <br>\r\n* Sleeveless <br>\r\n* Occasional & Evening Wear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\n* Lining Material : 97% Polyester, 3% Elastane<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '3500.00', 7),
(6, 1, 'Godet Detail Dress', '006.jpg', '006.jpg', '006-2.jpg', 'Rs. 2800.00', '* Dress<br>\r\n* Short Sleeve<br>\r\n* Casual Wear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\n* Lining Material : 97% Polyester, 3% Elastane <br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '2800.00', 3),
(7, 1, 'Tiered Strappy Maxi Dress', '007.jpg', '007.jpg', '007-2.jpg', 'Rs. 3350.00', '* Dress<br>\r\n* Sleeveless<br>\r\n* Casual Wear<br>\r\n* Material : Viscose<br>\r\n* Material Composition : 100% Viscose<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '3350.00', 6),
(8, 1, 'Real Temptation Dress', '008.jpg', '008.jpg', '008-2.jpg', 'Rs. 3500.00', '* Dress<br>\r\n* Sleeveless<br>\r\n* Casual Wear<br>\r\n* Material Composition : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '3500.00', 4),
(9, 2, 'Cross My Heart', '003.jpg', '003.jpg', '003-2.jpg', 'Rs. 1800.00', '* Top<br>\r\n* Off Shoulder<br>\r\n* Occasional & Evening Wear<br>\r\n* Material : 100% Polyester <br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view\r\n', '1800.00', 7),
(10, 2, 'Mock Wrap Ribbed Top', '009.jpg', '009.jpg', '009-2.jpg', 'Rs. 1850.00', '* Top<br>\r\n* Short Sleeve<br>\r\n* Casual Wear<br>\r\n* Material : Viscose<br>\r\n* Material Composition : 95% Viscose, 5% Elastane<br><br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '1850.00', 5),
(11, 2, 'Sleeve Bow Detail Top', '010.jpg', '010.jpg', '010-2.jpg', 'Rs. 1250.00', '* Top<br>\r\n* Short Sleeve<br>\r\n* Occasional & Evening Wear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '1250.00', 3),
(12, 2, 'Words Apart F/T', '011.jpg', '011.jpg', '011-2.jpg', 'Rs. 1400.00', '* Top<br>\r\n* Neck top<br>\r\n* Work Wear, Occasional & Evening Wear<br>\r\n* Material : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '1400.00', 5),
(13, 2, 'Sleeve Embroidered Top', '012.jpg', '012.jpg', '012-2.jpg', 'Rs. 2600.00', '* Top<br>\r\n* 3/4 Sleeve<br>\r\n* Work Wear<br>\r\n* Material : Linen<br>\r\n* Material Composition : 100% Linen<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that in the photo may be slightly different from the actual item in terms of color due to the lighting conditions or the display you view it from.', '2600.00', 6),
(14, 2, 'Loving The Look Linen Top', '013.jpg', '013.jpg', '013-2.jpg', 'Rs. 1300.00', '* Top<br>\r\n* Short Sleeves<br>\r\n* Casual wear<br>\r\n* Material : 55%Linen 45%Cotton<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '1300.00', 6),
(15, 3, 'Light Wash Skinny Jean', '014.jpg', '014.jpg', '014-2.jpg', 'Rs. 3500.00', '* Mid Waist<br>\r\n* Skinny Fit<br>\r\n* Light Washed<br>\r\n* Zip and One Button Fastening<br>\r\n* Material Composition : 83% Cotton, 15% Polyester, 2% Elastane<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that in the photo may be slightly different from the actual item in terms of color due to the lighting conditions or the display you view it from.', '3500.00', 7),
(16, 3, 'Tulip Hem Jean', '015.jpg', '015.jpg', '015-2.jpg', 'Rs. 3900.00', '* High Rise<br>\r\n* Skinny Fit<br>\r\n* Mid Washed<br>\r\n* Five Pockets<br>\r\n* Zip And One Button Fastening <br>\r\n* Material Composition : 83% Cotton, 8% Tencel, 7% Elastomultiester, 2% Elastane<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that in the photo may be slightly different from the actual item in terms of color due to the lighting conditions or the display you view it from.', '3900.00', 6),
(17, 4, 'Pansy Pant', '016.jpg', '016.jpg', '016-2.jpg', 'Rs. 2850.00', '* Pant<br>\r\n* Occasional & Evening Wear<br>\r\n* Material : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '2850.00', 5),
(18, 4, 'High Waist Trapped Pant', '017.jpg', '017.jpg', '017-2.jpg', 'Rs. 2900.00', '* Pant<br>\r\n* Workwear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10<br><br>\r\n\r\nPlease bear in mind that in the photo may be slightly different from the actual item in terms of color due to the lighting conditions or the display you view it from.', '2900.00', 4),
(19, 5, 'Pleated Colour Block Skirt', '018.jpg', '018.jpg', '018-2.jpg', 'Rs. 2100.00', '* Skirt<br>\r\n* Casual Wear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view\r\n\r\n', '2100.00', 3),
(20, 5, 'Ruffled Printed Skirt', '019.jpg', '019.jpg', '019-2.jpg', 'Rs. 2300.00', '* Skirt<br>\r\n* Ruffled<br>\r\n* Evening & Occasional Wear<br>\r\n* Material : Woven<br>\r\n* Material Composition : 100% Polyester<br>\r\n8 Lining Material : 97% Polyester, 3% Lining<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '2300.00', 5),
(21, 6, 'The Way Home Short', '020.jpg', '020.jpg', '020-2.jpg', 'Rs. 1950.00', '* Short<br>\r\n* Casual Wear<br>\r\n* Material :  97%Rayon 3%Spandex<br>\r\nModel Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that the photo may be slightly different from the actual item in terms of colour due to lighting conditions or the display used to view', '1950.00', 6),
(22, 6, 'Linen Short With Waist Tie', '004.jpg', '004.jpg', '004-2.jpg', 'Rs.1650.00', '* Short<br>\r\n* Casual Wear<br>\r\n* Material : Line<br>\r\n* Material Composition : 100% Linen<br>\r\n* Model Height 5\' 8\", wearing size UK 10 (Size Guide)<br><br>\r\n\r\nPlease bear in mind that in the photo may be slightly different from the actual item in terms of color due to the lighting conditions or the display you view it from.\r\n', '1650.00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `productsize`
--

CREATE TABLE `productsize` (
  `prodSizeId` int(4) NOT NULL,
  `prodId` int(4) NOT NULL,
  `sizeId` int(4) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsize`
--

INSERT INTO `productsize` (`prodSizeId`, `prodId`, `sizeId`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 2),
(3, 1, 3, 1),
(4, 2, 2, 2),
(5, 2, 3, 1),
(6, 2, 4, 1),
(7, 5, 3, 2),
(8, 5, 4, 2),
(9, 5, 5, 2),
(10, 5, 2, 1),
(11, 6, 1, 2),
(12, 6, 2, 1),
(13, 7, 1, 1),
(14, 7, 2, 2),
(15, 7, 3, 1),
(16, 7, 4, 1),
(17, 7, 5, 1),
(18, 8, 2, 2),
(19, 8, 4, 2),
(20, 9, 1, 2),
(21, 9, 2, 2),
(22, 9, 3, 2),
(23, 9, 4, 1),
(24, 10, 1, 2),
(25, 10, 2, 2),
(26, 10, 3, 1),
(27, 11, 4, 2),
(28, 11, 5, 1),
(29, 12, 3, 1),
(30, 12, 4, 1),
(31, 12, 5, 3),
(32, 13, 3, 3),
(33, 13, 4, 3),
(34, 14, 1, 3),
(35, 14, 2, 3),
(36, 15, 1, 1),
(37, 15, 2, 1),
(38, 15, 3, 2),
(39, 15, 4, 2),
(40, 15, 5, 1),
(41, 16, 3, 3),
(42, 16, 5, 3),
(43, 17, 2, 2),
(44, 17, 3, 1),
(45, 17, 4, 2),
(46, 18, 1, 2),
(47, 18, 2, 2),
(48, 19, 5, 3),
(49, 20, 1, 1),
(50, 20, 2, 1),
(51, 20, 3, 1),
(52, 20, 4, 1),
(53, 20, 5, 1),
(54, 21, 1, 2),
(55, 21, 2, 2),
(56, 21, 3, 2),
(57, 22, 2, 1),
(58, 22, 3, 2),
(59, 22, 4, 2),
(60, 22, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeId` int(4) NOT NULL,
  `sizeName` varchar(20) NOT NULL,
  `bust` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`sizeId`, `sizeName`, `bust`, `waist`, `hip`) VALUES
(1, '6', '80', '65', '87.5'),
(2, '8', '84', '67.5', '91.5'),
(3, '10', '86.5', '71', '95'),
(4, '12', '90', '74', '99'),
(5, '14', '94', '79', '105.5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `userType` varchar(1) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userSName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTelNo` varchar(10) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`orderProdId`),
  ADD KEY `orderNo` (`orderNo`,`prodId`),
  ADD KEY `prodId` (`prodId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNo`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`),
  ADD KEY `catId` (`catId`);

--
-- Indexes for table `productsize`
--
ALTER TABLE `productsize`
  ADD PRIMARY KEY (`prodSizeId`),
  ADD KEY `prodId` (`prodId`,`sizeId`),
  ADD KEY `sizeId` (`sizeId`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `orderProdId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `productsize`
--
ALTER TABLE `productsize`
  MODIFY `prodSizeId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `sizeId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD CONSTRAINT `orderproduct_ibfk_1` FOREIGN KEY (`orderNo`) REFERENCES `orders` (`orderNo`),
  ADD CONSTRAINT `orderproduct_ibfk_2` FOREIGN KEY (`prodId`) REFERENCES `product` (`prodId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`);

--
-- Constraints for table `productsize`
--
ALTER TABLE `productsize`
  ADD CONSTRAINT `productsize_ibfk_1` FOREIGN KEY (`prodId`) REFERENCES `product` (`prodId`),
  ADD CONSTRAINT `productsize_ibfk_2` FOREIGN KEY (`sizeId`) REFERENCES `size` (`sizeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
