<?php
//Estableciendo la conexión
include ("conexion.php");
$codigo=$_POST['product'];
$consulta = "DELETE FROM productos WHERE codigo='$codigo'";
mysqli_query($conn,$consulta);

//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");
mysqli_close($conn);
?>
