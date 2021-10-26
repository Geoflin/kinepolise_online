       <!-- Tri_par_jour_de_seance-->
       <span class="blockTri2">

       <!--On invoque le formulaire de tri d'affichage par jours-->
  <form method="POST" action="">
  <div class="type_of_tri">Tri par jour de seance</div></br>
  <select name="dateSeanceBeginTest">
  <option id="dateSeanceBegin" value=" ">Tout afficher<br></option>
  <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT dateSeanceBegin FROM kinepolise_cinema1_seance_cinema1', PDO::FETCH_ASSOC) as $date) { ?>
                    <option><?php echo $date['dateSeanceBegin'].'<br>'; ?></option>
  <?php } ?>
  </select>
  <input type="SUBMIT" value="Tri !" name="triSeanceBegin">
  </form>
  </span>


  <!--On affiche uniquement les séances correxpondant au jour sélectionné-->
  <?php if(isset($_POST['triSeanceBegin'])){?>
    <?php
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_seance_cinema1 WHERE dateSeanceBegin= "'.$_POST['dateSeanceBeginTest'].'" ', PDO::FETCH_ASSOC) as $FilmSalle) {
  if(isset($FilmSalle['FilmName'])){
    $FilmSalle1= $FilmSalle['FilmName'];
    $SalleName= $FilmSalle['FilmName'];
  } else {
    $FilmSalle1= "null";
  };
  } ?>
      <style>
        tr:not(.<?php echo $FilmSalle1 ?>, .thead  .<?php echo $SalleName ?>){
        display: none;
      }
    </style>
    <?php }; ?>