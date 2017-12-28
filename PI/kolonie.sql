-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Gru 2017, 14:12
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kolonie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kolonie`
--

CREATE TABLE `kolonie` (
  `IDkol` int(11) NOT NULL,
  `nazwakol` text CHARACTER SET utf8 NOT NULL,
  `org` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dataPocz` date NOT NULL,
  `dataKon` date NOT NULL,
  `opis` text CHARACTER SET utf8 NOT NULL,
  `aktywnoscKol` int(11) NOT NULL,
  `IDturn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kolonie`
--

INSERT INTO `kolonie` (`IDkol`, `nazwakol`, `org`, `dataPocz`, `dataKon`, `opis`, `aktywnoscKol`, `IDturn`) VALUES
(94, 'Włochy - Narciarska podróż', 'FunClub', '0000-00-00', '0000-00-00', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 1, 4),
(96, 'Rabka Zdrój - Wakacyjny Relax', 'FunClub', '2018-08-12', '2018-08-26', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>', 1, 2),
(97, 'Kołobrzeg - Wakacyjny Relax', 'FunClub', '2018-07-22', '2018-08-05', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>', 0, 1),
(98, 'Wisła - Zimowisko z survivalem dla dzieci ', 'FunClub', '2018-02-11', '2018-02-24', 'Zakopane - Zimowa stolica Polski, jest również niezwykle atrakcyjna w lecie. Piękne widoki, świeże powietrze, liczne szklaki turystyczne i wiele atrakcji dla turystów. Nowoczesny Aquapark, skocznie narciarskie.\r\n\r\nOśrodek kolonijny Ośrodek wypoczynkowy  położony jest w centrum Zakopanego, znajduje się w bezpiecznej i zacisznej części miasta, ok. 5 minut od głównej ulicy miasta Krupówek. Budynek trzy piętrowy, pokoje z balkonami, z których roztacza się widok na Tatry.\r\n\r\n<br/>Czas trwania: <i>14 dni </i>\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 0, 3),
(99, 'Świnoujście - Wakacyjny Relax', 'Winiarska&Spółka', '2018-06-24', '2018-07-07', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>', 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obozy`
--

CREATE TABLE `obozy` (
  `IDobo` int(11) NOT NULL,
  `nazwaobo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `org` varchar(255) NOT NULL,
  `opis` text CHARACTER SET utf8 NOT NULL,
  `aktywnoscObo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `obozy`
--

INSERT INTO `obozy` (`IDobo`, `nazwaobo`, `org`, `opis`, `aktywnoscObo`) VALUES
(1111, 'English for Youth - Rzeszów', 'EnglishClub', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 0),
(1112, 'Rymanów Zdrój - English for kids', 'EnglishClub', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 1),
(1113, 'Kamionka - English time', 'FunClub', 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polkolonie`
--

CREATE TABLE `polkolonie` (
  `IDpol` int(11) NOT NULL,
  `nazwapol` varchar(255) CHARACTER SET utf8 NOT NULL,
  `org` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `aktywnoscPol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `polkolonie`
--

INSERT INTO `polkolonie` (`IDpol`, `nazwapol`, `org`, `opis`, `aktywnoscPol`) VALUES
(997, 'Kraków - Smocza Jama', 'EnglishClub', 'Lorem Ipsum jest tekstem stosowanym jako przyk?adowy wype?niacz w przemy?le poligraficznym. Zosta? po raz pierwszy u?yty w XV w. przez nieznanego drukarza do wype?nienia tekstem próbnej ksi??ki. Pi?? wieków pó?niej zacz?? by? u?ywany przemy?le elektronicznym, pozostaj?c praktycznie niezmienionym. Spopularyzowa? si? w latach 60. XX w. wraz z publikacj? arkuszy Letrasetu, zawieraj?cych fragmenty Lorem Ipsum, a ostatnio z zawieraj?cym ró?ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 0),
(998, 'Wrocław - Zabaw w mieście', 'FunClub', 'Lorem Ipsum jest tekstem stosowanym jako przyk?adowy wype?niacz w przemy?le poligraficznym. Zosta? po raz pierwszy u?yty w XV w. przez nieznanego drukarza do wype?nienia tekstem próbnej ksi??ki. Pi?? wieków pó?niej zacz?? by? u?ywany przemy?le elektronicznym, pozostaj?c praktycznie niezmienionym. Spopularyzowa? si? w latach 60. XX w. wraz z publikacj? arkuszy Letrasetu, zawieraj?cych fragmenty Lorem Ipsum, a ostatnio z zawieraj?cym ró?ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 1),
(999, 'Kolorowe lato - Szczecin', 'BardowskiTravel', 'Lorem Ipsum jest tekstem stosowanym jako przyk?adowy wype?niacz w przemy?le poligraficznym. Zosta? po raz pierwszy u?yty w XV w. przez nieznanego drukarza do wype?nienia tekstem próbnej ksi??ki. Pi?? wieków pó?niej zacz?? by? u?ywany przemy?le elektronicznym, pozostaj?c praktycznie niezmienionym. Spopularyzowa? si? w latach 60. XX w. wraz z publikacj? arkuszy Letrasetu, zawieraj?cych fragmenty Lorem Ipsum, a ostatnio z zawieraj?cym ró?ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 0),
(1000, 'Zima w Krakowie', 'BardowskiTravel', 'Lorem Ipsum jest tekstem stosowanym jako przyk?adowy wype?niacz w przemy?le poligraficznym. Zosta? po raz pierwszy u?yty w XV w. przez nieznanego drukarza do wype?nienia tekstem próbnej ksi??ki. Pi?? wieków pó?niej zacz?? by? u?ywany przemy?le elektronicznym, pozostaj?c praktycznie niezmienionym. Spopularyzowa? si? w latach 60. XX w. wraz z publikacj? arkuszy Letrasetu, zawieraj?cych fragmenty Lorem Ipsum, a ostatnio z zawieraj?cym ró?ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker\r\n\r\n\r\n<br/>Czas trwania: <i>10 dni </i>\r\n<br/>Terminy turnusów: do wyboru przy rejestracji\r\n<br/>Program koloni: \r\n\r\n</br> <a href=\"galeria.php\" title=\"galeria\">Zapraszamy do galerii »</a></p>\r\n', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turnusykol`
--

CREATE TABLE `turnusykol` (
  `IDturn` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `datapocz` date NOT NULL,
  `datakon` date NOT NULL,
  `IDzap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `turnusykol`
--

INSERT INTO `turnusykol` (`IDturn`, `nazwa`, `datapocz`, `datakon`, `IDzap`) VALUES
(1, 'Turnus Letni - 1 (14 dni)', '2018-06-24', '2018-07-07', 0),
(2, 'Turnus Letni - 2 (14 dni)', '2018-07-15', '2018-07-29', 0),
(3, 'Turnus Zimowy - 1 (14dni)', '2018-01-21', '2018-02-03', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `nick` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nazwisko` varchar(255) CHARACTER SET utf8 NOT NULL,
  `organizator` int(11) NOT NULL,
  `uzytkownik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`IDuser`, `nick`, `email`, `password`, `imie`, `nazwisko`, `organizator`, `uzytkownik`) VALUES
(1, 'Lola', 'admin@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Lola', 'Nowak', 0, 1),
(2, 'MBura', 'm.bura@op.pl', '*2731A025422CD12BB0DE48DE77142CD39AC1F0E7', 'Magda', 'Bura', 0, 1),
(3, 'Nowaczek', 'nowaczek.r@op.pl', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Renata', 'Nowak', 0, 1),
(4, 'AnnaKot', 'akot123@wp.pl', '*A4B6157319038724E3560894F7F932C8886EBFCF', 'Anna', 'Kot', 0, 1),
(6, 'MPanda', 'mpanda@wp.pl', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Monika', 'Panda', 1, 0),
(7, 'FunClub', 'funclub@op.pl', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'FunClub ', 'Agnieszka Bura', 1, 0),
(8, 'Lena11', 'lena11@wp.pl', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Lena', 'Kowalska', 1, 0),
(9, 'Wisnia', 'mwisniewska@op.pl', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'Monika', 'Wiśniewska', 0, 1),
(10, 'admin', 'admin@gmail.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'admin', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisykol`
--

CREATE TABLE `zapisykol` (
  `IDuser` int(11) NOT NULL,
  `IDkol` int(11) NOT NULL,
  `IDzap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zapisykol`
--

INSERT INTO `zapisykol` (`IDuser`, `IDkol`, `IDzap`) VALUES
(1, 99, 0),
(4, 99, 0),
(8, 94, 0),
(2, 97, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisyobo`
--

CREATE TABLE `zapisyobo` (
  `IDuser` int(11) NOT NULL,
  `IDobo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zapisyobo`
--

INSERT INTO `zapisyobo` (`IDuser`, `IDobo`) VALUES
(4, 1111),
(3, 1111),
(2, 1112);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisypol`
--

CREATE TABLE `zapisypol` (
  `IDuser` int(11) NOT NULL,
  `IDpol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zapisypol`
--

INSERT INTO `zapisypol` (`IDuser`, `IDpol`) VALUES
(2, 1000),
(4, 999),
(2, 998);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kolonie`
--
ALTER TABLE `kolonie`
  ADD PRIMARY KEY (`IDkol`),
  ADD KEY `IDturn` (`IDturn`);

--
-- Indexes for table `obozy`
--
ALTER TABLE `obozy`
  ADD PRIMARY KEY (`IDobo`);

--
-- Indexes for table `polkolonie`
--
ALTER TABLE `polkolonie`
  ADD PRIMARY KEY (`IDpol`);

--
-- Indexes for table `turnusykol`
--
ALTER TABLE `turnusykol`
  ADD PRIMARY KEY (`IDturn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- Indexes for table `zapisykol`
--
ALTER TABLE `zapisykol`
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDkol` (`IDkol`);

--
-- Indexes for table `zapisyobo`
--
ALTER TABLE `zapisyobo`
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDobo` (`IDobo`);

--
-- Indexes for table `zapisypol`
--
ALTER TABLE `zapisypol`
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDpol` (`IDpol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `turnusykol`
--
ALTER TABLE `turnusykol`
  ADD CONSTRAINT `turnusykol_ibfk_1` FOREIGN KEY (`IDturn`) REFERENCES `kolonie` (`IDturn`);

--
-- Ograniczenia dla tabeli `zapisykol`
--
ALTER TABLE `zapisykol`
  ADD CONSTRAINT `zapisykol_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `zapisykol_ibfk_2` FOREIGN KEY (`IDkol`) REFERENCES `kolonie` (`IDkol`);

--
-- Ograniczenia dla tabeli `zapisyobo`
--
ALTER TABLE `zapisyobo`
  ADD CONSTRAINT `zapisyobo_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `zapisyobo_ibfk_2` FOREIGN KEY (`IDobo`) REFERENCES `obozy` (`IDobo`);

--
-- Ograniczenia dla tabeli `zapisypol`
--
ALTER TABLE `zapisypol`
  ADD CONSTRAINT `zapisypol_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `zapisypol_ibfk_2` FOREIGN KEY (`IDpol`) REFERENCES `polkolonie` (`IDpol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
