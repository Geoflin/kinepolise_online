--
-- Base de données : `stream_administrateur2`
DROP SCHEMA IF EXISTS stream_administrateur2;
CREATE SCHEMA stream_administrateur2;
--
--
-- Structure de la table `password`
--

CREATE TABLE stream_administrateur2.password1 (
  `Id` varchar(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `password`
--

INSERT INTO stream_administrateur2.password1  (`Id`, `username`, `password`) VALUES
('1', 'admin', 'inputBox');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `password1`
--
ALTER TABLE stream_administrateur2.password1 
  ADD PRIMARY KEY (`Id`);
COMMIT;

