<?php 
    /**
     * Define dos variables con decimales y almacenarlos en dos variables
     * NumReal1 y NumReal2. Posteriormente hacer lo necesario para intercambiar el valor de
     * las dos variables y mostrar en pantalla de nuevo el valor de NumReal1 y NumReal2.
     */

    $NumReal1=33.7;
    $NumReal2=23.5;
    $aux;
    echo "Valores de Num1=$NumReal1 y Num2=$NumReal2 <br>";

    $aux=$NumReal2;
    $NumReal2=$NumReal1;
    $NumReal1=$aux;
    echo "Valores de Num1=$NumReal1 y Num2=$NumReal2 ";
?>