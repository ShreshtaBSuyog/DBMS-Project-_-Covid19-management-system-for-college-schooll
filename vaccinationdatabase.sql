-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 04:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccinationdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `apwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `apwd`) VALUES
('anu@bit', 'Anushree', 'anu123');

-- --------------------------------------------------------

--
-- Table structure for table `infection`
--

CREATE TABLE `infection` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `year` year(4) NOT NULL,
  `iname` varchar(40) NOT NULL,
  `dose` varchar(10) NOT NULL,
  `idate` date NOT NULL,
  `rno` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infection`
--

INSERT INTO `infection` (`usn`, `name`, `dept`, `year`, `iname`, `dose`, `idate`, `rno`) VALUES
('1BI18CS136', 'Sankalp Singh', 'CSE', 2018, 'Covid', '2', '2022-01-13', '#243fisdjkfhdsk'),
('1BI19CS165', 'Tanusha Reddy', 'CSE', 2019, 'Covid', '2', '2022-01-20', '#8989hjjsdhf'),
('1BI19CS166', 'Tanvi Chandan', 'CSE', 2018, 'Covid', '2', '2022-01-23', '#23424nlklnflkas');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rusn` varchar(10) NOT NULL,
  `rname` varchar(40) NOT NULL,
  `rdept` varchar(40) NOT NULL,
  `ryear` year(4) DEFAULT NULL,
  `rvaccinactionname` varchar(40) DEFAULT NULL,
  `dose` varchar(40) NOT NULL,
  `dosedate` date DEFAULT NULL,
  `rCertificateNo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rusn`, `rname`, `rdept`, `ryear`, `rvaccinactionname`, `dose`, `dosedate`, `rCertificateNo`) VALUES
('1BI18CS132', 'Sourav B', 'CSE', 2018, 'CovidShield', '2', '2021-12-31', '#283472hjhfh4'),
('1BI18CS136', 'Sankalp Singh', 'CSE', 2018, 'CovidShield', '2', '2022-01-01', '#7877hgashfjs'),
('1BI18CS148', 'Samskruthi H R', 'ECE', 2018, 'CovidShield', '2', '2022-01-09', '#2523432fsdfsdf'),
('1BI18CS178', 'Varun S', 'CSE', 2018, 'CovidShield', '2', '2022-01-01', '#jfsdjf8898789'),
('1BI18ME104', 'Mayank Arora', 'ME', 2018, 'Covaxin', '2', '2021-11-24', '#oiu376827bewed'),
('1BI18ME121', 'Rajesh Reddy', 'ME', 2019, 'Sputnik V', 'Booster Dose 1', '2022-01-01', '#230knfjnsjsdf'),
('1BI19CS010', 'Akansha Kedia', 'CSE', 2019, 'Sputnik V', '2', '2021-11-20', '#kjfhjkef977fsdf'),
('1BI19CS116', 'Radika Agarwal', 'CSE', 2019, 'Covaxin', '2', '2021-11-25', '#232434ewefdsf'),
('1BI19CS143', 'Shreshta B Suyog', 'CSE', 2019, 'CovidShield', '1', '2021-10-13', '#dnfkjhfrh8'),
('1BI19CS143', 'Shreshta B Suyog', 'CSE', 2019, 'CovidShield', '2', '2022-01-01', '#9789hkjshf'),
('1BI19CS144', 'Shreya Mohan', 'CSE', 2019, 'CovidShield', '2', '2021-11-01', '#32498uhhe'),
('1BI19CS148', 'Sneha Praveen', 'CSE', 2019, 'CovidShield', '2', '2021-11-30', '#832472378947'),
('1BI19CS165', 'Tanusha Reddy', 'CSE', 2019, 'CovidShield', '2', '2021-10-15', '#8324jhebfhje'),
('1BI19CS166', 'Tanvi Chandan', 'CSE', 2019, 'CovidShield', '2', '2021-11-23', '#cf452323'),
('1BI19CS178', 'Varna Bhatt', 'CSE', 2019, 'CovidShield', '2', '2022-01-01', '#43436gghg'),
('1BI19EC122', 'Divya Anand', 'ECE', 2019, 'Sputnik V', '2', '2021-11-12', '#87498hbhs'),
('1BI19ME072', 'Anubhav Sharma', 'ME', 2019, 'Sputnik V', '2', '2021-12-31', '#woeur877898'),
('1BI19TE021', 'Anusha Kulkarni', 'TE', 2019, 'Covaxin', '2', '2021-10-14', '#9408jklsjd'),
('1BI20CS150', 'Suresh Kumar', 'CSE', 2020, 'CovidShield', '2', '2021-12-18', '#u4y7ds7f34');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `Name`, `Pwd`) VALUES
('1BI18ME104', 'Mayank Arora', 'mayank12'),
('1BI18TE112', 'Ashish Choudary', 'as123'),
('1BI19CS143', 'Shreshta B Suyog', 'shreshta22'),
('1BI19CS144', 'Shreya Mohan', 'shreya24'),
('1BI19CS148', 'Sneha Praveen', 'sneha27'),
('1BI19CS165', 'Tanusha Reddy', 'tanu23'),
('1BI19CS166', 'Tanvi Chandan', 'tanvi13'),
('1BI19CS178', 'Varna Bhatt', 'var31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `infection`
--
ALTER TABLE `infection`
  ADD PRIMARY KEY (`usn`,`idate`,`rno`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rusn`,`dose`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
