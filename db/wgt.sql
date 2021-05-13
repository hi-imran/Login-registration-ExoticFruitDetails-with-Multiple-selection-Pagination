-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 04:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `wgt`
--

CREATE TABLE `wgt` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `timestamp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wgt`
--

INSERT INTO `wgt` (`id`, `pname`, `image`, `price`, `title`, `desc`, `timestamp`) VALUES
(5, 'Exotic Fruit 1', 'user_uploads/1620560105_ExoticFruit1.jpg', 100, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560105),
(7, 'Exotic Fruit 2', 'user_uploads/1620560570_ExoticFruit2.jpg', 200, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560570),
(8, 'Exotic Fruit 3', 'user_uploads/1620560654_ExoticFruit3.jpg', 300, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560654),
(9, 'Exotic Fruit 4', 'user_uploads/1620560796_ExoticFruit4.jpg', 400, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560796),
(10, 'Exotic Fruit 5', 'user_uploads/1620560824_ExoticFruit5.jpg', 500, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560824),
(11, 'Exotic Fruit 6', 'user_uploads/1620560843_ExoticFruit6.jpg', 600, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560843),
(13, 'Exotic Fruit 8', 'user_uploads/1620560882_ExoticFruit8.jpg', 800, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560882),
(14, 'Exotic Fruit 9', 'user_uploads/1620560899_ExoticFruit9.jpg', 900, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560899),
(15, 'Exotic Fruit 10', 'user_uploads/1620560915_ExoticFruit10.jpg', 1000, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560915),
(16, 'Exotic Fruit 11', 'user_uploads/1620560931_ExoticFruit11.jpg', 1100, 'Must Eat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque augue ipsum, maximus id vehicula qu', 1620560931);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wgt`
--
ALTER TABLE `wgt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wgt`
--
ALTER TABLE `wgt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
