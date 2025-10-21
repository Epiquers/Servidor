<?php
    $codigoAeliminar=$_GET['codEliminar'];
    include("conexion.php");
    $consulta="DELETE from productos where codigo='$codigoAeliminar'";
    mysqli_query($conn, $consulta);
    echo mysqli_error($conn);
    mysqli_close($conn);
    header("LOCATION:formulario_bajas.php");
?>