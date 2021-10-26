<html lang="fr">
<head>
<TITLE>Kinepolise/connexion_gestionnaire</TITLE>
</head>
<body>

<?php $n=0; ?>

<style>
        a, h2{
      color:rgb(155, 89, 182);
      text-align: center;
      text-decoration: underline;
    }
    body {
        font-family: Calibri, serif;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows:100px 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        background-color: black;
        color: white;
    }
    table td{
        border: 1px solid rgba(29, 29, 29);
        padding: 1rem;
        text-align: center;
        max-width: 100px;
        min-width: 100px;
        word-wrap: break-word;
        height: 100px;
    }
    .thead{
      background-color:rgb(69, 69, 69);
        font-weight: bold;
    }
    table{
        background-color: rgba(39, 39, 39);
    }
    nav{
        grid-column: 1/3;
        grid-row: 1/1;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    nav button, nav form{
      background-color: white;
      z-index: 2;
      height: 25px;
      margin-left: 10px;
    }
    .ligne2{
        grid-row: 2/2;
    }
    .ligne3{
        grid-row: 3/3;
    }
    .ligne4{
        grid-row: 4/4;
    }
    .ligne5{
        grid-row: 5/5;
    }
    .ligne6{
        grid-row: 6/6;
    }
    .ligne7{
        grid-row: 7/7;
    }
    .ligne8{
        grid-row: 8/8;
    }
    .ligne5, .ligne7, .table4, .table6{
        border-collapse: collapse;
        width: 100%;
        height: 300px;
        background-color: rgb(39, 39, 39);
    }
    .center{
        display: flex;
        justify-content: center;
    }
    .type_of_tri{
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-direction: row;
    }
    .space_between{
      display: flex;
      justify-content: space-between;
    }
    </style>
<?php require_once 'tri_reservation.php'; ?>
      <!--Function Tri-->
  <h2 class="ligne2">Tri de l'affichage</h2>

<nav>
<button name="accueil"><a href="../../../index.php">retour à l'accueil</a></button>
<button name="connexion"><a href="connexion/connexion_admin_principal.php">retour connexion</a></button>
<form><button name="deconnexion" type="submit" onclick='window.location.reload(false)'>déconnexion</button></form>
</nav>

<?php
$pdo_kinepolise = new PDO('mysql:host=localhost;dbname=kinepolise', 'root', '');
  foreach ($pdo_kinepolise->query('SELECT * FROM password WHERE Id= "1"', PDO::FETCH_ASSOC) as $dataConnexion) { 
  $username= $dataConnexion['username'];
  $password= $dataConnexion['password'];
};
$pdo_kinepolise_administrateur = new PDO('mysql:host=localhost;dbname=kinepolise_administrateur', 'root', '');
  foreach ($pdo_kinepolise_administrateur->query('SELECT * FROM password WHERE Id= "1"', PDO::FETCH_ASSOC) as $adminConnexion) {};
session_start();
?>

<?php
if ((($_SESSION['username'] == $dataConnexion['username']  && $_SESSION['password'] == $dataConnexion['password']) || ($_SESSION['username'] == $adminConnexion['username']  && $_SESSION['password'] == $adminConnexion['password']) )) {
  echo sprintf("<nav class=center><h3>Vous êtes connecté, bonjour %s <h3/></nav>", $_SESSION['username']) . PHP_EOL; 
?>

<!--Tableaux-->
    <h2 class="ligne4 center">Liste des réservations</h2>
    <!-- Thead-->
    <?php
        $pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');?>

        <table class="ligne5">
        <tr class="thead">
            <!-- Form  triNomFilm-->

            <td>Nom d'utilisateur</td>
        <td>Nom du film</td>
        <td>date de la séance</td>
        <td>Heure de début</td>
        <td>Heure de fin</td>
        <td>Salle</td>
</tr>
    </form>

        <!-- Boucle Corps du tableau-->
        <?php
        $pdo_kinepolise_client= new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');
    foreach ($pdo_kinepolise_client->query(' SELECT * FROM reservation_client ', PDO::FETCH_ASSOC) as $seance) { 
      $dateSeanceBegin = new DateTime($seance['DateSeanceBegin']);
      $DateSeanceEnd = new DateTime($seance['DateSeanceEnd']);
            ?>


        <tr class=<?php echo $seance['FilmName']?>>

        <td><?php echo $seance['username'];?></td>
        <td><?php echo $seance['FilmName'];?></td> 
        <td id="Colonne3"><?php echo $dateSeanceBegin->format('Y-m-d');?><br/></td>
        <td id="Colonne4"><?php echo $dateSeanceBegin->format('H:i');?><br/></td>
        <td id="Colonne5"><?php echo $DateSeanceEnd->format('H:i');?></td>
        <td id="Colonne6"><?php echo $seance['SalleName'];?></br></td>

        </tr>
        <?php 
        $n+= 1; 
      }; 
      ?>
              <tr class= "thead">
        <td>Nombre total de séance réservée</td><td colspan="5"><?php echo $n;?></td>
    </tr>
    </table>

    <!--Tableaux-->
    <h2 class="ligne6 center">Statistiques réservations</h2>
    <!-- Thead-->
    <?php
        $pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');?>

        <table class="ligne7">
        <tr class="thead">
            <!-- Form  triNomFilm-->
        <td>Nombre total d'utilisateur</td>
</tr>
    </form>
        <!-- Boucle Corps du tableau-->
        <tr class=<?php echo $seance['FilmName']?>>
      <td><?php echo $n;?></td>
    </table>
    

    <!--test-->
    



    </body>


    

<?php
if(isset($_POST['deconnexion'])){
  session_destroy();
};
?>


<?php } else { ?>
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
}
</style>
<?php }; ?>










