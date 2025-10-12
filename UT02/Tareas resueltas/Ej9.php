<?php

    /*
    Crea una variable con el precio de un producto y un porcentaje de descuento, 
    luego calcula y muestra el precio con y sin descuento.*/


    $precio=10;
    $descuento=20;
    $precioFinal=$precio - (($precio*$descuento)/100);


    echo "El precio del organizador SKADIS SIN descuesto es --> $precio <br>";
    echo "El precio del organizador SKADIS CON descuesto es --> ".$precioFinal."<br>";



?>