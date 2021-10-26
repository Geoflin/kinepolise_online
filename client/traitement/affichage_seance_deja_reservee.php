    <!--Seance_que_vous_avez_réservée-->
    <h2 class="title2">Séance que vous avez réservée</h2>
    <section class="title2">
    <form class="title2" method="post">
    <input class="title2" type="button" onclick='window.location.reload(false)' value="Actualiser la page"/></form>
        <button class="title2" type="reset">Réinitialiser la séléction</button>
    </section>


    <!--Si on a choisi le cinéma1 on affiche les séances réservée dans le cinéma1-->
    <?php if($_SESSION['cinemaAdresse']== 'cinema1'){ ?>

    <table class="ligne6">
    <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
   foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_reservation_client WHERE username= "'.$_SESSION['username'].'" AND password= "'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $seanceReservee) { 
      $dateSeanceBegin = new DateTime($seanceReservee['DateSeanceBegin']);
      $DateSeanceEnd = new DateTime($seanceReservee['DateSeanceEnd']);
            ?>
        <!-- Affichage  Seance_que_vous_avez_réservée-->
        <form class="annulation_ReserverSeance" method="post" action="">
        <tr class=<?php echo $seanceReservee['FilmName']?>>
        <td><input type="checkbox" name="Id[]" id="Id" required="required" value="<?php echo $seanceReservee['Id'];?>"><button type="submit" name="annulation_ReserverSeance">Annuler la réservation</button></td>
        <td><?php echo $seanceReservee['FilmName'];?></td><input class="display_none" type="text" name="FilmName" required="" value="<?php echo $seanceReservee['FilmName'];?>">
        <td><?php echo $dateSeanceBegin->format('Y-m-d');?></td><input class="display_none" type="text" name="DateSeanceBegin" required="" value="<?php echo $seanceReservee['DateSeanceBegin'];?>">
        <td><?php echo $dateSeanceBegin->format('H:i');?></td><input class="display_none" type="text" name="DateSeanceBegin" required="" value="<?php echo $seanceReservee['DateSeanceBegin'];?>">
        <td><?php echo $DateSeanceEnd->format('H:i');?></td><input class="display_none" type="text" name="DateSeanceEnd" required="" value="<?php echo $seanceReservee['DateSeanceEnd'];?>">
        <td><?php echo $seanceReservee['SalleName'];?></td><input class="display_none" type="text" name="SalleName" required="" value="<?php echo $seanceReservee['SalleName'];?>">
        </tr>
        </form>
        <?php } ?>


    <!--Si on a choisi le cinéma2 on affiche les séances réservée dans le cinéma2-->
    <?php }elseif($_SESSION['cinemaAdresse']== 'cinema2'){ ?>
           <table class="ligne6">
           <?php 
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
          foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema2_reservation_client WHERE username= "'.$_SESSION['username'].'" AND password= "'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $seanceReservee) { 
             $dateSeanceBegin = new DateTime($seanceReservee['DateSeanceBegin']);
             $DateSeanceEnd = new DateTime($seanceReservee['DateSeanceEnd']);
                   ?>
               <!-- Affichage  Seance_que_vous_avez_réservée-->
               <form class="annulation_ReserverSeance" method="post" action="">
               <tr class=<?php echo $seanceReservee['FilmName']?>>
               <td><input type="checkbox" name="Id[]" id="Id" required="required" value="<?php echo $seanceReservee['Id'];?>"><button type="submit" name="annulation_ReserverSeance">Annuler la réservation</button></td>
               <td><?php echo $seanceReservee['FilmName'];?></td><input class="display_none" type="text" name="FilmName" required="" value="<?php echo $seanceReservee['FilmName'];?>">
               <td><?php echo $dateSeanceBegin->format('Y-m-d');?></td><input class="display_none" type="text" name="DateSeanceBegin" required="" value="<?php echo $seanceReservee['DateSeanceBegin'];?>">
               <td><?php echo $dateSeanceBegin->format('H:i');?></td><input class="display_none" type="text" name="DateSeanceBegin" required="" value="<?php echo $seanceReservee['DateSeanceBegin'];?>">
               <td><?php echo $DateSeanceEnd->format('H:i');?></td><input class="display_none" type="text" name="DateSeanceEnd" required="" value="<?php echo $seanceReservee['DateSeanceEnd'];?>">
               <td><?php echo $seanceReservee['SalleName'];?></td><input class="display_none" type="text" name="SalleName" required="" value="<?php echo $seanceReservee['SalleName'];?>">
               </tr>
               </form>
               <?php } 
               }?>