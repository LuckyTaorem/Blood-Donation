-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2024 at 12:47 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject_luckytaorem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

DROP TABLE IF EXISTS `blog_data`;
CREATE TABLE IF NOT EXISTS `blog_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_on` datetime NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `title`, `author`, `content`, `created_on`, `images`) VALUES
(5, 'Surprising Facts & Benefits of Donating Blood', 'Taorem Lucky Singh', 'Donate Blood Save Life!\r\nYou don\'t always have to be a doctor to SAVE someone\'s LIFE!\r\nDonating just a pint (almost 470 ml) of blood will not make much of a difference in your life but that one pint can save up to three lives!\r\nSo roll up your sleeves and contribute proactively in this noble cause.\r\n\r\nBlood Donation Facts:\r\nWorried? Anxious? Have issues in donating blood? Read these facts,\r\n1. Every two seconds someone needs blood\r\n2. The donated blood will be replaced in 56 days (less than 2 months)\r\n3. Donor will not become \"weak\" after blood donation\r\n4. A person has 5 - 6 litres of blood in his/her body\r\n5. One can donate blood every 90 days (3 months)\r\n6. It takes only 15 to 20 minutes to donate blood\r\n \r\nBenefits of Blood Donation:\r\n1. Stimulates Blood Cell Production\r\n2. Blood Donation helps to reduce risk of heart attack and cancer\r\n3. Donation of blood, burns calories & helps in weight loss\r\n4. Blood donation helps to maintain healthy liver\r\n5. Prevents Hemochromatosis and helps to maintain iron level\r\n6. By donating blood you can save someone\'s life\r\n7. It helps you to complete your social responsibilities', '2024-10-26 20:26:03', 'blood-donation-facts-benefits-thumb.jpg'),
(11, 'What to know before you donate', 'Manas Verma', 'To help prepare for your blood donation.\r\n1.You must be in good health.\r\n2.Youâ€™re never too old to donate blood.\r\n3.You donâ€™t need to know your blood type.\r\n4.Get a good nightâ€™s sleep before your donation and avoid any heavy lifting or strenuous activity afterwards. If you experience dizziness or lightheadedness, stop what youâ€™re doing and sit or lie down until you feel better.\r\n5.Hydrate and eat a healthy meal before your donation.\r\n6.You need to be 17 or older to donate whole blood. Some states allow you to donate at 16 with parental consent.\r\n7.You have to weigh at least 110 pounds/50 Kg.\r\n8.You need to provide information about medical conditions and any medications youâ€™re taking. These may affect your eligibility to donate blood.\r\n9.You must wait at least 8 weeks between whole blood donations and 16 weeks between double red cell donations.\r\n10.Platelet donations can be made every 7 days, up to 24 times per year.\r\n11.Wear a short-sleeved shirt or a shirt with sleeves that are easy to roll up.', '2024-10-26 20:27:09', '12349-007-1024x683 - Copy.jpeg'),
(12, 'During the donation', 'Manas Verma', '\r\nYou must register to donate blood. This includes providing identification, your medical history, and undergoing a quick physical examination. Youâ€™ll also be given some information about blood donation to read.\r\n\r\nFor a whole blood donation procedure:\r\n1.Youâ€™ll be seated in a reclining chair. You can donate blood either sitting or lying down.\r\n2.A small area of your arm will be cleaned. A sterile needle will then be inserted.\r\n3.Youâ€™ll remain seated or lying down while a pint of your blood is drawn. This takes 8 to 10 minutes.\r\n4.When a pint of blood has been collected, a staff member will remove the needle and bandage your arm.\r\n\r\nOther types of donation include:\r\n1.platelet donation (plateletpheresis)\r\n2.plasma donation (plasmapheresis)\r\n3.double red cell donation\r\nOnce your donation is complete, youâ€™ll be given a snack and a drink and be able to sit and rest for 10 or 15 minutes before you leave. If you feel faint or nauseous, youâ€™ll be able to lie down until you feel better.\r\n\r\n', '2022-02-08 17:17:14', '440px-Blood_donation_at_Fleet_Week_USA.jpeg'),
(13, 'Blood donation history', 'Manas Verma', 'Excuses never save a life, Blood donation does\r\nCharles Richard Drew\r\nâ€œFather of the Blood Bankâ€\r\nJune 3, 1904 â€“ April 1, 1950\r\nCharles Richard Drew (1904â€“1950) was an American surgeon and medical researcher. He researched in the field of blood transfusions, developing improved techniques for blood storage, and applied his expert knowledge to developing large-scale blood banks early in World War II. This allowed medics to save thousands of lives of the Allied forces. As the most prominent African American in the field, Drew protested against the practice of racial segregation in the donation of blood, as it lacked scientific foundation, and resigned his position with the American Red Cross, which maintained the policy until 1950.\r\n          His pioneering research and systematic developments in the use and preservation of blood plasma during World War II not only saved thousands of lives, but innovated the nationâ€™s blood banking process and standardized procedures for long-term blood preservation and storage techniques adapted by the American Red Cross.\r\n          Ironically, the Red Cross excluded African Americans from donating blood, making Drew himself ineligible to participate in the very program he established. That policy was later modified to accept donations from blacks, however the institution upheld racial segregation of blood, which throughout the war Drew openly criticized as â€œunscientific and insulting to African Americans.â€\r\n ', '2022-02-09 13:48:06', 'download (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_camps`
--

DROP TABLE IF EXISTS `blood_camps`;
CREATE TABLE IF NOT EXISTS `blood_camps` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cadd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `conducted` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `organized` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_camps`
--

INSERT INTO `blood_camps` (`id`, `sdate`, `edate`, `stime`, `etime`, `cname`, `cadd`, `state`, `district`, `contact`, `conducted`, `organized`) VALUES
(9, '2022-03-30', '2022-03-30', '10:00:00', '13:00:00', '30032022 Anthrow Van Morning', '30032022 Anthrow Van Morning,vadaj, AHMEDABAD', 'Gujarat', 'Ahmedabad', '7926600101	', 'Prathma Blood centre, Ahmedabad', 'Prathama Blood Bank'),
(12, '2022-03-30', '2022-03-30', '18:00:00', '21:00:00', '30032022 Anthrow Van Evening', '30032022 Anthrow Van Evening,Chandkheda, AHMEDABAD', 'Gujarat', 'Ahmedabad', '7926600101	', 'Prathma Blood centre, Ahmedabad', 'Prathama Blood Bank'),
(13, '2022-03-30', '2022-03-30', '15:00:00', '19:00:00', 'Abp And Group', 'Abp And Group,Shahibaug, AHMEDABAD', 'Gujarat', 'Ahmedabad', '7926600101', 'Prathma Blood centre, Ahmedabad', 'Abp And Group'),
(14, '2022-03-30', '2022-03-30', '10:00:00', '16:00:00', 'Medical Dep Sathurn Railway Salem Division', 'Rettipatti Railway Divisional office,Salem', 'Tamil Nadu', 'Salem', '9677999154', 'Government Mohankumaramangalam Medical College Hospital', 'Dr Keerthi Bmo'),
(15, '2022-03-30', '2022-03-30', '10:00:00', '13:00:00', 'govt Breennan COLLEGE', 'Govt Brennan College,Dharmadam, THALASSERY, Thalassery, Kannur', 'Kerala', 'Kannur', '9645119683	', 'General Hospital Thalassery', 'NSS'),
(16, '2022-03-30', '2022-03-30', '09:00:00', '15:00:00', 'NHSRCL Bullet Train Project', 'Nr Gate No2, Antroli Gam,Niyol- Kadodara Rd, Surat', 'Gujarat	', 'Surat', '9375888143', 'SURAT RAKTDAN KENDRA, SURAT', 'Mr Hitesh Surti'),
(17, '2022-03-30', '2022-03-30', '10:00:00', '14:00:00', 'DIVYA CHHAYA HOSPITAL SUBIR', 'DIVYA CHHAYA HOSPITAL,SUBIR, AHWA, Valsad', 'Gujarat', 'Valsad', '6353328695', 'VALSAD RAKTDAN KENDRA, VALSAD', 'Mary Paul'),
(18, '2022-03-30', '2022-03-30', '09:00:00', '14:00:00', 'ARMIET COLLEGE', 'ARMIET COLLEGE,SHAHPUR, Navi Mumbai, Thane', 'Maharashtra', 'Thane', '9867155627', 'Navi Mumbai Muncipal Corporation, Blood Ban', 'Armiet College Sahapur'),
(19, '2022-03-31', '2022-03-31', '10:00:00', '13:00:00', 'SRF Dahej', 'SRF Dahej,Dahej, Bharuch', 'Gujarat', 'Bharuch', '9033390943', 'Indian Red Cross Society Blood Bank, Bharuch', 'MrDipakbhai Parmar'),
(20, '2022-03-31', '2022-03-31', '18:00:00', '21:00:00', '31032022 Blue Van Evening', '31032022 Blue Van Evening,Thaltej, AHMEDABAD', 'Gujarat', 'Ahmedabad', '7926600101', 'Prathma Blood centre, Ahmedabad', 'Prathama Blood Bank'),
(21, '2022-04-01', '2022-04-01', '11:00:00', '14:00:00', 'Blood Donation Camp ShriShivpratishthan Hindusthan Hinganghat', 'ShriShivpratishthan Hindusthan,ShriShivpratishthan Hindusthan, Hinganghat, Wardha', 'Maharashtra	', 'Wardha', '9545385671', 'Kasturba Health Societys', 'Blood Bank, SevagramMGIMS'),
(22, '2022-04-01', '2022-04-01', '08:00:00', '18:30:00', 'IRCS Anand', 'ANAND', 'Gujarat', 'Anand', '2692243406	', 'Indian Red Cross Society', 'Blood Bank, Anand'),
(23, '2022-04-01', '2022-04-01', '18:00:00', '21:00:00', '01042022 Anthrow Van Evening', '01042022 Anthrow Van Evening,Ghodasar, AHMEDABAD, Ahmedabad', 'Gujarat', 'Ahmedabad', '7926600101', 'Prathma Blood centre, Ahmedabad', 'NONE'),
(24, '2022-04-01', '2022-04-01', '06:00:00', '09:04:00', 'Rajshekhar Patil Birthday', 'Rajshekhar Patil x MLA Birthday,Govt Hospital Humnabad,Bidar', 'Karnataka', 'Bidar', '8482220744', 'District Hospital Blood Bank BRIMS, Bidar', 'NONE'),
(25, '2022-04-01', '2022-04-01', '07:30:00', '16:00:00', 'Blood Donation Camp', 'Vadhu Rural Hospital,Ap-Vadhu budruk, Tal- Shirur, Dist- Pune, Shirur, Pune', 'Maharashtra', 'Pune', '9921737474', 'Aditya Birla Memorial Hospital Blood Bank', 'NONE'),
(26, '2022-04-01', '2022-04-01', '11:00:00', '17:00:00', 'Exicom Tele System Limited', 'Plot No--2 A Sector-18 ,Plot No--2 A Sector-18 , Gurgaon', 'Haryana', 'Gurgaon', 'NONE', 'Indian Red Cross society', 'National Headquarters Blood Bank New Delhi'),
(27, '2022-04-01', '2022-04-01', '10:00:00', '18:00:00', 'SRF Limited', 'SRF Limited,Dahej, Dist Baruch, Dahej, Vadodara', 'Gujarat', 'Vadodara', '903339093', 'MEDICAL CARE CENTRE, VADODARA', 'NONE'),
(28, '2022-04-01', '2022-04-01', '08:00:00', '12:00:00', 'MRPL', 'MRPL,PANAMBURU, MANGALORE, MANGALORE, Dakshina Kannada', 'Karnataka', 'Dakshina Kannada', '8242410701', 'Wenlock District Hospital Blood Bank', 'NONE'),
(29, '2022-04-02', '2022-04-02', '08:00:00', '18:30:00', 'IRCS Anand', 'ANAND', 'Gujarat', 'Anand', '2692243406', 'Indian Red Cross Society Blood Bank, Anand', 'Ircs Anand'),
(30, '2022-04-02', '2022-04-02', '09:30:00', '12:30:00', 'Telugu Sangh Navsari District', 'Telugu Sangh Navsari District,chaudeshwari Mataji mandir, Laxmi nagar-2, bh Gopal Nagar, Vijalpur Navsari, Navsari', 'Gujarat', 'Navsari', '9099923831,9106164262', 'Indian Red Cross Society Blood Bank, Navsari', 'Manojkumar B Baddal And Vijay N Balla'),
(31, '2022-04-02', '2022-04-02', '16:00:00', '22:00:00', 'J J Group 02042022', 'J J Group 02042022,Sola - Road, AHMEDABAD, Ahmedabad', 'Gujarat', 'Ahmedabad', '07926600101', 'Prathma Blood centre, Ahmedabad', 'J J Group 02042022'),
(32, '2022-04-06', '2022-04-06', '08:00:00', '14:00:00', 'Samuh Janoy nimit', 'Bhavnagar,Sitaram ashram adehwada Bhavnagar, Sitaram ashram adehwada Bhavnagar', 'Gujarat', 'Bhavnagar', '9723672988', 'BAMBHANIYA VOLUNTARY, BHAVNAGAR', 'Sitaram Bapu'),
(33, '2022-04-06', '2022-04-06', '18:00:00', '21:00:00', '06042022 Red Van Evening', '06042022 Red Van Evening,Bapunagar, Ahmedabad', 'Gujarat', 'Ahmedabad	', '7926600101', 'Prathma Blood centre, Ahmedabad', 'Prathama Blood Bank'),
(34, '2022-04-06', '2022-04-06', '10:30:00', '15:30:00', 'Olon API India pvt ltd MIDC Mahad', 'Olon API India pvt lTD,midc, Mahad, Mahad, Raigarh', 'Maharashtra	', 'Raigarh', '8390905618', 'Kakasaheb Chitle Memorial Centre Sanchalit, Jankalyan Blood Bank', 'Olon Api India Pvt Ltd Midc Mahad'),
(35, '2022-04-06', '2022-04-06', '10:00:00', '13:00:00', '06042022 Anthrow Van Morning', '06042022 Anthrow Van Morning,vadaj, Ahmedabad', 'Gujarat', 'Ahmedabad	', '7926600101', 'Prathma Blood centre, Ahmedabad', 'Prathama Blood Bank'),
(36, '2022-04-06', '2022-04-06', '08:00:00', '13:00:00', 'Maharaja Group Vake', 'Maharaja Group Vake,Vake ZP School, Vake, Vake, Nashik', 'Maharashtra', 'Nashik', '7030524008', 'Late Dr GM Bhavsar Charitable Trusts,Malegaon Blood Bank', 'Maharaja Group Vake'),
(37, '2022-04-06', '2022-04-06', '09:30:00', '17:00:00', 'AVS Engg College', 'Ammapet Salem', 'Tamil Nadu', 'Salem', '9750303847', 'Government Mohankumaramangalam Medical College Hospital', 'MrASenkathir Velavan Yrc Po'),
(38, '2022-04-06', '2022-04-06', '08:00:00', '15:00:00', 'Bjp Headquater, Ddu Marg, Delhi', 'Central', 'Delhi', 'Central', 'NONE', 'Dr Ram Manohar Lohia Hospital Blood Bank', 'NONE'),
(39, '2022-04-06', '2022-04-06', '11:00:00', '18:00:00', 'Shelesh And Group', 'Shelesh And Group,SG Highway, Ahmedabad', 'Gujarat', 'Ahmedabad', '7926600101', 'Prathma Blood centre, Ahmedabad', 'Shelesh And Group'),
(40, '2022-04-06', '2022-04-06', '11:00:00', '15:00:00', 'PATHAR DISHA FOUNDATION BALURGHAT', 'BALURGHAT,BALURGHAT, Balurghat, Balurghat, Dakshin Dinajpur', 'West Bengal', 'Dakshin Dinajpur', '9775725809', 'Balurghat District Hospital', 'Pathar Disha Foundation Balurghat'),
(41, '2022-04-06', '2022-04-06', '09:30:00', '13:00:00', 'SnehSetu Charitable Trust Navsari and Sahkari Khand Udyog Mandal Gandevi', 'SnehSetu Charitable Trust Navsari and Sahkari Khand Udyog Mandal,Gandevi, Navsari', 'Gujarat', 'Navsari', '6351841256,9428160660', 'Indian Red Cross Society Blood Bank, Navsari', 'Chetnaben Birla Ratilal Patel Acting Chairman Mitulbhai Patel Manager');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `chat_id` int NOT NULL AUTO_INCREMENT,
  `from_id` int NOT NULL,
  `to_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(97, 24, 14, 'hii', 1, '2022-02-02 06:03:47'),
(98, 14, 23, 'hi', 1, '2022-02-07 10:59:24'),
(99, 23, 14, 'eh', 1, '2022-02-07 11:21:52'),
(100, 23, 14, 'jzdj', 1, '2022-02-07 11:33:03'),
(101, 14, 23, 'hi', 1, '2022-02-07 11:40:26'),
(102, 23, 14, 'ge\n', 1, '2022-02-07 11:48:20'),
(103, 14, 23, 'rd', 1, '2022-02-07 11:52:52'),
(104, 23, 14, 'th', 1, '2022-02-07 11:54:58'),
(105, 14, 23, 'h', 1, '2022-02-07 12:02:16'),
(106, 14, 23, 'hi\n', 0, '2022-06-07 13:29:29'),
(107, 29, 24, 'hii\n', 1, '2022-09-11 12:27:14'),
(108, 30, 24, 'hiee\n', 1, '2022-09-11 12:29:00'),
(109, 14, 24, 'heelo', 0, '2023-02-25 04:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
CREATE TABLE IF NOT EXISTS `conversations` (
  `conversation_id` int NOT NULL AUTO_INCREMENT,
  `user_1` int NOT NULL,
  `user_2` int NOT NULL,
  PRIMARY KEY (`conversation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(10, 14, 24),
(11, 14, 23),
(12, 29, 24),
(13, 30, 24);

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

DROP TABLE IF EXISTS `donordetails`;
CREATE TABLE IF NOT EXISTS `donordetails` (
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phn` varchar(225) NOT NULL,
  `bg` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `pin` int NOT NULL,
  `lon` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `address` varchar(225) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `phn` (`phn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`email`, `name`, `phn`, `bg`, `city`, `pin`, `lon`, `lat`, `address`) VALUES
('Devgonti@gmail.com', 'Gontina devendar', '7995165745', 'B+', 'jodhpur', 342011, '75.7003814', '31.2513213', '528/8 Gurudwara complex,air force station jodhpur,rajasthan'),
('lavakiran143@gmail.com', 'lava kira', '9398522778', 'B+', 'andhra pradesh', 532001, '', '', 'srikakulam\r\n'),
('luckytaorem5@gmail.com', 'Taorem Lucky singh', '09362657944', 'O+', 'Imphal', 795131, '94.3058988', '24.2480845', 'Moreh, nepali basti ward no. 5, moreh'),
('manasverma200@gmail.com', 'Manas Verma', '9424085856', 'A+', 'Anuppur', 484446, '75.8577258', '22.7195687', 'a-15,New rajnagar,anuppur,m.P'),
('pujabhattacharjee835@gmail.com', 'Puja Bhattacharjee', '2345678211', 'A+', 'Punjab', 144411, '75.8572758', '30.900965', 'abcd'),
('pushpendra391924@gmail.com', 'Pushpendra Kumar', '07452019061', 'AB-', 'Bareilly', 243001, '', '', 'house no 405 civil lines bareilly uttarpradesh'),
('send2sanjeevkumar@gmail.com', 'Sanjeev kumar', '8289036543', 'O+', 'Phagwara', 144401, '75.7654986', '31.2315063', 'Phagwara'),
('shivangithapa248@gmail.com', 'Shivangi thapa', '9193400508', 'A+', 'Bareilly', 243001, '79.4388883', '28.3219197', '5/1 DCA colony sadar bazar Bareilly cantt '),
('st.shubrat15@gmail.com', 'Shubrat Tripathi', '9872591342', 'AB+', 'Mirzapur', 231304, '80.9822', '26.8702', 'CHACHERI MORE NEAR CEMENT FACTORY CHUNAR\r\nChacheri More'),
('tomarabhishek974@gmail.com', 'abhishek', '8218879246', 'B+', 'kota', 324001, '77.2373', '28.6542', 'h-106, subhash colony, kherli phatak , kota , 324001');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_one` int NOT NULL,
  `user_two` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_one` (`user_one`),
  KEY `user_two` (`user_two`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_one`, `user_two`) VALUES
(13, 14, 19),
(17, 14, 23),
(18, 24, 29),
(19, 29, 30),
(20, 24, 30),
(21, 24, 14);

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

DROP TABLE IF EXISTS `friend_request`;
CREATE TABLE IF NOT EXISTS `friend_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender` int NOT NULL,
  `receiver` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sender` (`sender`),
  KEY `receiver` (`receiver`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `sender`, `receiver`) VALUES
(9, 14, 34);

-- --------------------------------------------------------

--
-- Table structure for table `jcontent`
--

DROP TABLE IF EXISTS `jcontent`;
CREATE TABLE IF NOT EXISTS `jcontent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `qua` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jdoctor`
--

DROP TABLE IF EXISTS `jdoctor`;
CREATE TABLE IF NOT EXISTS `jdoctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `qua` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jdoctor`
--

INSERT INTO `jdoctor` (`id`, `fullname`, `email`, `address`, `city`, `zip`, `exp`, `qua`, `spec`, `tel`, `cv`) VALUES
(11, 'Manas Verma', 'manasverma200@gmail.com', 'A-15', 'NEW RAJNAGAR', 484446, '10', 'MBBS', 'Neurologist', '9424085856', 'PRACTICAL No 3.pdf'),
(13, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', 'Moreh, nepali basti ward no. 5, moreh', 'Imphal', 795131, '5 years', '12 standard', 'eye', '09362657944', 'Form.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jhtml`
--

DROP TABLE IF EXISTS `jhtml`;
CREATE TABLE IF NOT EXISTS `jhtml` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `qua` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jhtml`
--

INSERT INTO `jhtml` (`id`, `fullname`, `email`, `address`, `city`, `zip`, `exp`, `qua`, `tel`, `cv`) VALUES
(1, 'Lucky Taorem', 'luckytaorem5@gmail.com', 'Moreh, nepali basti ward no. 5, moreh', 'Imphal', 795131, '5 years', '12 standard', '7629897390', 'menu.png');

-- --------------------------------------------------------

--
-- Table structure for table `jnurse`
--

DROP TABLE IF EXISTS `jnurse`;
CREATE TABLE IF NOT EXISTS `jnurse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` int NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `qua` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_p` varchar(255) NOT NULL,
  `user_rating` int NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int NOT NULL,
  `page_id` int NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `email`, `p_p`, `user_rating`, `user_review`, `datetime`, `page_id`) VALUES
(25, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'Good Blog', 1645152741, 13),
(26, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 4, 'Nice\n', 1645152857, 12),
(30, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 1, 'bad', 1645253644, 13),
(31, 'Manas Verma', 'manasverma200@gmail.com', '1.png', 5, 'Useful info!!', 1645543638, 5),
(32, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 2, 'nice', 1645708077, 13),
(33, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 4, 'good', 1648112922, 13),
(34, 'Manas Verma', 'manasverma200@gmail.com', '1.png', 4, 'GOOD', 1648187131, 7),
(35, 'Manas Verma', 'manasverma200@gmail.com', '1.png', 4, 'INTERESTING!!', 1648187227, 11),
(36, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 2, 'bad', 1651054805, 13),
(37, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'good', 1652721151, 13),
(38, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'happy', 1652793174, 13),
(39, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'happy', 1652793174, 13),
(40, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'very nice', 1657293516, 12),
(41, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'good\n', 1658524723, 13),
(42, 'EmmaClaire', '', '31.png', 5, 'good', 1690612127, 13),
(43, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'OK', 1729948881, 13),
(44, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'oks', 1729949003, 13),
(45, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'a', 1729950028, 13),
(46, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '11.png', 5, 'okoko', 1729950059, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `p_p` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'user-default.png',
  `last_seen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `p_p`, `last_seen`) VALUES
(14, 'Taorem Lucky singh', 'luckytaorem5@gmail.com', '$2a$12$qdb3PWZtw30ya69MEPxcIelO4GLxfFxmHARMir3SsajtUm16NwTim', '11.png', '2022-02-07 11:06:01'),
(18, 'Shubrat Tripathi', 'st.shubrat15@gmail.com', '$2a$10$ZnR4Ak8ANfpnQoMlIsR8Ru8EkGyv7rieORS5Fi3wYkVY.JYiHdQlG', '27.png', '2021-11-18 05:35:06'),
(19, 'Paras', 'parasrawat0403@gmail.com', '$2y$10$az769WdHjCErufWev8M0/OLnm4orhylblTJ6zhEAa5PNiSAxFz6cu', '3.png', '2021-11-09 23:05:48'),
(23, 'test', 'test@mail.com', '$2y$10$PKY0jC8EdIA8fpD8VuOm9eW6lmOsVAgO8mQyxZ8u/WnRj.uUQTRzO', '23.png', '2022-02-07 11:06:09'),
(24, 'Manas Verma', 'manasverma200@gmail.com', '$2y$10$Kwo0ONelijDOTSZbUcw3yeLMhIoqKlZzVT30R77UWnkNrJmlreqwC', '1.png', '2022-02-07 09:31:11'),
(25, 'Pushpendra Kumar', 'pushpendra391924@gmail.com', '$2y$10$xDcdlQ.NoCj0G2N3uWMGm.fvlcF6lBDWcUEYowPFc/zQ80Nmsfxw2', '4.png', '2022-02-02 06:04:51'),
(26, 'Puja Bhattacharjee', 'pujabhattacharjee835@gmail.com', '$2y$10$CQ5WI24wIOmytfxPNj6C9e155Lpt1zVTAJ45xYXpmwxuFWmzX2TIO', '18.png', '2022-02-10 05:15:23'),
(27, 'Pushpendra kumar', 'sudheer391924@gmail.com', '$2y$10$6UKosLKy42.unHEPlpajNupk7IRv8D01epqWdS9b9g9Kq7hSq6n0u', '19.png', '2022-04-27 05:40:38'),
(28, 'abhishek', 'tomarabhishek3501@gmail.com', '$2y$10$WksdBP4yl7FPJMdeVpxek.l2X.y10zw6GqD05mGXeljDHWD/bdNri', '18.png', '2022-09-11 12:16:33'),
(29, 'abhishek', 'tomarabhishek974@gmail.com', '$2y$10$rN86anUKFnCdzpieLfKaYu6.mUMXqfc7aJtIAsGlQzLtjskJ7ERYS', '4.png', '2022-09-11 12:21:11'),
(30, 'Gontina Devendar', 'devgonti@gmail.com', '$2y$10$Am30Hdt8MPPMOKSJZIIiXe3xPZC1WU60mfARzw3fFi.kX4.kabXMy', '16.png', '2022-09-11 12:23:41'),
(31, 'lavakiran', 'lavakiran143@gmail.com', '$2y$10$hz6UDTfoatpJDiagTnn...AVI3uzmASMDWQ1C3.vfJq6wV4Xxj1ne', '2.png', '2022-11-06 11:47:56'),
(32, 'Mantu kumar', 'mantukumar6205480951@gmail.com', '$2y$10$k2L6HMIXBGOnU.FOw3hhm.XYibGLKXlCMUtIRCKy/V9fagIyvITKC', '16.png', '2022-11-27 12:33:48'),
(33, 'Md Monazir hasan', 'monazirhasan27@gmail.com', '$2y$10$eMOboGW0Ywkn0bL415Vjn.vN9d.jeRGzms.2h4tqtDLNQ.KGKppFW', '3.png', '2023-02-03 00:02:17'),
(34, 'EmmaClaire', 'emmaclairerl@gmail.com', '$2a$12$DIogNWSmlXlz.CUrNqj0s.8cSHGJ2FmTBZD7BV45sR7oEOTe5BPbW', '31.png', '2023-07-29 02:28:09'),
(35, 'Test1234', 'test1234@mail.com', '$2y$10$aVpK4HBIBjnK2geV3g4y1ONmWjNKnl7ITv6734L3o.VH92kUKYP2q', '3.png', '2024-01-10 07:32:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
