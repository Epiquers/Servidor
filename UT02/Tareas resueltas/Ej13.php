<?php
    /* EJERCICIO 13: Crea un programa que convierta 
    una cantidad en dólares a euros (o viceversa) utilizando una constante que represente la tasa de cambio actual y 
    define varias variables para hacer las pruebas. */

    $euros=5;
    $dolares=5;
    define("TASAE", 1.18);
    define("TASAD", 0.85);
    $cambio1=$euros*TASAE;
    $cambio2=$dolares*TASAD;


    echo "$euros euros a fecha 22/09/2025 son dólares $cambio1 <br>";
    echo "$dolares dolares a fecha 22/09/2025 son dólares $cambio2";






?>