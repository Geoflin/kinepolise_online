<?php
//Si on a choisi le cinéma1, on annule les séances réservée dans le cinéma1
if($_SESSION['cinemaAdresse']== 'cinema1'){

//On récupère données séance réservée
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_seance_cinema1 ', PDO::FETCH_ASSOC) as $reservationSeance) { 
    $Id= $reservationSeance['Id'];
    $FilmName= $reservationSeance['FilmName'];
    $DateSeanceBegin= $reservationSeance['DateSeanceBegin'];
    $DateSeanceEnd= $reservationSeance['DateSeanceEnd'];
    $SalleName= $reservationSeance['SalleName'];
    };

//On récupère le nombre de réservation pour une séance
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_cinema1_seance_cinema1` WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_reservations) {
  $reservation[]= $Nombre_de_reservations['FilmName']; 
  $reservation1= count($reservation);
 }; 

 //On récupère Nombre_de_place
 $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT Nombre_de_place FROM kinepolise_cinema1_infos_cinema1 WHERE SalleName= "'.$_POST['SalleName'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_place) { 
    $Nombre_de_place1= $Nombre_de_place['Nombre_de_place'];
    };

//On calcule les place_dispo
if(isset($reservation1)){
  $reservation1-- ;
$place_dispo= $Nombre_de_place1 - $reservation1;
};


                                 if(isset($_POST['Id']))
                                 {
                                   // On assigne notre variable $_POST['checkbox_id']
                                   $nombre=$_POST['Id'];
                                   
                                   /* On crée une variable qui comptera le nombre de
                                   checkbox choisis grâce à la fonction count() */
                                   $total=count($nombre);
                                   
                                   // On affiche le résultat
                                   $s =($total<=1) ? "" : "s"; // astuce pour le singulier ou le pluriel
                                   
                                   /* Une petite boucle pour afficher les valeurs qu'on 
                                       a sélectionné dans notre formulaire */
                                   for( $i=0; $i<$total; $i++ )
                                   {
                                     $statement = $pdo_kinepolise ->prepare('DELETE FROM kinepolise_cinema1_reservation_client WHERE Id = :Id');
                                     $statement->bindValue(':Id', $nombre[$i], PDO::PARAM_INT);        
                                         if ($statement->execute()) {

                                         } else {
                                             echo "erreur";
                                         }
                                   }
                             } else {};

//On actualise le nombre de réservation
  $pdo_kinepolise->exec("SET CHARACTER SET utf8");
  if(isset($reservation1)){
    $sql2 = 'UPDATE kinepolise_cinema1_seance_cinema1 SET Nombre_de_reservation= "'.$reservation1.'" WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ';
    $count4 = $pdo_kinepolise->exec($sql2);

    $pdo_kinepolise = null;
  };

//On actualise le nombre de place_dispo
if(isset($place_dispo)){
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
      $sql2 = 'UPDATE kinepolise_cinema1_seance_cinema1 SET place_disponible= "'.$place_dispo.'" WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ';
    $count4 = $pdo_kinepolise->exec($sql2);

    $pdo_kinepolise = null;
  };




//Si on a choisi le cinéma2, on annule les séances réservée dans le cinéma2
} elseif($_SESSION['cinemaAdresse']== 'cinema2'){
  //On récupère données séance réservée
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema2_seance_cinema1', PDO::FETCH_ASSOC) as $reservationSeance) { 
    $Id= $reservationSeance['Id'];
    $FilmName= $reservationSeance['FilmName'];
    $DateSeanceBegin= $reservationSeance['DateSeanceBegin'];
    $DateSeanceEnd= $reservationSeance['DateSeanceEnd'];
    $SalleName= $reservationSeance['SalleName'];
    };

//On récupère le nombre de réservation pour une séance
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_cinema2_reservation_client` WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_reservations) {
  $reservation[]= $Nombre_de_reservations['FilmName']; 
  $reservation1= count($reservation);
 }; 

 //On récupère Nombre_de_place
 $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
 foreach ($pdo_kinepolise->query('SELECT Nombre_de_place FROM kinepolise_cinema2_infos_cinema1 WHERE SalleName= "'.$_POST['SalleName'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_place) { 
    $Nombre_de_place1= $Nombre_de_place['Nombre_de_place'];
    };

//On calcule les place_dispo
if(isset($reservation1)){
  $reservation1-- ;
$place_dispo= $Nombre_de_place1 - $reservation1;
};


                                 if(isset($_POST['Id']))
                                 {
                                   // On assigne notre variable $_POST['checkbox_id']
                                   $nombre=$_POST['Id'];
                                   
                                   /* On crée une variable qui comptera le nombre de
                                   checkbox choisis grâce à la fonction count() */
                                   $total=count($nombre);
                                   
                                   // On affiche le résultat
                                   $s =($total<=1) ? "" : "s"; // astuce pour le singulier ou le pluriel
                                   
                                   /* Une petite boucle pour afficher les valeurs qu'on 
                                       a sélectionné dans notre formulaire */
                                   for( $i=0; $i<$total; $i++ )
                                   {
                                     $statement = $pdo_kinepolise->prepare('DELETE FROM kinepolise_cinema2_reservation_client WHERE Id = :Id');
                                     $statement->bindValue(':Id', $nombre[$i], PDO::PARAM_INT);        
                                         if ($statement->execute()) {

                                         } else {
                                             echo "erreur";
                                         }
                                   }
                             } else {};

//On actualise le nombre de réservation
  $pdo_kinepolise->exec("SET CHARACTER SET utf8");
  if(isset($reservation1)){
    $sql2 = 'UPDATE kinepolise_cinema2_seance_cinema1 SET Nombre_de_reservation= "'.$reservation1.'" WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ';
    $count4 = $pdo_kinepolise->exec($sql2);

    $pdo_kinepolise = null;
  };

//On actualise le nombre de place_dispo
if(isset($place_dispo)){
  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
    $sql2 = 'UPDATE kinepolise_cinema2_seance_cinema1 SET place_disponible= "'.$place_dispo.'" WHERE SalleName= "'.$_POST['SalleName'].'" AND DateSeanceBegin= "'.$_POST['DateSeanceBegin'].'" ';
    $count4 = $pdo_kinepolise->exec($sql2);

    $pdo_kinepolise = null;
  };
}?>