<?php
    function suiteFibonacci($iteration=null) 
    {
        $table = array(0, 1);
        $iteration = isset($iteration)? $iteration:100;
        for ($i = 0; $i <= $iteration; $i++) {
            if ($i > 1) {
                $table[$i] = $table[$i - 1] + $table[$i - 2];
            }
            //pour afficher la serie
            // echo $table[$i] . '<br/>';
        }
		return $table;
	}

        //la serie est stock�e dans $table
		$table = suiteFibonacci(10);
        var_dump($table);
?>