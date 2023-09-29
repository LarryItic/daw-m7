<?php
    $plantas = array();
    for ($i = 0; $i < 5; $i++) {
        // array_push($plantas, $i);
        $habitaciones = array();
        for ($j = 0; $j < 10; $j++) {
            array_push($habitaciones, rand(0, 4));
        }
        array_push($plantas, $habitaciones);
    } 

    for ($i = 0; $i < sizeof($plantas); $i++) {
        /* for ($j = 0; $j < sizeof($plantas[$i]; $j++)){

        } */
    }
?>