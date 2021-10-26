<!--Formulaire choix cinéma-->
<h2 class="ligne2_1"> Infos gestionnaire</h2></br>

  <span class="ligne3_1">

  <form class="form" method="POST" action="">

  <h3 class="type_of_tri"> Choisissez l'adresse de votre cinéma</h3></br>

  <input type="SUBMIT" value="Aller à" name="triFilmName">

    <select name="FilmNameTest">
    <?php 
    $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_adresse', PDO::FETCH_ASSOC) as $adresse) {};?>
 <option value="a"><?php echo $adresse['adresse'].'<br>'; ?></option> 
 <?php 
     $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema2_adresse', PDO::FETCH_ASSOC) as $adresse) {}; ?>
  <option value="b"><?php echo $adresse['adresse'].'<br>'; ?></option>
  </select>
  
  </form>
  </span>

  <div class="ligne4"></div>

  <!--Traitement choix cinéma-->
  <?php
  if (isset($_POST['triFilmName'])){ ?>
    <?php if($_POST['FilmNameTest']== 'a'){ ?>
      <span class="ligne4">
      <h1><form><button class="" name="return" type="submit" onclick='window.location.reload(false)'>retour</button></form><a target="_blank" href="../gestionnaire\espace_gestionnaire\index_gestionnaire\espace_gestionnaire.php">Cinéma1: espace gestionnaire</a></h1>
      </span>
      <style>
          .form{
              display:none;
          }
          h1{
              display: flex;
              justify-content: center;
              align-items: flex-end;
              
              margin-bottom: 10px;    
              }
      </style>
          <?php } else{ ?>
      <span class="return ligne4">
      <h1><form><button class="return" name="return" type="submit" onclick='window.location.reload(false)'>retour</button></form><a target="_blank" href="../gestionnaire\espace_gestionnaire\index_gestionnaire\espace_gestionnaire_cinema_2.php">Cinéma2: espace gestionnaire</a></h1>
      </span>
      <style>
          .form{
              display:none;
          }
          h1{
              display: flex;
              justify-content: center;
              align-items: flex-end;
              
              margin-bottom: 10px;    
              }
      </style>
   <?php };
   }; ?>
   <!--Traitement choix cinéma-->


  <?php if (isset($_POST['return'])){ ?>
    <style>
    form{
      display:flex;
  }
  </style>
  <?php }; ?>