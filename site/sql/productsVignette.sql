-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Juin 2015 à 20:45
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
-- Structure de la table `productsVignette`
--

CREATE TABLE IF NOT EXISTS `productsVignette` (
`idVignette` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `productsVignette`
--

INSERT INTO `productsVignette` (`idVignette`, `idProduit`, `url`) VALUES
(1, 1, 'bootsshop/assets/products/large/f3.jpg'),
(2, 1, 'bootsshop/assets/products/large/f1.jpg'),
(3, 1, 'bootsshop/assets/products/large/f2.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `productsVignette`
--
ALTER TABLE `productsVignette`
 ADD PRIMARY KEY (`idVignette`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `productsVignette`
--
ALTER TABLE `productsVignette`
MODIFY `idVignette` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
