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
            if($num%2==0){
                echo "$num es PAR <br>";
                echo "Imprimimos los siguientes 10 números pares:<br>";
            }else{
                echo "$num es IMPAR <br>";
                echo "Imprimimos los siguientes 10 números impares:<br>";
            }

            for($i=0; $i<10; $i++){
                $num=$num+2;
                echo "$num ";
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