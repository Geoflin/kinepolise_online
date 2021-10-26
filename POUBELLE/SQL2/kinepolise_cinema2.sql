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