-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 27 Mai 2015 à 18:04
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `dreamfield`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
`I_D` int(11) NOT NULL,
  `prenom` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`I_D`, `prenom`, `nom`, `adresse`, `numero_departement`, `mail`, `tel`, `pass`, `passverif`, `conditions`, `date_inscription`, `civilite`, `photo_profil`, `cle`, `actif`) VALUES
(1, 'kjjkh', 'mokkhjh', 'jhhjkhkj', 78, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', '', '', 0),
(2, 'JHJHI', 'LHKHIUI', 'KJHKHHUI', 76, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', '', '', 0),
(3, '', 'huyiuy', 'uyiuuyi', 75, 'ngoubivr@yahoo.fr', 989878668, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', '', '', 0),
(4, 'UYYUTU', 'UYTUTU', 'UYTYUY', 56, 'ngoubivr@yahoo.fr', 661454328, 'AAAAAA', 'AAAAAA', 0, '0000-00-00', '', '', '', 0),
(5, 'uytyut', 'jyutyt', 'kuuiyiy', 76056, 'ngoru@hdg', 661454328, 'ZZZZZZ', 'FFFFFF', 0, '0000-00-00', '', '', '', 0),
(6, '', 'NFEOEJOI', 'OSIRTU', 12345, 'ngoubivr@yahoo.frJ', 989878668, 'aaaaaa', 'aaaaaa', 0, '0000-00-00', '', '', '', 0),
(7, 'michÃ¨le', 'Aboungone', '22 avenue de la porte  ', 34567, 'ngouvictoire@yahoo.fr', 661454328, 'AAAAAAA', 'AAAAAAA', 0, '0000-00-00', '', '', '', 0),
(8, 'zfbkza', 'test', 'unde', 90, 'a@mail.com', 123456789, '3d978f314200eb1bda01449bd477c46a816a9f06', '3d978f314200eb1bda01', 0, '0000-00-00', '', '', '', 0),
(9, 'azert', 'eeeee', 'eeeiii', 90, 'karen09@hotmail.fr', 631995633, '3d978f314200eb1bda01449bd477c46a816a9f06', '3d978f314200eb1bda01449bd477c46a816a9f06', 0, '0000-00-00', '', '', '', 0),
(10, 'azert', 'eeeee', 'eeeiii', 90, 'karen09@hotmail.fr', 631995633, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '0000-00-00', '', '', '', 0),
(11, 'azert', 'eeeee', 'eeeiii', 90, 'karen09@hotmail.fr', 631995633, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '0000-00-00', '', '', '', 0),
(12, 'azert', 'eeeee', 'eeeiii', 90, 'karen09@hotmail.fr', 631995633, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '0000-00-00', '', '', '', 0),
(13, 'azert', 'eeeee', 'eeeiii', 90, 'karen09@hotmail.fr', 631995633, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '0000-00-00', '', '', '', 0),
(14, 'Maria', 'keena', '2 rue bis', 22, 'maria@keena.fr', 677889988, '3d978f314200eb1bda01449bd477c46a816a9f06', '3d978f314200eb1bda01449bd477c46a816a9f06', 0, '0000-00-00', '', '', '', 0),
(15, 'pikkk', 'mikkk', '2 rue pikkk', 45, 'pikkk@mikkk.fr', 123456789, '02bf8e1953a8e9439392d2dfe7ead6d440cdc78e', '02bf8e1953a8e9439392d2dfe7ead6d440cdc78e', 0, '0000-00-00', '', '', '', 0),
(16, 'mamaa', 'papaa', '2 rue pikkk', 45, 'mama@papa.fr', 123456789, '0d72c67e0ddd9de5fcb7c01b7160ddf901d85d50', '0d72c67e0ddd9de5fcb7c01b7160ddf901d85d50', 0, '0000-00-00', '', '', '', 0),
(17, 'nanaa', 'papaa', '2 rue pikkk', 45, 'nana@papa.fr', 123456789, '9e434c8a3f2b2c34bcc9558b5bc9180c4943eaca', '9e434c8a3f2b2c34bcc9558b5bc9180c4943eaca', 0, '0000-00-00', '', '', '', 0),
(18, 'guigui', 'ooooo', 'oooo rue ', 87, 'guigui@ooooo.fr', 2147483647, '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 0, '0000-00-00', '', '', '', 0),
(19, 'kikiki', 'lilili', 'kikiki@lilili.fr', 12, 'kiki@lili.fr', 2147483647, '94cf54a9647342d64a1ab525963d4efe622c11f6', '94cf54a9647342d64a1ab525963d4efe622c11f6', 0, '0000-00-00', '', '', '', 0),
(20, 'marina', 'marina', 'marina', 56, 'marina@marina.fr', 631995633, '275978859cd7d885a7df1c4dca6a36445a178818', '275978859cd7d885a7df1c4dca6a36445a178818', 0, '0000-00-00', '', '', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`I_D`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `I_D` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;