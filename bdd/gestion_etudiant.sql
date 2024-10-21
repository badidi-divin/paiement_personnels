-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 oct. 2023 à 12:07
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `matricule` varchar(15) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `postnom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_embauche` varchar(50) NOT NULL,
  `type_contrat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`matricule`, `nom`, `postnom`, `prenom`, `sexe`, `tel`, `adresse`, `date_embauche`, `type_contrat`) VALUES
('1001', 'BADIDI', 'KAZIMALI', 'DIVIN', 'M', '243817767357', 'KINSHASA', '2020', 'CDD');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(11) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `anciennete` varchar(10) NOT NULL,
  `nbre_prest` int(11) NOT NULL,
  `sal_journ` int(11) NOT NULL,
  `salbrut` int(11) NOT NULL,
  `soinmed` int(11) NOT NULL,
  `prime` int(11) NOT NULL,
  `salnet` int(11) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `matricule`, `anciennete`, `nbre_prest`, `sal_journ`, `salbrut`, `soinmed`, `prime`, `salnet`, `dates`) VALUES
(2, '1001', '4', 24, 10, 240, 2, 0, 235, '2023-09-13 10:32:08'),
(3, '1002', '4', 18, 9, 162, 2, 0, 159, '2023-09-13 12:02:06'),
(4, '1003', '17', 20, 20, 400, 2, 50, 442, '2023-09-13 12:17:08');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `password`) VALUES
(1, 'grace', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'moise', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'constant', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'divin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `salaire`
--
ALTER TABLE `salaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
