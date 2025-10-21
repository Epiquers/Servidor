<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar productos</title>
</head>

<body>
    <?php
    include("conexion.php");
    $cod = $_POST['product'];
    $consulta = "SELECT * FROM productos WHERE codigo='$cod'";
    $resultado = mysqli_query($conn, $consulta);

    $row = mysqli_fetch_array($resultado);
    $producto = $row['producto'];
    $detalle = $row['detalle'];
    $precio = $row['precio'];
    $descuento = $row['descuento'];

    ?>
    <form action="altas.php" method="post" enctype="multipart/form-data">
        <table width="400" border="0">
            <tr>
                <td colspan="4">MODIFICAR DE PRODUCTOS </td>
            </tr>
            <tr>
                <td>Codigo</td>
                <td><input type="text" name="codigo" value="<?php echo $cod ?>" required readonly /></td>
                <td>Producto</td>
                <td><input type="text" name="producto" value="<?php echo $producto ?>" required /></td>
            </tr>
            <tr>
                <td>Detalle</td>
                <td><input type="text" name="detalle" value="<?php echo $detalle ?>" required /></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio" value="<?php echo $precio ?>" required /></td>
                <td>Descuento</td>
                <td><input type="text" name="descuento" value="<?php echo $descuento ?>" required /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="button" value="Enviar" /></td>
                <td colspan="2"><input type="reset" name="button2" value="Restablecer" /></td>
            </tr>

        </table>
    </form>
    <?php 
        mysqli_close($conn);
    ?>
    <p><a href="menu.php"> Volver al menu</a></p>
</body>

</html>