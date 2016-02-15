-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 14 Feb 2016 pada 23.53
-- Versi Server: 5.5.46
-- Versi PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `facemash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `victim_members`
--

CREATE TABLE IF NOT EXISTS `victim_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `EloPoint` float NOT NULL,
  `P` int(11) NOT NULL,
  `W` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data untuk tabel `victim_members`
--

INSERT INTO `victim_members` (`id`, `nama`, `EloPoint`, `P`, `W`, `D`, `L`) VALUES
(1, 'Ayana Shahab', 282.698, 514, 360, 0, 154),
(2, 'Beby Chaesara Anadila', 314.166, 360, 195, 0, 165),
(3, 'Delima Rizky', 35.2563, 385, 148, 0, 237),
(4, 'Dena Siti Rohyati', 161.885, 361, 164, 0, 197),
(5, 'Elaine Hartanto', 511.974, 377, 276, 0, 101),
(6, 'Frieska Anastasia Laksani', 288.108, 412, 204, 0, 208),
(7, 'Gabriela Margareth Warouw', 116.49, 374, 193, 0, 181),
(8, 'Ghaida Farisya', 56.2551, 403, 146, 0, 257),
(9, 'Jennifer Rachel Natasya', 54.1928, 428, 191, 0, 237),
(10, 'Jessica Vania', 0, 400, 177, 0, 223),
(11, 'Jessica Veranda', 457.763, 454, 308, 0, 146),
(12, 'Melody Nurramdhani Laksani', 397.866, 412, 285, 0, 127),
(13, 'Nabilah Ratna Ayu Azalia', 211.988, 386, 222, 0, 164),
(14, 'Rezky Wiranti Dhike', 151.501, 427, 201, 0, 226),
(15, 'Sendy Ariani', 173.803, 378, 223, 0, 155),
(16, 'Shania Junianatha', 213.417, 389, 236, 0, 153),
(17, 'Shinta Naomi', 407.966, 525, 373, 0, 152),
(18, 'Sofia Meifaliani', 267.783, 426, 241, 0, 185),
(19, 'Sonia Natalia', 205.235, 383, 150, 0, 233),
(20, 'Thalia Ivanka Elizabeth', 197.835, 425, 212, 0, 213),
(21, 'Alicia Chanzia', 266.246, 388, 180, 0, 208),
(22, 'Cindy Yuvia', 471.05, 373, 193, 0, 180),
(23, 'Della Delila', 84.7085, 386, 153, 0, 233),
(24, 'Devi Kinal Putri', 391.527, 465, 256, 0, 209),
(25, 'Dwi Putri Bonita', 58.9784, 408, 126, 0, 282),
(26, 'Fakhriyani Shafariyanti', 0, 402, 104, 0, 298),
(27, 'Jennifer Hanna', 357.897, 413, 217, 0, 196),
(28, 'Lidya Maulida Djuhandar', 339.951, 426, 276, 0, 150),
(29, 'Nadila Cindi Wantari', 190.558, 395, 176, 0, 219),
(30, 'Natalia', 203.657, 444, 202, 0, 242),
(31, 'Priscillia Sari Dewi', 62.6711, 387, 95, 0, 292),
(32, 'Ratu Vienny Fitrilya', 413.57, 395, 274, 0, 121),
(33, 'Rina Chikano', 79.5265, 434, 160, 0, 274),
(34, 'Riskha Fairunissa', 182.732, 402, 184, 0, 218),
(35, 'Rona Anggreani', 197.437, 377, 189, 0, 188),
(36, 'Saktia Oktapyani', 104.248, 423, 161, 0, 262),
(37, 'Sinka Juliani', 385.948, 435, 297, 0, 138),
(38, 'Viviyona Apriani', 462.238, 421, 246, 0, 175),
(39, 'Amanda Dwi Arista', 146.773, 440, 217, 0, 223),
(40, 'Aninditha Rahma Cahyadi', 405.426, 419, 210, 0, 209),
(41, 'Ayu Safira Oktaviani', 387.583, 433, 224, 0, 209),
(42, 'Chikita Ravenska Mamesah', 289.2, 424, 183, 0, 241),
(43, 'Feni Fitriyanti', 217.99, 416, 182, 0, 234),
(44, 'Fransisca\r\nSaraswati\r\nPuspa Dewi', 257.244, 392, 170, 0, 222),
(45, 'Haruka\r\nNakagawa', 215.974, 382, 208, 0, 174),
(46, 'Maria Genoveva\r\nNatalia Desy\r\nPurnamasari Gunawan', 381.139, 406, 217, 0, 189),
(47, 'Martha\r\nGraciela', 157.103, 377, 162, 0, 215),
(48, 'Michelle\r\nChristo\r\nKusnadi', 275.165, 354, 201, 0, 153),
(49, 'Nadhifa\r\nSalsabila', 160.471, 380, 190, 0, 190),
(50, 'Ni Made\r\nAyu Vania\r\nAurellia', 21.4553, 433, 113, 0, 320),
(51, 'Nina\r\nHamidah', 0, 416, 163, 0, 253),
(52, 'Shani\r\nIndira\r\nNatio', 438.375, 383, 267, 0, 116),
(53, 'Shania\r\nGracia', 270.337, 355, 222, 0, 133),
(54, 'Stephanie\r\nPricilla\r\nIndarto Putri', 52.5643, 421, 171, 0, 250),
(55, 'Syahfira\r\nAngela\r\nNurhaliza', 223.217, 394, 172, 0, 222),
(56, 'Yansen\r\nIndiani', 29.678, 428, 157, 0, 271);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
