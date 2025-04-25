-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 08:54 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `js`
--

CREATE TABLE `js` (
  `pytanie1` int(11) NOT NULL,
  `pytanie2` int(11) NOT NULL,
  `pytanie3` int(11) NOT NULL,
  `pytanie4` int(11) NOT NULL,
  `pytanie5` int(11) NOT NULL,
  `pytanie6` int(11) NOT NULL,
  `pytanie7` int(11) NOT NULL,
  `pytanie8` int(11) NOT NULL,
  `pytanie9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `pytanie7`, `pytanie8`, `pytanie9`) VALUES
(1, 1, 3, 1, 2, 1, 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mysql`
--

CREATE TABLE `mysql` (
  `pytanie1` int(11) NOT NULL,
  `pytanie2` int(11) NOT NULL,
  `pytanie3` int(11) NOT NULL,
  `pytanie4` int(11) NOT NULL,
  `pytanie5` int(11) NOT NULL,
  `pytanie6` int(11) NOT NULL,
  `pytanie7` int(11) NOT NULL,
  `pytanie8` int(11) NOT NULL,
  `pytanie9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mysql`
--

INSERT INTO `mysql` (`pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `pytanie7`, `pytanie8`, `pytanie9`) VALUES
(3, 2, 1, 2, 1, 3, 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `php`
--

CREATE TABLE `php` (
  `pytanie1` int(11) NOT NULL,
  `pytanie2` int(11) NOT NULL,
  `pytanie3` int(11) NOT NULL,
  `pytanie4` int(11) NOT NULL,
  `pytanie5` int(11) NOT NULL,
  `pytanie6` int(11) NOT NULL,
  `pytanie7` int(11) NOT NULL,
  `pytanie8` int(11) NOT NULL,
  `pytanie9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `pytanie7`, `pytanie8`, `pytanie9`) VALUES
(2, 1, 2, 3, 3, 1, 2, 1, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
