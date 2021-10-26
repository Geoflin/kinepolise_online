<!--On invoque le formulaire: "choix_creneaux_réservations"-->
<form method="POST" action="">
<fieldset>

<!--On permet a l'admin de choisir son créneau de réservation-->
<h2>Choisissez la période des réservations</h2>
<div class="center">
<div class="border"><input type="checkbox" value="tout" name="toutCreneau">Tout les creneaux</div>
<div><label for="dateDepart">Date de début: <?php if(isset($_POST['dateDepart'])){echo $_POST['dateDepart'];};?></label></div>
    <input type="date" name="dateDepart"></br>
<label for="dateFin">Date de fin: <?php if(isset($_POST['dateFin'])){echo $_POST['dateFin'];};?></label></br>
    <input type="date" name="dateFin"></br></br>
</div>


<!--On permet à l'admin de choisir son cinéma-->
<h2 class="center"> Choisissez l'adresse de votre cinéma</h2>
    <div class="center">
    <div class="border"><input type="checkbox" value="tout" name="tout">Tout</br></div>
    <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_adresse', PDO::FETCH_ASSOC) as $adresse) {};?>
 <input type="checkbox" value="cinema1" name="cinemaAdresse"><?php echo $adresse['adresse'].'<br>'; ?>
 <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema2_adresse', PDO::FETCH_ASSOC) as $adresse) {}; ?>
  <input  type="checkbox" value="cinema2"  name="cinemaAdresse2"><?php echo $adresse['adresse'].'<br>'; ?>
  </div>
  <input class="center button" type="submit" name="creneaux" value="générer les stats">

</fieldset>
<!--On ferme le formulaire: "choix_creneaux_réservations"-->
  </form>