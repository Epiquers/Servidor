<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Estableciendo la conexión
    include("conexion.php");
    //recogida de datos
    $cod = $_POST['codigo'];
    $pro = $_POST['producto'];
    $det = $_POST['detalle'];
    $pre = $_POST['precio'];
    $des = $_POST['descuento'];
    $imagen = $_POST['imagen'];
    
    $consulta = "UPDATE productos
            SET producto='$pro', detalle='$det', precio='$pre', descuento='$des' 
            WHERE codigo='$cod'";

    //ejecutamos la sentencia SQL
    mysqli_query($conn, $consulta);

    echo mysqli_error($conn);

    mysqli_close($conn);

    //redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
    header("LOCATION:listado.php");
}else{
    header("LOCATION: menu.php");
}
