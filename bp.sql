-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 07:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_email`, `c_pass`, `c_phone`, `created_at`, `updated_at`) VALUES
('c-0001', 'Shuvo', 'smshuvo35-1516@diu.edu.bd', '000000', '01762128000', NULL, NULL),
('c-0002', 'Oliullah', 'oli35-1565@diu.edu.bd', '101010', '0174548645', NULL, NULL),
('c-0003', 'Rakib', 'nurhossen35-2019@diu.edu.bd', '101010', '01854253654', NULL, NULL),
('c-0004', 'Miraj', 'miraj35-1548@diu.edu.bd', '444444', '01836365454', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_age` int(11) NOT NULL,
  `m_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `m_name`, `m_email`, `m_pass`, `m_age`, `m_phone`, `m_date`, `m_post`, `m_area`, `free`, `created_at`, `updated_at`) VALUES
('m-01', 'test1', 'test@admin.io', '123456', 25, '0161111111', '2019-08-04', 'SR', 'Mirpur', 'yes', NULL, NULL),
('m-02', 'test2', 'test2@admin.io', '123456', 25, '0161111111', '2019-08-04', 'SR', 'Mirpur', 'yes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_10_052937_create_manager_table', 1),
(2, '2019_07_10_082544_create_worker_table', 2),
(3, '2019_07_10_095425_create_client_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dscp` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) DEFAULT NULL,
  `m_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_phone`, `dscp`, `c_floor`, `n_floor`, `c_add`, `n_add`, `cost`, `m_id`, `w_id`) VALUES
('s-01', 'Shuvo', '01762128000', '2 bed, 3 almirah, 4 table', '6', '7', '102/Shukrabad,Dhanmondi-32', 'Road-11,house-51,Kollyanpur', 2000, 'm-01', 'w-001'),
('s-02', 'test', '01762128000', '2 bed, 3 almirah, 4 table', '7', '9', 'House-78,Dhanmondi-32', 'Road-2,house-51,Kollyanpur', 2000, 'm-02', 'w-001');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `w_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_age` int(11) NOT NULL,
  `w_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`w_id`, `w_name`, `w_email`, `w_age`, `w_phone`, `w_date`, `w_area`, `free`) VALUES
('w-001', 'Oli', 'oli35-1565@diu.edu.bd', 25, '0174567823', '2019-07-29', 'Dhamondi', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`w_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
