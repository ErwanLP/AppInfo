-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 26 Octobre 2012 à 14:35
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `appinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `nomDeCompte` text NOT NULL,
  `mdp` text NOT NULL,
  `mailCompte` text NOT NULL,
  `IdCompte` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IdCompte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`nomDeCompte`, `mdp`, `mailCompte`, `IdCompte`) VALUES
('Erwan Le P', '55356c6b01d462c5cd75a97b48959a91774dcb23', 'exemple2@gmail.com', 1),
('test', '268a21524ee9b6ecc1c6d48611794866df2bc86b', 'exemple3@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `numeroEvent` int(11) NOT NULL AUTO_INCREMENT,
  `typeEvent` text NOT NULL,
  `lieuEvent` text NOT NULL,
  `dateEvent` datetime NOT NULL,
  `nbpersonne` int(11) NOT NULL,
  `noteEvent` int(11) NOT NULL,
  `prixEvent` int(11) NOT NULL,
  PRIMARY KEY (`numeroEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `numeroProfilParticipant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `pseudo` text NOT NULL,
  `lieuNaissance` text NOT NULL,
  `LieuHabitation` text NOT NULL,
  `description` text NOT NULL,
  `sexe` tinyint(1) NOT NULL COMMENT 'Vrai-Homme',
  `tel` text NOT NULL,
  `dateNaissance` date NOT NULL,
  `mail` text NOT NULL,
  `mdp` text NOT NULL,
  `siteWeb` text NOT NULL,
  `avatar` text NOT NULL,
  `profession` text NOT NULL,
  `loisirs` text NOT NULL,
  `hobbies` text NOT NULL,
  `preferenceEvents` text NOT NULL,
  PRIMARY KEY (`numeroProfilParticipant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `participant`
--

INSERT INTO `participant` (`numeroProfilParticipant`, `nom`, `prenom`, `pseudo`, `lieuNaissance`, `LieuHabitation`, `description`, `sexe`, `tel`, `dateNaissance`, `mail`, `mdp`, `siteWeb`, `avatar`, `profession`, `loisirs`, `hobbies`, `preferenceEvents`) VALUES
(1, 'Le Poder', 'Erwan', 'Erwanlj', 'Paris', 'Paris', '', 1, '0671429701', '1992-12-19', 'erwan.le.poder@gmail.com', 'cxcii', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
