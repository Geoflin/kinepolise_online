<?php
                             $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
                                 $pdo_kinepolise->exec("SET CHARACTER SET utf8");
                                         $sql = "UPDATE `info_film` SET `FilmName` = '".$_POST['FilmName']."', Duree = '".$_POST['Duree']."'WHERE `info_film`.`Id` = '".$_POST['Id']."' ";
                                         $count = $pdo_kinepolise->exec($sql);
                                 
                                         $pdo_kinepolise = null;