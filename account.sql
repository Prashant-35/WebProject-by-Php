-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2021 at 03:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `userid` varchar(4) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobileno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `userid`, `password`, `mobileno`) VALUES
('Prashant', 'sahani98@gmail.com', '035', '035', '7584963210');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `serialno` int(100) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `authorname` varchar(45) NOT NULL,
  `pubname` varchar(45) NOT NULL,
  `pubid` varchar(5) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`serialno`, `bookname`, `authorname`, `pubname`, `pubid`, `pdf`, `quantity`) VALUES
(1, 'Data Structure', 'DR. Gyanendra Tiwari', 'Kashi Book', '01', '', '10'),
(2, 'Software Engineering', 'Dr. Sunil Yadav', 'Kashi Book', '02', '', '10'),
(3, 'Operating System', 'Dr. Prashant', 'Kashi Book', '03', '', '9');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `username` varchar(45) NOT NULL,
  `bookname` varchar(45) NOT NULL,
  `authorname` varchar(45) NOT NULL,
  `approve` varchar(45) NOT NULL,
  `issue` varchar(45) NOT NULL,
  `return` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`username`, `bookname`, `authorname`, `approve`, `issue`, `return`) VALUES
('tiwari123@gmail.com', 'Data Structure', 'DR. Gyanendra Tiwari', 'yes', '01/09/2021', '10/09/2021'),
('shivamtiwari12@gmail.com', 'Operating System', 'Dr. Prashant', 'yes', '2021/09/21', '2021/10/21'),
('shivamtiwari12@gmail.com', 'Operating System', 'Dr. Prashant', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileno` varchar(13) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`firstname`, `lastname`, `email`, `password`, `mobileno`, `rollno`, `branch`, `pic`) VALUES
('Prashant', 'Sahani', 'sahani98@gmail.com', 'sahani@98', '7485965263', '1020304120', 'cse', 'IMG-20200206-WA0016.jpg'),
('Nidhi', 'Tiwari', 'tiwari123@gmail.com', 'tiwari123@', '9586741523', '1425637892', 'cse', 'IMG-20200206-WA0016.jpg'),
('Shivam', 'Tiwari', 'shivamtiwari12@gmail.com', 'Shivam@123', '7894567485', '1452631111', 'cse', 'IMG-20200206-WA0016.jpg'),
('Srijan ', 'Singh', 'srijan32@gmail.com', '12345', '9586741230', '1245631020', 'cse', 'IMG20190801051056.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE `returnbook` (
  `username` varchar(45) NOT NULL,
  `bookname` varchar(45) NOT NULL,
  `authorname` varchar(45) NOT NULL,
  `return` varchar(45) NOT NULL,
  `issue` varchar(45) NOT NULL,
  `approve` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returnbook`
--

INSERT INTO `returnbook` (`username`, `bookname`, `authorname`, `return`, `issue`, `approve`) VALUES
('tiwari123@gmail.com', 'Data Structure', 'DR. Gyanendra Tiwari', '10/09/2021', '01/09/2021', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`pubid`),
  ADD UNIQUE KEY `serialno` (`serialno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `serialno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
