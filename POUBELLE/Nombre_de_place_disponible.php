<?php

require_once "../client/espace_client.php";

$pdo1 = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');
//On récupère le nombre de réservation pour une séance
foreach ($pdo1->query('SELECT SalleName FROM `reservation_client` WHERE SalleName= "'.$seance['SalleName'].'" AND DateSeanceBegin= "'.$seance['DateSeanceBegin'].'" ', PDO::FETCH_ASSOC) as $Nombre_de_reservations) {
  $reservation[]= $Nombre_de_reservations['SalleName']; 
    $reservation1= count($reservation);
    $reservation2= $reservation1-'1';?>
    <td><?php echo $reservation2;?></td>
<?php }; 

//$pdo = new PDO('mysql:host=localhost;dbname=kinepolise', 'root', '');
//On stocke le nombre de réservation

//if ($pdo->exec('INSERT INTO seance_cinema1 (Nombre_de_reservation) VALUES ("'.$reservation_count.'") WHERE SalleName= "'.$seance['SalleName'].'" AND DateSeanceBegin= "'.$seance['DateSeanceBegin'].'" ;') !== false){}; 
