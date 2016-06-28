-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 08:41 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socialmediastimulation`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID of the comment',
  `user_id` int(4) NOT NULL COMMENT 'User who commented',
  `post_id` int(4) NOT NULL COMMENT 'Post which received the comment',
  `comment_time` datetime NOT NULL COMMENT 'Commented time',
  `comment_level` int(1) NOT NULL COMMENT 'Comment level',
  `social_type` int(1) NOT NULL COMMENT 'Social type id',
  `attachment` int(1) NOT NULL COMMENT 'If there is any attachment',
  `status` int(1) NOT NULL COMMENT 'Comment status',
  `comment_text` varchar(500) NOT NULL COMMENT 'Comment textual content',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment_time`, `comment_level`, `social_type`, `attachment`, `status`, `comment_text`) VALUES
(53, 1, 54, '0000-00-00 00:00:00', 1, 1, 0, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation'),
(38, 1, 1, '0000-00-00 00:00:00', 1, 1, 0, 1, 'comment of 3'),
(39, 1, 1, '0000-00-00 00:00:00', 1, 1, 0, 1, 'Though both jQuery ready event and window onload event is used to perform task when page is loaded, there is subtle difference between .'),
(52, 1, 49, '0000-00-00 00:00:00', 1, 1, 0, 1, 'haresh is a bloody fool'),
(41, 1, 2, '0000-00-00 00:00:00', 1, 1, 0, 1, 'Though both jQuery ready e'),
(42, 1, 2, '0000-00-00 00:00:00', 1, 1, 0, 1, ' there is subtle difference between'),
(43, 1, 2, '0000-00-00 00:00:00', 1, 1, 0, 1, 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.'),
(44, 1, 3, '0000-00-00 00:00:00', 1, 1, 0, 1, 'graphic elements of a document or visual presentation.'),
(45, 1, 1, '0000-00-00 00:00:00', 1, 1, 0, 1, 'is used to perform task when page is loaded, there is subtle '),
(51, 1, 51, '0000-00-00 00:00:00', 1, 1, 0, 1, 'Talk of IBM reducing its India-based workforce by 50,000'),
(50, 1, 40, '0000-00-00 00:00:00', 1, 1, 0, 1, 'HR Team appreciate all those who attend interview in Niyukthi palakkad Job fair.');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID of the file',
  `post_sku` int(4) NOT NULL COMMENT 'Random ID for the image',
  `user_id` int(3) NOT NULL COMMENT 'ID of the user',
  `file_name` varchar(255) NOT NULL COMMENT 'Filename of the file',
  `file_path` varchar(255) NOT NULL COMMENT 'Filepath of the file',
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `post_sku`, `user_id`, `file_name`, `file_path`) VALUES
(21, 166565, 1, 'IBM_2014_Archives_940x350.jpg', 'uploads/'),
(22, 166565, 1, 'IBM_2014_Archives_940x350.jpg', 'uploads/'),
(23, 71839, 1, 'ibm-denies-100000-layoffs.jpg', 'uploads/'),
(24, 704194, 1, '2010IODEMEA_OpeningSession1.jpg', 'uploads/'),
(25, 535096, 1, 'images (1).jpg', 'uploads/'),
(26, 875001, 1, 'ibm-bluemix.jpg', 'uploads/'),
(27, 751740, 1, 'ibm-bluemix.jpg', 'uploads/'),
(28, 262787, 1, 'ibm-bluemix.jpg', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_sku` int(11) NOT NULL COMMENT 'SKU for the post',
  `user_id` int(11) NOT NULL,
  `social_type` int(3) NOT NULL,
  `post_content` varchar(500) NOT NULL,
  `post_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `post_status` int(3) NOT NULL,
  `post_likes_count` int(4) NOT NULL COMMENT 'Number of likes for the post',
  `post_comments_count` int(4) NOT NULL COMMENT 'Number of comments for the post',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_sku`, `user_id`, `social_type`, `post_content`, `post_date`, `update_date`, `post_status`, `post_likes_count`, `post_comments_count`) VALUES
(40, 252625, 1, 1, 'Imported file compression will be automatically detected from: None, gzip, zip', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0),
(48, 166565, 1, 1, 'Investor services program\nIBM stock can be bought through a stock brokerage firm, bank, or generally through a financial institution that provides brokerage services. The IBM transfer agent, Computershare Trust Company, N.A., not IBM, also sponsors and administers the IBM Investor Services Program which contains a purchasing feature.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(49, 166565, 1, 1, ' IBM is a globally integrated technology and consulting company headquartered in Armonk, New York. With operations in more than 170 countries, IBM attracts and retains some of the world''s most talented people to help solve problems and provide an edge for businesses, governments and non-profits.\n\nInnovation is at the core of IBM''s strategy. The company develops and sells software and systems hardware and a broad range of infrastructure, cloud and consulting services.\n\nToday, IBM is focused on fi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 9, 0),
(50, 71839, 1, 1, 'Talk of IBM reducing its India-based workforce by 50,000 is a reflection of the diminishing importance of low-cost operatives', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0),
(51, 704194, 1, 1, 'IBM press kits offer one-stop collections of information on important topics. View our press kits. Background. Background icon. IBM''s history, financial highlights', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(52, 535096, 1, 1, 'NEW YORK (TheStreet) -- IBM (IBM - Get Report) is sinking below a major support area as a new week begins', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 8, 0),
(53, 875001, 1, 1, 'Eelco Roos was an IT specialist at IBM Amsterdam for over 10 years.\nBut his biggest passion was always photography, and after he saw his Instagram followers grow past 100,000, he quit his IBM job.\n\nNow Roos is one of the most popular Instagram photographers, with over The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(54, 751740, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(55, 262787, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 2, 0),
(56, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(57, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(58, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(59, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(60, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(61, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(62, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(63, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(64, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(65, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(66, 371125, 1, 1, 'The International Business Machines Corporation (commonly referred to as IBM) is an American multinational technology and consulting corporation, with headquarters in Armonk, New York. IBM manufactures and markets computer hardware and software, and offers infrastructure, hosting and consulting services in areas ranging from mainframe computers to nanotechnology', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '482c811da5d5b4bc6d497ffa98491e38');
