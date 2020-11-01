<?php

// $prenom ="Saufiane";
// $nom ="Cherief";
// $maphrase ="I am back";
// echo "Bonjour"." ".$prenom ." ".$nom. " ".$maphrase
$villechoisie=( $_POST["ville"]);


?>
<html>
<body>

<h1> FORMULAIRE</h1>

<form action="index.php" method= "post">
<label for="ville">Choisir une ville </label>
 

 <select name="ville">
 <option value="">...</option>
<option value="Alger">Alger</option>
<option value="Berlin">Berlin</option>
<option value="Rabat">Rabat</option>


</select>

<input type="submit" value="envoyer"></input>
</form>
<?php

switch ($villechoisie) {

case "Alger":

echo "Alger est la capitale de L'Algérie";
break;
case "Berlin":

echo "Berlin est la capitale de L'Allemagne";
break;
case "Rabat":

echo "Rabat est la capitale du Maroc";
break;
}
?>
</body>
</html>



<!-- <form action="" method="post"> -->
<!-- Name: <input type="text" name="name"><br> -->
<!-- E-mail: <input type="text" name="email"><br> -->
<!-- <input type="submit"> -->
<!-- </form> -->

</body>
</html>

