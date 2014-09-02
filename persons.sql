-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Set 02, 2014 alle 12:57
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
-- Struttura della tabella `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cognome` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `luogonascita` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datanascita` date DEFAULT NULL,
  `indirizzo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `localita` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `comune` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `nazione` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `codicefiscale` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `partitaiva` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cap` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `persons`
--

INSERT INTO `persons` (`id`, `cognome`, `nome`, `luogonascita`, `datanascita`, `indirizzo`, `localita`, `comune`, `provincia`, `nazione`, `codicefiscale`, `partitaiva`, `telefono`, `email`, `role_id`, `created_at`, `updated_at`, `cap`) VALUES
(1, 'Ballotta', 'Giovanni', 'Fano', '1976-01-15', 'Viale dei Cipressi, 1', 'Montecchio', 'Vallefoglia', 'PU', 'Italia', 'BLLGNN76A15D488B', NULL, '3485801988', 'giovanni@giovanniballotta.com', 1, '2014-09-02 10:51:47', '2014-09-02 10:51:47', '61020'),
(2, 'Ferri', 'Luca', 'Pesaro', '1977-11-03', 'Via non lo so', 'San Giovanni in Marignano', 'San Giovanni in Marignano', 'RN', 'Italia', 'FRRLCA77B03DDDDD', NULL, NULL, 'info@computerstoresnc.it', 1, '2014-09-02 10:51:47', '2014-09-02 10:51:47', '11111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
