-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Set 02, 2014 alle 00:48
-- Versione del server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jointhub`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cowoprices`
--

CREATE TABLE IF NOT EXISTS `cowoprices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tempo` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `postazione` int(11) NOT NULL,
  `scontocorsi` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `cowoprices`
--

INSERT INTO `cowoprices` (`id`, `nome`, `tempo`, `postazione`, `scontocorsi`, `prezzo`, `created_at`, `updated_at`) VALUES
(1, 'Flex5', '5 giorni al mese', 1, 0, 50, '2014-09-01 22:47:25', '2014-09-01 22:47:25'),
(2, 'Flex10', '10 giorni al mese', 1, 10, 100, '2014-09-01 22:47:25', '2014-09-01 22:47:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
