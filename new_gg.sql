-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 02:12 AM
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
-- Database: `new_gg`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('Pending','Confirmed','Cancelled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Music'),
(2, 'Food'),
(3, 'Art'),
(4, 'Culture'),
(5, 'Sports'),
(6, 'new'),
(11, 'Moj ee dariya hoo');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_description` text DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_time` time DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_date`, `event_time`, `venue`, `price`, `image`, `category_id`) VALUES
(1, 'Kutch Festival', 'Experience the cultural heritage of Kutch with dance, music, and crafts.', '2024-01-15', '11:00:00', 'Kutch Grounds', 50.00, 'kutch_festival.jpg', 4),
(2, 'Ahmedabad Food Festival', 'A diverse food festival featuring local and international cuisines.', '2024-02-10', '12:00:00', 'Ahmedabad Expo Center', 45.00, 'ahmedabad_food_festival.jpg', 2),
(3, 'Gujarat International Finance Tec-City Fair', 'An exhibition of financial and technological innovations.', '2024-03-05', '09:00:00', 'GIFT City', 60.00, 'gift_city_fair.jpg', 3),
(4, 'Mumbai International Art Fair', 'A major art fair showcasing contemporary and traditional art.', '2024-04-15', '11:00:00', 'Mumbai Art Gallery', 70.00, 'mumbai_art_fair.jpg', 3),
(5, 'Surat Diamond Expo', 'An exhibition showcasing Surat’s diamond industry.', '2024-05-20', '10:00:00', 'Surat Expo Center', 80.00, 'surat_diamond_expo.jpg', 2),
(6, 'Pune Cultural Festival', 'A festival celebrating Pune’s rich cultural heritage.', '2024-06-25', '18:00:00', 'Pune Grounds', 55.00, 'pune_cultural_festival.jpg', 4),
(7, 'Jaisalmer Desert Festival', 'A unique festival showcasing Jaisalmer’s desert culture.', '2024-07-10', '19:00:00', 'Jaisalmer Fort', 65.00, 'jaisalmer_desert_festival.jpg', 4),
(8, 'Goa Carnival', 'Enjoy the vibrant celebrations of the Goa Carnival with parades and music.', '2024-08-15', '10:00:00', 'Goa City Center', 75.00, 'goa_carnival.jpg', 1),
(9, 'Ganesh Chaturthi Festival', 'A grand celebration of Ganesh Chaturthi with processions and cultural events.', '2024-09-10', '09:00:00', 'Mumbai Grounds', 60.00, 'ganesh_chaturthi_festival.jpg', 4),
(10, 'Navratri Festival', 'Celebration of Navratri with traditional Garba and Dandiya.', '2024-09-25', '20:00:00', 'Ahmedabad Grounds', 70.00, 'navratri_festival.jpg', 1),
(11, 'Gujarat Folk Festival', 'A festival showcasing Gujarat’s traditional folk music and dance.', '2024-10-05', '16:00:00', 'Gujarat Grounds', 50.00, 'gujarat_folk_festival.jpg', 1),
(12, 'Diwali Festival Fair', 'Celebrate Diwali with a fair featuring local crafts and foods.', '2024-10-20', '12:00:00', 'Surat Expo Center', 55.00, 'diwali_festival_fair.jpg', 2),
(13, 'Pune Music Festival', 'An exciting music festival featuring performances by popular artists.', '2024-11-05', '19:00:00', 'Pune Grounds', 65.00, 'pune_music_festival.jpg', 1),
(14, 'Mumbai Marathon', 'A marathon event with participants from across the country.', '2024-11-15', '07:00:00', 'Mumbai City Center', 45.00, 'mumbai_marathon.jpg', 5),
(15, 'Goa New Year Beach Party', 'Celebrate New Year’s Eve with a beach party in Goa.', '2024-12-31', '22:00:00', 'Goa Beach', 90.00, 'goa_new_year_beach_party.jpg', 1),
(16, 'Christmas Carnival', 'A carnival celebrating Christmas with music, food, and festive activities.', '2024-12-20', '10:00:00', 'Mumbai Carnival Grounds', 60.00, 'christmas_carnival.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comments` text DEFAULT NULL,
  `feedback_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `festival_id` int(11) NOT NULL,
  `festival_name` varchar(100) NOT NULL,
  `festival_description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`festival_id`, `festival_name`, `festival_description`, `start_date`, `end_date`, `venue`, `price`, `image`, `category_id`) VALUES
