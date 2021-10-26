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