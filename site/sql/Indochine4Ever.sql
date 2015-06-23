-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 24 Juin 2015 à 00:34
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bootshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `optiongroups`
--

CREATE TABLE IF NOT EXISTS `optiongroups` (
`OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'color'),
(2, 'size');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
`OptionID` int(11) NOT NULL,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `options`
--

INSERT INTO `options` (`OptionID`, `OptionGroupID`, `OptionName`) VALUES
(1, 1, 'red'),
(2, 1, 'blue'),
(3, 1, 'green'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 2, 'XXL');

-- --------------------------------------------------------

--
-- Structure de la table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
`DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`OrderID` int(11) NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
`CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `CategoryIDParent` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`, `CategoryIDParent`) VALUES
(1, 'Musique', NULL),
(2, 'CD', 1),
(3, 'Vinyles', 1),
(4, 'Vid&eacute;os', NULL),
(5, 'DVD & Bluray', 4),
(6, 'V&ecirc;tements', NULL),
(7, 'V&ecirc;tements Femmes', 6),
(8, 'Chaussures Femmes', 6),
(9, 'V&ecirc;tements Hommes', 6),
(10, 'Chaussures Hommes', 6),
(11, 'V&ecirc;tements Enfants', 6),
(12, 'Chaussures Enfants', 6),
(13, 'Goodies', NULL),
(14, 'Accessoires', 13),
(15, 'Collectors', 13);

-- --------------------------------------------------------

--
-- Structure de la table `productoptions`
--

CREATE TABLE IF NOT EXISTS `productoptions` (
`ProductOptionID` int(10) unsigned NOT NULL,
  `ProductID` int(10) unsigned NOT NULL,
  `OptionID` int(10) unsigned NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 2),
(5, 1, 5, 0, 2),
(6, 1, 6, 0, 2),
(7, 1, 7, 2, 2),
(8, 1, 8, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`ProductID` int(12) NOT NULL,
  `ProductSKU` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `ProductShortDesc` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `ProductLongDesc` text COLLATE latin1_general_ci NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ProductImage` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=993 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`ProductID`, `ProductSKU`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`) VALUES
