-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Juin 2015 à 20:44
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserCity`, `UserZip`, `UserEmailVerified`, `UserRegistrationDate`, `UserIP`, `UserPhone`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES
(16, 'ergege@gethgze.fr', 'gerge', 'thaz', 'gerge', 'gerg', 'gegerg', 0, '0000-00-00 00:00:00', '', 'gerge', '1', 'egerg', 'grege'),
(15, 'fzefz@gtogt.gt', 'zzerzr', 'rte', 'rzrzer', 'zrrzr', '5659', 0, '0000-00-00 00:00:00', '', 'rzzerzrz', '1', 'rzerz', 'rzrzr'),
(17, 'rth@hto.gerom', 'ge', 'trs', 'ge', 'ger', 'ger', 0, '0000-00-00 00:00:00', '::1', 'geg', 'FR', 'ger', 'ge'),
(18, 'rth@hto.gerom', 'ge', 'trs', 'ge', 'ger', 'ger', 0, '0000-00-00 00:00:00', '::1', 'geg', 'FR', 'ger', 'ge'),
(19, 'lol@lol.lol', 'lol', 'mat', 'mat', 'Rouffach', '68250', 0, '0000-00-00 00:00:00', '::1', '0102030405', 'FR', 'adresse principale', 'adresse complementaire'),
(20, 'hrt@gerge.lol', 'fzefz', 'rth', 'fezfez', 'fzefz', 'fzefz', 0, '0000-00-00 00:00:00', '::1', 'fzefzfe', 'FR', 'fsdfsdf', 'zfefz'),
(21, 'hrethre@ferger.gerge', 'gerger', 'rthrth', 'greg', 'egerge', 'gerge', 0, '0000-00-00 00:00:00', '::1', 'gergzagdf', 'FR', 'gerger', 'ggerg'),
(22, 'hrethre@ferger.gerge', 'gerger', 'rthrth', 'greg', 'egerge', 'gerge', 0, '0000-00-00 00:00:00', '::1', 'gergzagdf', 'FR', 'gerger', 'ggerg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
