<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
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
            <legend>Intercambio de valores</legend>
            <div>
                <label for="">Introduce primer valor: &nbsp;&nbsp;</label>
                <input type="number" name="num1" step="any" value="<?php if (isset($_POST['num1'])) echo $_POST['num1'] ?>" required>
            </div>
            <div>
                <label for="">Introduce segundo valor:</label>
                <input type="number" name="num2" step="any" value="<?php if (isset($_POST['num2'])) echo $_POST['num2'] ?>" required>
            </div>
            <br>
            <?php
            if (isset($num1)) {
                echo "Intercambiando valores..<br><br>";
                $aux = $num1;
                $num1 = $num2;
                $num2 = $aux;

                echo "Pimer valor: $num1 <br>";
                echo "Segundo valor: $num2 <br>";
            }
            ?>
            <br>
            <input type="submit" value="Ejecutar">
        </fieldset>
    </form>
</body>

</html>