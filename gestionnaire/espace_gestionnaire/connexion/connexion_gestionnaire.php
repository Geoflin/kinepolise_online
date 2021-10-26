<html lang="fr">
<head>
<TITLE>connexion_gestionnaire</TITLE>
</head>
<body>

<nav>
<button name="accueil"><a href="../../../index.php">retour à l'accueil</a></button>
</nav>
<h3 class="center">Connexion à l'espace gestionnaire</h3>

<!--On invoque le formulaire de connexion-->
<form method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="Saisissez votre nom utilisateur">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="Saisissez votre mot de passe">
    <button name="connexion" type="submit">connexion</button>
    </form>


    <?php
    //on active la session
    if (isset($_POST['connexion'])){
        session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password']= $_POST['password'];
?>

<?php
//on vérifie l'identité
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_password WHERE Id= "1"', PDO::FETCH_ASSOC) as $dataConnexion) {};
foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_password WHERE Id= "3"', PDO::FETCH_ASSOC) as $dataConnexion2) {};
if (($_SESSION['username'] == $dataConnexion['username']  && $_SESSION['password'] == $dataConnexion['password'])) {
?>
<h1><a href="..\index_gestionnaire\espace_gestionnaire.php">Accèder à mon espace</a></h1>
<style>
    form{
        display:none;
    }
</style>
<?php } elseif (($_SESSION['username'] == $dataConnexion2['username']  && $_SESSION['password'] == $dataConnexion2['password'])) { ?>
<h1><a href="..\index_gestionnaire\espace_gestionnaire_cinema_2.php">Accèder à mon espace</a></h1>
<style>
    form{
        display:none;
    }
</style>
<?php
};
}; 
?>

</body>
<link rel="stylesheet" href="connexion_gestionnaire.css" />