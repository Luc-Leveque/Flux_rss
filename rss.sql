-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Novembre 2017 à 15:37
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rss`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `id_f` int(11) NOT NULL,
  `id_t` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_a` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_parution` datetime NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_a`, `titre`, `contenu`, `image`, `date_parution`, `link`) VALUES
(1, 'Nucléaire: des opposants à Bure émanent de «groupes organisés et très violents»', '<b>INTERVIEW - </b>Pierre-Marie Abadie, directeur général de l\'Andra, évoque l\'avenir du projet Cigéo, le futur site d\'enfouissement.', NULL, '2017-11-10 16:35:52', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00264-nucleaire-des-opposants-a-bure-emanent-de-groupes-organises-et-tres-violents.php'),
(2, 'Plus jamais malade ? Les révolutions de la médecine préventive', 'INFOGRAPHIES - Les dernières découvertes de la science en matière de médecine ont repoussé les frontières du possible. Au point que nombre de spécialistes pensent aujourd\'hui que chacun sera bientôt le principal acteur de sa santé grâce à une meilleure connaissance des techniques de prévention contre la maladie. C\'est la conviction de trois médecins dont les livres sont des phénomènes de librairie et qui nous livrent leurs prescriptions.', NULL, '2017-11-10 08:01:14', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00059-plus-jamais-malade-les-revolutions-de-la-medecine-preventive.php'),
(3, 'Frédéric Saldmann : «L\'hygiène de vie a été trop négligée»', 'INTERVIEW - Docteur en cardiologie et en nutrition, spécialiste d\'hygiène alimentaire, Frédéric Saldmann défend l\'application de moyens simples et naturels pour préserver sa santé.', NULL, '2017-11-10 08:00:41', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00053-frederic-saldmann-l-hygiene-de-vie-a-ete-trop-negligee.php'),
(4, 'Christophe André : «Choisir une démarche de santé active»', 'INTERVIEW - Le célèbre médecin psychiatre défend la méditation de pleine conscience comme outil d\'équilibre et de prévention.', NULL, '2017-11-10 08:00:32', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00050-christophe-andre-choisir-une-demarche-de-sante-active.php'),
(5, 'Giulia Enders : «Donnez de l\'énergie à votre intestin»', 'INTERVIEW - Auteur du livre à succès <i>Le Charme discret de l\'intestin</i>, dont une édition augmentée vient de paraître, le médecin allemand partage quelques conseils pour être attentif à sa santé sans tomber dans les pièges des informations non vérifiées.', NULL, '2017-11-10 08:00:21', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00046-giulia-enders-donnez-de-l-energie-a-votre-intestin.php'),
(6, 'Première carte de la mystérieuse pollution radioactive au ruthénium 106 en Europe', 'L\'Institut de radioprotection et de sûreté nucléaire a précisé l\'origine la plus probable, en Russie, des éléments radioactifs détectés dans l\'atmosphère de plusieurs pays d\'Europe début octobre.', NULL, '2017-11-10 05:00:34', 'http://www.lefigaro.fr/sciences/2017/11/10/01008-20171110ARTFIG00006-premiere-carte-de-la-pollution-radioactive-au-ruthenium-106-en-europe.php'),
(7, 'New Delhi dans l\'enfer de la pollution de l\'air', 'INFOGRAPHIE - Confrontée à des niveaux gravissimes de pollution, la capitale indienne voit le nombre de cas de cancer exploser.', NULL, '2017-11-09 17:50:24', 'http://www.lefigaro.fr/sciences/2017/11/09/01008-20171109ARTFIG00313-delhi-dans-l-enfer-de-la-pollution-de-l-air.php'),
(8, 'L\'Inde en passe de devenir le plus gros émetteur de dioxyde de soufre', 'La Chine aurait réduit ses émissions de SO2 (dioxyde de soufre) aux seuils prévus en 2030. Mais l\'Inde accuse une forte hausse de ce gaz, responsable notamment de pluies acides et de problèmes respiratoires chez l\'homme.', NULL, '2017-11-09 17:39:35', 'http://www.lefigaro.fr/sciences/2017/11/09/01008-20171109ARTFIG00305-l-inde-en-passe-de-devenir-le-plus-gros-emetteur-de-dioxyde-de-soufre.php'),
(9, 'Pas d\'accord européen pour prolonger l\'usage du glyphosate', 'VIDÉOS - La prolongation de cinq ans de la molécule dans l\'Union européenne n\'a pas obtenu la majorité qualifiée. Bruxelles va soumettre sa proposition à un comité d\'appel.', NULL, '2017-11-09 12:39:56', 'http://www.lefigaro.fr/sciences/2017/11/09/01008-20171109ARTFIG00166-pas-d-accord-europeen-pour-prolonger-l-usage-du-glyphosate.php'),
(10, 'Découverte d\'une gigantesque planète nichée au cœur de notre Voie lactée', 'Des astronomes ont découvert une planète treize fois plus lourde que Jupiter dans le «bulbe galactique».', NULL, '2017-11-09 09:46:16', 'http://www.lefigaro.fr/sciences/2017/11/09/01008-20171109ARTFIG00111-une-gigantesque-planete-nichee-au-coeur-de-notre-voie-lactee.php'),
(11, 'Des cellules d\'un genre nouveau découvertes dans un oeil de poisson', 'Le maurolique de Müller possède un type de cellule très particulier, qui combine les avantages des cônes et des bâtonnets, particulièrement bien adapté à la vision crépusculaire.', NULL, '2017-11-08 19:00:06', 'http://www.lefigaro.fr/sciences/2017/11/08/01008-20171108ARTFIG00316-des-cellules-d-un-genre-nouveau-decouvertes-dans-un-oeil-de-poisson.php'),
(12, 'Comment le sens des mots vient aux bébés', 'Plusieurs mois avant de savoir parler, les bébés mémorisent pendant leur sommeil tout le vocabulaire nouveau auquel ils sont exposés.', NULL, '2017-11-07 16:52:00', 'http://www.lefigaro.fr/sciences/2017/11/07/01008-20171107ARTFIG00250-comment-le-sens-des-mots-vient-aux-bebes.php'),
(13, 'La pyramide de Kheops comme vous ne l\'avez jamais vue', '<b>VIDÉO -</b> L\'expérience ScanPyramidsVR permet de visiter le plateau de Gizeh en réalité virtuelle. Nous avons testé un prototype installé dans le sous-sol de la Cité de l\'Architecture à Paris.', NULL, '2017-11-07 16:25:44', 'http://www.lefigaro.fr/sciences/2017/11/07/01008-20171107ARTFIG00233-la-pyramide-de-kheops-comme-vous-ne-l-avez-jamais-vu.php'),
(14, 'Contre la pollution à New Delhi, l\'espoir pourrait venir de l\'eau', 'EN IMAGES - Les autorités indiennes vont pulvériser de l\'eau contre le nuage toxique qui recouvre la capitale indienne depuis une semaine. <b>Respirer l\'air de la ville équivaudrait à fumer 44 cigarettes par jour.</b>', NULL, '2017-11-07 16:04:35', 'http://www.lefigaro.fr/sciences/2017/11/07/01008-20171107ARTFIG00222-pollution-new-delhi-en-etat-d-urgence-de-sante-publique.php'),
(15, 'Une nouvelle espèce de grand singe découverte (et déjà menacée d\'extinction)', 'EN IMAGES - Des analyses génétiques et morphologiques ont permis d\'identifier en Indonésie une troisième espèce d\'orangs-outans, distincte de celles de Sumatra et de Bornéo.', NULL, '2017-11-07 14:22:24', 'http://www.lefigaro.fr/sciences/2017/11/07/01008-20171107ARTFIG00173-une-nouvelle-espece-de-grand-singe-decouverte-et-deja-menacee-d-extinction.php'),
(16, 'Les perruches à collier empêchent-elles certains oiseaux de se nourrir aux mangeoires ?', 'La 4e édition de BirdLab, un vaste programme participatif de surveillance du comportement des oiseaux, débute le 15 novembre.', NULL, '2017-11-07 13:51:12', 'http://www.lefigaro.fr/sciences/2017/11/07/01008-20171107ARTFIG00158-les-perruches-a-collier-empechent-elles-certains-oiseaux-de-se-nourrir-aux-mangeoires.php'),
(17, 'Cancer : le microbiote est important pour l\'efficacité de l\'immunothérapie', 'Deux études, française et américaine, ont découvert l\'importance de certaines bactéries.', NULL, '2017-11-06 17:33:47', 'http://www.lefigaro.fr/sciences/2017/11/06/01008-20171106ARTFIG00257-cancer-le-microbiote-est-important-pour-l-efficacite-de-l-immunotherapie.php'),
(18, 'Une lignée de chercheurs nommée Curie', 'ENQUÊTE - Un colloque organisé par l\'Institut Curie, ce mardi à Paris, rend hommage à Marie Curie, à l\'occasion du 150e anniversaire de sa naissance. Une exposition sera ouverte dans la foulée au Panthéon. Ses petits-enfants, Pierre et Hélène, tous deux scientifiques de haut vol, racontent au <i>Figaro</i> la vie quotidienne de cette famille d\'exception.', NULL, '2017-11-06 16:39:36', 'http://www.lefigaro.fr/sciences/2017/11/06/01008-20171106ARTFIG00224-une-lignee-de-chercheurs-nommee-curie.php'),
(19, 'Avec le réchauffement climatique, des truffes cultivées pour la première fois en Grande-Bretagne', 'Changement climatique aidant, le précieux champignon pousse aujourd\'hui bien plus au nord.', NULL, '2017-11-06 16:28:52', 'http://www.lefigaro.fr/sciences/2017/11/06/01008-20171106ARTFIG00216-des-truffes-cultivees-en-grande-bretagne.php'),
(20, 'Des astéroïdes «sabotent» les images du télescope spatial Hubble', 'EN IMAGES - Les astronomes ont débusqué le passage de petits corps rocheux de notre Système solaire sur des images de galaxies extrêmement lointaines.', NULL, '2017-11-06 11:58:57', 'http://www.lefigaro.fr/sciences/2017/11/06/01008-20171106ARTFIG00130-des-asteroides-sabotent-les-images-du-telescope-spatial-hubble.php');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_c` int(11) NOT NULL,
  `id_a` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE `flux` (
  `id_f` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id_t` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id_t`, `nom`) VALUES
(5, 'theme'),
(6, 'math');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lvl` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `email`, `login`, `mdp`, `nom`, `prenom`, `telephone`, `adresse`, `date_inscription`, `lvl`) VALUES
(1, 'admin@gmail.com', 'admin', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'admin', 'admin', 'admin', 'admin', '2017-10-09 15:07:28', 0),
(2, 'test@gmail.com', 'test', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 'test', 'test', NULL, NULL, '2017-10-16 11:15:14', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`id_f`,`id_t`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_f` (`id_f`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_a`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `flux`
--
ALTER TABLE `flux`
  ADD PRIMARY KEY (`id_f`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_t`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `flux`
--
ALTER TABLE `flux`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
