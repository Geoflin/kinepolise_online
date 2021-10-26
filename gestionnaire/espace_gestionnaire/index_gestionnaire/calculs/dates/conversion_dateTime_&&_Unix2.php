        <!--submit_datetime_to_timestampUnix-->
<?php require_once 'function_dateTime.php';
 $UnixDateSeanceBegin_Ajouter_Seance = unix_timestamp($fusionDateBegin_AjouterSeance);
   
   //submit_timestampUnix_to_datetime
   //Ajouter_Seance
         $date_Ajouter_Seance = new DateTime(); 
         $date_Ajouter_Seance->setTimestamp($UnixDateSeanceBegin_Ajouter_Seance); 
         $format_date_Ajouter_Seance = $date_Ajouter_Seance->format('Y-m-d');
         $format_HourBegin_Ajouter_Seance = $date_Ajouter_Seance->format('H:i:s');
         ?> 