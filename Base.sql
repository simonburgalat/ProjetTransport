-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: sql-users.ece.fr:3305
-- Généré le : Jeu 21 Novembre 2013 à 18:20
-- Version du serveur: 5.0.13
-- Version de PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `burgalat`
--

-- --------------------------------------------------------

--
-- Structure de la table `Arret`
--

CREATE TABLE IF NOT EXISTS `Arret` (
  `id` tinyint(4) NOT NULL auto_increment,
  `Latitude` float default NULL,
  `Longitude` float default NULL,
  `Nom` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `Arret`
--

INSERT INTO `Arret` (`id`, `Latitude`, `Longitude`, `Nom`) VALUES
(1, 48.855, 2.28927, 'Champs de mars'),
(2, 48.8625, 2.30111, 'Pont de l''alma'),
(3, 48.863, 2.313, 'Invalides'),
(4, 48.8612, 2.32566, 'Musee d''Orsay'),
(5, 48.8534, 2.34575, 'Saint Michel'),
(6, 48.843, 2.36579, 'Austerlitz'),
(7, 48.8298, 2.3772, 'Bibliotheque Francois Mitterand'),
(8, 48.8143, 2.39132, 'Ivry Sur Seine'),
(9, 48.8007, 2.40244, 'Vitry Sur Seine'),
(10, 48.7874, 2.36768, 'Villejuif Aragon'),
(11, 48.8017, 2.42677, 'Alfortville');

-- --------------------------------------------------------

--
-- Structure de la table `Chemin`
--

CREATE TABLE IF NOT EXISTS `Chemin` (
  `id` tinyint(4) NOT NULL auto_increment,
  `Nom` mediumtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `Chemin`
--

INSERT INTO `Chemin` (`id`, `Nom`) VALUES
(1, 'Champ de Mars-Pont de l''Alma-Invalides-Musee d''Orsay-Saint michel-Austerlitz-Bibliotheque Francois Mitterand-Ivry-Sur-Seine-Vitry-Sur-Seine'),
(3, 'Villejuif Aragon-Vitry-Sur-Seine-Alfortville'),
(2, 'Vitry-Sur-Seine-Ivry-Sur-Seine-Bibliotheque Francois Mitterand-Asuterlitz-Saint michel-Musee d''Orsay-Invalides-Pont de l''Alma-Champ de mars'),
(4, 'Alfortville-Villejuif Aragon-Vitry-Sur-Seine');

-- --------------------------------------------------------

--
-- Structure de la table `Course`
--

CREATE TABLE IF NOT EXISTS `Course` (
  `id` tinyint(4) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Heure_debut` time NOT NULL,
  `Heure_fin` time NOT NULL,
  `Cheminref_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Course`
--

INSERT INTO `Course` (`id`, `Nom`, `Heure_debut`, `Heure_fin`, `Cheminref_id`) VALUES
(1, 'Nora', '08:10:00', '08:35:00', 2),
(2, 'Nora', '08:25:00', '08:50:00', 2),
(3, 'Mona', '08:15:00', '08:40:00', 1),
(4, 'Mona', '08:30:00', '08:55:00', 1),
(5, '172-VA', '08:12:00', '08:27:00', 3),
(6, '172-VA', '08:18:00', '08:33:00', 3),
(7, '172-AV', '08:09:00', '08:24:00', 4),
(8, '172-AV', '08:14:00', '08:29:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Horaire`
--

CREATE TABLE IF NOT EXISTS `Horaire` (
  `id` tinyint(4) NOT NULL auto_increment,
  `Arret_id` int(11) default NULL,
  `Heure` time default NULL,
  `Course_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `Horaire`
--

INSERT INTO `Horaire` (`id`, `Arret_id`, `Heure`, `Course_id`) VALUES
(1, 1, '08:15:00', 3),
(2, 2, '08:17:00', 3),
(3, 3, '08:20:00', 3),
(4, 4, '08:23:00', 3),
(5, 5, '08:26:00', 3),
(6, 6, '08:30:00', 3),
(7, 7, '08:35:00', 3),
(8, 8, '08:37:00', 3),
(9, 9, '08:40:00', 3),
(10, 1, '08:30:00', 4),
(11, 2, '08:32:00', 4),
(12, 3, '08:35:00', 4),
(13, 4, '08:38:00', 4),
(14, 5, '08:41:00', 4),
(15, 6, '08:45:00', 4),
(16, 7, '08:50:00', 4),
(17, 8, '08:52:00', 4),
(18, 9, '08:55:00', 4),
(19, 9, '08:10:00', 1),
(20, 8, '08:13:00', 1),
(21, 7, '08:15:00', 1),
(22, 6, '08:20:00', 1),
(23, 5, '08:23:00', 1),
(24, 4, '08:26:00', 1),
(25, 3, '08:29:00', 1),
(26, 2, '08:33:00', 1),
(27, 1, '08:35:00', 1),
(28, 9, '08:25:00', 2),
(29, 8, '08:28:00', 2),
(30, 7, '08:30:00', 2),
(31, 6, '08:35:00', 2),
(32, 5, '08:38:00', 2),
(33, 4, '08:41:00', 2),
(34, 3, '08:44:00', 2),
(35, 2, '08:47:00', 2),
(36, 1, '08:50:00', 2),
(37, 10, '08:12:00', 5),
(38, 9, '08:20:00', 5),
(39, 11, '08:27:00', 5),
(40, 10, '08:18:00', 6),
(41, 9, '08:25:00', 6),
(42, 11, '08:33:00', 6),
(43, 11, '08:09:00', 7),
(44, 9, '08:16:00', 7),
(45, 10, '08:24:00', 7),
(46, 11, '08:14:00', 8),
(47, 9, '08:21:00', 8),
(48, 10, '08:29:00', 8);

-- --------------------------------------------------------

--
-- Structure de la table `Relevé`
--

CREATE TABLE IF NOT EXISTS `Relevé` (
  `id` tinyint(4) NOT NULL auto_increment,
  `Vehicule_id` int(11) default NULL,
  `Latitude` float default NULL,
  `Longitude` float default NULL,
  `Date` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `Relevé`
--


-- --------------------------------------------------------

--
-- Structure de la table `Vehicule`
--

CREATE TABLE IF NOT EXISTS `Vehicule` (
  `id` tinyint(4) NOT NULL auto_increment,
  `Modele` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `Vehicule`
--

INSERT INTO `Vehicule` (`id`, `Modele`) VALUES
(1, 'RER'),
(2, 'RER'),
(3, 'RER'),
(4, 'RER'),
(5, 'BUS'),
(6, 'BUS'),
(7, 'BUS'),
(8, 'BUS');
