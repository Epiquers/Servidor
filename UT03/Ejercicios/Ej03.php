<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['letra']) && $_POST['letra']!=="" ){
            $letra=$_POST['letra'];
            $letra=strtoupper($letra);
            
            switch($letra){
                case "L": $letra="Lunes. Es un día laboral"; break;
                case "M": $letra="Martes. Es un día laboral"; break;
                case "X": $letra="Miércoles. Es un día laboral"; break;
                case "J": $letra="Jueves. Es un día laboral"; break;
                case "V": $letra="Viernes. Es un día laboral"; break;
                case "S": $letra="Sábado. Pertenece al fin de semana"; break;
                case "D": $letra="Domingo. Pertenece al fin de semana"; break;
                default: $letra="$letra. No pertenece a ningún día de la semana";
            }

            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="letra">Introduce letra (L,M,X,J,V,S,D): </label>
                <input name="letra" id="letra" type="text" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
            if(isset($letra)){
                echo "Intercambiamos los valores: <br>";
                echo "$letra <br>";
            }
        ?>

        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>