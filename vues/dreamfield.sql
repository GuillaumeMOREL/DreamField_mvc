-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 20 Mai 2015 à 11:08
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
(1, 'fruit', 'coing', '/static/img/photo_fruit_legume/coing.jpg'),
(2, 'fruit', 'corme', '/static/img/photo_fruit_legume/corme.jpg'),
(3, 'fruit', 'nèfle', '/static/img/photo_fruit_legume/nefle.jpg'),
(4, 'fruit', 'pêche', '/static/img/photo_fruit_legume/peche.jpg'),
(5, 'fruit', 'poire', '/static/img/photo_fruit_legume/poire.jpg'),
(6, 'fruit', 'pomme', '/static/img/photo_fruit_legume/pomme.jpg'),
(7, 'fruit', 'raisin', '/static/img/photo_fruit_legume/raisin.jpg'),
(8, 'fruit', 'amande', '/static/img/photo_fruit_legume/amande.jpg'),
(9, 'fruit', 'noisette', '/static/img/photo_fruit_legume/noisette.jpg'),
(10, 'fruit', 'noix', '/static/img/photo_fruit_legume/noix.jpg'),
(11, 'fruit', 'noix de cajou', '/static/img/photo_fruit_legume/noix_de_cajou.jpg'),
(12, 'fruit', 'noix de coco', '/static/img/photo_fruit_legume/noix_de_coco.jpg'),
(13, 'fruit', 'pistache', '/static/img/photo_fruit_legume/pistache.jpg'),
(14, 'fruit', 'curuba', '/static/img/photo_fruit_legume/curuba.jpg'),
(15, 'fruit', 'fruit de la passion', '/static/img/photo_fruit_legume/fruit_de_la_passion.jpg'),
(16, 'fruit', 'grenadelle', '/static/img/photo_fruit_legume/grenadelle.jpg'),
(17, 'fruit', 'kiwai', '/static/img/photo_fruit_legume/kiwai.jpg'),
(18, 'fruit', 'kiwano', '/static/img/photo_fruit_legume/kiwano.jpg'),
(19, 'fruit', 'prunelle', '/static/img/photo_fruit_legume/prunelle.jpg'),
(20, 'fruit', 'kiwi', '/static/img/photo_fruit_legume/kiwi.jpg'),
(21, 'fruit', 'mûre', '/static/img/photo_fruit_legume/mure.jpg'),
(22, 'fruit', 'abricot', '/static/img/photo_fruit_legume/abricot.jpg'),
(23, 'fruit', 'cerise', '/static/img/photo_fruit_legume/cerise.jpg'),
(24, 'fruit', 'prune', '/static/img/photo_fruit_legume/prune.jpg'),
(25, 'fruit', 'citron', '/static/img/photo_fruit_legume/citron.jpg'),
(26, 'fruit', 'figue', '/static/img/photo_fruit_legume/figue.jpg'),
(27, 'fruit', 'goyave', '/static/img/photo_fruit_legume/goyave.jpg'),
(28, 'fruit', 'grenade', '/static/img/photo_fruit_legume/grenade.jpg'),
(29, 'fruit', 'jujube', '/static/img/photo_fruit_legume/jujube.jpg'),
(30, 'fruit', 'kaki', '/static/img/photo_fruit_legume/kaki.jpg'),
(31, 'fruit', 'mandarine', '/static/img/photo_fruit_legume/mandarine.jpg'),
(32, 'fruit', 'olive', '/static/img/photo_fruit_legume/olive.jpg'),
(33, 'fruit', 'orange', '/static/img/photo_fruit_legume/orange.jpg'),
(34, 'fruit', 'canneberge', '/static/img/photo_fruit_legume/canneberge.jpg'),
(35, 'fruit', 'aronia', '/static/img/photo_fruit_legume/aronia.jpg'),
(36, 'fruit', 'fraise', '/static/img/photo_fruit_legume/fraise.jpg'),
(37, 'fruit', 'framboise', '/static/img/photo_fruit_legume/framboise.jpg'),
(38, 'fruit', 'groseille', '/static/img/photo_fruit_legume/groseille.jpg'),
(39, 'fruit', 'myrtille', '/static/img/photo_fruit_legume/myrtille.jpg'),
(40, 'fruit', 'avocat', '/static/img/photo_fruit_legume/avocat.jpg'),
(41, 'fruit', 'banane', '/static/img/photo_fruit_legume/banane.jpg'),
(42, 'fruit', 'cacao', '/static/img/photo_fruit_legume/cacao.jpg'),
(43, 'fruit', 'carambole', '/static/img/photo_fruit_legume/carambole.jpg'),
(44, 'fruit', 'corossol', '/static/img/photo_fruit_legume/corossol.jpg'),
(45, 'fruit', 'datte', '/static/img/photo_fruit_legume/datte.jpg'),
(46, 'fruit', 'litchi', '/static/img/photo_fruit_legume/litchi.jpg'),
(47, 'fruit', 'mangue', '/static/img/photo_fruit_legume/mangue.jpg'),
(48, 'fruit', 'pamplemousse', '/static/img/photo_fruit_legume/pamplemousse.jpg'),
(49, 'fruit', 'papaye', '/static/img/photo_fruit_legume/papaye.jpg'),
(50, 'fruit', 'pomme de cythère', '/static/img/photo_fruit_legume/pomme_de_cythere.jpg'),
(51, 'legume', 'asperge', '/static/img/photo_fruit_legume/asperge.jpg'),
(52, 'légume', 'céleri-rave', '/static/img/photo_fruit_legume/celeri-rave.jpg'),
(53, 'légume', 'choux pommé', '/static/img/photo_fruit_legume/choux_pomme.jpg'),
(54, 'légume', 'choux vert', '/static/img/photo_fruit_legume/choux_vert.jpg'),
(55, 'légume', 'choux de milan', '/static/img/photo_fruit_legume/choux_de_milan.jpg'),
(56, 'légume', 'choux chinois', '/static/img/photo_fruit_legume/choux_chinois.jpg'),
(57, 'légume', 'choux-fleur', '/static/img/photo_fruit_legume/choux_fleur.jpg'),
(58, 'légume', 'brocoli', '/static/img/photo_fruit_legume/brocoli.jpg'),
(59, 'légume', 'chou romanesco', '/static/img/photo_fruit_legume/choux_romanesco.jpg'),
(60, 'légume', 'choux de bruxelles', '/static/img/photo_fruit_legume/choux_de_bruxelles.jpg'),
(61, 'légume', 'épinard', '/static/img/photo_fruit_legume/epinard.jpg'),
(62, 'légume', 'poireau', '/static/img/photo_fruit_legume/poireau.jpg'),
(63, 'légume', 'laitue', '/static/img/photo_fruit_legume/laitue.jpg'),
(64, 'légume', 'chicorée', '/static/img/photo_fruit_legume/chicoree.jpg'),
(65, 'légume', 'mâche', '/static/img/photo_fruit_legume/mache.jpg'),
(66, 'légume', 'roquette', '/static/img/photo_fruit_legume/roquette.jpg'),
(67, 'legume', 'aubergine', '/static/img/photo_fruit_legume/aubergine.jpg'),
(68, 'légume', 'concombre', '/static/img/photo_fruit_legume/concombre.jpg'),
(69, 'légume', 'cornichon', '/static/img/photo_fruit_legume/cornichon.jpg'),
(70, 'légume', 'courge', '/static/img/photo_fruit_legume/courge.jpg'),
(71, 'légume', 'potiron', '/static/img/photo_fruit_legume/potiron.jpg'),
(72, 'légume', 'citrouille', '/static/img/photo_fruit_legume/citrouille.jpg'),
(73, 'légume', 'melon', '/static/img/photo_fruit_legume/melon.jpg'),
(74, 'légume', 'tomate', '/static/img/photo_fruit_legume/tomate.jpg'),
(75, 'légume', 'piment', '/static/img/photo_fruit_legume/piment.jpg'),
(76, 'légume', 'poivron', '/static/img/photo_fruit_legume/poivron.jpg'),
(77, 'fruit', 'banane plantain', '/static/img/photo_fruit_legume/banane_plantain.jpg'),
(78, 'légume', 'betterave', '/static/img/photo_fruit_legume/betterave.jpg'),
(79, 'légume', 'carotte', '/static/img/photo_fruit_legume/carotte.jpg'),
(80, 'légume', 'courgette', '/static/img/photo_fruit_legume/courgette.jpg'),
(81, 'légume', 'navet', '/static/img/photo_fruit_legume/navet.jpg'),
(82, 'légume', 'radis', '/static/img/photo_fruit_legume/radis.jpg'),
(83, 'légume', 'patate', '/static/img/photo_fruit_legume/patate.jpg'),
(84, 'légume', 'pomme de terre', '/static/img/photo_fruit_legume/pomme_de_terre.jpg'),
(85, 'légume', 'fève ', '/static/img/photo_fruit_legume/feve.jpg'),
(86, 'légume', 'haricot vert', '/static/img/photo_fruit_legume/haricot_vert.jpg'),
(87, 'légume', 'haricot blanc', '/static/img/photo_fruit_legume/haricot_blanc.jpg'),
(88, 'légume', 'petit pois', '/static/img/photo_fruit_legume/petit_pois.jpg'),
(89, 'legume', 'ail', '/static/img/photo_fruit_legume/ail.jpg'),
(90, 'légume', 'échalote', '/static/img/photo_fruit_legume/echalote.jpg'),
(91, 'légume', 'oignon', '/static/img/photo_fruit_legume/oignon.jpg'),
(92, 'légume', 'ciboulette', '/static/img/photo_fruit_legume/ciboulette.jpg'),
(93, 'légume', 'champignon', '/static/img/photo_fruit_legume/champignon.jpg'),
(94, 'fruit', 'cassis', '/static/img/photo_fruit_legume/cassis.jpg'),
(95, 'fruit', 'ananas', '/static/img/photo_fruit_legume/ananas.jpg'),
(96, 'légume', 'maïs', '/static/img/photo_fruit_legume/mais.jpg'),
(97, 'fruit', 'pastèque', '/static/img/photo_fruit_legume/pasteque.jpg');

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