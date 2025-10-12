<?php 
    /**
     * Crea una variable con el precio de un producto y un porcentaje de
     * descuento, luego calcula y muestra el precio con y sin descuento.
     */
    $precio=20;
    $descuento=10;

    echo "Precio sin descuento: $precio <br>";
    echo "Precio con descuento :" . $precio-($precio/100*$descuento);

?>