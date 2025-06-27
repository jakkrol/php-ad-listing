-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Maj 2023, 09:03
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `system_ogloszen`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aplikacje`
--

CREATE TABLE `aplikacje` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ogloszenie_id` int(11) NOT NULL,
  `cv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `doswiadczenie`
--

CREATE TABLE `doswiadczenie` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Stanowisko` varchar(50) NOT NULL,
  `Lokalizacja` varchar(50) NOT NULL,
  `Firma` varchar(24) NOT NULL,
  `Okres` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `doswiadczenie`
--

INSERT INTO `doswiadczenie` (`Id`, `User_id`, `Stanowisko`, `Lokalizacja`, `Firma`, `Okres`) VALUES
(1, 1, 'test', 'test', 'test', 'test'),
(3, 1, 'b', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Jezyk` varchar(16) NOT NULL,
  `Poziom` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `jezyki`
--

INSERT INTO `jezyki` (`Id`, `User_id`, `Jezyk`, `Poziom`) VALUES
(1, 1, 'Angielski', 'C1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursy`
--

CREATE TABLE `kursy` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Nazwa` varchar(24) NOT NULL,
  `Organizator` varchar(24) NOT NULL,
  `Okres` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kursy`
--

INSERT INTO `kursy` (`Id`, `User_id`, `Nazwa`, `Organizator`, `Okres`) VALUES
(3, 1, 'TestowyKurs', 'Maciej Test', 'TEST');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `Id` int(11) NOT NULL,
  `stanowisko` varchar(24) NOT NULL,
  `firma` varchar(24) NOT NULL,
  `adres_firmy` varchar(24) NOT NULL,
  `umowa` varchar(12) NOT NULL,
  `wymiar_zatrudnienia` varchar(12) NOT NULL,
  `data` varchar(24) NOT NULL,
  `rodzaj` varchar(12) NOT NULL,
  `technologie` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `obowiazki` varchar(255) NOT NULL,
  `wymagania` varchar(255) NOT NULL,
  `oferuje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`Id`, `stanowisko`, `firma`, `adres_firmy`, `umowa`, `wymiar_zatrudnienia`, `data`, `rodzaj`, `technologie`, `opis`, `obowiazki`, `wymagania`, `oferuje`) VALUES
(4, 'blacharz', 'Blachex', 'ul.Testowa', 'UoP', 'caly etat', '2023-05-25', 'stacjonarna', 'brak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec molestie purus. Morbi vel erat ligula. Mauris eget lectus semper, mattis mauris vitae, efficitur quam. Donec id metus ac nisi auctor efficitur dictum eu quam. Vestibulum ante ipsum primi', 'obowizaek1, obowiazek2', 'wykształcenie ponadpodstawowe, doświadczenie jako blacharz', 'dobre wynagrodzenie, opiekę zdrowotną'),
(5, 'tynkarz', 'tynkex', 'ul.Mickiewicza', 'UoP', 'caly etat', '2023-06-11', 'stacjonarna', 'brak', 'rfasdfsdfasdaf', 'o1,o2,o3', 'w1,w2,w3', 'of1,of2,of3'),
(6, 'murarz', 'Murex', 'ul.Słoneczna', 'B2B', '1/2 etatu', '2023-06-09', 'stacjonarna', 'brak', 'kjhbdcxsacasxcz', 'brak', 'tt', 'tt'),
(7, 'akrobata', 'xd', 'xd', 'UoP', '1/2 etatu', '2023-05-28', 'zdalna', 'xd', 'xdd', 'xd', 'xd', 'xd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(24) NOT NULL,
  `Nazwisko` varchar(24) NOT NULL,
  `Data_ur` varchar(24) NOT NULL,
  `Type` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Haslo` varchar(24) NOT NULL,
  `Numer_tel` varchar(16) NOT NULL,
  `Profil_img` varchar(100) NOT NULL,
  `Stanowisko` varchar(50) NOT NULL,
  `Zamieszkanie` varchar(24) NOT NULL,
  `Podsumowanie` varchar(240) NOT NULL,
  `Doswiadczenie_id` int(11) NOT NULL,
  `Wyksztalcenie_id` int(11) NOT NULL,
  `Jezyki_id` int(11) NOT NULL,
  `Umietnosci` varchar(240) NOT NULL,
  `Kursy_id` int(11) NOT NULL,
  `Linki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Imie`, `Nazwisko`, `Data_ur`, `Type`, `Email`, `Haslo`, `Numer_tel`, `Profil_img`, `Stanowisko`, `Zamieszkanie`, `Podsumowanie`, `Doswiadczenie_id`, `Wyksztalcenie_id`, `Jezyki_id`, `Umietnosci`, `Kursy_id`, `Linki`) VALUES
(1, 'Michał', 'Kowal', '2023-05-10', 0, 'test@email.pl', '1234', 'test', '', 'abc', 'Kraków', 'test', 0, 0, 0, 'um1,um2,um3', 0, 'l1,l2,l3,l4'),
(2, '', '', '', 1, 'admin', 'admin', '', '', '', '', '', 0, 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyksztalcenie`
--

CREATE TABLE `wyksztalcenie` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Szkola` varchar(24) NOT NULL,
  `Poziom` varchar(24) NOT NULL,
  `Kierunek` varchar(24) NOT NULL,
  `Okres` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wyksztalcenie`
--

INSERT INTO `wyksztalcenie` (`Id`, `User_id`, `Szkola`, `Poziom`, `Kierunek`, `Okres`) VALUES
(1, 1, 'TESDT', 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisane`
--

CREATE TABLE `zapisane` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ogloszenie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zapisane`
--

INSERT INTO `zapisane` (`Id`, `user_id`, `ogloszenie_id`) VALUES
(8, 1, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `doswiadczenie`
--
ALTER TABLE `doswiadczenie`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `kursy`
--
ALTER TABLE `kursy`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `wyksztalcenie`
--
ALTER TABLE `wyksztalcenie`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `zapisane`
--
ALTER TABLE `zapisane`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `doswiadczenie`
--
ALTER TABLE `doswiadczenie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `kursy`
--
ALTER TABLE `kursy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wyksztalcenie`
--
ALTER TABLE `wyksztalcenie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `zapisane`
--
ALTER TABLE `zapisane`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
