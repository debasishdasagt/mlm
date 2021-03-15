-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 03:37 AM
-- Server version: 5.6.17
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `get_cust_id` () RETURNS VARCHAR(8) CHARSET utf8 BEGIN
declare cur_seq int;
declare cust_id varchar(8);
declare reg_prefix varchar(1);
set reg_prefix:="1";
set cur_seq:=(select last_seq_num from m_seq_num where seq_type='cust_id');
set cust_id:=(select concat(reg_prefix, Lpad(cur_seq+1,7,'0')));
update m_seq_num set last_seq_num=cur_seq+1,
last_updated_on=now() where seq_type='cust_id';
RETURN cust_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `get_sa_id` () RETURNS VARCHAR(8) CHARSET utf8 BEGIN
declare cur_seq int;
declare sa_id varchar(8);
declare reg_prefix varchar(1);
set reg_prefix:="3";
set cur_seq:=(select last_seq_num from m_seq_num where seq_type='sa_id');
set sa_id:=(select concat(reg_prefix, Lpad(cur_seq+1,7,'0')));
update m_seq_num set last_seq_num=cur_seq+1,
last_updated_on=now() where seq_type='sa_id';
RETURN sa_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `get_user_id` () RETURNS VARCHAR(8) CHARSET utf8 BEGIN
declare cur_seq int;
declare user_id varchar(8);
declare reg_prefix varchar(1);
set reg_prefix:="2";
set cur_seq:=(select last_seq_num from m_seq_num where seq_type='user_id');
set user_id:=(select concat(reg_prefix, Lpad(cur_seq+1,7,'0')));
update m_seq_num set last_seq_num=cur_seq+1,
last_updated_on=now() where seq_type='user_id';
RETURN user_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `d_customer_info`
--

CREATE TABLE `d_customer_info` (
  `cust_id` bigint(20) NOT NULL,
  `cust_name` varchar(500) NOT NULL,
  `cust_dob` date NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_whatsapp_num` bigint(20) NOT NULL,
  `cust_gender` varchar(100) NOT NULL,
  `cust_is_sa` varchar(10) NOT NULL,
  `record_status` varchar(10) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_created_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `d_sa`
--

CREATE TABLE `d_sa` (
  `sa_id` bigint(20) NOT NULL,
  `cust_id` bigint(20) NOT NULL,
  `sa_created_by` int(11) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `total_income` bigint(20) NOT NULL,
  `current_balance` bigint(20) NOT NULL,
  `record_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `d_user_login`
--

CREATE TABLE `d_user_login` (
  `user_id` bigint(20) NOT NULL,
  `user_login` varchar(500) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `cust_id` bigint(20) NOT NULL,
  `cust_is_sa` varchar(100) NOT NULL,
  `record_created_by` varchar(500) NOT NULL,
  `record_created_on` datetime NOT NULL,
  `record_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `m_seq_num`
--

CREATE TABLE `m_seq_num` (
  `id` int(11) NOT NULL,
  `seq_type` varchar(500) NOT NULL,
  `last_seq_num` bigint(20) NOT NULL,
  `last_updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_seq_num`
--

INSERT INTO `m_seq_num` (`id`, `seq_type`, `last_seq_num`, `last_updated_on`) VALUES
(1, 'cust_id', 3, '2021-03-12 08:22:49'),
(2, 'user_id', 3, '2021-03-12 08:32:49'),
(3, 'sa_id', 3, '2021-03-13 23:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_customer_info`
--
ALTER TABLE `d_customer_info`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `d_sa`
--
ALTER TABLE `d_sa`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `d_user_login`
--
ALTER TABLE `d_user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `m_seq_num`
--
ALTER TABLE `m_seq_num`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_seq_num`
--
ALTER TABLE `m_seq_num`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
