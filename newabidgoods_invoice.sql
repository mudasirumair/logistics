-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2020 at 12:55 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newabidgoods_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_loc`
--

CREATE TABLE `add_loc` (
  `In_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_loc`
--

INSERT INTO `add_loc` (`In_location`) VALUES
('Ferozpur'),
('islamabad'),
('karachi'),
('Lahore'),
('Manga Mandi'),
('New Karachi'),
('Raiwind'),
('Scheme 33');

-- --------------------------------------------------------

--
-- Table structure for table `add_messer`
--

CREATE TABLE `add_messer` (
  `In_messer` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_messer`
--

INSERT INTO `add_messer` (`In_messer`) VALUES
('Az Gard'),
('Az Gard Nine Ltd (Cotton Yarn)'),
('Az Gard Nine Ltd (Fabric)'),
('Az Gard Nine Ltd (Garments)'),
('Azgard Nine Ltd (Import/Garments)'),
('imran'),
('Malik  imram khan balti wala'),
('Malik  imram khan from kabul'),
('New Karachi'),
('S Fazal Illahi'),
('S.FAZAL ILLAHI & SONS'),
('S.FAZAL ILLAHI & SONS IMMPORT'),
('Scheme 33'),
('umair');

-- --------------------------------------------------------

--
-- Table structure for table `builti`
--

CREATE TABLE `builti` (
  `messer` varchar(11) DEFAULT NULL,
  `from_c` varchar(11) DEFAULT NULL,
  `to` varchar(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `rec_amo` int(11) DEFAULT NULL,
  `particular` varchar(11) DEFAULT NULL,
  `invoice_num` int(11) DEFAULT NULL,
  `shipping_line` int(11) DEFAULT NULL,
  `builti_num` int(11) NOT NULL,
  `ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `builti`
--

INSERT INTO `builti` (`messer`, `from_c`, `to`, `data`, `rec_amo`, `particular`, `invoice_num`, `shipping_line`, `builti_num`, `ammount`) VALUES
('umair', 'karachi', 'karachi', '2019-05-13', 5000, 'suger', 103, 777, 222, 25000),
('umair', 'lohor', 'karachi', '2019-05-17', 12000, 'suger', 101, 222, 333, 85000),
('imran', 'karachi', 'karachi', '2019-05-30', 12000, 'salt', 102, 888, 555, 25000),
('ewrwe', 'rwerw', 'erewr', '0000-00-00', 3424234, 'suger', 101, 999, 888, 25000),
('asgard ', 'karachi', 'karachi', '2019-05-28', 5000, 'suger', 105, 74185, 1016, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `ID` int(20) NOT NULL,
  `In_date` date DEFAULT NULL,
  `In_messer` varchar(100) DEFAULT NULL,
  `In1_date` varchar(15) NOT NULL,
  `In_to_loc` varchar(25) DEFAULT NULL,
  `In_from_loc` varchar(25) DEFAULT NULL,
  `Invoice_ID` int(10) NOT NULL,
  `In_total_amo` int(25) DEFAULT NULL,
  `In_rec_amo` int(25) DEFAULT NULL,
  `In_truck1` varchar(10) NOT NULL,
  `In_truck2` varchar(10) NOT NULL,
  `In_truck3` varchar(10) NOT NULL,
  `In_truck4` varchar(10) NOT NULL,
  `In_truck5` varchar(10) NOT NULL,
  `In_truck6` varchar(10) NOT NULL,
  `In_truck7` varchar(10) NOT NULL,
  `In_truck8` varchar(10) NOT NULL,
  `In_truck9` varchar(10) NOT NULL,
  `In_truck10` varchar(10) NOT NULL,
  `In_con1` int(5) NOT NULL,
  `In_con2` int(5) NOT NULL,
  `In_con3` int(5) NOT NULL,
  `In_con4` int(5) NOT NULL,
  `In_con5` int(5) NOT NULL,
  `In_con6` int(5) NOT NULL,
  `In_con7` int(5) NOT NULL,
  `In_con8` int(5) NOT NULL,
  `In_con9` int(5) NOT NULL,
  `In_con10` int(5) NOT NULL,
  `In_ship1` varchar(15) NOT NULL,
  `In_ship2` varchar(15) NOT NULL,
  `In_ship3` varchar(15) NOT NULL,
  `In_ship4` varchar(15) NOT NULL,
  `In_ship5` varchar(15) NOT NULL,
  `In_ship6` varchar(15) NOT NULL,
  `In_ship7` varchar(15) NOT NULL,
  `In_ship8` varchar(15) NOT NULL,
  `In_ship9` varchar(15) NOT NULL,
  `In_ship10` varchar(15) NOT NULL,
  `In_builti1` varchar(10) NOT NULL,
  `In_builti2` varchar(10) NOT NULL,
  `In_builti3` varchar(10) NOT NULL,
  `In_builti4` varchar(10) NOT NULL,
  `In_builti5` varchar(10) NOT NULL,
  `In_builti6` varchar(10) NOT NULL,
  `In_builti7` varchar(10) NOT NULL,
  `In_builti8` varchar(10) NOT NULL,
  `In_builti9` varchar(10) NOT NULL,
  `In_builti10` varchar(10) NOT NULL,
  `In_part1` varchar(50) NOT NULL,
  `In_part2` varchar(50) NOT NULL,
  `In_part3` varchar(50) NOT NULL,
  `In_part4` varchar(50) NOT NULL,
  `In_part5` varchar(50) NOT NULL,
  `In_part6` varchar(50) NOT NULL,
  `In_part7` varchar(50) NOT NULL,
  `In_part8` varchar(50) NOT NULL,
  `In_part9` varchar(50) NOT NULL,
  `In_part10` varchar(50) NOT NULL,
  `In_amount1` int(20) NOT NULL,
  `In_amount2` int(20) NOT NULL,
  `In_amount3` int(20) NOT NULL,
  `In_amount4` int(20) NOT NULL,
  `In_amount5` int(20) NOT NULL,
  `In_amount6` int(20) NOT NULL,
  `In_amount7` int(20) NOT NULL,
  `In_amount8` int(20) NOT NULL,
  `In_amount9` int(20) NOT NULL,
  `In_amount10` int(20) NOT NULL,
  `amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(16, 'umair', 'umair@gmail.com', 'pass', '2019-11-14 12:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_loc`
--
ALTER TABLE `add_loc`
  ADD PRIMARY KEY (`In_location`);

--
-- Indexes for table `add_messer`
--
ALTER TABLE `add_messer`
  ADD PRIMARY KEY (`In_messer`);

--
-- Indexes for table `builti`
--
ALTER TABLE `builti`
  ADD PRIMARY KEY (`builti_num`) USING BTREE;

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
