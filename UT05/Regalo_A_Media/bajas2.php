<?php
    $codigoAeliminar=$_POST['deleteCodigo'];
    include("conexion.php");
    $consulta="DELETE from productos where codigo='$codigoAeliminar'";
    mysqli_query($conn, $consulta);
    echo mysqli_error($conn);
    mysqli_close($conn);
    header("LOCATION:formulario_bajas2.php");
?>