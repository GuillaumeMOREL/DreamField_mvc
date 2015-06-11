-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 11 Juin 2015 à 19:29
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
(21, 'poireau', '', 15, 45, '2015-06-19', 'unite', '', 'Non', '', 78, 0, '', 25, '2015-06-09');

-- --------------------------------------------------------

--
-- Structure de la table `carte_de_france`
--

CREATE TABLE `carte_de_france` (
`id_departement` int(10) NOT NULL,
  `numero_departement` varchar(2) NOT NULL,
  `nom_departement` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `carte_de_france`
--

INSERT INTO `carte_de_france` (`id_departement`, `numero_departement`, `nom_departement`) VALUES
(1, '01', 'Ain'),
(2, '02', 'Aisne'),
(3, '03', 'Allier'),
(4, '04', 'Alpes-de-Haute-Provence'),
(5, '05', 'Hautes-Alpes'),
(6, '06', 'Alpes-Maritimes'),
(7, '07', 'Ardèche'),
(8, '08', 'Ardennes'),
(9, '09', 'Ariège'),
(10, '10', 'Aube'),
(11, '11', 'Aude'),
(12, '12', 'Aveyron'),
(13, '13', 'Bouches-du-Rhône'),
(14, '14', 'Calvados'),
(15, '15', 'Cantal'),
(16, '16', 'Charente'),
(17, '17', 'Charente-Maritime'),
(18, '18', 'Cher'),
(19, '19', 'Corrèze'),
(20, '2a', 'Corse-du-sud'),
(21, '2b', 'Haute-corse'),
(22, '21', 'Côte-d''or'),
(23, '22', 'Côtes-d''armor'),
(24, '23', 'Creuse'),
(25, '24', 'Dordogne'),
(26, '25', 'Doubs'),
(27, '26', 'Drôme'),
(28, '27', 'Eure'),
(29, '28', 'Eure-et-Loir'),
(30, '29', 'Finistère'),
(31, '30', 'Gard'),
(32, '31', 'Haute-Garonne'),
(33, '32', 'Gers'),
(34, '33', 'Gironde'),
(35, '34', 'Hérault'),
(36, '35', 'Ile-et-Vilaine'),
(37, '36', 'Indre'),
(38, '37', 'Indre-et-Loire'),
(39, '38', 'Isère'),
(40, '39', 'Jura'),
(41, '40', 'Landes'),
(42, '41', 'Loir-et-Cher'),
(43, '42', 'Loire'),
(44, '43', 'Haute-Loire'),
(45, '44', 'Loire-Atlantique'),
(46, '45', 'Loiret'),
(47, '46', 'Lot'),
(48, '47', 'Lot-et-Garonne'),
(49, '48', 'Lozère'),
(50, '49', 'Maine-et-Loire'),
(51, '50', 'Manche'),
(52, '51', 'Marne'),
(53, '52', 'Haute-Marne'),
(54, '53', 'Mayenne'),
(55, '54', 'Meurthe-et-Moselle'),
(56, '55', 'Meuse'),
(57, '56', 'Morbihan'),
(58, '57', 'Moselle'),
(59, '58', 'Nièvre'),
(60, '59', 'Nord'),
(61, '60', 'Oise'),
(62, '61', 'Orne'),
(63, '62', 'Pas-de-Calais'),
(64, '63', 'Puy-de-Dôme'),
(65, '64', 'Pyrénées-Atlantiques'),
(66, '65', 'Hautes-Pyrénées'),
(67, '66', 'Pyrénées-Orientales'),
(68, '67', 'Bas-Rhin'),
(69, '68', 'Haut-Rhin'),
(70, '69', 'Rhône'),
(71, '70', 'Haute-Saône'),
(72, '71', 'Saône-et-Loire'),
(73, '72', 'Sarthe'),
(74, '73', 'Savoie'),
(75, '74', 'Haute-Savoie'),
(76, '75', 'Paris'),
(77, '76', 'Seine-Maritime'),
(78, '77', 'Seine-et-Marne'),
(79, '78', 'Yvelines'),
(80, '79', 'Deux-Sèvres'),
(81, '80', 'Somme'),
(82, '81', 'Tarn'),
(83, '82', 'Tarn-et-Garonne'),
(84, '83', 'Var'),
(85, '84', 'Vaucluse'),
(86, '85', 'Vendée'),
(87, '86', 'Vienne'),
(88, '87', 'Haute-Vienne'),
(89, '88', 'Vosges'),
(90, '89', 'Yonne'),
(91, '90', 'Territoire de Belfort'),
(92, '91', 'Essonne'),
(93, '92', 'Hauts-de-Seine'),
(94, '93', 'Seine-Saint-Denis'),
(95, '94', 'Val-de-Marne'),
(96, '95', 'Val-d''oise');

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
(52, 'legume', 'céleri-rave', '/static/img/photo_fruit_legume/celeri-rave.jpg'),
(54, 'legume', 'choux vert', '/static/img/photo_fruit_legume/choux_vert.jpg'),
(55, 'legume', 'choux de milan', '/static/img/photo_fruit_legume/choux_de_milan.jpg'),
(56, 'legume', 'choux chinois', '/static/img/photo_fruit_legume/choux_chinois.jpg'),
(57, 'legume', 'choux-fleur', '/static/img/photo_fruit_legume/choux_fleur.jpg'),
(58, 'legume', 'brocoli', '/static/img/photo_fruit_legume/brocoli.jpg'),
(59, 'legume', 'chou romanesco', '/static/img/photo_fruit_legume/choux_romanesco.jpg'),
(60, 'legume', 'choux de bruxelles', '/static/img/photo_fruit_legume/choux_de_bruxelles.jpg'),
(61, 'légume', 'épinard', '/static/img/photo_fruit_legume/epinard.jpg'),
(62, 'légume', 'poireau', '/static/img/photo_fruit_legume/poireau.jpg'),
(63, 'légume', 'laitue', '/static/img/photo_fruit_legume/laitue.jpg'),
(65, 'légume', 'mâche', '/static/img/photo_fruit_legume/mache.jpg'),
(66, 'légume', 'roquette', '/static/img/photo_fruit_legume/roquette.jpg'),
(67, 'legume', 'aubergine', '/static/img/photo_fruit_legume/aubergine.jpg'),
(68, 'légume', 'concombre', '/static/img/photo_fruit_legume/concombre.jpg'),
(69, 'légume', 'cornichon', '/static/img/photo_fruit_legume/cornichon.jpg'),
(71, 'légume', 'potiron', '/static/img/photo_fruit_legume/potiron.jpg'),
(72, 'legume', 'citrouille', '/static/img/photo_fruit_legume/citrouille.jpg'),
(73, 'légume', 'melon', '/static/img/photo_fruit_legume/melon.jpg'),
(74, 'légume', 'tomate', '/static/img/photo_fruit_legume/tomate.jpg'),
(75, 'légume', 'piment', '/static/img/photo_fruit_legume/piment.jpg'),
(76, 'légume', 'poivron', '/static/img/photo_fruit_legume/poivron.jpg'),
(78, 'legume', 'betterave', '/static/img/photo_fruit_legume/betterave.jpg'),
(79, 'legume', 'carotte', '/static/img/photo_fruit_legume/carotte.jpg'),
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
(92, 'legume', 'ciboulette', '/static/img/photo_fruit_legume/ciboulette.jpg'),
(93, 'legume', 'champignon', '/static/img/photo_fruit_legume/champignon.jpg'),
(94, 'fruit', 'cassis', '/static/img/photo_fruit_legume/cassis.jpg'),
(95, 'fruit', 'ananas', '/static/img/photo_fruit_legume/ananas.jpg'),
(96, 'légume', 'maïs', '/static/img/photo_fruit_legume/mais.jpg'),
(97, 'fruit', 'pastèque', '/static/img/photo_fruit_legume/pasteque.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
`id` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `titre` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contenu` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date_de_publication` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_sujet`, `titre`, `contenu`, `username`, `date_de_publication`) VALUES
(1, 1, 'Aucune idée', 'Je ne sais pas du tout... :s', 'michelle', '0000-00-00'),
(2, 1, 'Moi je sais', 'Juste un lien -> openclassrooms.com :p', 'guillaume', '0000-00-00'),
(3, 3, 'Chauuuuuuuddddd', 'Jsuis chaud vieu ! ;)', 'Thomas', '0000-00-00'),
(4, 2, 'De bonnes pommes', 'Elles sont trop BONNES !!!! Tous des salopes ! <3', 'Jeremy', '0000-00-00'),
(7, 8, 'premierpost', 'aide', 'Guillaume', '0000-00-00'),
(10, 12, '', 'Contenu...', '', '2015-06-08'),
(11, 12, '', 'Contenu...', '', '2015-06-08'),
(12, 12, '', 'Contenu...', '', '2015-06-08'),
(13, 24, '', 'Contenu...', '', '2015-06-08'),
(14, 24, '', 'Contenu...', '', '2015-06-08');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
`id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `question` varchar(255) NOT NULL,
  `date_de_publication` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`id`, `titre`, `username`, `question`, `date_de_publication`) VALUES
(24, 'Premier Post', 'Guillaume', 'Aide', '2015-06-08');

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

CREATE TABLE `forum_categorie` (
`cat_id` int(11) NOT NULL,
  `cat_nom` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE `forum_forum` (
`forum_id` int(11) NOT NULL,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

CREATE TABLE `forum_membres` (
`membre_id` int(11) NOT NULL,
  `membre_pseudo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_mdp` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_email` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
`post_id` int(11) NOT NULL,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE `forum_topic` (
`topic_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_genre` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
`I_D` int(11) NOT NULL,
  `prenom` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `admin` int(1) NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 NOT NULL,
  `numero_departement` int(2) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` int(15) NOT NULL,
  `pass` varchar(40) CHARACTER SET utf8 NOT NULL,
  `passverif` varchar(40) CHARACTER SET utf8 NOT NULL,
  `conditions` tinyint(1) NOT NULL,
  `date_inscription` date NOT NULL,
  `civilite` varchar(15) CHARACTER SET utf8 NOT NULL,
  `photo_profil` varchar(80) NOT NULL,
  `cle` varchar(32) CHARACTER SET utf8 NOT NULL,
  `actif` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`I_D`, `prenom`, `nom`, `admin`, `adresse`, `numero_departement`, `mail`, `tel`, `pass`, `passverif`, `conditions`, `date_inscription`, `civilite`, `photo_profil`, `cle`, `actif`) VALUES
(25, 'Karen', 'Desmars', 1, '22 avenue de Paris', 78, 'karen09@hotmail.fr', 631995633, '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', 0, '2015-06-09', '', 'default.jpg', '', 0),
(26, 'Guillaume', 'MOREL', 1, '2 rue de la rose', 75, 'guimorel.gm@gmail.com', 987654321, '9cf95dacd226dcf43da376cdb6cbba7035218921', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, '2015-06-09', '', 'default.jpg', '', 0),
(30, 'Jérémy', 'Pineau', 0, '2 bis rue du long des bois', 78, 'jeremy.pineau@free.fr', 679456627, '9cf95dacd226dcf43da376cdb6cbba7035218921', '9cf95dacd226dcf43da376cdb6cbba7035218921', 0, '2015-06-11', '', 'default.jpg', '', 0),
(31, 'ABOUNGONE', 'Michèle', 0, '22 avenue de la porte', 75, 'ngouvictoire@yahoo.fr', 661454328, '2d2929e0f1bca99d9652924ce73b7969d33ff429', '2d2929e0f1bca99d9652924ce73b7969d33ff429', 0, '2015-06-11', '', 'default.jpg', '', 0),
(32, 'Thomas', 'Martin', 0, '69 avenue de la belle gabrielle', 94, 'thomas.martin1995@yahoo.fr', 651359548, '1d5f29d807ee33b3f42481108436c7026584cb3d', '1d5f29d807ee33b3f42481108436c7026584cb3d', 0, '2015-06-11', '', 'default.jpg', '', 0),
(33, 'colin', 'verneuil', 0, '6 avenue Richelieu', 13, 'colin@vernueil.fr', 785436543, 'a59e375e7e163c060ec5103e61f24bf008661a68', 'a59e375e7e163c060ec5103e61f24bf008661a68', 0, '2015-06-11', '', 'default.jpg', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
 ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `carte_de_france`
--
ALTER TABLE `carte_de_france`
 ADD PRIMARY KEY (`id_departement`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum_categorie`
--
ALTER TABLE `forum_categorie`
 ADD PRIMARY KEY (`cat_id`), ADD UNIQUE KEY `cat_ordr` (`cat_ordr`);

--
-- Index pour la table `forum_forum`
--
ALTER TABLE `forum_forum`
 ADD PRIMARY KEY (`forum_id`);

--
-- Index pour la table `forum_membres`
--
ALTER TABLE `forum_membres`
 ADD PRIMARY KEY (`membre_id`);

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
 ADD PRIMARY KEY (`post_id`);

--
-- Index pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
 ADD PRIMARY KEY (`topic_id`), ADD UNIQUE KEY `topic_last_post` (`topic_last_post`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`I_D`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `carte_de_france`
--
ALTER TABLE `carte_de_france`
MODIFY `id_departement` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `forum_categorie`
--
ALTER TABLE `forum_categorie`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `forum_forum`
--
ALTER TABLE `forum_forum`
MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `forum_membres`
--
ALTER TABLE `forum_membres`
MODIFY `membre_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `I_D` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;