<?php
//On Vérifie qu'il n'y ait pas de films en double
foreach ($pdo_kinepolise->query('SELECT FilmName FROM `info_film` WHERE `FilmName` = "'.$_POST['FilmName'].'" ', PDO::FETCH_ASSOC) as $info_film_double) {
  $info_film_double[]= $info_film_double['FilmName'];
    //on compte nombre de films en double
    $countInfo_film_double= count($info_film_double);
  };

                //On insére valeure formulaire sous condition
                if (isset($countInfo_film_double)<1){
                if ($pdo_kinepolise->exec('INSERT INTO info_film (FilmName, Duree) VALUES ("'. $_POST['FilmName'] . '", "' . $_POST['Duree'] .'");') !== false){};
                } else {
                  echo "Film en double !";
                };