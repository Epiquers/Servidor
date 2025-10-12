<?php

    //Intercambio de valores de variables
    //Declaración de variables
    $NumReal1=1.1;
    $NumReal2=4.1;
    $aux;
    
    echo "Valor de variable 1 -->".$NumReal1."<br>";
    echo "Valor de variable 2 -->".$NumReal2."<br>";

    $aux=$NumReal1;
    $NumReal1=$NumReal2;
    $NumReal2=$aux;

    echo "Intercambiando valores....<br>";

    echo "Valor de variable 1 -->".$NumReal1."<br>";
    echo "Valor de variable 2 -->".$NumReal2."<br>";


?>
    