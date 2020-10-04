-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 11:03 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(70) NOT NULL,
  `ResID` int(11) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `ResID`, `Price`) VALUES
(1, '1.Chicken Pizza Sandwich', 1, 390),
(2, '2.Grilled butter cut king\r\n\r\nprawn', 1, 350),
(3, 'Mixed seafood platter', 1, 490),
(4, 'Barcode Special Oven Baked Chicken Breast Pasta', 1, 360),
(5, 'Jacket Potato With Beef Bolognese', 1, 180),
(6, 'T Bone Steak 250gm', 1, 800),
(7, 'Butlers Chocolate Temptation', 3, 350),
(8, 'Smoked Chicken Chilli Pizza', 3, 750),
(9, 'Chicken Wings', 3, 380),
(10, 'Chocolate Fudge Cake', 3, 500),
(11, 'Spicy Chicken Sandwich', 3, 650),
(12, 'Chilli Tomato Pasta', 3, 595),
(13, 'Sharing Platter', 2, 752),
(14, 'Club Sandwich', 2, 452),
(15, 'Premium Beef Steak Burger', 2, 726),
(16, 'Spaghetti Bolognese Pasta', 2, 552),
(17, 'Spicy Mustard Chicken Salad', 2, 461),
(18, 'French Fries', 2, 157),
(19, 'Golden Olive Tender Strips', 8, 250),
(20, 'Korean Charbroiled Meal (Thigh)', 8, 650),
(21, 'Hot Spicy Chicken', 8, 700),
(22, 'Fish Tofu Pizza', 8, 1295),
(23, 'Jamaican Grill (WholeGrill)', 8, 695),
(24, 'Korean Charbroiled Burger with Pomme Frite', 8, 395),
(25, 'MadMonster Platter', 7, 499),
(26, 'The Winger Platter', 7, 399),
(27, 'Naga Blast Burger', 7, 220),
(28, 'Tandoori Chicken Burger', 7, 220),
(29, 'Classic Cheese Burger', 7, 220),
(30, 'Onion Rings', 7, 100),
(31, 'Chocolate Custard', 9, 135),
(32, 'Dazzled', 9, 135),
(33, 'Double Chocolate', 9, 135),
(34, 'Mac', 9, 135),
(35, 'Rainbow', 9, 135),
(36, 'Amazed', 9, 135),
(37, 'Takeout Special Beef Burger', 4, 300),
(38, 'Chicken Cheese Delight', 4, 248),
(39, 'Mushroom Caramel', 4, 370),
(40, 'BBQ Beef Burger', 4, 165),
(41, 'Twister', 4, 200),
(42, 'French Fries', 4, 100),
(43, 'Sirloin Steak', 5, 790),
(44, 'Master Grilled King Prawn', 5, 750),
(45, 'Sea Food Platter', 5, 700),
(46, 'Nasi Goreng Rice', 5, 300),
(47, 'Special Set Menu', 5, 280),
(48, 'Mee Goerng Noodles', 5, 250),
(49, 'Nutella Cheese Cake Brownie', 6, 220),
(50, 'Red Velvet Slice', 6, 220),
(51, 'Grilled Chicken Burger', 6, 350),
(52, 'Taste Bud Special Cupcake', 6, 150),
(53, 'Tiramisu Cake', 6, 2200),
(54, 'Mexican Chicken Steak', 6, 450),
(55, 'Sub Sandwich', 10, 140),
(56, 'Double Layer CC Special Sub Sandwich', 10, 220),
(57, 'Fajitas', 10, 170),
(58, 'Cheesy Monster Burger', 10, 160),
(59, 'Heart Sandwich', 10, 160),
(60, 'Slider', 10, 80),
(61, 'Zingy Chicken Burger', 11, 150),
(62, 'Zingy Chicken Cheese Burger', 11, 160),
(63, 'Twisty Crispy Chicken Wrap', 11, 160),
(64, 'Twisty Sausage Warp', 11, 100),
(65, 'Fries', 11, 60),
(66, 'Chicken Meat Ball', 11, 25),
(67, 'Rice Combo', 12, 220),
(68, 'Hot Wings', 12, 250),
(69, 'Best Burger', 12, 300),
(70, 'Fried Chicken Basket', 12, 1100),
(71, 'Chicken Nuggets', 12, 250),
(72, 'French Fries', 12, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `ResID` (`ResID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `resturant` (`ResID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
