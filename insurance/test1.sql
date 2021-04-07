-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 02:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcustomerr` ()  SELECT * FROM customerr$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `agent_new`
--

CREATE TABLE `agent_new` (
  `id` bigint(250) NOT NULL,
  `Agent_code` varchar(250) NOT NULL,
  `Agent_name` varchar(250) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(500) NOT NULL,
  `Pincode` int(20) NOT NULL,
  `Branch` varchar(100) DEFAULT NULL,
  `Contact_Num` int(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_new`
--

INSERT INTO `agent_new` (`id`, `Agent_code`, `Agent_name`, `DOB`, `Address`, `Pincode`, `Branch`, `Contact_Num`, `created_at`) VALUES
(223240, '1234', 'Konappa E', '2019-12-12', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attibele', 562107, 'Bangalore South', 2147483647, '2019-12-12 14:32:28'),
(223253, '123Age123', 'Konappa E', '2020-01-12', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attibele', 562107, 'Bangalore South', 2147483647, '2020-01-30 14:13:54'),
(223254, '123456', 'hgfdddd', '2020-01-12', 'dstrd', 0, 'xcdcs', 2147483647, '2020-01-30 14:14:54'),
(223255, 'dsas', 'dxszd', '2020-01-03', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attibele', 562107, 'Bangalore South', 2147483647, '2020-01-30 14:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'test', 'test@gm.com', 'sdfwegwegg', '2019-12-11 17:36:19'),
(2, 'Konappa E', 'konappa.sathya@gmail.com', 'sdsdssd', '2019-12-11 17:47:42'),
(3, 'sas', 'kesmgr@gmail.com', 'hiii', '2019-12-11 21:01:11'),
(4, 'asd', 'csa@gmail.com', 'deddededede', '2019-12-11 21:10:17');

--
-- Triggers `contact`
--
DELIMITER $$
CREATE TRIGGER `insertTriggers` AFTER INSERT ON `contact` FOR EACH ROW INSERT INTO triggers VALUES(null, NEW.id, 'Inserted', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customerr`
--

CREATE TABLE `customerr` (
  `id` int(250) NOT NULL,
  `Customer_Num` varchar(250) NOT NULL,
  `First_Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Middle_Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Last_Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Gender` char(1) CHARACTER SET latin1 NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(70) CHARACTER SET latin1 NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Mother_Name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `Mother_Status` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Father_Name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `Father_Status` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Marital_Status` char(1) CHARACTER SET latin1 NOT NULL,
  `Spouse` varchar(150) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerr`
--

INSERT INTO `customerr` (`id`, `Customer_Num`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `DOB`, `Address`, `Pincode`, `Contact_Number`, `Mother_Name`, `Mother_Status`, `Father_Name`, `Father_Status`, `Marital_Status`, `Spouse`) VALUES
(16, 'CUST0001', 'Konappa', 'f', 'E', 'M', '2020-01-12', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attib', 562107, 9008801496, 'asd', 'A', 'asdasd', 'D', 'M', 'tr'),
(18, 'CUST0003', 'sathya', 'm', 'k', '', '2020-01-10', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attib', 562107, 9008801496, 'nagamma', '', 'Konappa E', '', '', ''),
(19, 'CUST0004', 'Konappa', 'f', 'E', 'o', '2020-01-11', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attib', 562107, 9999999999, 'asd', 'on', 'asdasd', 'on', 'o', 'rfrfvfrfvfr'),
(20, 'CUST0005', 'Konappa', 'f', 'E', 'M', '2020-01-17', '#1243, Choudeshwari nilaya, Behind KEB 2nd cross, Sarjapur road, Attib', 562107, 9999999999, 'asd', 'A', 'Konappa E', 'A', 'S', '');

--
-- Triggers `customerr`
--
DELIMITER $$
CREATE TRIGGER `deleteTriggerss` BEFORE DELETE ON `customerr` FOR EACH ROW INSERT INTO triggers VALUES(null, OLD.Customer_Num, 'Deleted', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertTriggerss` AFTER INSERT ON `customerr` FOR EACH ROW INSERT INTO triggers VALUES(null, NEW.Customer_Num, 'Inserted', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateTriggerss` AFTER UPDATE ON `customerr` FOR EACH ROW INSERT INTO triggers VALUES(null, NEW.Customer_Num, 'Updated', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `email`, `password`, `date`) VALUES
(1, 'SATHYA', 'user@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-01-30 14:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `paid_premium`
--

CREATE TABLE `paid_premium` (
  `id` int(250) NOT NULL,
  `Receipt_Num` int(23) NOT NULL,
  `Receipt_Date` date NOT NULL,
  `Policy_Num` int(15) NOT NULL,
  `Last_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paid_premium`
--

INSERT INTO `paid_premium` (`id`, `Receipt_Num`, `Receipt_Date`, `Policy_Num`, `Last_date`) VALUES
(8, 1580476463, '2020-01-31', 987654345, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `policy_data`
--

CREATE TABLE `policy_data` (
  `id` int(250) NOT NULL,
  `Policy_Num` int(10) NOT NULL,
  `Customer_Num` varchar(250) NOT NULL,
  `Agent_code` varchar(200) NOT NULL,
  `DOC` date NOT NULL,
  `Product` varchar(20) NOT NULL,
  `Sum_Assured` int(10) NOT NULL,
  `Pay_Period` int(10) NOT NULL,
  `Ins_Period` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy_data`
--

INSERT INTO `policy_data` (`id`, `Policy_Num`, `Customer_Num`, `Agent_code`, `DOC`, `Product`, `Sum_Assured`, `Pay_Period`, `Ins_Period`) VALUES
(7, 987654345, 'CUST0005', '123456', '2020-01-22', 'jeevan bhima', 456655, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `id` int(50) NOT NULL,
  `Policy_Num` int(15) NOT NULL,
  `Premium` int(10) NOT NULL,
  `Mode` varchar(3) CHARACTER SET latin1 NOT NULL,
  `Last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`id`, `Policy_Num`, `Premium`, `Mode`, `Last_date`) VALUES
(5, 987654321, 40, 'YLY', '2021-01-25'),
(6, 987654321, 411, 'YLY', '2021-01-16'),
(7, 987654345, 152218, 'YLY', '2021-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `triggers`
--

CREATE TABLE `triggers` (
  `id` int(11) NOT NULL,
  `Customer_Num` varchar(250) NOT NULL,
  `action` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `triggers`
--

INSERT INTO `triggers` (`id`, `Customer_Num`, `action`, `cdate`) VALUES
(1, 'CUST0006', 'Inserted', '2019-12-11 23:13:37'),
(2, 'CUST0006', 'Updated', '2019-12-11 23:16:52'),
(3, 'CUST0006', 'Deleted', '2019-12-11 23:18:31'),
(4, 'CUST0009', 'Deleted', '2019-12-12 08:31:37'),
(5, 'CUST0009', 'Deleted', '2019-12-12 08:31:41'),
(6, 'CUST0008', 'Deleted', '2019-12-12 08:31:48'),
(7, 'CUST0007', 'Deleted', '2019-12-12 08:31:51'),
(8, 'CUST0006', 'Deleted', '2019-12-12 08:31:55'),
(9, 'CUST0005', 'Deleted', '2019-12-12 08:31:58'),
(10, 'CUST0004', 'Deleted', '2019-12-12 08:32:04'),
(11, 'CUST0002', 'Deleted', '2019-12-12 08:32:09'),
(12, 'CUST0002', 'Inserted', '2019-12-12 08:34:20'),
(13, 'CUST0003', 'Inserted', '2019-12-12 08:34:43'),
(14, 'CUST0002', 'Deleted', '2019-12-12 08:39:01'),
(15, 'CUST0003', 'Deleted', '2019-12-12 10:48:20'),
(16, 'CUST0002', 'Deleted', '2019-12-12 10:48:23'),
(17, 'CUST0001', 'Inserted', '2020-01-30 18:53:21'),
(18, 'CUST0002', 'Inserted', '2020-01-31 10:50:32'),
(19, 'CUST0003', 'Inserted', '2020-01-31 10:52:16'),
(20, 'CUST0004', 'Inserted', '2020-01-31 11:06:30'),
(21, 'CUST0005', 'Inserted', '2020-01-31 11:11:25'),
(22, 'CUST0002', 'Deleted', '2020-01-31 11:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `unpaid_premium`
--

CREATE TABLE `unpaid_premium` (
  `id` int(250) NOT NULL,
  `Policy_Num` bigint(250) DEFAULT NULL,
  `Fine` int(11) NOT NULL,
  `Lateness` int(11) NOT NULL,
  `Last_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unpaid_premium`
--

INSERT INTO `unpaid_premium` (`id`, `Policy_Num`, `Fine`, `Lateness`, `Last_date`) VALUES
(12, 987654321, 0, 0, NULL),
(13, 987654321, 0, 0, NULL),
(14, 987654345, 0, 0, NULL),
(15, 987654345, 914650, 18293, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_new`
--
ALTER TABLE `agent_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerr`
--
ALTER TABLE `customerr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paid_premium`
--
ALTER TABLE `paid_premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_data`
--
ALTER TABLE `policy_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triggers`
--
ALTER TABLE `triggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unpaid_premium`
--
ALTER TABLE `unpaid_premium`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_new`
--
ALTER TABLE `agent_new`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223256;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customerr`
--
ALTER TABLE `customerr`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paid_premium`
--
ALTER TABLE `paid_premium`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `policy_data`
--
ALTER TABLE `policy_data`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `triggers`
--
ALTER TABLE `triggers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `unpaid_premium`
--
ALTER TABLE `unpaid_premium`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
