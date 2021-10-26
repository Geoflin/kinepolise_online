<html lang="fr">
<head>
<TITLE>espace_client</TITLE>
</head>
<body>
<nav>
<button name="accueil"><a href="../index.php">retour à l'accueil</a></button>
<button name="connexion"><a href="connexion/connexion_client.php">retour connexion</a></button>
<form><button name="deconnexion" type="submit">déconnexion</button></form>
</nav>

<?php
session_start();
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_client_info_client` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };
?>

<?php
if (($_SESSION['username'] == $dataCompte['username']  && $_SESSION['password'] == $dataCompte['password'])) {
  echo sprintf("<nav class=center><h3>Bonjour %s, voici nos séance disponibles:<h3/></nav>", $_SESSION['username']) . PHP_EOL; 
?>
    <!--Actualiser la page-->

    <?php
    if(isset($_SESSION['cinemaAdresse'])){
      if($_SESSION['cinemaAdresse']== 'cinema1'){
        require_once 'liste_seance_cinema1.php';
      } elseif($_SESSION['cinemaAdresse']== 'cinema2') {
        require_once 'liste_seance_cinema2.php';
      }
    }
    ?>
   
        <!-- traitement  ReserverSeance-->
        <?php
        if(isset($_POST['ReserverSeance'])){
          require_once 'traitement/traitement_ReserverSeance.php';
        }
        ?>


    <!--Seance_que_vous_avez_réservée-->
    <?php require_once 'traitement/affichage_seance_deja_reservee.php'; ?> 


        <!-- Traitement annulation Seance_que_vous_avez_réservée-->
        <?php
        if(isset($_POST['annulation_ReserverSeance'])){
          require_once 'traitement/annulation_ReserverSeance.php';
        }
        ?>
    </table>

    <link rel="stylesheet" href="espace_client.css" />

  <!--Function Tri-->
  <h3 class="ligne1"><br/></br>Tri de l'affichage</h3>
  <span class="ligne2">
  <?php require_once '../gestionnaire\espace_gestionnaire\index_gestionnaire\calculs\tris\Tri_par_nom.php'; ?>
  <?php require_once '../gestionnaire\espace_gestionnaire\index_gestionnaire\calculs/tris/Tri_par_jour_de_seance.php'; ?>
  </span>

 

<?php
if(isset($_POST['deconnexion'])){
  session_destroy();
};
?>


<?php } else { echo $_SESSION['username'].'</br>'.$_SESSION['password'];?>
<h1>Mot de passe ou nom utilisateur faux</h1>


<style>
h1{
  grid-row: 3/3;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  color:red;
  background-color: rgb(39,39,39);
  padding: 1em;
  margin: auto;
}
body{
  background-color: black;
  color:white;
}
</style>
<?php }; ?>
