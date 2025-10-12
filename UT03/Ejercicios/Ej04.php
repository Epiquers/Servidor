<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['lista']) && $_POST['lista']!=="" ){
            $lista=$_POST['lista'];
            $lista=explode(" ",$lista);

            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="lista">Introduce 7 números enteros: </label>
                <input name="lista" id="lista" type="text" step="any" value="" placeholder="Introduce espacio entre los números" size="30" maxlength="40" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
            if(isset($lista)){
                $array=[];
                
                foreach($lista as $valor){
                    if(is_numeric($valor)){
                        $array[]=$valor;
                    }
                }
                if(count($array)==7){
                    foreach($array as $indice => $valor){
                        echo ($indice+1)." => $valor <br>";
                    }
                }else{
                    echo "Debes introducir 7 valores numéricos <br>";
                }
            }
        ?>

        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>