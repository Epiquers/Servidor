<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Operaciones</legend>
            <div>
                <label for="">Introduce un número</label>
                <input type="number" name="num1" step="any" required>
            </div>
            <div>
                <label for="">Introduce un número</label>
                <input type="number" name="num2" step="any" required>
            </div>

            <?php
            if (isset($num1)) {
                echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
                echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
                echo "$num1 x $num2 = " . ($num1 * $num2) . "<br>";
                if ($num2 == 0) {
                    echo "No se puede dividir entre 0 <br>";
                } else {
                    echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
                }
            }
            ?>
            <input type="submit" value="Calcular">

        </fieldset>
    </form>
</body>

</html>