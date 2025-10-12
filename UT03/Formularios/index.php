<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de ejemplo</title>
</head>


<body>
    <?php
    // Solo procesamos si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobamos que existan las claves y no estén vacías
        if (isset($_POST['num1']) && isset($_POST['num2']) 
        && $_POST['num1'] !== '' && $_POST['num2'] !== ''
        && is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
            $num1 = (float) $_POST['num1'];
            $num2 = (float) $_POST['num2'];
            $sms = $num1 + $num2;
            $sms= "La suma de los números introducidos es --> $sms";
        } else {
            $sms = "Por favor introduce solo números.";
        }
    }
?>
    <form action="" method="POST">
        <fieldset>
            <legend>prueba</legend>
            <div id="BloqueFormulario">
                <label for="num1">Número 1:</label>
                <input name="num1" id="num1" value="" size="40" maxlength="100" type="text" class="CampoFormulario"
                    required>
            </div>
            <div id="BloqueFormulario">
                <label for="num2">Número 2:</label>
                <input name="num2" id="num2" value="" size="40" maxlength="100" type="text" class="CampoFormulario"
                    required>
            </div>
            <br />

            <?php
                if (isset($sms)) {
                    echo $sms;
                }
            ?>

            <br />
            <p><input type="submit" name="login" value="sumar" /></p>
        </fieldset>
    </form>

</body>

</html>