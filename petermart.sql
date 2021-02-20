-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petermart`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `userid` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`userid`, `name`, `email`, `pass`, `role`) VALUES
(4, 'admin', 'admin', '9b6ffc02932f733e8dcc686081a2fbd8', 'admin'),
(6, 'bishal', 'bishal@gmail.com', '4c2baf35d8d773b24d9444e1edf9faa0', 'user'),
(7, 'peter', 'peter.karki0422@gmail.com', '4c2baf35d8d773b24d9444e1edf9faa0', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `imgloco` varchar(50) DEFAULT NULL,
  `sub` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodid`, `name`, `type`, `price`, `imgloco`, `sub`) VALUES
(309, 'Animal Crossing ', 'game', '5000', 'submitconf/upload/animalcrossing.png', 'nin'),
(310, 'Cyber Punk 2077', 'game', '5000', 'submitconf/upload/cyberpunk.png', 'pc'),
(311, 'Doom Eternal', 'game', '5000', 'submitconf/upload/doom.png', 'pc'),
(312, 'Final Fantasy 7', 'game', '5000', 'submitconf/upload/final.png', 'ps'),
(313, 'Last of us ', 'game', '5000', 'submitconf/upload/lastofus.png', 'ps'),
(314, 'Cheery RGB KB', 'tech', '4000', 'submitconf/upload/cheery.png', 'acc'),
(315, 'GTX 3080', 'tech', '400000', 'submitconf/upload/gtx3080.png', 'acc'),
(316, 'I7 GTX 2080 Night', 'tech', '600000', 'submitconf/upload/night.png', 'pclp'),
(317, 'Razor blade 15', 'tech', '250000', 'submitconf/upload/razor15.png', 'pclp'),
(318, 'Viper RGB ', 'tech', '4000', 'submitconf/upload/viper.png', 'acc'),
(319, 'Dragon Japanese Art', 'merch', '1000', 'submitconf/upload/dragon.png', 'yt'),
(320, 'Dream', 'merch', '800', 'submitconf/upload/dream.png', 'yt'),
(321, 'Goku', 'merch', '800', 'submitconf/upload/goku.png', 'game'),
(322, 'jake hill', 'merch', '800', 'submitconf/upload/jakehill.png', 'yt'),
(323, 'Pewdiepie ', 'merch', '1000', 'submitconf/upload/pewd.png', 'yt'),
(324, 'vagita', 'merch', '1000', 'submitconf/upload/vegita.png', 'meme'),
(325, 'Alyx Half Life', 'game', '5000', 'submitconf/upload/alex.png', 'pc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
