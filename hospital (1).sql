-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 06:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Id` int(11) NOT NULL,
  `Department` varchar(225) NOT NULL,
  `Doctor_name` varchar(225) NOT NULL,
  `Patient_name` varchar(225) NOT NULL,
  `Patient_Age` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Appointment_Date` varchar(225) NOT NULL,
  `Appointment_Time` varchar(225) NOT NULL,
  `Patient_phone` varchar(225) NOT NULL,
  `Appointmentid` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Id`, `Department`, `Doctor_name`, `Patient_name`, `Patient_Age`, `Email`, `Appointment_Date`, `Appointment_Time`, `Patient_phone`, `Appointmentid`) VALUES
(11, 'Pediatrics & Neonatology', 'Ayesha Imran', 'Ali Imran', '34', 'hamna@gmail.com', '15/12/2022', '9:00 - 10:00', '03002994166', 'AP-98787'),
(12, 'Ophthalmology', 'Sameen Ali', 'Hamna Raza', '67', 'hamna@gmail.com', '15/12/2022', '9:00 - 10:00', '03998776788', 'AP-45673'),
(13, 'Otolaryngology', 'Ayesha Rahim', 'Ali Imran', '38', 'hamna@gmail.com', '15/12/2022', '9:00 - 10:00', '03002994166', 'AP-09872'),
(20, 'Gastroenterology', 'Sameen Ali', 'Sameen', '45', 'hamna@gmail.com', '2023-01-05', '12:37', '03009887877', 'AP-61197'),
(21, 'Dermatology', 'Ayesha Imran khan', 'ayesha rahim', '20', 'ayesha@gmail.com', '2023-01-03', '04:15', '0365578599', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `phone`, `Message`) VALUES
(1, 'Hamna Raza', 'hamna@gmail.com', '0388787655', 'Do you have Neonatal intensive care units (NICUs)in your Hospital?'),
(8, 'Hamna Raza', 'hamna@gmail.com', '03998776788', 'hiii'),
(10, 'uzair', 'mu0822@67gmail.com', '0823344334', 'submit');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Id` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Profile_picture` varchar(225) NOT NULL,
  `Phone_number` varchar(225) NOT NULL,
  `User-type` int(225) NOT NULL,
  `Dateofbirth` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `education_one` varchar(225) NOT NULL,
  `education_one_feild` varchar(225) NOT NULL,
  `education_one_time` varchar(225) NOT NULL,
  `education_two` varchar(225) NOT NULL,
  `education_two_feild` varchar(225) NOT NULL,
  `education_two_time` varchar(225) NOT NULL,
  `experience_one` varchar(225) NOT NULL,
  `experience_one_time` varchar(225) NOT NULL,
  `experience_two` varchar(225) NOT NULL,
  `experience_two_time` varchar(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Id`, `Username`, `Email`, `Password`, `Profile_picture`, `Phone_number`, `User-type`, `Dateofbirth`, `Address`, `Gender`, `education_one`, `education_one_feild`, `education_one_time`, `education_two`, `education_two_feild`, `education_two_time`, `experience_one`, `experience_one_time`, `experience_two`, `experience_two_time`, `Title`, `city`, `country`) VALUES
