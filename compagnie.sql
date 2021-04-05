-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 jan. 2020 à 14:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `compagnie`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnees`
--

DROP TABLE IF EXISTS `abonnees`;
CREATE TABLE IF NOT EXISTS `abonnees` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `nom_compagnie` varchar(265) NOT NULL DEFAULT 'GOLDEN EAGLE',
  `token` varchar(255) NOT NULL DEFAULT '',
  `role` text NOT NULL DEFAULT '',
  PRIMARY KEY (`identifiant`),
  KEY `num_client` (`nom_compagnie`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnees`
--

INSERT INTO `abonnees` (`identifiant`, `nom`, `prenom`, `email`, `mdp`, `nom_compagnie`, `token`, `role`) VALUES
(19, 'KABLI', 'anis', 'anis@gmail.com', '$2y$12$4E4NtR0h3fphtmqx8rCV.u3FUOUpDz.Iv9U0mJPun9OhgBW6oigLG', '', '', ''),
(20, 'hallalel', 'tarek', 'tarekhallalel@gmail.com', '$2y$12$juKlJScF.FmhOPFJOT7g5ukhavHjxJhhOxMNPupbIfi470bC7seO6', '', '', 'admin'),
(24, 'Amziane', 'Razika', 'razikaameziane@gmail.com', '$2y$12$eBoKByyJGVssTx63f/GLauWP9II7lE6Tzr6fvf2z7JJUbunWmwS7S', '', 'zl468hdmzg', ''),
(26, 'feriel', 'boutenjel', 'feriel@gmail.com', '$2y$12$4TA4aAPyG7MKKHkvkt7DXOLjCuxta5Sf5IQLCk3LpMYa3DTFIPMYy', '', 'ipyspzc3ht', 'admin'),
(30, 'kmhidd', 'dzerzekkkk', 'ferieel@gmail.com', '$2y$12$/9dEKrxgx1h2fjgdUWfwQOUZmujOliHwl/iHi.zjRrpIHwvy0G9ue', '', '', ''),
(31, 'jjjjjjjjjj', 'jjjjjjj', 'amziane30@yahoo.fr', '$2y$12$BzZkBHeSkA.nCF022ZX8LOPQ8SqX8KCBH6OfqKnGl0i92GLlExy7S', '', '5184xmwonx', ''),
(32, 'kkkkk', 'llll', 'ramllleziane@ymail.com', '$2y$12$6AbXd9H//s3hYjgG3DGMYOJo1gBiEhT1qoj8tJ5wAG17r0e/9u08i', '', '', ''),
(33, 'hhhhhhrrtfff', 'fffff', 'razixxxkaameziane@gmail.com', '$2y$12$J6H1fRT/5ykIk/s7GfeG9.L7FE22Mu9f9KK1F46HvzcoOc44rU0ze', '', '', ''),
(34, 'JJKKK', 'LLLLL', 'razikaaJJmeziane@gmail.com', '$2y$12$v0OJbLVJHmRsPuXHr9C9BubsPBKLSRqk1F/yP9w8aNMvfx4PBrLta', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

DROP TABLE IF EXISTS `aeroport`;
CREATE TABLE IF NOT EXISTS `aeroport` (
  `nom_aeroport` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL,
  PRIMARY KEY (`nom_aeroport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `aeroport`
--

INSERT INTO `aeroport` (`nom_aeroport`, `ville`, `pays`) VALUES
('alger', 'alger', 'algérie'),
('paris', 'paris', 'france');

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `matricule_avion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_avion` varchar(30) NOT NULL,
  `poid` varchar(256) NOT NULL,
  `nbrrsiege_eco` int(11) NOT NULL,
  `nbrsiege_premiere` int(11) NOT NULL,
  PRIMARY KEY (`matricule_avion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`matricule_avion`, `nom_avion`, `poid`, `nbrrsiege_eco`, `nbrsiege_premiere`) VALUES
(1, 'airbus', '12312', 255, 30),
(2, 'airbus', '12312', 255, 30),
(3, 'airbus', '12312', 255, 30);

-- --------------------------------------------------------

--
-- Structure de la table `bagage`
--

DROP TABLE IF EXISTS `bagage`;
CREATE TABLE IF NOT EXISTS `bagage` (
  `num_bagage` int(3) NOT NULL AUTO_INCREMENT,
  `qtt_bagage_ensoute` int(11) NOT NULL,
  `qtt_bagage_amain` int(11) NOT NULL,
  `qtt_sac` int(11) NOT NULL,
  PRIMARY KEY (`num_bagage`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bagage`
--

INSERT INTO `bagage` (`num_bagage`, `qtt_bagage_ensoute`, `qtt_bagage_amain`, `qtt_sac`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `carte_banquaire`
--

DROP TABLE IF EXISTS `carte_banquaire`;
CREATE TABLE IF NOT EXISTS `carte_banquaire` (
  `num_carte` int(15) NOT NULL AUTO_INCREMENT,
  `code_carte` varchar(256) NOT NULL,
  `nom_carte` varchar(30) NOT NULL,
  `num_client` int(5) NOT NULL,
  `date_expiration` date NOT NULL,
  `montant` int(30) NOT NULL,
  PRIMARY KEY (`num_carte`),
  KEY `id_cl` (`num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `num_client` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `telephone` int(10) NOT NULL,
  PRIMARY KEY (`num_client`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num_client`, `email`, `telephone`) VALUES
(1, 'tarekhallalel@gmail.com', 0),
(2, 'aissou@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

DROP TABLE IF EXISTS `enregistrement`;
CREATE TABLE IF NOT EXISTS `enregistrement` (
  `num_enreg` int(5) NOT NULL AUTO_INCREMENT,
  `num_bagage` int(5) NOT NULL,
  `num_service` int(5) NOT NULL,
  `date_enregistrement` datetime NOT NULL DEFAULT current_timestamp(),
  `montant` int(11) NOT NULL,
  `num_passager` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  PRIMARY KEY (`num_enreg`),
  KEY `bagage` (`num_bagage`),
  KEY `service` (`num_service`),
  KEY `num_service` (`num_service`),
  KEY `num_passager` (`num_passager`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`num_enreg`, `num_bagage`, `num_service`, `date_enregistrement`, `montant`, `num_passager`, `type`) VALUES
(1, 1, 1, '2019-12-29 11:36:11', 2566, 1, 'aller'),
(2, 1, 1, '2019-12-29 11:36:56', 2566, 1, 'retour');

-- --------------------------------------------------------

--
-- Structure de la table `escale`
--

DROP TABLE IF EXISTS `escale`;
CREATE TABLE IF NOT EXISTS `escale` (
  `num_vol` int(11) NOT NULL AUTO_INCREMENT,
  `nom_aeroport` varchar(21) NOT NULL DEFAULT '0',
  `date_depart` date DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  PRIMARY KEY (`num_vol`,`nom_aeroport`),
  KEY `num_vol` (`num_vol`),
  KEY `nom_aeroport` (`nom_aeroport`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `escale`
--

INSERT INTO `escale` (`num_vol`, `nom_aeroport`, `date_depart`, `heure_depart`) VALUES
(1, '0', NULL, NULL),
(2, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `facture_enregistrement`
--

DROP TABLE IF EXISTS `facture_enregistrement`;
CREATE TABLE IF NOT EXISTS `facture_enregistrement` (
  `num_fac_enregi` int(5) NOT NULL AUTO_INCREMENT,
  `nom_comp` varchar(40) NOT NULL,
  `num_enregi` int(5) NOT NULL,
  `date_fac_enregi` datetime DEFAULT current_timestamp(),
  `sous_tot_enregi` int(10) NOT NULL,
  `etat_facture` varchar(256) NOT NULL DEFAULT 'nonpayé',
  PRIMARY KEY (`num_fac_enregi`),
  KEY `enr` (`num_enregi`),
  KEY `comp` (`nom_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture_reservation`
--

DROP TABLE IF EXISTS `facture_reservation`;
CREATE TABLE IF NOT EXISTS `facture_reservation` (
  `num_fac_res` int(5) NOT NULL AUTO_INCREMENT,
  `nom_comp` varchar(40) DEFAULT NULL,
  `num_res` int(5) DEFAULT NULL,
  `date_fac_res` datetime DEFAULT current_timestamp(),
  `sous_tot_res` int(10) DEFAULT NULL,
  `etat_facture` varchar(256) NOT NULL DEFAULT 'nonpayé',
  PRIMARY KEY (`num_fac_res`),
  KEY `res` (`num_res`),
  KEY `com` (`nom_comp`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `num_passager` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `civilité` varchar(256) NOT NULL,
  `date_nais` date DEFAULT NULL,
  `num_res` int(5) DEFAULT NULL,
  PRIMARY KEY (`num_passager`),
  KEY `num_reservation` (`num_res`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`num_passager`, `nom`, `prenom`, `civilité`, `date_nais`, `num_res`) VALUES
(1, 'tarek', 'tarek', 'mascu', '2019-12-01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `num_res` int(10) NOT NULL AUTO_INCREMENT,
  `date_res` date DEFAULT NULL,
  `heure_res` time DEFAULT NULL,
  `etat_res` tinyint(1) NOT NULL,
  `nbr_psg_adulte` int(2) NOT NULL,
  `nbr_psg_enfant` int(11) NOT NULL,
  `nbr_psg_bebe` int(11) NOT NULL,
  `montant` int(10) NOT NULL,
  `num_vol_aller` int(11) NOT NULL,
  `num_vol_retour` int(11) DEFAULT NULL,
  `num_client` int(5) NOT NULL,
  `classe` varchar(255) NOT NULL,
  PRIMARY KEY (`num_res`),
  KEY `cl` (`num_client`),
  KEY `num_vol_aller` (`num_vol_aller`),
  KEY `num_vol_retour` (`num_vol_retour`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`num_res`, `date_res`, `heure_res`, `etat_res`, `nbr_psg_adulte`, `nbr_psg_enfant`, `nbr_psg_bebe`, `montant`, `num_vol_aller`, `num_vol_retour`, `num_client`, `classe`) VALUES
(1, '2019-12-22', '02:00:00', 1, 1, 0, 0, 2566, 1, 2, 1, 'eco');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `num_service` int(3) NOT NULL AUTO_INCREMENT,
  `repas` varchar(30) NOT NULL,
  `boisson` varchar(30) NOT NULL,
  PRIMARY KEY (`num_service`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`num_service`, `repas`, `boisson`) VALUES
(1, 'gluten', 'jus');

-- --------------------------------------------------------

--
-- Structure de la table `siege`
--

DROP TABLE IF EXISTS `siege`;
CREATE TABLE IF NOT EXISTS `siege` (
  `code_siege` int(11) NOT NULL AUTO_INCREMENT,
  `zone_siege` varchar(5) NOT NULL,
  `classe_siege` varchar(30) NOT NULL,
  `matricule_avion` int(4) NOT NULL DEFAULT 3,
  PRIMARY KEY (`code_siege`),
  KEY `id_avion` (`matricule_avion`)
) ENGINE=InnoDB AUTO_INCREMENT=856 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `siege`
--

INSERT INTO `siege` (`code_siege`, `zone_siege`, `classe_siege`, `matricule_avion`) VALUES
(1, 'A', 'eco', 1),
(2, 'A', 'eco', 1),
(3, 'A', 'eco', 1),
(4, 'B', 'eco', 1),
(5, 'B', 'eco', 1),
(6, 'B', 'eco', 1),
(7, 'B', 'eco', 1),
(8, 'B', 'eco', 1),
(9, 'B', 'eco', 1),
(10, 'B', 'eco', 1),
(11, 'B', 'eco', 1),
(12, 'B', 'eco', 1),
(13, 'C', 'eco', 1),
(14, 'C', 'eco', 1),
(15, 'C', 'eco', 1),
(16, 'C', 'eco', 1),
(17, 'C', 'eco', 1),
(18, 'C', 'eco', 1),
(19, 'C', 'eco', 1),
(20, 'C', 'eco', 1),
(21, 'C', 'eco', 1),
(22, 'D', 'eco', 1),
(23, 'D', 'eco', 1),
(24, 'D', 'eco', 1),
(25, 'D', 'eco', 1),
(26, 'D', 'eco', 1),
(27, 'D', 'eco', 1),
(28, 'D', 'eco', 1),
(29, 'D', 'eco', 1),
(30, 'D', 'eco', 1),
(31, 'E', 'eco', 1),
(32, 'E', 'eco', 1),
(33, 'E', 'eco', 1),
(34, 'E', 'eco', 1),
(35, 'E', 'eco', 1),
(36, 'E', 'eco', 1),
(37, 'E', 'eco', 1),
(38, 'E', 'eco', 1),
(39, 'E', 'eco', 1),
(40, 'F', 'eco', 1),
(41, 'F', 'eco', 1),
(42, 'F', 'eco', 1),
(43, 'F', 'eco', 1),
(44, 'F', 'eco', 1),
(45, 'F', 'eco', 1),
(46, 'F', 'eco', 1),
(47, 'F', 'eco', 1),
(48, 'F', 'eco', 1),
(49, 'G', 'eco', 1),
(50, 'G', 'eco', 1),
(51, 'G', 'eco', 1),
(52, 'G', 'eco', 1),
(53, 'G', 'eco', 1),
(54, 'G', 'eco', 1),
(55, 'G', 'eco', 1),
(56, 'G', 'eco', 1),
(57, 'G', 'eco', 1),
(58, 'H', 'eco', 1),
(59, 'H', 'eco', 1),
(60, 'H', 'eco', 1),
(61, 'H', 'eco', 1),
(62, 'H', 'eco', 1),
(63, 'H', 'eco', 1),
(64, 'H', 'eco', 1),
(65, 'H', 'eco', 1),
(66, 'H', 'eco', 1),
(67, 'I', 'eco', 1),
(68, 'I', 'eco', 1),
(69, 'I', 'eco', 1),
(70, 'I', 'eco', 1),
(71, 'I', 'eco', 1),
(72, 'I', 'eco', 1),
(73, 'I', 'eco', 1),
(74, 'I', 'eco', 1),
(75, 'I', 'eco', 1),
(76, 'J', 'eco', 1),
(77, 'J', 'eco', 1),
(78, 'J', 'eco', 1),
(79, 'J', 'eco', 1),
(80, 'J', 'eco', 1),
(81, 'J', 'eco', 1),
(82, 'J', 'eco', 1),
(83, 'J', 'eco', 1),
(84, 'J', 'eco', 1),
(85, 'K', 'eco', 1),
(86, 'K', 'eco', 1),
(87, 'K', 'eco', 1),
(88, 'K', 'eco', 1),
(89, 'K', 'eco', 1),
(90, 'K', 'eco', 1),
(91, 'K', 'eco', 1),
(92, 'K', 'eco', 1),
(93, 'K', 'eco', 1),
(94, 'L', 'eco', 1),
(95, 'L', 'eco', 1),
(96, 'L', 'eco', 1),
(97, 'L', 'eco', 1),
(98, 'L', 'eco', 1),
(99, 'L', 'eco', 1),
(100, 'L', 'eco', 1),
(101, 'L', 'eco', 1),
(102, 'L', 'eco', 1),
(103, 'M', 'eco', 1),
(104, 'M', 'eco', 1),
(105, 'M', 'eco', 1),
(106, 'M', 'eco', 1),
(107, 'M', 'eco', 1),
(108, 'M', 'eco', 1),
(109, 'M', 'eco', 1),
(110, 'M', 'eco', 1),
(111, 'M', 'eco', 1),
(112, 'N', 'eco', 1),
(113, 'N', 'eco', 1),
(114, 'N', 'eco', 1),
(115, 'N', 'eco', 1),
(116, 'N', 'eco', 1),
(117, 'N', 'eco', 1),
(118, 'N', 'eco', 1),
(119, 'N', 'eco', 1),
(120, 'N', 'eco', 1),
(121, 'O', 'eco', 1),
(122, 'O', 'eco', 1),
(123, 'O', 'eco', 1),
(124, 'O', 'eco', 1),
(125, 'O', 'eco', 1),
(126, 'O', 'eco', 1),
(127, 'O', 'eco', 1),
(128, 'O', 'eco', 1),
(129, 'O', 'eco', 1),
(130, 'P', 'eco', 1),
(131, 'P', 'eco', 1),
(132, 'P', 'eco', 1),
(133, 'P', 'eco', 1),
(134, 'P', 'eco', 1),
(135, 'P', 'eco', 1),
(136, 'P', 'eco', 1),
(137, 'P', 'eco', 1),
(138, 'P', 'eco', 1),
(139, 'Q', 'eco', 1),
(140, 'Q', 'eco', 1),
(141, 'Q', 'eco', 1),
(142, 'Q', 'eco', 1),
(143, 'Q', 'eco', 1),
(144, 'Q', 'eco', 1),
(145, 'Q', 'eco', 1),
(146, 'Q', 'eco', 1),
(147, 'Q', 'eco', 1),
(148, 'R', 'eco', 1),
(149, 'R', 'eco', 1),
(150, 'R', 'eco', 1),
(151, 'R', 'eco', 1),
(152, 'R', 'eco', 1),
(153, 'R', 'eco', 1),
(154, 'R', 'eco', 1),
(155, 'R', 'eco', 1),
(156, 'R', 'eco', 1),
(157, 'S', 'eco', 1),
(158, 'S', 'eco', 1),
(159, 'S', 'eco', 1),
(160, 'S', 'eco', 1),
(161, 'S', 'eco', 1),
(162, 'S', 'eco', 1),
(163, 'S', 'eco', 1),
(164, 'S', 'eco', 1),
(165, 'S', 'eco', 1),
(166, 'T', 'eco', 1),
(167, 'T', 'eco', 1),
(168, 'T', 'eco', 1),
(169, 'T', 'eco', 1),
(170, 'T', 'eco', 1),
(171, 'T', 'eco', 1),
(172, 'T', 'eco', 1),
(173, 'T', 'eco', 1),
(174, 'T', 'eco', 1),
(175, 'U', 'eco', 1),
(176, 'U', 'eco', 1),
(177, 'U', 'eco', 1),
(178, 'U', 'eco', 1),
(179, 'U', 'eco', 1),
(180, 'U', 'eco', 1),
(181, 'U', 'eco', 1),
(182, 'U', 'eco', 1),
(183, 'U', 'eco', 1),
(184, 'V', 'eco', 1),
(185, 'V', 'eco', 1),
(186, 'V', 'eco', 1),
(187, 'V', 'eco', 1),
(188, 'V', 'eco', 1),
(189, 'V', 'eco', 1),
(190, 'V', 'eco', 1),
(191, 'V', 'eco', 1),
(192, 'V', 'eco', 1),
(193, 'W', 'eco', 1),
(194, 'W', 'eco', 1),
(195, 'W', 'eco', 1),
(196, 'W', 'eco', 1),
(197, 'W', 'eco', 1),
(198, 'W', 'eco', 1),
(199, 'W', 'eco', 1),
(200, 'W', 'eco', 1),
(201, 'W', 'eco', 1),
(202, 'X', 'eco', 1),
(203, 'X', 'eco', 1),
(204, 'X', 'eco', 1),
(205, 'X', 'eco', 1),
(206, 'X', 'eco', 1),
(207, 'X', 'eco', 1),
(208, 'X', 'eco', 1),
(209, 'X', 'eco', 1),
(210, 'X', 'eco', 1),
(211, 'Y', 'eco', 1),
(212, 'Y', 'eco', 1),
(213, 'Y', 'eco', 1),
(214, 'Y', 'eco', 1),
(215, 'Y', 'eco', 1),
(216, 'Y', 'eco', 1),
(217, 'Y', 'eco', 1),
(218, 'Y', 'eco', 1),
(219, 'Y', 'eco', 1),
(220, 'Z', 'eco', 1),
(221, 'Z', 'eco', 1),
(222, 'Z', 'eco', 1),
(223, 'Z', 'eco', 1),
(224, 'Z', 'eco', 1),
(225, 'Z', 'eco', 1),
(226, 'Z', 'eco', 1),
(227, 'Z', 'eco', 1),
(228, 'Z', 'eco', 1),
(229, 'AB', 'eco', 1),
(230, 'AB', 'eco', 1),
(231, 'AB', 'eco', 1),
(232, 'AB', 'eco', 1),
(233, 'AB', 'eco', 1),
(234, 'AB', 'eco', 1),
(235, 'AB', 'eco', 1),
(236, 'AB', 'eco', 1),
(237, 'AB', 'eco', 1),
(238, 'AC', 'eco', 1),
(239, 'AC', 'eco', 1),
(240, 'AC', 'eco', 1),
(241, 'AC', 'eco', 1),
(242, 'AC', 'eco', 1),
(243, 'AC', 'eco', 1),
(244, 'AC', 'eco', 1),
(245, 'AC', 'eco', 1),
(246, 'AC', 'eco', 1),
(247, 'AD', 'eco', 1),
(248, 'AD', 'eco', 1),
(249, 'AD', 'eco', 1),
(250, 'AD', 'eco', 1),
(251, 'AD', 'eco', 1),
(252, 'AD', 'eco', 1),
(253, 'AD', 'eco', 1),
(254, 'AD', 'eco', 1),
(255, 'AD', 'eco', 1),
(256, 'A', 'premiere', 1),
(257, 'A', 'premiere', 1),
(258, 'A', 'premiere', 1),
(259, 'A', 'premiere', 1),
(260, 'A', 'premiere', 1),
(261, 'A', 'premiere', 1),
(262, 'A', 'premiere', 1),
(263, 'A', 'premiere', 1),
(264, 'B', 'premiere', 1),
(265, 'B', 'premiere', 1),
(266, 'B', 'premiere', 1),
(267, 'B', 'premiere', 1),
(268, 'B', 'premiere', 1),
(269, 'B', 'premiere', 1),
(270, 'B', 'premiere', 1),
(271, 'C', 'premiere', 1),
(272, 'C', 'premiere', 1),
(273, 'C', 'premiere', 1),
(274, 'C', 'premiere', 1),
(275, 'C', 'premiere', 1),
(276, 'C', 'premiere', 1),
(277, 'C', 'premiere', 1),
(278, 'D', 'premiere', 1),
(279, 'D', 'premiere', 1),
(280, 'D', 'premiere', 1),
(281, 'D', 'premiere', 1),
(282, 'D', 'premiere', 1),
(283, 'D', 'premiere', 1),
(284, 'D', 'premiere', 1),
(285, 'D', 'premiere', 1),
(286, 'A', 'eco', 2),
(287, 'A', 'eco', 2),
(288, 'A', 'eco', 2),
(289, 'B', 'eco', 2),
(290, 'B', 'eco', 2),
(291, 'B', 'eco', 2),
(292, 'B', 'eco', 2),
(293, 'B', 'eco', 2),
(294, 'B', 'eco', 2),
(295, 'B', 'eco', 2),
(296, 'B', 'eco', 2),
(297, 'B', 'eco', 2),
(298, 'C', 'eco', 2),
(299, 'C', 'eco', 2),
(300, 'C', 'eco', 2),
(301, 'C', 'eco', 2),
(302, 'C', 'eco', 2),
(303, 'C', 'eco', 2),
(304, 'C', 'eco', 2),
(305, 'C', 'eco', 2),
(306, 'C', 'eco', 2),
(307, 'D', 'eco', 2),
(308, 'D', 'eco', 2),
(309, 'D', 'eco', 2),
(310, 'D', 'eco', 2),
(311, 'D', 'eco', 2),
(312, 'D', 'eco', 2),
(313, 'D', 'eco', 2),
(314, 'D', 'eco', 2),
(315, 'D', 'eco', 2),
(316, 'E', 'eco', 2),
(317, 'E', 'eco', 2),
(318, 'E', 'eco', 2),
(319, 'E', 'eco', 2),
(320, 'E', 'eco', 2),
(321, 'E', 'eco', 2),
(322, 'E', 'eco', 2),
(323, 'E', 'eco', 2),
(324, 'E', 'eco', 2),
(325, 'F', 'eco', 2),
(326, 'F', 'eco', 2),
(327, 'F', 'eco', 2),
(328, 'F', 'eco', 2),
(329, 'F', 'eco', 2),
(330, 'F', 'eco', 2),
(331, 'F', 'eco', 2),
(332, 'F', 'eco', 2),
(333, 'F', 'eco', 2),
(334, 'G', 'eco', 2),
(335, 'G', 'eco', 2),
(336, 'G', 'eco', 2),
(337, 'G', 'eco', 2),
(338, 'G', 'eco', 2),
(339, 'G', 'eco', 2),
(340, 'G', 'eco', 2),
(341, 'G', 'eco', 2),
(342, 'G', 'eco', 2),
(343, 'H', 'eco', 2),
(344, 'H', 'eco', 2),
(345, 'H', 'eco', 2),
(346, 'H', 'eco', 2),
(347, 'H', 'eco', 2),
(348, 'H', 'eco', 2),
(349, 'H', 'eco', 2),
(350, 'H', 'eco', 2),
(351, 'H', 'eco', 2),
(352, 'I', 'eco', 2),
(353, 'I', 'eco', 2),
(354, 'I', 'eco', 2),
(355, 'I', 'eco', 2),
(356, 'I', 'eco', 2),
(357, 'I', 'eco', 2),
(358, 'I', 'eco', 2),
(359, 'I', 'eco', 2),
(360, 'I', 'eco', 2),
(361, 'J', 'eco', 2),
(362, 'J', 'eco', 2),
(363, 'J', 'eco', 2),
(364, 'J', 'eco', 2),
(365, 'J', 'eco', 2),
(366, 'J', 'eco', 2),
(367, 'J', 'eco', 2),
(368, 'J', 'eco', 2),
(369, 'J', 'eco', 2),
(370, 'K', 'eco', 2),
(371, 'K', 'eco', 2),
(372, 'K', 'eco', 2),
(373, 'K', 'eco', 2),
(374, 'K', 'eco', 2),
(375, 'K', 'eco', 2),
(376, 'K', 'eco', 2),
(377, 'K', 'eco', 2),
(378, 'K', 'eco', 2),
(379, 'L', 'eco', 2),
(380, 'L', 'eco', 2),
(381, 'L', 'eco', 2),
(382, 'L', 'eco', 2),
(383, 'L', 'eco', 2),
(384, 'L', 'eco', 2),
(385, 'L', 'eco', 2),
(386, 'L', 'eco', 2),
(387, 'L', 'eco', 2),
(388, 'M', 'eco', 2),
(389, 'M', 'eco', 2),
(390, 'M', 'eco', 2),
(391, 'M', 'eco', 2),
(392, 'M', 'eco', 2),
(393, 'M', 'eco', 2),
(394, 'M', 'eco', 2),
(395, 'M', 'eco', 2),
(396, 'M', 'eco', 2),
(397, 'N', 'eco', 2),
(398, 'N', 'eco', 2),
(399, 'N', 'eco', 2),
(400, 'N', 'eco', 2),
(401, 'N', 'eco', 2),
(402, 'N', 'eco', 2),
(403, 'N', 'eco', 2),
(404, 'N', 'eco', 2),
(405, 'N', 'eco', 2),
(406, 'O', 'eco', 2),
(407, 'O', 'eco', 2),
(408, 'O', 'eco', 2),
(409, 'O', 'eco', 2),
(410, 'O', 'eco', 2),
(411, 'O', 'eco', 2),
(412, 'O', 'eco', 2),
(413, 'O', 'eco', 2),
(414, 'O', 'eco', 2),
(415, 'P', 'eco', 2),
(416, 'P', 'eco', 2),
(417, 'P', 'eco', 2),
(418, 'P', 'eco', 2),
(419, 'P', 'eco', 2),
(420, 'P', 'eco', 2),
(421, 'P', 'eco', 2),
(422, 'P', 'eco', 2),
(423, 'P', 'eco', 2),
(424, 'Q', 'eco', 2),
(425, 'Q', 'eco', 2),
(426, 'Q', 'eco', 2),
(427, 'Q', 'eco', 2),
(428, 'Q', 'eco', 2),
(429, 'Q', 'eco', 2),
(430, 'Q', 'eco', 2),
(431, 'Q', 'eco', 2),
(432, 'Q', 'eco', 2),
(433, 'R', 'eco', 2),
(434, 'R', 'eco', 2),
(435, 'R', 'eco', 2),
(436, 'R', 'eco', 2),
(437, 'R', 'eco', 2),
(438, 'R', 'eco', 2),
(439, 'R', 'eco', 2),
(440, 'R', 'eco', 2),
(441, 'R', 'eco', 2),
(442, 'S', 'eco', 2),
(443, 'S', 'eco', 2),
(444, 'S', 'eco', 2),
(445, 'S', 'eco', 2),
(446, 'S', 'eco', 2),
(447, 'S', 'eco', 2),
(448, 'S', 'eco', 2),
(449, 'S', 'eco', 2),
(450, 'S', 'eco', 2),
(451, 'T', 'eco', 2),
(452, 'T', 'eco', 2),
(453, 'T', 'eco', 2),
(454, 'T', 'eco', 2),
(455, 'T', 'eco', 2),
(456, 'T', 'eco', 2),
(457, 'T', 'eco', 2),
(458, 'T', 'eco', 2),
(459, 'T', 'eco', 2),
(460, 'U', 'eco', 2),
(461, 'U', 'eco', 2),
(462, 'U', 'eco', 2),
(463, 'U', 'eco', 2),
(464, 'U', 'eco', 2),
(465, 'U', 'eco', 2),
(466, 'U', 'eco', 2),
(467, 'U', 'eco', 2),
(468, 'U', 'eco', 2),
(469, 'V', 'eco', 2),
(470, 'V', 'eco', 2),
(471, 'V', 'eco', 2),
(472, 'V', 'eco', 2),
(473, 'V', 'eco', 2),
(474, 'V', 'eco', 2),
(475, 'V', 'eco', 2),
(476, 'V', 'eco', 2),
(477, 'V', 'eco', 2),
(478, 'W', 'eco', 2),
(479, 'W', 'eco', 2),
(480, 'W', 'eco', 2),
(481, 'W', 'eco', 2),
(482, 'W', 'eco', 2),
(483, 'W', 'eco', 2),
(484, 'W', 'eco', 2),
(485, 'W', 'eco', 2),
(486, 'W', 'eco', 2),
(487, 'X', 'eco', 2),
(488, 'X', 'eco', 2),
(489, 'X', 'eco', 2),
(490, 'X', 'eco', 2),
(491, 'X', 'eco', 2),
(492, 'X', 'eco', 2),
(493, 'X', 'eco', 2),
(494, 'X', 'eco', 2),
(495, 'X', 'eco', 2),
(496, 'Y', 'eco', 2),
(497, 'Y', 'eco', 2),
(498, 'Y', 'eco', 2),
(499, 'Y', 'eco', 2),
(500, 'Y', 'eco', 2),
(501, 'Y', 'eco', 2),
(502, 'Y', 'eco', 2),
(503, 'Y', 'eco', 2),
(504, 'Y', 'eco', 2),
(505, 'Z', 'eco', 2),
(506, 'Z', 'eco', 2),
(507, 'Z', 'eco', 2),
(508, 'Z', 'eco', 2),
(509, 'Z', 'eco', 2),
(510, 'Z', 'eco', 2),
(511, 'Z', 'eco', 2),
(512, 'Z', 'eco', 2),
(513, 'Z', 'eco', 2),
(514, 'AB', 'eco', 2),
(515, 'AB', 'eco', 2),
(516, 'AB', 'eco', 2),
(517, 'AB', 'eco', 2),
(518, 'AB', 'eco', 2),
(519, 'AB', 'eco', 2),
(520, 'AB', 'eco', 2),
(521, 'AB', 'eco', 2),
(522, 'AB', 'eco', 2),
(523, 'AC', 'eco', 2),
(524, 'AC', 'eco', 2),
(525, 'AC', 'eco', 2),
(526, 'AC', 'eco', 2),
(527, 'AC', 'eco', 2),
(528, 'AC', 'eco', 2),
(529, 'AC', 'eco', 2),
(530, 'AC', 'eco', 2),
(531, 'AC', 'eco', 2),
(532, 'AD', 'eco', 2),
(533, 'AD', 'eco', 2),
(534, 'AD', 'eco', 2),
(535, 'AD', 'eco', 2),
(536, 'AD', 'eco', 2),
(537, 'AD', 'eco', 2),
(538, 'AD', 'eco', 2),
(539, 'AD', 'eco', 2),
(540, 'AD', 'eco', 2),
(541, 'A', 'premiere', 2),
(542, 'A', 'premiere', 2),
(543, 'A', 'premiere', 2),
(544, 'A', 'premiere', 2),
(545, 'A', 'premiere', 2),
(546, 'A', 'premiere', 2),
(547, 'A', 'premiere', 2),
(548, 'A', 'premiere', 2),
(549, 'B', 'premiere', 2),
(550, 'B', 'premiere', 2),
(551, 'B', 'premiere', 2),
(552, 'B', 'premiere', 2),
(553, 'B', 'premiere', 2),
(554, 'B', 'premiere', 2),
(555, 'B', 'premiere', 2),
(556, 'C', 'premiere', 2),
(557, 'C', 'premiere', 2),
(558, 'C', 'premiere', 2),
(559, 'C', 'premiere', 2),
(560, 'C', 'premiere', 2),
(561, 'C', 'premiere', 2),
(562, 'C', 'premiere', 2),
(563, 'D', 'premiere', 2),
(564, 'D', 'premiere', 2),
(565, 'D', 'premiere', 2),
(566, 'D', 'premiere', 2),
(567, 'D', 'premiere', 2),
(568, 'D', 'premiere', 2),
(569, 'D', 'premiere', 2),
(570, 'D', 'premiere', 2),
(571, 'A', 'eco', 3),
(572, 'A', 'eco', 3),
(573, 'A', 'eco', 3),
(574, 'B', 'eco', 3),
(575, 'B', 'eco', 3),
(576, 'B', 'eco', 3),
(577, 'B', 'eco', 3),
(578, 'B', 'eco', 3),
(579, 'B', 'eco', 3),
(580, 'B', 'eco', 3),
(581, 'B', 'eco', 3),
(582, 'B', 'eco', 3),
(583, 'C', 'eco', 3),
(584, 'C', 'eco', 3),
(585, 'C', 'eco', 3),
(586, 'C', 'eco', 3),
(587, 'C', 'eco', 3),
(588, 'C', 'eco', 3),
(589, 'C', 'eco', 3),
(590, 'C', 'eco', 3),
(591, 'C', 'eco', 3),
(592, 'D', 'eco', 3),
(593, 'D', 'eco', 3),
(594, 'D', 'eco', 3),
(595, 'D', 'eco', 3),
(596, 'D', 'eco', 3),
(597, 'D', 'eco', 3),
(598, 'D', 'eco', 3),
(599, 'D', 'eco', 3),
(600, 'D', 'eco', 3),
(601, 'E', 'eco', 3),
(602, 'E', 'eco', 3),
(603, 'E', 'eco', 3),
(604, 'E', 'eco', 3),
(605, 'E', 'eco', 3),
(606, 'E', 'eco', 3),
(607, 'E', 'eco', 3),
(608, 'E', 'eco', 3),
(609, 'E', 'eco', 3),
(610, 'F', 'eco', 3),
(611, 'F', 'eco', 3),
(612, 'F', 'eco', 3),
(613, 'F', 'eco', 3),
(614, 'F', 'eco', 3),
(615, 'F', 'eco', 3),
(616, 'F', 'eco', 3),
(617, 'F', 'eco', 3),
(618, 'F', 'eco', 3),
(619, 'G', 'eco', 3),
(620, 'G', 'eco', 3),
(621, 'G', 'eco', 3),
(622, 'G', 'eco', 3),
(623, 'G', 'eco', 3),
(624, 'G', 'eco', 3),
(625, 'G', 'eco', 3),
(626, 'G', 'eco', 3),
(627, 'G', 'eco', 3),
(628, 'H', 'eco', 3),
(629, 'H', 'eco', 3),
(630, 'H', 'eco', 3),
(631, 'H', 'eco', 3),
(632, 'H', 'eco', 3),
(633, 'H', 'eco', 3),
(634, 'H', 'eco', 3),
(635, 'H', 'eco', 3),
(636, 'H', 'eco', 3),
(637, 'I', 'eco', 3),
(638, 'I', 'eco', 3),
(639, 'I', 'eco', 3),
(640, 'I', 'eco', 3),
(641, 'I', 'eco', 3),
(642, 'I', 'eco', 3),
(643, 'I', 'eco', 3),
(644, 'I', 'eco', 3),
(645, 'I', 'eco', 3),
(646, 'J', 'eco', 3),
(647, 'J', 'eco', 3),
(648, 'J', 'eco', 3),
(649, 'J', 'eco', 3),
(650, 'J', 'eco', 3),
(651, 'J', 'eco', 3),
(652, 'J', 'eco', 3),
(653, 'J', 'eco', 3),
(654, 'J', 'eco', 3),
(655, 'K', 'eco', 3),
(656, 'K', 'eco', 3),
(657, 'K', 'eco', 3),
(658, 'K', 'eco', 3),
(659, 'K', 'eco', 3),
(660, 'K', 'eco', 3),
(661, 'K', 'eco', 3),
(662, 'K', 'eco', 3),
(663, 'K', 'eco', 3),
(664, 'L', 'eco', 3),
(665, 'L', 'eco', 3),
(666, 'L', 'eco', 3),
(667, 'L', 'eco', 3),
(668, 'L', 'eco', 3),
(669, 'L', 'eco', 3),
(670, 'L', 'eco', 3),
(671, 'L', 'eco', 3),
(672, 'L', 'eco', 3),
(673, 'M', 'eco', 3),
(674, 'M', 'eco', 3),
(675, 'M', 'eco', 3),
(676, 'M', 'eco', 3),
(677, 'M', 'eco', 3),
(678, 'M', 'eco', 3),
(679, 'M', 'eco', 3),
(680, 'M', 'eco', 3),
(681, 'M', 'eco', 3),
(682, 'N', 'eco', 3),
(683, 'N', 'eco', 3),
(684, 'N', 'eco', 3),
(685, 'N', 'eco', 3),
(686, 'N', 'eco', 3),
(687, 'N', 'eco', 3),
(688, 'N', 'eco', 3),
(689, 'N', 'eco', 3),
(690, 'N', 'eco', 3),
(691, 'O', 'eco', 3),
(692, 'O', 'eco', 3),
(693, 'O', 'eco', 3),
(694, 'O', 'eco', 3),
(695, 'O', 'eco', 3),
(696, 'O', 'eco', 3),
(697, 'O', 'eco', 3),
(698, 'O', 'eco', 3),
(699, 'O', 'eco', 3),
(700, 'P', 'eco', 3),
(701, 'P', 'eco', 3),
(702, 'P', 'eco', 3),
(703, 'P', 'eco', 3),
(704, 'P', 'eco', 3),
(705, 'P', 'eco', 3),
(706, 'P', 'eco', 3),
(707, 'P', 'eco', 3),
(708, 'P', 'eco', 3),
(709, 'Q', 'eco', 3),
(710, 'Q', 'eco', 3),
(711, 'Q', 'eco', 3),
(712, 'Q', 'eco', 3),
(713, 'Q', 'eco', 3),
(714, 'Q', 'eco', 3),
(715, 'Q', 'eco', 3),
(716, 'Q', 'eco', 3),
(717, 'Q', 'eco', 3),
(718, 'R', 'eco', 3),
(719, 'R', 'eco', 3),
(720, 'R', 'eco', 3),
(721, 'R', 'eco', 3),
(722, 'R', 'eco', 3),
(723, 'R', 'eco', 3),
(724, 'R', 'eco', 3),
(725, 'R', 'eco', 3),
(726, 'R', 'eco', 3),
(727, 'S', 'eco', 3),
(728, 'S', 'eco', 3),
(729, 'S', 'eco', 3),
(730, 'S', 'eco', 3),
(731, 'S', 'eco', 3),
(732, 'S', 'eco', 3),
(733, 'S', 'eco', 3),
(734, 'S', 'eco', 3),
(735, 'S', 'eco', 3),
(736, 'T', 'eco', 3),
(737, 'T', 'eco', 3),
(738, 'T', 'eco', 3),
(739, 'T', 'eco', 3),
(740, 'T', 'eco', 3),
(741, 'T', 'eco', 3),
(742, 'T', 'eco', 3),
(743, 'T', 'eco', 3),
(744, 'T', 'eco', 3),
(745, 'U', 'eco', 3),
(746, 'U', 'eco', 3),
(747, 'U', 'eco', 3),
(748, 'U', 'eco', 3),
(749, 'U', 'eco', 3),
(750, 'U', 'eco', 3),
(751, 'U', 'eco', 3),
(752, 'U', 'eco', 3),
(753, 'U', 'eco', 3),
(754, 'V', 'eco', 3),
(755, 'V', 'eco', 3),
(756, 'V', 'eco', 3),
(757, 'V', 'eco', 3),
(758, 'V', 'eco', 3),
(759, 'V', 'eco', 3),
(760, 'V', 'eco', 3),
(761, 'V', 'eco', 3),
(762, 'V', 'eco', 3),
(763, 'W', 'eco', 3),
(764, 'W', 'eco', 3),
(765, 'W', 'eco', 3),
(766, 'W', 'eco', 3),
(767, 'W', 'eco', 3),
(768, 'W', 'eco', 3),
(769, 'W', 'eco', 3),
(770, 'W', 'eco', 3),
(771, 'W', 'eco', 3),
(772, 'X', 'eco', 3),
(773, 'X', 'eco', 3),
(774, 'X', 'eco', 3),
(775, 'X', 'eco', 3),
(776, 'X', 'eco', 3),
(777, 'X', 'eco', 3),
(778, 'X', 'eco', 3),
(779, 'X', 'eco', 3),
(780, 'X', 'eco', 3),
(781, 'Y', 'eco', 3),
(782, 'Y', 'eco', 3),
(783, 'Y', 'eco', 3),
(784, 'Y', 'eco', 3),
(785, 'Y', 'eco', 3),
(786, 'Y', 'eco', 3),
(787, 'Y', 'eco', 3),
(788, 'Y', 'eco', 3),
(789, 'Y', 'eco', 3),
(790, 'Z', 'eco', 3),
(791, 'Z', 'eco', 3),
(792, 'Z', 'eco', 3),
(793, 'Z', 'eco', 3),
(794, 'Z', 'eco', 3),
(795, 'Z', 'eco', 3),
(796, 'Z', 'eco', 3),
(797, 'Z', 'eco', 3),
(798, 'Z', 'eco', 3),
(799, 'AB', 'eco', 3),
(800, 'AB', 'eco', 3),
(801, 'AB', 'eco', 3),
(802, 'AB', 'eco', 3),
(803, 'AB', 'eco', 3),
(804, 'AB', 'eco', 3),
(805, 'AB', 'eco', 3),
(806, 'AB', 'eco', 3),
(807, 'AB', 'eco', 3),
(808, 'AC', 'eco', 3),
(809, 'AC', 'eco', 3),
(810, 'AC', 'eco', 3),
(811, 'AC', 'eco', 3),
(812, 'AC', 'eco', 3),
(813, 'AC', 'eco', 3),
(814, 'AC', 'eco', 3),
(815, 'AC', 'eco', 3),
(816, 'AC', 'eco', 3),
(817, 'AD', 'eco', 3),
(818, 'AD', 'eco', 3),
(819, 'AD', 'eco', 3),
(820, 'AD', 'eco', 3),
(821, 'AD', 'eco', 3),
(822, 'AD', 'eco', 3),
(823, 'AD', 'eco', 3),
(824, 'AD', 'eco', 3),
(825, 'AD', 'eco', 3),
(826, 'A', 'premiere', 3),
(827, 'A', 'premiere', 3),
(828, 'A', 'premiere', 3),
(829, 'A', 'premiere', 3),
(830, 'A', 'premiere', 3),
(831, 'A', 'premiere', 3),
(832, 'A', 'premiere', 3),
(833, 'A', 'premiere', 3),
(834, 'B', 'premiere', 3),
(835, 'B', 'premiere', 3),
(836, 'B', 'premiere', 3),
(837, 'B', 'premiere', 3),
(838, 'B', 'premiere', 3),
(839, 'B', 'premiere', 3),
(840, 'B', 'premiere', 3),
(841, 'C', 'premiere', 3),
(842, 'C', 'premiere', 3),
(843, 'C', 'premiere', 3),
(844, 'C', 'premiere', 3),
(845, 'C', 'premiere', 3),
(846, 'C', 'premiere', 3),
(847, 'C', 'premiere', 3),
(848, 'D', 'premiere', 3),
(849, 'D', 'premiere', 3),
(850, 'D', 'premiere', 3),
(851, 'D', 'premiere', 3),
(852, 'D', 'premiere', 3),
(853, 'D', 'premiere', 3),
(854, 'D', 'premiere', 3),
(855, 'D', 'premiere', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
