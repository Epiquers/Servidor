<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num = $_POST['num'];
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Tabla de multiplicar</legend>
            <label for="">Introduce un número: </label>
            <input type="number" name="num" required>
            <br>

            <?php
            if (isset($num)) {
                $archivo = fopen("tabla.txt", "w");
                $mensaje = "La tabla de multiplicar del $num es: " . PHP_EOL;
                echo "<h4>La tabla de multiplicar del $num es: </h4>";

                for ($i = 1; $i <= 10; $i++) {
                    echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                    $mensaje .= $num . " x " . $i . " = " . ($num * $i) . PHP_EOL;
                }
                fputs($archivo, $mensaje);
                fclose($archivo);
            }
            ?>

            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>