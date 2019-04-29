-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 10:45 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_firstname` varchar(255) NOT NULL,
  `admin_surname` varchar(255) NOT NULL,
  `admin_othername` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `admin_firstname`, `admin_surname`, `admin_othername`, `admin_email`, `admin_password`) VALUES
(1, 'blay3000', 'kojo', 'Blay', 'Danquah', 'blaydanq12@gmail.com', 'blay3000');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `prod_id`, `cat_desc`) VALUES
(123, 'Men\'s', 413, 'its comprises of men\'s wear');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `studentid` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `prod_id` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_pic` blob NOT NULL,
  `unit_sales_price` int(11) NOT NULL,
  `unit_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`studentid`, `Name`, `contact`, `prod_id`, `prod_name`, `prod_desc`, `prod_pic`, `unit_sales_price`, `unit_in_stock`) VALUES
(10987654, 'Eric Nana Owusu', '0578512248', 107, 'LION', 'very big and cute\r\nwith nice stripes', 0x636f75726167652e6a7067, 1200, 1),
(10472376, '', '0244168803', 213, 'Play station 4', 'black in colour and so good', 0x696d616765732e6a7067, 1200, 3);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `othername` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `studentid`, `firstname`, `surname`, `othername`, `contact`, `emailaddress`, `password`, `confirmpassword`) VALUES
(1, '10230987', 'Ransford', 'Tettey', 'Khareem', '0244676108', 'ranskhareem@yahoo.com', 'ransaquinas', 'ransaquinas'),
(2, '10472376', 'Michael', 'mcalister', 'kevin', '0', 'kevandy@gmail.com', 'kevandy', 'kevandy'),
(3, '10567890', 'Robert', 'Arthur', 'Nii Ayi', '0502349809', 'robertarthur@gmail.com', 'robertarthur', 'robertarthur'),
(4, '10472367', 'Eric', 'Owusus', 'Junior', '0578512248', 'ericowus@gmail.com', '10173', 'ericowus'),
(5, 'roland123', 'Roland', 'Lamar', 'Akwesi', '0243121234', 'kwesilamar123@yahoo.com', 'rhowdre', 'rhowdre'),
(6, 'Kelvin456', 'Kelvin', 'Kwamena', 'Cole', '0576123456', 'kelvincole@yahoo.com', 'cole123', 'cole123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
