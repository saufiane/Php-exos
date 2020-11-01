
<form method="post" action="">

<label for="ko" >NB 1 :</label>


<input id="ko" type="number" name="m1" /><br />

<label for="ka" >NB 2 :</label>
<input id="ka" type="number" name="m2" /><br />

<br />

<input type="submit" value="Calculer" />
</form>



<?php

$m1= $_POST['m1'];
$m2= $_POST['m2'];
$result= $m1+$m2;

echo $result;


?>