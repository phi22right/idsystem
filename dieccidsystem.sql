-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dieccidsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(11) NOT NULL,
  `employee_code` varchar(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_designation` varchar(255) NOT NULL,
  `employee_team` varchar(255) NOT NULL,
  `employee_contact` varchar(255) NOT NULL,
  `employee_dob` varchar(255) NOT NULL,
  `employee_address` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_sss` varchar(255) NOT NULL,
  `employee_hdmf` varchar(255) NOT NULL,
  `employee_phic` varchar(255) NOT NULL,
  `employee_tin` varchar(255) NOT NULL,
  `employee_hired` varchar(255) NOT NULL,
  `emergency_name` varchar(255) NOT NULL,
  `emergency_number` varchar(255) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `employment` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `employee_code`, `employee_name`, `employee_designation`, `employee_team`, `employee_contact`, `employee_dob`, `employee_address`, `employee_email`, `employee_sss`, `employee_hdmf`, `employee_phic`, `employee_tin`, `employee_hired`, `emergency_name`, `emergency_number`, `emergency_address`, `employment`, `employee_status`) VALUES
(1, '03022020-0020', 'NIEVES, PHILIPPE MARCEL P.', 'SURVEY/DESIGN', 'ADMIN', '09653245570', '1998-03-31', '0984 Datoc Compound, Zone 1, Digos City', 'philippenieves@gmail.com', '', '', '', '747-279-307-000', '2020-03-02', 'Ronilyn P. Nieves', '09093414596', '0984 Datoc Compound, Zone 1, Digos City', 'FJL', 'Active'),
(2, '01272020-0012', 'VILLARBA, GIL JOEL', 'DESIGN', 'ADMIN', '09654261361', '1995-06-22', 'Poblacion, Malalag, Davao del Sur', 'joelvillarba@gmail.com', '09-3627113-6', '', '1620-1297-5252', '', '2020-01-27', 'Josephine Villarba', '09196443574', 'Poblacion, Malalag, Davao del Sur', 'FJL', 'Active'),
(3, '01072019-0009', 'BERENGUER, CHERRY', 'MOTORPOOL SUPERVISOR', 'ADMIN', '09460032458', '1986-12-01', 'P-5 Velarde Comp., Brgy. Baliok, Talomo Dist., Davao City', 'fjlberenguer010719@gmail.com', '09-3241968-8', '', '16-025429535-0', '477-493-150-000', '2019-01-07', 'Teofisto Berenguer', '09985640226', 'P-5 Velarde Comp., Brgy. Baliok, Talomo Dist., Davao City', 'FJL', 'Active'),
(4, '02162019-0010', 'CAINGCOY, ARVIN JOHN', 'SPLICING HEAD', 'ADMIN', '09468789201', '1995-12-30', 'Crossing Baybay, Malalag, Davao del Sur', 'ajcaingcoy@fjl2017.com', '', '', '', '761-680-651-000', '2019-02-16', 'Jose Caingcoy Jr.', '09484307376', 'Crossing Baybay, Malalag, Davao del Sur', 'FJL', 'Active'),
(5, '11232019-0011', 'ISOGON, ARISTON', 'DESIGN', 'ADMIN', '09104158595', '1989-01-06', 'Poblacion, Magpet, North Cotabato', 'fjlaristonisogon@gmail.com', '09-434349-2', '', '17-025603350-2', '713-191-076', '2019-11-23', 'Evangeline Isogon', '09104148729', 'Poblacion, Magpet, North Cotabato', 'FJL', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_code` (`employee_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
