-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 30, 2022 at 12:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `2022_application_development_and_support_exam_data`
--

CREATE TABLE `2022_application_development_and_support_exam_data` (
  `Project_Ref` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Country` varchar(31) CHARACTER SET utf8 DEFAULT NULL,
  `Implementing_Office` varchar(27) CHARACTER SET utf8 DEFAULT NULL,
  `Project_Title` varchar(195) CHARACTER SET utf8 DEFAULT NULL,
  `Grant_amount_USD` int(11) DEFAULT NULL,
  `Dates_from_GCF` datetime DEFAULT NULL,
  `Start_Date` datetime DEFAULT NULL,
  `Duration_months` int(11) DEFAULT NULL,
  `End_Date` datetime DEFAULT NULL,
  `Readiness_or_NAP` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `Type_of_readiness` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `First_disbursement_amount` decimal(9,2) DEFAULT NULL,
  `Status` varchar(27) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `2022_application_development_and_support_exam_data`
--

INSERT INTO `2022_application_development_and_support_exam_data` (`Project_Ref`, `Country`, `Implementing_Office`, `Project_Title`, `Grant_amount_USD`, `Dates_from_GCF`, `Start_Date`, `Duration_months`, `End_Date`, `Readiness_or_NAP`, `Type_of_readiness`, `First_disbursement_amount`, `Status`) VALUES
('ALB-RS-001', 'Albania, Romania', 'Europe Office', 'Readiness support to Albania', 300000, '2016-11-15 00:00:00', '2016-08-30 00:00:00', 12, '2017-08-30 00:00:00', 'Readiness', 'Capacity Building', '147500.00', 'completed'),
('BRA-RS-001', 'Brazil, Panama', 'Economy Division', 'Technology Needs Assessment for the Implementation of Climate Action Plans', 700000, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 18, '2019-12-19 12:00:00', 'Readiness', 'FI/TNA/other', '197450.00', 'under implementation'),
('COM-RS-001', 'Comoros', 'Ecosystems', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes', 426080, '2018-11-01 00:00:00', '2018-11-01 00:00:00', 24, '2020-10-21 00:00:00', 'Readiness', 'Capacity Building', '115117.00', 'under implementation'),
('CRI-RS-002', 'Costa Rica', 'Latin America Office', 'Building sub-national capacities for the implementation of the National Adaptation Plan in Costa Rica', 2861917, '2018-10-23 00:00:00', '2018-10-23 00:00:00', 36, '2021-10-23 00:00:00', 'National Adaptation Plans', 'NAP', '350575.33', 'under implementation'),
('DOM-RS-002', 'Dominican Republic', 'Latin America Office', 'Building capacity to advance National Adaptation Plan Process in the Dominican Republic', 2998325, '2018-07-11 00:00:00', '2018-07-11 00:00:00', 36, '2021-06-10 00:00:00', 'National Adaptation Plans', 'NAP', '1161912.00', 'under implementation'),
('EGY-RS-001', 'Egypt, Morocco', 'Ecosystems', 'Supporting Egypt’s engagement with the Green Climate Fund: Logical framework support', 300000, '2017-05-02 00:00:00', '2017-04-24 00:00:00', 18, '2018-10-23 12:00:00', 'Readiness', 'Capacity Building', '122456.00', 'under implementation'),
('GHA-RS-001', 'Ghana, Uganda, Sudan', 'CTCN', 'Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan', 300150, '2017-05-15 00:00:00', '2017-05-15 00:00:00', 24, '2019-05-10 00:00:00', 'Readiness', 'FI/TNA/other', '300150.00', 'completion report submitted'),
('HND-RS-002', 'Honduras', 'Latin America Office', 'Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector', 764960, '2018-01-18 00:00:00', '2018-01-18 00:00:00', 18, '2019-07-19 12:00:00', 'Readiness', 'REDD+', '243515.00', 'under implementation'),
('JOR-RS-001', 'Jordan', 'West Asia Office', 'Strengthening NDA of Jordan to deliver on GCF Investment Framework', 300000, '2017-06-15 00:00:00', '2017-06-15 00:00:00', 18, '2018-12-14 12:00:00', 'Readiness', 'Capacity Building', '150000.00', 'under implementation'),
('MDG-RS-001', 'Madagascar', 'Ecosystems', 'Building Capacity in Madagascar to engage with the GCF', 300000, '2018-07-20 00:00:00', '2018-07-20 00:00:00', 12, '2019-07-19 00:00:00', 'Readiness', 'Capacity Building', '177588.00', 'under implementation'),
('MDV-RS-001', 'Maldives ', 'Asia Pacific Office', 'Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives', 300000, '2017-06-16 00:00:00', '2017-06-16 00:00:00', 12, '2018-06-13 00:00:00', 'Readiness', 'Capacity Building', '198545.00', 'under implementation'),
('MLY-RS-002', 'Malaysia', 'Asia Pacific Office', 'Accessing REDD+ result-based payments in Malaysia', 819230, '2018-11-12 00:00:00', '2018-11-12 00:00:00', 24, '2020-11-13 00:00:00', 'Readiness', 'REDD+', '465695.33', 'under implementation'),
('MMR-RS-001', 'Myanmar', 'CTCN', 'Strengthened drought and flood management through improved science‐based information availability and management in Myanmar', 336520, '2017-07-26 00:00:00', '2017-07-26 00:00:00', 12, '2018-07-26 00:00:00', 'Readiness', 'FI/TNA/other', '336520.00', 'under implementation'),
('MMR-RS-002', 'Myanmar', 'Asia Pacific Office', 'Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar', 300000, '2017-11-10 00:00:00', '2017-11-10 00:00:00', 18, '2019-05-11 12:00:00', 'Readiness', 'Capacity Building', '115840.00', 'under implementation'),
('MNE-RS-001', 'Montenegro', 'Europe Office', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes', 300000, '2016-11-15 00:00:00', '2016-08-30 00:00:00', 12, '2017-08-30 00:00:00', 'Readiness', 'Capacity Building', '145300.00', 'under implementation'),
('MNG-RS-003', 'Mongolia', 'Asia Pacific Office', 'Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia', 368000, '2018-02-01 00:00:00', '2018-02-01 00:00:00', 12, '2019-02-01 00:00:00', 'Readiness', 'FI/TNA/other', '250000.00', 'under implementation'),
('MNG-RS-004', 'Mongolia', 'Asia Pacific Office', 'Building capacity to advance National Adaptation Plan Process in Mongolia', 2895461, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 36, '2021-06-19 00:00:00', 'National Adaptation Plans', 'NAP', '406123.00', 'under implementation'),
('MRT-RS-002', 'Mauritania ', 'Africa Office', 'Building capacity to advance National Adaptation Plan Process in Mauritania', 2670374, '2018-07-17 00:00:00', '2018-07-17 00:00:00', 36, '2021-07-08 00:00:00', 'National Adaptation Plans', 'NAP', '742163.00', 'under implementation'),
('MUS-RS-002', 'Mauritius', 'CTCN', 'Climate Change Vulnerability and Adaptation Study for Port of Port Louis', 324764, '2018-01-22 00:00:00', '2018-01-22 00:00:00', 15, '2019-04-19 06:00:00', 'Readiness', 'FI/TNA/other', '324764.00', 'under implementation'),
('NER-RS-002', 'Niger', 'Ecosystems', 'Building Niger’s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities', 300000, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 18, '2019-12-19 12:00:00', 'Readiness', 'Capacity Building', '138100.00', 'requesting funds'),
('NPL-RS-001', 'Nepal', 'Asia Pacific Office', 'Building Capacity to Advance National Adaptation Plan Process in Nepal', 2935350, '2017-05-15 00:00:00', '2017-05-15 00:00:00', 36, '2020-05-14 00:00:00', 'National Adaptation Plans', 'NAP', '465410.00', 'under implementation'),
('PAK-RS-003', 'Pakistan', 'Asia Pacific Office', 'Building capacity to advance National Adaptation Plan Process in Pakistan', 2969674, '2018-03-02 00:00:00', '2018-03-03 00:00:00', 36, '2021-03-04 00:00:00', 'National Adaptation Plans', 'NAP', '675420.00', 'under implementation'),
('PSE-RS-002', 'Palestine ', 'CTCN', 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.', 254100, '2017-10-18 00:00:00', '2017-10-18 00:00:00', 12, '2018-10-18 00:00:00', 'Readiness', 'FI/TNA/other', '254100.00', 'under implementation'),
('S1-32GCL-000023', 'Jordan PPFA', 'Ecosystems', 'Jordan Integrated Landscape Management Initiative (JILMI)', 2886275, '2018-03-05 00:00:00', '2018-08-28 00:00:00', 12, '2019-12-28 00:00:00', 'Readiness', NULL, '278946.28', 'under implementation'),
('SRB-RS-001', 'Serbia', 'Europe Office', 'Developing the capacities of the Republic of Serbia for an effective engagement with the Green Climate Fund', 300000, '2018-01-12 00:00:00', '2018-01-12 00:00:00', 12, '2019-01-12 00:00:00', 'Readiness', 'Capacity Building', '130000.00', 'under implementation'),
('SSD-RS-001', 'South Sudan, Egypt', 'Policy & Programme Division', 'Republic of South Sudan Green Climate Fund’s Readiness and Preparatory Support Project ', 300000, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 18, '2019-12-19 12:00:00', 'Readiness', 'Capacity Building', '153178.00', 'under implementation'),
('SWZ-RS-002', 'Swaziland ', 'Ecosystems', 'Green Climate Fund Readiness Support for Swaziland', 299032, '2018-03-12 00:00:00', '2018-03-12 00:00:00', 24, '2020-03-13 00:00:00', 'Readiness', 'Capacity Building', '83046.00', 'under implementation'),
('SWZ-RS-003', 'Swaziland', 'Africa Office', 'Building capacity to advance National Adaptation Plan process in Swaziland ', 2796359, '2018-06-28 00:00:00', '2018-06-28 00:00:00', 36, '2021-06-27 00:00:00', 'National Adaptation Plans', 'NAP', '744662.00', 'under implementation'),
('TON-RS-002', 'Tonga, uganda, Tanzania, Kenya ', 'CTCN', 'To develop an energy efficiency master plan for the Kingdom of Tonga and East Africa', 200000, '2017-04-20 00:00:00', '2017-04-20 00:00:00', 6, '2017-10-09 12:00:00', 'Readiness', 'FI/TNA/other', '200000.00', 'under implementation'),
('ZWE-RS-001', 'Zimbabwe', 'Ecosystems', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes', 300000, '2018-03-05 00:00:00', '2018-03-05 00:00:00', 24, '2020-03-04 00:00:00', 'Readiness', 'Capacity Building', '121354.00', 'under implementation'),
('ZWE-RS-002', 'Zimbabwe', 'Africa Office', 'Building capacity to advance National Adaptation Plan Process in Zimbabwe', 2993349, '2018-05-11 00:00:00', '2018-05-11 00:00:00', 36, '2021-05-13 00:00:00', 'National Adaptation Plans', 'NAP', '877525.00', 'under implementation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2022_application_development_and_support_exam_data`
--
ALTER TABLE `2022_application_development_and_support_exam_data`
  ADD PRIMARY KEY (`Project_Ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
