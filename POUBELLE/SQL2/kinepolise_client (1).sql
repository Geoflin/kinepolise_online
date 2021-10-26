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