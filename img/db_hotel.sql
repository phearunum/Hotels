-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 07:37 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_comment`
--

CREATE TABLE `customer_comment` (
  `id` int(11) NOT NULL,
  `gestName` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL,
  `comment` text,
  `img` text,
  `rate` double DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `atcive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_comment`
--

INSERT INTO `customer_comment` (`id`, `gestName`, `email`, `roomID`, `comment`, `img`, `rate`, `password`, `atcive`) VALUES
(1, 'fffff', 'ffff', 1, 'ffffff', 'gggfbfbgbgfb', 0, 'fgbsfb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `featureID` int(11) DEFAULT NULL,
  `featureName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_email`
--

CREATE TABLE `news_email` (
  `emailID` int(11) NOT NULL,
  `emial` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_img`
--

CREATE TABLE `restaurant_img` (
  `resImg_Id` int(11) NOT NULL,
  `resImg_Name` varchar(250) NOT NULL,
  `resImg_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_img`
--

INSERT INTO `restaurant_img` (`resImg_Id`, `resImg_Name`, `resImg_url`) VALUES
(1, 'breakfast', 'breakfast.jpg'),
(2, 'breakfast', 'breakfast8.jpg'),
(3, 'buffet breakfast', 'fuffetbreakfast3.jpg'),
(4, 'buffet breakfast', 'fuffetbreakfast.jpg'),
(5, 'buffet breakfast', 'fuffetbreakfast1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `conID` int(11) NOT NULL,
  `conName` varchar(200) DEFAULT NULL,
  `conEmial` varchar(200) DEFAULT NULL,
  `conSubject` varchar(200) DEFAULT NULL,
  `conDescription` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `ev_id` int(11) NOT NULL,
  `ev_title` varchar(250) NOT NULL,
  `ev_date` varchar(200) NOT NULL,
  `ev_for` text NOT NULL,
  `ev_desc` text NOT NULL,
  `ev_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`ev_id`, `ev_title`, `ev_date`, `ev_for`, `ev_desc`, `ev_img`) VALUES
(1, 'anniversary', ' November-12-2017', 'anniversary', 'Thank you for choosing Our Hotel for your big Day. \r\nWe hope that We can serve you Again.\r\nFrom our best Regards \r\nAristocrat Residence & Hotel', 'events3.jpg'),
(2, 'Happy Birthday', ' October-21-2017', 'Happy Birthday', 'Congratulations for your birthday.\r\nWe hope all your Dream continue comes true.\r\nEnjoy your vacation with us.\r\nBest Wishes!!!', 'events5.jpg'),
(3, 'Happy Birthday', ' October-10-2017', 'Happy Birthday', 'Congratulations for your birthday.\r\nWe hope all your Dream continue comes true.\r\nEnjoy your vacation with us.\r\nBest Wishes!!!', 'events6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
  `imgID` int(11) NOT NULL,
  `imgName` text NOT NULL,
  `imgUrl` text NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_img`
--

INSERT INTO `tbl_img` (`imgID`, `imgName`, `imgUrl`, `roomID`) VALUES
(1, 'Deluxe Room', 'r666.jpg', 0),
(2, 'Twin Room ', 'room66.jpg', 0),
(3, 'Deluxe Family', 'Deluxe _Family_01.jpg', 1),
(4, 'Deluxe Family ', 'Deluxe_Family_02.jpg', 1),
(5, 'JUNIOR SUITE ROOM', 'Room_666_02.jpg', 2),
(6, 'JUNIOR SUITE ROOM', 'Room_666_01.jpg', 2),
(7, 'Deluxe Twin room', '5.jpg', 3),
(8, 'Deluxe Twin room', '6_Floor_01.jpg', 3),
(9, 'DELUXE TWIN ROOM', '6Floor02.jpg', 3),
(10, 'SUPERIOR SUITE ROOM', 'Siem_riep_Room_02.jpg', 4),
(11, 'SUPERIOR SUITE ROOM', 'Siem_riep_Room_03.jpg', 4),
(12, 'SUPERIOR SUITE ROOM', 'Siem_riep Room_01.jpg', 4),
(13, 'Superior Triple room', 'roomfloor5.jpg', 5),
(14, 'Superior Triple room', '12345678.png', 5),
(15, 'delux_twin room', 'delux_twin.jpg', 5),
(16, 'Royal Room', 'Royal_Room_03.jpg', 6),
(17, 'Royal Room', 'Royal_Room_01.jpg', 6),
(18, '', 'BSC_0356.jpg', 6),
(19, 'DELUXE FAMILY', '7 Floor 01.jpg', 7),
(20, 'DELUXE FAMILY', '5555.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menuID` int(11) NOT NULL,
  `menuName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer`
--

CREATE TABLE `tbl_offer` (
  `offerID` int(11) NOT NULL,
  `offerName` varchar(250) DEFAULT NULL,
  `offerType` varchar(250) DEFAULT NULL,
  `roomID` varchar(250) DEFAULT NULL,
  `offerDescription` varchar(250) DEFAULT NULL,
  `offerImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_offer`
--

INSERT INTO `tbl_offer` (`offerID`, `offerName`, `offerType`, `roomID`, `offerDescription`, `offerImg`) VALUES
(1, 'Wedding anniversary 2 Night Package', 'ytjty', 'jtjtyjtj', 'tjtj', 'vip_room.png'),
(2, 'Wedding anniversary 1 Night Package', 'bnfgnfg', 'ngfngf', 'ngfngf', 'room555.png'),
(3, 'Wedding anniversary 3 Night Package', 'dfbdfbd', 'fbdfbdf', 'bdfbdfb', 'vip_room.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `roomID` int(11) NOT NULL,
  `roomName` varchar(250) DEFAULT NULL,
  `roomDesc` text,
  `roomTypeID` int(11) DEFAULT NULL,
  `roomViewID` int(11) DEFAULT NULL,
  `roomRate` double DEFAULT NULL,
  `roomCapacity` int(11) DEFAULT NULL,
  `roomSize` double DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `view` varchar(250) DEFAULT NULL,
  `roomImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`roomID`, `roomName`, `roomDesc`, `roomTypeID`, `roomViewID`, `roomRate`, `roomCapacity`, `roomSize`, `active`, `view`, `roomImg`) VALUES
(1, 'Deluxe Family Room', 'A private balcony boasts a majestic view of the ocean and the city where guests can revel in the beauty of SihanoukVille in private. ', 1, 1, 55, 2, 69, 1, '123', 'Deluxe _Family_01.jpg'),
(2, 'Junior Suite Room ', 'Rekindle passion in an elegant, dim lit room decked in warm, earth colors for a romantic setting, or indulge in a spacious room with an unexpected touch of vibrant furnishings guaranteed to liven up your day. Each suite is designed with varied themes, deluxe amenities, and private balconies that will surely impress both business and leisure travelers. ', 1, 1, 55, 2, 69, 1, '123', 'Room_666_01.jpg'),
(3, 'Deluxe Twin Room', 'Equipped with a King Size Bed and a Single Bed, the Superior Triple Room can perfectly accommodate three guests. It features subdued colors, and an ocean-view balcony with glass doors for a light, airy room. ', 1, 1, 55, 2, 69, 1, '123', '5.jpg'),
(4, 'Superior Suite Room', 'Deluxe Double is the perfect retreat for two. Comfortable and spacious, this intimate room offers an en-suite bathroom, King Size Bed, and a spectacular sea view with its private balcony for a relaxing stay.', 1, 1, 55, 2, 69, 1, '123', 'Siem_riep_Room_02.jpg'),
(5, 'Superior Triple', 'Perfect for sharing, the Deluxe Twin features an intimate room with the comfort of your own beds. This spacious room comes with a choice of a sea or poolside view, an en-suite bathroom, and is well equipped with modern amenities.', 1, 1, 55, 2, 69, 1, '123', 'roomfloor5.jpg'),
(6, 'Royal Room', 'The suite features a King Size Bed and a separate living room with ample space for relaxing or entertaining guests. An open bath and wooden tub before a balcony offers a calming and sensuous retreat, with a stunning view of the Occheuteal Beach and a refreshing whiff of cool sea breeze. \r\n ', 1, 1, 56, NULL, NULL, NULL, NULL, 'Royal_Room_03.jpg'),
(7, 'Deluxe Family', 'Ideal for families and friends travelling together, the Deluxe Family Room sleeps four guests comfortably in two King Size Beds. The room offers a private balcony overlooking the SihanoukVille Beach, and a dining area that is tastefully decorated with local wooden furnishings. ', 1, 1, 1, NULL, NULL, NULL, NULL, '7 Floor 01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomimg`
--

CREATE TABLE `tbl_roomimg` (
  `imgID` int(11) DEFAULT NULL,
  `imgurl` text,
  `imgtitel` varchar(250) DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL,
  `imgType` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_feture`
--

CREATE TABLE `tbl_room_feture` (
  `featureID` int(11) DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE `tbl_submenu` (
  `subMenuID` int(11) NOT NULL,
  `subName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Sex` varchar(25) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_comment`
--
ALTER TABLE `customer_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_img`
--
ALTER TABLE `restaurant_img`
  ADD PRIMARY KEY (`resImg_Id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`imgID`);

--
-- Indexes for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  ADD PRIMARY KEY (`offerID`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`roomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_comment`
--
ALTER TABLE `customer_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurant_img`
--
ALTER TABLE `restaurant_img`
  MODIFY `resImg_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `imgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  MODIFY `offerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
