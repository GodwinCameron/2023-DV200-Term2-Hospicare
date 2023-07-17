-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 09:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2023_dv200_term2_hospicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `patient_id`, `doctor_id`, `room_id`) VALUES
(1, '2023-05-22 04:42:30', 1, 1, 1),
(2, '2023-06-30 08:16:00', 2, 2, 1),
(3, '2023-06-30 10:09:00', 19, 2, 1),
(4, '2023-07-19 07:00:00', 24, 2, 1),
(5, '2023-07-20 08:45:00', 27, 3, 2),
(6, '2023-06-24 19:44:00', 1, 1, 4),
(7, '2222-12-30 00:12:00', 2, 5, 5),
(8, '2023-06-08 19:45:00', 19, 4, 3),
(9, '2023-06-24 19:45:00', 24, 3, 3),
(10, '2023-06-30 09:00:00', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `profile_image` varchar(999) NOT NULL,
  `doctor_id` bigint(13) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `password`, `specialisation`, `profile_image`, `doctor_id`, `room`) VALUES
(1, 'Robert', 'Whels', 65, 'male', 835699548, 'bobwhels@hospicare.com', 'BobbyUnencripted22', 'surgeon', 'drivelink', 0, 0),
(2, 'Michael', 'Santana', 34, 'male', 857588825, 'dodidlydongercookerino@haha.com', 'IfYouDontKnowTheyDontKnow2', 'Surgeon', 'https://netstorage-legit.akamaized.net/images/f9339604787f17ef.jpg', 2738563429495, 1),
(3, 'Tyler', 'One', 28, 'DOPADO', 857588825, 'letsgoooooooo@loltyler1merch.com', 'RAAAAAAAAAAAAAnK1', 'General Purpose', '', 8074867500917, 1),
(4, 'Andrew', 'Stark', 22, 'Male', 864641168, 'wayofthetempest@kicknotwitch.com', 'yoone', 'Key Blader', '', 3040788289726, 0),
(5, 'Zack', 'Hoyt', 33, 'male', 84415314, 'asmongold@wow.com', 'logic1', 'Counselor ', '', 8619919912652, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` varchar(999) NOT NULL,
  `patient_id` bigint(13) NOT NULL,
  `medical_aid_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `password`, `profile_image`, `patient_id`, `medical_aid_number`) VALUES
(1, 'Amy', 'Sennar', 21, 'female', 685471169, 'armyamy@gmail.com', 'Hospicare', 'https://wallpaperaccess.com/full/1122518.jpg', 5121548625485, 555658453),
(2, 'Jimmy', 'Neutron', 12, 'male', 685471169, 'thesciencekid@hotmail.com', 'Hospicare', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/00dfaf66be644f213bd767716e84874164bc6475c21138edbd3f58a651859492._RI_.jpg', 8436979353458, 555658453),
(10, 'Courtney ', 'Kent', 38, 'male', 1316699135, 'yomohath@signupaddress.com', 'ikadhsnjkad', 'https://c4.wallpaperflare.com/wallpaper/606/740/844/best-friends-bulldog-cute-dog-photos-dog-images-wallpaper-preview.jpg', 9236979353496, 2244306),
(19, 'Maja ', 'Lamb', 20, 'female', 2147483647, 'Lamb@hotmail.com', 'nhkjsdfnkjfn', 'https://cdn.pixabay.com/photo/2019/08/19/07/45/corgi-4415649_640.jpg', 5236979353496, 61185065),
(20, 'Kaan ', 'Maddox', 45, 'male', 2147483647, 'Maddox@youtube.com', 'hgsfdg', 'https://alpha.aeon.co/images/acd6897d-9849-4188-92c6-79dabcbcd518/header_essay-final-gettyimages-685469924.jpg', 5609606491167, 22872789),
(21, 'Kian ', 'Branch', 28, 'male', 2147483647, 'Branch@work.co.za', 'sfggbsdb', 'https://cdn.pixabay.com/photo/2017/09/25/13/12/puppy-2785074_1280.jpg', 6408938509261, 30942321),
(23, 'Tony', 'Stark', 39, 'male', 555684921, 'ironman@avengers.co', 'IAmIronMan', 'https://wallpapercave.com/wp/eKpNdDi.jpg', 5461852130015, 6684517),
(24, 'Liga', 'Boals', 69, 'female', 2147483647, 'likeidkanything@atthispoint.com', 'Sugmabaols', 'https://play-lh.googleusercontent.com/AmKSpZt_rynhOO0ID1eS0gqeW3DFzoH6KNZkAAgepQ0t9MDRQTmil-nlY5GqkZ_7El0', 5228214383856, 68249813),
(27, 'Leta', 'Cutie', 22, 'female', 2147483647, 'leta@cutemail.com', 'kjuhnfsdkcs', 'https://images.pexels.com/photos/2607544/pexels-photo-2607544.jpeg?cs=srgb&dl=pexels-simona-kidri%C4%8D-2607544.jpg&fm=jpg', 1345304617186, 13343698),
(29, 'Jenifer', 'Goggins', 35, 'female', 2147483647, 'jennyg@gmail.com', 'njkdgfnkdf', 'https://i.quotev.com/khbkzzddusca.jpg', 7376042361312, 55837880),
(30, 'Miles', 'Morales', 19, 'male', 84625656, 'therealspiderman@harlem.com', 'zipzipSwing', 'https://wallpapers.com/images/featured/bhbtlxz0ovcy8z8c.jpg', 1520751098246, 34744281),
(31, 'Aline', 'Starkov', 25, 'female', 2147483647, '1dcharacter@boring.com', 'nhjkfnsdjhns', 'https://d1qxviojg2h5lt.cloudfront.net/images/01F3RB0DJJNYNK1YQZ4V8GQJHY/shadow-and-bone-jessie-mei-li.webp', 2754804220102, 42692407),
(33, 'Jinx', 'Powder', 19, 'female', 2147483647, 'thatcraqzychick@boom.com', 'jlfdsfkmllmkvfd', 'https://wallpapers.com/images/featured/mtw28lh04859xvih.jpg', 8794146949130, 70295264);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `profile_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `name`, `surname`, `age`, `gender`, `phone_number`, `email`, `password`, `rank`, `profile_image`) VALUES
(1, 'Caroline', 'Aggnew', 20, 'female', 843625118, 'caroline@hospicare.com', 'Hospicare', 'receptionist', 'drivelink');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`, `room_type`, `room_capacity`) VALUES
(1, 5, 'Operating theater', 5),
(2, 28, 'Examination Room', 3),
(3, 109, 'Operating theater', 5),
(4, 1, 'Emergency Room', 8),
(5, 10, 'Office', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apppointment_patient` (`patient_id`),
  ADD KEY `appointment_doctor` (`doctor_id`),
  ADD KEY `appointment_room` (`room_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `appointment_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `apppointment_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
