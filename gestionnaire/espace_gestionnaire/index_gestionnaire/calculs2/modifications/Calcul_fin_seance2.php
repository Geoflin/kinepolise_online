<?php
//On récupère la durée du film
foreach ($pdo_kinepolise->query('SELECT Duree FROM `info_film` WHERE FilmName LIKE "'.$_POST['FilmName'].'" ', PDO::FETCH_ASSOC) as $duree) {
  $dureeFilm= $duree['Duree'];
};

  //On récupère la date de la séance
foreach ($pdo_kinepolise->query('SELECT DateSeanceBegin FROM `kinepolise_cinema2_seance_cinema1` WHERE `seance_cinema1`.`Id` = "'.$Id_modif.'" ', PDO::FETCH_ASSOC) as $DateSeanceBegin) {
  $DateSeanceBegin1= $DateSeanceBegin['DateSeanceBegin'];
};

//on explose durée du film en heure et minute
$explosion= explode(":", $dureeFilm);
$heure= $explosion[0];
$minute = $explosion[1];

//On ajoute les heures et minutes au début du film
$DateFinSeance= date('Y-m-d H:i:s',strtotime("+$heure hours $minute minutes", strtotime($DateSeanceBegin1)));

$conn = new PDO('mysql:dbname=kinepolise;host=localhost', 'root', '');
$conn->exec("SET CHARACTER SET utf8");

$sql = "UPDATE `kinepolise_cinema2_seance_cinema1` SET `DateSeanceEnd` = '".$DateFinSeance."' WHERE `seance_cinema1`.`Id` = '".$Id_modif."' ";
$count = $pdo_kinepolise->exec($sql);

$conn = null;