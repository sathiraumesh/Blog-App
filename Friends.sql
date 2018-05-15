-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2018 at 05:36 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Friends`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `description`, `id`) VALUES
(28, 'ssssss', 'ssssss', 52),
(30, 'ssssss', 'ssssss', 48),
(31, 'hgjgjhhhhhhh', ' jbj ', 48),
(32, 'fhfhj', 'ghjh', 48),
(39, 'hellow', 'plan', 48);

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `username`, `password`, `email`) VALUES
(17, '', 'cdf26213a150dc3ecb61', ''),
(18, 'afdaf', 'c2806ada2c0f87aba8ca', 'sfaf'),
(21, 'asfa', 'c2806ada2c0f87aba8ca', 'afaf'),
(22, 'afadfa', '5e678d4e2ae8ed66575c', 'fsfs'),
(23, 'faaf', 'c2806ada2c0f87aba8ca', 'afafaf'),
(24, 'saac', '883c4e78c9ab5786a07c', 'fa'),
(25, 'afa', 'e0081f9b15ca28fe12c7', 'safa'),
(27, 'afaasfafa', 'd204a5e2d6307740f4ba', 'safa'),
(28, 'safafafaf', '75aaa85af34246305f97', 'afafafafafafafa'),
(29, 'afdafafaf', '75418e322fbbc9302cdd', 'afafafaf'),
(30, 'nimesha', 'cdf26213a150dc3ecb61', ''),
(31, 'cvz`v', '47d30bfe44e74d17cb4b', '`zvz'),
(32, 'nimesh', 'c2806ada2c0f87aba8ca', 'faf'),
(34, 'gfhdhdghdshss', 'cdf26213a150dc3ecb61', 'faf'),
(35, 'afsgsfg', '7a50745a0f585de6cf75', 'faf'),
(36, 'london', 'c2806ada2c0f87aba8ca', 'faf'),
(37, 'asa', 'asas', 'adada'),
(40, 'asfaf', 'uuuuuu', 'sathiraumesh@gmail.com'),
(45, 'sasd', 'sada', 'nuwan@gmail.com'),
(46, 'neesha', 'daba', 'neesh@gmail.com'),
(48, 'sathiraumesh', 'sathiraumesh12', 'sathiraumesh@gmail.com'),
(52, 'n', 'n', 'n@gmail.com'),
(53, 'g', 'g', 'gim@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_credentials` (`id`);
