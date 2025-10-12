<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['base']) && $_POST['base']!=="" && isset($_POST['altu']) && $_POST['altu']!==""){
            $base=$_POST['base'];
            $altu=$_POST['altu'];
            $area=$base*$altu/2;
            }
        }
    ?>


    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="base">Introduce la base del triangulo: &nbsp;</label>
                <input name="base" id="base" type="number" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
            <div id="BloqueFormulario">
                <label for="altu">Introduce la altura del triangulo: </label>
                <input name="altu" id="altu" type="number" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
        if(isset($base) && isset($altu) && isset($area)){
           echo "El area de un triangulo de base $base y altura $altu es $area";
        }
        ?>

        <br>
        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>