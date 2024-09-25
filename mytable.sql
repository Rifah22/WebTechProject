-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 11:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` varchar(200) NOT NULL,
  `cus_name` text NOT NULL,
  `cus_address` varchar(200) NOT NULL,
  `contact` int(200) NOT NULL,
  `del_date` date NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `cus_name`, `cus_address`, `contact`, `del_date`, `payment_status`, `status`, `amount`) VALUES
('1122', 'hamid', 'dhaka', 17866864, '2024-09-17', 'unpaid', 'pending', 57890),
('2234', 'asif', 'Dhaka', 1546789906, '2024-09-25', 'unpaid', 'pending', 3000),
('2235', 'samin', 'Dhaka', 1889565829, '2024-09-27', 'paid', 'Delivered', 4000),
('2265', 'saymon', 'Barisal', 1889362789, '2024-09-12', 'Paid', 'Delivered', 4000),
('4400', 'ashik', 'comilla', 1789964367, '2024-09-11', 'unpaid', 'pending', 69000),
('5454', 'shayan', 'Dhaka', 1876589865, '2024-09-12', 'Paid', 'Delivered', 8000),
('6678', 'hasan', 'dhaka', 189986896, '2024-09-26', 'unpaid', 'pending', 7800),
('7799', 'amir', 'dhaka', 167889875, '2024-09-17', 'unpaid', 'pending', 9000),
('8784', 'rifah', 'dhaka', 1878399327, '2024-09-04', 'unpaid', 'Delivered', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
