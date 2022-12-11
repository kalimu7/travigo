-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 déc. 2022 à 18:01
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testoop`
--

-- --------------------------------------------------------

--
-- Structure de la table `oopers`
--

CREATE TABLE `oopers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `familyname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `oopers`
--

INSERT INTO `oopers` (`id`, `name`, `familyname`, `email`, `password`, `confirm_password`) VALUES
(1, 'karim', 'mahjour', 'hello@gmail.com', 'aze', ' '),
(2, 'zeczec', 'zcecz', 'czecz@gmail.com', 'aqw', 'aqw');

-- --------------------------------------------------------

--
-- Structure de la table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `travel`
--

INSERT INTO `travel` (`id`, `destination`, `price`, `description`, `image`) VALUES
(5, 'ahmed', 'cze', '12', 'images.jpeg'),
(6, 'meknes', 'middle of morroco', '120', 'background.jpg'),
(7, 'karim', 'mahjour', '1234', 'images.jpeg'),
(8, 'ahmed', 'europ', 'czec', 'download.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `oopers`
--
ALTER TABLE `oopers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `oopers`
--
ALTER TABLE `oopers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
