-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 28, 2024 at 11:07 PM
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
-- Database: `resource_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Shouvik Das', 'shouvikdasshoumo@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `all_volunteers`
--

CREATE TABLE `all_volunteers` (
  `v_no` int(11) NOT NULL,
  `sl_no` int(11) NOT NULL,
  `timestamp` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `vname` varchar(500) NOT NULL,
  `vgender` varchar(200) NOT NULL,
  `vphone_no` varchar(200) NOT NULL,
  `vDOB` varchar(100) NOT NULL,
  `vaddress` varchar(500) NOT NULL,
  `vemail` varchar(500) NOT NULL,
  `vimage` varchar(500) NOT NULL,
  `hstatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_volunteers`
--

INSERT INTO `all_volunteers` (`v_no`, `sl_no`, `timestamp`, `vname`, `vgender`, `vphone_no`, `vDOB`, `vaddress`, `vemail`, `vimage`, `hstatus`) VALUES
(36, 15, '2024-08-29 00:51:11', 'Rajesh Kumar', 'male', '9645678254', '1994-07-21', '24/3 SG Road, Ahmedabad, Gujarat', 'rajesh.kumar@gmail.com', 'vol7.jpg', 1),
(37, 14, '2024-08-29 00:51:13', 'Manish Agarwal', 'male', '9214748364', '1995-06-15', '5/8 Ballygunge, Kolkata, West Bengal', 'manish.agarwal@outlook.com', 'vol5.jpg', 0),
(38, 13, '2024-08-29 00:51:14', 'Ritu Malhotra', 'female', '9806347832', '1997-09-18', '78/4 Rajouri Garden, New Delhi', 'ritu.malhotra@gmail.com', 'vol13.jpg', 1),
(39, 12, '2024-08-29 00:51:16', 'Arjun Singh', 'male', '9436887025', '1976-05-14', '14B Brigade Road, Bengaluru, Karnataka', 'arjun.singh@gmail.com', 'vol6.jpg', 1),
(41, 10, '2024-08-29 00:51:17', 'Kunal Sharma', 'male', '9421336705', '1981-10-09', '5A Jadavpur, Kolkata, West Bengal', 'kunal.sharma@outlook.com', 'vol4.jpg', 1),
(42, 9, '2024-08-29 00:51:18', 'Meera Dutta', 'female', '9187306558', '1992-11-13', '10/8 Civil Lines, New Delhi', 'meera.dutta@gmail.com', 'vol9.jpg', 0),
(44, 7, '2024-08-29 00:51:32', 'Rakesh Nair', 'male', '9802715963', '1983-05-06', '45/6 MG Road, Bengaluru, Karnataka', 'rakesh.nair@outlook.com', 'Vol 2.jpg', 1),
(45, 6, '2024-08-29 00:51:33', 'Adiya Sen', 'male', '9813647859', '1983-07-08', '12A Park Street, Kolkata, West Bengal', 'aditya.sen@gmail.com', 'vol1.jpg', 1),
(46, 11, '2024-08-29 01:04:49', 'Priyanka Rao', 'female', '9276003644', '1971-10-20', '3/2 MG Road, Pune, Maharashtra', 'priyanka.rao@yahoo.com', 'vol8.jpg', 0),
(48, 16, '2024-08-29 01:06:22', ' Gaurav Bhatia', 'male', '9945123456', '4/6 Nungambakkam, Chennai, Tamil Nadu', '1994-07-15', 'gaurav.bhatia@yahoo.com', 'vol15.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `catname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `catname`) VALUES
(1, 'Blood Donation'),
(2, 'Clothes donation'),
(5, 'Food and Aid'),
(19, 'Medicine & Vaccine'),
(20, 'Educational Materials');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_date` date NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  `event_image` varchar(500) NOT NULL,
  `event_details` text NOT NULL,
  `event_category` int(11) NOT NULL,
  `hstatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date`, `event_venue`, `event_image`, `event_details`, `event_category`, `hstatus`) VALUES
(7, 'Harvest of Hope: Food Donation Drive', '2024-08-31', 'Maidan, Kolkata, West Bengal 700021, India', 'food.jpg', '<p>Join us in our Food Donation Event to help fight hunger in our community. Your contributions of canned goods, fresh produce, or packaged meals will provide vital nourishment to those in need. Together, we can ensure no one goes hungry and bring hope to those who need it most. Every donation makes a difference!</p>', 5, 1),
(9, 'Blood Donation Event: Lifesaver Drive', '2024-08-31', 'Maidan, Kolkata, West Bengal 700021', 'blood donation.jpg', '<p>Join us for the Lifesaver Drive, a crucial event to collect blood donations to support needy patients. Your contribution can significantly impact, providing essential blood supplies to those facing emergencies. Donate, save lives, and help make a difference in our community.</p>', 1, 1),
(10, 'Warmth for All: Cloth Donation Drive', '2024-09-08', 'Maidan, Kolkata, West Bengal 700021, India', 'cloth donation.jpg', '<p>Donate your gently used clothes to help those in need stay warm and comfortable. Join us in the Warmth for All Drive, where every piece of clothing can make a difference in someone\'s life. Your generosity will provide essential warmth and dignity to underprivileged families in our community.</p>', 2, 1),
(11, 'Pass the Pages: Book Donation Drive', '2024-09-08', 'Maidan, Kolkata, West Bengal 700021, India', 'Book donation.jpg', '<p>Share the gift of knowledge by donating books to those who need them most. The Pages of Hope Drive aims to provide educational and recreational reading materials to underprivileged children and adults. Your donated books can open doors to learning, inspiration, and a brighter future for many.</p>', 20, 1),
(12, 'Vaccines for All: Community Health Drive', '2024-09-07', 'Maidan, Kolkata, West Bengal 700021, India', 'Medicine.jpg', '<p>Protect yourself and your community by participating in the Vaccines for All Drive. This event is dedicated to providing essential vaccines to those in need, ensuring everyone has access to life-saving immunizations. Join us in safeguarding public health and building a healthier future for everyone</p>', 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sl_no` int(11) NOT NULL,
  `Timestamp` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sl_no`, `Timestamp`, `Name`, `email`, `phone_no`, `subject`, `message`, `read_status`) VALUES
(13, '2024-08-28 23:21:45', 'Priya Sharma', 'priya.sharma@gmail.com', '9876543210', 'Inquiry About Donation Process', 'Hello, I would like to know more about the process of donating clothes and books through your platform. Could you please provide details on how to schedule a pickup or where I can drop off the items? Thank you!', 1),
(14, '2024-08-28 23:22:12', 'Rohan Gupta', 'rohan.gupta@outlook.com', '9123456795', 'Volunteer Opportunities', 'Hi, I am interested in volunteering for your upcoming events. Could you please share more information on how I can get involved and what roles are available? Looking forward to contributing to your cause.', 0),
(15, '2024-08-28 23:22:38', 'Anjali Deshmukh', 'anjali.deshmukh@yahoo.com', '9298877665', 'Feedback on Recent Event', 'Dear Team, I recently participated in your Blood Donation Drive, and I wanted to express my gratitude for organizing such a well-coordinated event. The staff was extremely professional, and the entire process was smooth. Keep up the great work!', 0),
(16, '2024-08-29 00:08:33', 'Rajiv Menon', 'rajiv.menon@gmail.com', '9898989898', 'Request for Partnership', 'Greetings, I represent a local NGO, and we are interested in partnering with Lifeline Donation for an upcoming community outreach program. I would love to discuss potential collaboration opportunities. Please let me know a convenient time for a meeting.', 0),
(17, '2024-08-29 00:22:21', 'Rajiv Menon', 'rajiv.menon@gmail.com', '9898989898', 'Request for Partnership', 'Greetings, I represent a local NGO, and we are interested in partnering with Lifeline Donation for an upcoming community outreach program. I would love to discuss potential collaboration opportunities. Please let me know a convenient time for a meeting.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `sl_no` int(11) NOT NULL,
  `tname` varchar(500) NOT NULL,
  `tlocation` varchar(500) NOT NULL,
  `tdesignation` varchar(500) NOT NULL,
  `tmessage` varchar(1500) NOT NULL,
  `timage` varchar(500) NOT NULL,
  `tview` int(11) NOT NULL DEFAULT 0,
  `tdate` varchar(200) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`sl_no`, `tname`, `tlocation`, `tdesignation`, `tmessage`, `timage`, `tview`, `tdate`) VALUES
(6, 'Sunita Desai', 'Mumbai, Maharashtra', 'School Teacher', 'Lifeline Donation has made it incredibly easy for me to contribute to causes I care about. The team is dedicated and passionate, and their events are always well-organized. It\'s heartwarming to see the difference our donations make in the lives of those in need.', 'Tes1.jpg', 1, '2024-08-29 01:34:47'),
(7, 'Anil Kumar', 'Bengaluru, Karnataka', 'Software Engineer', 'I\'ve participated in several Lifeline Donation drives, and every experience has been fulfilling. The transparency and commitment of the organization make it a trustworthy platform for anyone looking to make a positive impact.', 'Tes7.jpg', 1, '2024-08-29 01:43:24'),
(8, 'Rajesh Sharma', 'New Delhi', 'Business Owner', 'Supporting Lifeline Donation has been a rewarding experience. Their focus on community welfare and the meticulous execution of their initiatives is commendable. I highly recommend them to anyone looking to contribute to society', 'Tes6.jpg', 1, '2024-08-29 01:45:58'),
(9, 'Meera Bhatt', 'Indore, Madhya Pradesh', 'Social Worker', 'Lifeline Donation’s mission aligns perfectly with my values. They make it easy to contribute, whether it’s through donating resources or volunteering time. It’s rewarding to see the tangible difference their work makes.', 'Tes5.jpg', 1, '2024-08-29 01:47:57'),
(10, 'Arjun Verma', 'Jaipur, Rajasthan', 'College Student', 'As a student, I wanted to contribute to society, but I didn’t know how. Lifeline Donation provided me with the perfect platform to give back. The team is supportive and passionate, and their initiatives are well thought out and impactful.', 'Tes78.jpg', 1, '2024-08-29 01:48:43'),
(11, 'Rakesh Khanna', 'Chandigarh', 'Civil Engineer', 'Lifeline Donation is doing incredible work, and I\'m honored to be a part of it. Their team is passionate, and the initiatives they take are crucial for the well-being of our community. It\'s a great platform to make a difference.', 'Tes2.jpg', 1, '2024-08-29 01:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `sl_no` int(11) NOT NULL,
  `timestamp` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `vol_image` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`sl_no`, `timestamp`, `name`, `gender`, `phone_no`, `DOB`, `address`, `email`, `vol_image`, `status`) VALUES
(6, '2024-08-29 00:28:36', 'Adiya Sen', 'male', '9813647859', '1983-07-08', '12A Park Street, Kolkata, West Bengal', 'aditya.sen@gmail.com', 'vol1.jpg', 1),
(7, '2024-08-29 00:31:52', 'Rakesh Nair', 'male', '9802715963', '1983-05-06', '45/6 MG Road, Bengaluru, Karnataka', 'rakesh.nair@outlook.com', 'Vol 2.jpg', 1),
(8, '2024-08-29 00:32:56', 'Anil Verma', 'male', '9489632784', '1995-10-12', '22B South Avenue, Mumbai, Maharashtra', 'anil.verma@hotmail.com', 'vol3.jpg', 0),
(9, '2024-08-29 00:33:44', 'Meera Dutta', 'female', '9187306558', '1992-11-13', '10/8 Civil Lines, New Delhi', 'meera.dutta@gmail.com', 'vol9.jpg', 1),
(10, '2024-08-29 00:35:20', 'Kunal Sharma', 'male', '9421336705', '1981-10-09', '5A Jadavpur, Kolkata, West Bengal', 'kunal.sharma@outlook.com', 'vol4.jpg', 1),
(11, '2024-08-29 00:36:36', 'Priyanka Rao', 'female', '9276003644', '1971-10-20', '3/2 MG Road, Pune, Maharashtra', 'priyanka.rao@yahoo.com', 'vol8.jpg', 1),
(12, '2024-08-29 00:37:50', 'Arjun Singh', 'male', '9436887025', '1976-05-14', '14B Brigade Road, Bengaluru, Karnataka', 'arjun.singh@gmail.com', 'vol6.jpg', 1),
(13, '2024-08-29 00:38:45', 'Ritu Malhotra', 'female', '9806347832', '1997-09-18', '78/4 Rajouri Garden, New Delhi', 'ritu.malhotra@gmail.com', 'vol13.jpg', 1),
(14, '2024-08-29 00:39:54', 'Manish Agarwal', 'male', '9214748364', '1995-06-15', '5/8 Ballygunge, Kolkata, West Bengal', 'manish.agarwal@outlook.com', 'vol5.jpg', 1),
(15, '2024-08-29 00:40:54', 'Rajesh Kumar', 'male', '9645678254', '1994-07-21', '24/3 SG Road, Ahmedabad, Gujarat', 'rajesh.kumar@gmail.com', 'vol7.jpg', 1),
(16, '2024-08-29 01:06:13', ' Gaurav Bhatia', 'male', '9945123456', '4/6 Nungambakkam, Chennai, Tamil Nadu', '1994-07-15', 'gaurav.bhatia@yahoo.com', 'vol15.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_volunteers`
--
ALTER TABLE `all_volunteers`
  ADD PRIMARY KEY (`v_no`),
  ADD KEY `sl_no` (`sl_no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_category` (`event_category`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_volunteers`
--
ALTER TABLE `all_volunteers`
  MODIFY `v_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_volunteers`
--
ALTER TABLE `all_volunteers`
  ADD CONSTRAINT `all_volunteers_ibfk_1` FOREIGN KEY (`sl_no`) REFERENCES `volunteer` (`sl_no`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`event_category`) REFERENCES `category` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
