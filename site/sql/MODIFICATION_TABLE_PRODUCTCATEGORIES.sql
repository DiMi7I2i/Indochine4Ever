-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Juin 2015 à 11:08
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
-- Structure de la table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
`CategoryID` int(11) NOT NULL,
  `CategoryIDParent` int(11) DEFAULT NULL,
  `CategoryName` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryIDParent`, `CategoryName`) VALUES
(1, NULL, 'Musique'),
(2, 1, 'CD'),
(3, 1, 'Vinyles'),
(4, NULL, 'Vid&eacute;os'),
(5, 4, 'DVD & Bluray'),
(6, NULL, 'V&ecirc;tements'),
(7, 6, 'V&ecirc;tements Femmes'),
(8, 6, 'Chaussures Femmes'),
(9, 6, 'V&ecirc;tements Hommes'),
(10, 6, 'Chaussures Hommes'),
(11, 6, 'V&ecirc;tements Enfants'),
(12, 6, 'Chaussures Enfants'),
(13, NULL, 'Goodies'),
(14, 13, 'Accessoires'),
(15, 13, 'Collectors');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `productcategories`
--
ALTER TABLE `productcategories`
 ADD PRIMARY KEY (`CategoryID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `productcategories`
--
ALTER TABLE `productcategories`
MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
