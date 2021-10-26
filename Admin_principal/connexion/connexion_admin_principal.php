<html lang="fr">
<head>
<TITLE>connexion_admin_principal</TITLE>
<link rel="stylesheet" href="connexion_admin_principal.css" />
</head>
<body>

<nav>
<button name="accueil"><a href="../../index.php">retour à l'accueil</a></button>
</nav>


<h3 class="center">Connexion à l'espace client</h3>

<!--On permet au client de ce connecter-->
<h2 class="center">Connexion compte administrateur principal</h2> 
<form method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="Saisissez votre nom utilisateur">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="Saisissez votre mot de passe">
    <button name="connexion_admin_principal" type="submit">connexion</button>
    </form>

    <!--On traite la connexion au compte-->
    <?php
    if (isset($_POST['connexion_admin_principal'])){
        session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password']= $_POST['password'];
?>
<h1><a href="..\espace_admin_principal.php">Accèder à mon espace</a></h1>
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

</body>