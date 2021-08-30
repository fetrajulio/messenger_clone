-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 août 2021 à 09:42
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mess`
--

-- --------------------------------------------------------

--
-- Structure de la table `amie`
--

DROP TABLE IF EXISTS `amie`;
CREATE TABLE IF NOT EXISTS `amie` (
  `idAmi` int(11) NOT NULL AUTO_INCREMENT,
  `id_1` int(11) NOT NULL,
  `id_2` int(11) NOT NULL,
  PRIMARY KEY (`idAmi`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `amie`
--

INSERT INTO `amie` (`idAmi`, `id_1`, `id_2`) VALUES
(48, 19, 16),
(47, 17, 19),
(46, 19, 17),
(45, 14, 18),
(44, 18, 14),
(43, 15, 18),
(42, 18, 15),
(41, 16, 18),
(40, 18, 16),
(39, 17, 18),
(38, 18, 17),
(37, 14, 17),
(36, 17, 14),
(35, 15, 17),
(34, 17, 15),
(33, 16, 17),
(32, 17, 16),
(31, 14, 16),
(30, 16, 14),
(29, 15, 16),
(28, 16, 15),
(27, 14, 15),
(26, 15, 14),
(49, 16, 19),
(50, 19, 15),
(51, 15, 19),
(52, 19, 14),
(53, 14, 19),
(54, 19, 18),
(55, 18, 19),
(56, 20, 17),
(57, 17, 20),
(58, 20, 16),
(59, 16, 20),
(60, 20, 15),
(61, 15, 20),
(62, 20, 14),
(63, 14, 20),
(64, 20, 18),
(65, 18, 20),
(66, 20, 19),
(67, 19, 20),
(68, 21, 17),
(69, 17, 21),
(70, 21, 16),
(71, 16, 21),
(72, 21, 15),
(73, 15, 21),
(74, 21, 14),
(75, 14, 21),
(76, 21, 18),
(77, 18, 21),
(78, 21, 19),
(79, 19, 21),
(80, 21, 20),
(81, 20, 21),
(82, 22, 17),
(83, 17, 22),
(84, 22, 16),
(85, 16, 22),
(86, 22, 15),
(87, 15, 22),
(88, 22, 14),
(89, 14, 22),
(90, 22, 18),
(91, 18, 22),
(92, 22, 19),
(93, 19, 22),
(94, 22, 20),
(95, 20, 22),
(96, 22, 21),
(97, 21, 22);

-- --------------------------------------------------------

--
-- Structure de la table `mess`
--

DROP TABLE IF EXISTS `mess`;
CREATE TABLE IF NOT EXISTS `mess` (
  `idM` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idM`, `message`, `a1`, `a2`) VALUES
(30, 'gtgiuyoiyhio', 16, 15),
(31, 'ghjh', 16, 15),
(29, 'fsdfsdfsdtg', 16, 15),
(28, 'gdfgdfg', 15, 16),
(27, 'ef mlam tsar ka', 15, 16),
(26, 'ef vita ny projet ao', 16, 15),
(25, 'ao tsara ka!! in malaza ony!!!!!', 16, 15),
(24, 'inona ny vaovao anao ', 16, 14),
(23, 'de aon lty', 15, 16),
(22, 'Bonjour!!! i Tsanta i Meva ian ito', 14, 16);

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`idP`, `Nom`, `email`, `mdp`) VALUES
(17, 'Armel', 'armel@gmail.com', 'armel'),
(16, 'tsanta', 'tsanta@gmail.com', 'tsanta'),
(15, 'julio', 'julio@gmail.com', 'julio'),
(14, 'meva ', 'meva@gmail.com', 'meva'),
(18, 'tojo', 'tojo@gmail.com', 'tojo'),
(19, 'manda', 'manda@gmail.com', 'manda'),
(20, 'bezara', 'bezara@gmail.com', 'bezara'),
(21, 'marinah', 'marinah@gmail.com', 'marinah'),
(22, 'dado', 'dado@gmail.com', 'dado');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
