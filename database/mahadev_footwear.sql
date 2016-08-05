-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2014 at 11:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahadev_footwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contant` text NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `contant`, `status`) VALUES
(1, '<div style=" text-align:justify; line-height:16px;">\r\n	<div>\r\n		<span style="font-size:12px;"><strong>Mahadev Footwear</strong> Established In 1980 &amp; highlighted our brand across In India. So, after delivering quality based &amp; maximum satisfactory products which lead us to getting business from all the corners Of the India. There are latest Equipped Technology &amp; Machinery in our Manufacturing Plant that results outstanding quality &amp; able to deliver our products on time with maximum Satisfactory Results.</span></div>\r\n	<div>\r\n		<span style="font-size:12px;">Offering the ultimate design, comfort and fit, each<strong> &ldquo;Mahadev Footwear&rdquo;</strong> products is the manifestation of high standards of workmanship, latest technology and thoughtful engineering. No wonder, <strong>&ldquo;Mahadev Footwear&rdquo;</strong>, today, is synonymous with quality and performance for millions across the country.</span></div>\r\n	<div>\r\n		<span style="font-size:12px;">With more than two &amp; half decades of experience in this industry, the company targets Valuable Customer &amp; Innovation in product development (materials, properties and design) is the key to our efforts to offer the best products available in the market and to maintain safety and comfort on the highest level.</span></div>\r\n	<div>\r\n		<span style="font-size:12px;">As a market leader with years of experience, <strong>&ldquo;Mahadev Footwear&rdquo;</strong> is equipped to meet the demanding needs of the fast growing India and ensure that the growth is maintained along with a competitive edge</span></div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		<span style="font-size:14px;"><strong>About Company&rsquo;s Management:</strong></span></div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		<span style="font-size:14px;"><strong>Focus &amp; Philosphy:</strong></span></div>\r\n	<div>\r\n		<span style="font-size:12px;"><strong>&ldquo;Mahadev Footwear&rdquo;</strong> was conceptualized with a lot of hope and hard work by an outstanding pilot team of brilliant Indians.</span></div>\r\n	<div>\r\n		<strong><span style="font-size:12px;">Our Company&rsquo;s Values:</span></strong></div>\r\n	<div>\r\n		<span style="font-size:12px;">The Company&rsquo;s Values <strong>&ldquo;Mahadev Footwear&rdquo;</strong>. That lives by are exclusive in their overpowering simplicity and absolute effectiveness. They are:</span></div>\r\n	<ul>\r\n		<li>\r\n			<span style="font-size:12px;">Trust</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Honesty</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Transparency</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Employee Satisfaction</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Customer Orientation</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Team Orientation&nbsp;</span></li>\r\n	</ul>\r\n	<div>\r\n		<span style="font-size:14px;"><strong>Our Team Objectives:</strong></span></div>\r\n	<div>\r\n		<span style="font-size:12px;">Our Team Objectives provide a single-minded focus to every member of the <strong>&ldquo;Mahadev Footwear&rdquo; </strong>family. They are:</span></div>\r\n	<ul>\r\n		<li>\r\n			<span style="font-size:12px;">Developing behavior as well skilled training through effective training</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Product innovation through design and development</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Meet &amp; exceed customer requirements (both internal &amp; external)</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Increased customer satisfaction</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Quality improvement through control of rejection</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Optimum utilization of resources</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Waste reduction at all stages</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">To explore national and international markets</span></li>\r\n	</ul>\r\n	<div>\r\n		<span style="font-size:14px;"><strong>About The Products Manufacturing In our Company:</strong></span></div>\r\n	<ul>\r\n		<li>\r\n			<span style="font-size:12px;">PU FAIR</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">TASCO</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">GOLA SHOES</span></li>\r\n	</ul>\r\n	<div>\r\n		<span style="font-size:14px;"><strong>PODUCTS PORTFOLIO:</strong></span></div>\r\n	<div>\r\n		<span style="font-size:12px;">We are engaged in offering a wide range of footwear and shoes. These footwear are known for their superior quality and durability.Some of the salient features of our products include:</span></div>\r\n	<ul>\r\n		<li>\r\n			<span style="font-size:12px;">Skin friendly&nbsp;</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Comfort fit&nbsp;</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">&nbsp;Wear and tear resistant&nbsp;</span></li>\r\n		<li>\r\n			<span style="font-size:12px;">Strong</span></li>\r\n	</ul>\r\n</div>', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) NOT NULL,
  `brand_order` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `url` varchar(100) NOT NULL,
  `addby` varchar(50) NOT NULL,
  `adddate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `editby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_order`, `status`, `url`, `addby`, `adddate`, `editdate`, `editby`) VALUES
