-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 08:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodhubfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(30) DEFAULT NULL,
  `AdminEmail` varchar(70) NOT NULL,
  `AdminPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Com` varchar(100) DEFAULT NULL,
  `ComID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Com`, `ComID`) VALUES
('', 1),
('', 2),
('', 3),
('', 4),
('', 5),
('', 6),
('The cat was playing in the garden.', 7),
('This is a great comment\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `deliverer`
--

CREATE TABLE `deliverer` (
  `DelivererID` int(11) NOT NULL,
  `DelivererName` varchar(30) DEFAULT NULL,
  `DelivererEmail` varchar(70) NOT NULL,
  `DelivererPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gives`
--

CREATE TABLE `gives` (
  `UserID` int(11) NOT NULL,
  `ComID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ImgID` int(11) NOT NULL,
  `image` blob,
  `ResID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `ResID` int(11) NOT NULL,
  `Price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `ResID`, `Price`) VALUES
(1, '1.Chicken Pizza Sandwich', 1, 390.00),
(2, '2.Grilled butter cut king\r\n\r\np', 1, 350.00),
(3, 'Mixed seafood platter', 1, 490.00),
(4, 'Barcode Special Oven Baked Chi', 1, 360.00),
(5, 'Jacket Potato With Beef Bologn', 1, 180.00),
(6, 'T Bone Steak 250gm', 1, 800.00),
(7, 'Butlers Chocolate Temptation', 3, 350.00),
(8, 'Smoked Chicken Chilli Pizza', 3, 750.00),
(9, 'Chicken Wings', 3, 380.00),
(10, 'Chocolate Fudge Cake', 3, 500.00),
(11, 'Spicy Chicken Sandwich', 3, 650.00),
(12, 'Chilli Tomato Pasta', 3, 595.00),
(13, 'Sharing Platter', 2, 752.00),
(14, 'Club Sandwich', 2, 452.00),
(15, 'Premium Beef Steak Burger', 2, 726.00),
(16, 'Spaghetti Bolognese Pasta', 2, 552.00),
(17, 'Spicy Mustard Chicken Salad', 2, 461.00),
(18, 'French Fries', 2, 157.00),
(19, 'Golden Olive Tender Strips', 8, 250.00),
(20, 'Korean Charbroiled Meal (Thigh', 8, 650.00),
(21, 'Hot Spicy Chicken', 8, 700.00),
(22, 'Fish Tofu Pizza', 8, 1295.00),
(23, 'Jamaican Grill (WholeGrill)', 8, 695.00),
(24, 'Korean Charbroiled Burger with', 8, 395.00),
(25, 'MadMonster Platter', 7, 499.00),
(26, 'The Winger Platter', 7, 399.00),
(27, 'Naga Blast Burger', 7, 220.00),
(28, 'Tandoori Chicken Burger', 7, 220.00),
(29, 'Classic Cheese Burger', 7, 220.00),
(30, 'Onion Rings', 7, 100.00),
(31, 'Chocolate Custard', 9, 135.00),
(32, 'Dazzled', 9, 135.00),
(33, 'Double Chocolate', 9, 135.00),
(34, 'Mac', 9, 135.00),
(35, 'Rainbow', 9, 135.00),
(36, 'Amazed', 9, 135.00),
(37, 'Takeout Special Beef Burger', 4, 300.00),
(38, 'Chicken Cheese Delight', 4, 248.00),
(39, 'Mushroom Caramel', 4, 370.00),
(40, 'BBQ Beef Burger', 4, 165.00),
(41, 'Twister', 4, 200.00),
(42, 'French Fries', 4, 100.00),
(43, 'Sirloin Steak', 5, 790.00),
(44, 'Master Grilled King Prawn', 5, 750.00),
(45, 'Sea Food Platter', 5, 700.00),
(46, 'Nasi Goreng Rice', 5, 300.00),
(47, 'Special Set Menu', 5, 280.00),
(48, 'Mee Goerng Noodles', 5, 250.00),
(49, 'Nutella Cheese Cake Brownie', 6, 220.00),
(50, 'Red Velvet Slice', 6, 220.00),
(51, 'Grilled Chicken Burger', 6, 350.00),
(52, 'Taste Bud Special Cupcake', 6, 150.00),
(53, 'Tiramisu Cake', 6, 2200.00),
(54, 'Mexican Chicken Steak', 6, 450.00),
(55, 'Sub Sandwich', 10, 140.00),
(56, 'Double Layer CC Special Sub Sa', 10, 220.00),
(57, 'Fajitas', 10, 170.00),
(58, 'Cheesy Monster Burger', 10, 160.00),
(59, 'Heart Sandwich', 10, 160.00),
(60, 'Slider', 10, 80.00),
(61, 'Zingy Chicken Burger', 11, 150.00),
(62, 'Zingy Chicken Cheese Burger', 11, 160.00),
(63, 'Twisty Crispy Chicken Wrap', 11, 160.00),
(64, 'Twisty Sausage Warp', 11, 100.00),
(65, 'Fries', 11, 60.00),
(66, 'Chicken Meat Ball', 11, 25.00),
(67, 'Rice Combo', 12, 220.00),
(68, 'Hot Wings', 12, 250.00),
(69, 'Best Burger', 12, 300.00),
(70, 'Fried Chicken Basket', 12, 1100.00),
(71, 'Chicken Nuggets', 12, 250.00),
(72, 'French Fries', 12, 80.00);

-- --------------------------------------------------------

--
-- Table structure for table `ordereditems`
--

CREATE TABLE `ordereditems` (
  `OrderNum` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNum` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `DelivererID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `UserID` int(11) NOT NULL,
  `ResID` int(11) NOT NULL,
  `Rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `ResID` int(11) NOT NULL,
  `ResName` text NOT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `Rating` int(1) DEFAULT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resturant`
--

INSERT INTO `resturant` (`ResID`, `ResName`, `Location`, `Rating`, `img`) VALUES
(1, 'BarcodeCAFE', 'Gulshan', NULL, '''bar.png'''),
(2, 'GloriaJeansCoffee', 'Gulshan', NULL, '''gloria.png'''),
(3, '"BUTLERS CHOCOLATE CAFE"', 'Gulshan', NULL, '''butler.jpg'''),
(4, 'TASTEBUD', 'Banani', NULL, '''Tastebud.jpg'''),
(5, 'CafeEuphoria', 'Banani', NULL, '''euro.jpg'''),
(6, 'TAKEOUT', 'Banani', NULL, '''takeout.jpg'''),
(7, 'MADCHEF', 'Dhanmondi', NULL, '''Madchef.jpg'''),
(8, 'BBQ BANGLADESH', 'Dhanmondi', NULL, '''bbq.jpg'''),
(9, 'GLAZED', 'Dhanmondi', NULL, '''Glazed.jpg'''),
(10, 'CoffeeliciousCoffee', 'Baily Road', NULL, '''cofe.jpg'''),
(11, '2GO', 'Baily Road', NULL, '''2go.jpg'''),
(12, 'BFC', 'Baily Road', NULL, '''bfc.jpg''');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(70) NOT NULL,
  `UserPass` varchar(30) NOT NULL,
  `UserPhone` varchar(11) NOT NULL,
  `UserAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `UserEmail`, `UserPass`, `UserPhone`, `UserAddress`) VALUES
(33, 'asef', 'mhkhan_asef@yahoo.com', '123', '1111', '1111'),
(34, 'asef', 'mobtasef@gmail.com', '123', '123', '123'),
(35, 'Hasan', 'hasan439@gmai.com', '123', '01754966788', 'Dinajpur'),
(36, 'Mamy', 'mamymamy@gmail.com', '123', '420420', 'Gulshan'),
(37, 'Mobta', 'mobta@gmail.com', '123', '01754966788', '123'),
(38, 'Mamy', 'asjabgs@gmail.com', '123', '10912098', 'jaksdbajsdbn '),
(39, 'asef', '555@gmail.com', 'aasef', 'asef', 'asef'),
(40, '1212', '1213@gmail.com', '123', '123', '123'),
(41, '1212', '11213@gmail.com', '123', '123', '123'),
(42, 'Shandrone', 'shandro@gmail.com', '123', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ComID`);

--
-- Indexes for table `deliverer`
--
ALTER TABLE `deliverer`
  ADD PRIMARY KEY (`DelivererID`);

--
-- Indexes for table `gives`
--
ALTER TABLE `gives`
  ADD PRIMARY KEY (`UserID`,`ComID`),
  ADD KEY `ComID` (`ComID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImgID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `ordereditems`
--
ALTER TABLE `ordereditems`
  ADD PRIMARY KEY (`OrderNum`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNum`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `DelivererID` (`DelivererID`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`UserID`,`ResID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `resturant`
--
ALTER TABLE `resturant`
  ADD PRIMARY KEY (`ResID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ComID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `deliverer`
--
ALTER TABLE `deliverer`
  MODIFY `DelivererID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resturant`
--
ALTER TABLE `resturant`
  MODIFY `ResID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gives`
--
ALTER TABLE `gives`
  ADD CONSTRAINT `gives_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `gives_ibfk_2` FOREIGN KEY (`ComID`) REFERENCES `comments` (`ComID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `resturant` (`ResID`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `resturant` (`ResID`);

--
-- Constraints for table `ordereditems`
--
ALTER TABLE `ordereditems`
  ADD CONSTRAINT `ordereditems_ibfk_1` FOREIGN KEY (`OrderNum`) REFERENCES `orders` (`OrderNum`),
  ADD CONSTRAINT `ordereditems_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`DelivererID`) REFERENCES `deliverer` (`DelivererID`);

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`ResID`) REFERENCES `resturant` (`ResID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
