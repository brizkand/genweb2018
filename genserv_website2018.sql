-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 07:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genserv_website2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_partners`
--

CREATE TABLE `business_partners` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_partners`
--

INSERT INTO `business_partners` (`id`, `company_name`, `logo`, `website`) VALUES
(1, 'Foremost Cagayan Development Leisure Corporation', 'fcdlc.png', 'fcdlc.ph'),
(2, 'Global Satellite', 'gsat.png', 'www.gsat.asia'),
(3, 'Dai-Chen Watergate Technology', 'daichen.png', 'www.dc-floodgate.com'),
(4, 'Koder Elevator(Taiwan)', 'koder.png', '#'),
(5, 'Koangyow Integration Machine', 'kim.png', 'http://www.kims.com.tw/zh-tw/'),
(6, 'Gentech LED Lights', 'gentech.png', '#'),
(7, 'Pacific Satellite TV', 'pacific.png', '#'),
(8, 'Sogatek(Taiwan)', 'sogatek.png', '#'),
(9, 'Amity Satellite, Inc.', 'amity.png', '#'),
(10, 'CBN', 'cbn.png', '#'),
(11, 'Atitech Enterprise', 'ati.png', '#'),
(12, 'Haw Gua(Taiwan)', 'haw_gua.png', '#'),
(13, 'Lilin CCTV Camera', 'lilin.png', '#'),
(14, 'Ricklee Enterprises', 'ricklee.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `ceiling_fan_projects`
--

CREATE TABLE `ceiling_fan_projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `client` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceiling_fan_projects`
--

INSERT INTO `ceiling_fan_projects` (`id`, `client`, `address`, `pic1`, `pic2`) VALUES
(1, 'BOSS CRAB HOTPOT', 'MAKATI CITY', 'boss1.png', 'boss2.png'),
(2, 'FSBH CORP', 'CALOOCAN CITY', 'fsbh1.png', 'fsbh2.png'),
(3, 'GENSERV INTERNATIONAL INC.', 'MAKATI CITY', 'genserv1.png', 'genserv2.png'),
(4, 'OSCOPRO OPTICAL', 'MANDALUYONG CITY', 'mandaluyong1.png', 'mandaluyong2.png'),
(5, 'LOURDES HOSPITAL', 'MANDALUYONG CITY', 'lourdes1.png', 'lourdes2.png'),
(6, 'PACIFIC SATELLITE', 'MALATE CITY', 'pacific1.png', 'pacific2.png');

-- --------------------------------------------------------

--
-- Table structure for table `elevator_products`
--

CREATE TABLE `elevator_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `product_info` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elevator_products`
--

INSERT INTO `elevator_products` (`id`, `title`, `description`, `product_info`, `image`) VALUES
(1, 'Passenger Elevator', 'The use of a variety of materials and color combinations, very particular about the interior decoration materials, in the lines and shapes on doing all it can, focus on every detail, embodies the distinguished quiet, luxurious style, dignified and elegant, ride safe and comfortable space, gives pleasing visual experience. And differences in the use of different color temperature and different light source, you can warm yellow to bright light, reflecting the different elevator decorating style, suitable for a variety of environmental requirements to create the best atmosphere.', '<ul>\r\n<h4>PRODUCT SPECIFICATIONS</h4>\r\n<li><b>Car Wall: </b>Formica / Hairline Stainless</li>\r\n<li><b>Ceiling: </b>Multiple paint coating steel sheet</li>\r\n<li><b>Door Jamb: </b>S/S etched</li>\r\n<li><b>Doorsill: </b>Hard Aluminum alloy extruded</li>\r\n<li><b>Floor: </b>Vinyl Tile / Ceramic Tile</li>\r\n<li><b>Front Door Jamb: </b>Hairline S/S</li>\r\n<li><b>Handrail: </b>Round / Flat Handrail (Hairline Stainless)</li>\r\n<li><b>Kick Plate: </b>Hairline S/S</li>\r\n<li><b>Ventilation System: </b>Built-in silent fan</li>\r\n</ul>', 'passenger_elev.png'),
(2, 'Freight Elevator', 'The use of a variety of materials and color combinations, very particular about the interior decoration materials, in the lines and shapes on doing all it can, focus on every detail, embodies the distinguished quiet, luxurious style, dignified and elegant, ride safe and comfortable space, gives pleasing visual experience. And differences in the use of different color temperature and different light source, you can warm yellow to bright light, reflecting the different elevator decorating style, suitable for a variety of environmental requirements to create the best atmosphere.', '', 'freight_elevator_1.png'),
(3, 'Observation Elevator', 'The use of a variety of materials and color combinations, very particular about the interior decoration materials, in the lines and shapes on doing all it can, focus on every detail, embodies the distinguished quiet, luxurious style, dignified and elegant, ride safe and comfortable space, gives pleasing visual experience. And differences in the use of different color temperature and different light source, you can warm yellow to bright light, reflecting the different elevator decorating style, suitable for a variety of environmental requirements to create the best atmosphere.', '', 'observation_elevator_1.png'),
(4, 'Home Elevator', 'The use of a variety of materials and color combinations, very particular about the interior decoration materials, in the lines and shapes on doing all it can, focus on every detail, embodies the distinguished quiet, luxurious style, dignified and elegant, ride safe and comfortable space, gives pleasing visual experience. And differences in the use of different color temperature and different light source, you can warm yellow to bright light, reflecting the different elevator decorating style, suitable for a variety of environmental requirements to create the best atmosphere.', '', 'home_elevator_1.png'),
(5, 'Hospital Elevator', 'The use of a variety of materials and color combinations, very particular about the interior decoration materials, in the lines and shapes on doing all it can, focus on every detail, embodies the distinguished quiet, luxurious style, dignified and elegant, ride safe and comfortable space, gives pleasing visual experience. And differences in the use of different color temperature and different light source, you can warm yellow to bright light, reflecting the different elevator decorating style, suitable for a variety of environmental requirements to create the best atmosphere.', '', 'hospital_elevator_1.png'),
(6, 'Car Ceiling Patern', 'According to the features of different elevator car decoration, we have designed stainless steel circle,ti-plating tube,stainless sheet,perspex stick handrails with beautiful shaped..Customers may choose different models as they like. ', '', 'ceiling1.png'),
(7, 'Elevator Door Entrance', 'Koder Elevator company and design professionals enjoy a super-selection of elevator cabs to address any situation. Elevator doors are the perfect way to carry a design theme across a property, from cab interior to cab exterior and beyond. Included within this group are door skins for elevator car doors and hoistway doors in a variety of materials, finishes and patterns. ', '', 'py_301.png'),
(8, 'Elevator Flooring', 'Vinyl Tile is easy to design and install not breakable you can feel the nature inside the elevator car . Customize your car interior by replacing or recovering your car flooring with wood and nature design. Choose from a variety of high-quality, easy to install, luxury textures, and trendy patterns. Create personalized looks for flooring by using a good quality Vinyl tile. Designs limited only by your imagination.', '', 'flooring.png'),
(9, 'Elevator Handrail', 'According to the features of different elevator car decoration, we have designed stainless steel circle,ti-plating tube,stainless sheet,perspex stick handrails with beautiful shaped..Customers may choose different models as they like. ', '', 'handrail.png');

-- --------------------------------------------------------

--
-- Table structure for table `elevator_projects`
--

CREATE TABLE `elevator_projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `units` varchar(100) NOT NULL,
  `floors` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `pic4` varchar(100) NOT NULL,
  `pic5` varchar(100) NOT NULL,
  `pic6` varchar(100) NOT NULL,
  `pic7` varchar(100) NOT NULL,
  `pic8` varchar(100) NOT NULL,
  `pic9` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elevator_projects`
--

INSERT INTO `elevator_projects` (`id`, `building_name`, `units`, `floors`, `capacity`, `location`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`) VALUES
(1, 'FIRST GLOBAL BUILDING', '3 UNITS', '6 FLOORS', '700 KG', 'LEGASPI VILLAGE, MAKATI CITY', 'firstglobal1.png', 'firstglobal2.png', 'firstglobal3.png', 'firstglobal4.png', 'firstglobal5.png', 'firstglobal6.png', 'firstglobal7.png', 'firstglobal8.png', 'firstglobal9.png'),
(2, 'GLOBAL TOWER', '2 UNITS', '15 FLOORS', '600 KG', 'BANGKAL, MAKATI CITY', 'globaltower1.png', 'globaltower2.png', 'globaltower3.png', 'globaltower4.png', 'globaltower5.png', 'globaltower6.png', 'globaltower7.png', 'globaltower8.png', 'globaltower9.png'),
(3, 'MARBELLA CONDOMINIUM', '2 UNITS', '14 FLOORS', '1000 KG', 'ROXAS BOULEVARD, PASAY CITY', 'marbella1.png', 'marbella2.png', 'marbella3.png', 'marbella4.png', 'marbella5.png', 'marbella6.png', 'marbella7.png', 'marbella8.png', 'marbella9.png'),
(4, 'TIMSTATE BUILDING', '1 UNIT', '6 FLOORS', '750 KG', 'SOUTH SUPER HIGH-WAY, MAKATI CITY', 'timstate1.png', 'timstate2.png', 'timstate3.png', 'timstate4.png', 'timstate5.png', 'timstate6.png', 'timstate7.png', 'timstate8.png', 'timstate9.png'),
(5, 'PREMIER VIMA INC.', '1 UNIT', '4 FLOORS', '450 KG', 'STA CRUZ, MANILA', 'premier1.png', 'premier2.png', 'premier3.png', 'premier4.png', 'premier5.png', 'premier6.png', 'premier7.png', 'premier8.png', 'premier9.png'),
(6, 'THE BLULANE HOTEL', '3 UNITS', '17 FLOORS', '800 KG', 'STA CRUZ MANILA', 'blulane1.png', 'blulane2.png', 'blulane3.png', 'blulane4.png', 'blulane5.png', 'blulane6.png', 'blulane7.png', 'blulane8.png', 'blulane9.png'),
(7, 'GLIESE PREMIER PROPERTIES INC.', '1 UNIT', '8 FLOORS', '550 KG', 'QUIAPO, MANILA', 'gliese1.png', 'gliese2.png', 'gliese3.png', 'gliese4.png', 'gliese5.png', 'gliese6.png', 'gliese7.png', 'gliese8.png', 'gliese9.png'),
(8, 'GRACE ATLANTA ONE CONDOMINIUM', '2 UNITS', '7 FLOORS', '1000 KG', 'GRACE AVE GRACE VILLAGE QUEZON CITY', 'grace1.png', 'grace2.png', 'grace3.png', 'grace4.png', 'grace5.png', 'grace6.png', 'grace7.png', 'grace8.png', 'grace9.png'),
(9, 'TECHNO PLAZA ONE', '2 UNITS', '5 FLOORS', '1350 KG', 'EASTWOOD CITY LIBIS, QUEZON CITY', 'techno1.png', 'techno2.png', 'techno3.png', 'techno4.png', 'techno5.png', 'techno6.png', 'techno7.png', 'techno8.png', 'techno9.png');

-- --------------------------------------------------------

--
-- Table structure for table `elevator_projects_taiwan`
--

CREATE TABLE `elevator_projects_taiwan` (
  `id` int(11) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `floors` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elevator_projects_taiwan`
--

INSERT INTO `elevator_projects_taiwan` (`id`, `building_name`, `location`, `floors`, `capacity`) VALUES
(1, 'KAO SHIONG CITY HALL POLICE DEPT.', 'LIN YAN KAO SHIONG CITY', '8F / 10S', '15 PASSENGERS'),
(2, 'KAO SHIONG HALL DUI LONG SUBS', 'CHEN CHENG KAO  SHIONG CITY', '5F / 5S', '8 PASSENGERS'),
(3, 'TAI DONG AQUATIC PROF. SCHOOL', 'CHEN KONG TOWN TAI DONG COUNTRY', '6 & 2F / 7 & 3S', '12 / 8 / 6 PASSENGERS'),
(4, 'TAI DONG TEACHER COLLEGE', 'TAI DONG CITY', '4F / 4S', '20 PASSENGERS'),
(5, 'BUREAU OF KAO SHIONG HARBOR', 'KAO SHIONG CITY', '10F / 6S', '17 PASSENGERS'),
(6, 'TAIWAN ELEC. TAI CHONG-TAI YA', 'TAI YA TAI SHIONG CITY', '6F / 7S', '6 PASSENGERS'),
(7, 'CHONG HUA TELECOM CONTROL STA.', 'NAN ZI KAO SHIONG CITY', '5F / 3S', '9 PASSENGERS'),
(8, 'YUN LIN SCIENCE AND TECH.', 'YUN LIN COUNTRY', '5F / 5S', '15'),
(9, 'DONG HUA UNIVERSITY', 'HUA LIEN COUNTRY', '5 & 4F / 6 & 4S', '11 PASSENGERS'),
(10, 'YI TONG MOTIVE TECHNOLOGY', 'TAI NAN SCIENCE TECH. GARDEN', '5 & 3F / 6 & 2S', '17 PASSENGERS'),
(11, 'LEGISLATIVE YUAN COLLECTION BLDG.', 'SHIN TIEN NEW TAIPEI CITY', '9F / 10S', '12 PASSENGERS'),
(12, 'TAIWAN SUGAR, TA LIN ORGANISM', 'CHAI YI COUNTRY', '5F / 6S', '11 PASSENGERS'),
(13, 'TAIWAN RAILWAY, CHONG STATION', 'TAI NAN COUNTRY', '2F / 2S', '15 PASSENGERS'),
(14, 'TAIWAN RAILWAY, EVERGREEN UNIV.', 'TAI NAN COUNTRY', '3F / 2S', '12 PASSENGERS'),
(15, 'TAIWAN RAILWAY, SA RUN STATION', 'TAI NAN COUNTRY', '3F / 2S', '17 PASSENGERS'),
(16, 'TAIPEI FLOWER & PLANTS MARKET', 'NEI HU DISTINGUISH, TAIPEI CITY', '3F / 4S', '15 PASSENGERS'),
(17, 'GE TE HOSPITAL', 'CHIEN JIN KAO SHIONG CITY', '9F / 8S', '10 PASSENGERS'),
(18, 'GO YUAN CO.', 'LIU DU INDUSTRY KEELONG CITY', '5F / 6S', '13 PASSENGERS'),
(19, 'TAIWAN CEMENT, HO PIN FACTORY', 'HUA LIEN COUNTRY', '12F / 12S', '15 PASSENGERS'),
(20, 'WEN HUI INDUSTRY CO.', 'SHI ZI DISTINGUISH, NEW TAIPEI CITY', '6F / 7S', '13 PASSENGERS'),
(21, 'YUAN WAN RESIDENTIAL QUARTER', 'TAI DONG CITY', '6 & 7F / 7 & 8S', '10 PASSENGERS'),
(22, 'YUAN WAN RESIDENTIAL QUARTER', 'TAI DONG CITY', '8 & 10F / 9 & 10S', '10 PASSENGERS'),
(23, 'BA LEE CONVALESCENT HOSPITAL', 'BE LEE NEW TAIPEI CITY', '4 & 5F / 5 & 5S', '10 PASSENGERS'),
(24, 'KAO SHIONG MUSIC HALL', 'KAO SHIONG CITY', '5F / 6S', '12 PASSENGERS'),
(25, 'KAO SHIONG MUSIC HALL', 'KAO SHIONG CITY', '5 & 6F / 6 & 8F', '14 PASSENGERS'),
(26, 'FENG MING ELEMENTARY SCHOOL', 'SHIAO GANG, KAO SHIONG CITY', '3F / 3S', '12 PASSENGERS'),
(27, 'TAI DONG FEMALE SENIOR HIGH', 'TAI DONG COUNTRY', '3F / 3S', '13 PASSENGERS'),
(28, 'NAN YIN TECH. RESEARCH BLDG.', 'SHIN SHI TOWN, TAI NAN COUNTRY', '5F / 6S', '15 PASSENGERS'),
(29, 'NAN KE ELEMENTARY SCHOOL', 'TAI NAN COUNTRY', '4F / 5S', '13 PASSENGERS'),
(30, 'TAI NAN SCIENCE, TECH. GARDEN', 'TAI NAN COUNTRY', '4F / 5S', '13 PASSENGERS'),
(31, 'ER CHON LIN KUN CHEN FACTORY', 'SAN CHON DISTINGUISH, NEW TAIPEI CITY', '4F / 5S', '14 PASSENGERS'),
(32, 'THE ARMY SENIOR HIGH SCHOOL', 'TAO YUAN COUNTRY', '2 & 5F / 3 & 6S', '11 PASSENGERS'),
(33, 'FU ZHI EDUCATION LEARNING', 'GU KENG TOWN, YUN LIN COUNTRY', '4 & 5F / 4 & 5S', '12 / 15 PASSENGERS'),
(34, 'MA TONG FOREIGN FIRM BLDG.', 'CHIEN JIN, KAO SHIONG CITY', '7F / 8S', '10 PASSENGERS'),
(35, 'WU LONG SAN FENG SAN TEMPLE', 'CHI SAN DISTINGUISH, KAO SHIONG CITY', '6F / 6S', '15 PASSENGERS'),
(36, 'SHIN PU JUNIOR HIGH SCHOOL', 'BAN CHIAO, NEW TAIPEI CITY', '5F / 5S', '15 PASSENGERS'),
(37, 'TAIWAN RAILWAY, LIN PENG STA.', 'PING DONG COUNTRY', '2F / 2S', '10 PASSENGERS'),
(38, 'FORMOSA PLASTIC SHIN KONG DORM.', 'CHIA YI COUNTRY', '13F / 13S', '15 PASSENGERS'),
(39, 'FORMOSA PLASTIC SHIN KONG DORM.', 'CHIA YI COUNTRY', '3F / 4S', '15 PASSENGERS'),
(40, 'FORMOSA PLASTIC FACTORY', 'LIN YUAN DISTINGUISH, KAO SHIONG CITY', '8 & 9F / 8 & 9S', '8 PASSENGERS'),
(41, 'FORMOSA PLASTIC REN WU FACTORY', 'REN WU KAO SHIONG CITY', '7F / 7S', '8 PASSENGERS'),
(42, 'NAN YA PLASTIC CHIA YI FACTORY', 'CHIA YI COUNTRY', '7F / 7S', '8 PASSENGERS'),
(43, 'CHANG KUNG HOSPITAL, DORMITORY', 'NIAO SONG DISTINGUISH, KAO SHIONG CITY', '17F / 17S', '12 PASSENGERS'),
(44, 'CHANG KUNG HOSPITAL', 'HIAO SONG, KAO SHIONG CITY', '17F / 17S', '12 PASSENGERS'),
(45, 'CHANG KUNG HOSPITAL 123 - 9', 'HIAO SONG, KAO SHIONG CITY', '17F / 17S', '12 PASSENGERS'),
(46, 'FORMOSA PLASTIC, RESEARCH BLDG.', 'REN WU DISTINGUISH, KAO SHIONG CITY', '6F / 6S', '10 PASSENGERS'),
(47, 'KAO SHIONG CITY HALL NEW', 'CHIEN JIN, KAO SHIONG CITY', '6F / 7S', '8 PASSENGERS'),
(48, 'FENG SAN SENIOR INDUSTRY', 'SAN MING DISTINGUISH, KAO SHIONG CITY', '4F / 5S', '15 PASSENGERS'),
(49, 'PING DONG SENIOR HIGH', 'PING DONG CITY', '4F / 4S', '15 PASSENGERS'),
(50, 'AN SI ELEMENTARY SCHOOL', 'SAN SHIA DISTINGUISH, NEW TAIPEI CITY', '5F / 6S', '15 PASSENGERS'),
(51, 'DENG JIN JUNIOR HIGH SCHOOL', 'SAN MING, KAO SHIONG', '3 & 5F / 3 & 5S', '15 PASSENGERS'),
(52, 'NEIGHBORHOOD ACTIVITY CENTER', 'SHIN SHEN, KAO SHIONG CITY', '4F / 5S', '10 PASSENGERS'),
(53, 'TAI DONG TEACHER INS. UNIVERSITY', 'TAI DONG CITY', '4F / 4S', '20 PASSENGERS'),
(54, 'TAI DONG PHYSICAL EDUCATION', 'TAI DONG CITY', '4F / 4S', '20 PASSENGERS'),
(55, 'SHIN YI ELEMENTARY SCHOOL', 'CHIA LEE TOWN, TAI NAN COUNTRY', '4F / 5S', '8 PASSENGERS'),
(56, 'SHUI LEE ELEMENTARY SCHOOL', 'SHUI LEE TOWN, NAN TOU COUNTRY', '3F / 4S', '15 PASSENGERS'),
(57, 'HU SI TOWNSHIP OFFICE', 'HU SI TOWN, PONG HU COUNTRY', '4F / 4S', '9 / 15 PASSENGERS'),
(58, 'PONG HU TECHNOLOGY COLLEGE', 'PONG HU COUNTRY', '3 & 2F / 4 & 3S', '17 PASSENGERS'),
(59, 'THE PUBLIC HEALTH OFFICE TA SU', 'TA SU TOWN, KAO SHIONG COUNTRY', '5F / 6S', '12 PASSENGERS'),
(60, 'KAO SHIONG CITY HALL POLICE DEPT.', 'GU SAN DISTINGUISH, KAO SHIONG CITY', '5F / 5S', '12 PASSENGERS'),
(61, 'MEI HO TECHNOLOGY COLLEGE', 'NEI PU TOWN, PING DONG COUNTRY', '5F / 5S', '12 PASSENGERS'),
(62, 'YUN LIN COUNTRY POLICE DEPARTMENT', 'DOU NAN CITY, YUN LIN COUNTRY', '5F / 6S', '11 PASSENGERS'),
(63, 'HENG CHUN TOWN TOURISM', 'HENG CHUN TOWN, PING DONG COUNTRY', '3F / 4S', '12 PASSENGERS'),
(64, 'BLDG. 4TH TAI NAN SCIENCE TECH', 'TAI NAN COUNTRY', '2F / 2S', '12 PASSENGERS'),
(65, 'LIBRARY OF MI TUO TOWNSHIP OFFICE', 'MI TUO TOWN, LAO SHIONG COUTER', '3F / 3S', '12 PASSENGERS'),
(66, 'MORE!!!!!!...................', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `floodgate_products`
--

CREATE TABLE `floodgate_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `product_info` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floodgate_products`
--

INSERT INTO `floodgate_products` (`id`, `title`, `description`, `product_info`, `image`) VALUES
(1, 'Floodgate', '<p>Flood Gate System (Watertight Gate). After years of research and development, Dai Chen has designed the most trusted and top quality flood gate product in Taiwan. The company obtained patents in Taiwan, Japan, and Thailand and now in the Philippines. And by then, we became an exclusive distributor of Dai Chen products from Taiwan. </p>\r\n\r\n<p>The product has passed international testing standards and certificated by FM Approvals.</p>\r\n<ul> \r\n<h4>Wave test for the flood gate:</h4> \r\n<li>The height of wave shall be 10 cm. </li>\r\n<li>No leakage in 30 minutes and certificated by public authority unit.</li> </ul>\r\n<p>Obtained patents from America, China, Japan, Malaysia and Taiwan. The flood gate is easy to operate and can be deployed in 10 minutes by a single individual. The performance to stop flood is at 100% efficiency, and this product has already sold to Australia, China, Japan, Indonesia, Philippine and Thailand</p>', '<h4 class=\"text-center m-3\">Water Gate Materials</h4><div class=\"row\"><div class=\"col-sm-6 mb-3\">    <div class=\"card \">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/base_plate.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>1. Base Plate</b></h4>                                             <p class=\"card-text text-dark\">Base Plat / Rel.Material: 2 mm             SUS 304 stainless steel. Capable of holding pressure             load up to 80 tons. .Through the test results from             MIRDC (Metal             Industries Research & Development Center) .The             surface             is flat or level with the floor after plate             installation             is finished so avoid the danger of tripping.</p>                                                                                  </div>    </div></div><div class=\"col-sm-6 mb-3\">    <div class=\"card\">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/mainpill.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>2. Main Pill</b></h4>                                             <p class=\"card-text text-dark\">Material: Aluminum Stainless Steel Alloy (With some molded parts) and EPDM Rubber Seal coated . Can be applied with a variety of different situations and mounting ways. .With stainless steel fasteners to press or adhere the plank. . EPDM Rubber (Ethylene Propylene Diene Monomer):</p> <ol class=\"text-dark\"><li>Widely used in car windshield. </li><li>Ability to withstand temperatures up to 160 * and anti chemicals.</li><li>Stable in all weather and can be used for more than 10 years. </li> </ol>                                                                               </div>    </div></div>\r\n\r\n\r\n\r\n<div class=\"col-sm-6 mb-3\">    <div class=\"card\">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/water_tight_plank.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>3. Water Tight Plank</b></h4>                                             <p class=\"card-text text-dark\">Material: Aluminum Alloy EPDM Seal. The surface of each plank is coated anodized. \r\n. Each plank has a height of 16cm and 3.5cm thick. \r\n. Weight 2.785 per meter. \r\n.With 6 bones to help withstand water pressure. \r\n.With EPDM rubber strips at the bottom of each plank.\r\n.With plastic cover on both sides. \r\n. Have passed the tests from MIRDC (Metal Industries Research & Development Center): \r\nEach 1600cm2 can withstand loads up to 1300kg. </p>                                                                                  </div>    </div></div>\r\n\r\n\r\n\r\n<div class=\"col-sm-6 mb-3\">    <div class=\"card\">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/lock.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>4. Lockable Tightening Screw</b></h4>                                             <p class=\"card-text text-dark\">Material: Stainless Steel Description. \r\nTo assemble on the top of the main mullion or the bilateral mullion, rotate to tighten the planks and compact to the C type ground level. </p>                                                                                  </div>    </div></div>\r\n\r\n\r\n\r\n<div class=\"col-sm-6 mb-3\">    <div class=\"card\">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/back_support.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>5. Back Support</b></h4>                                             <p class=\"card-text text-dark\">Material: Aluminum Stainless Steel Alloy. Required to withstand water pressure load: Water pressure count based on the width and height of the flood retaining door. \r\n. Have passed the load test from MIRDC (Metal Industries Research & Development Center): The width of \r\n1 meter can withstand load 3700Kgf. \r\n.There is a base holder behind the rear:</p><ol class=\"text-dark\"> <li> With a base depth of the holder up to 5 cm.</li> \r\n<li>Parallel to the floor after the work is done.</li>  </ol>                                                                                </div>    </div></div>\r\n\r\n\r\n<div class=\"col-sm-6 mb-3\">    <div class=\"card\">        <img class=\"card-img-top\"         src=\"/storage/genserv_products/floodgate_products/bracket.png\"         alt=\"Flood Gate Image\" style=\"width:100%\">                                     <div class=\"card-body\">                                             <h4 class=\"card-title text-dark\"><b>6. Bracket Storage</b></h4>                                             <p class=\"card-text text-dark\">Material: Stainless Steel Type: Horizontal or Vertical\r\nThe products have passed international test standards and are certified by FM Approvals.test water pressure: With a water level of 70cm and average speed of more than 1 m / s.\r\n. Wave test: \r\nWith wave height should be 10 cm. There is no leak in 30 minutes and is certified by FM Approved. Obtain patents from America, China, Japan, Malaysia and Taiwan. The flood retaining door can be operated easily and installed in 10 minutes with only 1 person. 100% watertight and has been sold to Australia, China, Japan, Indonesia, Philippine and Thailand. </p>                                                                                  </div>    </div></div>\r\n\r\n\r\n<div class=\"col-sm-12\"><h4 class=\"text-center\">Flood Gate Videos</h4></div>\r\n\r\n<div class=\"col-sm-6 mb-4\">\r\n<div class=\"card p-4\">\r\n<iframe align=\'center\' width=\'100%\' height=\'400px\'\r\n src=\"https://www.youtube.com/embed/DvVBcshT4-M?rel=0\" allowfullscreen=\"allowfullscreen\">\r\n</iframe></div>\r\n</div>\r\n\r\n<div class=\"col-sm-6 mb-4\">\r\n<div class=\"card p-4\">\r\n<iframe align=\'center\' width=\'100%\' height=\'400px\'\r\n src=\"https://www.youtube.com/embed/0XDl7c9n0Qk?list=UUi7FmxuoffSQMAji1R-fFYA?rel=0\" allowfullscreen=\"allowfullscreen\">\r\n</iframe></div>\r\n</div>\r\n\r\n<div class=\"col-sm-6 mb-4\">\r\n<div class=\"card p-4\">\r\n<iframe align=\'center\' width=\'100%\' height=\'400px\'\r\n src=\"http://www.youtube.com/embed/i-l95Gzszds?rel=0\" allowfullscreen=\"allowfullscreen\">\r\n</iframe>\r\n</div>\r\n</div>\r\n\r\n</div>', 'floodgate.png');

-- --------------------------------------------------------

--
-- Table structure for table `gsat_channel_line_up`
--

CREATE TABLE `gsat_channel_line_up` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `channel` varchar(100) NOT NULL,
  `channel_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsat_channel_line_up`
--

INSERT INTO `gsat_channel_line_up` (`id`, `image`, `channel`, `channel_location`) VALUES
(1, 'gnn.png', 'Global News Network', 'LOCAL'),
(2, 'abs_cbn.png', 'ABS-CBN', 'LOCAL'),
(3, 'cnn_philippines.png', 'CNN Philippines', 'LOCAL'),
(4, 'ptv4.png', 'People\'s TV', 'LOCAL'),
(5, 'tv5.png', 'TV 5', 'LOCAL'),
(6, 'gma_news_tv.png', 'GMA News TV', 'LOCAL'),
(7, 'gma7.png', 'GMA TV', 'LOCAL'),
(8, 'sports_plus_action.png', 'ABS-CBN Sports+Action', 'LOCAL'),
(9, 'net25.png', 'Net 25', 'LOCAL'),
(10, 'aksyon_tv.png', 'Aksyon TV', 'LOCAL'),
(11, 'global_pinoy_cinema.png', 'Global Pinoy Cinema', 'LOCAL'),
(12, 'fox_filipino.png', 'Fox Filipino', 'LOCAL'),
(13, 'lotus_macau.png', 'Macau Lotus TV', 'MACAU'),
(14, 'thrill.png', 'Thrill', 'MACAU'),
(15, 'ebc.png', 'EBC Foreign Movie', 'INTERNATIONAL'),
(16, 'amc.png', 'AMC Asia', 'INTERNATIONAL'),
(17, 'kix.png', 'Kix', 'INTERNATIONAL'),
(18, 'zee_sine.png', 'Zee Sine', 'INTERNATIONAL'),
(19, 'hits.png', 'Hits', 'INTERNATIONAL'),
(20, 'tru_tv.png', 'Tru TV Asia', 'INTERNATIONAL'),
(21, 'the_q_you.png', 'The Q You', 'INTERNATIONAL'),
(22, 'discovery_science.png', 'Discovery Science Southeast Asia', 'INTERNATIONAL'),
(23, 'animal_planet.png', 'Animal Planet Southeast Asia', 'INTERNATIONAL'),
(24, 'nick_jr.png', ' Nick Jr. Asia', 'INTERNATIONAL'),
(25, 'animax.png', 'Animax Philippines', 'INTERNATIONAL'),
(26, 'aljazeera.png', 'Aljazeera English', 'INTERNATIONAL'),
(27, 'fox_news.png', 'Fox News Channel', 'INTERNATIONAL'),
(28, 'pinoy_extreme.png', 'Pinoy Extreme Channel', 'INTERNATIONAL'),
(29, 'channel_v.png', 'Channel V International', 'INTERNATIONAL'),
(30, 'motorvision.png', 'Motorvision TV', 'INTERNATIONAL'),
(31, 'dzrh_news_television.png', 'DZRH News TV', 'INTERNATIONAL'),
(32, 'daystar_television_network.png', 'Daystar TV', 'INTERNATIONAL'),
(33, 'hope_channel.png', 'Hope Channel Philippines', 'INTERNATIONAL'),
(34, 'k_channel.png', 'K Channel', 'INTERNATIONAL'),
(35, 'boomerang.png', 'Boomerang South East Asia', 'INTERNATIONAL'),
(36, 'basketball_tv.png', 'Basketball TV', 'INTERNATIONAL'),
(37, 'tve.png', 'TVE Internacional Asia', 'INTERNATIONAL'),
(38, 'cgtn_documentary.png', 'CGTN Documentary', 'INTERNATIONAL'),
(39, 'dw.png', 'DW English', 'INTERNATIONAL'),
(40, 'france_24.png', 'France 24 English', 'INTERNATIONAL'),
(41, 'lifetime.png', 'Lifetime Asia', 'INTERNATIONAL'),
(42, 'etc.png', 'ETC (Philippines)', 'INTERNATIONAL'),
(43, 'untv_news_and_rescue.png', 'UNTV', 'INTERNATIONAL'),
(44, 'ewtn.png', 'EWTN Asia-Pacific', 'INTERNATIONAL'),
(45, 'fox_philippines.png', 'Fox Philippines', 'INTERNATIONAL'),
(46, 'warner_tv.png', 'Warner TV Asia', 'INTERNATIONAL'),
(47, 'cinemax.png', 'Cinemax Asia', 'INTERNATIONAL'),
(48, 'fox_movies.png', 'Fox Movies Philippines', 'INTERNATIONAL'),
(49, 'cnn.png', 'CNN International Asia Pacific', 'INTERNATIONAL'),
(50, 'channel_news_asia.png', 'Channel News Asia', 'INTERNATIONAL'),
(51, 'bloomberg_television.png', 'Bloomberg TV Asia', 'INTERNATIONAL'),
(52, 'euro_news.png', 'Euro News English', 'INTERNATIONAL'),
(53, 'i24.png', 'I24 News English', 'INTERNATIONAL'),
(54, 'rt.png', 'RT News', 'INTERNATIONAL'),
(55, 'national_geographic.png', 'National Geographic Philippines	', 'INTERNATIONAL'),
(56, 'history.png', 'History Philippines', 'INTERNATIONAL'),
(57, 'sony_channel.png', 'Sony Channel Philippines', 'INTERNATIONAL'),
(58, 'rj_tv.png', 'RJ TV', 'INTERNATIONAL'),
(59, 'axn.png', 'AXN Philippines', 'INTERNATIONAL'),
(60, 'fox_life.png', 'Fox Life Philippines', 'INTERNATIONAL'),
(61, 'fox_family_movies.png', 'Fox Family Movies', 'INTERNATIONAL'),
(62, 'outdoor_channel.png', 'Outdoor Channel International', 'INTERNATIONAL'),
(63, 'sports_illustrated1.png', 'Sports Illustrated', 'INTERNATIONAL'),
(64, 'sports_illustrated2.png', 'Sports Illustrated 2', 'INTERNATIONAL'),
(65, 'sports_illustrated3.png', 'Sports Illustrated 3', 'INTERNATIONAL'),
(66, 'discovery_asia.png', 'Discovery Asia', 'INTERNATIONAL'),
(67, 'nat_geo_wild_asia.png', 'Nat Geo Wild Asia', 'INTERNATIONAL'),
(68, 'fox_sports_philippines.png', 'Fox Sports Philippines', 'INTERNATIONAL'),
(69, 'fox_sports_3.png', 'Fox Sports 3 Asia', 'INTERNATIONAL'),
(70, 'jack_tv.png', 'Jack TV', 'INTERNATIONAL'),
(71, 'fox_sports_philippines.png', 'Fox Sports Philippines', 'INTERNATIONAL'),
(72, 'fox_sports_2.png', 'Fox Sports 2 Asia', 'INTERNATIONAL'),
(73, 'nickelodeon.png', 'Nickelodeon Philippines', 'INTERNATIONAL'),
(74, 'cartoon_network.png', 'Cartoon Network Philippines', 'INTERNATIONAL'),
(75, 'rai_italia.png', 'Rai Italia Asia', 'INTERNATIONAL'),
(76, 'tv5_monde.png', 'TV 5 Monde Asia', 'INTERNATIONAL'),
(77, 'inc.png', 'INC TV', 'INTERNATIONAL'),
(78, 'living_asia_channel.png', 'Living Asia Channel', 'INTERNATIONAL'),
(79, 'fight_sports.png', 'Fight Sports', 'INTERNATIONAL'),
(80, 'golf_channel.png', 'Golf Channel Asia', 'INTERNATIONAL'),
(81, 'warner_tv.png', 'Warner TV Asia', 'INTERNATIONAL'),
(82, 'hbo_hd.png', 'HBO HD Asia', 'INTERNATIONAL'),
(83, 'fox_action_movies.png', 'Fox Action Movies', 'INTERNATIONAL'),
(84, 'mce.png', 'My Cinema Europe', 'INTERNATIONAL'),
(85, 'classica.png', 'Classica Asia', 'INTERNATIONAL'),
(86, 'nhk_japan.png', 'NHK World Japan', 'INTERNATIONAL'),
(87, 'ttv.png', 'TTV', 'CHINESE CHANNEL'),
(88, 'ctv.png', 'CTV (Taiwan)', 'CHINESE CHANNEL'),
(89, 'ftv.png', 'FTV (Taiwan)', 'CHINESE CHANNEL'),
(90, 'ftv_news.png', 'FTV News', 'CHINESE CHANNEL'),
(91, 'ebc_news.png', 'EBC News', 'CHINESE CHANNEL'),
(92, 'era_news.png', 'ERA News (Taiwan)', 'CHINESE CHANNEL'),
(93, 'tvbs.png', 'TVBS', 'CHINESE CHANNEL'),
(94, 'cti.png', 'CTI TV Asia', 'CHINESE CHANNEL'),
(95, 'video_land.png', 'Videoland Sports', 'CHINESE CHANNEL'),
(96, 'phoenix.png', 'Phoenix Chinese Channel', 'CHINESE CHANNEL'),
(97, 'dragon_tv.png', 'Dragon TV (China)', 'CHINESE CHANNEL'),
(98, 'hunan.png', 'Hunan TV', 'CHINESE CHANNEL'),
(99, 'cctv4.png', 'CCTV 4 Asia', 'CHINESE CHANNEL'),
(100, 'ebc.png', 'EBC Drama', 'CHINESE CHANNEL'),
(101, 'ls_time.png', 'LS Time Movie', 'CHINESE CHANNEL'),
(102, 'celestial_classic.png', 'Celestial Classic Movies', 'CHINESE CHANNEL'),
(103, 'ebc.png', 'EBC Movie', 'CHINESE CHANNEL'),
(104, 'dzmm630.png', 'DZMM Radyo Patrol 630', 'RADIO PROGRAM'),
(105, 'dzrh.png', 'DZRH', 'RADIO PROGRAM'),
(106, 'dwiz.png', 'DWIZ 882 AM', 'RADIO PROGRAM'),
(107, 'dziq.png', 'DZIQ 990 AM Radyo Inquirer', 'RADIO PROGRAM'),
(108, 'love_radio.png', 'Love Radio 90.7 Manila', 'RADIO PROGRAM'),
(109, 'home_radio.png', '97.9 Home Radio Manila', 'RADIO PROGRAM'),
(110, 'ifm.png', 'IFM Manila', 'RADIO PROGRAM'),
(111, 'jr.png', 'Jazz Main Stream', 'RADIO PROGRAM'),
(112, 'jr.png', 'Rock Music', 'RADIO PROGRAM'),
(113, 'jr.png', 'Pop Music', 'RADIO PROGRAM');

-- --------------------------------------------------------

--
-- Table structure for table `gsat_satellite_products`
--

CREATE TABLE `gsat_satellite_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `product_info` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsat_satellite_products`
--

INSERT INTO `gsat_satellite_products` (`id`, `title`, `description`, `product_info`, `image`) VALUES
(1, 'Platinum Package', 'GLOBAL SATELLITE (G-SAT) is the best alternative source of international entertainment and information in areas beyond the reach of cable television. It was born out of response to the growing demand for a better direct-to-home satellite TV provider across the Philippines. With its vast satellite footprint, its signal also reaches Asian countries like Mongolia, China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South Asia. The superior coverage of its satellite provider is even complemented by the intense security protection of its conditional access provider. This ensures security of the program content, the access system and the very technology that DTH system utilizes. Capitalizing on the latest multi-media technology,GSAT aims to carry communication and entertainment services in an affordable package that would cater to the general public. Its programming is centered on offering wide range of genre to entertain, inform and educate the viewers. ', '<h3>PRODUCT INFORMATION</h3>\r\n<ul>\r\n<p>Platinum Package is composed of:</p> \r\n<li>103 TV Programs</li> \r\n<li>10 Radio Stations</li> \r\n<li>500 php Monthly</li></ul>', 'gsat500.png'),
(2, 'Executive Package', 'GLOBAL SATELLITE (G-SAT) is the best alternative source of international entertainment and information in areas beyond the reach of cable television. It was born out of response to the growing demand for a better direct-to-home satellite TV provider across the Philippines. With its vast satellite footprint, its signal also reaches Asian countries like Mongolia, China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South Asia. The superior coverage of its satellite provider is even complemented by the intense security protection of its conditional access provider. This ensures security of the program content, the access system and the very technology that DTH system utilizes. Capitalizing on the latest multi-media technology,GSAT aims to carry communication and entertainment services in an affordable package that would cater to the general public. Its programming is centered on offering wide range of genre to entertain, inform and educate the viewers. ', '<h3>PRODUCT INFORMATION</h3>\r\n<ul>\r\n<p>Executive Package is composed of:</p> \r\n<li>72 TV Programs</li> \r\n<li>10 Radio Stations</li> \r\n<li>300 php Monthly</li></ul>', 'gsat300.png'),
(3, 'Family Package', 'GLOBAL SATELLITE (G-SAT) is the best alternative source of international entertainment and information in areas beyond the reach of cable television. It was born out of response to the growing demand for a better direct-to-home satellite TV provider across the Philippines. With its vast satellite footprint, its signal also reaches Asian countries like Mongolia, China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South Asia. The superior coverage of its satellite provider is even complemented by the intense security protection of its conditional access provider. This ensures security of the program content, the access system and the very technology that DTH system utilizes. Capitalizing on the latest multi-media technology,GSAT aims to carry communication and entertainment services in an affordable package that would cater to the general public. Its programming is centered on offering wide range of genre to entertain, inform and educate the viewers. ', '<h3>PRODUCT INFORMATION</h3>\r\n<ul>\r\n<p>Family Package is composed of:</p> \r\n<li>103 TV Programs</li> \r\n<li>10 Radio Stations</li> \r\n<li>200 php Monthly</li></ul>', 'gsat200.png'),
(4, 'Standard Package', 'GLOBAL SATELLITE (G-SAT) is the best alternative source of international entertainment and information in areas beyond the reach of cable television. It was born out of response to the growing demand for a better direct-to-home satellite TV provider across the Philippines. With its vast satellite footprint, its signal also reaches Asian countries like Mongolia, China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South Asia. The superior coverage of its satellite provider is even complemented by the intense security protection of its conditional access provider. This ensures security of the program content, the access system and the very technology that DTH system utilizes. Capitalizing on the latest multi-media technology,GSAT aims to carry communication and entertainment services in an affordable package that would cater to the general public. Its programming is centered on offering wide range of genre to entertain, inform and educate the viewers. ', '<h3>PRODUCT INFORMATION</h3> <ul> <p>Family Package is composed of:</p>  <li>34 TV Programs</li>  <li>10 Radio Stations</li>  <li>99 php Monthly</li></ul>', 'gpinoy.png'),
(5, 'IPTV (Internet Protocol Television)', 'The conventional methods to serve the television programs like cables, satellite or broadcasting are getting replaced with the broadband cables used for internet. IPTV (Internet Protocol Television) is a system where digital television services are delivered over the internet by using Internet Protocol. ', '<h3>PRODUCT INFORMATION</h3>\r\n<p>OTT TV Box is an innovative multimedia center with an android based operating sysem that allows you to play and view content without paying for cable or any monthly subscriptions, Just plug it in and discover a whole world of live TV, TV shows, sporting events,photos, music and more! </p>\r\n<ul>\r\n<h4>Hardware</h4>\r\n<li><b>CPU: </b>ARM Cortex Cuad-Core</li>\r\n<li><b>DRAM: </b>2GB DDR3</li>\r\n<li><b>Flash Memory: </b>8GB/16GB</li>\r\n</ul>\r\n<ul>\r\n<h4>Software</h4>\r\n<li><b>Operating System: </b>Android 4.4</li>\r\n<li><b>User Interface: </b>Windows 8 Interface and Android the original.</li>\r\n</ul>\r\n\r\n<ul>\r\n<h4>Audio and Video Formats</h4>\r\n<li><b>Video Resolution: </b>Up to 4kx2k ,3D-HD(1080Px2)</li>\r\n<li><b>Video Formats: </b>MPEG-1 MP/HL,MPEG-2 MP/HL,MPEG-4 Part 2,ASP,WMV/VC-1 SP/MP/AP,H.264 HP@L4.1,H.265,REAMDEO 8/9/10,M-JPEG & JPEG\r\n</li> \r\n<li><b>Video Codecs: </b>MPEG,MPE,MPG,M2V,ISO,TS,VOB,DAT,AVI,MKV,MP4,MOV,3GP,3GPP,FLC,WMV,TS,FLV,RM | Video Subtitles: SRT,SUB,IDX,PGS</li>\r\n<li><b>Audio Codecs: </b>ACC,AC-3,ADPCM,AMR-NB,MIDI,MP2,MP3,MS-ADPCM,PCM,RV40</li></ul>\r\n\r\n<ul>\r\n<h4>What\'s included?</h4>\r\n<li>OTT TV Box</li>\r\n<li>Power Adaptor</li>\r\n<li>Remote Control</li>\r\n<li>HDMI Cable</li>\r\n<li>AV Cable</li>\r\n<li>OTTV Box Manual</li>\r\n</ul>\r\n\r\n<ul>\r\n<h4>Channel</h4>\r\n<li>It has 150 channels(Taiwan, Hongkong and China Programs)</li>\r\n</ul>', 'iptv.png'),
(6, 'iGSAT Satellite Internet', 'iGsat Broadband delivers reliable, high speed, always on internet access to homes without depending on the availability of terrestrial networks. Our network connects entirely via Satellite. Whether you are in the city or the depths of the countryside or hard to reach areas, you will be able to enjoy broadband connection wherever you are \r\n', '<h3>PRODUCT INFORMATION</h3>\r\n<p>iGSAT Broadband gives exceptional performance and durability with nationwide coverage, even in the remotest areas, to support the maritime industry, medical facilities, government offices, schools, as weel as military and police comminication, command and peace and order monitoring.</p>\r\n<ul><h4>iGSAT is very POWERFUL, UNIVERSAL and ACCESSIBLE!</h4>\r\n<li>First in Asia using this technology</li>\r\n<li>High Speed, managed broadband</li>\r\n<li>Complimentary to fiber and backup for cable</li>\r\n<li>Imrove service and business effeciency</li>\r\n<li>Easy acquisition, easy installation.</li></ul>\r\n\r\n<ul>\r\n<h4>Equipment Cost Package Includes:</h4>\r\n<li>Satellite Dish</li>\r\n<li>Internet LNB(iLNB)</li>\r\n<li>Internet Modem</li>\r\n</ul>\r\n<ul>\r\n<h4>IGSAT Equipment Cost<h4>\r\n<h5>P31,999</h5>\r\n<li><b>Dish Size: </b>1m</li>                     <li><b>iLNB: </b>800mW / 2W</li>\r\n<li><b>Modem: </b>18V / 24V</li></br>\r\n<h5>P34,999</h5>\r\n<li><b>Dish Size: </b>1.2m</li>\r\n<li><b>iLNB: </b>2W</li>\r\n<li><b>Modem: </b>24V</li>\r\n</ul>\r\n\r\n<ul>\r\n<h4>Subscription Packages:</h4>\r\n<li>1Mbps/250kbps (8GB) <b>P3,000</b></li>\r\n<li>2Mbps/500kbps (12GB) <b>P5,000</b></li>\r\n<li>5Mbps/500kbps (12GB)  <b>P12,000</b></li>\r\n<li>7Mbps/1Mbps (50GB)  <b>P16,500</b></li></ul>\r\n\r\n<ul><h4>Note</h4>\r\n<li>Installation and Fabrication not yet included in the price</li>\r\n<li>Client will be the one would shoulder the transportation, freight of equipment, meal, accommodation of Technical Team.</li></ul>\r\n\r\n\r\n', 'igsat.png'),
(7, 'Bandwith Controller', 'The BANDWIDTH CONTROL SYSTEM is an original creation of AGN Solutions that enables businesses generate extra income by offering packet-size internet connectivity through a WiFi router that acts as a vending machine in its store or establishment.', '<h3>PRODUCT INFORMATION</h3>\r\n<ul><h4>WG-604 Hotspot Gateway</h4>\r\n<li>Up to 200 concurrent users ever on a HotSpot gateway/router.</li>\r\n<li> 3.5 times faster as bundling core processor with separate WLAN module.</li>\r\n<li> 3 antennas to offer unparalleled performance.</li>\r\n<li> Compatible with IEEE 802.11 b/g/n wireless LAN 2T3R.</li>\r\n<li> Web-based authentication and management.</li></ul>\r\n<ul>\r\n<h4>AG-300E FEATURE</h4>\r\n<li>Multi-function printer for account report printout.</li>\r\n<li>IEEE 802.3af PoE (power over ethernet).</li>\r\n<li>One PS/2 port for connecting to a keypad.</li>\r\n<li>10/100 mbps transfer LED light.</li>\r\n<li>Press combination hotkeys to generate billing and system summary.</li></ul>\r\n\r\n<h4>APPLICABLE FOR:</h4>\r\n<p>Hotel, restaurant, coffee shop and public wifi.</p>\r\n', 'bandwith.png'),
(8, 'Satellite Cable System(MATV/CATV)', 'Cable television is a system of delivering television programming to paying subscribers via radio frequency (RF) signals transmitted through coaxial cables, or in more recent systems, light pulses through fiber-optic cables. ... The abbreviation CATV is often used for cable television. \r\n', '<h3>PRODUCT INFORMATION</h3>\r\n<p>The cable network mimics the over-the-air radio frequency broadcast signals that you would receive via a TV antennae, but they are carried on cable. Television signals are transmitted in 6-MHz channels.CATV is a shared cable system that uses a tree-and-branch topology in which multiple households within a neighborhood share the same cable. The topology of the CATV system. </p>\r\n\r\n<ul>\r\n<li><b>Source: </b>6ft diameter Satellite</li>\r\n<li><b>Box Reciever: </b>Gsat Satellite Box Reciever</li>\r\n<li><b>Channels: </b>Local & International</li>\r\n</ul>\r\n\r\n<ul>\r\n<h4>\r\nThis system is application for:</h4>\r\n<li>Condominium</li>\r\n<li>Hotel</li>\r\n<li>Resorts</li>\r\n<li>Factories</li>\r\n</ul>', 'matv.png');

-- --------------------------------------------------------

--
-- Table structure for table `igsat_projects`
--

CREATE TABLE `igsat_projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `client` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igsat_projects`
--

INSERT INTO `igsat_projects` (`id`, `client`, `location`, `pic1`, `pic2`, `pic3`) VALUES
(1, 'BUSUANGA ISLAND PARADISE', 'BUSUANGA ISLAND PALAWAN', 'busuanga1.png', 'busuanga2.png', 'busuanga3.png'),
(2, 'SKYJET BATANES', 'BATANES', 'skyjet1.png', 'skyjet2.png', 'skyjet3.png'),
(3, 'MARCO VINCENT DIVE RESORT', 'PUERTO PRINCESA, PALAWAN', 'marco1.png', 'marco2.png', 'marco3.png');

-- --------------------------------------------------------

--
-- Table structure for table `industrial_and_security_products`
--

CREATE TABLE `industrial_and_security_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` mediumtext NOT NULL,
  `product_info` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrial_and_security_products`
--

INSERT INTO `industrial_and_security_products` (`id`, `title`, `des`, `product_info`, `image`) VALUES
(1, 'Digital Video Recorder(DVR)', 'A digital video recorder (DVR) is an electronic device that records video in a digital format to a disk drive, USB flash drive, SD memory card, SSD or other local or networked mass storage device. The term includes set-top boxes with direct to disk recording, portable media players and TV gateways with recording capability, and digital camcorders. Personal computers are often connected to video capture devices and used as DVRs; in such cases the application software used to record video is an integral part of the DVR. Many DVRs are classified as consumer electronic devices; such devices may alternatively be referred to as personal video recorders (PVRs), particularly in Canada.', '<h4>PRODUCT INFORMATION</h4> <h5>KIM-8104HTVI / KIM-8108HTVI / KIM-8116HTVI KIM-8100 Series Full HD 1080p TVI DVR monitor video host</h5><h4 class=\"m-4\">PRODUCT SPECIFICATIONS</h4><ul><li>4/8 / 16CH, 960H / 720P / 1080P TVI video and playback</li><li>Highest compression and better quality with the latest H.264 video compression technology </li><li>Dual streams can be used on both the network and the local side Set different H.264 compression quality and can output at the same time </li><li>Support 3G mobile browsing (iPhone / iPad / Android)</li> <li>Hard disk data retention days / daylight saving time / network time setting</li> <li>Remote control and keyboard control DVR group ID Set</li> <li>Compatible with traditional 960H camera</li> <li>Displacement function can be scheduled to be scheduled to start</li> <li>USB or remote firmware update</li> <li>Smart screen settings: Immediate / Playback screen Digital zoom </li><li>Playback screen digit Zoom / Play back camera Header / Date Time Position Move</li> <li>View the system action and network connection User record function</li> <li>User rights management</li> <li>Video data can be directly AVI transfer backup </li><li>DVR control: panel buttons, remote control, mouse, control keyboard, network</li> <li>Support MAC remote Monitoring</li> <li>Support NVMS-1000 control software</li></ul>', 'dvr.png'),
(2, 'Bullet Camera', 'This Bullet Camera can use in any place good high quality and very clear ', '<h4>PRODUCT INFORMATION</h4> <h5>KIM-9135T HD-TVI megapixel infrared camera</h5><h4 class=\"m-4\">PRODUCT SPECIFICATIONS</h4><ul><li>Camera components using TVI Hi-Res 1/3 \"Sensor </li><li>Resolution of megapixel 720P</li> <li>High hardness alloy housing, tough and durable</li> <li>Infrared projection distance up to 30 meters </li><li>Medium hole anti-halo lens design</li> <li>High Transmittance optical glass, better illumination</li> <li>Support OSD multi-function control menu</li> <li>Low power consumption, high power and energy saving design</li> <li>With contour correction function, no distortion during infrared start distortion</li> <li>Infrared LED light source automatically when light is low </li><li>Day and night mode Auto Switching function</li> <li>With light suppression function and automatic light source judgment function</li> <li>To prevent radio frequency interference circuit design</li> <li> ATW, backlight compensation function, according to the image automatically adjust the brightness</li></ul>', 'bullet.png'),
(3, 'Dome Camera', 'This Dome Camera can use in any place good high quality and very clear ', '<h4>PRODUCT INFORMATION</h4> <h5>KIM-9250T HD-TVI hemisphere type megapixel infrared camera</h5><h4 class=\"m-4\">PRODUCT SPECIFICATIONS</h4><ul><li>Camera components are TVI Hi-Res 1/3 \"Sensor </li><li>Resolution up to 720P </li><li>360 omni directional adjustable housing</li> <li>Infrared projection distance of up to 15 meters</li> <li>In-hole separation anti-halo lens design </li><li>High transmittance optical glass with better illumination </li><li>Support OSD multi-function</li></ul>', 'dome.png'),
(4, 'Bulb', 'LED is a highly energy efficient lighting technology, and has the potential to fundamentally change the future of lighting in the Philippines. \r\n', '<h4>PRODUCT INFORMATION</h4>\r\n<p>The light-emitting diode (LED) is one of today\'s most energy-efficient and rapidly-developing lighting technologies. Quality LED light bulbs last longer, are more durable, and offer comparable or better light quality than other types of lighting.</p>', 'bulb.png'),
(5, 'T8 Flourescent Light', 'There are three primary types of LED T8s on the market suitable for retrofits and one type that is a combination of two types. Primarily they are differentiated by how they interact with existing fluorescent ballasts. All fluorescent tubes need ballasts to operate, but not all LEDs do. Fluorescent lights require a high voltage burst to get started and then something to regulate the power that comes to the tube the ballast takes care of all of this. On the other hand, LEDs use a driver ', '<h4>PRODUCT INFORMATION</h4>\r\n<p>\r\nThe light-emitting diode (LED) is one of today\'s most energy-efficient and rapidly-developing lighting technologies. Quality LED light bulbs last longer, are more durable, and offer comparable or better light quality than other types of lighting.</p>', 't8.png'),
(6, 'Ceiling Circulation Fan', '<p>This Product can be used in House, Office, Store, Classroom of School, Hospital or Clinic. Entertainment Place, Basement and any indoor places where the ventilation is poor.</p> ', '<h4>PRODUCT INFORMATION</h4> <p>Cool and relax, Unique design rotary direction, promoting air convection and the indoor temperature quickly reach all corners of average temperature effect.  This ceiling circulation fan is using high quality ball bearing to make ceiling fan smooth, silent and durable. Applicable: Home, Office Buildings, Commercial space, Remedial classes, Public institutions, Schools are applicable.</p><div class=\"row\"><div class=\"col-sm-4\"><div class=\"card\"><div class=\"card-body\"><img class=\"card-img-top\" src=\"storage/genserv_products/industrial_and_security_products/ceiling_circulation_fan_1.png\" alt=\"Ceiling Fan Image\" style=\"width:100%\"></div></div></div><div class=\"col-sm-4\"><div class=\"card\"><div class=\"card-body\"><img class=\"card-img-top\" src=\"storage/genserv_products/industrial_and_security_products/ceiling_circulation_fan_2.png\" alt=\"Ceiling Fan Image\" style=\"width:100%\"></div></div></div><div class=\"col-sm-4\"><div class=\"card\"><div class=\"card-body\"><img class=\"card-img-top\" src=\"storage/genserv_products/industrial_and_security_products/ceiling_circulation_fan_3.png\" alt=\"Ceiling Fan Image\" style=\"width:100%\"></div></div></div></div><h4 class=\"m-4\">PRODUCT SPECIFICATIONS</h4><ul><li><b>Model :</b> PB-123</li><li><b>Power :</b> AC 220V 60Hz</li><li><b>Speed :</b> Low, Medium, High</li><li><b>Electrical (W):</b> Low 27W, Medium 37W, High 47W</li><li><b>Air Speed (CMH):</b> Low 800CMH, Medium 1200CMH, High 1500CMH </li><li><b>Noise (dBA) :</b> Low 39dB, Medium 50dB, High 58dB</li><li><b>Weight (Kg) :</b> 4.5</li><li><b>Dimmension (mm) :</b> 600mmx600mmx218mm</li></ul><h4 class=\"m-4\">Installation Process</h4><div class=\"card\"><img src=\"storage/genserv_products/industrial_and_security_products/ceiling_fan_ins.png\" alt=\"Ceiling Fan Image\" style=\"width:100%\"></div>\r\n<br>\r\n<h4 class=\"text-center\">Ceiling Circulation Fan Video</h4>\r\n<div class=\"row\">\r\n<div class=\"col-sm-12 m-y\">\r\n<div class=\"card p-4\">\r\n<iframe align=\'center\' width=\'100%\' height=\'400px\'\r\n src=\"http://www.youtube.com/embed/bb-WjSP6Q5Q?rel=0\" allowfullscreen=\"allowfullscreen\">\r\n</iframe>\r\n</div>\r\n</div></div>', 'ceiling_circulation_fan.png');

-- --------------------------------------------------------

--
-- Table structure for table `satellite_projects`
--

CREATE TABLE `satellite_projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `client` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satellite_projects`
--

INSERT INTO `satellite_projects` (`id`, `client`, `location`, `pic1`, `pic2`, `pic3`) VALUES
(1, 'SUNLIGHT ECO TOURISM ISLAND RESORT', 'CULION, NAGLAYAN ISLAND, PALAWAN', 'sunlight1.png', 'sunlight2.png', 'sunlight3.png'),
(2, 'THE BLULANE HOTEL', 'TOMAS MAPUA ST. CORONGPIN ST. BINONDO MANILA', 'blulane1.png', 'blulane2.png', 'blulane3.png'),
(3, 'KINPO ELECTRONICS INC.', 'SANTO TOMAS, BATANGAS', 'kinpo1.png', 'kinpo2.png', 'kinpo3.png'),
(4, 'DEVINE GRACE MEDICAL CENTER', 'ANTERO SORIANO HWY, GENERAL TRIAS, CAVITE', 'dgmc1.png', 'dgmc2.png', 'dgmc3.png'),
(5, 'MR.STEVEN', 'FONTANA CLARK PAMPANGA', 'steven1.png', 'steven2.png', 'steven3.png');

-- --------------------------------------------------------

--
-- Table structure for table `watergate_projects`
--

CREATE TABLE `watergate_projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `client` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watergate_projects`
--

INSERT INTO `watergate_projects` (`id`, `client`, `address`, `pic1`, `pic2`, `pic3`) VALUES
(1, 'MR. STEVE SU', 'QUEZON CITY', 'steve1.png', 'steve2.png', 'steve3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_partners`
--
ALTER TABLE `business_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceiling_fan_projects`
--
ALTER TABLE `ceiling_fan_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elevator_products`
--
ALTER TABLE `elevator_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elevator_projects_taiwan`
--
ALTER TABLE `elevator_projects_taiwan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floodgate_products`
--
ALTER TABLE `floodgate_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsat_channel_line_up`
--
ALTER TABLE `gsat_channel_line_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsat_satellite_products`
--
ALTER TABLE `gsat_satellite_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igsat_projects`
--
ALTER TABLE `igsat_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial_and_security_products`
--
ALTER TABLE `industrial_and_security_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watergate_projects`
--
ALTER TABLE `watergate_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_partners`
--
ALTER TABLE `business_partners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ceiling_fan_projects`
--
ALTER TABLE `ceiling_fan_projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `elevator_products`
--
ALTER TABLE `elevator_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `elevator_projects_taiwan`
--
ALTER TABLE `elevator_projects_taiwan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `floodgate_products`
--
ALTER TABLE `floodgate_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsat_channel_line_up`
--
ALTER TABLE `gsat_channel_line_up`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `gsat_satellite_products`
--
ALTER TABLE `gsat_satellite_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `igsat_projects`
--
ALTER TABLE `igsat_projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industrial_and_security_products`
--
ALTER TABLE `industrial_and_security_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `watergate_projects`
--
ALTER TABLE `watergate_projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
