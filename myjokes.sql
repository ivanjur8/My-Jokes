-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2021 at 07:40 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `myjokes`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(103, 'Anonymous', '2021-09-28 10:04:30', '													Kad si Crnogorac a zoveš se Radiša!'),
(104, 'Anonymous', '2021-09-28 10:04:30', '													Kad si Crnogorac a zoveš se Radiša!'),
(105, 'Anonymous', '2021-09-28 10:06:43', '													Kad ti čitav život sole pamet a ti umreš od šećera!'),
(106, 'Anonymous', '2021-09-28 10:06:43', '													Kad ti čitav život sole pamet a ti umreš od šećera!'),
(107, 'Anonymous', '2021-09-28 10:07:04', '													Kad si u zatvoru a zoveš se Slobodan!'),
(108, 'Anonymous', '2021-09-28 10:07:04', '													Kad si u zatvoru a zoveš se Slobodan!'),
(109, 'Anonymous', '2021-09-28 10:07:46', '													Kad si crnac a prezivaš se White.');

-- --------------------------------------------------------

--
-- Table structure for table `commentsparodija`
--

DROP TABLE IF EXISTS `commentsparodija`;
CREATE TABLE IF NOT EXISTS `commentsparodija` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `messageParodija` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentsparodija`
--

INSERT INTO `commentsparodija` (`cid`, `uid`, `date`, `messageParodija`) VALUES
(11, 'Anonymous', '2021-09-28 10:09:13', '														Chuck norris je jedini ubjedio svoju babu da nije gladan '),
(12, 'Anonymous', '2021-09-28 10:14:07', '														Umro Hercegovac i došao pred svetog Petra. Pita ga čuvar ključeva: - Želiš li u raj ili u pakao? - A Njemačka? Ima li toga ovdje?'),
(13, 'Anonymous', '2021-09-28 10:15:11', '														Zašto bosanac kad ujde u tenk nosi dvije glavice kupusa?\r\n- Da nahrani gusjenice.'),
(14, 'Anonymous', '2021-09-28 10:21:23', '														Pita tata:\r\n-Perice kako ti je u skoli? Volis li uciteljicu?\r\nPerica odgovara:\r\n-Dobro je, lepo mi je u skoli volim uciteljicu ali mislim da ne zna bas mnogo.\r\nTata:\r\n-Kako to mislis ne zna bas mnogo?\r\nPerica:\r\n-PA SVAKI CAS NESTO PITA! haahha'),
(15, 'Anonymous', '2021-09-28 10:21:23', '														Pita tata:\r\n-Perice kako ti je u skoli? Volis li uciteljicu?\r\nPerica odgovara:\r\n-Dobro je, lepo mi je u skoli volim uciteljicu ali mislim da ne zna bas mnogo.\r\nTata:\r\n-Kako to mislis ne zna bas mnogo?\r\nPerica:\r\n-PA SVAKI CAS NESTO PITA! haahha'),
(16, 'Anonymous', '2021-09-28 10:21:23', '														Pita tata:\r\n-Perice kako ti je u skoli? Volis li uciteljicu?\r\nPerica odgovara:\r\n-Dobro je, lepo mi je u skoli volim uciteljicu ali mislim da ne zna bas mnogo.\r\nTata:\r\n-Kako to mislis ne zna bas mnogo?\r\nPerica:\r\n-PA SVAKI CAS NESTO PITA! haahha'),
(17, 'Anonymous', '2021-09-28 10:22:27', '														Kako prepoznati mladoženju u hercegovačkim svatovima?\r\nMladoženja je onaj u najboljoj trenerci!');

-- --------------------------------------------------------

--
-- Table structure for table `commentssarkazam`
--

DROP TABLE IF EXISTS `commentssarkazam`;
CREATE TABLE IF NOT EXISTS `commentssarkazam` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `messageSarkazam` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentssarkazam`
--

