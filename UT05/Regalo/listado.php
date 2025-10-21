<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");

        $consulta="SELECT * FROM productos";
        $result=mysqli_query($conn, $consulta);

        while($row=mysqli_fetch_array($result)){
            print("<strong>Código: </strong>".$row["codigo"]."<br>");
            print("<strong>Producto: </strong>".$row["producto"]."<br>");
            print("<strong>Detalle: </strong>".$row["detalle"]."<br>");
            print("<strong>Precio: </strong>".$row["precio"]."€<br>");
            print("<strong>Descuento: </strong>".($row["descuento"]*100)."%<br>");
            $ruta=$row['imagen'];
            print "<img width='200px' src=$ruta><br><br>";

        }
    ?>
</body>
</html>