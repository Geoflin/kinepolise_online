       <!-- Tri_par_jour_de_seance-->
       <span class="ligne3">

  <form method="POST" action="">
  <div class="">Tri par jour de seance</div></br>
  <select name="dateSeanceBeginTest">
  <option id="dateSeanceBegin" value=" ">Tout afficher<br></option>
  <?php 
  $pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');
  foreach ($pdo_kinepolise_client->query('SELECT dateSeanceBegin FROM reservation_client', PDO::FETCH_ASSOC) as $date) { ?>
                    <option><?php echo $date['dateSeanceBegin'].'<br>'; ?></option>
  <?php } ?>
  </select>
  <input type="SUBMIT" value="Tri !" name="triSeanceBegin">
  </form>
  </span>

  <?php if(isset($_POST['triSeanceBegin'])){?>
    <?php
  $pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');
 foreach ($pdo_kinepolise_client->query('SELECT * FROM reservation_client WHERE dateSeanceBegin= "'.$_POST['dateSeanceBeginTest'].'" ', PDO::FETCH_ASSOC) as $FilmSalle) {
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


           <!-- Tri_par_utilisateur-->
           <span class="ligne3">

<form method="POST" action="">
<div class="">Tri par nom d'utilisateur</div></br>
<input name="username" placeholder="rechercher un utilisateur"></input>
<input type="SUBMIT" value="Tri !" name="triUsername">
</form>
</span>

<?php if(isset($_POST['triUsername'])){?>
  <?php
$pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');
foreach ($pdo_kinepolise_client->query('SELECT * FROM reservation_client WHERE username= "'.$_POST['username'].'" ', PDO::FETCH_ASSOC) as $FilmSalle) {
if(isset($FilmSalle['FilmName'])){
  $FilmSalle1= $FilmSalle['FilmName'];
  $SalleName= $FilmSalle['FilmName'];
} else {
  $FilmSalle1= "null";
};
} ?>
    <style>
      tr:not(.<?php echo $FilmSalle1 ?>, .thead ){
      display: none;
    }
  </style>


  <?php }; ?>