(0, 'Adnan Ashraf', 'adnan909@gmail.com', '[$Password]', 'moiz.jpg', '[$Phone_number]', 0, '[$dateofbirth]', '[$address]', '[$Gender]', '[$education_one]', '[$education_one_feild]', '[$education_one_time]', '[$education_two]', '[$education_two_feild]', '[$education_two_time]', '[$experience_one]', '[$experience_one_time]', '[$experience_two]', '[$experience_two_time]', 'Psychologist', 'Karachi', '[$country]'),
(2, 'Ayesha Imran ', 'ayeshaimran643@gmail.com', '643', '', '03009887866', 0, '', '', 'male selected', 'Al-Yaqeen', 'Matric', '2016 - 2018', 'Khatoon-e-Pakistan', 'Intermediate', '2018 - 2020', 'House job at Ziauddin Hospital', '2 years', 'Faculty', '3 years', 'Dermatologists', '', ''),
(3, 'Amna Riyaz', 'Amna567@gmail.com', '567', 'amna.webp', '03876556544', 0, '16 /  June / 1985', 'North Nazimabad', 'Female', 'The Educators', 'Matric', '2011 - 2013', 'GGDC,Zamzama', 'Intermediate', '2013 - 2015', 'House job at National Hospital', '3 years', 'Faculty', '3 years', 'Neurologists', 'Islamabad', 'Pakistan'),
(5, 'Adnan Ashraf', 'adnan909@gmail.com', '909', 'adnan.webp', '03374028394', 0, '04 / July / 1970', 'Green block, P.E.C.H.S', 'Male', 'The Smart School', 'Matric', '1996- 1998', 'Bahria College', 'Intermediate', '1998- 2000', 'House job at A.O Hospital', '4 years', 'Faculty', '3 years', 'Pathologist', 'Lahore', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Age` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Phone_Number` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Patient_id` varchar(225) NOT NULL,
  `year_joined` varchar(225) NOT NULL,
  `birthday` varchar(225) NOT NULL,
  `Disease` varchar(225) NOT NULL,
  `disease_detail` varchar(225) NOT NULL,
  `disease_2` varchar(225) NOT NULL,
  `disease2_detail` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Id`, `Name`, `Age`, `Address`, `Phone_Number`, `Email`, `Gender`, `Picture`, `Password`, `Patient_id`, `year_joined`, `birthday`, `Disease`, `disease_detail`, `disease_2`, `disease2_detail`, `city`, `country`) VALUES
(1, 'Ayaan ali', '32', 'Phase 2 DHA Lahore', '03009887466', 'ayaan@gmail.com', 'male', 'patient3.jpeg', '123', 'PT-34567', '2017', '15/08/1990', 'Tuberculosis', 'Bacterial infection', 'Lipomas', 'Benign tumour', 'Lahore', 'Pakistan'),
(2, 'Huzaifa Malik', '72', 'Phase 7 DHA Islamabad', '03556765433', 'huzaifa@gmail.com', 'Male', 'patient4.webp', '112', 'PT-42567', '2003', '14/07/1950', 'Parkinson\'s disease', 'Brain disorder', '', '', 'Islamabad', 'Pakistan'),
(5, 'Muneeza Raza', '56', 'Phase 2 DHA Faisalabad', '03998776788', 'muneeza@gmail.com', 'Male', 'patient3.jpeg', '233', 'PT-30987', '2021', '09/06/1966', 'Genital herpes', 'STI', '', '', 'Faisalabad', 'Pakistan'),
(6, 'Shazfa Affan', '46', 'Qayummabad Karachi', '03998776788', 'shazfa@gmail.com', 'Female', 'patient2.jpeg', '345', 'PT-34786', '2001', '02/04/1976', 'AIDS', 'Immune deficiency', '', '', 'Karachi', 'Pakistan'),
(14, 'Huzaifa Malik', '67', 'Qayummabad Karachi', '03556765433', 'huzaifa@gmail.com', 'Male', 'patient3.jpeg', '123', 'PT-33426', '2002', '09/06/1966', 'Parkinson\'s disease', 'Bacterial infection', 'Genital herpes', 'STI', 'Karachi', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Id` int(11) NOT NULL,
  `Icon` varchar(225) NOT NULL,
  `Department_name` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Id`, `Icon`, `Department_name`, `Description`) VALUES
