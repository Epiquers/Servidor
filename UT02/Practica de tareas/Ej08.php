<?php
    $NumReal1=10.5;
    $NumReal2=5.7;
    $aux;

    $aux=$NumReal1;
    $NumReal1=$NumReal2;
    $NumReal2=$aux;

    echo $NumReal1;
    echo "<br>";
    echo $NumReal2;
?>