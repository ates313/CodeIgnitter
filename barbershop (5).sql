-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 10:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_Heading` varchar(255) NOT NULL,
  `about_about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_Heading`, `about_about`) VALUES
(4, 'Əziz müştərilər!', 'Əl çatmayan arzular, çin olmayan röyalara siz də çatmaq istəyirsinizsə bizə etibar edin! Limitsiz çay/qəhvə xidmətimiz və avtomobiliniz üçün pulsuz dayanacaq imkanlarından istifadə edə bilərsiniz.'),
(6, 'It is a long established fact that a', 'reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors '),
(8, 'Loremm', 'eader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editorseader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editorseader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_surname` varchar(255) NOT NULL,
  `a_description` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_mobile` varchar(50) NOT NULL,
  `a_telegram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_surname`, `a_description`, `a_password`, `a_email`, `a_mobile`, `a_telegram`) VALUES
(1, 'Ates', 'ates123', 'Qurbanov', 'QWERTYUIOP ASDFGHJKL ZXCVBNM', '202cb962ac59075b964b07152d234b70', 'ates.qurbanov06@gmail.com', '+994508881723', '0508881723');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `price_Heading` varchar(255) NOT NULL,
  `price_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `price_Heading`, `price_price`) VALUES
(4, 'Təraş', '10-20 AZN'),
(5, 'Saç kəsimi', '20 AZN'),
(6, 'Saqqal kəsimi', '5-15 AZN'),
(7, 'Saç boyama', '15-30 AZN'),
(8, 'Keratin + Perma', '30-150 AZN'),
(9, 'Saç darama', '5-15 AZN'),
(10, '12345', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_Heading` varchar(255) NOT NULL,
  `service_Paragraph` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_Heading`, `service_Paragraph`) VALUES
(5, 'Keratin + Perma', 'Orijinal schwarzkopf məhsulları ilə saçların düzləşdirilməsi və həmçinin burulması'),
(6, 'Saç boyama', 'Hər növ saçların peşəkar boyanması. Ağ saçların mikro boya ilə örtünməsi.'),
(7, 'Saç darama', 'Gedəcəyiniz tədbirə uyğun saçların daranması. Seyrək saçların topik vasitəsylə örtülməsi.'),
(13, 'Saqqal kəsimi', 'Seyrək saqqallara forma verilməsi. Özəl buxar vasitəsiylə saqqalın ülgüc ilə təraş edilməsi.'),
(14, 'Üz təmizlənməsi', 'Hydrafacial aparatında, xüsusi serumlar, birdəfəlik başlıqlar və pilinqlərdən istifadə edilməklə üzün təmizlənməsi.'),
(16, '12345', '67890'),
(17, 'Saç kəsimi', 'Hər üz quruluşuna uyğun xüsusi saç kəsim formaları. Həmçinin anatomik saç kəsimi.');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_creater_id` int(11) NOT NULL,
  `s_FirstName_az` varchar(255) NOT NULL,
  `s_LastName_az` varchar(255) NOT NULL,
  `s_user_description_az` varchar(255) NOT NULL,
  `s_FirstName_en` varchar(255) NOT NULL,
  `s_LastName_en` varchar(255) NOT NULL,
  `s_user_description_en` varchar(2000) NOT NULL,
  `s_FirstName_ru` varchar(255) NOT NULL,
  `s_LastName_ru` varchar(255) NOT NULL,
  `s_user_description_ru` mediumtext NOT NULL,
  `s_Position` varchar(255) NOT NULL,
  `s_Email` varchar(255) NOT NULL,
  `s_Mobile` int(255) NOT NULL,
  `s_Facebook` varchar(50) NOT NULL,
  `s_Telegram` varchar(90) NOT NULL,
  `s_Youtube` varchar(100) NOT NULL,
  `s_experience` varchar(255) NOT NULL,
  `s_Instagram` varchar(50) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_creater_id`, `s_FirstName_az`, `s_LastName_az`, `s_user_description_az`, `s_FirstName_en`, `s_LastName_en`, `s_user_description_en`, `s_FirstName_ru`, `s_LastName_ru`, `s_user_description_ru`, `s_Position`, `s_Email`, `s_Mobile`, `s_Facebook`, `s_Telegram`, `s_Youtube`, `s_experience`, `s_Instagram`, `s_image`, `s_create_date`) VALUES
(22, 'Ates', 'Qurbanov', 'az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', 'Ates', '0', 'en Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'Ates', 'Qurbanov', '0', 'Director', 'ates.qurbanov06@gmail.com', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '2 il', 'https://www.instagram.com/', '4145293c8f477e933cd016dbf2f28407.jpg', 2023),
(24, 'Nurlan', 'Mirzaev', 'az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', 'Nurlan', '0', 'en Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'Nurlan ', 'Mirzaev', '0', 'Manager', 'nurlanmirzaev@gmail.com', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '2 il', 'https://www.instagram.com/', 'f395637173fa80cb817b7c3953ae1891.jpg', 2023),
(25, 'Samil', 'Baxisov', 'az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', 'Samil', '0', 'en Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'Samil ', 'Baxisov', '0', 'Manager', 'samilbaxisov@gmail.com', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '4 il', 'https://www.instagram.com/', 'f3748cde5665ed3ca15cb5739c9e1c77.jpg', 2023),
(26, 'Şamxal', 'Əliyev', 'az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '', '0', '', '', '', '0', 'Asistent', 'şamxal@gmail.com', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '5 il', 'https://www.instagram.com/', '52dc6bb93651890757850bcffc4f2197.jpg', 2023),
(29, 'Vusal', 'Mamedov', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '', '0', '', '', '', '0', 'Manager', 'https://www.google.com/intl/tr/gmail/about/', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '7 ay', 'https://www.instagram.com/', 'b26f5aef8df63a878969c31840ac0230.jpg', 2023),
(30, 'Xeyal', 'Quliyev', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '', '0', '', '', '', '0', 'Manager', 'https://www.google.com/intl/tr/gmail/about/', 0, 'https://www.facebook.com/', 'https://web.telegram.org/k/', 'https://www.youtube.com/', '2 il', 'https://www.instagram.com/', 'b30bea6cf992f43a6502025d748103b7.jpg', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_creater_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_creater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
