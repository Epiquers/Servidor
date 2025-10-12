<?php 
    /**
     * Crea un programa que convierta una cantidad en dólares a euros (o
     * viceversa) utilizando una constante que represente la tasa de cambio actual y define
     * varias variables para hacer las pruebas.
     */

    define ("TASAE", 1.18);
    define ("TASAD", 0.85);
    $euros=10;
    $dolares=10;

    echo "$dolares dolares son : ".$dolares*TASAD."€ <br>";

    echo "$euros euros son : ".$euros*TASAE."$<br>";
?>