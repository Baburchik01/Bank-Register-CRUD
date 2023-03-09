-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 06:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  'surname' varchar(255) NOT NULL,
  'patronymic' varchar(255) NOT NULL,
  'DataOfBirth' date NOT NULL,
  'PassportSeries' varchar(255) NOT NULL,
  'NumberOfPassport' varchar(255) NOT NULL,
  'IssuedBy' varchar(255) NOT NULL,
  'DataOfIssue' date NOT NULL,
  'IdentNumber' varchar(255) NOT NULL,
  'PlaceOfBirth' varchar(255) NOT NULL,
  'AddressOfActualResidence' varchar(255) NOT NULL,
  'HomePhone' varchar(255) NOT NULL,
  'MobilePhone' varchar(255) NOT NULL,
  'Email' varchar(255) NOT NULL,
  'PlaceOfWork'varchar(255) NOT NULL,
  'JobTitle' varchar(255) NOT NULL,
  'MonthlyIncome' decimal NOT NULL,
  'CityOfActualResidence' varchar(255) NOT NULL,
  'CityOfResidence' varchar(255) NOT NULL,
  'FamilyStatus' varchar(255) NOT NULL,
  'Citizenship' varchar(255) NOT NULL,
  'Disability' varchar(255) NOT NULL,
  `pensioner` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
