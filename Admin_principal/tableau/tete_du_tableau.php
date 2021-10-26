    <!--ce fichier affiche tete_du_tableau-->
    
    <!-- Thead-->
    <?php
        $pdo_kinepolise_client = new PDO('mysql:host=localhost;dbname=kinepolise_client', 'root', '');?>

        <table class="ligne5">
        <tr class="thead">
            <!-- Form  triNomFilm-->

        <td>Nom d'utilisateur</td>
        <td>Nom du film</td>
        <td>date de la séance</td>
        <td>Heure de début</td>
        <td>Heure de fin</td>
        <td>Salle</td>
</tr>

