<!--Tri_par_creneaux-->
<!--Ce fichier va permettre le Tri_par_creneaux des réservations clients-->

<head> 
<link href="CSS/tri_par_creneaux.css" rel="stylesheet">
</head>
<?php 
//On invoque un fichier pour stopper l'affichage des erreurs php
require_once 'debug/debug.php'
?>

<!--On initialise une variable qui va compter le nombre de boucles-->
<?php $n= 0; ?>

<!--On invoque le formulaire: "choix_creneaux_réservations"-->
<?php require_once 'Formulaire/formulaire_choix_creneaux_reservations.php' ?>

  <!--On insère la tête du tableau-->
<?php require_once 'tableau/tete_du_tableau.php'; ?>
    </form>

<!--On ajoute des 00 afin de convertir les dates saisies en dateTime-->
<?php
if(isset($_POST['creneaux'])){
  $dateDepart= $_POST['dateDepart'].' 00:00:00';
  $dateFin= $_POST['dateFin'].' 00:00:00';
}
?>

  <!-- traitement_choix_du_creneau_cinema1 si on a sélectionné tout les créneaux et tout les cinémas-->
  <?php require_once 'Traitement_formulaire/traitement_choix_du_creneau.cinema1.php'; ?>

    <!--traitement_choix_du_creneau si on a choisi le cinéma2 ou tout les cinémas, on lit la boucle suivante-->
    <?php require_once 'Traitement_formulaire/traitement_choix_du_creneau.cinema2.php'; ?>


<?php 
//On affiche le pied du tableau
require_once 'tableau/pied_du_tableau.php';
       ?>
