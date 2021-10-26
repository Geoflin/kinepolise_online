       <!-- Tri Par Salle-->
       <span class="blockTri2">

        <!--On invoque le formulaire de tri d'affichage par nom de film-->
  <form method="POST" action="">
  <div class="type_of_tri">Tri par nom de Salle</div></br>
  <select name="SalleNameTest">
  <option id="SalleName">Tout afficher<br></option>
  <?php 
  foreach ($pdo_kinepolise->query('SELECT SalleName FROM kinepolise_cinema1_infos_cinema1', PDO::FETCH_ASSOC) as $Salle) { ?>
                    <option><?php echo $Salle['SalleName'].'<br>'; ?></option>
  <?php } ?>
  </select>
  <input type="SUBMIT" value="Tri !" name="triSalleName">
  </form>
  </span>

  <!--On affiche uniquement les séances correxpondant au nom de film sélectionné-->
  <?php if(isset($_POST['triSalleName'])){?>
    <?php
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_seance_cinema1 WHERE SalleName= "'.$_POST['SalleNameTest'].'" ', PDO::FETCH_ASSOC) as $FilmSalle) {
  if(isset($FilmSalle['FilmName'])){
    $FilmSalle1= $FilmSalle['FilmName'];
    $SalleName= $FilmSalle['FilmName'];
  } else {
    $FilmSalle1= "null";
  };
  } ?>
      <style>
        tr:not(.<?php echo $FilmSalle1 ?>, .thead, .<?php echo $SalleName ?>){
        display: none;
      }
    </style>
    <?php }; ?>