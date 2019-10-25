-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 05:39 AM
-- Server version: 10.1.31-MariaDB
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `id` int(11) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(20) NOT NULL,
  `books_price` varchar(20) NOT NULL,
  `books_qty` varchar(20) NOT NULL,
  `available_qty` varchar(20) NOT NULL,
  `librarian_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(1, 'HTML', '42d81d6c639c15864278aaaa2306a308p15.png', 'IOE', 'ABC', '3/3/2012', '12000', '25', '25', 'Ar Pay Too'),
(2, 'CSS', '91318e068e6583ff4890d8c1532b3888p21.png', 'YOX', 'OEL', '9/1/2000', '12000', '23', '23', 'Ar Pay Too'),
(3, 'JavaScript', 'a921b8dfa4d6c9df6ba327c6a0c420a7p19.png', 'UOE', 'QWR', '3/4/1998', '2000', '10', '9', 'Ar Pay Too'),
(4, 'BootStrap', 'ba801d6bfd4395f37ddbe6946cdd195ap18.png', 'MJC', 'LOS', '4/2/2012', '9000', '12', '12', 'Ar Pay Too'),
(5, 'JQuery', 'a423713489ace9959dca0166387f81fbp17.png', 'ZNJ', 'SKL', '5/5/1999', '8000', '12', '12', 'Ar Pay Too'),
(6, 'Angular Js', '9e6492721518a81523dea44169a242f7p16.png', 'DLO', 'CKL', '3/5/2000', '7/7/2000', '5', '5', 'Ar Pay Too'),
(7, 'React Js', '73eed8e1faa30d7fe8be10aff8eec003p15.png', 'AFL', 'FLK', '4/4/2015', '5000', '6', '5', 'Ar Pay Too'),
(8, 'Vue Js', '4e09dfc93864bc584047980587ee72e9p14.png', 'NKJ', 'HJC', '1/1/2000', '6000', '9', '9', 'Ar Pay Too'),
(9, 'NodeJs', 'b4fbaeb8424e97367960cf2d188dfc23p12.png', 'NJK', 'XCD', '5/6/2015', '9500', '12', '12', 'Ar Pay Too'),
(10, 'PHP', 'ecf1956020437a9b115d39bc4adf92efp11.png', 'CJK', 'SEX', '1/1/2016', '6700', '5', '5', 'Ar Pay Too'),
(11, 'Laravel', '0246d702b6682ac29adacfc60f64c98fp10.png', 'HTG', 'FTY', '4/3/2017', '19000', '8', '7', 'Ar Pay Too'),
(12, 'MySQL', 'cea6559370ea1718b71c02a0a08f2f77p6.png', 'SPO', 'XEG', '7/1/2011', '11000', '11', '11', 'Ar Pay Too');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `student_enrollment` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_sem` varchar(50) NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_issue_date` varchar(50) NOT NULL,
  `books_return_date` varchar(50) NOT NULL,
  `to_return_date` varchar(50) NOT NULL,
  `student_user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `to_return_date`, `student_user_name`) VALUES
(3, '123456', 'Kyaw MinHein', '2', '09129837867', 'kyawmin@gmail.com', 'React Js', '23-09-2019', '', '30-09-2019', 'Kyaw Min Hein'),
(4, '123456', 'Kyaw MinHein', '2', '09129837867', 'kyawmin@gmail.com', 'NodeJs', '23-09-2019', '01-10-2019', '30-09-2019', 'Kyaw Min Hein'),
(5, '2309876', 'Kyaw ZinWin', '3', '09287615678', 'kyawzinwin@gmail.com', 'JavaScript', '21-09-2019', '', '28-09-2019', 'Kyaw Zin Win'),
(6, '12345', 'MinHtike', '2', '091234567', 'minhtike@gmail.com', 'Laravel', '01-10-2019', '', '08-10-2019', 'Min Htike');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

CREATE TABLE `librarian_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `image`) VALUES
(1, 'Ar Pay', 'Too', 'Ar Pay Too', 'arpaytoo', 'arpaytoo@gmail.com', '09876543212', '2f777c28ecd6819a47a280c357b48978p5.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollment`, `status`, `image`) VALUES
(1, 'Kyaw Min', 'Hein', 'Kyaw Min Hein', 'kyawminhein', 'kyawmin@gmail.com', '09129837867', '2', '123456', 'yes', 'bce744b4cbf516033d6b00e7bb8da51fp6.png'),
(2, 'Kyaw Zin', 'Win', 'Kyaw Zin Win', 'kyawzinwin', 'kyawzinwin@gmail.com', '09287615678', '3', '2309876', 'yes', 'd373b3f6220e4e78af2624f0a797e114p1.jpg'),
(3, 'Min', 'Htike', 'Min Htike', 'minhtike', 'minhtike@gmail.com', '091234567', '2', '12345', 'yes', 'bf2739662eb5011a2ac83eacfe04f90cp3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
