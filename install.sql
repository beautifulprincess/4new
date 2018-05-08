-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 05:39 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.16-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `4new`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `referralCode` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `referralFrom` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `createdAt` datetime,
  `status` int(1) NOT NULL DEFAULT 0,
  `verifyHash` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `firstname`, `lastname`, `password`, `country`, `referralCode`, `referralFrom`, `level`, `createdAt`, `status`) VALUES
(1, 'admin@4new.com', 'Super', 'Admin', 'Admin!23', '1', '12345', '', 9, now(), 1);
