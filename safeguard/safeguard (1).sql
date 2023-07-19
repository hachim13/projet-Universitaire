-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 16 juil. 2023 à 13:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `safeguard`
--

-- --------------------------------------------------------

--
-- Structure de la table `content_about`
--

DROP TABLE IF EXISTS `content_about`;
CREATE TABLE IF NOT EXISTS `content_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content_about`
--

INSERT INTO `content_about` (`id`, `title`, `description`) VALUES
(3, 'ABOUT US', 'We Believe We Can Solve The Diabetes\r\nProblem In Mauritius\r\nDiabetes is a global epidemic that affects thousands of people in Mauritius. However, we are fighting this debilitating disease with dedication and a relentless drive to succeed. Our goal is to protect and empower people with diabetes. With a strong focus on education, prevention and support, we are at the forefront of the fight against diabetes and works tirelessly to create a world where everyone can live healthy, happy and fulfilling lives. Join us today and help us safeguard the future of thousands of people !');

-- --------------------------------------------------------

--
-- Structure de la table `content_confidentialite`
--

DROP TABLE IF EXISTS `content_confidentialite`;
CREATE TABLE IF NOT EXISTS `content_confidentialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content_confidentialite`
--

INSERT INTO `content_confidentialite` (`id`, `title`, `description`) VALUES
(3, 'Politique de confidentialité', 'Diabetes is a global epidemic that affects thousands of people in Mauritius. However, we are fighting this debilitating disease with dedication and a relentless drive to succeed. Our goal is to protect and empower people with diabetes. With a strong focus on education, prevention and support, we are at the forefront of the fight against diabetes and works tirelessly to create a world where everyone can live healthy, happy and fulfilling lives. Join us today and help us safeguard the future of thousands of people !');

-- --------------------------------------------------------

--
-- Structure de la table `content_home`
--

DROP TABLE IF EXISTS `content_home`;
CREATE TABLE IF NOT EXISTS `content_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content_home`
--

INSERT INTO `content_home` (`id`, `title`, `description`) VALUES
(1, 'Sample', 'Sample text. Click to select the text box. Click again or double click to start editing the text. Dictum non consectetur a erat nam at. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Tellus mauris a diam maecenas sed enim ut sem. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Pretium nibh ipsum consequat nisl vel pretium. In eu mi bibendum neque egestas congue. Vitae ultricies leo integer malesuada nunc. Nibh praesent tristique magna sit amet purus gravida. Diam volutpat commodo sed egestas. Gravida dictum fusce ut placerat orci nulla pellentesque. Ornare massa eget egestas purus viverra. Morbi enim nunc faucibus a pellentesque sit amet porttitor. Mattis pellentesque id nibh tortor id aliquet lectus proin nibh. Molestie nunc non blandit massa enim nec dui. Felis imperdiet proin fermentum leo vel orci porta. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. '),
(2, 'Sample Headline', 'Sample text. Click to select the text box. Click again or double click to start editing the text. Dictum non consectetur a erat nam at. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Tellus mauris a diam maecenas sed enim ut sem. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Pretium nibh ipsum consequat nisl vel pretium. In eu mi bibendum neque egestas congue. Vitae ultricies leo integer malesuada nunc. Nibh praesent tristique magna sit amet purus gravida. Diam volutpat commodo sed egestas. Gravida dictum fusce ut placerat orci nulla pellentesque. Ornare massa eget egestas purus viverra. Morbi enim nunc faucibus a pellentesque sit amet porttitor. Mattis pellentesque id nibh tortor id aliquet lectus proin nibh. Molestie nunc non blandit massa enim nec dui. Felis imperdiet proin fermentum leo vel orci porta. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. ');

-- --------------------------------------------------------

--
-- Structure de la table `tracker`
--

DROP TABLE IF EXISTS `tracker`;
CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `sugar` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tracker`
--

INSERT INTO `tracker` (`id`, `date`, `time`, `sugar`) VALUES
(1, '2023-07-19', '20:32', 10),
(2, '2023-07-23', '18:38', 15),
(3, '2023-07-22', '14:22', 10),
(4, '2023-07-28', '14:23', 12),
(5, '2023-06-27', '17:24', 20),
(6, '2023-07-21', '13:16', 19),
(7, '2023-07-21', '13:14', 16);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mot_de_passe`) VALUES
(1, 'ali@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