(24, './Profiles/18.png', 'General medi', 'The General Medicine Department is running under the supervision of well known faculty providing physical, social and psychological healthcare that is continuous, comprehensive, coordinated, integrated, competent and compassi'),
(25, './Profiles/4.png', 'Gastroenterology', 'Our department is providing state of art treatment in the subject of gastroenterology and Hepatology. Daily OPD and indoor is working through out week.'),
(26, './Profiles/11.png', 'Urology', 'The Department of Urology treats diseases of the urinary tract affecting persons of all ages. The department of Urology and Kidney Transplant was established in the year 2000 in Care Group is affiliated wi'),
(28, './Profiles/10.png', 'Dermatology', 'Department of Dermatology was established in 2002 and is headed by renowned Professor Haroon Nabi. There is a separate out patients department where patients are attended 6 days a week and a 15 bed inpatient facility for admi'),
(29, './Profiles/13.png', 'Pathology', '\r\nThe Pathology department at Care Group is working round the clock, providing the patients with routine and special laboratory investigations at a nominal and affordable cost as compared to the other major hospital/laborator'),
(30, './Profiles/17.png', 'Ophthalmology', 'Department of Ophthalmology is headed by Prof. Dr. Muhammad Shafique. This is the oldest department of the hospital. Since inauguration of Care Group, it progressed by leaps and bounds and now it is a state-of-the-art Ophthal'),
(31, './Profiles/19.png', 'Cleft Lip', 'Cleft lip and cleft palate which can also occur together as cleft lip and palate, are variations of a type of clefting congenital deformity caused by abnormal facial development during gestation. A cleft is a fissure or openi'),
(32, './Profiles/7.png', 'ENT', 'The Department undertakes conventional and specialized ENT surgeries. The latest and super specialized procedures are performed at discounted rates for poor & deserving patients.'),
(33, './Profiles/2.png', 'Chest & Vascular', 'The Department of Chest & Vascular Surgery has been established. Pneumonectomies, Lobectomies, Decortications are a few procedures carried out in Care Group.'),
(34, './Profiles/1.png', 'Anesthesiology', 'The Anesthesia department was established in the year 2000. It has been appropriately expanded to meet the growing demands of surgical and medical units.'),
(35, './Profiles/6.png', 'Accident & Emergency', 'The Accident and Emergency Department is staffed by experienced doctors with multidisciplinary trainings. The department is supported by resident doctors and nursing staff with special training to handle cases of accidents an'),
(36, './Profiles/5.png', 'Pediatrics & Neonatology', 'National Intensive Care Unit (NICU) is a high dependency unit offering tertiary care services to newborns. It has radiant warmers, incubators, ventilator ,phototherapy units and newborn cots for babies kept under observation.'),
(37, './Profiles/3.png', 'Dental Surgery', 'Care Group Dental care is a unique oral health care center which renders super specialty services provided by highly trained and experienced Dentists.'),
(38, './Profiles/8.png', 'Physiotherapy', 'Physiotherapy department treatment aims at relieving pain, regaining strength, restoring normal function and preventing further injury by promoting healthy lifestyle. The department is run by well-qualified and highly experie'),
(39, './Profiles/9.png', 'Radiology', 'Radiology department, GTTH is committed to offering the highest quality medical care. Our focus is on blending the latest in radiological technology with specialized expertise to diagnose & treat patients with respect and gen'),
(40, './Profiles/12.png', 'General Surgery', 'The department of General Surgery is also an integral part of a teaching hospital. This department is divided into two units headed by well renowned Professors, with 90 beds consisting of one male and female ward with additio'),
(41, './Profiles/14.png', 'Pharmacy', 'A generic version of widely used medications, approved by Pharmacy and Therapeutics Committee (P & TC) is formulated to ensure safe, cost effective and rational use of medications. Hospital Management Information System (HMIS'),
(42, './Profiles/15.png', 'Psychiatry', 'The Department of Psychology conducts evaluation and treatment of a wide range of psychiatric disorders, psychological problems and behavioral issues among people of all ages.'),
(43, './Profiles/16.png', 'Orthopedics', 'Pakistan Orthopaedic Association (POA) has declared our unit “a centre of excellence” for Arthroplasty & Spine Surgery in Pakistan and POA fellows are being trained regularly.\r\nAO Spine Switzerland has recognized our unit as ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `Dateofbirth` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Country` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `State` varchar(225) NOT NULL,
  `Postalcode` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Title`, `Description`, `Picture`, `lastname`, `Dateofbirth`, `Gender`, `Address`, `Country`, `City`, `State`, `Postalcode`, `Phone`, `username`, `Email`, `Password`) VALUES
(1, 'Hamza', 'Admin of Care Group Official ', 'An Office Administrator is a professional who oversees operations across their organization\'s office. They are responsible for welcoming visitors, coordinating meetings, appointments and directing various administrative proje', 'admin.webp', 'Fahim', '14 /  sep / 1990', 'Male', 'Phase 6 DHA', 'Pakistan', 'Karachi', 'Sindh', '75500', '03998776788', 'Hamza123', 'hamza123@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
