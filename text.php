<?php

// Avec ma variable classement je selectionne le cas ou.
$classement_ufc_fighters=$_POST["sport"];


// instruction switch
switch ($classement_ufc_fighters) {
  


    case "Khabib Nurmagomedov":
    echo "Khabib Nurmagomedov est resté invaincu en 29 combats et 0 défaites";
    break;

    case "Justin Gaethje":
    echo "Justin Gaethje a battu Tony ferguson en TKO mais a été battu par Khabib Nurmagomedov en soumission";
    break;

    case "Connor Mc Gregor":
    echo "Connor Mc Gregor a été battu par Khabib Nurmagomedov et a pris sa retraite par la suite";
    break;


    
}
// Fin de l'instruction switch
?>

<!-- Tableau avec la balise form qui représente les valeurs indiqué dans celui ci -->
 <form action="text.php" method= "post">
<select name= "sport">
<option value="">...</option>
<option value="Khabib Nurmagomedov">Khabib Nurmagomedov</option>
<option value="Justin Gaethje">Justin Gaeathje</option>
<option value="Connor Mc Gregor">Connor Mc Gregor</option>
</select>
<input type="submit" value="envoyer"></input>
</form>