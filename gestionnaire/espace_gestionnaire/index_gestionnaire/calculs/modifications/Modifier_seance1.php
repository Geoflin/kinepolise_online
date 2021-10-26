<?php

                             $Id_modif= $_POST['Id'];
//on calcul et ajoute date de fin séance
                  require_once 'Calcul_fin_seance2.php';
                  $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');                                 $kinepolise_cinema1->exec("SET CHARACTER SET utf8");
                                         $sql = "UPDATE `kinepolise_cinema1_seance_cinema1` SET `FilmName` = '".$_POST['FilmName']."', `DateSeanceBegin` = '".$fusionDateBegin_AjouterSeance."', `SalleName` = '".$_POST['SalleName']."' WHERE `seance_cinema1`.`Id` = '".$Id_modif."' ";
                                         $count = $pdo_kinepolise->exec($sql);
                                 
                                         $conn = null;