-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 09.Dec 2023, 05:57
-- Verzia serveru: 10.4.28-MariaDB
-- Verzia PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `po-2023-2024`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `zoznam`
--

CREATE TABLE `zoznam` (
  `id` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Bedrooms` int(11) NOT NULL,
  `Bathrooms` int(11) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Floor` varchar(255) NOT NULL,
  `Parking` varchar(255) NOT NULL,
  `Image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `zoznam`
--

INSERT INTO `zoznam` (`id`, `Category`, `Price`, `Address`, `Bedrooms`, `Bathrooms`, `Area`, `Floor`, `Parking`, `Image`) VALUES
(1, 'Luxury Vil', '$2.264.000', '18 New Street Miami, OR 97219', 8, 7, '545m2', '3', '6 spots', 'https://img.freepik.com/free-photo/blue-house-with-blue-roof-sky-background_1340-25953.jpg'),
(8, 'Flat', '165000', 'Jelenecka', 2, 1, 'Zobor', '3', '1', 'https://www.dynamik.sk/wp-content/uploads/2022/11/byty_04a.jpg'),
(14, 'Apartman', '20000', 'Lucna', 2, 3, '285', '3', '2', ''),
(15, '1', '2', '3', 4, 5, '6', '7', '8', '9');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `zoznam`
--
ALTER TABLE `zoznam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `zoznam`
--
ALTER TABLE `zoznam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
