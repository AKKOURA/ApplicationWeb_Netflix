-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 avr. 2020 à 19:44
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `netflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `Num_episode` int(11) NOT NULL,
  `titre` varchar(25) NOT NULL,
  `Refseries` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `series`
--

CREATE TABLE `series` (
  `Num_serie` int(11) NOT NULL,
  `Intitulé` varchar(200) NOT NULL,
  `Nombre_d’épisodes` int(11) NOT NULL,
  `Acteurs` varchar(500) DEFAULT NULL,
  `Année_de_sortie` int(4) DEFAULT NULL,
  `Réalisateur` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `series`
--

INSERT INTO `series` (`Num_serie`, `Intitulé`, `Nombre_d’épisodes`, `Acteurs`, `Année_de_sortie`, `Réalisateur`) VALUES
(1, 'Validé', 10, 'Hatik, Saïdou Camara, Brahim Bouhlel', 2020, 'Franck Gastambide, Charles Van Tieghem, Xavier Lacaille'),
(2, 'Élite', 16, ' Georgina Amorós, Itzan Escamilla, Miguel Bernardeau', 2018, 'Carlos Montero, Darío Madrona'),
(3, 'The Walking Dead', 139, 'Norman Reedus, Danai Gurira, Jeffrey Dean Morgan', 2010, 'Glen Mazzara, Frank Darabont, Scott M. Gimple'),
(4, 'Ozark', 20, 'Jason Bateman, Laura Linney, Sofia Hublitz', 2017, 'Bill Dubuque, Mark Williams (II)'),
(5, 'Good Girls', 23, 'Christina Hendricks, Retta, Mae Whitman', 2018, 'Jenna Bans'),
(6, 'Les 100', 84, 'Eliza Taylor, Paige Turco, Bob Morley', 2014, 'Jason Rothenberg'),
(7, 'VAMPIRES', 12, 'Oulaya Amamra, Suzanne Clément, Kate Moran', 2020, 'VAMPIRES'),
(8, 'Freud', 12, 'Oulaya Amamra, Suzanne Clément, Kate Moran', 2020, 'VAMPIRES'),
(9, 'Freud', 20, 'Robert Finster, Ella Rumpf, Georg Friedrich', 2020, 'Marvin Kren'),
(10, 'La Casa de Papel', 7, 'Álvaro Morte, Úrsula Corberó, Pedro Alonso', 2017, 'Álex Pina');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Tel` varchar(30) NOT NULL,
  `date_de_naissanse` date NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `Email`, `Prénom`, `Nom`, `Tel`, `date_de_naissanse`, `Password`) VALUES
(1, 'aniesseakkoura@gmail.com', 'agnes', 'Akkoura', '0755628249', '1999-05-06', 'ASDas12+'),
(2, 'badro@gmail.com', 'badro', 'billal', '0755728286', '1998-05-05', 'ASa12+'),
(3, 'maya@gmaio.com', 'salmi', 'billal', '0755758286', '1998-05-05', 'ghAS12+'),
(4, 'wisem@gmaio.com', 'sawisem', 'salhii', '0755753286', '1998-03-05', '909abc7f'),
(5, 'bihmen@gmaio.com', 'abde', 'rihan', '0755753286', '1998-03-04', '0abe2381'),
(6, 'soraya@gmaio.com', 'Soraya', 'bilaa', '0755783286', '1998-03-06', 'Aa1+23'),
(7, 'hinda@gmail.com', 'Hinda', 'Ait hamana', '0674839224', '1996-01-26', 'HIgh38+'),
(8, 'bilka@gmail.com', 'Belka', 'Sabi', '0564386213', '1997-01-07', 'AShj56%'),
(9, 'bilka@gmail.com', 'Belka', 'Sabi', '0564386213', '1997-01-07', 'ASas12+*'),
(10, 'kamel05@gmail.com', 'kamel', 'Bilai', '0654234576', '1999-05-06', 'KAmel05+'),
(11, 'baya04@gmail.com', 'Baya', 'Sabri', '0567983463', '1998-07-05', 'AGan12+*'),
(12, 'Bilal05@gmail.com', 'Bilal', 'Yahiaoui', '0557328563', '1995-06-06', 'Bilal05+');

-- --------------------------------------------------------

--
-- Structure de la table `visionner`
--

CREATE TABLE `visionner` (
  `RefEpisode` int(11) DEFAULT NULL,
  `Refutilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`Num_episode`),
  ADD KEY `cléE` (`Refseries`);

--
-- Index pour la table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`Num_serie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `visionner`
--
ALTER TABLE `visionner`
  ADD KEY `Q2` (`RefEpisode`),
  ADD KEY `q1` (`Refutilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `Num_episode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `series`
--
ALTER TABLE `series`
  MODIFY `Num_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `cléE` FOREIGN KEY (`Refseries`) REFERENCES `series` (`Num_serie`);

--
-- Contraintes pour la table `visionner`
--
ALTER TABLE `visionner`
  ADD CONSTRAINT `Q2` FOREIGN KEY (`RefEpisode`) REFERENCES `episodes` (`Num_episode`),
  ADD CONSTRAINT `q1` FOREIGN KEY (`Refutilisateur`) REFERENCES `utilisateur` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
