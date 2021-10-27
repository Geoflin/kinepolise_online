<?php
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
                                 $pdo_kinepolise->exec("SET CHARACTER SET utf8");
                                 $sql2 = "UPDATE `kinepolise_cinema1_infos_cinema1` SET `SalleName` = '".$_POST['SalleName']."', Nombre_de_place = '".$_POST['Nombre_de_place']."'WHERE `kinepolise_cinema1_infos_cinema1`.`Id` = '".$_POST['Id']."' ";
                                 $count = $pdo_kinepolise->exec($sql2);
                                 
                                         $pdo_kinepolise = null;