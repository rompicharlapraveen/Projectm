-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 06:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bookappointment`
--

CREATE TABLE `bookappointment` (
  `pid` int(11) NOT NULL,
  `problem` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `patientname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `hname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookappointment`
--

INSERT INTO `bookappointment` (`pid`, `problem`, `date`, `patientname`, `gender`, `age`, `city`, `location`, `hname`) VALUES
(2, 'Dr.Savitri(Normal Case)', '2020-01-13', 'Praveen', 'male', '22', 'Undi', 'bhimavaram', 'Bhimavaram Hospitals(Bhimavaram)'),
(3, 'Dr.Avinash(Podiatrist)', '2020-01-13', 'Sasi Kumar', 'male', '21', 'undi', 'Tanuku', 'Bhimavaram Hospitals(Tanuku)'),
(4, 'Dr.Prasanna(Nephrologist)', '2020-01-14', 'John', 'male', '23', 'Akividu', 'bhimavaram', 'Bhimavaram Hospitals(Bhimavaram)');

-- --------------------------------------------------------

--
-- Table structure for table `dreg`
--

CREATE TABLE `dreg` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `specialist` varchar(40) NOT NULL,
  `timings` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpassword` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dreg`
--

INSERT INTO `dreg` (`id`, `doctorname`, `fathername`, `gender`, `experience`, `specialist`, `timings`, `address`, `phone`, `password`, `confirmpassword`, `email`) VALUES
(1, 'Dr.Praveen', 'srinivasacharyulu', 'male', '3 years', 'Cardiologist', '10 AM-04 P', 'undi,west godavari,534199', '9848606944', 'praveen', 'praveen', 'rompicharlapraveen123@gmail.com'),
(2, 'Dr.avinash', 'Achutharao', 'male', '4 years', 'podiatrist', '10 AM-04 P', 'Tanuku', '6301999875', 'avinash', 'avinash', 'avinash@gmail.com'),
(3, 'Dr.Sampath', 'abcc', 'male', '2 years', 'Neurologist', '10 AM-04 P', 'Bhimavaram', '7993989146', 'sampath', 'sampath', 'sampath@gmail.com'),
(4, 'Dr.Prasanna', 'venky', 'male', '4 years', 'Nephrologist', '10 AM-04 P', 'Eluru', '8466848898', 'prasanna', 'prasanna', 'prasanna@gmail.com'),
(6, 'Dr.Srinivas', 'Saradhi', 'male', '5 years', 'surgeon', '10 AM-04 P', 'Narsapur', '6300030107', 'srinivas', 'srinivas', 'srinu@gmail.com'),
(7, 'Dr.Savitri', 'Ramanujacharyulu', 'female', '6 years', 'Normal Case', '10 AM-04 P', 'Narsapur', '8500001966', 'savitri', 'savitri', 'savitri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `preg`
--

CREATE TABLE `preg` (
  `id` int(10) NOT NULL,
  `patientname` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bloodgroup` varchar(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preg`
--

INSERT INTO `preg` (`id`, `patientname`, `fathername`, `gender`, `bloodgroup`, `address`, `phone`, `password`, `confirmpassword`) VALUES
(1, 'john', 'saradhi', 'male', 'A+', 'Akividhu', '8985688510', 'john12', 'john12'),
(2, 'praveen', 'srinivas', 'male', 'A+', 'undi', '9848606944', 'praveen', 'praveen'),
(9, 'Sasi Kumar', 'Srinivas', 'male', 'B+', 'Undi', '8466848898', 'sasikumar', 'sasikumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookappointment`
--
ALTER TABLE `bookappointment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `dreg`
--
ALTER TABLE `dreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preg`
--
ALTER TABLE `preg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patientname` (`patientname`,`fathername`,`gender`,`bloodgroup`,`address`,`phone`,`password`,`confirmpassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookappointment`
--
ALTER TABLE `bookappointment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dreg`
--
ALTER TABLE `dreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `preg`
--
ALTER TABLE `preg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
