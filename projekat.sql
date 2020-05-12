-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 06, 2020 at 06:38 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Korisnicko_ime` char(18) NOT NULL,
  `Password` char(18) DEFAULT NULL,
  PRIMARY KEY (`Korisnicko_ime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `Korisnicko_ime_mod` char(18) NOT NULL,
  `Password` char(18) DEFAULT NULL,
  PRIMARY KEY (`Korisnicko_ime_mod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ostavljena_za`
--

DROP TABLE IF EXISTS `ostavljena_za`;
CREATE TABLE IF NOT EXISTS `ostavljena_za` (
  `idRec` int(11) NOT NULL,
  `idR` int(11) NOT NULL,
  `Korisnicko_ime` char(18) NOT NULL,
  PRIMARY KEY (`idRec`,`idR`,`Korisnicko_ime`),
  KEY `R_18` (`idR`,`Korisnicko_ime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poseceni_restorani`
--

DROP TABLE IF EXISTS `poseceni_restorani`;
CREATE TABLE IF NOT EXISTS `poseceni_restorani` (
  `idR` int(11) NOT NULL,
  `Korisnicko_ime` char(18) NOT NULL,
  PRIMARY KEY (`idR`,`Korisnicko_ime`),
  KEY `R_16` (`Korisnicko_ime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radno_vreme`
--

DROP TABLE IF EXISTS `radno_vreme`;
CREATE TABLE IF NOT EXISTS `radno_vreme` (
  `idRV` char(18) NOT NULL,
  `idR` int(11) NOT NULL,
  `Ponedeljak` char(18) DEFAULT NULL,
  `Utorak` char(18) DEFAULT NULL,
  `Sreda` char(18) DEFAULT NULL,
  `Cetvrtak` char(18) DEFAULT NULL,
  `Petak` char(18) DEFAULT NULL,
  `Subota` char(18) DEFAULT NULL,
  `Nedelja` char(18) DEFAULT NULL,
  PRIMARY KEY (`idRV`),
  KEY `R_9` (`idR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recenzija`
--

DROP TABLE IF EXISTS `recenzija`;
CREATE TABLE IF NOT EXISTS `recenzija` (
  `idRec` int(11) NOT NULL,
  `Korisnicko_ime_mod` char(18) DEFAULT NULL,
  `idR` int(11) NOT NULL,
  `Tekst` text,
  `Ocena` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRec`),
  KEY `R_7` (`idR`),
  KEY `R_19` (`Korisnicko_ime_mod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovan_korisnik`
--

DROP TABLE IF EXISTS `registrovan_korisnik`;
CREATE TABLE IF NOT EXISTS `registrovan_korisnik` (
  `Korisnicko_ime` char(18) NOT NULL,
  `Password` char(18) DEFAULT NULL,
  `Ime` char(18) DEFAULT NULL,
  `Prezime` char(18) DEFAULT NULL,
  PRIMARY KEY (`Korisnicko_ime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

DROP TABLE IF EXISTS `restoran`;
CREATE TABLE IF NOT EXISTS `restoran` (
  `idR` int(11) NOT NULL,
  `Ime` char(18) DEFAULT NULL,
  `Broj_telefona` char(18) DEFAULT NULL,
  `Adresa` char(18) DEFAULT NULL,
  `Sajt` char(18) DEFAULT NULL,
  `Vrsta_hrane` char(18) DEFAULT NULL,
  `Cenovni_rang` char(18) DEFAULT NULL,
  `Prosecna_ocena` char(18) DEFAULT NULL,
  `idSl` char(18) DEFAULT NULL,
  `Opis` text,
  PRIMARY KEY (`idR`),
  KEY `R_20` (`idSl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`idR`, `Ime`, `Broj_telefona`, `Adresa`, `Sajt`, `Vrsta_hrane`, `Cenovni_rang`, `Prosecna_ocena`, `idSl`, `Opis`) VALUES
(2, 'Smokvica', '063608446', 'Molerova 33', 'smokvica.rs', 'italijanska', '$$', '4.5', NULL, 'Priča o Smokvici počela je sa željom četiri prijatelja da otvore restoran koji će biti najdraže mesto okupljanja njihovih prijatelja, porodica i svih onih koji biraju da što češće uživaju svim svojim čulima.Stvoreni su topli, ušuškani, kreativni ambijenti provanslaskog stila, u kojima kutak za sebe nalaze ljudi različitih godina, profesija i potreba. Naši gosti su oni koji žele dobru kafu, limunadu sa svežom nanom i opuštanje u bašti, oni koji vole bogat, šaren i uzbudljiv doručak, oni koji su došli da rade dok sporo ispijaju čaj, ali i oni raspoloženi za ukusan obrok na koji ne mogu da naiđu ni na jednom drugom mestu.\r\n\r\n'),
(3, 'Chez Nik', '0113131331', ' Bulevar Zorana Đi', 'cheznik.com', 'srpska', '$$$', '4.82', NULL, 'Chez Nik, kratko ime koje znači puno toga na jednom mestu. Sjajnu kafu i doručak za uspešan početak dana, izbor jela i poslastica koji nikoga ne ostavljaju ravnodušnim. Uz kvalitetno birane namirnice, umeće i maštu naših kuvara, svaki tanjir se pretvara u malo remek delo. Poklonite sebi trenutke uživanja koji se dugo pamte!'),
(4, 'Lorenzo & Kakalamb', '0113295351', 'Cvijićeva 110', 'lk.rs', 'italijanska', '$$$', '4.85', NULL, '\"LORENZO I KAKALAMBA\" je porodični restoran koji je za kratko vreme uspeo da osvoji goste svojom originalnošću, šarmom i jedinstvenim spojem Firence i Pirota. Kroz autentičnu ponudu tradicionalnih firentinskih i piroćanskih specijaliteta i istog takvog ambijenta, imaćete osećaj da ste na jugu Srbije ili ste otputovali kroz vreme nazad u renesansnu Italiju. '),
(5, 'Cantina de Frida', '0603654030', 'Karađorđeva 2', 'cantinadefrida.com', 'meksička', '$$', '4.62', NULL, 'Malo ljudi je posedovalo takvu žar za životom kao legendarna meksička umetnica Frida Kahlo. Ona je dočekivala svaki dan sa ljubavlju i strašću. Inspirisala je ljude oko sebe da posmatraju život iz različitih uglova. Ta njena strast za životom bila je inspiracija i za bar restoran Cantina de Frida.\r\nTo je mesto gde se sastaju prijatelji da zajedno pevaju, plešu i dele trpezu,\r\nu slavu životu.'),
(6, 'Mezestoran Dvorišt', '0113246515', 'Svetogorska 46', 'restorandvoriste.r', 'grčka', '$$', '4.41', NULL, 'Skriven od gradske vreve, izložen svežim povetarcima sa Krita, Jadrana, Andaluzije i Bliskog Istoka donosi u Beograd jednostavnu, kreativnu kuhinju koja poštuje pravila mediteranske ishrane, filozofije i načina života.'),
(7, 'Moonsushi', '0113344569', ' Makedonska 31', 'moon-sushi.com', 'azijska', '$', '4.6', NULL, 'Mesto sa najdužom tradicijom pripremanja japanskih specijaliteta, prvenstveno suši ukusa. Upravo na ovom mestu mnogi stanovnici Beograda i njihovi gosti su sarmu zamenili zdravim i veoma atraktivnim zalogajima. Neverovatan talenat kuvara i edukacija najvišeg nivoa svih zaposlenih će vas uvesti u svet sasvim posebne ishrane. Ne morate da pakujete kofere i planirate put u daleki Japan, on se doselio u strogi centar grada.'),
(8, 'Wok', '0113282828', 'Francuska 5', 'wok-republic.com', 'azijska', '$$', '4.4', NULL, 'Wok Republic je lanac restorna brze azijske hrane specijalizovan za wok, jela sa nudlama i pirinčem koja se spremaju u otvorenoj kuhinji.'),
(9, 'Zapata', ' 0113809207', 'Vojvode Bogdana 13', 'zapatabeograd.com', 'meksička', '$', '4.31', NULL, 'Restoran \"Zapata\" je osnovan u septembru 2005 godine i za jako kratko vreme stekao je brojne poštovaoce i verne goste. Lociran u blizini Bulevara Kralja Aleksandra i Vukovog spomenika, on je gastronomsko i hedonističko mesto u sirem centru metropole.'),
(10, 'La Taqueria', '062220786', 'Gračanička 7', NULL, 'meksička', '$$', '4.68', NULL, 'Autentična meksička hrana i pravi meksički takosi konačno su stigli u Beograd. U strogom centru grada nalazi se La Taqueria i u njoj se prave takosi, kesadilje ...\r\n'),
(11, 'Terminal GastroBar', '0114079502', 'Bore Stankovića 17', 'terminalgastrobar.', 'italijanska', '$$$', '4.84', NULL, 'Terminal Gastro Bar je casual dining restoran internacionalne kuhinje, smešten u jednom od najlepših delova Beograda, na Vračaru, pored Hrama Svetog Save. Terminal Gastro Bar postoji od 2015. godine. Rangira se kao jedan od vodećih beogradskih restorana.'),
(12, 'Marukoshi Restaura', '0694794715', 'Kapetan-Mišina 37', 'marukoshi.rs', 'azijska', '$', '4.59', NULL, 'Naš concept je jednostavan, kao i naš meni.\r\nJapan ima veličanstvena jela koja se ne zovu suši.\r\nŽelimo da Vam predstavimo odličnu internacionalnu\r\nkuhinju koja je dostupna svim Beograđanima.\r\nDostupno znači pristupačno,a poznate začine koristimo\r\nna potpuno drugačiji način, u prijatnom ambijentu.');

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

DROP TABLE IF EXISTS `slika`;
CREATE TABLE IF NOT EXISTS `slika` (
  `idSl` char(18) NOT NULL,
  `Opis` text,
  `Slika` longblob,
  `idRec` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSl`),
  KEY `R_11` (`idRec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
