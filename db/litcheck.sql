-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 11:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE `literature` (
  `id` int(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `title` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `form` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `view` int(200) NOT NULL,
  `abstract` longtext NOT NULL,
  `date` date NOT NULL,
  `download` int(200) NOT NULL,
  `author_1` varchar(100) NOT NULL,
  `author_2` varchar(100) NOT NULL,
  `author_3` varchar(100) NOT NULL,
  `author_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`id`, `owner`, `title`, `category`, `form`, `link`, `view`, `abstract`, `date`, `download`, `author_1`, `author_2`, `author_3`, `author_4`) VALUES
(1, 'johndoe', 'Windows 7', 'Computer Engineering', 'Article', 'https://en.wikipedia.org/wiki/Windows_7', 1, 'Windows 7 is a major release of the Windows NT operating system developed by Microsoft. It was released to manufacturing on July 22, 2009, and became generally available on October 22, 2009. It is the successor to Windows Vista, released nearly three years earlier. ', '2021-06-27', 0, 'Kapitan Tiyago', 'Padre Salvi', 'Juan Dela Cruz', ''),
(4, 'johndoe', 'What is Arduino?', 'Electronics Engineering', 'Thesis', 'https://www.arduino.cc/en/guide/introduction', 0, 'What is Arduino chuchu?\r\nArduino is an open-source electronics platform based on easy-to-use hardware and software. Arduino boards are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online. You can tell your board what to do by sending a set of instructions to the microcontroller on the board. To do so you use the Arduino programming language (based on Wiring), and the Arduino Software (IDE), based on Processing.\r\n\r\nOver the years Arduino has been the brain of thousands of projects, from everyday objects to complex scientific instruments. A worldwide community of makers - students, hobbyists, artists, programmers, and professionals - has gathered around this open-source platform, their contributions have added up to an incredible amount of accessible knowledge that can be of great help to novices and experts alike.\r\n\r\n', '2021-06-28', 2, 'Juan Dela Cruz', 'Padre Salvi', '', ''),
(5, 'janedoe', 'Why Arduino is good in industry?', 'Industrial Engineering', 'Article', 'https://www.arduino.cc/en/guide/introduction', 1, 'Why Arduino?\r\nThanks to its simple and accessible user experience, Arduino has been used in thousands of different projects and applications. The Arduino software is easy-to-use for beginners, yet flexible enough for advanced users. It runs on Mac, Windows, and Linux. Teachers and students use it to build low cost scientific instruments, to prove chemistry and physics principles, or to get started with programming and robotics. Designers and architects build interactive prototypes, musicians and artists use it for installations and to experiment with new musical instruments. Makers, of course, use it to build many of the projects exhibited at the Maker Faire, for example. Arduino is a key tool to learn new things. Anyone - children, hobbyists, artists, programmers - can start tinkering just following the step by step instructions of a kit, or sharing ideas online with other members of the Arduino community.\r\n\r\nThere are many other microcontrollers and microcontroller platforms available for physical computing. Parallax Basic Stamp, Netmedia\'s BX-24, Phidgets, MIT\'s Handyboard, and many others offer similar functionality. All of these tools take the messy details of microcontroller programming and wrap it up in an easy-to-use package. Arduino also simplifies the process of working with microcontrollers, but it offers some advantage for teachers, students, and interested amateurs over other systems:\r\n\r\n', '2021-06-28', 1, 'Padre Damaso', 'Maria Makiling', 'Kapitan Tiyago', 'Padre Salvi'),
(16, 'janedoe', 'Electrical Architecture', 'Electronics Engineering', 'Case Study', 'https://en.wikipedia.org/wiki/electric', 0, '', '2021-06-15', 0, 'Kapitan Tiyago', 'Maria Makiling', '', ''),
(17, 'admin', 'Laws of Civil Architecture', 'Civil Engineering', 'Case Study', 'https://en.wikipedia.org/wiki/electric', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim tortor at auctor urna nunc id cursus. Interdum consectetur libero id faucibus nisl tincidunt. Nisi vitae suscipit tellus mauris a. Neque convallis a cras semper auctor neque. Nisl rhoncus mattis rhoncus urna neque viverra justo nec. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Mauris nunc congue nisi vitae suscipit. Nisi lacus sed viverra tellus in. Feugiat nibh sed pulvinar proin gravida hendrerit lectus. Egestas congue quisque egestas diam in.\r\n\r\nMorbi leo urna molestie at elementum eu facilisis. In massa tempor nec feugiat nisl pretium. In hendrerit gravida rutrum quisque non tellus. Pellentesque adipiscing commodo elit at imperdiet dui. Dui sapien eget mi proin. Sed enim ut sem viverra aliquet eget. Tortor dignissim convallis aenean et tortor at. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Non sodales neque sodales ut etiam sit amet. Rhoncus dolor purus non enim praesent elementum facilisis leo. Eget sit amet tellus cras adipiscing enim. Amet tellus cras adipiscing enim eu. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum.\r\n\r\nSit amet porttitor eget dolor morbi non. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Lorem dolor sed viverra ipsum. Turpis nunc eget lorem dolor sed viverra ipsum. Sit amet massa vitae tortor condimentum lacinia quis. Purus ut faucibus pulvinar elementum integer enim neque volutpat. Mauris pharetra et ultrices neque ornare aenean. Volutpat est velit egestas dui id ornare arcu odio ut. Sit amet luctus venenatis lectus magna fringilla urna. Elementum curabitur vitae nunc sed velit dignissim sodales. Feugiat nisl pretium fusce id velit. Pretium fusce id velit ut tortor pretium. Quisque non tellus orci ac auctor. Facilisis volutpat est velit egestas dui id ornare arcu. Mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing. Fermentum dui faucibus in ornare quam viverra orci sagittis.', '2021-06-15', 0, 'Padre Damaso', 'Padre Salvi', '', ''),
(18, 'lorem', 'A Social Gathering', 'Filipino', 'Case Study', 'https://www.google.com/', 0, 'In late October, Don Santiago de los Santos, who is known as Captain Tiago, throws a large dinner party in Manila. He is very wealthy and, as such, the party takes place in his impressive home, to which people eagerly flock so as not to miss an important social event. As the guests mill about, groups of soldiers, European travelers, and p', '2021-03-27', 0, 'Padre Damaso', 'Juan Dela Cruz', '', ''),
(20, 'local', 'Professional lorem ipsum generator for typographers', 'Applied Statistics', 'Case Study', 'https://www.google.com/', 0, 'We use cookies to ensure the best user experience. By continuing to browse our site, you accept our use of cookies and our Privacy Policy.We use cookies to ensure the best user experience. By continuing to browse our site, you accept our use of cookies and our Privacy Policy.We use cookies to ensure the best user experience. By continuing to browse our site, you accept our use of cookies and our Privacy Policy.', '2021-05-18', 0, 'Cardo Dela Cruz', 'Maria Makiling', 'Padre Salvi', ''),
(30, 'local', 'Importance of Laplace', 'Information Technology', 'Article', 'https://www.bing.com/', 0, 'Not Set, Please add an abstract for this document!', '2021-09-02', 0, 'Padre Salvi', 'Padre Damaso', '', ''),
(32, 'lorem', 'Importance of Communication', 'Communication', 'Article', 'https://www.google.com/', 0, 'Built for Windows. Easily search on Google with the fast, secure browser. Built for Windows. Easily search on Google with the fast, secure browser Built for Windows. Easily search on Google with the fast, secure browser', '2021-09-11', 0, 'Padre Damaso', 'Padre Salvi', '', ''),
(34, 'admin', 'Mind Conditioning from Sigmund Freud ', 'Psychology', 'Article', 'https://www.google.com/', 0, 'Not Set, Please add an abstract for this document!', '2021-07-08', 0, 'Maria Makiling ', 'Cardo Dela Cruz', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `googleid` text NOT NULL,
  `role` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `googleid`, `role`, `username`, `password`, `last_name`, `first_name`, `email`, `contact`, `program`) VALUES
(1, '0', 'Administrator', 'admin', 'admin', 'Dela Cruz', 'Juan', 'example@example.ph', '098774747999', 'Master of Science in Civil Engineering (MSCE)'),
(2, '0', 'Administrator', 'johndoe', 'admin', 'Damaso', 'Padre', '', '09998887777', 'Geotechnical Engineering'),
(3, '0', 'Administrator', 'janedoe', 'admin', 'Makiling', 'Maria', '', '09112224444', 'Master of Arts in Psychology (MA Psych)'),
(4, '0', 'Administrator', 'joanedoe', 'admins', 'Salvi', 'Padre', '', '09332221111', 'Clinical Psychology'),
(6, '0', 'Administrator', 'lorem', 'ipsum', 'Tiyago', 'Kapitan', 'admin@admin', '09877541236', 'Master of Science in Economics'),
(10, '0', 'Administrator', 'local', 'host', 'Dela Cruz', 'Cardo', '', '09252154145', 'Master in Public Administration'),
(39, '', '', 'adasdas', 'adsadas', 'asdsadasd', 'asdsadsad', 'asdsa@asdasdsa.asdsadas', '230230203', 'Applied Security and Digital Forensics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `literature`
--
ALTER TABLE `literature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `literature`
--
ALTER TABLE `literature`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
