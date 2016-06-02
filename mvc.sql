-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 04:56 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cateid` int(3) NOT NULL,
  `catename` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateid`, `catename`) VALUES
(11, 'Thá»ƒ Thao'),
(12, 'Khoa Há»c'),
(13, 'Äá»i sá»‘ng'),
(14, 'GiÃ¡o dá»¥c');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `caid` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `caid`, `title`, `content`) VALUES
(13, 4, 'Tháº¿ giá»›i nguyÃªn thá»§y', 'CÃ¡ voi Ä‘Ã£ lÃªn bá» trong táº¿ giá»›i nguyÃªn thá»§y'),
(14, 2, 'NgÆ°á»i máº«u Viá»‡t Nam', 'NgÆ°á»i máº«u Viá»‡t Nam thÆ°á»ng bÃ¡n thÃ¢n Ä‘á»ƒ kiáº¿m sá»‘ng'),
(15, 3, 'BÃ³ng Ä‘Ã¡ trong nÆ°á»›c hÃ´m nay', 'Viá»‡t Nam ghi ráº¥t nhiá»u bÃ n tháº¯ng'),
(16, 4, 'Colombo', 'ÄÃ£ sá»‘ng láº¡i'),
(17, 4, 'Anhstanh', 'KhÃ´ng bá»‹ cháº¿t'),
(18, 5, 'Há»£p tÃ¡c quÃ¢n sá»±', 'HÃ´m nay Má»¹ vÃ  Viá»‡t Nam Ä‘Ã£ kÃ½ káº¿t há»£p Ä‘á»“ng quÃ¢n sá»± trá»‹ giÃ¡ 20 tá»‰ dolla'),
(19, 3, 'sfdfsdfs', 'sdfsdfsdfs'),
(20, 5, 'wewerewrw', 'rÆ°erwrwrewrwrwerw'),
(21, 3, 'fguyoui', 'ewrwetreterterte'),
(22, 3, 'rtyuytutututy', 'fhfghfghfhfhgf'),
(23, 3, 'dfgdfd', 'gdfgdg'),
(24, 3, 'dgdtr', 'uutyutuy'),
(25, 3, 'á»™ighjghjg', 'cfghfhfghf'),
(26, 3, 'ewrerterytryv', 'vbmjjhlj'),
(27, 3, 'dfhfhgfhf', 'dfhfhgfhf'),
(28, 3, 'dfhfhgfhf', 'dfhfhgfhf'),
(29, 3, 'dfhfhgfhf', 'dfhfhgfhf'),
(30, 3, 'dfhfhgfhf', 'dfhfhgfhf'),
(31, 3, 'dfhfhgfhf', 'dfhfhgfhf'),
(32, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(33, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(34, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(35, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(36, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(37, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(38, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(39, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Thá»ƒ Thao trong nÆ°á»›c'),
(40, 5, 'Chiáº¿n tranh', 'Ráº¥t nhiá»u tháº£m há»a'),
(41, 6, 'BÃ³ng Ä‘Ã¡ trong nÆ°á»›c hÃ´m nay', 'Ráº¥t nhiá»u tháº£m há»a'),
(42, 6, 'Thiáº¿u ná»¯ há»a thÃ¢n', 'Ráº¥t nhiá»u tháº£m há»a'),
(43, 6, 'dfhfhgfhf', 'Ráº¥t nhiá»u tháº£m há»a'),
(44, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Ráº¥t nhiá»u tháº£m há»a'),
(45, 6, 'Bong da nu', 'Ráº¥t nhiá»u tháº£m há»a'),
(46, 6, 'Ráº¥t nhiá»u tháº£m há»a', 'Ráº¥t nhiá»u tháº£m há»a'),
(47, 6, 'Thá»ƒ Thao trong nÆ°á»›c', 'Ráº¥t nhiá»u tháº£m há»a'),
(48, 7, 'Chiáº¿n tranh trong nÆ°á»›c', 'Sáº¯p xáº£y ra'),
(49, 8, 'NgÆ°á»i máº«u Viá»‡t Nam', 'sdfdgfdgdfgdgdfgdgd'),
(50, 8, 'NgÆ°á»i máº«u nÆ°á»›c ngoÃ i', 'sdgfhgfhgfhgffhgf'),
(51, 9, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(52, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(53, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(54, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(55, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(56, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(57, 8, 'gdfgfdgdgdfgd', ''),
(58, 8, '', 'gdfgfdgdgdfgd'),
(59, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(60, 10, 'GiÃ¡o dá»¥c Viá»‡t Nam', 'dsfsdggdfgfdgdgdfgd'),
(61, 8, 'gdfgfdgdgdfgd', 'gdfgfdgdgdfgd'),
(64, 11, 'BÃ³ng Ä‘Ã¡ trong nÆ°á»›c ngoÃ i', 'Real vÃ´ Ä‘á»‹ch.......'),
(65, 11, 'BÃ³ng Ä‘Ã¡ trong nÆ°á»›c hÃ´m nay', 'KhÃ´ng cÃ³ gÃ¬'),
(66, 12, 'Khoa há»c vá»›i thá»±c táº¿', 'CÃ³ ráº¥t nhiá»u tiáº¿n bá»™ khoa há»c Ä‘Æ°á»£c Ã¡p dá»¥ng vÃ o thá»±c táº¿'),
(67, 14, 'Ká»³ nghá»‰ hÃ¨', 'HÃ´m nay cÃ¡c trÆ°á»ng Ä‘á»“ng loáº¡t nghá»‰ hÃ¨'),
(68, 11, 'BÃ³ng Ä‘Ã¡ ná»¯', 'CÃ¡c cáº§u thá»§ ná»¯ Ä‘Æ°á»£c tráº£ lÆ°Æ¡ng ráº¥t tháº¥p'),
(69, 11, 'BÃ³ng Ä‘Ã¡ ná»¯', 'CÃ¡c cáº§u thá»§ Ä‘Ã£ pháº£i hi sinh ráº¥t nhiá»u'),
(70, 14, 'Ká»³ thi Ä‘áº¡i há»c 2016-1017', 'NÄƒm nay sá»‘ lÆ°á»£ng thÃ­ sinh tham gia kÃ½ thi Ä‘áº¡t 99%'),
(71, 11, 'Thá»ƒ Thao trong nÆ°á»›c', 'sdgsdgsgsgsgs'),
(72, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(73, 14, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(74, 14, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(75, 14, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(76, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(77, 13, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(78, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(79, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(80, 13, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(81, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(82, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(83, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(84, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(85, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(86, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(87, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(88, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(89, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(90, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(91, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(92, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(93, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(94, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(95, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(96, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(97, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx'),
(98, 11, 'sdgsdgsdgcxxcvcxvx', 'sdgsdgsdgcxxcvcxvx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(2, 'saytolove92', '123456', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateid`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
