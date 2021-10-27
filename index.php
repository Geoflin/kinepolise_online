<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

<HTML>
 <HEAD>
  <TITLE>Kinepolise/accueil</TITLE>
  <link rel="stylesheet" href="index.css" />
 </HEAD>
<BODY>
  <div>

  <h1>Kinepolise</h1>
  <h3>Votre cinéma</h3>
  <span>
  <button name="reservation"><a href="client/connexion/connexion_client.php">réserver mes places</a></button>
  <button name="connexion_admin"><a href="Admin_principal\connexion\connexion_admin_principal.php">connexion administrateur</a></button>
  <button name="connexion"><a href="gestionnaire\espace_gestionnaire\connexion\connexion_gestionnaire.php">espace gestionnaire</a></button>
</span>
<img src="meduse.jpg"/>
    </BODY>
</HTML>