(4, 'Tasco', 2, 'Y', 'tasco', 'Administrator', '2014-09-30 10:18:06', '2014-10-01 16:47:33', 'Administrator'),
(5, 'Pu Fair', 1, 'Y', 'pu-fair', 'Administrator', '2014-09-30 15:24:56', '2014-10-01 16:47:46', 'Administrator'),
(6, 'Gola Shoes', 3, 'Y', 'gola-shoes', 'Administrator', '2014-10-02 11:32:22', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `catorder` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `url` varchar(100) NOT NULL,
  `addby` varchar(50) NOT NULL,
  `adddate` datetime NOT NULL,
  `editdate` datetime NOT NULL,
  `editby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `brand_id`, `catname`, `catorder`, `status`, `url`, `addby`, `adddate`, `editdate`, `editby`) VALUES
(8, 4, 'Shoes', 1, 'Y', 'shoes', 'Administrator', '2014-09-30 10:31:16', '2014-09-30 17:28:49', 'Administrator'),
(10, 4, 'Slippers', 2, 'Y', 'slippers', 'Administrator', '2014-09-30 11:15:42', '0000-00-00 00:00:00', '0'),
(11, 5, 'PU Sandals', 1, 'Y', 'pu-sandals', 'Administrator', '2014-09-30 18:41:49', '2014-10-07 10:01:36', 'Administrator'),
(12, 6, 'Shoes', 1, 'Y', 'shoes', 'Administrator', '2014-10-02 11:33:04', '0000-00-00 00:00:00', '0'),
(13, 5, 'PU Slippers', 2, 'Y', 'pu-slippers', 'Administrator', '2014-10-07 10:02:17', '0000-00-00 00:00:00', '0'),
(14, 4, 'Sandals', 3, 'Y', 'sandals', 'Administrator', '2014-10-08 09:47:11', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contant` text NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `contant`, `status`) VALUES
(1, '<div>\r\n	<span style="color:#000000;"><span style="font-size:14px;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mahadev Footwear</strong></span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Contact Person &nbsp;: &nbsp;</strong>Mr. Pradeep Goel</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Mobile &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;</strong>+ (91)-9212767018</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+ (91)-9910792603</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Contact Person &nbsp;: &nbsp;</strong>Mr. Vinod Kumar</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Mobile &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;</strong>+ (91)-9213092201</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;</strong>G-2,(Basement) Udyog Nagar </span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Peragarhi,New Delhi-41</span></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;"><strong>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;</strong>pradeep44014401@gmail.com</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE IF NOT EXISTS `infrastructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contant` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `contant`, `status`) VALUES
(1, '<div>\r\n	<span style="font-size:14px;"><strong><span style="color:#000000;">ABOUT OUR INFRASTRUCTURE:</span></strong></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;">Our state-of-the-art infrastructure unit enables us to take up bulk assignments within the stipulated time frame. The sophisticated manufacturing unit helps us to manufacture best quality products for our esteemed clients. Our manufacturing unit is installed with latest machines and equipment like <strong>PU FAIR</strong>, <strong>TASCO</strong> and <strong>GOLA</strong> facility.</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-size:14px;"><strong><span style="color:#000000;">ABOUT THE TEAM WORK IN OUR COMPANY:</span></strong></span></div>\r\n<div>\r\n	<span style="color:#000000;"><span style="font-size:12px;">Our organization is backed by a team of skilled and dedicated artisans and craftsmen who are committed to produce footwear for Ladies and Gents, corresponding to the specific needs of our clients. Their immense passion and tremendous efforts enable us a quality range of shoes and sandals known for their exquisite designs, light weight and durability. We provide them regular training sessions that equip them with the latest knowhow in the industry. Our professionals&rsquo; experience enables smooth operations at each stage and in each section up to quality and packaging &amp; delivery.</span></span></div>\r\n<div>\r\n	<span style="font-size:14px;"><strong><span style="color:#000000;">Our team comprises:</span></strong></span></div>\r\n<ul>\r\n	<li>\r\n		<span style="font-size:12px;"><span style="color: rgb(0, 0, 0);">Designers</span></span></li>\r\n	<li>\r\n		<span style="font-size:12px;"><span style="color:#000000;">Manufacturing staff</span></span></li>\r\n	<li>\r\n		<span style="font-size:12px;"><span style="color:#000000;">Quality controllers</span></span></li>\r\n	<li>\r\n		<span style="font-size:12px;"><span style="color:#000000;">Warehouse and packaging staff</span></span></li>\r\n</ul>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_type` varchar(25) NOT NULL,
  `isValid` varchar(1) NOT NULL,
  `last_login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_password`, `login_type`, `isValid`, `last_login`) VALUES
('administrator', 'administrator', 'Administrator', '', '2014-10-20, 06:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `adddate` datetime NOT NULL,
  `addby` varchar(50) NOT NULL,
  `editdate` datetime NOT NULL,
  `editby` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `url` varchar(50) NOT NULL,
  `product_order` int(11) NOT NULL,
  `new_arrival` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=357 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `cat_id`, `sub_id`, `productname`, `product_size`, `product_color`, `imagepath`, `adddate`, `addby`, `editdate`, `editby`, `status`, `url`, `product_order`, `new_arrival`) VALUES
(242, 4, 8, 10, '010', '3*4', 'Pink, Purple', '1412681373footwear-1.png', '2014-10-07 16:59:33', 'Administrator', '2014-10-07 18:44:34', 'Administrator', 'Y', '010', 1, 'Y'),
(243, 4, 8, 10, '011', '8*10', 'Gray', '1412681774footwear-2.png', '2014-10-07 17:06:14', 'Administrator', '2014-10-17 11:13:43', 'Administrator', 'Y', '011', 2, 'Y'),
(244, 4, 8, 10, '', '', '', '1412681797footwear-3.png', '2014-10-07 17:06:37', 'Administrator', '2014-10-20 11:41:53', 'Administrator', 'Y', '', 3, 'Y'),
(245, 4, 8, 10, '', '', '', '1412681886footwear-4.png', '2014-10-07 17:08:06', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(246, 4, 8, 10, '', '', '', '1412681906footwear-5.png', '2014-10-07 17:08:26', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(247, 4, 8, 10, '', '', '', '1412681938footwear-6.png', '2014-10-07 17:08:58', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 6, ''),
(248, 4, 8, 10, '', '', '', '1412681958footwear-7.png', '2014-10-07 17:09:18', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 7, ''),
(249, 4, 8, 10, '', '', '', '1412681977footwear-8.png', '2014-10-07 17:09:37', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 8, ''),
(250, 4, 8, 10, '', '', '', '1412681994footwear-9.png', '2014-10-07 17:09:54', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 9, ''),
(251, 4, 8, 10, '', '', '', '1412682012footwear-10.png', '2014-10-07 17:10:12', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 10, ''),
(252, 4, 8, 10, '', '', '', '1412682031footwear-11.png', '2014-10-07 17:10:31', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 11, ''),
(253, 4, 8, 10, '', '', '', '1412682053footwear-12.png', '2014-10-07 17:10:53', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 12, ''),
(254, 4, 8, 10, '', '', '', '1412682205footwear-13.png', '2014-10-07 17:13:25', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 13, ''),
(255, 4, 8, 10, '', '', '', '1412682224footwear-14.png', '2014-10-07 17:13:44', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 14, ''),
(256, 4, 8, 10, '', '', '', '1412682243footwear-15.png', '2014-10-07 17:14:03', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 15, ''),
(257, 4, 8, 10, '', '', '', '1412682260footwear-16.png', '2014-10-07 17:14:20', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 16, ''),
(258, 4, 8, 10, '', '', '', '1412682279footwear-17.png', '2014-10-07 17:14:39', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 17, ''),
(259, 4, 8, 10, '', '', '', '1412682320footwear-18.png', '2014-10-07 17:15:20', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 18, ''),
(260, 4, 8, 10, '', '', '', '1412682342footwear-19.png', '2014-10-07 17:15:42', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 19, ''),
(261, 4, 8, 10, '', '', '', '1412682362footwear-20.png', '2014-10-07 17:16:02', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 20, ''),
(262, 4, 8, 8, '', '', '', '1412682406footwear-21.png', '2014-10-07 17:16:46', 'Administrator', '2014-10-07 18:54:50', 'Administrator', 'Y', '', 1, ''),
(263, 4, 8, 8, '', '', '', '1412682422footwear-22.png', '2014-10-07 17:17:02', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(264, 4, 8, 8, '', '', '', '1412682447footwear-23.png', '2014-10-07 17:17:27', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(265, 4, 8, 8, '', '', '', '1412682469footwear-24.png', '2014-10-07 17:17:50', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(266, 4, 8, 8, '', '', '', '1412682490footwear-25.png', '2014-10-07 17:18:10', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(267, 4, 8, 8, '', '', '', '1412682509footwear-26.png', '2014-10-07 17:18:30', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 6, ''),
(268, 4, 8, 8, '', '', '', '1412682525footwear-27.png', '2014-10-07 17:18:45', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 7, ''),
(269, 4, 8, 8, '', '', '', '1412682542footwear-28.png', '2014-10-07 17:19:02', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 8, ''),
(270, 4, 8, 8, '', '', '', '1412682560footwear-29.png', '2014-10-07 17:19:20', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 9, ''),
(271, 4, 8, 8, '', '', '', '1412682579footwear-30.png', '2014-10-07 17:19:39', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 10, ''),
(272, 4, 8, 8, '', '', '', '1412682596footwear-31.png', '2014-10-07 17:19:56', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 11, ''),
(273, 4, 8, 8, '', '', '', '1412682613footwear-32.png', '2014-10-07 17:20:13', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 12, ''),
(274, 4, 8, 8, '', '', '', '1412682634footwear-33.png', '2014-10-07 17:20:34', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 13, 'Y'),
(275, 4, 8, 8, '', '', '', '1412682653footwear-34.png', '2014-10-07 17:20:53', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 14, ''),
(276, 4, 8, 9, '', '', '', '1412682667footwear-35.png', '2014-10-07 17:21:07', 'Administrator', '2014-10-07 18:17:20', 'Administrator', 'Y', '', 1, ''),
(277, 4, 8, 9, '', '', '', '1412688196footwear-36.png', '2014-10-07 18:53:16', 'Administrator', '2014-10-07 18:56:02', 'Administrator', 'Y', '', 2, ''),
(278, 4, 8, 9, '', '', '', '1412688384footwear-37.png', '2014-10-07 18:56:24', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(279, 4, 8, 9, '', '', '', '1412688412footwear-38.png', '2014-10-07 18:56:52', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(280, 4, 8, 8, '', '', '', '1412688475footwear-39.png', '2014-10-07 18:57:55', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 15, ''),
(281, 4, 10, 12, '', '', '', '1412688497footwear-40.png', '2014-10-07 18:58:17', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(282, 4, 10, 12, '', '', '', '1412688516footwear-41.png', '2014-10-07 18:58:36', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(283, 4, 8, 8, '', '', '', '1412688789footwear-43.png', '2014-10-07 19:03:09', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 16, ''),
(284, 4, 10, 12, '', '', '', '1412688812footwear-44.png', '2014-10-07 19:03:32', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(285, 4, 10, 12, '', '', '', '1412688827footwear-45.png', '2014-10-07 19:03:47', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(286, 4, 14, 22, '', '', '', '1412742196footwear-42.png', '2014-10-08 09:53:16', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(287, 4, 10, 12, '', '', '', '1412746870footwear-46.png', '2014-10-08 11:11:10', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(288, 4, 10, 12, '', '', '', '1412746899footwear-47.png', '2014-10-08 11:11:40', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 6, ''),
(289, 4, 14, 24, '', '', '', '1412746970footwear-48.png', '2014-10-08 11:12:50', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(290, 4, 14, 24, '', '', '', '1412746993footwear-49.png', '2014-10-08 11:13:13', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(291, 4, 14, 24, '', '', '', '1412747014footwear-50.png', '2014-10-08 11:13:34', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(292, 4, 14, 24, '', '', '', '1412747033footwear-51.png', '2014-10-08 11:13:53', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(293, 4, 14, 24, '', '', '', '1412747057footwear-52.png', '2014-10-08 11:14:17', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(294, 4, 8, 8, '', '', '', '1412747118footwear-53.png', '2014-10-08 11:15:18', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 17, ''),
(295, 4, 8, 8, '', '', '', '1412747138footwear-55.png', '2014-10-08 11:15:38', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 18, ''),
(296, 4, 10, 11, '', '', '', '1412747193footwear-54.png', '2014-10-08 11:16:33', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(297, 4, 8, 8, '', '', '', '1412750323footwear-56.png', '2014-10-08 12:08:43', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 19, ''),
(298, 6, 12, 20, '', '', '', '1412750434footwear-57.png', '2014-10-08 12:10:34', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(299, 6, 12, 21, '', '', '', '1412750462footwear-58.png', '2014-10-08 12:11:03', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(300, 5, 11, 14, '', '', '', '1412750523footwear-59.png', '2014-10-08 12:12:03', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(301, 6, 12, 21, '', '', '', '1412750554footwear-60.png', '2014-10-08 12:12:34', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(302, 5, 11, 14, '', '', '', '1412750582footwear-61.png', '2014-10-08 12:13:02', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(303, 5, 11, 14, '', '', '', '1412750603footwear-62.png', '2014-10-08 12:13:23', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(304, 5, 11, 14, '', '', '', '1412750620footwear-63.png', '2014-10-08 12:13:40', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(305, 5, 11, 14, '', '', '', '1412774208footwear-64.png', '2014-10-08 18:46:48', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(306, 5, 11, 14, '', '', '', '1412774247footwear-65.png', '2014-10-08 18:47:27', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 6, ''),
(307, 5, 11, 14, '', '', '', '1412774286footwear-66.png', '2014-10-08 18:48:06', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 7, 'Y'),
(308, 5, 11, 14, '', '', '', '1412774336footwear-67.png', '2014-10-08 18:48:56', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 8, ''),
(309, 5, 11, 14, '', '', '', '1412774376footwear-68.png', '2014-10-08 18:49:36', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 9, ''),
(310, 5, 11, 15, '', '', '', '1412774412footwear-69.png', '2014-10-08 18:50:12', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(311, 5, 11, 14, '', '', '', '1412774484footwear-70.png', '2014-10-08 18:51:24', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 10, ''),
(312, 5, 11, 14, '', '', '', '1412774518footwear-71.png', '2014-10-08 18:51:58', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 11, ''),
(313, 5, 11, 14, '', '', '', '1412774549footwear-72.png', '2014-10-08 18:52:29', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 12, ''),
(314, 5, 11, 14, '', '', '', '1412774571footwear-73.png', '2014-10-08 18:52:52', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 13, ''),
(315, 5, 13, 17, '', '', '', '1412774643footwear-74.png', '2014-10-08 18:54:03', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(316, 5, 11, 14, '', '', '', '1412774705footwear-75.png', '2014-10-08 18:55:05', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 14, ''),
(317, 5, 11, 14, '', '', '', '1412774724footwear-76.png', '2014-10-08 18:55:24', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 15, ''),
(318, 5, 13, 18, '', '', '', '1412774758footwear-77.png', '2014-10-08 18:55:58', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(319, 5, 11, 14, '', '', '', '1412774807footwear-78.png', '2014-10-08 18:56:47', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 16, ''),
(320, 5, 11, 14, '', '', '', '1412774827footwear-79.png', '2014-10-08 18:57:07', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 17, ''),
(321, 5, 11, 14, '', '', '', '1412774850footwear-80.png', '2014-10-08 18:57:30', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 18, ''),
(322, 5, 13, 18, '', '', '', '1412774870footwear-81.png', '2014-10-08 18:57:50', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(323, 5, 13, 18, '', '', '', '1412774896footwear-82.png', '2014-10-08 18:58:16', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 3, ''),
(324, 5, 13, 18, '', '', '', '1412774916footwear-83.png', '2014-10-08 18:58:36', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 4, ''),
(325, 5, 11, 16, '', '', '', '1412774952footwear-84.png', '2014-10-08 18:59:12', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 1, ''),
(326, 5, 11, 16, '', '', '', '1412774971footwear-85.png', '2014-10-08 18:59:31', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(327, 5, 13, 18, '', '', '', '1412775019footwear-86.png', '2014-10-08 19:00:19', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 5, ''),
(328, 5, 13, 18, '', '', '', '1412775042footwear-87.png', '2014-10-08 19:00:42', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 6, ''),
(329, 5, 11, 14, '', '', '', '1412775188footwear-88.png', '2014-10-08 19:03:08', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 19, ''),
(330, 5, 11, 15, '', '', '', '1412775225footwear-89.png', '2014-10-08 19:03:45', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, ''),
(331, 5, 11, 14, '', '', '', '1412775247footwear-90.png', '2014-10-08 19:04:07', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 20, 'Y'),
(332, 5, 11, 14, '', '', '', '1412840780footwear-91.png', '2014-10-08 19:05:06', 'Administrator', '2014-10-09 13:16:20', 'Administrator', 'Y', '', 21, ''),
(333, 5, 11, 14, '', '', '', '1412840810footwear-92.png', '2014-10-08 19:05:28', 'Administrator', '2014-10-09 13:16:51', 'Administrator', 'Y', '', 22, 'Y'),
(334, 5, 13, 18, '', '', '', '1412775374footwear-93.png', '2014-10-08 19:06:14', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 7, ''),
(335, 5, 13, 18, '', '', '', '1412775395footwear-94.png', '2014-10-08 19:06:35', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 8, ''),
(336, 5, 13, 18, '', '', '', '1412775442footwear-95.png', '2014-10-08 19:07:22', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 9, ''),
(337, 5, 13, 18, '', '', '', '1412775461footwear-96.png', '2014-10-08 19:07:41', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 10, ''),
(338, 5, 13, 18, '', '', '', '1412775493footwear-97.png', '2014-10-08 19:08:13', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 11, ''),
(339, 5, 13, 18, '', '', '', '1412775518footwear-98.png', '2014-10-08 19:08:38', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 12, ''),
(340, 5, 13, 18, '', '', '', '1412775565footwear-99.png', '2014-10-08 19:09:25', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 13, ''),
(341, 5, 13, 18, '', '', '', '1412775583footwear-100.png', '2014-10-08 19:09:43', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 14, ''),
(342, 5, 13, 18, '', '', '', '1412775600footwear-101.png', '2014-10-08 19:10:00', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 15, ''),
(343, 5, 13, 18, '', '', '', '1412775616footwear-102.png', '2014-10-08 19:10:16', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 16, ''),
(344, 5, 13, 18, '', '', '', '1412775631footwear-103.png', '2014-10-08 19:10:31', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 17, ''),
(345, 5, 13, 18, '', '', '', '1412775647footwear-104.png', '2014-10-08 19:10:47', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 18, ''),
(346, 5, 13, 18, '', '', '', '1412838999footwear-105.png', '2014-10-09 12:46:39', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 19, ''),
(347, 5, 13, 18, '', '', '', '1412839036footwear-106.png', '2014-10-09 12:47:16', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 20, 'Y'),
(348, 5, 13, 18, '', '', '', '1412839058footwear-107.png', '2014-10-09 12:47:38', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 21, ''),
(349, 5, 11, 14, '', '', '', '1412839108footwear-108.png', '2014-10-09 12:48:28', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 23, ''),
(350, 5, 13, 18, '', '', '', '1412839183footwear-109.png', '2014-10-09 12:49:43', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 22, ''),
(351, 5, 13, 18, '', '', '', '1412839202footwear-110.png', '2014-10-09 12:50:03', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 23, ''),
(352, 5, 13, 18, '', '', '', '1412839233footwear-111.png', '2014-10-09 12:50:33', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 24, ''),
(353, 5, 13, 18, '', '', '', '1412839251footwear-112.png', '2014-10-09 12:50:51', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 25, ''),
(354, 5, 13, 18, '', '', '', '1412839269footwear-113.png', '2014-10-09 12:51:09', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 26, ''),
(355, 5, 13, 18, '', '', '', '1412839285footwear-114.png', '2014-10-09 12:51:25', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 27, ''),
(356, 5, 13, 17, '', '', '', '1412839318footwear-115.png', '2014-10-09 12:51:58', 'Administrator', '0000-00-00 00:00:00', '0', 'Y', '', 2, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE IF NOT EXISTS `quality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contant` text NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `contant`, `status`) VALUES
(1, '<div>\r\n	<span style="font-size:12px;">We take pleasure to introduce ourselves as a quality centric organization engaged in manufacturing and supplying a wide range of Footwear for Ladies and Gents. In addition, we take strict measures to achieve a quality in compliance with international standards. Our manufacturing process is closely observed and monitored by our quality analysts at each stage of production. The products finally pass through a rigorous quality check for a perfect finish, before being supplied to the clients.</span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-size:14px;"><strong>Our products are tested on following well-defined quality parameters:</strong></span></div>\r\n<ul>\r\n	<li>\r\n		<span style="font-size:12px;">Smooth finish</span></li>\r\n	<li>\r\n		<span style="font-size:12px;">Wear and tear resistance</span></li>\r\n	<li>\r\n		<span style="font-size:12px;">Durable stitching</span></li>\r\n	<li>\r\n		<span style="font-size:12px;">Water-proof finish</span></li>\r\n</ul>\r\n<div>\r\n	<span style="font-size:14px;"><strong>CLIENT SATISFACTION @ FIRST:</strong></span></div>\r\n<div>\r\n	<span style="font-size:12px;">Owing to our client centric approach, we have been able to achieve high levels of client satisfaction. We offer our clients a broad array of footwear for Ladies and Gents that are manufactured using high quality material and advanced technology which help us attain complete client satisfaction. Our company is highly appreciated throughout the world for creating these products as per the requirements and specifications of clients, and delivering them according to the promised schedule. We also assure reasonable prices to the clients and optimally satisfy them.</span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="font-size:14px;"><strong>PACKAGING &amp; DELIVERY OF OUR PRODUCTS:&nbsp;</strong></span></div>\r\n<div>\r\n	<span style="font-size:12px;">Warehousing and Packaging are significant parts of the business for a properly scheduled release of the products. We have developed a warehouse and packaging unit that ensures secure and safe storage of Footwear for Ladies and Gents. Our competent packaging and storekeepers keep a strict eye on storage and packaging. In addition, these products are packed using high quality packaging material that enables us to safely deliver these products to clients.</span></div>\r\n', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcatname` varchar(50) NOT NULL,
  `subcategory_order` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `adddate` datetime NOT NULL,
  `addby` varchar(50) NOT NULL,
  `editby` varchar(50) NOT NULL,
  `editdate` datetime NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `brand_id`, `cat_id`, `subcatname`, `subcategory_order`, `status`, `adddate`, `addby`, `editby`, `editdate`, `url`) VALUES
(8, 4, 8, 'Gents Shoes', 1, 'Y', '2014-10-07 10:04:00', 'Administrator', 'Administrator', '2014-10-07 10:08:59', 'gents-shoes'),
(9, 4, 8, 'Ladies Shoes', 2, 'Y', '2014-10-07 10:04:15', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-shoes'),
(10, 4, 8, 'Kids Shoes', 3, 'Y', '2014-10-07 10:04:29', 'Administrator', '0', '0000-00-00 00:00:00', 'kids-shoes'),
(11, 4, 10, 'Gents Slippers', 1, 'Y', '2014-10-07 10:05:00', 'Administrator', 'Administrator', '2014-10-07 10:09:11', 'gents-slippers'),
(12, 4, 10, 'Ladies Slippers', 2, 'Y', '2014-10-07 10:05:17', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-slippers'),
(13, 4, 10, 'Kids Slippers', 3, 'Y', '2014-10-07 10:05:32', 'Administrator', '0', '0000-00-00 00:00:00', 'kids-slippers'),
(14, 5, 11, 'Gents PU Sandals', 1, 'Y', '2014-10-07 10:05:56', 'Administrator', '0', '0000-00-00 00:00:00', 'gents-pu-sandals'),
(15, 5, 11, 'Ladies PU Sandals', 2, 'Y', '2014-10-07 10:06:12', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-pu-sandals'),
(16, 5, 11, 'Kids PU Sandals', 3, 'Y', '2014-10-07 10:06:33', 'Administrator', '0', '0000-00-00 00:00:00', 'kids-pu-sandals'),
(17, 5, 13, 'Gents PU Slippers', 1, 'Y', '2014-10-07 10:06:51', 'Administrator', '0', '0000-00-00 00:00:00', 'gents-pu-slippers'),
(18, 5, 13, 'Ladies PU Slippers', 2, 'Y', '2014-10-07 10:07:07', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-pu-slippers'),
(19, 5, 13, 'Kids PU Slippers', 3, 'Y', '2014-10-07 10:07:24', 'Administrator', '0', '0000-00-00 00:00:00', 'kids-pu-slippers'),
(20, 6, 12, 'Gents Shoes', 1, 'Y', '2014-10-07 10:08:21', 'Administrator', '0', '0000-00-00 00:00:00', 'gents-shoes'),
(21, 6, 12, 'Ladies Shoes', 2, 'Y', '2014-10-07 10:08:41', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-shoes'),
(22, 4, 14, 'Gents Sandals', 1, 'Y', '2014-10-08 09:48:15', 'Administrator', '0', '0000-00-00 00:00:00', 'gents-sandals'),
(23, 4, 14, 'Ladies Sandals', 2, 'Y', '2014-10-08 09:48:34', 'Administrator', '0', '0000-00-00 00:00:00', 'ladies-sandals'),
(24, 4, 14, 'Kids Sandals', 3, 'Y', '2014-10-08 09:48:50', 'Administrator', '0', '0000-00-00 00:00:00', 'kids-sandals');