(1, '000-0001', 'Single - J''ai demand&eacute; &agrave; la lune', 15.99, 3, '10g', 'CD Double Single J''ai demand&eacute; &agrave; la lune', 'CD Double Single J''ai demand&eacute; &agrave; la lune', 'bootsshop/assets/img/goodies/CD/demandeALaLune.png', 'bootsshop/assets/img/goodies/CD/demandeALaLune.png', 2, '2013-06-12 23:00:50', 100, 1, 1, NULL),
(2, '000-0002', 'Album - Peril Jaune', 30, 8, 'Album - Peril Jaune', 'Album - Peril Jaune', 'Double Album - Peril Jaune', 'bootsshop/assets/img/goodies/CD/perilJaune.png', 'bootsshop/assets/img/goodies/CD/perilJaune.png', 2, '2013-07-25 17:04:36', NULL, 15, 1, NULL),
(3, '000-0003', 'Single - l''aventurier', 15.8, 8, 'L''aventurier CD Single', 'CD L''aventurier', 'L''aventurier Double CD', 'bootsshop/assets/img/goodies/CD/laventurierRM.png', 'bootsshop/assets/img/goodies/CD/laventurierRM.png', 2, '2015-04-21 15:55:41', 20, 0, 1, 'test'),
(4, '000-0004', 'Punishment-Park 33T', 40.25, 8, 'Punishment-Park 33T', 'Punishment-Park - Vinyles 33T', 'Punishment-Park - Vinyles 33T', 'bootsshop/assets/img/goodies/CD/33TIndochine.png', 'bootsshop/assets/img/goodies/CD/33TIndochine.png', 3, '2013-07-25 17:04:36', 5, 0, 0, NULL),
(5, '000-0005', 'Album CD - College Boy', 17.99, 8, 'CD - College Boy', 'CD - College Boy', 'Triple CD - College Boy', 'bootsshop/assets/img/goodies/CD/collegeboy.png', 'bootsshop/assets/img/goodies/CD/collegeboy.png', 2, '2013-07-25 17:04:36', NULL, 0, 1, NULL),
(6, '000-0006', 'Indochine Parade Tour', 30.98, 8, 'Indochine Parade Tour', 'DVD - Indochine Parade Tour', 'DVD - Indochine Parade Tour', 'bootsshop/assets/img/goodies/DVD/Indochine_parade.jpg', 'bootsshop/assets/img/goodies/DVD/Indochine_parade.jpg', 5, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(7, '000-0007', 'Indochine Putain de stade ', 45.99, 8, 'Indochine Putain de stade', 'Indochine Putain de stade', 'DVD - Indochine Putain de stade', 'bootsshop/assets/img/goodies/DVD/Indochine_Putain_de_stade.jpg', 'bootsshop/assets/img/goodies/DVD/Indochine_Putain_de_stade.jpg', 5, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(8, '000-0008', 'Indochine Tour 88', 32.99, 8, 'Indochine Tour 88', 'Indochine Tour 88', 'DVD - Indochine Tour 88', 'bootsshop/assets/img/goodies/DVD/Indochine_tour_88.jpeg', 'bootsshop/assets/img/goodies/DVD/Indochine_tour_88.jpeg', 5, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(9, '000-0009', 'Indochine Tour 2015', 28.99, 8, 'Indochine Tour', 'Indochine Tour 2015', 'Bluray - Indochine Tour', 'bootsshop/assets/img/goodies/DVD/jaquetteIndochineTour.png', 'bootsshop/assets/img/goodies/DVD/jaquetteIndochineTour.png', 5, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(10, '000-0010', 'T-Shirt Indochine Gorillaz', 27.99, 8, 'T-Shirt Indochine Gorillaz', 'T-Shirt Indochine Gorillaz pour Femme', 'T-Shirt Indochine Gorillaz pour Femme', 'bootsshop/assets/img/goodies/Clothes/tShirtChelou.png', 'bootsshop/assets/img/goodies/Clothes/tShirtChelou.png', 7, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(11, '000-0011', 'T-Shirt Amoureux', 25.99, 8, 'T-Shirt Amoureux', 'T-Shirt Amoureux pour Femme', 'T-Shirt Amoureux pour Femme', 'bootsshop/assets/img/goodies/Clothes/tShirtChelou2.png', 'bootsshop/assets/img/goodies/Clothes/tShirtChelou2.png', 7, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(12, '000-0012', 'T-Shirt 3eme Sexe', 15.29, 8, 'T-Shirt 3eme Sexe', 'T-Shirt 3eme Sexe', 'T-Shirt 3eme Sexe', 'bootsshop/assets/img/goodies/Clothes/tShirt3emeSexe.png', 'bootsshop/assets/img/goodies/Clothes/tShirt3emeSexe.png', 9, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(13, '000-0013', 'T-Shirt Nicola Sirkis', 30.99, 8, 'T-Shirt Nicola Sirkis', 'T-Shirt Nicola Sirkis Homme et Femme', 'T-Shirt Nicola Sirkis Homme et Femme', 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png', 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png', 7, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(14, '000-0014', 'T-Shirt Nicola Sirkis', 30.99, 8, 'T-Shirt Nicola Sirkis', 'T-Shirt Nicola Sirkis Homme et Femme', 'T-Shirt Nicola Sirkis Homme et Femme', 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png', 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png', 9, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(15, '000-0015', 'Collier Idochine', 10.45, 8, 'Collier Idochine', 'Collier Idochine', 'Collier Idochine', 'bootsshop/assets/img/goodies/Accessoires/collier.png', 'bootsshop/assets/img/goodies/Accessoires/collier.png', 14, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(16, '000-0016', 'Chaussures Etoiles Indochine', 23.99, 8, 'Chaussures Etoiles Indochine', 'Chaussures Etoiles Indochine', 'Chaussures Etoiles Indochine pour Femme', 'bootsshop/assets/img/goodies/Clothes/star_indochine_shoes.png', 'bootsshop/assets/img/goodies/Clothes/star_indochine_shoes.png', 8, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(17, '000-0017', 'Chaussures Sport Indochine', 24.99, 8, 'Chaussures Sport Indochine', 'Chaussures Sport Indochine', 'Chaussures Etoiles Indochine pour Homme', 'bootsshop/assets/img/goodies/Clothes/men_indochine_shoes.png', 'bootsshop/assets/img/goodies/Clothes/men_indochine_shoes.png', 10, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(18, '000-0018', 'Chaussures Enfant Indochine', 24.99, 8, 'Chaussures Enfant Indochine', 'Chaussures Enfant Indochine', 'Chaussures Enfant Indochine pour Enfant', 'bootsshop/assets/img/goodies/Clothes/child_indochine_shoes.png', 'bootsshop/assets/img/goodies/Clothes/child_indochine_shoes.png', 12, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(19, '000-0019', 'Album CD - 3&egrave;me sexe', 34.99, 8, 'Album CD - 3&egrave;me sexe', 'Triple Album CD - 3&egrave;me sexe', 'Triple Album CD - 3&egrave;me sexe', 'bootsshop/assets/img/goodies/CD/troisiemeSexe.png', 'bootsshop/assets/img/goodies/CD/troisiemeSexe.png', 2, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(20, '000-0020', 'Coque Iphone Indochine', 15.39, 8, 'Coque Iphone Indochine', 'Coque Iphone Indochine', 'Coque Iphone Indochine', 'bootsshop/assets/img/goodies/Accessoires/coqueIphoneIndochine.png', 'bootsshop/assets/img/goodies/Accessoires/coqueIphoneIndochine.png', 14, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(21, '000-0021', 'Album Indochine Collector 1992', 60.99, 8, 'Album Indochine Collector 1992', 'Album Indochine Collector 1992', 'Album Best Of Indochine Collector 1992', 'bootsshop/assets/img/goodies/Collectors/album_collector_1992.png', 'bootsshop/assets/img/goodies/Collectors/album_collector_1992.png', 15, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(22, '000-0022', 'Compilation tourn&eacutee 2015', 90.99, 8, 'Compilation tourn&eacutee 2015', 'Compilation tourn&eacutee 2015', 'Compilation tourn&eacutee 2015 comprenant CDs et Livre', 'bootsshop/assets/img/goodies/Collectors/compilation_tournee_2015.png', 'bootsshop/assets/img/goodies/Collectors/compilation_tournee_2015.png', 15, '2013-07-25 17:04:36', NULL, 0, 0, NULL),
(23, '000-0023', 'Rolling Stone Magazine Indochine Edition', 38.99, 8, 'Rolling Stone Magazine Indochine Edition', 'Rolling Stone Magazine Indochine Edition', 'Rolling Stone Magazine Indochine Edition', 'bootsshop/assets/img/goodies/Collectors/rolling_stone_magazine_indochine.png', 'bootsshop/assets/img/goodies/Collectors/rolling_stone_magazine_indochine.png', 15, '2013-07-25 17:04:36', NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `productsVignette`
--

CREATE TABLE IF NOT EXISTS `productsVignette` (
`idVignette` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `productsVignette`
--

INSERT INTO `productsVignette` (`idVignette`, `idProduit`, `url`) VALUES
(73, 1, 'bootsshop/assets/img/goodies/CD/demandeALaLune.png'),
(74, 1, 'bootsshop/assets/img/goodies/CD/demandeALaLune.png'),
(75, 1, 'bootsshop/assets/img/goodies/CD/demandeALaLune.png'),
(76, 2, 'bootsshop/assets/img/goodies/CD/perilJaune.png'),
(77, 2, 'bootsshop/assets/img/goodies/CD/perilJaune.png'),
(78, 2, 'bootsshop/assets/img/goodies/CD/perilJaune.png'),
(79, 3, 'bootsshop/assets/img/goodies/CD/laventurierRM.png'),
(80, 3, 'bootsshop/assets/img/goodies/CD/laventurierRM.png'),
(81, 3, 'bootsshop/assets/img/goodies/CD/laventurierRM.png'),
(82, 4, 'bootsshop/assets/img/goodies/CD/33TIndochine.png'),
(83, 4, 'bootsshop/assets/img/goodies/CD/33TIndochine.png'),
(84, 4, 'bootsshop/assets/img/goodies/CD/33TIndochine.png'),
(85, 5, 'bootsshop/assets/img/goodies/CD/collegeboy.png'),
(86, 5, 'bootsshop/assets/img/goodies/CD/collegeboy.png'),
(87, 5, 'bootsshop/assets/img/goodies/CD/collegeboy.png'),
(88, 6, 'bootsshop/assets/img/goodies/DVD/Indochine_parade.jpg'),
(89, 6, 'bootsshop/assets/img/goodies/DVD/Indochine_parade.jpg'),
(90, 6, 'bootsshop/assets/img/goodies/DVD/Indochine_parade.jpg'),
(91, 7, 'bootsshop/assets/img/goodies/DVD/Indochine_Putain_de_stade.jpg'),
(92, 7, 'bootsshop/assets/img/goodies/DVD/Indochine_Putain_de_stade.jpg'),
(93, 7, 'bootsshop/assets/img/goodies/DVD/Indochine_Putain_de_stade.jpg'),
(94, 8, 'bootsshop/assets/img/goodies/DVD/Indochine_tour_88.jpeg'),
(95, 8, 'bootsshop/assets/img/goodies/DVD/Indochine_tour_88.jpeg'),
(96, 8, 'bootsshop/assets/img/goodies/DVD/Indochine_tour_88.jpeg'),
(97, 9, 'bootsshop/assets/img/goodies/DVD/jaquetteIndochineTour.png'),
(98, 9, 'bootsshop/assets/img/goodies/DVD/jaquetteIndochineTour.png'),
(99, 9, 'bootsshop/assets/img/goodies/DVD/jaquetteIndochineTour.png'),
(100, 10, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou.png'),
(101, 10, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou.png'),
(102, 10, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou.png'),
(103, 11, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou2.png'),
(104, 11, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou2.png'),
(105, 11, 'bootsshop/assets/img/goodies/Clothes/tShirtChelou2.png'),
(106, 12, 'bootsshop/assets/img/goodies/Clothes/tShirt3emeSexe.png'),
(107, 12, 'bootsshop/assets/img/goodies/Clothes/tShirt3emeSexe.png'),
(108, 12, 'bootsshop/assets/img/goodies/Clothes/tShirt3emeSexe.png'),
(109, 13, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(110, 13, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(111, 13, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(112, 14, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(113, 14, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(114, 14, 'bootsshop/assets/img/goodies/Clothes/tshirtHommeFemme.png'),
(115, 15, 'bootsshop/assets/img/goodies/Accessoires/collier.png'),
(116, 15, 'bootsshop/assets/img/goodies/Accessoires/collier.png'),
(117, 15, 'bootsshop/assets/img/goodies/Accessoires/collier.png'),
(118, 16, 'bootsshop/assets/img/goodies/Clothes/star_indochine_shoes.png'),
(119, 16, 'bootsshop/assets/img/goodies/Clothes/star_indochine_shoes.png'),
(120, 16, 'bootsshop/assets/img/goodies/Clothes/star_indochine_shoes.png'),
(121, 17, 'bootsshop/assets/img/goodies/Clothes/men_indochine_shoes.png'),
(122, 17, 'bootsshop/assets/img/goodies/Clothes/men_indochine_shoes.png'),
(123, 17, 'bootsshop/assets/img/goodies/Clothes/men_indochine_shoes.png'),
(124, 18, 'bootsshop/assets/img/goodies/Clothes/child_indochine_shoes.png'),
(125, 18, 'bootsshop/assets/img/goodies/Clothes/child_indochine_shoes.png'),
(126, 18, 'bootsshop/assets/img/goodies/Clothes/child_indochine_shoes.png'),
(127, 19, 'bootsshop/assets/img/goodies/CD/troisiemeSexe.png'),
(128, 19, 'bootsshop/assets/img/goodies/CD/troisiemeSexe.png'),
(129, 19, 'bootsshop/assets/img/goodies/CD/troisiemeSexe.png'),
(130, 20, 'bootsshop/assets/img/goodies/Accessoires/coqueIphoneIndochine.png'),
(131, 20, 'bootsshop/assets/img/goodies/Accessoires/coqueIphoneIndochine.png'),
(132, 20, 'bootsshop/assets/img/goodies/Accessoires/coqueIphoneIndochine.png'),
(133, 21, 'bootsshop/assets/img/goodies/Collectors/album_collector_1992.png'),
(134, 21, 'bootsshop/assets/img/goodies/Collectors/album_collector_1992.png'),
(135, 21, 'bootsshop/assets/img/goodies/Collectors/album_collector_1992.png'),
(136, 22, 'bootsshop/assets/img/goodies/Collectors/compilation_tournee_2015.png'),
(137, 22, 'bootsshop/assets/img/goodies/Collectors/compilation_tournee_2015.png'),
(138, 22, 'bootsshop/assets/img/goodies/Collectors/compilation_tournee_2015.png'),
(139, 23, 'bootsshop/assets/img/goodies/Collectors/rolling_stone_magazine_indochine.png'),
(140, 23, 'bootsshop/assets/img/goodies/Collectors/rolling_stone_magazine_indochine.png'),
(141, 23, 'bootsshop/assets/img/goodies/Collectors/rolling_stone_magazine_indochine.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_general_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserIP` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserCity`, `UserZip`, `UserEmailVerified`, `UserRegistrationDate`, `UserIP`, `UserPhone`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES
(28, 'test@indochine4ever.com', 'lol', 'test', 'test', 'Rouffach', '68250', 0, '0000-00-00 00:00:00', '::1', '0389395060', 'FR', 'test', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `optiongroups`
--
ALTER TABLE `optiongroups`
 ADD PRIMARY KEY (`OptionGroupID`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
 ADD PRIMARY KEY (`OptionID`);

--
-- Index pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
 ADD PRIMARY KEY (`DetailID`), ADD KEY `DetailProductID` (`DetailProductID`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`OrderID`);

--
-- Index pour la table `productcategories`
--
ALTER TABLE `productcategories`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Index pour la table `productoptions`
--
ALTER TABLE `productoptions`
 ADD PRIMARY KEY (`ProductOptionID`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ProductID`);

--
-- Index pour la table `productsVignette`
--
ALTER TABLE `productsVignette`
 ADD PRIMARY KEY (`idVignette`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `optiongroups`
--
ALTER TABLE `optiongroups`
MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `options`
--
ALTER TABLE `options`
MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `productcategories`
--
ALTER TABLE `productcategories`
MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `productoptions`
--
ALTER TABLE `productoptions`
MODIFY `ProductOptionID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=993;
--
-- AUTO_INCREMENT pour la table `productsVignette`
--
ALTER TABLE `productsVignette`
MODIFY `idVignette` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `orderdetails`
--
ALTER TABLE `orderdetails`
ADD CONSTRAINT `FK_ORDER_PRODUCT` FOREIGN KEY (`DetailProductID`) REFERENCES `products` (`ProductID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
