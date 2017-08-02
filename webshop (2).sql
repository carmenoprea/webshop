-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 12:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `products_count` int(11) DEFAULT NULL,
  `description` text,
  `picture` varchar(30) DEFAULT NULL,
  `products_count_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`, `parent`, `products_count`, `description`, `picture`, `products_count_admin`) VALUES
(1, 'Automobiles', 0, 7, 'The world famous automobiles', 'C1_jaguar.jpg', 0),
(2, 'Cellular', 0, 25, 'Callular phones and accessories', 'C2_cphone.jpg', 0),
(3, 'Sport', 0, 5, '', 'C3_RBaccess.jpg', 0),
(4, 'Audio / Video', 0, 25, 'We sell DVD, home theatres (currently out of stock) and mp3 players', 'C4_cplayer.jpg', 0),
(5, 'Beverages', 0, 5, '', 'C5_svetly_lezak.gif', 0),
(8, 'Mercedes', 1, 2, '', '', 2),
(9, 'Toyota', 1, 1, '', '', 1),
(12, 'In-line skates', 3, 2, '', '', 3),
(13, 'Snowboards', 3, 3, '', '', 3),
(14, 'Samsung', 2, 4, '', '', 4),
(15, 'Ericsson', 2, 4, '', '', 4),
(16, 'Accessories', 17, 1, '', '', 1),
(17, 'Nokia', 2, 12, '', '', 11),
(18, 'Siemens', 2, 5, '', '', 5),
(19, 'Accessories', 14, 0, '', '', 0),
(20, 'DVD', 4, 21, 'DVD movies. High quality!', '', 22),
(21, 'mp3-players', 4, 4, '', '', 4),
(23, 'Books', 0, 7, '', 'C23_pic_gifts.gif', 1),
(24, 'Lexus', 1, 2, '\"Japanese Mercedes\"', '', 2),
(25, 'Clothes', 0, 3, '', 'C25_clothes.jpg', 0),
(27, 'Computers', 0, 13, '', 'C27_comp.gif', 0),
(38, 'Winter', 25, 1, '', '', 1),
(39, 'Summer', 25, 1, '', '', 1),
(40, 'Home', 25, 1, '', '', 1),
(46, 'Alcohol', 5, 3, '', '', 3),
(47, 'Alcohol free', 5, 2, '', '', 2),
(51, 'Notebooks', 27, 5, '', '', 5),
(57, 'PDA', 27, 6, '', '', 6),
(58, 'Personal', 27, 2, '', '', 2),
(63, 'Lotus', 1, 1, 'The fast and the furious', '', 1),
(64, 'Lamborghini', 1, 1, 'Famous autos from Italy!', '', 1),
(71, 'Harry Potter', 23, 3, 'the world known books about Harry Potter', '15794s.jpg', 3),
(72, 'Design', 23, 1, '', '', 1),
(73, 'Programming', 23, 2, '', '', 2),
(74, 'Classic', 25, 0, '', '', 0),
(75, 'Multimedia', 27, 0, '', '', 0),
(76, 'Home theatres', 4, 0, '', '', 0),
(77, 'Bycicles', 3, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_carts`
--

CREATE TABLE `ordered_carts` (
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `name` char(255) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordered_carts`
--

INSERT INTO `ordered_carts` (`productID`, `orderID`, `name`, `Price`, `Quantity`) VALUES
(45, 0, 'Coca-Cola', 0.99, 1),
(47, 0, 'Budwieser', 0.39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderregels`
--

CREATE TABLE `orderregels` (
  `orderid` int(11) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `straat` varchar(50) NOT NULL,
  `huisnummer` int(6) NOT NULL,
  `plaats` varchar(25) NOT NULL,
  `provincie` varchar(25) NOT NULL,
  `postcode` varchar(25) NOT NULL,
  `land` varchar(25) NOT NULL,
  `telefoon` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `levering` text NOT NULL,
  `betaling` text NOT NULL,
  `service` text NOT NULL,
  `ordertijd` date NOT NULL,
  `productid1` int(11) NOT NULL,
  `productaantal1` int(11) NOT NULL,
  `afhandeling` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderregels`
--

INSERT INTO `orderregels` (`orderid`, `voornaam`, `achternaam`, `straat`, `huisnummer`, `plaats`, `provincie`, `postcode`, `land`, `telefoon`, `email`, `levering`, `betaling`, `service`, `ordertijd`, `productid1`, `productaantal1`, `afhandeling`) VALUES
(1, 'pietje', 'bell', 'Netherlands', 0, 'rotterdam', 'phl', '3197KG', 'Netherlands', '010', 'k.bakker@stc-r.nl', '', '', '', '2016-04-20', 0, 0, ''),
(2, 'a', 'bakker', 'Netherlands', 0, 'rotterdam', 'phl', '3197KG', 'Netherlands', '0101', 'info@zadkine.nl', '', '', '', '2016-04-20', 0, 0, ''),
(3, 'pietje', 'Bell', 'posthumalaan', 120, 'rotterdam', 'zuid-holland', '3197KG', '', '0101', 'info@zadkine.nl', '1', '', '', '2016-04-20', 3, 22, 'vooruitbetaling'),
(4, 'pietje', 'Bell', 'posthumalaan', 1, 'rotterdam', 'zuid holland', '3197KG', 'Netherlands', '018145759', 'info@zadkine.nl', '2', '', '', '2016-04-20', 2, 12, 'rembours'),
(5, 'm', 'bakker', 'posthumalaan', 120, 'rotterdam', 'zuid holland', '3206SL', 'Belgium', '018145759', 'k.bakker@zadkine.nl', '', '', '', '2016-04-26', 3, 5, ''),
(6, 'm', 'bakker', 'posthumalaan', 120, 'rotterdam', 'zuid holland', '3197KG', 'Barbados', '123', 'info@telfort.nl', '1', '', '', '2016-04-26', 3, 12, 'rembours'),
(7, '', '', '', 0, '', '', '', '', '', '', '', '', '', '2016-05-27', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `cust_firstname` varchar(30) DEFAULT NULL,
  `cust_lastname` varchar(30) DEFAULT NULL,
  `cust_email` varchar(30) DEFAULT NULL,
  `cust_country` varchar(30) DEFAULT NULL,
  `cust_zip` varchar(30) DEFAULT NULL,
  `cust_state` varchar(30) DEFAULT NULL,
  `cust_city` varchar(30) DEFAULT NULL,
  `cust_address` varchar(30) DEFAULT NULL,
  `cust_phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `order_time`, `cust_firstname`, `cust_lastname`, `cust_email`, `cust_country`, `cust_zip`, `cust_state`, `cust_city`, `cust_address`, `cust_phone`) VALUES
(1, '2016-03-23 22:09:38', 'k', 'bakker', 'k.bakker@zadkine.nl', 'netherlands', '3197KG', 'zuid-holland', 'rotterdam', 'second floor', ''),
(2, '2016-03-23 22:17:15', 'k', 'bakker', 'k.bakker@zadkine.nl', 'netherlands', '3197KG', 'zuid-holland', 'rotterdam', '', ''),
(3, '2016-04-05 19:28:52', 'k', 'bakker', 'k.bakker@zadkine.nl', 'Netherlands', '3197KG', 'posthumalaan', 'rotterdam', 'Netherlands', '010'),
(13, '2016-04-06 12:43:10', '', '', '', '', '', '', '', '', ''),
(14, '2016-04-18 19:24:08', '', '', '', '', '', '', '', '', ''),
(15, '2016-04-18 20:08:05', '', '', '', '', '', '', '', '', ''),
(16, '2016-04-18 20:36:33', '', '', '', '', '', '', '', '', ''),
(17, '2016-04-18 22:38:13', '', '', '', '', '', '', '', '', ''),
(18, '2016-04-18 22:39:08', '', '', '', '', '', '', '', '', ''),
(19, '2016-04-18 22:39:46', '', '', '', '', '', '', '', '', ''),
(20, '2016-04-18 22:40:28', '', '', '', '', '', '', '', '', ''),
(21, '2016-04-18 22:40:47', '', '', '', '', '', '', '', '', ''),
(22, '2016-04-18 22:40:59', '', '', '', '', '', '', '', '', ''),
(23, '2016-04-18 22:43:12', '', '', '', '', '', '', '', '', ''),
(24, '2016-04-18 22:45:24', '', '', '', '', '', '', '', '', ''),
(25, '2016-04-18 22:45:49', '', '', '', '', '', '', '', '', ''),
(26, '2016-04-18 22:47:58', '', '', '', '', '', '', '', '', ''),
(27, '2016-04-18 22:49:04', '', '', '', '', '', '', '', '', ''),
(28, '2016-04-18 22:50:04', '', '', '', '', '', '', '', '', ''),
(29, '2016-04-19 10:20:49', '', '', '', '', '', '', '', '', ''),
(30, '2016-04-19 15:23:07', '', '', '', '', '', '', '', '', ''),
(31, '2016-04-20 09:33:25', 'k', 'bakker', 'k.bakker@zadkine.nl', 'Netherlands', '3197KG', 'posthumalaan', 'rotterdam', 'Netherlands', '010'),
(35, '2017-01-09 21:07:57', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `customers_rating` float NOT NULL,
  `Price` float DEFAULT NULL,
  `picture` varchar(30) DEFAULT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `thumbnail` varchar(30) DEFAULT NULL,
  `customer_votes` int(11) NOT NULL,
  `items_sold` int(11) NOT NULL,
  `big_picture` varchar(30) DEFAULT NULL,
  `enabled` int(11) NOT NULL,
  `brief_description` text,
  `list_price` float DEFAULT NULL,
  `product_code` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `description`, `customers_rating`, `Price`, `picture`, `in_stock`, `thumbnail`, `customer_votes`, `items_sold`, `big_picture`, `enabled`, `brief_description`, `list_price`, `product_code`) VALUES
(1, 9, 'Dell', '', 4.16667, 500, 'DellLatitude.png', 25, 'DellLatitude.png', 12, 13, 'toyota_landcruizer.jpg', 1, '', 0, ''),
(4, 24, 'Acer', '', 4.05, 550, 'Acer.png', 80, 'Acer.png', 12, 9, '', 1, '', 550, ''),
(6, 13, 'Asus', '', 5, 460, 'Asus.jpeg', 65, 'asus.jpeg', 1, 0, 'Asus.jpeg', 1, '', 0, ''),
(7, 14, 'Samsung', '\r\n', 4, 350, 'samsung.jpeg', 100, 'samsung.jpeg', 2, 0, '', 1, '', 0, ''),
(8, 14, 'Samsung N100 Notebook', '\r\n\r\n \r\n\r\n', 2, 200, 'samsungnotebook.jpeg', 100, 'samsungnotebook.jpeg', 1, 0, '', 1, '', 0, ''),
(9, 13, 'Toshiba', '', 0, 345, 'toshiba.jpeg', 63, 'toshiba.jpeg', 0, 1, '', 1, '', 0, ''),
(10, 17, 'Medion', '', 3.66667, 335, 'medion.jpeg', 30, 'medion.jpeg', 3, 0, '', 1, '', 0, ''),
(11, 17, 'MSI', '', 5, 490, 'msi.jpeg', 15, 'msi.jpeg', 1, 2, '', 1, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `offerID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`offerID`, `productID`, `sort_order`) VALUES
(1, 64, 3),
(3, 101, 1),
(4, 94, 2),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('admin@webshop', '$2y$10$0RTBkPKoz1rdvZV1lzwF.ObkJ/ffDvZofS6sQCSqt5gQkbmSxftsW'),
('info@zadkine.nl', 'zadkine'),
('k.bakker@zadkine.nl', '$2y$12$lhq8HMRdru6kyqjy47RJpe0TsFP6xYqh85aFqifHL0TYbw1I0/Y9u');

-- --------------------------------------------------------

--
-- Table structure for table `werknemers`
--

CREATE TABLE `werknemers` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `kamer` varchar(15) NOT NULL,
  `toestel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `werknemers`
--

INSERT INTO `werknemers` (`id`, `voornaam`, `achternaam`, `kamer`, `toestel`) VALUES
(2, 'karel', 'appellen', '12', '600'),
(5, 'peter', 'pan', '144', '166'),
(6, 'hans', 'doorestein', '195', '180'),
(25, 'Joop', 'Braakhekke', '1', '1'),
(26, 'Andre', 'Rieu', '1', '1'),
(29, 'piet', 'Picasso', '200', '193'),
(30, 'Vincent', 'Biertje', '2', '2'),
(31, 'Joop', 'Ratinger', '1', '9'),
(32, 'KU', 'NOORD-Noord', '00.10 – 00.16', '20275'),
(33, 'KU', 'NOORD-Zuid', '01.01 – 01.11', ' 20272 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `ordered_carts`
--
ALTER TABLE `ordered_carts`
  ADD PRIMARY KEY (`productID`,`orderID`);

--
-- Indexes for table `orderregels`
--
ALTER TABLE `orderregels`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`offerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `werknemers`
--
ALTER TABLE `werknemers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `orderregels`
--
ALTER TABLE `orderregels`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `special_offers`
--
ALTER TABLE `special_offers`
  MODIFY `offerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `werknemers`
--
ALTER TABLE `werknemers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
