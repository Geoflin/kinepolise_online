<?php
//on integre la function pour avoir le timestampUnix
require_once 'function_dateTime.php';
//on crée la date de début(fusion date et time)
$fusionDateBegin_AjouterSeance= $_POST['DateSeanceBegin'].' '.$_POST['HourBegin'];
//on récupère nom salle
 $SalleName= $_POST['SalleName'];
 //on concatène date début et nom salle
 $concatSearch= $fusionDateBegin_AjouterSeance.' '.$SalleName;
  //on ajoute des 00 pour les secondes de la date de début
 $fusion= $fusionDateBegin_AjouterSeance;
 $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
 //On sélectionne les dates débuts séance de la salle de la séance à créer 
foreach ($pdo_kinepolise->query('SELECT DateSeanceBegin FROM `kinepolise_cinema1_seance_cinema1` WHERE DateSeanceBegin LIKE "'.$fusion.'" AND SalleName LIKE "'.$SalleName.'" ', PDO::FETCH_ASSOC) as $search) {
  $doublonArray[]= $search['DateSeanceBegin'];
  //on compte le nombre de date de début de la salle de la séance à créer identique
  $doublonInt= count($doublonArray);
};

//on calcule date de fin séance
require_once 'Calcul_fin_seance.php';

//On Vérifie que le créneau est disponible
foreach ($pdo_kinepolise->query('SELECT SalleName FROM `kinepolise_cinema1_seance_cinema1` WHERE `DateSeanceBegin` >= "'.$fusion.'" AND `DateSeanceBegin` <= "'.$DateFinSeance.'" AND `SalleName` = "'.$SalleName.'" ', PDO::FETCH_ASSOC) as $creneau) {
  $creneauconflict[]= $creneau['SalleName'];
  //on compte nombre de créneau en conflicts
  $countCreneauconflict= count($creneauconflict);
};

//On converti en timestamps
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT DateSeanceBegin, SalleName FROM kinepolise_cinema1_seance_cinema1 WHERE Id=(SELECT max(Id) FROM kinepolise_cinema1_seance_cinema1);')as $maxid) {
  $DateSeanceBegin= $maxid['DateSeanceBegin'];
  $SalleName= $maxid['SalleName'];
  if(isset($DateSeanceBegin)) {
    $Unix_DateSeanceBegin = unix_timestamp($maxid['DateSeanceBegin']);
    $Unix_fusionDateBegin = unix_timestamp($fusionDateBegin_AjouterSeance);
  };
};

//on récupère les places disponibles
foreach ($pdo_kinepolise->query('SELECT Nombre_de_place FROM `kinepolise_cinema1_infos_cinema1` WHERE `SalleName`= "'. $_POST['SalleName'] .'" ', PDO::FETCH_ASSOC) as $Nombre_de_place) {
  $place_disponible = $Nombre_de_place['Nombre_de_place'];
};

        //On insére valeure formulaire sous condition
        if (isset($doublonInt)<1){
          if (isset($countCreneauconflict)<1){
          if (isset($Unix_DateSeanceBegin)){
                if ($pdo_kinepolise->exec('INSERT INTO kinepolise_cinema1_seance_cinema1 (FilmName, DateSeanceBegin, SalleName, place_disponible) VALUES ("'. $_POST['FilmName'] . '", "' . $fusionDateBegin_AjouterSeance . '", "' . $_POST['SalleName'] .'", "'. $place_disponible .'");') !== false){};
                //on ajoute date de fin séance
                  $sql = "UPDATE `kinepolise_cinema1_seance_cinema1` SET `DateSeanceEnd` = '".$DateFinSeance."' WHERE `kinepolise_cinema1_seance_cinema1`.`DateSeanceEnd` IS NULL";
                 $count = $pdo_kinepolise->exec($sql);
                 $pdo_kinepolise = null;
              } else { 
                if ($pdo_kinepolise->exec('INSERT INTO kinepolise_cinema1_seance_cinema1 (FilmName, DateSeanceBegin, SalleName, place_disponible) VALUES ("'. $_POST['FilmName'] . '", "' . $fusionDateBegin_AjouterSeance . '", "' . $_POST['SalleName'] .'",  "'. $place_disponible .'");') !== false){};
                //On récupère l'Id de la séance crée
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_cinema1_seance_cinema1`', PDO::FETCH_ASSOC) as $seance) {
  $Id_creation= $seance['Id'];
};
                //on ajoute date de fin séance
                $sql = "UPDATE `kinepolise_cinema1_seance_cinema1` SET `DateSeanceEnd` = '".$DateFinSeance."' WHERE `kinepolise_cinema1_seance_cinema1`.`Id` = '".$seance['Id']."' ";
                $count = $pdo_kinepolise->exec($sql);
                $pdo_kinepolise = null;
              };
            } else {
              echo "Créneau déjà occupé par ".$countCreneauconflict." séances"; 
            };
          } else {
            echo "Séance en double !"; 
          };