<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de artículos</title>
</head>
<body>
    <a href="menu.php">Volver al menú</a>
    <h1>Eliminar producto versión 1</h1>
    
    <?php
    include("conexion.php");
    //Lógica del fichero
    $consulta="Select * from productos";

    $result=mysqli_query($conn,$consulta);

    while ($row=mysqli_fetch_array($result)){
        $ruta=$row['imagen'];
        $cod=$row['codigo'];
        echo "<strong>Código: </strong>".$row['codigo']."<br>";
        echo "<strong>Producto: </strong>".$row['producto']."<br>";
        echo "<strong>Detalles: </strong>".$row['detalle']."<br>";
        echo "<strong>Precio: </strong>".$row['precio']."€<br>";
        echo "<strong>Descuento: </strong>".$row['descuento']."%<br>";
        echo "<img src=$ruta width='250'><br>";
        echo "<a href='bajas.php?codEliminar=$cod'>Eliminar producto</a><br><br>";
    }


    //Cerramos la conexión
    mysqli_close($conn);
    ?>
</body>
</html>