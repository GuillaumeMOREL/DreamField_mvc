-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Mai 2015 à 18:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dreamfield`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(11) NOT NULL,
  `categorie` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nom_produits` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text NOT NULL,
  `quantite` tinyint(11) NOT NULL,
  `prix` tinyint(11) NOT NULL,
  `date_offre` date NOT NULL,
  `nom_vendeurs` varchar(20) NOT NULL,
  `prenom_vendeurs` varchar(20) NOT NULL,
  `photo_offre` varchar(80) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `carte_de_france`
--

CREATE TABLE IF NOT EXISTS `carte_de_france` (
  `id_departement` int(10) NOT NULL AUTO_INCREMENT,
  `region` varchar(50) CHARACTER SET utf8 NOT NULL,
  `departement` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_departement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2223 ;

--
-- Contenu de la table `carte_de_france`
--

INSERT INTO `carte_de_france` (`id_departement`, `region`, `departement`) VALUES
(1, 'Rhône-Alpes', 'Ain'),
(2, 'Picardie', 'Aisne'),
(3, 'Auvergne', 'Allier'),
(4, 'Provence-Alpes-Côte d''Azur', 'Alpes de Hautes-Provence'),
(5, 'Provence-Alpes-Côte d''Azur', 'Hautes-Alpes'),
(6, 'Provence-Alpes-Côte-d''Azur', 'Alpes-Maritimes'),
(7, 'Rhône-Alpes', 'Ardèche'),
(8, 'Champagne-Ardenne', 'Ardennes'),
(9, 'Midi-Pyrénées', 'Ariège'),
(10, 'Champagne-Ardenne', 'Aube'),
(11, 'Languedoc-roussillon', 'Aude'),
(12, 'Midi-Pyrénées', 'Aveyron'),
(13, 'Provence-Alpes-Côte dAzur', 'Bouches-du-Rhône'),
(14, 'Basse-Normandie', 'Calvados'),
(15, 'Auvergne', 'Cantal'),
(16, 'Poitou-Charentes', 'Charente'),
(17, 'Poitou-Charentes', 'Charente-Maritimes'),
(18, 'Centre', 'Cher'),
(19, 'Limousin', 'Corrèze'),
(2222, 'Corse', 'Corse-du-Sud');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_produit` varchar(100) NOT NULL,
  `nom_produit` varchar(100) NOT NULL,
  `chemin_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

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
(53, 'legume', 'choux pommé', '/static/img/photo_fruit_legume/choux_pomme.jpg'),
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
(64, 'legume', 'chicorée', '/static/img/photo_fruit_legume/chicoree.jpg'),
(65, 'légume', 'mâche', '/static/img/photo_fruit_legume/mache.jpg'),
(66, 'légume', 'roquette', '/static/img/photo_fruit_legume/roquette.jpg'),
(67, 'legume', 'aubergine', '/static/img/photo_fruit_legume/aubergine.jpg'),
(68, 'légume', 'concombre', '/static/img/photo_fruit_legume/concombre.jpg'),
(69, 'légume', 'cornichon', '/static/img/photo_fruit_legume/cornichon.jpg'),
(70, 'légume', 'courge', '/static/img/photo_fruit_legume/courge.jpg'),
(71, 'légume', 'potiron', '/static/img/photo_fruit_legume/potiron.jpg'),
(72, 'legume', 'citrouille', '/static/img/photo_fruit_legume/citrouille.jpg'),
(73, 'légume', 'melon', '/static/img/photo_fruit_legume/melon.jpg'),
(74, 'légume', 'tomate', '/static/img/photo_fruit_legume/tomate.jpg'),
(75, 'légume', 'piment', '/static/img/photo_fruit_legume/piment.jpg'),
(76, 'légume', 'poivron', '/static/img/photo_fruit_legume/poivron.jpg'),
(77, 'fruit', 'banane plantain', '/static/img/photo_fruit_legume/banane_plantain.jpg'),
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

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sujet` int(11) NOT NULL,
  `titre` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contenu` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_sujet`, `titre`, `contenu`, `username`) VALUES
(1, 1, 'Aucune idée', 'Je ne sais pas du tout... :s', 'Tristan Martel'),
(2, 1, 'Moi je sais', 'Juste un lien -> openclassrooms.com :p', 'Ta maman'),
(3, 3, 'Chauuuuuuuddddd', 'Jsuis chaud vieu ! ;)', 'Mathurin Ramart'),
(4, 2, 'De bonnes pommes', 'Elles sont trop BONNES !!!! Tous des salopes ! <3', 'Paul Roger');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`id`, `titre`, `username`, `question`) VALUES
(1, 'Mon premier sujet', 'Mathurin', 'Comment on fait un forum ?'),
(2, 'Qualité des pommes', 'Thomas Martin', 'Vos pommes sont-elles de première fraicheur ?'),
(3, 'Un ptit CS ? :p', 'Guillaume Foix', 'ça vous dit une partie ?');

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordr` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordr` (`cat_ordr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

CREATE TABLE IF NOT EXISTS `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE IF NOT EXISTS `forum_message` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_genre` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `I_D` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 NOT NULL,
  `numero_departement` int(2) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` int(15) NOT NULL,
  `pass` varchar(40) CHARACTER SET utf8 NOT NULL,
  `passverif` varchar(20) CHARACTER SET utf8 NOT NULL,
  `conditions` tinyint(1) NOT NULL,
  `date_inscription` date NOT NULL,
  `civilite` varchar(15) CHARACTER SET utf8 NOT NULL,
  `photo_profil` varchar(80) NOT NULL,
  PRIMARY KEY (`I_D`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`I_D`, `prenom`, `nom`, `adresse`, `numero_departement`, `mail`, `tel`, `pass`, `passverif`, `conditions`, `date_inscription`, `civilite`, `photo_profil`) VALUES
(1, 'kjjkh', 'mokkhjh', 'jhhjkhkj', 78, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', ''),
(2, 'JHJHI', 'LHKHIUI', 'KJHKHHUI', 76, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', ''),
(3, '', 'huyiuy', 'uyiuuyi', 75, 'ngoubivr@yahoo.fr', 989878668, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', ''),
(4, 'UYYUTU', 'UYTUTU', 'UYTYUY', 56, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', ''),
(5, 'uytyut', 'jyutyt', 'kuuiyiy', 76056, 'ngoru@hdg', 661454328, 'ZZZZZZ', 'FFFFFF', 0, '0000-00-00', '', ''),
(6, '', 'NFEOEJOI', 'OSIRTU', 12345, 'ngoubivr@yahoo.frJ', 989878668, 'aaaaaa', 'aaaaaa', 0, '0000-00-00', '', ''),
(7, 'michÃ¨le', 'Aboungone', '22 avenue de la porte  ', 34567, 'ngouvictoire@yahoo.fr', 661454328, 'AAAAAAA', 'AAAAAAA', 0, '0000-00-00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
