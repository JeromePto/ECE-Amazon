-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 03 mai 2019 à 15:40
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd`
--
DROP DATABASE IF EXISTS `bd`;
CREATE DATABASE IF NOT EXISTS `bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd`;

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `MDP` text NOT NULL,
  `ADRESSE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MAIL` (`MAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`ID`, `NOM`, `PRENOM`, `MAIL`, `MDP`, `ADRESSE`) VALUES
(1, 'an1', 'ap1', 'am1@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'aa1'),
(3, 'an2', 'ap2', 'am2@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'aa2'),
(4, 'an3', 'ap3', 'am3@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'aa3'),
(5, 'an4', 'ap4', 'am4@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'aa4'),
(6, 'an5', 'ap5', 'am5@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'aa5');

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

DROP TABLE IF EXISTS `banque`;
CREATE TABLE IF NOT EXISTS `banque` (
  `CARTE` enum('Visa','MasterCard','American Express','') NOT NULL,
  `NUMERO` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `CODE` int(11) NOT NULL,
  PRIMARY KEY (`NUMERO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `banque`
--

INSERT INTO `banque` (`CARTE`, `NUMERO`, `NOM`, `DATE`, `CODE`) VALUES
('Visa', '1111', 'nom1', '01/21', 111),
('MasterCard', '2222', 'nom2', '01/21', 222),
('American Express', '3333', 'nom3', '01/21', 333);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `VENDEUR` int(11) NOT NULL,
  `STOCK` int(11) UNSIGNED NOT NULL,
  `CATEGORIE` int(11) UNSIGNED NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PRIX` float UNSIGNED NOT NULL,
  `PHOTO` text NOT NULL,
  `VARIATION` json DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_vendeur_id` (`VENDEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`ID`, `NOM`, `VENDEUR`, `STOCK`, `CATEGORIE`, `DESCRIPTION`, `PRIX`, `PHOTO`, `VARIATION`) VALUES
(1, 'item1', 1, 20, 0, 'item1desc', 19.6, 'defautItem', NULL),
(2, 'item2', 2, 20, 1, 'item2desc', 14.32, 'defautItem', NULL),
(3, 'item3', 3, 1000, 3, 'item3desc', 12.5, 'defautItem', NULL),
(4, 'item4', 4, 45, 0, 'item4desc', 3.25, 'defautItem', NULL),
(5, 'item5', 5, 30, 2, 'item5desc', 5, 'defautItem', NULL),
(6, 'item6', 1, 12, 2, 'item6desc', 20, 'defautItem', NULL),
(7, 'item7', 1, 450, 1, 'item7desc', 16.95, 'defautItem', NULL),
(8, 'item8', 2, 13, 3, 'item8desc', 81.99, 'defautItem', NULL),
(9, 'item9', 4, 264, 0, 'item9desc', 99.95, 'defautItem', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ACHETEUR` int(11) NOT NULL,
  `ITEM` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  PRIMARY KEY (`ACHETEUR`,`ITEM`),
  KEY `fk_item_id` (`ITEM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `MDP` text NOT NULL,
  `ADRESSE` varchar(255) NOT NULL,
  `PHOTO` varchar(255) NOT NULL DEFAULT '"\\images\\defautProfil.png"',
  `IMGFOND` varchar(255) NOT NULL DEFAULT '"\\images\\defautBack.png"',
  `ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MAIL` (`MAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`ID`, `NOM`, `PRENOM`, `MAIL`, `MDP`, `ADRESSE`, `PHOTO`, `IMGFOND`, `ADMIN`) VALUES
(1, 'vn1', 'vp1', 'vm1@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'va1', 'defautProfil.png', 'defautBack.png', 0),
(2, 'vn2', 'vp2', 'vm2@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'va2', 'defautProfil.png', 'defautBack.png', 0),
(3, 'vn3', 'vp3', 'vm3@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'va3', 'defautProfil.png', 'defautBack.png', 0),
(4, 'vn4', 'vp4', 'vm4@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'va4', 'defautProfil.png', 'defautBack.png', 0),
(5, 'vn5', 'vp5', 'vm5@a.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'va5', 'defautProfil.png', 'defautBack.png', 0),
(6, 'adminNom', 'adminPrenom', 'admin1@admin.fr', '$2y$10$qwE3loY36gVWmN5Olk1.f..nl9S2HM8/.hK9djueTw80yYmrM9Si2', 'adminAdresse', 'defautProfil.png', 'defautBack.png', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_vendeur_id` FOREIGN KEY (`VENDEUR`) REFERENCES `vendeur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_acheteur_id` FOREIGN KEY (`ACHETEUR`) REFERENCES `acheteur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`ITEM`) REFERENCES `item` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