(1, 'Makar Sankranti Festival', 'A festival celebrating Makar Sankranti with kite flying and traditional events.', '2024-01-14', '2024-01-14', 'Ahmedabad Grounds', 25.00, 'makar_sankranti_festival.jpg', 4),
(2, 'Pune Festival', 'A grand festival celebrating Pune’s history and culture.', '2024-02-05', '2024-02-07', 'Pune Grounds', 30.00, 'pune_festival.jpg', 4),
(3, 'Holi Festival in Gujarat', 'Celebrate Holi with vibrant colors and traditional music.', '2024-03-08', '2024-03-08', 'Gujarat Grounds', 35.00, 'holi_festival_gujarat.jpg', 4),
(4, 'Gudi Padwa Celebration', 'A celebration of Gudi Padwa with cultural events and traditional activities.', '2024-04-10', '2024-04-12', 'Mumbai Grounds', 40.00, 'gudi_padwa_celebration.jpg', 4),
(5, 'Baisakhi Festival', 'Celebrate Baisakhi with music, dance, and food.', '2024-04-14', '2024-04-14', 'Gujarat Grounds', 30.00, 'baisakhi_festival.jpg', 4),
(6, 'Rath Yatra', 'A grand procession celebrating Rath Yatra with traditional ceremonies.', '2024-06-21', '2024-06-21', 'Ahmedabad Grounds', 50.00, 'rath_yatra.jpg', 4),
(7, 'Shravan Festival', 'A religious festival celebrated with rituals and prayers.', '2024-08-01', '2024-08-15', 'Pune Grounds', 20.00, 'shravan_festival.jpg', 4),
(8, 'Navratri Festival', 'A grand celebration of Navratri with dance and cultural events.', '2024-09-25', '2024-09-30', 'Mumbai Grounds', 65.00, 'navratri_festival.jpg', 4),
(9, 'Durga Puja', 'Celebrate Durga Puja with elaborate pandals and cultural performances.', '2024-09-30', '2024-10-05', 'Surat Grounds', 60.00, 'durga_puja.jpg', 4),
(10, 'Dussehra Festival', 'A festival celebrating Dussehra with dramatic performances and cultural events.', '2024-10-15', '2024-10-20', 'Mumbai Grounds', 55.00, 'dussehra_festival.jpg', 4),
(11, 'Diwali Festival', 'Celebrate Diwali with fireworks, food, and cultural events.', '2024-10-20', '2024-10-25', 'Gujarat Grounds', 70.00, 'diwali_festival.jpg', 4),
(12, 'Gurpurab Celebration', 'Celebrate Gurpurab with traditional events and community activities.', '2024-11-14', '2024-11-14', 'Pune Grounds', 30.00, 'gurpurab_celebration.jpg', 4),
(13, 'Christmas Festival', 'A festive celebration of Christmas with activities and entertainment.', '2024-12-20', '2024-12-25', 'Mumbai Grounds', 60.00, 'christmas_festival.jpg', 4),
(14, 'New Year’s Eve Gala', 'Ring in the New Year with a grand gala featuring live performances.', '2024-12-31', '2024-12-31', 'Goa Beach', 90.00, 'new_years_eve_gala.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `festival_id` int(11) DEFAULT NULL,
  `ticket_type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_nm` varchar(50) NOT NULL,
  `u_pw` varchar(255) NOT NULL,
  `address` varchar(70) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_nm`, `u_pw`, `address`, `city`, `state`, `phoneno`, `email_id`, `is_admin`) VALUES
(2, 'Demo User', '$2y$10$bWvTZ.hz9T/6P9szVzHhlusbdtqI3F4gSzpahlmxdBU25jgb0iy.S', NULL, NULL, NULL, NULL, 'demo_user@gmail.com', 0),
(3, 'abhi', '$2y$10$EaQPZsCiZ4mdSvg1E.vuVOREbreFZHgRllCEj9NIB8yszgJwG95Li', NULL, NULL, NULL, NULL, 'abhi.chauhan@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`festival_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `festival_id` (`festival_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `festival_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `festivals`
--
ALTER TABLE `festivals`
  ADD CONSTRAINT `festivals_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`festival_id`) REFERENCES `festivals` (`festival_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
