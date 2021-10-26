<?php
//on vérifie qu'il n'y a pas de doublon grâce à notre anti_doublons
require_once 'anti_doublons.php';

//On stocke sous condition séance réservée dans table réservation client du cinéma1 ou cinéma2
if($_SESSION['cinemaAdresse']== 'cinema1'){

  //stockage dans cinéma1
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  $pdo_kinepolise->exec("SET CHARACTER SET utf8");
if ($seance['place_disponible']>0){
if (isset($countCreneauconflict)<1){
    if ($pdo_kinepolise->exec('INSERT INTO kinepolise_cinema1_reservation_client (Id, username, password, FilmName, DateSeanceBegin, DateSeanceEnd, SalleName) VALUES ("'.$Id.'", "'.$_SESSION['username'].'", "'.$_SESSION['password'].'", "'.$FilmName.'", "'.$DateSeanceBegin.'", "'.$DateSeanceEnd.'", "'.$SalleName.'");') !== false){}; 
} else {
    echo "Créneau déjà occupé par ".$countCreneauconflict." séances"; 
  };

  //On stocke nombre de réservation pour une séance dans seance_cinema1
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  $pdo_kinepolise->exec("SET CHARACTER SET utf8");
  if(isset($reservation1)){
          $sql3 = 'UPDATE kinepolise_cinema1_seance_cinema1 SET Nombre_de_reservation= "'.$reservation1.'" WHERE SalleName= "'.$SalleName.'" AND DateSeanceBegin= "'.$DateSeanceBegin.'" ';
          $count3 = $pdo_kinepolise->exec($sql3);
  
          $pdo_kinepolise = null;
        };

  //On actualise le nombre de place_dispo
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  $pdo_kinepolise->exec("SET CHARACTER SET utf8");
if(isset($place_dispo)){
  $sql2  = 'UPDATE kinepolise_cinema1_seance_cinema1 SET place_disponible= "'.$place_dispo.'" WHERE SalleName= "'.$SalleName.'" AND DateSeanceBegin= "'.$DateSeanceBegin.'" ';
  $count3 = $pdo_kinepolise->exec($sql2 );

  $pdo_kinepolise  = null;
};
} else {
  echo "Il n'y a plus de place !";
};

//partie cinema2
} elseif($_SESSION['cinemaAdresse']== 'cinema2') {
  //stockage dans cinéma2
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
    $pdo_kinepolise->exec("SET CHARACTER SET utf8");
    if ($seance['place_disponible']>0){
    if (isset($countCreneauconflict)<1){
        if ($pdo_kinepolise->exec('INSERT INTO kinepolise_cinema2_reservation_client (Id, username, password, FilmName, DateSeanceBegin, DateSeanceEnd, SalleName) VALUES ("'.$Id.'", "'.$_SESSION['username'].'", "'.$_SESSION['password'].'", "'.$FilmName.'", "'.$DateSeanceBegin.'", "'.$DateSeanceEnd.'", "'.$SalleName.'");') !== false){}; 
    } else {
        echo "Créneau déjà occupé par ".$countCreneauconflict." séances"; 
      };
    
    
      //On stocke nombre de réservation pour une séance dans seance_cinema1
      $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
      $pdo_kinepolise->exec("SET CHARACTER SET utf8");
      if(isset($reservation1)){
              $sql3 = 'UPDATE kinepolise_cinema2_seance_cinema1 SET Nombre_de_reservation= "'.$reservation1.'" WHERE SalleName= "'.$SalleName.'" AND DateSeanceBegin= "'.$DateSeanceBegin.'" ';
              $count3 = $pdo_kinepolise->exec($sql3);
      
              $pdo_kinepolise = null;
            };
    
      //On actualise le nombre de place_dispo
      $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
      $pdo_kinepolise->exec("SET CHARACTER SET utf8");
    if(isset($place_dispo)){
      $sql2  = 'UPDATE kinepolise_cinema2_seance_cinema1 SET place_disponible= "'.$place_dispo.'" WHERE SalleName= "'.$SalleName.'" AND DateSeanceBegin= "'.$DateSeanceBegin.'" ';
      $count3 = $pdo_kinepolise->exec($sql2 );
    
      $pdo_kinepolise  = null;
    };
    } else {
      echo "Il n'y a plus de place !";
    }
}
