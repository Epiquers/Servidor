<?php
//Estableciendo la conexión
include ("conexion.php");

// Creamos la variable con el código que nos elvía el formulario de bajas
$codigo=$_POST['product'];

//Ejecutamos consulta
$consulta = "DELETE FROM productos WHERE codigo='$codigo'";
mysqli_query($conn,$consulta);

//Comprobamos que no hay errores
echo mysqli_error($conn );

// Cerramos conexión con la base de datos
mysqli_close($conn);

//Redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");

?>
