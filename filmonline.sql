-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 06:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `filmonline`
--
CREATE DATABASE IF NOT EXISTS `filmonline` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `filmonline`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `userName`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'Admin@admin.com', 'admin', 1),
(2, 'user', 'user@user.com', 'user', 2),
(3, '1', 'admin@admin.com', 's', 2),
(4, 'asd', 'sadasd@sadsad.com', 'asdasdasd', 2);
COMMIT;