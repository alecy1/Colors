-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 06:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listadequehaceres`
--
CREATE DATABASE IF NOT EXISTS `listadequehaceres` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `listadequehaceres`;

-- --------------------------------------------------------

--
-- Table structure for table `listdeitems`
--

CREATE TABLE `listdeitems` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listdeitems`
--

INSERT INTO `listdeitems` (`Id`, `Nombre`) VALUES
(0, 'Codifique con el lenguaje php'),
(1, 'Codifique el diseño con css'),
(2, 'Codifique con JavaScript'),
(3, 'Diseñe 4 plantillas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listdeitems`
--
ALTER TABLE `listdeitems`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listdeitems`
--
ALTER TABLE `listdeitems`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;




