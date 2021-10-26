<?php
$reservation_count= '0';

echo $reservation_count;


//On récupère le nombre de réservation pour une séance
foreach ($pdo1->query('SELECT SalleName FROM `reservation_client` WHERE SalleName= "'.$seance['SalleName'].'" AND DateSeanceBegin= "'.$seance['DateSeanceBegin'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_reservations) {
    foreach($reservation as $vide=> $value){unset ( $reservation [$vide]) ;}
    $reservation[]= $Nombre_de_reservations['SalleName'];
    if(isset($reservation)){
      $reservation_count= count($reservation);
    } else {
      $reservation_count= '0';
    };
  };
  echo $reservation_count.'</br>';
  //On soustrait le nombre de place aux réservations
  $place_disponible=($place - $reservation_count);
  
  ?>