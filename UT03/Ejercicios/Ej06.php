<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['num']) && $_POST['num']!=="" ){
            $num=$_POST['num'];
            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="num">Introduce un número entero: </label>
                <input name="num" id="num" type="number" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
        if(isset($num)){
            for($i=0; $i<$num; $i++){
                for ($x=0; $x<$num; $x++){
                    echo "* ";
                }
                echo "<br>";
            }
        }
        ?>

        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>