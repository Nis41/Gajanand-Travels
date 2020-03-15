-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2019 at 04:37 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gajanand_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Id`, `UserName`, `Email`, `Password`) VALUES
(1, 'admin', 'Satyandra@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

DROP TABLE IF EXISTS `booking_info`;
CREATE TABLE IF NOT EXISTS `booking_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Package_Id` int(3) NOT NULL,
  `Hotel_Id` int(3) NOT NULL,
  `Booking_Date` timestamp NOT NULL,
  `Person` int(2) NOT NULL,
  `Room` int(2) NOT NULL,
  `Total_Price` int(10) NOT NULL,
  `User_Id` int(3) NOT NULL,
  `Status` enum('Pending','Confirm') NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`),
  KEY `Package_Id` (`Package_Id`),
  KEY `Hotel_Id` (`Hotel_Id`),
  KEY `User_Id` (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`Id`, `Package_Id`, `Hotel_Id`, `Booking_Date`, `Person`, `Room`, `Total_Price`, `User_Id`, `Status`) VALUES
(1, 6, 4, '2019-05-23 01:07:07', 4, 2, 36000, 1, 'Pending'),
(3, 6, 4, '2019-05-23 04:16:46', 2, 1, 22000, 3, 'Confirm'),
(6, 2, 2, '2019-05-23 10:35:08', 4, 2, 58000, 4, 'Pending'),
(8, 2, 2, '2019-05-24 07:49:46', 4, 2, 58000, 5, 'Confirm'),
(9, 1, 6, '2019-05-24 12:40:33', 4, 2, 76000, 5, 'Pending'),
(10, 14, 9, '2019-06-02 06:14:45', 1, 1, 0, 6, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_info`
--

DROP TABLE IF EXISTS `feedback_info`;
CREATE TABLE IF NOT EXISTS `feedback_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_info`
--

INSERT INTO `feedback_info` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Parshv', 'Parshv@gmail.com', 'jordar service che ho bhai tamari 				');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_image`
--

DROP TABLE IF EXISTS `hotel_image`;
CREATE TABLE IF NOT EXISTS `hotel_image` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) NOT NULL,
  `Hotel_Id` int(3) NOT NULL,
  `Hotel_City` varchar(30) NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`),
  KEY `Hotel_Id` (`Hotel_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_image`
--

INSERT INTO `hotel_image` (`Id`, `Image`, `Hotel_Id`, `Hotel_City`) VALUES
(1, 'hotel_hd/oberoi.png', 2, 'Delhi'),
(2, 'hotel_hd/oberoi1.png', 2, 'Delhi'),
(3, 'hotel_hd/redfox.jpg', 1, 'Delhi'),
(4, 'hotel_hd/redfox2.jpg', 1, 'Delhi'),
(5, 'hotel_hd/redfox3.jpg', 1, 'Delhi'),
(6, 'hotel_hd/redfox4.jpg', 1, 'Delhi'),
(7, 'hotel_hd/redfox5.jpg', 1, 'Delhi'),
(8, 'hotel_hd/redfox6.jpg', 1, 'Delhi'),
(9, 'hotel_hd/oberoi2.jpg', 2, 'Delhi'),
(10, 'hotel_hd/oberoi3.jpg', 2, 'Delhi'),
(11, 'hotel_hd/oberoi6.jpg', 2, 'Delhi'),
(12, 'hotel_hd/oberoi4.jpg', 2, 'Delhi'),
(13, 'hotel_hd/oberoi5.jpg', 2, 'Delhi'),
(14, 'hotel_hd/ahmedabad1.jpg', 3, 'Ahmedabad'),
(15, 'hotel_hd/ahmedabad2.jpg', 3, 'Ahmedabad'),
(16, 'hotel_hd/ahmedabad3.jpg', 3, 'Ahmedabad'),
(17, 'hotel_hd/ahmedabad4.jpg', 3, 'Ahmedabad'),
(18, 'hotel_hd/ahmedabad5.jpg', 3, 'Ahmedabad'),
(19, 'hotel_hd/ahmedabad6.jpg', 3, 'Ahmedabad'),
(20, 'hotel_hd/ahmedabad7.jpg', 3, 'Ahmedabad'),
(21, 'hotel_hd/rajkot1.jpg', 4, 'Rajkot'),
(22, 'hotel_hd/rajkot2.jpg', 4, 'Rajkot'),
(23, 'hotel_hd/rajkot3.jpg', 4, 'Rajkot'),
(24, 'hotel_hd/rajkot4.jpg', 4, 'Rajkot'),
(25, 'hotel_hd/rajkot5.jpg', 4, 'Rajkot'),
(26, 'hotel_hd/rajkot6.jpg', 4, 'Rajkot'),
(27, 'hotel_hd/rajkot7.jpg', 4, 'Rajkot'),
(28, 'hotel_hd/agra1.jpg', 6, 'Agra'),
(29, 'hotel_hd/agra2.jpg', 6, 'Agra'),
(30, 'hotel_hd/agra3.jpg', 6, 'Agra'),
(31, 'hotel_hd/agra4.jpg', 6, 'Agra'),
(32, 'hotel_hd/agra5.jpg', 6, 'Agra'),
(33, 'hotel_hd/agra6.jpg', 6, 'Agra'),
(34, 'hotel_hd/agra7.jpg', 6, 'Agra'),
(35, 'hotel_hd/oberoiMumbai1.jpg', 9, 'Mumbai'),
(36, 'hotel_hd/oberoiMumbai2.jpg', 9, 'Mumbai'),
(37, 'hotel_hd/oberoiMumbai3.jpg', 9, 'Mumbai'),
(38, 'hotel_hd/oberoiMumbai4.jpg', 9, 'Mumbai'),
(39, 'hotel_hd/oberoiMumbai5.jpg', 9, 'Mumbai'),
(40, 'hotel_hd/oberoiMumbai6.jpg', 9, 'Mumbai'),
(41, 'hotel_hd/oberoiMumbai7.jpg', 9, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

DROP TABLE IF EXISTS `hotel_info`;
CREATE TABLE IF NOT EXISTS `hotel_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Hotel_Name` varchar(50) NOT NULL,
  `Hotel_Type` varchar(10) NOT NULL,
  `Hotel_Detail` text NOT NULL,
  `Hotel_State` varchar(30) NOT NULL,
  `Hotel_City` varchar(30) NOT NULL,
  `Total_Room` int(5) NOT NULL,
  `Hotel_Price` int(20) NOT NULL,
  `Check_In` varchar(30) NOT NULL,
  `Check_Out` varchar(30) NOT NULL,
  `Hotel_Mail` varchar(30) NOT NULL,
  `Hotel_Number` varchar(10) NOT NULL,
  `Hotel_Map` varchar(255) NOT NULL,
  `Package_Id` int(3) NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`),
  KEY `Package_Id` (`Package_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`Id`, `Hotel_Name`, `Hotel_Type`, `Hotel_Detail`, `Hotel_State`, `Hotel_City`, `Total_Room`, `Hotel_Price`, `Check_In`, `Check_Out`, `Hotel_Mail`, `Hotel_Number`, `Hotel_Map`, `Package_Id`) VALUES
(1, 'Red Fox Hotel', '3 Star', 'Red Fox Delhi Airport is a four-star hotel situated just three kilometres from the Indira Gandhi International Airport and offers guests an airport shuttle service.\r\n\r\nRooms are equipped with Wi-Fi connectivity, a mini-bar, flat-screen television and a desk. Tea and coffee making facilities and a safe are also offered.\r\n', 'Delhi', 'Delhi', 150, 5000, 'After 12 AM', 'Before 12 AM', 'redfox@gmail.com', '7896541230', 'https://maps.google.com/maps?q=Red%20Fox%20Hotel%20%2C%20Delhi&t=&z=13&ie=UTF8&iwloc=&output=embed', 2),
(2, 'The Oberoi', '5 Star', 'The Oberoi New Delhi is a five-star luxury hotel located in a quiet part of the city to the south of the centre. The hotel overlooks the city\'s Golf Club on one side and the UNESCO world heritage site of Humuyan\'s tomb on the other. It is approximately a 30 minute drive from the international airport and a few minutes from the city centre. All rooms offer plasma televisions, DVD players, satellite TV, wi-fi and regular internet access.', 'Delhi', 'Delhi', 350, 15000, 'After 12 AM', 'Before 12 AM', 'reservations@oberoigroup.com', '1124363030', 'https://maps.google.com/maps?q=The%20Oberoi%20%2C%20Delhi&t=&z=13&ie=UTF8&iwloc=&output=embed', 2),
(3, 'Hyatt Regency', '5 Star', 'Hyatt Regency Ahmedabad is within walking distance of the Sabarmati riverfront, only 20 minutes (9.4 km/5.8 mi) from the airport and in close proximity to the business and shopping districts. The hotel offers: 210 spacious rooms, including 19 suites; large meeting space options for corporate and social events; and multiple dining options to suit every occasion.', 'Gujarat', 'Ahmedabad', 210, 20000, 'After 2 PM', 'Before 12 PM', 'Hyattahmedabad@gmail.com', '7961601234', 'https://maps.google.com/maps?q=hyatt%2Cahmedabad&t=&z=13&ie=UTF8&iwloc=&output=embed', 6),
(4, 'The Grand Regency', '3 Star', 'Offering a restaurant that serves Indian, Chinese and continental delights, The Grand Regency provides free airport shuttle. The Rajkot Airport and the Rajkot Junction Railway Station are within 3 km. Free WiFi access is available.\r\n\r\nEach air-conditioned room here will provide you with a Satellite TV and a seating area. Featuring a shower, private bathroom also comes with free toiletries and slippers.', 'Gujarat', 'Rajkot', 150, 6000, 'After 10 AM', 'Before 10 AM', 'grandregency@gmail.com', '8652101032', 'https://maps.google.com/maps?q=The%20Grand%20Regency%2C%20Rajkot&t=&z=13&ie=UTF8&iwloc=&output=embed', 6),
(6, 'Trident Agra', '5 Star', 'Agra ancient traditions and rich culture, blend perfectly with modern-day amenities and first-class services at this five-star property. Trident Agra caters for business and leisure travellers, and includes meeting rooms and event space, suitable for any occasion.  Whether in a room or suite, guests may never want to leave. The elegantly appointed and warmly decorated rooms offer state-of-the-art facilities and a pool or garden view. Luxury en-suite bathrooms include specialty Kama toiletries.', 'Uttarpradesh', 'Agra', 270, 18000, 'After 12 AM', 'Before 12 AM', 'tridenthotels@gmail.com', '1800112122', 'https://maps.google.com/maps?q=trident%20hotel%2Cagra&t=&z=13&ie=UTF8&iwloc=&output=embed', 1),
(9, 'The Oberoi', '5 Star', 'Hotel The Oberoi Hotel in Mumbai, India is a luxurious hotel located on the Marine Drive with ocean-front views in the business district. It has a 24-hour spa, concierge, and large skylight within.\r\nEach room has silk armchairs, peal dresser and contrasting antique and modern decorated walls, and an en-suite bathroom. There is a DVD player with LCD television, tea/coffee maker, and an iPod docking station.', 'Maharastra', 'Mumbai', 220, 11500, 'After 10 AM', 'Before 7 AM', 'reservations@oberoigroup.com', '2266325757', 'https://maps.google.com/maps?q=the%20oberoi%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed', 14);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_links`
--

DROP TABLE IF EXISTS `hotel_links`;
CREATE TABLE IF NOT EXISTS `hotel_links` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Hotel_Fb` varchar(255) NOT NULL,
  `Hotel_Twitter` varchar(255) NOT NULL,
  `Hotel_Insta` varchar(255) NOT NULL,
  `Hotel_Youtube` varchar(255) NOT NULL,
  `Hotel_City` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_links`
--

INSERT INTO `hotel_links` (`Id`, `Hotel_Fb`, `Hotel_Twitter`, `Hotel_Insta`, `Hotel_Youtube`, `Hotel_City`) VALUES
(1, 'https://www.facebook.com/redfox', 'https://twitter.com/redfox', 'https://www.instagram.com/redfox', 'https://www.youtube.com/user/redfox\r\n', 'Delhi'),
(2, 'https://www.facebook.com/OberoiHotels\r\n', 'https://twitter.com/oberoihotels/\r\n', 'https://www.instagram.com/oberoihotels/\r\n', 'https://www.youtube.com/user/OberoiHotels\r\n', 'Delhi'),
(3, 'https://www.facebook.com/hyatt\r\n', 'https://twitter.com/Hyatt\r\n', 'https://www.instagram.com/hyatt/\r\n', 'https://www.youtube.com/user/hyatt\r\n', 'Ahmedabad'),
(4, 'https://www.facebook.com/grandregency\r\n', 'https://twitter.com/grandregency\r\n', 'https://www.instagram.com/grandregency\r\n', 'https://www.youtube.com/user/grandregency\r\n', 'Rajkot'),
(17, 'https://www.facebook.com/TridentHotels', 'https://twitter.com/tridenthotels', 'https://www.instagram.com/tridenthotels/', 'https://www.youtube.com/user/TheTridentHotels', 'Agra');

-- --------------------------------------------------------

--
-- Table structure for table `package_detail`
--

DROP TABLE IF EXISTS `package_detail`;
CREATE TABLE IF NOT EXISTS `package_detail` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL,
  `Detail` text NOT NULL,
  `State` varchar(20) NOT NULL,
  `Map` varchar(255) NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_detail`
--

INSERT INTO `package_detail` (`Id`, `Start`, `End`, `Duration`, `Price`, `Detail`, `State`, `Map`) VALUES
(1, '2019-06-27', '2019-07-02', '6 Days, 5 Nights', 10000, ' Uttar Pradesh, a land where cultures have evolved and religions emerge. The greatness of Uttar Pradesh lies not only in this confluence, but also in the emergence of cultural and religious traditions along some of the greatest rivers in the Indian sub continent the Ganga and the Yamuna. Throughout history, great cities have emerged and established along great rivers. Within India, the Ganga and the Yamuna have nurtured a culture because of which religious faith, rituals, culture and intellectual enlightenment have evolved in places along the two rivers.', '', 'https://maps.google.com/maps?q=Taj%20Mahal&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(2, '2019-07-18', '2019-07-21', '4 Days, 3 Nights', 7000, 'A symbol of the country’s rich past and thriving present, Delhi is a city where ancient and modern blend seamlessly together. It is a place that not only touches your pulse but even fastens it to a frenetic speed. Home to millions of dreams, the city takes on unprecedented responsibilities of realizing dreams bringing people closer and inspiring their thoughts.\r\n\r\n \r\n\r\nJust a century ago, the British moved the seat of their empire from Kolkata to Delhi. And it has been the Capital of India ever since. Now a thriving, cosmopolitan metro, the city has much to celebrate as it has already reached the milestone of completing 100 years as a Capital. With a history that goes back many centuries, Delhi showcases an ancient culture and a rapidly modernising country. Dotted with monuments there is much to discover here. The seat of many powerful empires in the past, its long history can be traced in its many carefully-preserved monuments, ancient forts and tombs.', '', 'https://maps.google.com/maps?q=Delhi&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(3, '2019-05-17', '2019-05-20', '4 Days, 3 Nights', 6000, 'The state of Punjab is renowned for its cuisine, culture and history. Punjab has a vast public transportation and communication network. Some of the main cities in Punjab are Amritsar, Jalandhar, Patiala, Pathankot and Ludhiana. is known for the combines made here while Patiala is known for the historical forts. Punjab also has a rich Sikh religious history.Wagah is a village situated near a road border crossing, goods transit terminal and a railway station between Pakistan and India, and lies on the Grand Trunk Road between the cities of Amritsar, Punjab, India, and Lahore, Punjab, Pakistan.', '', 'https://maps.google.com/maps?q=Golden%20temple&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(4, '2019-07-03', '2019-07-10', '8 Days, 7 Nights', 10000, 'West Bengal, located on eastern bottleneck of India stretching from the Himalayas in the north to the Bay of Bengal in the south, presents some of marvelous landscape features and natural scenic beauty. Some of India\'s most preferred travel destinations like; the Darjeeling Himalayan hill region in the northern extreme of the state.The state of West Bengal has significant architectural and natural heritage. The capital of the state, Kolkata is also known as the \'City of Palaces\'. West Bengal is famous for its terracotta temples of Bishnupur.', '', 'https://maps.google.com/maps?q=Kolkata&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(5, '2019-05-15', '2019-05-24', '10 Days, 9 Nights', 12000, 'Himachal Pradesh is famous for its Himalayan landscapes and popular hill-stations. Many outdoor activities such as rock climbing, mountain biking, paragliding, ice-skating, and heli-skiing are popular tourist attractions in Himachal Pradesh.Traditionally Himachal is known as a summer destination.Shimla, the state capital, is very popular among tourists. The Kalka-Shimla Railway is a mountain railway which is a UNESCO World Heritage Site.[3] Shimla is also a famous skiing attraction in India. Other popular hill stations include Manali and Kasauli.\r\n\r\nDharamshala, home of the Dalai Lama, is known for its Tibetan monasteries and Buddhist temples.', '', 'https://maps.google.com/maps?q=Shimla&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(6, '2019-11-03', '2019-11-10', '8 Days, 7 Nights', 8000, 'Gujarat is the 6th largest state in India, located in the western part of India with a coastline of 1600 km (longest in India). Gujarat offers scenic beauty from Great Rann of Kutch to the hills of Saputara. Gujarat is the one and only place to view pure Asiatic lions in the world.', '', 'https://maps.google.com/maps?q=gujarat&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(7, '2019-06-18', '2019-06-27', '10 Days, 9 Nights', 15000, 'The state of Goa, in India, is famous for its beaches and places of worship, and tourism is its primary industry. Tourism is generally focused on the coastal areas of Goa, with decreased tourist activity inland. Foreign tourists, mostly from Europe, arrive in Goa in winter whilst the summer and monsoon seasons see a large number of Indian tourists.Goa\'s beaches cover about 125 kilometres (78 mi) of its coastline. These beaches are divided into North and South Goa.', '', 'https://maps.google.com/maps?q=goa&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(8, '2019-12-10', '2019-12-22', '12 Days, 11 Nights', 11000, 'Kerala, a surreal destination where the morning brings in the mist and magic. Fondly called the “God’s Own Country”, this is the place where the backwaters hold everyone captive with their alluring silence. Yes, it’s the ‘Spice Capital of India’ where the evening wishes adieu with some of the enchanting melodiesplayed by Mother Nature. Yes, such is the beauty and appeal of Kerala!Let loose the wanderlust in you and plan a trip to this prismatic land.', '', 'https://maps.google.com/maps?q=kerala&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(13, '2019-06-03', '2019-06-13', '10 Days , 9 Nights', 8000, 'Rajasthan is one of the most popular tourist destinations in India, for both domestic and international tourists. Rajasthan attracts tourists for its historical forts, palaces, art and culture with its slogan Padharo mahare desh. Every third foreign tourist visiting India travels to Rajasthan as it is part of the Golden Triangle for tourists visiting India.', 'Rajasthan', 'https://maps.google.com/maps?q=rajasthan%2Cindia&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(14, '2019-07-16', '2019-07-23', '7 Days , 6 Nights', 8000, 'Maharashtra attracts tourists from different states and foreign countries.It was the second most visited Indian state by foreigners and fourth most visited state by domestic tourists in the country in 2014. Aurangabad is the tourism capital of Maharashtra. Major urban cities include : Mumbai, Pune, Nashik, Aurangabad and Nagpur.', 'Maharastra', 'https://maps.google.com/maps?q=maharastra&t=&z=13&ie=UTF8&iwloc=&output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `package_image`
--

DROP TABLE IF EXISTS `package_image`;
CREATE TABLE IF NOT EXISTS `package_image` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Package_Id` int(3) NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`),
  KEY `Package_Id` (`Package_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_image`
--

INSERT INTO `package_image` (`Id`, `Image`, `State`, `Package_Id`) VALUES
(1, 'location_hd/taj_mahal.jpg', '', 1),
(2, 'location_hd/allahabad.jpg', '', 1),
(3, 'location_hd/jhansi.jpg', '', 1),
(4, 'location_hd/Lucknow.jpg', '', 1),
(5, 'location_hd/mathura.jpg', '', 1),
(6, 'location_hd/varanasi.jpg', '', 1),
(7, 'location_hd/vrindavan.jpg', '', 1),
(8, 'location_hd/delhi.jpg', '', 2),
(9, 'location_hd/punjab.jpg', '', 3),
(10, 'location_hd/howrah_bridge.jpg', '', 4),
(11, 'location_hd/shimla.jpg', '', 5),
(12, 'location_hd/patan1.jpg', '', 6),
(13, 'location_hd/delhi1.jpg', '', 2),
(14, 'location_hd/delhi3.jpg', '', 2),
(15, 'location_hd/delhi2.jpg', '', 2),
(16, 'location_hd/delhi4.jpg', '', 2),
(17, 'location_hd/delhi5.jpg', '', 2),
(18, 'location_hd/delhi6.jpg', '', 2),
(19, 'location_hd/gujarat2.jpg', '', 6),
(20, 'location_hd/gujarat3.jpg', '', 6),
(21, 'location_hd/gujarat4.jpg', '', 6),
(22, 'location_hd/gujarat5.jpg', '', 6),
(23, 'location_hd/gujarat6.jpg', '', 6),
(24, 'location_hd/gujarat7.jpg', '', 6),
(25, 'location_hd/punjab1.jpg', '', 3),
(26, 'location_hd/punjab2.jpg', '', 3),
(27, 'location_hd/punjab3.jpg', '', 3),
(28, 'location_hd/punjab4.jpg', '', 3),
(29, 'location_hd/punjab5.jpg', '', 3),
(30, 'location_hd/punjab6.jpg', '', 3),
(31, 'location_hd/kolkata1.jpg', '', 4),
(32, 'location_hd/kolkata2.jpg', '', 4),
(33, 'location_hd/kolkata3.jpg', '', 4),
(34, 'location_hd/kolkata4.jpg', '', 4),
(35, 'location_hd/kolkata5.jpg', '', 4),
(36, 'location_hd/kolkata6.jpg', '', 4),
(37, 'location_hd/himachal1.jpg', '', 5),
(38, 'location_hd/himachal2.jpg', '', 5),
(39, 'location_hd/himachal3.jpg', '', 5),
(40, 'location_hd/himachal4.jpg', '', 5),
(41, 'location_hd/himachal5.jpg', '', 5),
(42, 'location_hd/himachal6.jpg', '', 5),
(43, 'location_hd/goa1.jpg', '', 7),
(44, 'location_hd/goa2.jpg', '', 7),
(45, 'location_hd/goa3.jpg', '', 7),
(46, 'location_hd/goa4.jpg', '', 7),
(47, 'location_hd/goa5.jpg', '', 7),
(48, 'location_hd/goa6.jpg', '', 7),
(49, 'location_hd/goa7.jpg', '', 7),
(50, 'location_hd/kerala1.jpg', '', 8),
(51, 'location_hd/kerala2.jpg', '', 8),
(52, 'location_hd/kerala3.jpg', '', 8),
(53, 'location_hd/kerala4.jpg', '', 8),
(54, 'location_hd/kerala5.jpg', '', 8),
(55, 'location_hd/kerala6.jpg', '', 8),
(56, 'location_hd/kerala7.jpg', '', 8),
(64, 'location_hd/rajasthan1.jpg', 'Rajasthan', 13),
(65, 'location_hd/rajasthan2.jpg', 'Rajasthan', 13),
(66, 'location_hd/rajasthan3.jpg', 'Rajasthan', 13),
(67, 'location_hd/rajasthan4.jpg', 'Rajasthan', 13),
(68, 'location_hd/rajasthan5.jpg', 'Rajasthan', 13),
(69, 'location_hd/rajasthan6.jpg', 'Rajasthan', 13),
(70, 'location_hd/rajasthan7.jpg', 'Rajasthan', 13),
(71, 'location_hd/mumbai1.jpg', 'Maharastra', 14),
(72, 'location_hd/mumbai2.jpg', 'Maharastra', 14),
(73, 'location_hd/mumbai3.jpg', 'Maharastra', 14),
(74, 'location_hd/mumbai4.jpg', 'Maharastra', 14),
(75, 'location_hd/mumbai5.jpg', 'Maharastra', 14),
(76, 'location_hd/mumbai6.jpg', 'Maharastra', 14),
(77, 'location_hd/mumbai7.jpg', 'Maharastra', 14);

-- --------------------------------------------------------

--
-- Table structure for table `package_info`
--

DROP TABLE IF EXISTS `package_info`;
CREATE TABLE IF NOT EXISTS `package_info` (
  `Package_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Package_Name` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Detail_Id` int(3) NOT NULL,
  PRIMARY KEY (`Package_Id`),
  KEY `Detail_Id` (`Detail_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_info`
--

INSERT INTO `package_info` (`Package_Id`, `Package_Name`, `State`, `City`, `Detail_Id`) VALUES
(1, 'Uttarpradesh Tour', 'Uttarpradesh', 'Agra', 1),
(2, 'Days In Capital', 'Delhi', 'Delhi', 2),
(3, 'Punjab Tour', 'Punjab', 'Amritsar', 3),
(4, 'Tour in Bengal', 'West Bengal', 'Kolkata', 4),
(5, 'Holidays in Himachal', 'Himachalpradesh', 'Shimla', 5),
(6, 'Days in Gujarat', 'Gujarat', 'Patan', 6),
(7, 'Holiday Destination Goa', 'Goa', 'Panaji', 7),
(8, 'God\'s Own Country', 'Kerala', 'Thiruvananthapuram', 8),
(13, 'Rajasthan Tour', 'Rajasthan', 'Jaipur', 13),
(14, 'Tour in Maharastra', 'Maharastra', 'Mumbai', 14);

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

DROP TABLE IF EXISTS `payment_detail`;
CREATE TABLE IF NOT EXISTS `payment_detail` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `card_Holder` varchar(30) NOT NULL,
  `Card_Num` varchar(16) NOT NULL,
  `Expiry` varchar(5) NOT NULL,
  `CVV` int(3) NOT NULL,
  `User_Id` int(3) NOT NULL,
  KEY `User_Id` (`User_Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`Id`, `card_Holder`, `Card_Num`, `Expiry`, `CVV`, `User_Id`) VALUES
(1, 'Nikesh ', '4111111111111111', '04/22', 265, 3),
(2, 'Karan S Rajpurohit', '4179739668127087', '08/25', 365, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

DROP TABLE IF EXISTS `room_info`;
CREATE TABLE IF NOT EXISTS `room_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Room_Type` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Detail` text NOT NULL,
  `Hotel_Id` int(3) NOT NULL,
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`),
  KEY `Hotel_Id` (`Hotel_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`Id`, `Room_Type`, `Price`, `Detail`, `Hotel_Id`) VALUES
(1, 'Single Room', 3000, 'Single rooms is a bright and cosy room featuring cable TV, a work desk and a private bathroom with shower. Our single rooms are ideal for one person. Our single rooms overlook the street, and all have double glazing. Single rooms have a single bed (120cm).', 1),
(2, 'Double Room', 5000, 'Ideal for one to two people, double rooms at Hotel Red Fox overlook either the courtyard or street. All rooms have double glazing, ensuring a calm and relaxing environment for our guests. Double rooms have a double bed (140cm), an en-suite bathroom with bath, and separate toilet', 1),
(3, 'Luxury Room', 7000, 'Our Luxury room has a seating area, ample storage, digital safe, minibar and luxurious duck down bedding. This room can also be configured with an extra roll-away bed for families of 3.', 2),
(4, 'Family Room', 6000, 'Family rooms is a bright and cosy room featuring cable TV, a work desk and a private bathroom with shower', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

DROP TABLE IF EXISTS `tour_guide`;
CREATE TABLE IF NOT EXISTS `tour_guide` (
  `Guide_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Guide_Name` varchar(30) NOT NULL,
  `Guide_Detail` text NOT NULL,
  `Guide_State` varchar(30) NOT NULL,
  `Guide_Image` varchar(255) NOT NULL,
  `Package_Id` int(3) NOT NULL,
  PRIMARY KEY (`Guide_Id`),
  KEY `Guide_Id` (`Guide_Id`),
  KEY `Package_Id` (`Package_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`Guide_Id`, `Guide_Name`, `Guide_Detail`, `Guide_State`, `Guide_Image`, `Package_Id`) VALUES
(1, 'Monika Sharma', 'Hello travelers Namaste. . . !! The meaning of Namaste is \"we respect and bow to the soul enshrined in your body\".I work as a tour guide, appointed by the Ministry of Tourism & culture, Government of India. As I have license, I go with you inside the monuments to explain the details, history and architecture of the places. I can also guide you in other cities like Delhi, Jaipur, Agra, Udaipur and Ranthambor etc. I can plan an itinerary based on your interests and the intended duration of your trip.', 'Delhi', 'Guide_img/guide2.jpg', 2),
(2, 'Harish M.', 'Namaste, I am Harish, a licensed, National English-speaking guide, my objective is to provide the most worthwhile and enriching tour experience for local and foreign tourists alike and to make a significant contribution to Indias tourism industry.', 'Delhi', 'Guide_img/guide1.jpg', 2),
(3, 'Nisha Mehta', 'I am an English speaking Lady Tourist Guide from Gujarat-India, having license from Tourism Ministry of India.', 'Gujarat', 'Guide_img/guide3.jpg', 6),
(4, 'Gajendra D.', 'Namaste , I live in Gandhinagar the GreenCity am person who listens to his innerself loves to Travel in nature & show my Culture n Heritage of India .', 'Gujarat', 'Guide_img/guide4.jpg', 6),
(5, 'Rizwan M.', 'I myself Rizwan believe, a journey through India is enriching, inspiring and unforgettable.Namaste, I am working as tour guide for many 5 star and other leading hotels, foreign embassies and foreign missions, multi-national companies, travel agents etc for past 12 years.', 'Uttarpradesh', 'Guide_img/guide5.jpg', 1),
(6, 'Neha A.', 'Namaste, I am Neha from the Heritage City (Agra), working as a tour guide.May I say as a cultural ambassador since 2007 appointed by the Department of Tourism, India. I have mastered in Medieval History of India (Post Graduate) which has educated me and enhanced my knowledge to compliment my job as a tour guide as it helps me to explain different aspects of History, architecture, religion and secularism, colors, languages, dresses, culture and traditions.', 'Uttarpradesh', 'Guide_img/guide6.jpg', 1),
(7, 'Sajan S.', 'I work as a tour guide more than 2 years. I go with you inside the Gurudwara and other historical monuments to explain you the details, history and architecture of the places we go.', 'Punjab', 'Guide_img/punjab1.jpg', 3),
(8, 'Balwinder S.', 'My passion for my country, India, and my people is what I attempt to convey to my clients through tour guiding, and that is the sentiment I wish for them, too, to return home with. I take personal interest in ensuring my clients\' interests, pace of travel and safety are met. I am also attentive to their moods and physical state of health on a day to day basis. I am mature and understanding. I am aware that while working through a third party, it is not only my own reputation as a Tour Guide that I need to preserve but also that of the organization I represent and its other agents I might be working with.', 'Punjab', 'Guide_img/punjab2.jpg', 3),
(9, 'Deepjyoti B.', 'Namaste, I am Deep, a freelance licensed tour and trek guide for Calcutta and its surroundings such as Sikkim, Assam and the Himalayas in proximity to this places.', 'West Bengal', 'Guide_img/kolkata1.jpg', 4),
(10, 'Disha T.', 'Hi, My name is Disha and I call the quaint little town of Manali home.I have spent my teenage years scampering the surrounding mountains. I started my career as a guide when I was in college (2003) and was bored during the summer vacations.\r\nI love meeting people and sharing my love and knowledge of the region.', 'Himachalpradesh', 'Guide_img/shimla1.jpg', 5),
(11, 'Vishal D.', 'I am happy to work out tailor-made itineraries with clients. Generally, I like to discuss plans with clients and can make suggestions about special places to visit depending on our clients\' interests, and available time. I run trips for all age groups and I am delighted to have children of any age too. Whether you are looking for a vacation for the individual traveler, a private group or a family holiday, I am sure that I will be able to meet your style and budget, provide inside knowledge, and deliver a first class high quality, personalized service with every journey. I am able to be flexible for the convenience and comfort of my clients.', 'Himachalpradesh', 'Guide_img/shimla2.jpg', 5),
(12, 'Mario M.', 'Hi I am Mario Monteiro from Goa. I am a Structural Engineer by profession and, I was introduced to tourism way back in the year 2000.', 'Goa', 'Guide_img/goa1.jpg', 7),
(13, 'Pankti Pandya', 'I love Goa and I will like to share my knowledge and enthusiasm with others. I am honest, diligent and go out of my way to make the accommodate guests needs. I\'m a bird watcher as well and also catches snakes (not professionally) but love to leave them back to their homes. ', 'Goa', 'Guide_img/goa2.jpg', 7),
(14, 'Amit N.', 'Hi from Amit. . . I would like to take a minute of your time to tell you a little about myself.', 'Kerala', 'Guide_img/kerala1.jpg', 8),
(15, 'Swati Parikh', 'Hello, my name is Swati and welcome to Cochin. I born and brought up in Cochin, India, close to the Cochin Port (the Queen of Arabian Sea) and I\'m an experienced local guide in and around Cochin area for the last 3 years.', 'Kerala', 'Guide_img/kerala2.jpg', 8),
(16, 'Nikesh S.', 'Namaste, My name is Nikesh, born and grew up in Mumbai, I have been working as a guide in Mumbai from last 6 years and met more than 3000 people from around the world.', 'Maharastra', 'Guide_img/mumbai1.jpg', 14),
(17, 'Ravindra M.', 'I live in Jodhpur, the city of Rajasthan, and since 2007 I have been providing my services as a tour guide for , jodhpur and throughout Rajasthan, including Jodhpur, Udaipur, Pushkar and Jaisalmer. Frequently, I have been hired as the local guide by group leaders of various tour companies , exclusive india, for example.', 'Rajasthan', 'Guide_img/rajasthan1.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Number` varchar(10) NOT NULL,
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Number`) VALUES
(1, 'Nisarg', 'Patel', 'nisu@gmail.com', 'nisu1234', '7069766147'),
(3, 'Nikesh', 'Thakkar', 'Nikesh@gmail.com', 'nikesh1234', '7965412330'),
(4, 'Pratik', 'Panchal', 'pratik@gmail.com', 'pratik1234', '7874378909'),
(5, 'Karan', 'Rajpurohit', 'karan@gmail.com', 'karan1234', '9995500563'),
(6, 'Parshv', 'Shah', 'Parshv@gmail.com', 'parshv1234', '9104862560');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD CONSTRAINT `booking_info_ibfk_1` FOREIGN KEY (`Package_Id`) REFERENCES `package_info` (`Package_Id`),
  ADD CONSTRAINT `booking_info_ibfk_2` FOREIGN KEY (`Hotel_Id`) REFERENCES `hotel_info` (`Id`),
  ADD CONSTRAINT `booking_info_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `user_info` (`Id`);

--
-- Constraints for table `hotel_image`
--
ALTER TABLE `hotel_image`
  ADD CONSTRAINT `hotel_image_ibfk_1` FOREIGN KEY (`Hotel_Id`) REFERENCES `hotel_info` (`Id`);

--
-- Constraints for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD CONSTRAINT `hotel_info_ibfk_1` FOREIGN KEY (`Package_Id`) REFERENCES `package_info` (`Package_Id`);

--
-- Constraints for table `package_image`
--
ALTER TABLE `package_image`
  ADD CONSTRAINT `package_image_ibfk_1` FOREIGN KEY (`Package_Id`) REFERENCES `package_info` (`Package_Id`);

--
-- Constraints for table `package_info`
--
ALTER TABLE `package_info`
  ADD CONSTRAINT `package_info_ibfk_1` FOREIGN KEY (`Detail_Id`) REFERENCES `package_detail` (`Id`);

--
-- Constraints for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD CONSTRAINT `payment_detail_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user_info` (`Id`);

--
-- Constraints for table `room_info`
--
ALTER TABLE `room_info`
  ADD CONSTRAINT `room_info_ibfk_1` FOREIGN KEY (`Hotel_Id`) REFERENCES `hotel_info` (`Id`);

--
-- Constraints for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD CONSTRAINT `tour_guide_ibfk_1` FOREIGN KEY (`Package_Id`) REFERENCES `package_info` (`Package_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
