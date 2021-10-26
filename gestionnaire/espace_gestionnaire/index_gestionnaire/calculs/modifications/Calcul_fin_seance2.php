<?php
//On récupère la durée du film
foreach ($pdo_kinepolise->query('SELECT Duree FROM `info_film` WHERE FilmName LIKE "'.$_POST['FilmName'].'" ', PDO::FETCH_ASSOC) as $duree) {
  $dureeFilm= $duree['Duree'];
};

  //On récupère la date de la séance
foreach ($pdo_kinepolise->query('SELECT DateSeanceBegin FROM `kinepolise_cinema1_seance_cinema1` WHERE `seance_cinema1`.`Id` = "'.$Id_modif.'" ', PDO::FETCH_ASSOC) as $DateSeanceBegin) {
  $DateSeanceBegin1= $DateSeanceBegin['DateSeanceBegin'];
};

//on explose durée du film en heure et minute
$explosion= explode(":", $dureeFilm);
$heure= $explosion[0];
$minute = $explosion[1];

//On ajoute les heures et minutes au début du film
$DateFinSeance= date('Y-m-d H:i:s',strtotime("+$heure hours $minute minutes", strtotime($DateSeanceBegin1)));

$conn = new new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
$conn->exec("SET CHARACTER SET utf8");

$sql = "UPDATE `kinepolise_cinema1_seance_cinema1` SET `DateSeanceEnd` = '".$DateFinSeance."' WHERE `seance_cinema1`.`Id` = '".$Id_modif."' ";
$count = $pdo_kinepolise->exec($sql);

$conn = null;