-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 09 Juin 2015 à 19:25
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dreamfield`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
`id_annonce` int(11) NOT NULL,
  `nom_produit` varchar(45) NOT NULL,
  `ProduitAutre` varchar(45) NOT NULL,
  `nbPoidsQuant` int(5) NOT NULL,
  `prix` int(5) NOT NULL,
  `dateexpiration` date NOT NULL,
  `PoidsQuant` varchar(20) NOT NULL,
  `remarque` varchar(100) NOT NULL,
  `troc` varchar(30) NOT NULL,
  `photo_offre` varchar(80) NOT NULL,
  `departement_annonce` int(2) NOT NULL,
  `adresse_image` int(11) NOT NULL,
  `extension_upload` varchar(5) NOT NULL,
  `id_vendeur` int(11) NOT NULL,
  `date_annonce` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id_annonce`, `nom_produit`, `ProduitAutre`, `nbPoidsQuant`, `prix`, `dateexpiration`, `PoidsQuant`, `remarque`, `troc`, `photo_offre`, `departement_annonce`, `adresse_image`, `extension_upload`, `id_vendeur`, `date_annonce`) VALUES
(18, 'avocat', '', 11, 20, '2015-06-13', 'unite', 'De très bonne qualité, n''hésitez pas !', 'Argent de préférence', '', 78, 0, '', 28, '2015-06-09'),
(19, 'cassis', '', 7, 13, '2015-06-14', 'kg', '. . .', 'en échange de fruits svp', '', 75, 0, '', 26, '2015-06-09'),
(20, 'prune', '', 21, 30, '2015-06-15', 'unite', 'Vends plusieurs lots de prune..\r\n\r\n', 'Argent ou melon', '', 78, 0, '', 25, '2015-06-09'),
(21, 'poireau', '', 15, 45, '2015-06-19', 'unite', '', 'Non', '', 78, 0, '', 25, '2015-06-09'),
(22, 'AutreAliment', 'graine de tournesole', 80, 25, '2015-06-26', 'g', 'Hmm que c''est bon !', 'En échange de monnaie merci !', '', 78, 0, '', 27, '2015-06-09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
 ADD PRIMARY KEY (`id_annonce`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;