<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['dia']) && $_POST['dia']!=="" ){
            $num=$_POST['dia'];
            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="dia">Introduce un día de la semana: </label>
                <input name="dia" id="dia" type="text" step="any" placeholder="(L,M,X,J,V,S,D)" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
        if(isset($num)){
            function esDiaValido($d){
                switch($d){
                    case "L":
                    case "M":
                    case "X":
                    case "J":
                    case "V":
                    case "S":
                    case "D":
                        return true;
                    default: 
                        return false;
                }
            }
            function esDiaLaboral($d){
                if($d=="S" || $d=="D"){
                    return false;
                }
                return true;
            }
            // Convertimos la letra en mayúsculas
            $num=strtoupper($num);

            if(esDiaValido($num)){
                if(esDiaLaboral($num)){
                    echo "$num es un día válido laboral";
                }else{
                    echo "$num es un día válido de fin de semana";
                }
            }else{
                echo "$num no es un día válido";
            }
        }

        ?>

        <br>
        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>