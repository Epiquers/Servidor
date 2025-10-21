<?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos
$cod=$_POST['codigo'];
$pro=$_POST['producto'];
$det=$_POST['detalle'];
$pre=$_POST['precio'];
$des=$_POST['descuento'];
$ima=$cod.".jpg";
$consulta = "UPDATE productos
            SET producto='$pro', detalle='$det', precio='$pre', descuento='$des' 
            WHERE codigo='$cod'";

//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);

echo mysqli_error($conn );

//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");
mysqli_close($conn);
?>