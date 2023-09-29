<?php

    // creo un array de tamaño fijo de 10
    $taulas = new SplFixedArray(10);
    // Asigna valor aleatorio a cada mesa
    for ($i = 0; $i < sizeof($taulas); $i++) {
        $taulas[$i] = rand(0, 5);

    }

    // Imprime el mensaje por cada mesa
    for ($i = 0; $i < sizeof($taulas); $i++) {
        echo 'La taula ' . ($i +1) . generate_message($taulas[$i]) . '</br>';
    }

    // genera un mensaje personalizado en función de la cantidad de comensales
    function generate_message($comensales) {
        switch ($comensales) {
            case 0:
                return ' està vuida ';
                break;
            case 5:
                return ' està plena ';
                break;
            default:
                return ' té ' . $comensales . ' comensals ';
                break;
        }
    }

?>