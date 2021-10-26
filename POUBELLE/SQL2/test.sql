--
-- Base de données : `stream`
DROP SCHEMA IF EXISTS stream;
CREATE SCHEMA stream;

CREATE TABLE stream.info_film (
  `Id` int(11) NOT NULL,
  `FilmName` varchar(250) NOT NULL,
  `Duree` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info_film`
--

INSERT INTO stream.info_film (`Id`, `FilmName`, `Duree`) VALUES
(2, 'Tron', '02:00:00'),
(3, 'Grand_Torino', '01:30:00'),
(15, 'Oblivion', '02:00:00'),
(19, 'test', '19:37:00');

-- --------------------------------------------------------

--
-- Structure de la table `password`
--

CREATE TABLE stream.password (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO stream.password (`Id`, `username`, `password`) VALUES
(1, 'john', 'ripples1947'),
(3, 'Billy', 'billy1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info_film`
--
ALTER TABLE stream.info_film
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `password`
--
ALTER TABLE stream.password
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info_film`
--
ALTER TABLE stream.info_film
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `password`
--
ALTER TABLE stream.password
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


--
-- Base de données : `stream_administrateur2`
DROP SCHEMA IF EXISTS stream_administrateur2;
CREATE SCHEMA stream_administrateur2;
--
--
-- Structure de la table `password`
--

CREATE TABLE stream_administrateur2.password (
  `Id` varchar(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO stream_administrateur2.password  (`Id`, `username`, `password`) VALUES
('1', 'admin', 'inputBox');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `password`
--
ALTER TABLE stream_administrateur2.password 
  ADD PRIMARY KEY (`Id`);
COMMIT;

--
-- Base de données : `stream_cinema1_2`
DROP SCHEMA IF EXISTS stream_cinema1_2;
CREATE SCHEMA stream_cinema1_2;
-- --------------------------------------------------------
--
-- Structure de la table `adresse`
--

CREATE TABLE stream_cinema1_2.adresse (
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO stream_cinema1_2.adresse (`adresse`) VALUES
("50 RTE d\'Arlon, 57100 Thionville");

-- --------------------------------------------------------

--
-- Structure de la table stream_cinema1_2.infos_cinema1
--

CREATE TABLE stream_cinema1_2.infos_cinema1 (
  `Id` int(11) NOT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_place` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_cinema1`
--

INSERT INTO stream_cinema1_2.infos_cinema1 (`Id`, `SalleName`, `Nombre_de_place`) VALUES
(2, 'Salle2', 50),
(3, 'Salle3', 1),
(10, 'Salle1', 25);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE stream_cinema1_2.reservation_client (
  `Id` int(11) NOT NULL,
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

INSERT INTO stream_cinema1_2.reservation_client (`Id`, `username`, `password`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`) VALUES
(713, 'Mike', '05104chess', 'Tron', '2021-10-17 18:26:00', '2021-10-17 19:25:00', 'Salle1');

-- --------------------------------------------------------

--
-- Structure de la table `seance_cinema1`
--

