<?php
  
  /*recuperer les champs grace a leur name*/
  
$name = $_POST['prenom'];
$lastName = $_POST['nom'];
$age = $_POST['age'];
$message = 'salut';


/*ce qui apparaitra dans l'en-tete du mail*/

$headers = "From:  Reservation Métamorphose";


/* contenu du mail */

$txt = "you have received an e-mail from " . $name . $lastName.".\n\n" . $message . "j'ai" . $age . "ans";


/*fonction qui envoie le mail*/

mail("les.cours.de.langues1@gmail.com", $headers,$txt );
  