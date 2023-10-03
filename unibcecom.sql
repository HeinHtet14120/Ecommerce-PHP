-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 10:44 AM
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
-- Database: `unibcecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cph` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`cid`, `cname`, `cemail`, `cph`, `city`, `country`, `address`, `payment`) VALUES
(11, 'Wai Yan Lin', '4pf@gmail.com', '0998878777', 'Yangon', 'mm', 'Marina Bay', 'visa'),
(12, 'Lil Dugg', '4pf@gmail.com', '099887676', 'Compton', 'sg', 'Orchid Street', 'visa'),
(13, 'Nay', 'nay1268@gmail.com', '0988272726333', 'Yangon', 'mm', 'No.47,SanChaung', 'kbzpay'),
(14, 'Dababy', 'dababy123@gmail.com', '09882873722', 'Yangon', 'mm', 'Orchid Street', 'mastercart'),
(15, 'Nay Chi', 'ayuuma123@gmail.com', '09964238343', 'Yangon', 'mm', 'No.47,SanChaung', 'visa'),
(17, 'Ski Mask', 'test1@gmail.com', '09888373736', 'Atlanta', 'mm', 'No45, Home Sweet', 'mastercart'),
(18, 'Nay Chi', 'ngapawma123@gmail.com', '09199199199', 'Yangon', 'mm', 'No.47,SanChaung', 'kbzpay');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Iid` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Iid`, `name`, `category`, `price`, `description`, `image`) VALUES
(73, 'GARFIELD', '1000%', 980, 'Garfield by Medicom', 'garfiled1.jpg'),
(75, 'Lfyt x Krink', '1000%', 890, 'Lfyt x Krink by Takashi ', 'Lyx1.png'),
(76, 'Oh-No Whiteout', '400%', 700, 'Oh-No Whiteout UberJanky by McBess', 'Oh-NO1.png'),
(77, 'Propaganda Basketball Grin', '400%', 900, 'Basketball Grin by Ron English', 'BasketballGrin1.png'),
(78, 'Kaws Small Lie', '400%', 1500, 'Small Lie (Black) by KAWS x Medicom Toys', 'Kaws1.jpg'),
(79, 'What Party Book', 'Book', 200, 'KAWS: WHAT PARTY Book (Orange Edition) by KAWS', 'kawspartybook.jpg'),
(80, 'Tweety', '400%', 500, 'Tweety (Get Animated) by Pat Lee', 'duck1.jpg'),
(81, 'Flying Devil Statue ', '400%', 700, 'Flying Devil Statue (Original Red) by Keith Haring (2G Exclusive)', 'Flying.jpg'),
(83, 'Test', '400%', 500, 'This is testing', 'chop_chop1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `moredetails`
--

CREATE TABLE `moredetails` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `released` varchar(50) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moredetails`
--

INSERT INTO `moredetails` (`id`, `artist`, `descriptions`, `released`, `image1`, `image2`, `image3`) VALUES
(73, 'XXRAY Plus', 'This is testing', '2022', 'garfiled1.jpg', 'garfiled2.jpg', 'garfiled3.jpg'),
(75, 'Krink', 'Love you to the moon and back', '2020', 'Lyx1.png', 'Lyx3.png', 'Lyx2.png'),
(76, 'McBess', 'This is the Oh-No Whiteout UberJanky by McBess.\r\nThe Oh-No Whiteout UberJanky by McBess is limited to 666 pieces worldwide!', '2021', 'Oh-NO1.png', 'Oh-NO2.png', 'Oh-NO3.png'),
(76, 'McBess', 'This is the Oh-No Whiteout UberJanky by McBess.\r\nThe Oh-No Whiteout UberJanky by McBess is limited to 666 pieces worldwide!', '2021', 'Oh-NO1.png', 'Oh-NO2.png', 'Oh-NO3.png'),
(77, 'Ron English', 'This is the Basketball Grin by Ron English x POPaganda.\r\nThe American artist, follower of the jamming culture, is back with a character who plays for Team Popaganda: Basketball Grin.', '2021', 'BasketballGrin1.png', 'BasketballGrin2.png', 'BasketballGrin3.png'),
(78, 'Kaws', 'This is the Black edition of the KAWS Small lie figure, designed by KAWS x Medicom Toys.\r\nSmall Lie (Black) by KAWS x Medicom Toys is a limited edition production', '2018', 'Kaws3.jpg', 'Kaws2.jpg', 'Kaws4.jpg'),
(79, 'Kaws', 'Drawing from Pop art traditions, KAWS\'s work straddles the line between fine art and popular culture, crossing the mediums of painting and sculpture, along with fashion, merchandise, vinyl toys, and, most recently, augmented reality. ', '2021', 'kawspartybook.jpg', 'kawspartybook1.jpg', 'kawspartybook2.jpg'),
(80, 'Pat Lee x Soap Studio', 'This is the Tweety (Get Animated) by Pat Lee x Soap Studio\r\nWarner Bros teamed up with Soap Studio, artist Pat Lee (INTERFERENCE), and combined with Warner Bros\' classic characters to launch a series of classic crossovers, including Looney Tunes, Tom & Je', '2019', 'duck3.jpg', 'duck4.jpg', 'duck2.jpg'),
(81, 'Keith Haring', 'This is the Flying Devil Statue (Original Red) by Keith Haring (2G Exclusive) x Medicom Toys\r\nFlying Icon by Keith Haring. Created by the artist in 1990 this is a unique piece that captures Haring’s classic style. Haring’s interest in art marketization an', '2022', 'Flying.jpg', 'Flying1.jpg', 'Flying2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cid` int(11) NOT NULL,
  `cusName` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cid`, `cusName`, `productName`, `price`, `quantity`, `totalamount`) VALUES
(8, 'Hein Htet', 'Kaws', 1300, 3, 3938),
(8, 'Hein Htet', 'Bumble Bee', 38, 1, 3938),
(8, 'Hein Htet', 'Laptop', 1100, 1, 1100),
(11, 'Wai Yan Lin', 'Phone', 1400, 1, 2800),
(11, 'Wai Yan Lin', 'Car', 1400, 1, 2800),
(12, 'Lil Dugg', 'WEIRJLWJLRJWJ', 12316, 1, 13716),
(12, 'Lil Dugg', 'Phone', 1400, 1, 13716),
(13, 'Nay', 'WEIRJLWJLRJWJ', 12316, 1, 12316),
(14, 'Dababy', 'WEIRJLWJLRJWJ', 12316, 1, 25316),
(14, 'Dababy', 'Young Thug', 13000, 1, 25316),
(15, 'Nay Chi', 'WEIRJLWJLRJWJ', 12316, 1, 12316),
(16, 'Biggie', 'Young Thug', 13000, 1, 14100),
(16, 'Biggie', 'Laptop', 1100, 1, 14100),
(17, 'Ski Mask', 'Oh-No Whiteout', 700, 3, 2600),
(17, 'Ski Mask', 'Tweety', 500, 1, 2600),
(15, 'Nay Chi', 'Oh-No Whiteout', 700, 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `password_hash`) VALUES
(1, 'Dababy', 'billiondollar@gmail.com', '$2y$10$KZwkFKiN6bP0Z.PuyXXQIeqJtcbfyDZrNfz7gHhCQ61vXe.WygU3W'),
(2, 'Nay Chi', 'naychi123@gmail.com', '$2y$10$ZV7C0lOnQxzSTLrOkLH9TeDHaxrW4zoogOkzHRva49cHbYoXY6IpS'),
(3, 'shane bone', 'shanebone@gmail.com', '$2y$10$tbiWeaYmccrI6UJ3Fiv22.6EVhkuEdtymdLfS54dVqueKBUqZY1by'),
(4, 'IU', 'iu123@gmail.com', '$2y$10$esTgHo6kBVVCF.Z19wF/0.ceC1NAwyh0aUXhVaTCpCnbxmP4uVJTO'),
(5, 'liltjay', 'liltjay@gmail.com', '$2y$10$e4d6/HiRM1LWi.w/5IkvzetxWzvmZEQ9Njd6dJSotjscIJiAxyWwq'),
(6, 'gatone', 'gatone123@gmail.com', '$2y$10$juukvFixDLXLyYAeFfUi3uNUguAsQ2U8zqUK8Bes89itXloMSIKZi'),
(7, 'person', 'person1@gmail.com', '$2y$10$nPPZHKf4qJ1zZqQxfUwDo.YubVcpYy1OahCd60PagYnfOSiSoauou'),
(8, '21 Savage', '21savage@email.com', '$2y$10$0vBZv9xTV3nHku692uH3du1GNWr2bN0nWUziSq3IVRZqmYC2zcHTq'),
(9, 'lilbaby', 'lilbaby123@gmail.com', '$2y$10$D3J/hjGBBtFAyW3QJlnwBezbOaIr6xt8aP7J8/MqL7gGZ4O3Y7BtS'),
(10, '2pac', '2pac@gmail.com', '$2y$10$KDMUf7P4lQ9WaumbIzDP0ONg4l4C8GHzprp.QJZ8rc/sGNYkYCysS'),
(11, 'YoungBoy', 'youngboy@gmail.com', '$2y$10$RgSUhnjjiWwTNo6B7YC7IeKoDPLbMdLE4e4MA90AFRCOKpc5Irhsm'),
(12, '6lack', '6lack@gmail.com', '$2y$10$7n3PjrrXVFjOO/ca5uVE3ep2y0E/6W6DAsibGOhg0CuKz92pd9Z2O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
