<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['num1']) && isset($_POST['num2'])
            && $_POST['num1']!=="" && $_POST['num2'] !==""){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];

            $aux=$num1;
            $num1=$num2;
            $num2=$aux;

            $num1="1º valor: $num1";
            $num2="2º valor: $num2";
            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="num1">Introduce 1º valor: </label>
                <input name="num1" id="num1" type="number" step="any" value="" size="30" maxlength="60" class="CampoFormulario" require>
            </div>
            <div id="BloqueFormulario">
                <label for="num2">Introduce 2º valor:</label>
                <input name="num2" id="num2" type="number" step="any" value="" size="30" maxlength="60" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
            if(isset($num1) && isset($num2)){
                echo "Intercambiamos los valores: <br>";
                echo "$num1 <br>";
                echo "$num2 <br>";
            }
        ?>

        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>