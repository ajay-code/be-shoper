-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 08:36 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `heroku_18d7ca516592eee` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `heroku_18d7ca516592eee`;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Id` bigint(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `UserId` bigint(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `oid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`Id`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `UserId`, `Pin`, `State`, `City`, `Country`, `oid`) VALUES
(1, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 21),
(2, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 22),
(3, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 23),
(4, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 24),
(5, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 25),
(6, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 26),
(7, 'Varun', 'Sharma', 'varunrocks27.sharma@gmail.com', 'Phagwara Gate', '9915296866', 5, 144001, 'Punjab', 'JALANDHAR', 'India', 27),
(8, 'Varun', 'Sharma', 'admin@gmail.com', 'Nugen', '9915296866', 5, 144, 'Punjab', 'JALANDHAR', 'India', 29),
(9, 'hello', 'hello', 'shivji@gmail.com', 'hello,hello', '1212121212', 6, 123456, 'hello', 'hello', 'hello', 30),
(10, '13', '234', 'piyushsehli@gmail.com', 'dfr', '2345', 6, 1245, 'gvdgd', 'gd', 'dfgg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(100) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  `isactive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `CategoryName`, `isactive`) VALUES
(1, 'Electronics', b'1'),
(2, 'Men', b'1'),
(3, 'Women', b'1'),
(4, 'Baby &amp; Kids', b'1'),
(5, 'Books &amp; Media', b'1'),
(6, 'Food and beverages', b'1'),
(7, 'Flowerpots', b'1'),
(8, 'Art and Crafts', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(80) NOT NULL,
  `userId` bigint(60) NOT NULL,
  `data` datetime NOT NULL,
  `rating` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `images` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(80) NOT NULL,
  `MenuName` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(80) NOT NULL,
  `oid` int(80) NOT NULL,
  `productid` int(60) NOT NULL,
  `price` int(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  `discount` bit(60) NOT NULL,
  `total` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `oid`, `productid`, `price`, `quantity`, `discount`, `total`) VALUES
(1, 17, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(2, 18, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(3, 19, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(4, 20, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(5, 21, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(6, 22, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(7, 23, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(8, 24, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(9, 25, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(10, 26, 1, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(11, 27, 2, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(12, 27, 18, 1, 0, b'000000000000000000000000000000000000000000000000000000000000', 0),
(13, 29, 1, 0, 1, b'000000000000000000000000000000000000000000000000000000000000', 0),
(14, 29, 90, 0, 1, b'000000000000000000000000000000000000000000000000000000000000', 0),
(15, 30, 99, 2590, 1, b'000000000000000000000000000000000000000000000000000000000000', 2590),
(16, 31, 100, 4990, 3, b'000000000000000000000000000000000000000000000000000000000000', 14970);

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

CREATE TABLE `ordermaster` (
  `id` bigint(80) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `Qty` int(60) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Total` decimal(10,2) DEFAULT NULL,
  `Processed` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`id`, `userid`, `Qty`, `OrderDate`, `Status`, `Total`, `Processed`) VALUES
(1, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(2, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(3, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(4, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(5, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(6, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(7, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(8, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(9, 5, 1, '0000-00-00 00:00:00', 'pending', '0.00', b'0'),
(10, 5, 1, '2014-10-29 17:34:25', 'pending', '0.00', b'0'),
(11, 5, 1, '2014-10-29 17:34:56', 'pending', '0.00', b'0'),
(12, 5, 1, '2014-10-29 17:51:33', 'pending', '0.00', b'0'),
(13, 5, 1, '2014-10-29 17:52:38', 'pending', '0.00', b'0'),
(14, 5, 1, '2014-10-29 17:53:35', 'pending', '0.00', b'0'),
(15, 5, 1, '2014-10-29 17:53:52', 'pending', '0.00', b'0'),
(16, 5, 1, '2014-10-29 17:54:17', 'pending', '0.00', b'0'),
(17, 5, 1, '2014-10-29 17:54:59', 'pending', '0.00', b'0'),
(18, 5, 1, '2014-10-29 17:56:47', 'pending', '0.00', b'0'),
(19, 5, 1, '2014-10-29 18:08:52', 'pending', '0.00', b'0'),
(20, 5, 1, '2014-10-29 18:09:04', 'pending', '0.00', b'0'),
(21, 5, 1, '2014-10-29 18:09:15', 'pending', '0.00', b'0'),
(22, 5, 1, '2014-10-29 18:10:00', 'pending', '0.00', b'0'),
(23, 5, 1, '2014-10-29 18:11:09', 'pending', '0.00', b'0'),
(24, 5, 1, '2014-10-29 18:14:15', 'pending', '0.00', b'0'),
(25, 5, 1, '2014-10-29 18:15:16', 'pending', '0.00', b'0'),
(26, 5, 1, '2014-10-29 18:16:12', 'pending', '0.00', b'0'),
(27, 5, 2, '2014-10-29 18:18:14', 'pending', '0.00', b'0'),
(28, 5, 0, '2014-10-29 18:19:21', 'pending', '0.00', b'0'),
(29, 5, 2, '2014-10-29 18:20:19', 'pending', '0.00', b'0'),
(30, 6, 1, '2016-11-15 20:47:08', 'pending', '2590.00', b'0'),
(31, 6, 1, '2016-12-14 10:40:30', 'pending', '14970.00', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(80) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `Isactive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `sub_cat_id` bigint(20) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `picture` text,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `rating` int(20) NOT NULL,
  `instock` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sub_cat_id`, `productname`, `description`, `picture`, `price`, `discount`, `rating`, `instock`) VALUES
(1, 1, 'Samsung Galaxy S5', 'S Health Heart Rate Sensor Android v4.4.2 (KitKat) OS 5.1-inch Full HD Display', 'img544a1654207193.50562742.jpg', '36999.00', '10.00', 1, b'1'),
(2, 1, 'Samsung I8552 - Gala', '0.3 MP Secondary Camera Android v4.1.2 OS 5 MP Primary Camera Dual Sim (GSM + GSM)', 'img544a18cf776765.84907626.jpg', '11670.00', '10.00', 1, b'1'),
(3, 1, 'Nokia Lumia 630 Dual', 'Windows Phone 8.1 OS 1.2 GHz Processor 5 MP Primary Camera 4.5-inch Touchscreen', 'img544a193bbf4815.53039343.jpg', '9200.00', '10.00', 1, b'1'),
(4, 1, 'Nokia Lumia 520', 'Windows Phone 8.1 OS 1 Ghz Processor 4-inch Touchscreen 5 MP Primary Camera', 'img544a1a2fe45fe3.51680980.jpg', '6999.00', '10.00', 1, b'1'),
(5, 1, 'Nokia X', '5-inch Touchscreen 5 MP Primary Camera Dual Sim (GSM + GSM) 2 MP Secondary Camera', 'img544a2bdc268da7.38250159.jpg', '9699.00', '10.00', 1, b'1'),
(6, 1, 'Sony Xperia Go', '3.5-inch TFT Touchscreen Android v2.3 OS 5 MP Primary Camera 1 Ghz Processor', 'img544a2c3d28c619.10075805.jpg', '12999.00', '10.00', 1, b'1'),
(7, 1, 'Apple iPhone 6 Plus', 'iOS 8 8 MP Primary Camera 7.1 mm Thickness 5.5-inch Touchscreen', 'img544a2c70c9ba86.61363479.jpg', '62500.00', '10.00', 1, b'1'),
(8, 1, 'ptanai', 'Android v4.4.4 OS 2.5 GHz Processor 5.2-inch Touchscreen 13 MP Primary Camera', 'img544a2d0e93ac46.02520345.jpg', '31999.00', '10.00', 1, b'1'),
(9, 2, 'Apple Laptop', 'APU Quad Core 4 GB DDR3 RAM 500 GB HDD Windows 8', 'img544d2b6f83ffb6.01806968.jpg', '63270.00', '4.00', 1, b'1'),
(10, 2, 'Sony VAIO Fit 15E SV', 'Intel Core i5 ,4 GB DDR3 RAM ,500 GB HDD  Windows 8', 'img544d2bd18da305.79604715.jpg', '43650.00', '4.00', 1, b'1'),
(11, 2, 'Lenovo Laptop', 'Intel Core i5, 4 GB DDR3 RAM, 500 GB HDD,Mac OS', 'img544d2c56975558.09477683.jpg', '73090.00', '5.00', 1, b'1'),
(12, 3, 'Apple 16GB iPad Mini', '7.9 inch LED Backlit Display A5 Chip 5MP iSight Camera with 1080p HD Video Recording iOS 6 and iCloud', 'img544a3987aad867.80582790.jpg', '16900.00', '4.00', 1, b'1'),
(13, 3, 'Digiflip Pro XT 801 ', 'Upgrade to KitKat 	8-inch IPS HD Display 	Intel Atom Dual Core Dual Camera (2MP + 5MP)', 'img544a3acb15aa05.30277835.jpg', '8999.00', '5.00', 1, b'1'),
(14, 3, 'Google Nexus 7 2013 ', 'Android v4.3 OS 7-inch 1920 x 1200 Pixels 5 MP Primary Camera 1.5 GHz Quad Core', 'img544a3ba8933c39.26752114.jpg', '20499.00', '5.00', 1, b'1'),
(15, 3, 'Lenovo Idea Tab A300', '5 MP Primary Camera 	Android OS  1.2 GHz Processor  7-inch Touchscreen', 'img544a3c782610d9.43897567.jpg', '15999.00', '4.00', 1, b'1'),
(16, 3, 'Samsung Galaxy Tab 4', 'Android v4.4 OS 	1.2 GHz Processor  3 MP Primary Camera  8-inch Touchscreen', 'img544a3cb21cd381.37989206.jpg', '23990.00', '3.00', 1, b'1'),
(17, 3, ' Dell Venue 7 Tablet', 'Android v4.2 OS  3 MP Primary Camera 	1.6 GHz Processor  7-inch Touchscreen', 'img544a3d411cecb8.25158873.jpg', '8875.00', '5.00', 1, b'1'),
(18, 8, 'Nike Transform Iv Ru', 'Size 6', 'img544a640adac182.30883242.jpg', '2295.00', '4.00', 1, b'1'),
(19, 8, 'Puma Contest Lite Sn', 'Size 7', 'img544a733a31b674.32568620.jpg', '2699.00', '3.00', 1, b'1'),
(20, 8, 'Hush Puppies Jungle-', 'Size 6', 'img544a73b4dbd334.46255532.jpg', '3499.00', '5.00', 1, b'1'),
(21, 8, 'Fila Climber Sandals', 'Size 7', 'img544a73ffa70228.18463362.jpg', '1599.00', '4.00', 1, b'1'),
(22, 8, 'adidas Adi Rio Flip ', 'Size 7', 'img544a7436e7dc28.65964303.jpg', '899.00', '5.00', 1, b'1'),
(23, 8, 'Red Tape Boots', 'Size 6', 'img544a747f2bd310.94118851.jpg', '2695.00', '6.00', 1, b'1'),
(24, 9, 'Global Nomad Solid C', 'Size XL', 'img544a75fd826975.47542826.jpg', '764.00', '10.00', 1, b'1'),
(25, 9, 'Pepe Solid  Wind Che', 'Size XL,XXL', 'img544a769b62ed28.98934935.jpg', '2299.00', '5.00', 1, b'1'),
(26, 9, 'Geometric Print Card', 'ALX New York  Button Geometric Print Cardigan Size Medium, XL,XXL', 'img544a775b99e369.40172699.jpg', '4410.00', '5.00', 1, b'1'),
(27, 9, 'Slim Fit  Jeans', 'U.S.Polo.Assn Slim Fit  Jeans Size-36', 'img544a77d6ef5842.81122690.jpg', '2199.00', '4.00', 1, b'1'),
(28, 9, 'Wedding  Blazer', 'Dezignare Solid Single Breasted Mandarin Casual, Festive, Formal, Party, Wedding  Blazer,Size-36', 'img544a784672b5c3.79902168.jpg', '5000.00', '10.00', 1, b'1'),
(29, 10, 'Arezzo Sterling Silv', 'Arezzo Sterling Silver Bracelet,Size-Free Size', 'img544a78c96a4078.46401442.jpg', '3937.00', '10.00', 1, b'1'),
(30, 10, 'Alloy Chain', 'Rich & Famous Elegant Silver Fashion Men Alloy Chain', 'img544a7976e55e33.01864804.jpg', '264.00', '5.00', 1, b'1'),
(31, 10, 'Nickel Plated Cuffli', 'Infinity Corporate Nickel Plated Cufflinks,Colur-Silver', 'img544a79d97347b1.60213390.jpg', '682.00', '5.00', 1, b'1'),
(32, 12, 'Adidas Clima BP Back', 'Colour-orange', 'img544a7a42dede57.28916188.jpg', '2999.00', '10.00', 1, b'1'),
(33, 12, 'Puma Wallet', 'Colour-Black', 'img544aaaac7ee171.80780185.jpg', '1199.00', '10.00', 1, b'1'),
(34, 12, 'WildHorn WHGW09 Wall', 'Genuine Leather ,Hand Crafted,Gift Packaging ,Fashionable', 'img544aab00bf8aa7.32529220.jpg', '580.00', '66.00', 1, b'1'),
(35, 12, 'Puma Belt', 'Burnt Olive And Dark Shadow ,Free size', 'img544aaba42d3495.62232556.jpg', '1299.00', '8.00', 1, b'1'),
(36, 11, 'Ray Ban Aviator Sung', 'Size:Medium,Large', 'img544aac3ed2bf50.89782158.jpg', '6490.00', '20.00', 1, b'1'),
(37, 11, 'Sports Sunglasses', 'Fastrack Sports/Wrap-around Sunglasses', 'img544aad13009c17.40734620.jpg', '795.00', '5.00', 1, b'1'),
(38, 11, 'Ray Ban Aviator Sung', 'Colour-Blue', 'img544aad67c4d056.08595542.jpg', '7990.00', '10.00', 1, b'1'),
(39, 13, 'Casual Top', '02D Casual Full Sleeve Striped Top,Size-XS,S', 'img544aae2f29aa94.83495889.jpg', '895.00', '5.00', 1, b'1'),
(40, 13, 'Casual Kurti', 'Abhishti Casual Sleeveless Printed Kurti', 'img544aae90121ae1.06195355.jpg', '999.00', '10.00', 1, b'1'),
(41, 18, 'Oye Dungaree', 'Size:2-3 yrs', 'img544b94ba225759.91768090.jpg', '899.00', '20.00', 1, b'1'),
(42, 18, 'Overdrive Checkered ', 'Size:2-3yrs', 'img544b95656d76c3.10392846.jpg', '599.00', '25.00', 1, b'1'),
(43, 18, 'Bella Moda Regular F', 'Size:3-4 yrs', 'img544b96072130e2.12834555.jpg', '800.00', '25.00', 1, b'1'),
(44, 19, 'Cupcake Celebrations', 'Size:4-5 yrs', 'img544b96be78f392.67599442.jpg', '1795.00', '10.00', 1, b'1'),
(45, 19, 'Pine Printed Pleated', 'Size:5-6 yrs', 'img544b970e96a4d5.63776796.jpg', '599.00', '20.00', 1, b'1'),
(46, 19, 'FS Mini Klub Regular', 'Size:5-6 yrs', 'img544b975f2194c7.49723991.jpg', '719.00', '20.00', 1, b'1'),
(47, 24, 'High School English ', 'Publisher: S. Chand Publisher', 'img544ba65280dac5.77870799.jpg', '200.00', '10.00', 1, b'1'),
(48, 24, 'PrepGuide for JEE Ma', 'Publisher: Arihant', 'img544ba6b176deb0.36179894.jpg', '951.00', '20.00', 1, b'1'),
(49, 24, 'Great Stories for Ch', 'Author: Ruskin Bond', 'img544ba6eaf3e638.18850657.jpg', '127.00', '35.00', 1, b'1'),
(50, 25, 'Parker Beta Premium ', 'Extra Fine Handwriting', 'img544ba727d56157.61065684.jpg', '102.00', '5.00', 1, b'1'),
(51, 25, 'OSR SR-FX991MS Scien', '12-Digit', 'img544ba79fedf169.14972942.jpg', '480.00', '5.00', 1, b'1'),
(52, 25, 'Elan Personal Diary', 'Ring Bound', 'img544ba7f328a217.54148283.jpg', '1036.00', '20.00', 1, b'1'),
(53, 26, 'The Accidental Prime', 'Author:Mr Sanjya Baru', 'img544c67149bb7d0.68831198.jpg', '227.00', '10.00', 1, b'1'),
(54, 17, 'Allen Solly Aviator ', 'Durable,Stylish', 'img544c65fdb548d0.90395626.jpg', '2345.00', '40.00', 1, b'1'),
(55, 26, 'Mr Mercedes', 'Author: Stephen King', 'img544ba889de6311.96045083.jpg', '265.00', '9.00', 1, b'1'),
(56, 26, 'My Epexriments with ', 'Author: Mahatma Gandhi', 'img544ba8c9ebc291.48293108.jpg', '29.00', '2.00', 1, b'1'),
(57, 27, 'Ozone OES-17 EN Std ', 'Digital,Easy to Install ,Auto Secure Mode ,Low Battery Indicator ,2 Emergency Keys', 'img544baac520e0a2.33296373.jpg', '2610.00', '40.00', 1, b'1'),
(58, 27, 'GBC C12 Manual Spira', 'Full-width Handle ,21 Holes,2:1 Pitch', 'img544bab66dc6f64.29441070.jpg', '14300.00', '20.00', 1, b'1'),
(59, 27, 'GBC 5000L 12 inch La', 'Auto Shut Off ,4 Roller System ,Countdown Timer', 'img544bac022a6d88.61051187.jpg', '25200.00', '20.00', 1, b'1'),
(60, 4, 'Nikon D5200 DSLR Cam', '24.1 Megapixels ,CMOS with 3 inch LCD', 'img544d0dba0fc411.12242445.jpg', '34500.00', '14.00', 1, b'1'),
(61, 4, 'Sony CyberShot ', '20.1 Megapixels ,Optical Zoom: 6x ,Super HAD CCD Image Sensor with 2.7 inch LCD', 'img544d0e35360348.81183088.jpg', '7490.00', '15.00', 1, b'1'),
(62, 4, 'Canon PowerShot ', '16 Megapixels ,Optical Zoom: 8x ,CCD Image Sensor with 2.7 inch LCD', 'img544d0e77ea51b9.92155656.jpg', '4676.00', '25.00', 1, b'1'),
(63, 5, 'Quantum InEar ', 'Wired Headphones', 'img544d0ee65708e6.48896720.jpg', '89.00', '64.00', 1, b'1'),
(64, 5, 'Sennheiser HD 180 ', 'Over the Ear Headphone ,Wired Connectivity ,Circum-aural Headphones ,Over the Head', 'img544d0fe2d60d18.08900548.jpg', '990.00', '10.00', 1, b'1'),
(65, 5, 'Philips Wired Headph', '	In the Ear Headphone ,Earbud ,50 mW Max Power ,15 mm Headphone Driver', 'img544d0fbe6b2263.61142388.jpg', '119.00', '10.00', 1, b'1'),
(66, 6, 'LG  LED TV', '50 cm', 'img544d1078559020.20688417.jpg', '9999.00', '30.00', 1, b'1'),
(67, 6, 'Philips LED TV', '81 cm', 'img544d10d3edede4.48601568.jpg', '21490.00', '25.00', 1, b'1'),
(68, 6, 'VU LED TV', '101 cm', 'img544d1137ccaf38.30956730.jpg', '29900.00', '40.00', 1, b'1'),
(69, 7, ' Panasonic Refrigera', '5 Star Rating ,Direct Cool ,Arko Wine ,Top Freezer Refrigerator', 'img544d119fdcc087.08914634.jpg', '13900.00', '20.00', 1, b'1'),
(70, 7, ' IFB Senator Aqua SX', 'Capacity: 8 kg ,Fully Automatic ', 'img544d1231248aa9.01844904.jpg', '36651.00', '30.00', 1, b'1'),
(71, 7, 'Blue Star Split AC', 'Capacity: 1.5 Ton ,3 Star Rating ,Power: 1580 W', 'img544d12a52433c9.29647068.jpg', '33820.00', '30.00', 1, b'1'),
(72, 20, 'Baby Love  Romper', 'Colour:Green', 'img544d136e8a7396.94251970.jpg', '249.00', '20.00', 1, b'1'),
(73, 20, 'Doodle Gathered Dres', 'Size:4-5 Yrs', 'img544d13bf45e588.65421163.jpg', '509.00', '30.00', 1, b'1'),
(74, 20, 'Ollington Ankle Leng', 'Size:0-12 months', 'img544d142b14e5b3.74503835.jpg', '99.00', '20.00', 1, b'1'),
(75, 21, 'Dark diaries Holiday', 'Author: Rachel Renee Russell', 'img544d15b0e4c2b1.04862421.jpg', '173.00', '30.00', 1, b'1'),
(76, 21, 'Just For Boys ', 'Publisher: PARRAGON PUBLISHING', 'img544d15eaf20901.66179129.jpg', '233.00', '20.00', 1, b'1'),
(77, 21, 'Moon Mountain ', 'Author: Bibhutibhushan ', 'img544d161c7dd8e5.00128793.jpg', '327.00', '20.00', 1, b'1'),
(78, 22, 'Airwalk Casual Shoes', 'Size 34', 'img544d166cb06271.87698991.jpg', '1099.00', '30.00', 1, b'1'),
(79, 22, 'Tweety Sports Sandal', 'Size :34,35,36', 'img544d16dd203ea3.45805028.jpg', '899.00', '20.00', 1, b'1'),
(80, 22, 'Puma Zebra Flip Flop', 'Colour:Blue', 'img544d172b146038.59247663.jpg', '699.00', '20.00', 1, b'1'),
(81, 23, 'Disney Clogs', 'Size 30', 'img544d1772e8d9a3.39209218.jpg', '399.00', '20.00', 1, b'1'),
(82, 23, 'Baby Looney Tunes Ca', 'Colour:Pink', 'img544d17ab54a751.33528365.jpg', '749.00', '30.00', 1, b'1'),
(83, 23, 'Disney Clogs', 'Size:34,36', 'img544d1806f3bbb7.70712605.jpg', '348.00', '20.00', 1, b'1'),
(84, 17, 'Ray Ban Oval Sunglas', 'Stylish', 'img544d189311ba61.58605425.jpg', '3990.00', '30.00', 1, b'1'),
(85, 17, 'Fastrack Aviator Sun', 'Stylish', 'img544d18cf294755.04851301.jpg', '1845.00', '30.00', 1, b'1'),
(86, 15, 'Butterflies Elegant ', 'Colour:pink', 'img544d19413e8b93.36375444.jpg', '1199.00', '30.00', 1, b'1'),
(87, 15, 'Fastrack Sling Bag ', 'Colour:Blue', 'img544dc40d7141a6.81455200.jpg', '1595.00', '20.00', 1, b'1'),
(88, 15, 'Alessia Wallet', 'Colour:Red', 'img544d19efbee9e4.01667027.jpg', '499.00', '20.00', 1, b'1'),
(89, 15, 'Kanvas Katha Tote', 'Colour:Pink', 'img544d1a3cc88c25.38201525.jpg', '249.00', '30.00', 1, b'1'),
(90, 14, 'Nell Wedges', 'Colour:Blue', 'img544d1aad737a52.86525552.jpg', '1285.00', '30.00', 1, b'1'),
(91, 14, 'Bruno Manetti Oria', 'Colour:Blue', 'img544d1b135c65b3.82302707.jpg', '1594.00', '30.00', 1, b'1'),
(92, 14, 'adidas Running Shoes', 'Size:4,5', 'img544d1ba33a1c14.84189621.jpg', '8999.00', '30.00', 1, b'1'),
(93, 14, 'Solovoga Mebowed Bel', 'Size:5', 'img544d1be747b4c4.24649184.jpg', '1316.00', '20.00', 1, b'1'),
(94, 14, 'Tresmode Meiglam', 'Size:36', 'img544d1c6980be75.26027763.jpg', '3200.00', '30.00', 1, b'1'),
(95, 14, 'Tresmode Cerom', 'Size: 37 38 30 40 41', 'img544d1cc076ba43.45723918.jpg', '2700.00', '20.00', 1, b'1'),
(96, 16, 'Casio Sheen Analog W', 'Colour:Silver', 'img544d1d6c150586.09661536.jpg', '6995.00', '30.00', 1, b'1'),
(97, 16, 'Titan Purple Glam Go', 'Colour:Rose Gold', 'img544d1de1da8d21.18556046.jpg', '8995.00', '40.00', 1, b'1'),
(98, 16, 'Sonata Analog Watch ', 'Colour:Black', 'img544d1e3318c940.58596884.jpg', '1699.00', '30.00', 1, b'1'),
(99, 13, 'Ishin Floral Print C', 'Colour:Black', 'img544d1e8f3b4956.03921246.jpg', '2590.00', '30.00', 1, b'1'),
(100, 13, 'Faballey Dress', 'Colour:Pink', 'img544d1ee914c963.58170834.jpg', '4990.00', '30.00', 1, b'1'),
(101, 13, 'GAS Skinny Fit Jeans', 'Size :26,28,32', 'img544d1f3168bf14.95861273.jpg', '4990.00', '20.00', 1, b'1'),
(102, 13, 'Samayra Regular Fit ', 'Colur:Red', 'img544d1f7589e1d3.33592584.jpg', '699.00', '30.00', 1, b'1'),
(103, 13, 'Campus Sutra Sweatsh', 'Colour:Blue', 'img544d1fc57a6ec7.74830317.jpg', '748.00', '30.00', 1, b'1'),
(104, 1, 'S9 ', 'AWESOME', 'img582b3b74a0af08.12051327.jpg', '995559.00', '9.00', 5, b'1'),
(105, 2, 'Lenovo Yoga ', 'Good Laptop', 'img582b3a3532de46.14432756.jpg', '51955.00', '9.00', 5, b'1'),
(106, 2, 'ACER', 'great', 'img582bea4fc44fc4.02409245.jpg', '32000.00', '120.00', 9, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `Id` bigint(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `UserId` varchar(100) NOT NULL,
  `Pin` int(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `oid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`Id`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `UserId`, `Pin`, `State`, `City`, `Country`, `oid`) VALUES
(1, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', 2147483647, '5', 144001, 'Punjab', 'JALANDHAR', 'India', 24),
(2, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', 2147483647, '5', 144001, 'Punjab', 'JALANDHAR', 'India', 25),
(3, 'asdf', 'asdf', 'admin@gmail.com', 'sadf', 2147483647, '5', 144001, 'Punjab', 'JALANDHAR', 'India', 26),
(4, 'Varun', 'Sharma', 'varunrocks27.sharma@gmail.com', 'Phagwara Gate', 2147483647, '5', 144001, 'Punjab', 'JALANDHAR', 'India', 27),
(5, 'Varun', 'Sharma', 'admin@gmail.com', 'Nugen', 2147483647, '5', 144, 'Punjab', 'JALANDHAR', 'India', 29),
(6, 'hello', 'hello', 'shivji@gmail.com', 'hello,hello', 1212121212, '6', 123456, 'hello', 'hello', 'hello', 30),
(7, '13', '234', 'piyushsehli@gmail.com', 'dfr', 2345, '6', 1245, 'gvdgd', 'gd', 'dfgg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` bigint(60) NOT NULL,
  `quantity` bigint(60) NOT NULL,
  `sold` bigint(60) NOT NULL,
  `productid` bigint(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `quantity`, `sold`, `productid`) VALUES
(1, 12, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `isactive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `CategoryId`, `SubCategoryName`, `isactive`) VALUES
(1, 1, 'Mobiles', b'1'),
(2, 1, 'Laptops', b'1'),
(3, 1, 'Tablets', b'1'),
(4, 1, 'Cameras', b'1'),
(5, 1, 'Headphones', b'1'),
(6, 1, 'Televisions', b'1'),
(7, 1, 'Home Appliances', b'1'),
(8, 2, 'All footwear', b'1'),
(9, 2, 'All Clothing', b'1'),
(10, 2, 'All Accessories', b'1'),
(11, 2, 'All Sunglasses', b'1'),
(12, 2, 'All Bags,Belts &amp; Wallets', b'1'),
(13, 3, 'All Clothing', b'1'),
(14, 3, 'All Footwear', b'1'),
(15, 3, 'All Bags,Belts &amp; Wallets', b'1'),
(16, 3, 'All Watches', b'1'),
(17, 3, 'All Sunglasses', b'1'),
(18, 4, 'Boys Clothing', b'1'),
(19, 4, 'Girls Clothing', b'1'),
(20, 4, 'Infant Clothing', b'1'),
(21, 4, 'Children Books', b'1'),
(22, 4, 'Boys Footwear', b'1'),
(23, 4, 'Girls Footwear', b'1'),
(24, 5, 'Books', b'1'),
(25, 5, 'Stationery', b'1'),
(26, 5, 'eBooks', b'1'),
(27, 5, 'Office Equipments', b'1'),
(28, 1, 'Chapatees', b'1'),
(29, 1, 'Green and Red Flowers', b'1'),
(30, 1, 'Programming Languages', b'1'),
(31, 5, 'Networking 1 and 2 Books', b'1'),
(32, 1, 'CA', b'1'),
(33, 4, '', b'1'),
(34, 4, '', b'1'),
(35, 4, '', b'1'),
(36, 4, '', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `tagline` text NOT NULL,
  `detail` text NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `p_line` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersaccount`
--

CREATE TABLE `usersaccount` (
  `id` bigint(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `SecurityQuestion` text NOT NULL,
  `SecurityAnswer` text NOT NULL,
  `IsActive` bit(1) NOT NULL,
  `IsAdmin` bit(1) NOT NULL,
  `RegDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersaccount`
--

INSERT INTO `usersaccount` (`id`, `UserName`, `Email`, `Password`, `SecurityQuestion`, `SecurityAnswer`, `IsActive`, `IsAdmin`, `RegDate`) VALUES
(2, 'ravleen', 'admin@gmail.com', '5e543256c480ac577d30f76f9120eb74', 'What is your pet name?', 'rocky', b'1', b'1', '2014-10-24 12:40:58'),
(3, 'rhythm', 'ravleen@gmail.com', '5e543256c480ac577d30f76f9120eb74', 'Which is your favourite color?', 'blue', b'1', b'1', '2014-10-27 09:42:36'),
(4, 'pallavi', 'pallavi@gmail.com', '5e543256c480ac577d30f76f9120eb74', 'Which is your favourite color?', 'red', b'1', b'1', '2014-10-27 09:48:32'),
(5, 'na', 'hey@gmail.com', '32af2d608c954bcb91ea263c589b0f12', 'na', 'na', b'1', b'1', '2014-10-27 16:29:39'),
(6, 'bolo', 'bol@gmail.com', '32af2d608c954bcb91ea263c589b0f12', 'What is your pet name?', 'dogui', b'1', b'1', '2014-10-27 16:54:17'),
(10, 'sp singh', 'spsingh@gmail.com', 'c017f22ccf9f3b398ecce5a40d1920a7', 'Which is your favourite color?', 'Red', b'1', b'1', '2015-06-27 17:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `userspersonal`
--

CREATE TABLE `userspersonal` (
  `Id` bigint(100) NOT NULL,
  `PersonalEmail` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `DOB` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userspersonal`
--

INSERT INTO `userspersonal` (`Id`, `PersonalEmail`, `FirstName`, `LastName`, `Phone`, `Address`, `State`, `City`, `Country`, `DOB`, `Gender`) VALUES
(3, 'bol@gmail.com', 'bol', 'hari', '9119911559', 'EG 817 C, Gobind Ghar', 'Punjab', 'Jalandhar', 'India', 2015, 'male'),
(4, 'sp@gmail.com', 'shiv', 'parvati', '9595959595', '817 gobindgarh', 'Punjab', 'Jalandhar', 'India', 2015, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isactive` (`isactive`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordermaster`
--
ALTER TABLE `ordermaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`,`quantity`,`sold`,`productid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CategoryId` (`CategoryId`),
  ADD KEY `SubCategoryName` (`SubCategoryName`),
  ADD KEY `isactive` (`isactive`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersaccount`
--
ALTER TABLE `usersaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userspersonal`
--
ALTER TABLE `userspersonal`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `Id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ordermaster`
--
ALTER TABLE `ordermaster`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `Id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usersaccount`
--
ALTER TABLE `usersaccount`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userspersonal`
--
ALTER TABLE `userspersonal`
  MODIFY `Id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
