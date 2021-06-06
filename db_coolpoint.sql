-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coolpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_form`
--

CREATE TABLE `billing_form` (
  `sr_no` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `street2` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `order_person` varchar(200) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_form`
--

INSERT INTO `billing_form` (`sr_no`, `first_name`, `last_name`, `street`, `street2`, `town`, `comment`, `phone`, `email`, `delivery`, `order_person`, `order_time`) VALUES
(4, 'Deepak', 'Ugale', 'Student Rest House', 'Marathwada University ', 'Bhawasingpura', 'ice cream complemantry send double double ', 2147483647, 'ugale.deepak3010@gmail.com', '', 'nishamaskar299@gmail.com', '2020-03-15 16:08:56'),
(5, 'Ankita', 'Dhuri', 'Mr. Yashawant Dhuri, Dhuri Pada, At kumbral', 'Tq Dodamarg, Dist sindhudurg', '', 'I like she', 2147483647, 'idontknow@mail.com', '', 'nishamaskar299@gmail.com', '2020-03-15 16:15:29'),
(6, 'Ankita', 'Dhuri', 'Mr. Yashawant Dhuri, Dhuri Pada, At kumbral', 'Tq Dodamarg, Dist sindhudurg', '', 'I like she', 2147483647, 'idontknow@mail.com', '', 'nishamaskar299@gmail.com', '2020-03-15 17:03:07'),
(7, 'Ankita', 'Dhuri', 'Mr. Yashawant Dhuri, Dhuri Pada, At kumbral', 'Tq Dodamarg, Dist sindhudurg', '', 'I like she', 2147483647, 'idontknow@mail.com', '', 'nishamaskar299@gmail.com', '2020-03-15 17:04:13'),
(9, 'a1', 'a1', 'a1', 'a1', 'a1', 'a1', 1, 'a1', '', 'nishamaskar299@gmail.com', '2020-03-15 17:26:15'),
(10, 'a2', 'a2', 'a2', 'a2', 'a2', 'a2', 2, 'a2', '', 'nishamaskar299@gmail.com', '2020-03-15 17:31:36'),
(11, 'a3', 'a3', 'a3', 'a3', 'a3', 'a3', 3, 'a3', '', 'nishamaskar299@gmail.com', '2020-03-15 17:38:25'),
(12, 'a4', 'a4', 'a4', 'a4', 'a4', 'a4', 4, 'a4', '', 'nishamaskar299@gmail.com', '2020-03-15 18:38:17'),
(13, 'a5', 'a5', 'a5', 'a5', 'a5', 'a5', 5, 'a5', '', 'nishamaskar299@gmail.com', '2020-03-15 18:54:12'),
(14, 'a6', 'a6', 'a6', 'a6', 'a6', 'a6', 6, 'a6', '', 'nishamaskar299@gmail.com', '2020-03-15 18:56:34'),
(15, 'a6', 'a6', 'a6', 'a6', 'a6', 'a6', 6, 'a6', '', 'nishamaskar299@gmail.com', '2020-03-15 18:58:51'),
(16, 'a7', 'a7', 'a7', '', '', '', 7, '', '', 'nishamaskar299@gmail.com', '2020-03-15 19:05:14'),
(17, 'a8', 'a8', 'a8', '', '', '', 8, '', '', 'nishamaskar299@gmail.com', '2020-03-15 19:07:24'),
(18, 'a8', 'a8', 'a8', '', '', '', 8, '', '', 'nishamaskar299@gmail.com', '2020-03-15 19:08:43'),
(19, 'x', 'x', 'x', 'x', 'x', 'x', 7, 'x', '', 'nishamaskar299@gmail.com', '2020-03-15 19:42:03'),
(20, 'anku', 'anku', 'anku', 'anku', 'anku', 'anku', 4, 'anku', '', 'nishamaskar299@gmail.com', '2020-03-15 19:53:36'),
(21, 'anku', 'anku', 'anku', 'anku', 'anku', 'anku', 4, 'anku', '', 'nishamaskar299@gmail.com', '2020-03-15 19:56:41'),
(22, 'Deepak', 'Ugale', 'At . Kothala Kh.', 'Po. Gondi ', 'Tal. Ambad Dist Jalana', 'well', 2147483647, 'ugale.deepak3010@gmail.com', '', 'nishamaskar299@gmail.com', '2020-03-15 20:01:23'),
(23, 'c', 'c', 'c', 'c', 'c', 'c', 9, 'm', '', 'nishamaskar299@gmail.com', '2020-03-15 20:09:02'),
(24, 'l', 'l', 'l', 'l', 'l', 'l', 1, 'l', '', 'nishamaskar299@gmail.com', '2020-03-15 20:11:08'),
(25, 'qQq', 'q', 'q', 'q', 'q', 'q', 3, 'q', '', 'nishamaskar299@gmail.com', '2020-03-15 20:14:55'),
(26, 'Namrata', 'Mehender', 'dept of cs', 'dr bamu univ. ', 'bhavasinghpura, aurangabad', 'i want to chilled ice creams only', 2147483647, 'nm.Mehender@protomail.com', '', '9', '2020-03-15 21:01:39'),
(27, 'sima', 'sima', 'sima', 'sima', 'sima', 'sima', 5134, 'sima', '', '152', '2020-03-15 21:10:21'),
(28, 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a', '', '152', '2020-03-15 21:21:01'),
(29, 'Manali', 'RahangDhale', 'House No 34, Rahad Palle, Gadchiroli ', 'Dept. B.A.M.University ', 'Near Bhavasingpura Aurangabad', 'Dont send spoons', 2147483647, 'manali@DeepakMail.com', '', 'Manali@DeepMail.com', '2020-03-16 04:41:02'),
(30, 'AJEET', 'GAIKWAD', 'student rest house ', 'bamu university', 'nagsenwan', '4 spoons', 2147483647, 'ajeetgaikwad1997@gmail.com', '', 'ajeetgaikwad1997@gmail.com', '2020-03-16 05:14:31'),
(31, 'Deepak', 'Ugale', 'At kothala', '', 'Jalna', '', 0, 'ugale.deepak3010@gmail.com', '', 'ugale.deepak3010@gmail.com', '2021-03-19 04:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `cart_select`
--

CREATE TABLE `cart_select` (
  `user_email` varchar(200) NOT NULL,
  `user_cart` int(10) NOT NULL,
  `time_select` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `select_id_card` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_select`
--

INSERT INTO `cart_select` (`user_email`, `user_cart`, `time_select`, `select_id_card`) VALUES
('nishamaskar299@gmail.com', 7012, '2020-03-15 19:59:01', 141),
('9', 7003, '2020-03-15 20:58:15', 143),
('Manali@DeepMail.com', 7014, '2020-03-16 04:32:41', 145),
('Manali@DeepMail.com', 7004, '2020-03-16 04:33:07', 146),
('ajeetgaikwad1997@gmail.com', 7007, '2020-03-16 05:08:51', 148),
('ugale.deepak3010@gmail.com', 7006, '2021-03-19 04:41:06', 158);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('gaytri', 'gaytri123@gmail.com', 'hello', 'website is beautiful'),
('gayatri sabde', 'gayatri12@gmail.comm', 'hiiii', 'service is good'),
('gayatri sabde', 'nisha@gmail.com', 'hii', 'nice'),
('rutu', 'rutu249@gmail.com', 'hii', 'superb'),
('deepak', 'ugale.deepak3010@gmail.com', 'Development', 'very hard to work with sesssion , value not assign, cache not refresh, javascript not work, smaller samller problem take more and more time,,,,\r\nwell But all kind good journey..\r\n~ 16-03-2020 02:43 AM'),
('Manali RahangDhale', 'Manali@DeepMail.com', 'Nice Service', 'Good Service\r\nAnd Very Helpful Service'),
('ajeet gaikwad', 'ajeetgaikwad1997@gmail.com', 'bad service', 'more than one hour taking time');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_qnty` int(5) NOT NULL,
  `order_person` varchar(1000) NOT NULL,
  `product_total` int(11) NOT NULL,
  `final_order_total` int(10) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `product_price`, `product_qnty`, `order_person`, `product_total`, `final_order_total`, `order_time`) VALUES
(41, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 18:38:17'),
(42, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 18:54:12'),
(43, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 18:56:34'),
(44, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 18:58:51'),
(45, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 19:05:14'),
(46, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 19:07:24'),
(47, '', 0, 0, 'nishamaskar299@gmail.com', 0, 10, '2020-03-15 19:08:43'),
(48, '7005', 70, 2, 'nishamaskar299@gmail.com', 140, 0, '2020-03-15 19:44:42'),
(49, '', 0, 0, 'nishamaskar299@gmail.com', 0, 150, '2020-03-15 19:44:42'),
(50, '7010', 120, 2, 'nishamaskar299@gmail.com', 240, 0, '2020-03-15 19:46:27'),
(51, '', 0, 0, 'nishamaskar299@gmail.com', 0, 250, '2020-03-15 19:46:28'),
(52, '7009', 115, 17, 'nishamaskar299@gmail.com', 1955, 0, '2020-03-15 19:49:59'),
(53, '', 0, 0, 'nishamaskar299@gmail.com', 0, 1965, '2020-03-15 19:49:59'),
(54, '7006', 100, 10, 'nishamaskar299@gmail.com', 1000, 0, '2020-03-15 19:51:48'),
(55, '', 0, 0, 'nishamaskar299@gmail.com', 0, 1010, '2020-03-15 19:51:48'),
(56, '7009', 115, 5, 'nishamaskar299@gmail.com', 575, 0, '2020-03-15 19:52:46'),
(57, '', 0, 0, 'nishamaskar299@gmail.com', 0, 585, '2020-03-15 19:52:46'),
(58, '7009', 115, 50, 'nishamaskar299@gmail.com', 5750, 0, '2020-03-15 19:56:08'),
(59, '', 0, 0, 'nishamaskar299@gmail.com', 0, 5760, '2020-03-15 19:56:09'),
(60, '7012', 550, 9, 'nishamaskar299@gmail.com', 4950, 0, '2020-03-15 19:59:12'),
(61, '', 0, 0, 'nishamaskar299@gmail.com', 0, 4960, '2020-03-15 19:59:12'),
(62, '7012', 550, 59, 'nishamaskar299@gmail.com', 32450, 0, '2020-03-15 20:08:42'),
(63, '', 0, 0, 'nishamaskar299@gmail.com', 0, 32460, '2020-03-15 20:08:42'),
(64, '7012', 550, 2, 'nishamaskar299@gmail.com', 1100, 0, '2020-03-15 20:10:46'),
(65, '', 0, 0, 'nishamaskar299@gmail.com', 0, 1110, '2020-03-15 20:10:46'),
(66, '7012', 550, 3, 'nishamaskar299@gmail.com', 1650, 0, '2020-03-15 20:14:30'),
(67, '', 0, 0, 'nishamaskar299@gmail.com', 0, 1660, '2020-03-15 20:14:30'),
(68, '7003', 230, 1, '9', 230, 0, '2020-03-15 20:58:37'),
(69, '7004', 50, 2, '9', 100, 0, '2020-03-15 20:58:37'),
(70, '', 0, 0, '9', 0, 340, '2020-03-15 20:58:37'),
(71, '7004', 50, 10, '152', 500, 0, '2020-03-15 21:09:16'),
(72, '', 0, 0, '152', 0, 510, '2020-03-15 21:09:16'),
(73, '', 0, 0, '152', 0, 10, '2020-03-15 21:21:28'),
(74, '7004', 50, 1, 'Manali@DeepMail.com', 50, 0, '2020-03-16 04:34:12'),
(75, '7014', 550, 1, 'Manali@DeepMail.com', 550, 0, '2020-03-16 04:34:12'),
(76, '', 0, 0, 'Manali@DeepMail.com', 0, 610, '2020-03-16 04:34:12'),
(77, '7007', 290, 3, 'ajeetgaikwad1997@gmail.com', 870, 0, '2020-03-16 05:09:34'),
(78, '', 0, 0, 'ajeetgaikwad1997@gmail.com', 0, 880, '2020-03-16 05:09:34'),
(79, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 10, '2021-03-19 04:24:20'),
(80, '7006', 100, 1, 'ugale.deepak3010@gmail.com', 100, 0, '2021-03-19 04:25:09'),
(81, '7009', 115, 1, 'ugale.deepak3010@gmail.com', 115, 0, '2021-03-19 04:25:09'),
(82, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 225, '2021-03-19 04:25:09'),
(83, '7006', 100, 1, 'ugale.deepak3010@gmail.com', 100, 0, '2021-03-19 04:37:00'),
(84, '7011', 300, 1, 'ugale.deepak3010@gmail.com', 300, 0, '2021-03-19 04:37:00'),
(85, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 410, '2021-03-19 04:37:00'),
(86, '7006', 100, 1, 'ugale.deepak3010@gmail.com', 100, 0, '2021-03-19 04:37:31'),
(87, '7011', 300, 1, 'ugale.deepak3010@gmail.com', 300, 0, '2021-03-19 04:37:31'),
(88, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 410, '2021-03-19 04:37:31'),
(89, '7006', 100, 1, 'ugale.deepak3010@gmail.com', 100, 0, '2021-03-19 04:37:49'),
(90, '7011', 300, 1, 'ugale.deepak3010@gmail.com', 300, 0, '2021-03-19 04:37:49'),
(91, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 410, '2021-03-19 04:37:49'),
(92, '7011', 300, 1, 'ugale.deepak3010@gmail.com', 300, 0, '2021-03-19 04:40:24'),
(93, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 310, '2021-03-19 04:40:25'),
(94, '7011', 300, 1, 'ugale.deepak3010@gmail.com', 300, 0, '2021-03-19 04:40:47'),
(95, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 310, '2021-03-19 04:40:47'),
(96, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 10, '2021-03-19 04:40:58'),
(97, '7006', 100, 5, 'ugale.deepak3010@gmail.com', 500, 0, '2021-03-19 07:04:08'),
(98, '', 0, 0, 'ugale.deepak3010@gmail.com', 0, 510, '2021-03-19 07:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `sr_no` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`sr_no`, `product_name`, `product_img`, `product_price`, `product_desc`, `product_id`) VALUES
(1, 'ameriacan dryfruits', 'product-4.JPG', 230, 'american dryfruits is fresher & tasty', 7003),
(2, 'chocalate', 'product-3.jpg', 50, 'chocalate ice cream best flavor for children', 7004),
(3, 'strawberry', 'product-2.jpg', 70, 'any time as strawberry ice cream time', 7005),
(4, 'mango', 'product-1.jpg', 100, 'i never say no to an mango ice-cream', 7006),
(5, 'blueberry', 'product-8.jpg', 290, 'eat blueberry ice-cream for daily happiness', 7007),
(6, 'cherry', 'product-7.jpg', 240, 'cherry ice-cream is duct tape for the heart', 7008),
(7, 'butterscotch', 'product-6.jpg', 115, 'no excuse,butterscotch is anywhere', 7009),
(8, 'pista', 'product-5.jpg', 120, 'any time is pista ice cream time', 7010),
(9, 'chocalate chips', 'product-12.jpg', 300, 'eating chocalate chips ice-cream is the best diet to lose stress', 7011),
(10, 'kesar pista', 'product-11.jpg', 550, 'with kesar pista ice cream anything is possible', 7012),
(11, 'matka', 'product-10.jpg', 300, 'try to enjoy every single scope of your life just like an matka ice cream', 7013),
(12, 'peru', 'product-9.jpg', 550, 'life is better with peru ice cream', 7014);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `phone`, `password`) VALUES
('$username1', '$email1', 4545, '$password1'),
('Anku', 'AnkitaDhuri@DeepakMail.com', 8989898, ''),
('ankita', 'ankudeepak@gmail.com', 12341234, ''),
('Manali Rahangdhale', 'Manali@DeepMail.com', 1234567890, 'Manali@DeepMail.com'),
('Deepak Ugale', 'ugale.deepak3010@gmail.com', 2147483647, 'Pass@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_form`
--
ALTER TABLE `billing_form`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `cart_select`
--
ALTER TABLE `cart_select`
  ADD UNIQUE KEY `select_id_card` (`select_id_card`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_form`
--
ALTER TABLE `billing_form`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cart_select`
--
ALTER TABLE `cart_select`
  MODIFY `select_id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
