-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 oct. 2021 à 17:00
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kinepolise_client`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE `reservation_client` (
  `Id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `FilmName` varchar(250) NOT NULL,
  `DateSeanceBegin` datetime DEFAULT NULL,
  `DateSeanceEnd` datetime DEFAULT NULL,
  `SalleName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation_client`
--

INSERT INTO `reservation_client` (`Id`, `username`, `password`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`) VALUES
(706, 'Mike', '05104chess', 'Tron', '2021-10-16 18:31:00', '2021-10-16 19:31:00', 'Salle1'),
(708, 'Mike', '05104chess', 'Grand_Torino', '2021-10-17 19:03:00', '2021-10-17 20:33:00', 'Salle3'),
(713, 'geoflink', 'yakojul1', 'Tron', '2021-10-17 18:26:00', '2021-10-17 19:25:00', 'Salle1'),
(709, 'geoflink', 'yakojul1', 'Oblivion', '2021-10-20 17:37:00', '2021-10-20 19:37:00', 'Salle2'),
(714, 'Mike', '05104chess', 'Grand_Torino', '2021-09-03 14:36:00', '2021-10-17 20:33:00', 'Salle2'),
(714, 'geoflink', 'yakojul1', 'Grand_Torino', '2021-09-03 14:36:00', '2021-10-17 20:33:00', 'Salle2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
