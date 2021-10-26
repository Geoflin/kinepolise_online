<?php
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
$username = $_POST['username'];
$password = $_POST['password'];
//On vérifie que le compte n'existe pas déjà
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_client_info_client` WHERE username= "'.$username.'" OR password="'.$password.'" ', PDO::FETCH_ASSOC) as $compte_anti_doublons) {
    $doublons[]= $compte_anti_doublons['password'];
    //on compte nombre de créneau en conflicts
    $countDoublons= count($doublons);
  };
//On insére sous conditions les données du clients dans la table des infos_clients
if (isset($countDoublons)<1){
if ($pdo_kinepolise->exec('INSERT INTO kinepolise_client_info_client (username, password) VALUES ("'.$username.'", "'.$password.'");') !== false){}; 
} else {
    echo "Nom utilisateur ou mot de passe déjà utilisé";
};
?>