-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 19 Mai 2015 à 15:06
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dreamfield`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
`id_produit` int(11) NOT NULL,
  `categorie_produit` varchar(100) NOT NULL,
  `nom_produit` varchar(100) NOT NULL,
  `chemin_photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_produit`, `categorie_produit`, `nom_produit`, `chemin_photo`) VALUES
(1, 'fruit', 'coing', '/DreamField_mvc/photo_fruit_legume/coing.jpg'),
(2, 'fruit', 'corme', 'DreamField_mvc/photo_fruit_legume/corme.jpg'),
(3, 'fruit', 'nèfle', '/DreamField/photo_fruit_legume/nefle.jpg'),
(4, 'fruit', 'pêche', 'Utilisateurs/karendesmars/Bureau/DreamField/photo_fruit_legume/pêche.jpg'),
(5, 'fruit', 'poire', 'Utilisateurs/karendesmars/Bureau/DreamField/photo_fruit_legume/poire.jpg'),
(6, 'fruit', 'pomme', 'Utilisateurs/karendesmars/Bureau/DreamField/photo_fruit_legume/pomme.jpg'),
(7, 'fruit', 'raisin', '/DreamField_mvc/photo_fruit_legume/raison.jpg'),
(8, 'fruit', 'amande', '/DreamField_mvc/photo_fruit_legume/amande.jpg'),
(9, 'fruit', 'noisette', '/DreamField_mvc/photo_fruit_legume/noisette.jpg'),
(10, 'fruit', 'noix', '/DreamField_mvc/photo_fruit_legume/noix.jpg'),
(11, 'fruit', 'noix de cajou', '/DreamField_mvc/photo_fruit_legume/noix_de_cajou.jpg'),
(12, 'fruit', 'noix de coco', ''),
(13, 'fruit', 'pistache', ''),
(14, 'fruit', 'curuba', ''),
(15, 'fruit', 'fruit de la passion', ''),
(16, 'fruit', 'grenadelle', ''),
(17, 'fruit', 'kiwai', ''),
(18, 'fruit', 'kiwano', ''),
(19, 'fruit', 'prunelle', ''),
(20, 'fruit', 'kiwi', ''),
(21, 'fruit', 'mûre', ''),
(22, 'fruit', 'abricot', '/DreamField_mvc/static/img/photo_fruit_legume/abricot.jpg'),
(23, 'fruit', 'cerise', ''),
(24, 'fruit', 'prune', ''),
(25, 'fruit', 'citron', ''),
(26, 'fruit', 'figue', ''),
(27, 'fruit', 'goyave', ''),
(28, 'fruit', 'grenade', ''),
(29, 'fruit', 'jujube', ''),
(30, 'fruit', 'kaki', ''),
(31, 'fruit', 'mandarine', ''),
(32, 'fruit', 'olive', ''),
(33, 'fruit', 'orange', ''),
(34, 'fruit', 'canneberge', '/DreamField_mvc/photo_fruit_legume/canneberge.jpg'),
(35, 'fruit', 'aronia', '/DreamField_mvc/photo_fruit_legume/aronia.jpg'),
(36, 'fruit', 'fraise', ''),
(37, 'fruit', 'framboise', ''),
(38, 'fruit', 'groseille', ''),
(39, 'fruit', 'myrtille', ''),
(40, 'fruit', 'avocat', '/DreamField_mvc/photo_fruit_legume/avocat.jpg'),
(41, 'fruit', 'banane', '/DreamField_mvc/photo_fruit_legume/banane.jpg'),
(42, 'fruit', 'cacao', '/DreamField_mvc/photo_fruit_legume/cacao.jpg'),
(43, 'fruit', 'carambole', '/DreamField_mvc/photo_fruit_legume/carambole.jpg'),
(44, 'fruit', 'corossol', ''),
(45, 'fruit', 'datte', ''),
(46, 'fruit', 'litchi', ''),
(47, 'fruit', 'mangue', ''),
(48, 'fruit', 'pamplemousse', ''),
(49, 'fruit', 'papaye', ''),
(50, 'fruit', 'pomme de cythère', ''),
(51, 'légume', 'asperge', '/DreamField_mvc/photo_fruit_legume/asperge.jpg'),
(52, 'légume', 'céleri-rave', ''),
(53, 'légume', 'choux pommé', ''),
(54, 'légume', 'choux vert', ''),
(55, 'légume', 'choux de milan', ''),
(56, 'légume', 'choux chinois', ''),
(57, 'légume', 'choux-fleur', ''),
(58, 'légume', 'brocoli', '/DreamField_mvc/photo_fruit_legume/brocoli.jpg'),
(59, 'légume', 'chou romanesco', ''),
(60, 'légume', 'choux de bruxelles', ''),
(61, 'légume', 'épinard', ''),
(62, 'légume', 'poireau', ''),
(63, 'légume', 'laitue', ''),
(64, 'légume', 'chicorée', ''),
(65, 'légume', 'mâche', ''),
(66, 'légume', 'roquette', ''),
(67, 'légume', 'aubergine', '/DreamField_mvc/photo_fruit_legume/aubergine.jpg'),
(68, 'légume', 'concombre', ''),
(69, 'légume', 'cornichon', ''),
(70, 'légume', 'courge', ''),
(71, 'légume', 'potiron', ''),
(72, 'légume', 'citrouille', ''),
(73, 'légume', 'melon', ''),
(74, 'légume', 'tomate', ''),
(75, 'légume', 'piment', ''),
(76, 'légume', 'poivron', ''),
(77, 'légume', 'banane plantain', '/DreamField_mvc/photo_fruit_legume/banane_plantain.jpg'),
(78, 'légume', 'betterave', '/DreamField_mvc/photo_fruit_legume/betterave.jpg'),
(79, 'légume', 'carotte', '/DreamField_mvc/photo_fruit_legume/carotte.jpg'),
(80, 'légume', 'courgette', ''),
(81, 'légume', 'navet', ''),
(82, 'légume', 'radis', ''),
(83, 'légume', 'patate', ''),
(84, 'légume', 'pomme de terre', ''),
(85, 'légume', 'fève ', ''),
(86, 'légume', 'haricot vert', ''),
(87, 'légume', 'haricot blanc', ''),
(88, 'légume', 'petit pois', ''),
(89, 'légume', 'ail', '/DreamField_mvc/photo_fruit_legume/ail.jpg'),
(90, 'légume', 'échalote', ''),
(91, 'légume', 'oignon', ''),
(92, 'légume', 'ciboulette', ''),
(93, 'légume', 'champignon', ''),
(94, 'fruit', 'cassis', ''),
(95, 'fruit', 'ananas', '/DreamField_mvc/photo_fruit_legume/ananas.jpg'),
(96, 'légume', 'maïs', ''),
(97, 'fruit', 'pastèque', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;