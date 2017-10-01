-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 03:33 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'patelakshay55@gmail.com', 'apadmin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Puma'),
(2, 'Peter England'),
(3, 'Aeropostale'),
(4, 'Tommy Hilfiger'),
(5, 'Replay'),
(6, 'Symbol');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(2, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Jeans'),
(2, 'T-Shirts'),
(3, 'Formal Shirts'),
(4, 'Polos'),
(6, 'Suits & Blazers');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(13, '::1', 'Akshay Patel', 'patelakshay55@gmail.com', 'akshay', 'India', 'Mumbai', '9833244989', 'Jogeshwari', 'DSC_2038.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Trendy Trotters Cotton Blue Jeans', 500, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Material: Denim</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Fit Type: Regular Fit</span></li>\r\n</ul>', 'jeans1.jpg', 'jeans,cotton,puma,blue'),
(4, 2, 5, 'Replay Men Jersey T-Shirt Offical', 3000, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">100% Cotton</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Regular fit</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Gentle wash at 30 degree celsius, do not bleach, iron 110 degree celsius max, do not dry clean, do not tumble dry, wash inside out</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Made in Bangladesh</span></li>\r\n</ul>', 'replay1.jpg', 'replay,tshirt,men'),
(2, 2, 4, 'Tommy Hilfiger Men Cotton T-Shirt', 450, '<p>round neck</p>\r\n<p>100%fit</p>\r\n<p>cottton</p>', 'tommy hilf2.jpg', 'tshirt,men,cotton'),
(10, 3, 2, 'United of Benetton Men Casual Shirt', 804, '<p>&nbsp;</p>\r\n<div id="featurebullets_feature_div" class="feature" style="box-sizing: border-box; color: #111111; font-family: Arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;" data-feature-name="featurebullets">\r\n<div id="feature-bullets" class="a-section a-spacing-medium a-spacing-top-small" style="box-sizing: border-box; margin-top: 10px !important; margin-bottom: 0px;">\r\n<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: none !important; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">100% Cotton</span></li>\r\n<li style="box-sizing: border-box; list-style: none !important; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Normal wash</span></li>\r\n<li style="box-sizing: border-box; list-style: none !important; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Slim fit</span></li>\r\n<li style="box-sizing: border-box; list-style: none !important; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Made in India</span></li>\r\n</ul>\r\n</div>\r\n</div>', 'ucb1.jpg', 'formal,shirt,men'),
(12, 4, 4, 'Tommy Hilfiger Men Classic-Fit Polo T-Shirt', 400, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; -webkit-font-smoothing: antialiased; font-family: HelveticaNeue-Light, Helvetica-Light, HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px; -webkit-font-smoothing: antialiased;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block; -webkit-font-smoothing: antialiased;">100% Cotton</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px; -webkit-font-smoothing: antialiased;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block; -webkit-font-smoothing: antialiased;">Imported</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px; -webkit-font-smoothing: antialiased;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block; -webkit-font-smoothing: antialiased;">Classic fit.</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px; -webkit-font-smoothing: antialiased;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block; -webkit-font-smoothing: antialiased;">100% cotton.</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px; -webkit-font-smoothing: antialiased;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block; -webkit-font-smoothing: antialiased;">Ribbed collar and cuffs, contrast under collar, microflag at chest.</span></li>\r\n</ul>', 'tommy hilf1.jpg', 'polo,men'),
(13, 6, 6, 'Fashion Black Party Festive Blazer', 1900, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">front having single button,two vents at back</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">size:extra slim fit</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">designed for party ,festive purpose</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">fabric:RAYMOND cotton</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">verify sizechart of BREGEO before placing order</span></li>\r\n</ul>', 'suit1.jpg', 'men,blazer,party,black'),
(14, 6, 6, 'Fashion black single breasted waistcoat', 1250, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Style: SINGLE BREASTED</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Front:Classic Collar</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Fabric:Glace COTTON</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Size: Size:SLIM FIT Order according to your chest size</span></li>\r\n</ul>', 'suit2.jpg', 'waistcoat,men,blazer,fashion'),
(15, 6, 6, 'Yepme Trott Party Blazer', 2747, '<ul class="a-vertical a-spacing-none" style="box-sizing: border-box; color: #949494; padding: 0px; font-family: Arial, sans-serif; font-size: 13px; margin: 0px 0px 0px !important 18px;">\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Material: Polyester</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Machine wash in cold water. Do not bleach. Tumble dry.</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Regular Fit</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Fashion Blazers</span></li>\r\n<li style="box-sizing: border-box; list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="box-sizing: border-box; color: #111111; word-wrap: break-word; display: block;">Color: Grey</span></li>\r\n</ul>', 'suit3.jpg', 'fit,blazer,men,party'),
(16, 6, 6, 'Vishu Indian Fashion Blazer', 2500, '<p>Slim Fit</p>\r\n<p>Best Blazer for marriage,Haldi.</p>\r\n<p>One of the Top Shaadi blazer.&nbsp;</p>', 'IMG-20161121-WA0008.jpg', 'vishu,men,blazer,fashion,indian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
