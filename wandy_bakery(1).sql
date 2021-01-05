-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wandy_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` int(255) NOT NULL,
  `cake_type` varchar(255) NOT NULL,
  `cake_picture` varchar(255) NOT NULL,
  `cake_description` varchar(255) NOT NULL,
  `who_posted` varchar(255) NOT NULL,
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `cake_type`, `cake_picture`, `cake_description`, `who_posted`, `day`, `month`, `year`) VALUES
(4, 'baby', 'uploads/_20170826_211100.JPG', 'iyfug', '33', 10, 3, 2019),
(6, 'baby', 'uploads/2969e1a044fb6decfaed01eb810a23d0--nicolas-cage-attitude-quotes.jpg', 'jss', '33', 10, 3, 2019),
(7, 'anniversary', 'uploads/10978683_752010471561146_7434583358381014141_n.jpg', 'aakjKAKKABKBBSK', '33', 10, 3, 2019),
(8, 'appreciation', 'uploads/70 Best of iPhone Wallpapers Backgrounds in 2019 - Fafifu.jpeg', 'sosxiosoxsxs', '33', 10, 3, 2019),
(9, 'wedding', 'uploads/10978683_752010471561146_7434583358381014141_n.jpg', 'ssw', '33', 10, 3, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `message`, `day`, `month`, `year`) VALUES
(1, 'hhh', 'jjjjjjk', 'uhihihiihihi', 10, 3, 2019),
(2, 'hhh', 'jjjjjjk', 'uhihihiihihi', 10, 3, 2019),
(3, 'rrrr', 'giugiu', 'knknkn', 10, 3, 2019),
(4, '_20170826_211100.JPG', 'oihgf', '', 10, 3, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
