-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2016 at 12:00 AM
-- Server version: 5.5.49-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aristocrat`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(200) NOT NULL,
  `con_contry` varchar(200) NOT NULL,
  `con_mail` varchar(200) NOT NULL,
  `con_date` varchar(200) NOT NULL,
  `con_subject` text NOT NULL,
  `con_mesange` text NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_contry`, `con_mail`, `con_date`, `con_subject`, `con_mesange`) VALUES
(5, 'Seppo Reini', 'Suomi', 'pepi.reini@gmail.com', '', 'Airport pick up', 'Dear Sir/Madam,\n\nI have booked your suite from 28th of November onwards.\n\nWe are arriving to Sihanoukville airport on the flight K6 131 at 12.15 pm\n\nDo you arrange private pick up service and for what price?\n\nGrateful regards\n'),
(6, 'yurugi tadafumi', 'japan', 'siromoca@gmail.com', '', 'comfirm booking', 'Hello,this is Yurugi Tadafumi.\r\nwe booked your hotel by Bookng.com from 28-Dec-2016 to 29-Dec-2016.\r\nwe wiil go to your hotel,can you comfirm booking ?\r\nregards.'),
(10, 'James', 'Australia', 'jamster_75@hotmail.com', 'Friday 11th of November 2016 10:49:51 AM', 'Standard Twin Room Booking', ''),
(11, 'Hello ', 'cambodia', 'phearunum@gmail.com', 'Wednesday 30th of November 2016 03:50:48 AM', 'Testing ', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `pass_code` varchar(200) NOT NULL,
  `c_in` varchar(200) NOT NULL,
  `c_out` varchar(200) NOT NULL,
  `adult` varchar(200) NOT NULL,
  `child` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `c_name`, `pass_code`, `c_in`, `c_out`, `adult`, `child`, `room`, `room_type`) VALUES
(18, 'Phearun', '04848734672', '2016-10-10', '2016-10-10', '3', '2', '001', 'Superior Triple');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` text NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `img_name`, `room_id`) VALUES
(28, '0177948475Deluxe-Double-Room-At-Diamond-Ocean-Resort-In-Sihanoukvile12-690x400.jpg', 1),
(29, '11798212978slide3.jpg', 1),
(30, '2408963252slide4.jpg', 1),
(31, '3258497309slide5.jpg', 1),
(32, '41619419732Standard-Room-at-Diamond-Ocean-Resort-in-Sihanoukville1-690x400.jpg', 1),
(33, '5622458581Superior-Room-At-Diamond-Ocean-Resort-690x400.jpg', 1),
(34, '07864594605361979_700.jpg', 2),
(35, '1868967259469403_19_z.jpg', 2),
(36, '257156617041413412.jpg', 2),
(37, '3933523065diamond-ocean-resort.jpg', 2),
(38, '4610014772double bed.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(250) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  `room_price` int(11) NOT NULL,
  `decription` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_type`, `room_price`, `decription`, `img`) VALUES
(1, 'Suite Room ', '5', 80, 'Accessible by a private lift, the Diamond suite, which can accommodate up to 4 guests, offers unrivalled luxury and spectacular views of the ocean. The light-filled suite combines modern and classical design influences and contains a study and a living room with a six-person dining table. The master bedroom has a desk, chairs and table, and features an en-suite bathroom with bath tub and separate shower. Additionally, there is a second, fully-equipped bathroom and two walk-in wardrobes. Windows encircle the suite, making it easy to take in the city from any vantage point.', 'Superior-Room-At-Diamond-Ocean-Resort-690x400.jpg'),
(2, 'Deluxe Family Room', '1', 100, 'A Beautiful classic Room with Diamond family room and the room size is 68 m2, Twin Deluxe rooms have two king size beds or twins that may be joined together with 4 guests and it has a living room inside you can relaxing on sofa to see the sea view enjoin your coffee or some soft drink, creating a king size bed. .A few are furnished with double bed and all have a full sized bath, large LED flat screen TV, Safety box, security safe, courtesy line, telephone in room, mini-bar, and free Wi-Fi internet connection. And Include breakfast.', 'Deluxe-Twin-Room-At-Diamond-Ocean-Resort-In-Sihanoukville1-690x400.jpg'),
(3, 'Deluxe Triple', '5', 70, 'In a harmonious and relaxing environment with incredible ocean views. Furnished in the classical style, these suites are larger than the other rooms with the option of adding a third bed. A few are furnished with one king bed and one single bed. Available for 3 guests all have large LED flat screen TV, Safety box, security safe, courtesy line, telephone in room, mini-bar, and free Wi-Fi internet connection. En-suite marble bathroom featuring a full sized bath, hairdryer, magnifying make-up mirror and amenities, some rooms with separate shower .Including breakfast', 'Triple-Room-at-Diamon-Ocean-Resort1-690x400.jpg'),
(4, 'Standard Room', '5', 40, 'Furnished with elegant taste, the rooms are feature every comfort, including full sized baths in the bathroom! Wi-Fi internet connection at no charge, flat screen LCD TV, mini-bar, courtesy line, in room telephone, and security safe. Including breakfast.', 'Deluxe-Double-Room-At-Diamond-Ocean-Resort-In-Sihanoukvile12-690x400.jpg'),
(5, 'Deluxe King Room', '13', 60, 'Appointed with fine art and stylish furniture, Double Deluxe rooms have a queen size bed or twins that may be joined together, creating a king size bed. .A few are furnished with double bed and all have full sized baths, large LED flat screen TV, Safety box, security safe, courtesy line, telephone in room, mini-bar, and free Wi-Fi internet connection. Including breakfast.', 'Standard-Room-at-Diamond-Ocean-Resort-in-Sihanoukville1-690x400.jpg'),
(9, 'Deluxe Twin Room', '10', 60, 'Deluxe Twin Room with sea view and pool view , room bed type 2 single bed with 32 sqm. this room are bright and air-con Large LED flat screen TV, Safety, box water kettle , Telephone , Mini bar , Hairdryer and Wi-Fi Connection .\r\nDeluxe Twin Room with Breakfast Include ', 'deluxe twin room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_img`
--

CREATE TABLE IF NOT EXISTS `room_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` text NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room_item`
--

CREATE TABLE IF NOT EXISTS `room_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) NOT NULL,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `room_item`
--

INSERT INTO `room_item` (`item_id`, `item_name`, `r_id`) VALUES
(1, 'Free Internet Access', 1),
(2, 'LED flat screen TV', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_pass` varchar(250) NOT NULL,
  `profile` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_name`, `u_email`, `u_pass`, `profile`) VALUES
(1, 'Phearun', 'phearun@aristocrat-rh.com', 'phearun@1234', 'phearun.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
