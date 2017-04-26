-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Mai 2016 à 11:34
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1-log
-- Version de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `reunion_island`
--
CREATE DATABASE IF NOT EXISTS `reunion_island` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reunion_island`;

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `difficulty` enum('très facile','facile','moyen','difficile','très difficile') NOT NULL,
  `distance` int(11) NOT NULL COMMENT 'in km',
  `duration` time NOT NULL,
  `height_difference` int(6) NOT NULL COMMENT 'in m',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `hiking`(`name`,`difficulty`,`distance`,`duration`,`height_difference`)
VALUES('Le sommet du Piton Béthoune par le tour du Bonnet de Prêtre','Très difficile',5.7,'04:00:00',650),
('L\'Îlet Sources et la Ravine Bananes depuis l\'Îlet à Cordes','Difficile',6.4,'5:00:00', 450),
('La Boucle et la Cascade du Bras Rouge depuis Cilaos','Moyen',14.5,'5:00:00',900),
('Une visite à l\'Îlet Tommy en aller-retour','Facile',3,'1:00:00',180),
('Deux boucles à la Mare à Poule d\'Eau près de Salazie','Très Facile',3.6,'1:00:00',120);
