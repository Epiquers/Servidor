<?php 
    //Muestra por pantalla la ip del usuario que se conecta a mi página web y la hora actual.
    print("IP del Usuario: " . $_SERVER['REMOTE_ADDR']);

    echo "<br>";

    print("Hora del sistema: " . date("H:i:s"));
?>