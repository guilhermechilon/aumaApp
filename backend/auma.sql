-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Abr-2019 às 20:44
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avenue`
--

DROP TABLE IF EXISTS `avenue`;
CREATE TABLE IF NOT EXISTS `avenue` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bag`
--

DROP TABLE IF EXISTS `bag`;
CREATE TABLE IF NOT EXISTS `bag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entryData` date NOT NULL,
  `outDate` date DEFAULT NULL,
  `location_id` smallint(6) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `lot` varchar(35) NOT NULL,
  `weight` smallint(6) NOT NULL,
  `producerName` varchar(65) NOT NULL,
  `producerFarm` varchar(65) NOT NULL,
  `city_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_bag_fk` (`city_user`),
  KEY `location_bag_fk` (`location_id`),
  KEY `user_bag_fk` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bagtypecoffe`
--

DROP TABLE IF EXISTS `bagtypecoffe`;
CREATE TABLE IF NOT EXISTS `bagtypecoffe` (
  `typeCoffe_id` smallint(6) NOT NULL,
  `bag_id` int(11) NOT NULL,
  PRIMARY KEY (`typeCoffe_id`,`bag_id`),
  KEY `bag_bagtypecoffe_fk` (`bag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `floor`
--

DROP TABLE IF EXISTS `floor`;
CREATE TABLE IF NOT EXISTS `floor` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `forklift`
--

DROP TABLE IF EXISTS `forklift`;
CREATE TABLE IF NOT EXISTS `forklift` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `street_id` tinyint(4) NOT NULL,
  `avenue_id` tinyint(4) NOT NULL,
  `floor_id` tinyint(4) NOT NULL,
  `position_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `avenue_location_fk` (`avenue_id`),
  KEY `street_location_fk` (`street_id`),
  KEY `position_location_fk` (`position_id`),
  KEY `floor_location_fk` (`floor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitation`
--

DROP TABLE IF EXISTS `solicitation`;
CREATE TABLE IF NOT EXISTS `solicitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` tinyint(4) NOT NULL,
  `forklift_id` tinyint(4) NOT NULL,
  `bag_id` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_solicitation_fk` (`status_id`),
  KEY `forklift_solicitation_fk` (`forklift_id`),
  KEY `bag_solicitation_fk` (`bag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `street`
--

DROP TABLE IF EXISTS `street`;
CREATE TABLE IF NOT EXISTS `street` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `typecoffe`
--

DROP TABLE IF EXISTS `typecoffe`;
CREATE TABLE IF NOT EXISTS `typecoffe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `typeuser`
--

DROP TABLE IF EXISTS `typeuser`;
CREATE TABLE IF NOT EXISTS `typeuser` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `typeUser_id` tinyint(4) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `typeuser_user_fk` (`typeUser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
