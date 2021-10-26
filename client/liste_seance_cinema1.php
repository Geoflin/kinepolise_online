<div class="ligne1">
<h1>Cinéma1</h1>
</div>
<!--Tableaux-->
    <!-- Thead-->
    <?php $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');?>

        <table class="ligne4">
        <tr class="thead">
            <!-- Form  triNomFilm-->
        <td>Réserver la séance</td>
        <td>Nom du film</td>
        <td>Jour de séance</td>
        <td>Heure de début</td>
        <td>Heure de fin</td>
        <td>Salle</td>
        <td>Place disponible</td>
</tr>
    </form>
    <h2 class="title1">Séance disponibles</h2>
    <section class="title1">
    <form class="title1" method="post">
    <input class="title1" type="button" onclick='window.location.reload(false)' value="Actualiser la page"/></form>
        <button class="title1" type="reset">Réinitialiser la séléction</button>
    </section>
        <!-- Boucle Corps du tableau-->
        </tr>
        <?php $pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
        foreach ($pdo_kinepolise->query('SELECT SalleName FROM kinepolise_cinema1_infos_cinema1', PDO::FETCH_ASSOC) as $Salle) { ?>
  <?php } ?>
        <?php
    foreach ($pdo_kinepolise->query('SELECT * FROM kinepolise_cinema1_seance_cinema1', PDO::FETCH_ASSOC) as $seance) { 
      $dateSeanceBegin = new DateTime($seance['DateSeanceBegin']);
      $DateSeanceEnd = new DateTime($seance['DateSeanceEnd']);
            ?>
        <!-- Form  ReserverSeance-->
        <form class="ReserverSeance" method="post" action="">
        <tr class=<?php echo $seance['FilmName']?>>
        <td><input type="checkbox" name="Id" id="Id" required="required" value="<?php echo $seance['Id'];?>"><button type="submit" name="ReserverSeance">Réserver la séance</button></td>
        <td><?php echo $seance['FilmName'];?></td> 
        <td><?php echo $dateSeanceBegin->format('Y-m-d');?></td>
        <td><?php echo $dateSeanceBegin->format('H:i');?></td>
        <td><?php echo $DateSeanceEnd->format('H:i');?></td>
        <td><?php echo $seance['SalleName'];?></td>
        <td><?php echo $seance['place_disponible'];?></td>
        </tr>
        </form>
        <?php } ?>
    </table>

<!-- espace_tarif-->
<div class="espace_tarif">Nos tarifs:
    <ul>
        <li>Plein tarif: 9€20</li>
        <li>Etudiant: 7€60</li>
        <li>Moins de 14 ans: 5€90</li>
</ul>
</div>