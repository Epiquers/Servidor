<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de artículos</title>
</head>

<body>
    <a href="menu.php">Volver al menú</a>
    <h1>Eliminar producto versión 2</h1>

    <h2>Producto que desea eliminar (Debe conocer el código)</h2>
    <?php
    include("conexion.php");
    //Lógica del fichero
    ?>
    <form action="bajas2.php" method="POST">
        <select name="deleteCodigo" id="deleteCodigo">
            <?php
            $consulta = "Select codigo from productos";
            $result = mysqli_query($conn, $consulta);
            while ($row = mysqli_fetch_array($result)) {
                $cod = $row['codigo'];
                echo "<option value=$cod>$cod</option>";
            }
            ?>
        </select>
        <input type="submit" value="Eliminar">
    </form>
    <?php
    //Cerramos la conexión
    mysqli_close($conn);
    ?>
</body>

</html>