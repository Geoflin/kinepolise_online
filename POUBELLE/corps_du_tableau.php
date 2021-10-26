<tr class=<?php echo $seance['FilmName']?>>

        <td><?php echo $seance['username'];?></td>
        <td><?php echo $seance['FilmName'];?></td> 
        <td id="Colonne3"><?php echo $dateSeanceBegin->format('Y-m-d');?><br/></td>
        <td id="Colonne4"><?php echo $dateSeanceBegin->format('H:i');?><br/></td>
        <td id="Colonne5"><?php echo $DateSeanceEnd->format('H:i');?></td>
        <td id="Colonne6"><?php echo $seance['SalleName'];?></br></td>
        </tr>

        <?php 
        $n+= 1; 
      ?>