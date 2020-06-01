-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 01, 2020 at 04:15 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Korisnicko_ime`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `Korisnicko_ime` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` char(18) DEFAULT NULL,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  PRIMARY KEY (`Korisnicko_ime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`Korisnicko_ime`, `Password`, `Ime`, `Prezime`) VALUES
('mod', '123456', 'Mod', 'Modic');

-- --------------------------------------------------------

--
-- Table structure for table `ostavljena_za`
--

DROP TABLE IF EXISTS `ostavljena_za`;
CREATE TABLE IF NOT EXISTS `ostavljena_za` (
  `idRec` int(11) NOT NULL,
  `idR` int(11) NOT NULL,
  `Korisnicko_ime` char(18) NOT NULL,
  `idOZ` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idOZ`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ostavljena_za`
--

INSERT INTO `ostavljena_za` (`idRec`, `idR`, `Korisnicko_ime`, `idOZ`) VALUES
(1, 5, 'ema123', 1),
(2, 5, 'AnaVuc', 2),
(3, 3, 'emarad', 3),
(27, 3, 'petrovicp', 27),
(22, 4, 'ema123', 22),
(39, 4, 'lesicmina', 39),
(25, 5, 'milos123', 25),
(24, 5, 'jovanajovanovic', 24),
(16, 8, 'petrovicp', 16),
(15, 3, 'AnaVuc', 15),
(14, 5, 'emarad', 14),
(44, 2, 'emarad', 45),
(28, 11, 'jovanajovanovic', 28),
(29, 6, 'jovanajovanovic', 29),
(30, 12, 'jovanajovanovic', 30),
(31, 8, 'jovanajovanovic', 31),
(32, 10, 'jovanajovanovic', 32),
(33, 9, 'emanikic', 33),
(34, 4, 'emanikic', 34),
(35, 7, 'emanikic', 35),
(36, 1, 'emanikic', 36),
(37, 2, 'emanikic', 37),
(38, 8, 'emanikic', 38),
(40, 11, 'lesicmina', 40),
(41, 6, 'lesicmina', 41),
(42, 6, 'milos123', 42),
(43, 4, 'petrovicp', 43),
(45, 9, 'emarad', 46),
(46, 7, 'emarad', 47),
(47, 1, 'emarad', 48),
(48, 10, 'emarad', 49),
(49, 11, 'emarad', 50),
(50, 1, 'milos123', 51),
(51, 12, 'AnaVuc', 52);

-- --------------------------------------------------------

--
-- Table structure for table `poseceni_restorani`
--

DROP TABLE IF EXISTS `poseceni_restorani`;
CREATE TABLE IF NOT EXISTS `poseceni_restorani` (
  `idR` int(11) NOT NULL,
  `Korisnicko_ime` char(18) NOT NULL,
  `idPosR` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPosR`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `poseceni_restorani`
--

INSERT INTO `poseceni_restorani` (`idR`, `Korisnicko_ime`, `idPosR`) VALUES
(5, 'ema123', 1),
(9, 'ema123', 2),
(5, 'petrovicp', 3),
(7, 'petrovicp', 4),
(3, 'petrovicp', 5),
(5, 'AnaVuc', 6),
(5, 'milos123', 7),
(5, 'jovanajovanovic', 8),
(3, 'AnaVuc', 10),
(11, 'jovanajovanovic', 11),
(6, 'jovanajovanovic', 12),
(12, 'jovanajovanovic', 13),
(8, 'jovanajovanovic', 14),
(10, 'jovanajovanovic', 15),
(9, 'emanikic', 16),
(4, 'emanikic', 17),
(7, 'emanikic', 18),
(1, 'emanikic', 19),
(2, 'emanikic', 20),
(8, 'emanikic', 21),
(4, 'lesicmina', 22),
(11, 'lesicmina', 23),
(6, 'lesicmina', 24),
(6, 'milos123', 25),
(4, 'petrovicp', 26),
(3, 'emarad', 27),
(5, 'emarad', 28),
(2, 'emarad', 29),
(9, 'emarad', 30),
(7, 'emarad', 31),
(1, 'emarad', 32),
(10, 'emarad', 33),
(11, 'emarad', 34),
(1, 'milos123', 35),
(12, 'AnaVuc', 36);

-- --------------------------------------------------------



--
-- Table structure for table `recenzija`
--

DROP TABLE IF EXISTS `recenzija`;
CREATE TABLE IF NOT EXISTS `recenzija` (
  `idRec` int(11) NOT NULL AUTO_INCREMENT,
  `Korisnicko_ime` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `idR` int(11) NOT NULL,
  `Tekst` text,
  `Ocena` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRec`),
  KEY `R_7` (`idR`),
  KEY `R_19` (`Korisnicko_ime`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recenzija`
--

INSERT INTO `recenzija` (`idRec`, `Korisnicko_ime`, `idR`, `Tekst`, `Ocena`) VALUES
(1, 'mod', 5, 'Odlican restoran, sve preporuke!', 5),
(2, 'mod', 5, 'Ovo mesto je dobro za zabavu.Ljudi koji dolaze su veseli, raspolozeni tako da je ambijent vikendom ludilo.\r\nHranu treba pazljivo isplanirati i na vreme naruciti jer se posle dugo ceka. Nista nije posebno ali treba voditi racuna jer cim ustanete i odete da igrate konabari polako sklanjaju hranu,Brzo vam dolivaju vodu ,pice a zimi je jezivo zagusljivo i toplo.', 3),
(3, 'mod', 3, 'Kod Nika je sve dozivljaj.Enterijer je predivno uredjen, konobari brzi,veoma usluzni.Hrana je pripremljena i servirana na potpuno originalan nacin, za klasu bolje nego u ostalim restoranima.Palacinka Suzet je pravi specijalitet.Servirana sa rendanom korom pomorandze, svezom nanom, plocicom cokolade i kuglom sladoleda od vanile.Eksplozija ukusa.Vredi otkriti i druge specijalitete, a i kafa Latte je odlicna.Upoznajte Nika, redovno cete mu se vracati.', 4),
(25, 'mod', 5, 'Lepo mesto', 5),
(24, 'mod', 5, 'Ukusna hrana', 5),
(16, 'mod', 8, 'Dobra kineska hrana!', 4),
(15, 'mod', 3, 'super restoran', 4),
(14, 'mod', 5, 'Uvek se tako dobro provedem u Fridi. Sve preporuke za ovo kultno mesto. Ne znam da li je bolja hrana, muzika, zabava ili osoblje!', 5),
(22, 'mod', 4, 'Ukusna hrana!', 5),
(27, 'mod', 3, '', NULL),
(28, 'mod', 11, 'Odlicna usluga Uvek prijatna atmosfera , ljubazno osoblje koje vas doceka na ulazu odmah. Sve pohvale za ceo kolektiv!', 5),
(29, 'mod', 6, 'Imala sam priliku da provedem sjajno veče na ovom mestu, uz klopu koju ne možete pojesti skoro nigde u Beogradu, a zaista bi je trebalo češće jesti.\r\nOsoblje je ljubazno, prostor je komotan i ne dopire miris iz kuhinje. Bogat i kvalitetnan meni, sa pristojnim cenama i širokim asortimanom vina.', 5),
(30, 'mod', 12, 'Ambijent užas, usluga užas, hrana prilično loša. Od 5 jela koje smo probali jedno je bilo dobro. Konobari nisu upoznati sa menijem kao ni sa namirnicama koje se koriste.', 2),
(31, 'mod', 8, 'Svidja mi se što gosti sa ulice mogu da vide kuvare kako spremaju hranu.Po kvalitetu i meniju se znatno izdvaja od ostalih restorana na kineskom hranom. Dostav je uvek brza sto je takodje veliki plus.', 4),
(32, 'mod', 10, 'Lepo mesto za onoga ko voli meksicku kuhinju.Prijatan ambijent,odlicna ponuda.Preporuka za Margaritu i nachose sa sirom za predjelo.Ljubazno osoblje.', 4),
(33, 'mod', 9, 'Odličam ambijent, ljubazno osobljei nadasve vrhunska gurmanska ponuda !!! Nezaobilazno mesto za ljubitelje meksičke kuhinje...', 5),
(34, 'mod', 4, 'Najneobicniji restoran u gradu. Jedinstven u svakom smislu, od ambijenta, enterijera, ponude jela i pića, usluge. Dođite da se zabavite pre svega!', 5),
(35, 'mod', 7, 'Brilijantno, hrana brza i preukusna! Osoblje je malo neprofesionalno pri rezervacijama i poznavanju jelovnika. Basta je izolovana sa blagim svetlima, time odaje utisak tople atmosfere. Svaka cast!', 4),
(36, 'mod', 1, 'Ljubaznos i usluga na najprofesionalnijem nivou. Nema priucene posluge. Hrana jednostavno receno, carstvo gastronomije. Svaka preporuka. Obezbedjen parking. Od ulaska u objekat do izlaska apsolutna posvecenost gostu.', 5),
(37, 'mod', 2, 'Lokal je divan, velika i prijatna bašta, hrana je korektna! Ali konobari su neljubazni, vrlo cesto zaborave porudzbinu ili donesu pogresno!', 1),
(38, 'mod', 8, 'Simpatican restoran, veoma ljubazno osoblje i odlicna lokacija. Na zalost hrana je izuzetno losa. Kilogram luka u svakoj porciji, ni nalik autenticnoj aziskoj kuhinji. Veliko razocarenje za mene.', 2),
(39, 'mod', 4, 'Najneobicniji restoran u gradu. Jedinstven u svakom smislu, od ambijenta, enterijera, ponude jela i pića, usluge. Dođite da se zabavite pre svega!', 5),
(40, 'mod', 11, 'Odlican restoran u koji rado odlazim sa prijateljima, uvek se dobro zabavimo i imamo ukusan obrok, u tome nam pomaze ljubazno osoblje!', 5),
(41, 'mod', 6, 'Ususkano, mirno, prijatno mesto. Hrana je odlicna,osoblje takodje. Uz raznovrstan meni uvek ide i dobro vino po preporuci.', 5),
(42, 'mod', 6, 'Po preporuci smo posetili ovaj restoran,medjutim, doziveli smo u njemu jako neprijatno iskustvo.\r\nNaime,vreme cekanja porucene hrane je nedopustivo dugo, hrana se gostima sluzi u razlicito vreme, konobari su potpuno nezainteresovani i neljubazni.Jednostavno hrana nije ni po cemu posebna, da bi nadomestila napred navedene negativne stvari.', 2),
(43, 'mod', 4, 'Jako ukusna hrana i ljubazno osoblje!', 5),
(44, 'mod', 2, 'Lepo uredjen ambijent, ususkan, sedela sam u basti koja je dvoriste kuce u kojoj je restoran. Hrana - nista posebno, meni malo plasticno. Necu ponovo ici.', 3),
(45, 'mod', 9, 'Restoran se nalazi u mirnoj ulici u centru Beograda. Hrana je ukusna, porcije su obilne, osoblje veoma ljubazno. Restoran je lepo uređen, atmosfera je lepa. Doći ćemo ponovo.', 4),
(46, 'mod', 7, 'Restoran sa japanskim specijalitetima ali i sa domaćim specijalitetima. hrana je vrlo ukusna i kvalitetna. Cene su pristojne i pored usluge u restoranu vrše i kućnu dostavu. Vrlo su brzi i nisu mnogo skupi.', 5),
(47, 'mod', 1, 'Frans je jedan od tri najbolja restorana u Beogradu, ambijent je veoma prijatan, hrana odlicna, veoma raznovrsna, sa velikim izborom pica, cene su veoma ptistupacne i poseban osvrt na uslugu koja je ubedljivo najbolja u gradu, treba ga posecivati sto vise puta.', 5),
(48, 'mod', 10, 'Prijatan ambijent sa dobro raspolozenim i ljubaznim osobljem. Hrana ukusna, taco party plate je bio dobar, zanimljiv izbor pica. Sve u svemu, lepo iskustvo.', 4),
(49, 'mod', 11, 'Lokal je prelep i vrlo prijatan.usluga je vrhunska!', 5),
(50, 'mod', 1, 'Vrhunski restoran, verovatno najlepša terasa na kojoj sam bio. Konobari i osoblje su profesionalni, svaki njihov potez i reč su na mestu. Hrana bi mogla biti i nešto bolja, s obzirom na status koji restoran uživa. Zbog toga i dajem ocenu 4.\r\nNa odlasku su nas srdačno pozdravili, isto tako za svako naše pitanje su imali strpljenje i odgovor.', 4),
(51, 'mod', 12, '', 1);

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

--
-- Dumping data for table `registrovan_korisnik`
--

INSERT INTO `registrovan_korisnik` (`Korisnicko_ime`, `Password`, `Ime`, `Prezime`) VALUES
('ema123', 'Ema123', 'Emilija', 'Radovanovic'),
('petrovicp', '123456', 'Petar', 'Petrovic'),
('AnaVuc', '123456', 'Ana', 'Vuceljic'),
('emarad', 'ER1234', 'Emilija', 'Radovanovic'),
('jovanajovanovic', 'Jovana123', 'Jovana', 'Jovanovic'),
('milos123', 'milos95', 'Milos', 'Popovic'),
('emanikic', '123456', 'Emilija', 'Nikic'),
('lesicmina', '123456', 'Mina', 'Lesic');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

DROP TABLE IF EXISTS `restoran`;
CREATE TABLE IF NOT EXISTS `restoran` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Broj_telefona` char(18) DEFAULT NULL,
  `Adresa` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Sajt` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Vrsta_hrane` char(18) DEFAULT NULL,
  `Cenovni_rang` char(18) DEFAULT NULL,
  `Prosecna_ocena` char(18) DEFAULT NULL,
  `idSl` char(18) DEFAULT NULL,
  `Opis` text,
  `brojRecenzija` int(11) NOT NULL DEFAULT '0',
  `zbirOcena` int(11) NOT NULL,
  PRIMARY KEY (`idR`),
  KEY `R_20` (`idSl`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`idR`, `Ime`, `Broj_telefona`, `Adresa`, `Sajt`, `Vrsta_hrane`, `Cenovni_rang`, `Prosecna_ocena`, `idSl`, `Opis`, `brojRecenzija`, `zbirOcena`) VALUES
(2, 'Smokvica', '063608446', 'Molerova 33', 'smokvica.rs', 'italijanska', '$$', '2', '24', 'Priča o Smokvici počela je sa željom četiri prijatelja da otvore restoran koji će biti najdraže mesto okupljanja njihovih prijatelja, porodica i svih onih koji biraju da što češće uživaju svim svojim čulima.Stvoreni su topli, ušuškani, kreativni ambijenti provanslaskog stila, u kojima kutak za sebe nalaze ljudi različitih godina, profesija i potreba. Naši gosti su oni koji žele dobru kafu, limunadu sa svežom nanom i opuštanje u bašti, oni koji vole bogat, šaren i uzbudljiv doručak, oni koji su došli da rade dok sporo ispijaju čaj, ali i oni raspoloženi za ukusan obrok na koji ne mogu da naiđu ni na jednom drugom mestu.\r\n\r\n', 2, 4),
(3, 'Chez Nik', '0113131331', ' Bulevar Zorana Đinđića 48a', 'cheznik.com', 'srpska', '$$$', '4', '26', 'Chez Nik, kratko ime koje znači puno toga na jednom mestu. Sjajnu kafu i doručak za uspešan početak dana, izbor jela i poslastica koji nikoga ne ostavljaju ravnodušnim. Uz kvalitetno birane namirnice, umeće i maštu naših kuvara, svaki tanjir se pretvara u malo remek delo. Poklonite sebi trenutke uživanja koji se dugo pamte!', 3, 8),
(4, 'Lorenzo & Kakalamba', '0113295351', 'Cvijićeva 110', 'lk.rs', 'italijanska', '$$$', '5', '29', '\"LORENZO I KAKALAMBA\" je porodični restoran koji je za kratko vreme uspeo da osvoji goste svojom originalnošću, šarmom i jedinstvenim spojem Firence i Pirota. Kroz autentičnu ponudu tradicionalnih firentinskih i piroćanskih specijaliteta i istog takvog ambijenta, imaćete osećaj da ste na jugu Srbije ili ste otputovali kroz vreme nazad u renesansnu Italiju. ', 4, 20),
(5, 'Cantina de Frida', '0603654030', 'Karađorđeva 2', 'cantinadefrida.com', 'meksička', '$$', '4.6', '34', 'Malo ljudi je posedovalo takvu žar za životom kao legendarna meksička umetnica Frida Kahlo. Ona je dočekivala svaki dan sa ljubavlju i strašću. Inspirisala je ljude oko sebe da posmatraju život iz različitih uglova. Ta njena strast za životom bila je inspiracija i za bar restoran Cantina de Frida.\r\nTo je mesto gde se sastaju prijatelji da zajedno pevaju, plešu i dele trpezu,\r\nu slavu životu.', 5, 23),
(6, 'Mezestoran Dvorište', '0113246515', 'Svetogorska 46', 'restorandvoriste.rs', 'grčka', '$$', '4', '32', 'Skriven od gradske vreve, izložen svežim povetarcima sa Krita, Jadrana, Andaluzije i Bliskog Istoka donosi u Beograd jednostavnu, kreativnu kuhinju koja poštuje pravila mediteranske ishrane, filozofije i načina života.', 3, 12),
(7, 'Moonsushi', '0113344569', ' Makedonska 31', 'moon-sushi.com', 'azijska', '$', '4.5', '35', 'Mesto sa najdužom tradicijom pripremanja japanskih specijaliteta, prvenstveno suši ukusa. Upravo na ovom mestu mnogi stanovnici Beograda i njihovi gosti su sarmu zamenili zdravim i veoma atraktivnim zalogajima. Neverovatan talenat kuvara i edukacija najvišeg nivoa svih zaposlenih će vas uvesti u svet sasvim posebne ishrane. Ne morate da pakujete kofere i planirate put u daleki Japan, on se doselio u strogi centar grada.', 2, 9),
(8, 'Wok', '0113282828', 'Francuska 5', 'wok-republic.com', 'azijska', '$$', '3.3333333333333', '37', 'Wok Republic je lanac restorna brze azijske hrane specijalizovan za wok, jela sa nudlama i pirinčem koja se spremaju u otvorenoj kuhinji.', 3, 10),
(9, 'Zapata', ' 0113809207', 'Vojvode Bogdana 13', 'zapatabeograd.com', 'meksička', '$', '4.5', '39', 'Restoran \"Zapata\" je osnovan u septembru 2005 godine i za jako kratko vreme stekao je brojne poštovaoce i verne goste. Lociran u blizini Bulevara Kralja Aleksandra i Vukovog spomenika, on je gastronomsko i hedonističko mesto u sirem centru metropole.', 2, 9),
(10, 'La Taqueria', '062220786', 'Gračanička 7', 'www.facebook.com/lataqueriabg/', 'meksička', '$$', '4', '41', 'Autentična meksička hrana i pravi meksički takosi konačno su stigli u Beograd. U strogom centru grada nalazi se La Taqueria i u njoj se prave takosi, kesadilje ...\r\n', 2, 8),
(11, 'Terminal GastroBar', '0114079502', 'Bore Stankovića 17', 'terminalgastrobar.rs', 'italijanska', '$$$', '5', '44', 'Terminal Gastro Bar je casual dining restoran internacionalne kuhinje, smešten u jednom od najlepših delova Beograda, na Vračaru, pored Hrama Svetog Save. Terminal Gastro Bar postoji od 2015. godine. Rangira se kao jedan od vodećih beogradskih restorana.', 3, 15),
(12, 'Marukoshi Restaurant', '0694794715', 'Kapetan-Mišina 37', 'marukoshi.rs', 'azijska', '$', '1.5', '46', 'Naš concept je jednostavan, kao i naš meni.\r\nJapan ima veličanstvena jela koja se ne zovu suši.\r\nŽelimo da Vam predstavimo odličnu internacionalnu\r\nkuhinju koja je dostupna svim Beograđanima.\r\nDostupno znači pristupačno,a poznate začine koristimo\r\nna potpuno drugačiji način, u prijatnom ambijentu.', 2, 3),
(1, 'Franš', '011 2641944', 'Bulevar oslobođenja 18a', 'frans.rs', 'srpska', '$$$$$', '4.6666666666667', '49', 'Franš je smešten na idealnoj lokaciji u Beogradu, na Autokmandi u ulici Bulevar Oslobođenja 18a. Do njega možete veoma lako stići iz bilo kog dela grada da dolazite, a ono što posebno očarava jeste predeo u kom je smešten. Naime, okruženje Franša je prepuno zelenila i predstavlja pravu oazu mira od gradske vreve, buke i betona.\r\n\r\nKuhinja restorana Franš se zasniva na svežim namirnicama vrhunskog kvaliteta, koje se biraju sa posebnom pažnjom. Sva jela se u ovom restoranu pripremaju u trenutku porudžbine, a zabranjena je bilo kakva upotreba konzervansa, prerađivanih namirnica, hemikalija ili aditiva. Namirnice koje se termički ne obrađuju, svakog dana se analiziraju u sopstvenoj laboratoriji ovog prestižnog restorana.\r\n\r\nFranš je restoran koji je otvoren svakoga dana u periodu od 10:00h do 00:00h. U ovom eminentnom restoranu možete uživati svakoga dana, a ugođaj koji će vam pružiti omogućiće da se osećate kao u najelitnijim svetskim restoranima.', 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

DROP TABLE IF EXISTS `slika`;
CREATE TABLE IF NOT EXISTS `slika` (
  `idSl` int(18) NOT NULL AUTO_INCREMENT,
  `Opis` text,
  `idRec` int(11) DEFAULT NULL,
  `idR` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSl`),
  KEY `R_11` (`idRec`),
  KEY `idR` (`idR`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`idSl`, `Opis`, `idRec`, `idR`) VALUES
(1, 'frida2.jpg', NULL, 5),
(2, 'frida1.jpg', NULL, 5),
(3, 'featured1.jpg', 4, 5),
(4, 'featured1.jpg', 12, 5),
(5, 'featured3.jpg', 12, 5),
(6, 'featured4.jpg', 12, 5),
(7, 'featured2.jpg', 13, 5),
(8, 'featured3.jpg', 14, 5),
(9, 'featured4.jpg', 14, 5),
(10, 'featured1.jpg', 15, 3),
(17, 'photo0jpg.jpg', 32, 10),
(12, '', 17, 8),
(13, '', 18, 8),
(14, 'cropped-most-na-adi-Beograd-rs.jpg', 27, 3),
(16, 'mezestoran_recenzija_1.jpg', 29, 6),
(18, 'zapatarec1.jpg', 33, 9),
(19, 'sushi-belgrade-sushi.jpg', 35, 7),
(20, 'lorencorec1.jpg', 39, 4),
(21, 'terminalrec1.jpg', 40, 11),
(22, 'fransrec1.jpg', 47, 1),
(23, 'smokvica1.jpg', NULL, 2),
(24, 'smokvica2.jpg', NULL, 2),
(25, 'smokvica3.jpg', NULL, 2),
(26, 'chezNik3.jpg', NULL, 3),
(27, 'chezNik1.jpg', NULL, 3),
(28, 'chezNik4.jpg', NULL, 3),
(29, 'lorenzo1.jpg', NULL, 4),
(30, 'lorenzo2.jpg', NULL, 4),
(31, 'lorenzo3.jpg', NULL, 4),
(32, 'meze2.jpg', NULL, 6),
(33, 'meze1.jpg', NULL, 6),
(34, 'frida3.jpg', NULL, 5),
(35, 'moon1.jpg', NULL, 7),
(36, 'moon2.png', NULL, 7),
(37, 'wok1.jpg', NULL, 8),
(38, 'wok2.jpg', NULL, 8),
(39, 'zapata1.jpg', NULL, 9),
(40, 'zapata2.jpg', NULL, 9),
(41, 'taq1.jpg', NULL, 10),
(42, 'taq2.jpg', NULL, 10),
(43, 'terminal3.jpg', NULL, 11),
(44, 'terminal1.jpg', NULL, 11),
(45, 'terminal2.jpg', NULL, 11),
(46, 'mar1.jpg', NULL, 12),
(47, 'mar2.jpg', NULL, 12),
(48, 'mar3.jpg', NULL, 12),
(49, 'frans1.jpg', NULL, 1),
(50, 'frans2.jpg', NULL, 1),
(51, 'frans3.jpg', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
