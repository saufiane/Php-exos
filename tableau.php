<?php

    
$array=['lundi' , 'mardi' , 'mercredi' , 'jeudi' ,  'vendredi' , 'samedi' , 'dimanche'];
print_r ($array);
echo'<br/>';
echo $array[0];
echo '<br/>';
echo $array[1];
echo '<br/>';
echo $array[2];
echo '<br/>';
echo $array[3];
echo '<br/>';
echo $array[4];
echo '<br/>';
echo $array[5];
echo '<br/>';
echo $array[6];
echo '<br/>';

    
foreach ($array as $toto => $jour ) {
    echo $toto . "  " . $jour .  "<br/>"; 
    
}

?>