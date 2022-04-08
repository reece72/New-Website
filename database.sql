-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 02:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpwebsite`
--
CREATE DATABASE IF NOT EXISTS `phpwebsite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpwebsite`;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `chapterID` int(12) NOT NULL,
  `chapterTitle` varchar(255) NOT NULL,
  `chapterContent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`chapterID`, `chapterTitle`, `chapterContent`) VALUES
(1, 'Chapter 1 - Processor Components', '<h1>CPU, CU and ALU</h1>\n    <p>CPU stands for Central Processing Unit. The CPU is the primary component of a computer that processes instructions. It runs the operating system and applications, 			constantly receiving input from the user or active software programs.</p>\n    <p>CU stands for Control Unit and is an integrated circuit in a processor that controls the input and output. It receives instructions from a program, then passes them to\n    the arithmetic logic unit ALU.</p>\n    <p>ALU stands for Arithmetic Logic Unit and is a digital circuit that is used to perform arithmetic and logic operations. It represents the fundamental building block of 		the central processing unit of a computer. Modern CPUs contain very powerful and complex ALUs.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(2, 'Reece Norman', 'reecegnorman@gmail.com', 'Fatti', '$2y$10$8UWlL/M2TEnatOQCy3wmcu80g6US/jHgleAwvy2FSfDJyd5ncYU4y'),
(3, 'George Norman', 'georgernorman@gmail.com', 'George1', '$2y$10$2JZMKDNNQqdT2TktYfn9b.sYVclJ.DauX0E42kRlPuMe4O13Bcbsa'),
(4, 'Reece Norman', 'abc@gmail.com', '123', '$2y$10$bqisYm27O.APWukLYElqBuxpNm/i7y/zu6bohAqS0SGeIf7TTF1lK'),
(5, 'Jake Norman', 'jakewnorman@gmail.com', 'Jake', '$2y$10$aY2fZf1a/wwsD0oHGPvWRevjc.Omgz4CM5lwryiWUJFitujJDIhK.'),
(6, 'Mike Cole', 'mc1920@gmail.com', 'Mike', '$2y$10$POABo71Tfoe9RjABFMRXE.0AoohJeuJSjIWoJ9T/vvvts9VZJCZ6y'),
(7, 'Joanne Norman', 'jwn@gmail.com', 'J', '$2y$10$jlaOUJXdonYxXcl00gcgneXtZ5.IpD8CyPZAJgToxfrPV1EbPYnum'),
(8, 'Kai Dude', 'kai123@gmail.com', 'k12k1jsq', '$2y$10$2ZFH6sDZEphnUGq7qQ0LO.OfVbKs9s8JpmtIPgPfuxQ/QzKPdmeEO'),
(9, 'deep', 'deep@deep.com', 'deep', '$2y$10$lLn5EJ68514scZTGM4Jl0uDk/kJLcuXIW5EVX9o4LRpderX9QIJfO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`chapterID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `chapterID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;