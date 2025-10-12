<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
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

            $suma=$num1+$num2;
            $resta=$num1-$num2;
            $multi=$num1*$num2;
            $divi=$num1/$num2;

            $suma= "La suma de los números introducidos es --> $suma";
            $resta= "La resta de los números introducidos es --> $resta";
            $multi= "La multiplicación de los números introducidos es --> $multi";
            $divi= "La división de los números introducidos es --> $divi";
            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="num1">Introduce número: </label>
                <input name="num1" id="num1" type="number" step="any" value="" size="30" maxlength="60" class="CampoFormulario" require>
            </div>
            <div id="BloqueFormulario">
                <label for="num2">Introduce número: </label>
                <input name="num2" id="num2" type="number" step="any" value="" size="30" maxlength="60" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
            if(isset($suma) && isset($resta) && isset($multi) && isset($divi)){
                echo "$suma <br>";
                echo "$resta <br>";
                echo "$multi <br>";
                echo "$divi <br>";
            }
        ?>

        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>