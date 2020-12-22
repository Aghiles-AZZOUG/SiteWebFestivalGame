-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 08 déc. 2019 à 11:06
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `remember_token`) VALUES
(9, 'azzoug', 'azzougaghiles@hotmail.com', '$2y$10$VRhem/7RcBfeLnvpnWyGaO8IDm6UbW9aqKfwpYI6v67QLoxsPHP36', 'fN9xuxnKXhZxwvBUyT3Dx77FIsx0MivO99eUdvYx4WDEbiqBMCmbzR8LA5a6', NULL, ''),
(3, 'samuel', 'nan@nan.fr', '$2y$10$zQJALBY5HyXHXRZzwYGYQuzua6OGyZFqNGh43XbKZ.wGZfkOw2t2S', 'Wgy4GViGFXeVyHEzy9fVAsT1HDHq57zguH8vgIgBqLHrHlNNUEhfNm4qBIf3', NULL, ''),
(6, 'jeane', 'jeane@labrune.com', '$2y$10$P.vFmDn6BzU1HlO/JiYYO.xLzCS9JeCX7hFiHz5la89Y1xXwOxIkq', 'NT1bkeMrqCinvaosB8l6CZ6CISqvr7hTwNylOizlbm1KaYT0Tsd1eC2XilOj', NULL, ''),
(10, 'go', 'go@google.com', '$2y$10$dVXZ.XqtZa53Y/gBX3.JB.rJ./mWy2.gf930i254TFZyTLkPHhqJi', '4oPNz5JOAJvTdiAxWk59oFfEHs7zKee33IAHNmsXJgk4DEM3ljbrL1XtPTUZ', NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
