<html lang="fr">
<head>
<TITLE>connexion_client</TITLE>
</head>
<body>

<nav>
<button name="accueil"><a href="../../index.php">retour à l'accueil</a></button>
</nav>
<h3 class="center">Connexion à l'espace client</h3>

<!--On permet au client de ce connecter-->
<h2 class="center">Je veux me connecter à mon compte</h2> 

<!--On permet au client de ce connecter-->
<form method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="Saisissez votre nom utilisateur">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="Saisissez votre mot de passe">

    <!--On permet au client de choisir son cinéma-->
  <h3 class="type_of_tri"> Choisissez l'adresse de votre cinéma</h3></br>
    <select name="cinemaAdresse" required="required">
    <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise_cinema1->query('SELECT * FROM kinepolise_cinema1_adresse', PDO::FETCH_ASSOC) as $adresse) {};?>
 <option value="cinema1"><?php echo $adresse['adresse'].'<br>'; ?></option> 
 <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
  foreach ($pdo_kinepolise_cinema2->query('SELECT * FROM kinepolise_cinema2_adresse', PDO::FETCH_ASSOC) as $adresse) {}; ?>
  <option value="cinema2"><?php echo $adresse['adresse'].'<br>'; ?></option>
  </select>

  <!--On soumet le formulaire-->
  <button name="connexion_client" type="submit">connexion</button>
    </form>

    <!--On permet au client de créer son compte-->
    <h2 class="center">Je veux créer mon compte</h2> 
    <form method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="Saisissez votre nom utilisateur">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="Saisissez votre mot de passe">
    <button name="creation_client" type="submit">connexion</button>
    </form>

    <link rel="stylesheet" href="connexion_client.css" />

    <!--On traite la connexion au compte-->
    <?php
    if (isset($_POST['connexion_client'])){
        session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password']= $_POST['password'];
$_SESSION['cinemaAdresse']= $_POST['cinemaAdresse'];
?>
<h1><a href="..\espace_client.php">Accèder à mon espace</a></h1>
<style>
    form, .center{
        display:none;
    }
    h1{
        grid-row: 2/2;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(39,39,39);
        margin-bottom: 100px;
    }
</style>
    <?php }; ?>

    <!--On traite la création de compte-->
    <?php
    if (isset($_POST['creation_client'])){
        require_once '../traitement/traitement_creation_client.php';
    }?>
</body>