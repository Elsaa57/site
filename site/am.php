<?php
  
  /*recuperer les champs grace a leurs messages*/
  
$precisions = $_POST['precisions'];


/*ce qui apparaitra dans l'en-tete du mail*/

$headers = "From:  Reservation Métamorphose";


/* contenu du mail */

$txt = "Vous avez reçu un message anonyme " . $precisions .".\n\n";


/*fonction qui envoie le mail*/

mail("les.cours.de.langues1@gmail.com", $headers,$txt );