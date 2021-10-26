<?php
    //traitement_choix_du_creneau si on a choisi le cinéma1 ou tout les cinémas, on lit la boucle suivante
    if(isset($_POST['cinemaAdresse']) || isset($_POST['tout'])){
        if($_POST['cinemaAdresse']== 'cinema1' || $_POST['tout']== 'tout'){
      ?>
      
      
        <!-- On affiche le nom du cinéma-->
        <tr>
            <td colspan="6">Cinéma1</td>
        </tr>
<?php
    //traitement_choix_du_creneau_cinema1 si on a sélectionné tout les créneaux et tout les cinémas

    if(($_POST['toutCreneau']== 'tout')){
      $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
              foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_cinema1_reservation_client` ', PDO::FETCH_ASSOC) as $seance) { 
              $dateSeanceBegin = new DateTime($seance['DateSeanceBegin']);
  $DateSeanceEnd = new DateTime($seance['DateSeanceEnd']); 
  ?>

<!-- Boucle Corps du tableau-->
  <tr class=thead <?php echo $seance['FilmName']?>>

  <td><?php echo $seance['username'];?></td>
  <td><?php echo $seance['FilmName'];?></td> 
  <td id="Colonne3"><?php echo $dateSeanceBegin->format('Y-m-d');?><br/></td>
  <td id="Colonne4"><?php echo $dateSeanceBegin->format('H:i');?><br/></td>
  <td id="Colonne5"><?php echo $DateSeanceEnd->format('H:i');?></td>
  <td id="Colonne6"><?php echo $seance['SalleName'];?></br></td>
  </tr>


  <?php
  //on compte +1 à chaque boucle 
  $n+= 1; 

}; 

//traitement_choix_du_creneau_cinema1 si on a sélectionné un créneaux et le cinéma1
  } else {
    //On ce connecte à la base de donnée du cinéma1
    $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
        //On récupère séance dans créeau
    foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_cinema2_reservation_client` WHERE `DateSeanceBegin` >= "'.$dateDepart.'" AND `DateSeanceBegin` <= "'.$dateFin.'" ', PDO::FETCH_ASSOC) as $seance) {
        //traitement_choix_du_creneau 
        //On convertit les dates en DateTime
  $dateSeanceBegin = new DateTime($seance['DateSeanceBegin']);
  $DateSeanceEnd = new DateTime($seance['DateSeanceEnd']); ?>

<!-- Boucle Corps du tableau-->
  <tr class=thead <?php echo $seance['FilmName']?>>

  <td><?php echo $seance['username'];?></td>
  <td><?php echo $seance['FilmName'];?></td> 
  <td id="Colonne3"><?php echo $dateSeanceBegin->format('Y-m-d');?><br/></td>
  <td id="Colonne4"><?php echo $dateSeanceBegin->format('H:i');?><br/></td>
  <td id="Colonne5"><?php echo $DateSeanceEnd->format('H:i');?></td>
  <td id="Colonne6"><?php echo $seance['SalleName'];?></br></td>
  </tr>

  <?php
  //on compte +1 à chaque boucle 
  $n+= 1; 
}; 
};
};
};
?>