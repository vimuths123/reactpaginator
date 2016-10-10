-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 06:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `react`
--

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE IF NOT EXISTS `homes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `price` text NOT NULL,
  `address` text NOT NULL,
  `area` text NOT NULL,
  `beds` text NOT NULL,
  `baths` text NOT NULL,
  `desc` text NOT NULL,
  `subdesc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `price`, `address`, `area`, `beds`, `baths`, `desc`, `subdesc`) VALUES
(1, 'http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg', '$1,975,000 ', '609 W Gravers Ln', '4,820 SqFt', '5', '5', 'Situated between fairmount park and the prestigious philadelphia cricket club, this beautiful 2+ acre property is truly', 'Courtesy of HS Fox & Roach-Chestnut Hill Evergreen'),
(2, 'http://images.prd.mris.com/image/V2/1/vGoNjc2jHGb87GlnnDQlf6LxeOUgIOn0bL6Wvn1nEnig2Ntq6W7xN5cOQBZZeNxl9O42DOkHUw0LNnj1ZB2KHA.jpg', '$1,500,000', '1220-32 N Howard St', '4,900 SqFt', '1', '1', 'A once in a lifetime opportunity to own a unique live / work space in one of philadelphia''s most popular neighborhoods.', 'Courtesy of ll Banker Preferred-Philadelphia'),
(3, 'http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg', '$1,975,000', '218 Lynnebrook Ln', '6,959 SqFt', '6', '5', 'Impressively positioned overlooking 3.5 captivating acres, designated as "significant" by the chestnut hill historical s', 'Courtesy of HS Fox & Roach-Blue Bell'),
(4, 'http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg', '$1,295,000', '9006 Crefeld St', '7,672 SqFt', '7', '5', 'Located in chestnut hill, recently named by the american planning association as one of america''s top 10 great neighborh', 'Courtesy of RE/MAX Services'),
(5, 'http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg', '$1,599,999', '209 Chestnut Hill ve', '16,581 SqFt', '8', '4', 'Built in 1909 by pittsburgh steel magnate henry a. laughlin, greylock is a classic chestnut hill stone mansion once cons', 'Courtesy of ng and Foster-Devon'),
(6, 'http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg', '$1,175,000', '701 W Allens Ln', '9,824 SqFt', '8', '5', 'A once in a lifetime opportunity! live in this grand home with its stunning entry and staircase, bedroom suites, firepla', 'Courtesy of HS Fox & Roach-Chestnut Hill Evergreen '),
(7, 'http://images.prd.mris.com/image/V2/1/7IZk2HTN0AcHnIb7VCvisTUc3kTbn0UyHQlVAlwkNLM3_8UNN8pcgy9u6KVNoRGGH_kdUlpYehdbqzctRNUebg.jpg', '$1,595,000', '704 Saint Georges St', '0 SqFt', '4', '5', 'Blake development is proud to offer the second of two distinctly unique homes located on one of the most desirable stree', 'Courtesy of HS Fox & Roach-Chestnut Hill Evergreen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
