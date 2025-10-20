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
            print("Código: ".$row["codigo"]."<br>");
            print("Producto: ".$row["producto"]."<br>");
            print("Detalle: ".$row["detalle"]."<br>");
            print("Precio: ".$row["precio"]."<br>");
            print("Descuento: ".$row["descuento"]."<br>");
            print '<img src="images/".$row["imagen"]>'; 
        }
    ?>
</body>
</html>