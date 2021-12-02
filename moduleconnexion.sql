-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 déc. 2021 à 15:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE
IF NOT EXISTS `utilisateurs`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `login` varchar
(255) NOT NULL,
  `prenom` varchar
(255) NOT NULL,
  `nom` varchar
(255) NOT NULL,
  `password` varchar
(255) NOT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`
id`,
`login
`, `prenom`, `nom`, `password`) VALUES
(1, 'dd', 'dd', 'dd', '$2y$12$CBVf07iyk5p5k0zc4JoSueXqfSrXZ3pgjtni7qH14AQWLcaslrkvy'),
(2, 'aa', 'aa', 'aa', '$2y$12$fU4Q08ywXsKYTWmIxT23tuizavtSs/Cio2uMd2V2DC77ZF2h0niJG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