INSERT INTO `commentssarkazam` (`cid`, `uid`, `date`, `messageSarkazam`) VALUES
(7, 'Anonymous', '2021-09-28 10:10:46', '									U mojoj kući noću kada hoćeš da skokneš do frižidera,\r\nmoraš stajati u redu.					'),
(8, 'Anonymous', '2021-09-28 10:11:40', '										Nakon četrdesete godine ne morate više podešavati alarm,\r\nproblemi će vas buditi.				'),
(9, 'Anonymous', '2021-09-28 10:12:04', '									Možda sam pala u tvojim očima ali ti u mojim nisi ni ustao.					'),
(10, 'Anonymous', '2021-09-28 10:12:21', '										Život je kratak jer uvek moramo živeti između sutra i juče.				'),
(11, 'Anonymous', '2021-09-28 10:13:31', '												Pravila su ista za sve samo su tarife različite.		'),
(12, 'Anonymous', '2021-09-28 10:13:31', '												Pravila su ista za sve samo su tarife različite.		');

-- --------------------------------------------------------

--
-- Table structure for table `commentssatira`
--

DROP TABLE IF EXISTS `commentssatira`;
CREATE TABLE IF NOT EXISTS `commentssatira` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `messageSatira` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentssatira`
--

INSERT INTO `commentssatira` (`cid`, `uid`, `date`, `messageSatira`) VALUES
(10, 'Anonymous', '2021-09-28 10:24:44', '												\"Sarah Palin je rekla da je možda neodgovorna stvar koju sam ikada čuo od jednog političara. Rekla je:\" Jedina stvar koja sprečava lošeg momka sa nuklearkom je dobar momak sa nuklearkom. \" Mislite da shvaćaa da nuklearna Rusija možda neće biti dobra za nekoga tko može vidjeti Rusiju iz svoje kuće?			'),
(11, 'Anonymous', '2021-09-28 10:24:44', '												\"Sarah Palin je rekla da je možda neodgovorna stvar koju sam ikada čuo od jednog političara. Rekla je:\" Jedina stvar koja sprečava lošeg momka sa nuklearkom je dobar momak sa nuklearkom. \" Mislite da shvaćaa da nuklearna Rusija možda neće biti dobra za nekoga tko može vidjeti Rusiju iz svoje kuće?			'),
(12, 'Anonymous', '2021-09-28 10:24:59', '												Imao sam grozan san sanjam otvorili se kafići i puštaju po abecedi a ja se zovem Zinedin Zidan			'),
(13, 'Anonymous', '2021-09-28 10:24:59', '												Imao sam grozan san sanjam otvorili se kafići i puštaju po abecedi a ja se zovem Zinedin Zidan			'),
(14, 'Anonymous', '2021-09-28 10:33:14', '															Vrhunski genetičar na Stanfordu kaže da ljudska inteligencija opada. Znate li šta to znači? Vidimo Kongres u svom najomiljenijem i najefektivnom sada.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `UserType` int(11) DEFAULT 0,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `UserType`) VALUES
(1, 'ivan', 'ivan@gmail.com', '$2y$10$qbku/BrK8Z6hL/h6EHMbqekCbH7DxDZMOqgX6LqPqXWsos0C0a82O', 1),
(2, 'ilko', 'ilko@gmail.com', '$2y$10$4Xy6HAPj5KLaMFnXvq/eAe3/YAUsLfofrFFyHzaBUi7TcBBFfI8Fm', 0),
(20, 'Dalibor SA', 'dalibormo@gmail.com', '$2y$10$2CYFL9iL.sY1Su5YXQTlCOkB3cVP5WyKuPRmVq/VHei9FK4ln9yjO', 1),
(21, 'Dalibor2', 'd.anicic@studio-exit.com', '$2y$10$6rHOWAVDtgRwIgWYOgr.V.Cc7sBTNycsk8RTBx2JKihaUHSrB1eji', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
