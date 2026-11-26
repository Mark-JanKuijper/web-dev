-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Gegenereerd op: 26 nov 2026 om 12:19
-- Serverversie: 26.10.0
-- PHP-versie: 8.3.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mijn_webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `omschrijving` text,
  `afbeelding` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `naam`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(1, 'Circle', 21.99, 'De Circle is een classieke vorm, die voor alles is gebruikt. Will jij een wiel maken? circle. Een tandwiel? circle. Iets anders dat is niet een wiel? CIRCLE! Koop nu de circle vandaag en gebruik het voor wat je wilt!', 'circle.png'),
(2, 'Hexagon', 21.99, 'Hexagons are the bestagons.', 'hexagon.png'),
(3, 'Pentagon', 21.99, 'Pentagon zijn heel vaak gebruikt door cultists.', 'pentagon.png'),
(4, 'Rectangle', 21.99, 'Rectangle will je een vierkant die was net iets langer aan de ene kant? Nou wij hebben de antwoord voor you! Met het help van een tool genoemd \"roteren\" kan jij nu een rectangle gebruiken met welke richting ook!', 'rectangle.png'),
(5, 'Square', 21.99, 'Square is een square', 'square.png'),
(6, 'Triangle', 21.99, 'Triangle is gebruikt voor piramides, geen vragen.', 'triangle.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
