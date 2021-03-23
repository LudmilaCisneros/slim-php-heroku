<?php

function invetirPalabra($palabra = "HOLA"){
    $cantidad = count($palabra);
    $palabraInvertida;

    for($i=$cantidad;$i>$cantidad;$i--){
        $palabraInvertida += $palabra[$i];

    }
    echo $palabraInvertida;

}



?>