CREATE TABLE stream_cinema1_2.seance_cinema1 (
  `Id` int(11) NOT NULL,
  `FilmName` varchar(250) NOT NULL,
  `DateSeanceBegin` datetime DEFAULT NULL,
  `DateSeanceEnd` datetime DEFAULT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_reservation` int(11) DEFAULT NULL,
  `place_disponible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `seance_cinema1`
--

INSERT INTO stream_cinema1_2.seance_cinema1 (`Id`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`, `Nombre_de_reservation`, `place_disponible`) VALUES
(709, 'Oblivion', '2021-10-20 17:37:00', '2021-10-20 19:37:00', 'Salle2', 0, 50),
(713, 'Tron', '2021-10-17 18:26:00', '2021-10-17 19:25:00', 'Salle1', 1, 24),
(714, 'Grand_Torino', '2021-09-03 14:36:00', '2021-10-17 20:33:00', 'Salle2', 0, 50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos_cinema1`
--
ALTER TABLE stream_cinema1_2.infos_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation_client`
--
ALTER TABLE stream_cinema1_2.reservation_client
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `seance_cinema1`
--
ALTER TABLE stream_cinema1_2.seance_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos_cinema1`
--
ALTER TABLE stream_cinema1_2.infos_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `reservation_client`
--
ALTER TABLE stream_cinema1_2.reservation_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT pour la table `seance_cinema1`
--
ALTER TABLE stream_cinema1_2.seance_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;
COMMIT;


--
-- Base de données : `stream_cinema2_2`
DROP SCHEMA IF EXISTS stream_cinema2_2;
CREATE SCHEMA stream_cinema2_2;
-- --------------------------------------------------------
--
-- Structure de la table `adresse`
--

CREATE TABLE stream_cinema2_2.adresse (
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO stream_cinema2_2.adresse (`adresse`) VALUES
('50 AV de Saintignon, 54400 Longwy ');

-- --------------------------------------------------------

--
-- Structure de la table `infos_cinema1`
--

CREATE TABLE stream_cinema2_2.infos_cinema1 (
  `Id` int(11) NOT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_place` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_cinema1`
--

INSERT INTO stream_cinema2_2.infos_cinema1 (`Id`, `SalleName`, `Nombre_de_place`) VALUES
(12, 'Salle2', 25),
(14, 'Salle3', 50),
(15, 'Salle1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE stream_cinema2_2.reservation_client (
  `Id` int(11) NOT NULL,
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

INSERT INTO stream_cinema2_2.reservation_client (`Id`, `username`, `password`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`) VALUES
(712, 'Mike', '05104chess', 'Grand_Torino', '2021-10-20 19:36:00', '2021-10-20 21:06:00', 'Salle2');

-- --------------------------------------------------------

--
-- Structure de la table `seance_cinema1`
--

CREATE TABLE stream_cinema2_2.seance_cinema1 (
  `Id` int(11) NOT NULL,
  `FilmName` varchar(250) NOT NULL,
  `DateSeanceBegin` datetime DEFAULT NULL,
  `DateSeanceEnd` datetime DEFAULT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_reservation` int(11) DEFAULT NULL,
  `place_disponible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `seance_cinema1`
--

INSERT INTO stream_cinema2_2.seance_cinema1 (`Id`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`, `Nombre_de_reservation`, `place_disponible`) VALUES
(710, 'Tron', '2021-10-17 18:34:00', '2021-10-17 19:34:00', 'Salle1', 0, 1),
(711, 'Oblivion', '2021-10-18 18:48:00', '2021-10-18 20:48:00', 'Salle1', 0, 1),
(712, 'Grand_Torino', '2021-10-20 19:36:00', '2021-10-20 21:06:00', 'Salle2', 1, 24);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos_cinema1`
--
ALTER TABLE stream_cinema2_2.infos_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation_client`
--
ALTER TABLE stream_cinema2_2.reservation_client
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `seance_cinema1`
--
ALTER TABLE stream_cinema2_2.seance_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos_cinema1`
--
ALTER TABLE stream_cinema2_2.infos_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reservation_client`
--
ALTER TABLE stream_cinema2_2.reservation_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT pour la table `seance_cinema1`
--
ALTER TABLE stream_cinema2_2.seance_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=713;
COMMIT;

--
-- Base de données : `stream_kinepolise_client2`
DROP SCHEMA IF EXISTS stream_kinepolise_client2;
CREATE SCHEMA stream_kinepolise_client2;

-- --------------------------------------------------------

--
-- Structure de la table `info_client`
--

CREATE TABLE stream_kinepolise_client2.info_client (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info_client`
--

INSERT INTO stream_kinepolise_client2.info_client (`Id`, `username`, `password`) VALUES
(1, 'geoflink', 'yakojul1'),
(2, 'Mike', '05104chess'),
(5, 'veronique', '001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info_client`
--
ALTER TABLE stream_kinepolise_client2.info_client
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info_client`
--
ALTER TABLE stream_kinepolise_client2.info_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT; 