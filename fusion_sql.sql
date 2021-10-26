--
-- Base de données : `kinepolise`
DROP SCHEMA IF EXISTS kinepolise;
CREATE SCHEMA kinepolise;

CREATE TABLE kinepolise.info_film (
  `Id` int(11) NOT NULL,
  `FilmName` varchar(250) NOT NULL,
  `Duree` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info_film`
--

INSERT INTO kinepolise.info_film (`Id`, `FilmName`, `Duree`) VALUES
(2, 'Tron', '02:00:00'),
(3, 'Grand_Torino', '01:30:00'),
(15, 'Oblivion', '02:00:00'),
(19, 'test', '19:37:00');

-- --------------------------------------------------------

--
-- Structure de la table `password`
--

CREATE TABLE kinepolise.password (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO kinepolise.password (`Id`, `username`, `password`) VALUES
(1, 'john', 'ripples1947'),
(3, 'Billy', 'billy1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info_film`
--
ALTER TABLE kinepolise.info_film
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `password`
--
ALTER TABLE kinepolise.password
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info_film`
--
ALTER TABLE kinepolise.info_film
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `password`
--
ALTER TABLE kinepolise.password
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


--
-- Base de données : `kinepolise_administrateur`
DROP SCHEMA IF EXISTS kinepolise_administrateur;
CREATE SCHEMA kinepolise_administrateur;
--
--
-- Structure de la table `password`
--

CREATE TABLE kinepolise_administrateur.password (
  `Id` varchar(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO kinepolise_administrateur.password  (`Id`, `username`, `password`) VALUES
('1', 'admin', 'inputBox');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `password`
--
ALTER TABLE kinepolise_administrateur.password 
  ADD PRIMARY KEY (`Id`);
COMMIT;

--
-- Base de données : `kinepolise_cinema1`
DROP SCHEMA IF EXISTS kinepolise_cinema1;
CREATE SCHEMA kinepolise_cinema1;
-- --------------------------------------------------------
--
-- Structure de la table `adresse`
--

CREATE TABLE kinepolise_cinema1.adresse (
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO kinepolise_cinema1.adresse (`adresse`) VALUES
("50 RTE d\'Arlon, 57100 Thionville");

-- --------------------------------------------------------

--
-- Structure de la table kinepolise_cinema1_2.infos_cinema1
--

CREATE TABLE kinepolise_cinema1.infos_cinema1 (
  `Id` int(11) NOT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_place` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_cinema1`
--

INSERT INTO kinepolise_cinema1.infos_cinema1 (`Id`, `SalleName`, `Nombre_de_place`) VALUES
(2, 'Salle2', 50),
(3, 'Salle3', 1),
(10, 'Salle1', 25);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE kinepolise_cinema1.reservation_client (
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

INSERT INTO kinepolise_cinema1.reservation_client (`Id`, `username`, `password`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`) VALUES
(713, 'Mike', '05104chess', 'Tron', '2021-10-17 18:26:00', '2021-10-17 19:25:00', 'Salle1');

-- --------------------------------------------------------

--
-- Structure de la table `seance_cinema1`
--

CREATE TABLE kinepolise_cinema1.seance_cinema1 (
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

INSERT INTO kinepolise_cinema1.seance_cinema1 (`Id`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`, `Nombre_de_reservation`, `place_disponible`) VALUES
(709, 'Oblivion', '2021-10-20 17:37:00', '2021-10-20 19:37:00', 'Salle2', 0, 50),
(713, 'Tron', '2021-10-17 18:26:00', '2021-10-17 19:25:00', 'Salle1', 1, 24),
(714, 'Grand_Torino', '2021-09-03 14:36:00', '2021-10-17 20:33:00', 'Salle2', 0, 50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos_cinema1`
--
ALTER TABLE kinepolise_cinema1.infos_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation_client`
--
ALTER TABLE kinepolise_cinema1.reservation_client
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `seance_cinema1`
--
ALTER TABLE kinepolise_cinema1.seance_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos_cinema1`
--
ALTER TABLE kinepolise_cinema1.infos_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `reservation_client`
--
ALTER TABLE kinepolise_cinema1.reservation_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT pour la table `seance_cinema1`
--
ALTER TABLE kinepolise_cinema1.seance_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;
COMMIT;


--
-- Base de données : `kinepolise_cinema2`
DROP SCHEMA IF EXISTS kinepolise_cinema2;
CREATE SCHEMA kinepolise_cinema2;
-- --------------------------------------------------------
--
-- Structure de la table `adresse`
--

CREATE TABLE kinepolise_cinema2.adresse (
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO kinepolise_cinema2.adresse (`adresse`) VALUES
('50 AV de Saintignon, 54400 Longwy ');

-- --------------------------------------------------------

--
-- Structure de la table `infos_cinema1`
--

CREATE TABLE kinepolise_cinema2.infos_cinema1 (
  `Id` int(11) NOT NULL,
  `SalleName` varchar(250) DEFAULT NULL,
  `Nombre_de_place` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_cinema1`
--

INSERT INTO kinepolise_cinema2.infos_cinema1 (`Id`, `SalleName`, `Nombre_de_place`) VALUES
(12, 'Salle2', 25),
(14, 'Salle3', 50),
(15, 'Salle1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE kinepolise_cinema2.reservation_client (
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

INSERT INTO kinepolise_cinema2.reservation_client (`Id`, `username`, `password`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`) VALUES
(712, 'Mike', '05104chess', 'Grand_Torino', '2021-10-20 19:36:00', '2021-10-20 21:06:00', 'Salle2');

-- --------------------------------------------------------

--
-- Structure de la table `seance_cinema1`
--

CREATE TABLE kinepolise_cinema2.seance_cinema1 (
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

INSERT INTO kinepolise_cinema2.seance_cinema1 (`Id`, `FilmName`, `DateSeanceBegin`, `DateSeanceEnd`, `SalleName`, `Nombre_de_reservation`, `place_disponible`) VALUES
(710, 'Tron', '2021-10-17 18:34:00', '2021-10-17 19:34:00', 'Salle1', 0, 1),
(711, 'Oblivion', '2021-10-18 18:48:00', '2021-10-18 20:48:00', 'Salle1', 0, 1),
(712, 'Grand_Torino', '2021-10-20 19:36:00', '2021-10-20 21:06:00', 'Salle2', 1, 24);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos_cinema1`
--
ALTER TABLE kinepolise_cinema2.infos_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation_client`
--
ALTER TABLE kinepolise_cinema2.reservation_client
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `seance_cinema1`
--
ALTER TABLE kinepolise_cinema2.seance_cinema1
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos_cinema1`
--
ALTER TABLE kinepolise_cinema2.infos_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reservation_client`
--
ALTER TABLE kinepolise_cinema2.reservation_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT pour la table `seance_cinema1`
--
ALTER TABLE kinepolise_cinema2.seance_cinema1
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=713;
COMMIT;

--
-- Base de données : `kinepolise_client`
DROP SCHEMA IF EXISTS kinepolise_client;
CREATE SCHEMA kinepolise_client;

-- --------------------------------------------------------

--
-- Structure de la table `info_client`
--

CREATE TABLE kinepolise_client.info_client (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info_client`
--

INSERT INTO kinepolise_client.info_client (`Id`, `username`, `password`) VALUES
(1, 'geoflink', 'yakojul1'),
(2, 'Mike', '05104chess'),
(5, 'veronique', '001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info_client`
--
ALTER TABLE kinepolise_client.info_client
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info_client`
--
ALTER TABLE kinepolise_client.info_client
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;