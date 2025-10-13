<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==='POST'){
            // Comprobamos que existen las claves y no están vacías
            if(isset($_POST['num1']) && $_POST['num1']!=="" && isset($_POST['num2']) && $_POST['num2']!==""){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            }
        }
    ?>


    <form action="" method="POST">
        <fieldset>
            <legend>Operaciones</legend>
            <div id="BloqueFormulario">
                <label for="num1">Introduce un número: &nbsp;</label>
                <input name="num1" id="num1" type="number" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
            <div id="BloqueFormulario">
                <label for="num2">Introduce otro número: </label>
                <input name="num2" id="num2" type="number" step="any" value="" size="10" maxlength="20" class="CampoFormulario" require>
            </div>
        
            <br>
        <?php
        if(isset($num1) && isset($num2)){  
            function sumar($n1, $n2){
            return $n1+$n2;
            }
            function restar($n1, $n2){
            return $n1-$n2;
            }
            function multi($n1, $n2){
            return $n1*$n2;
            }
            function divi($n1, $n2){
                if($n2==0){
                    return "No se puede dividir entre 0";
                }else{
                    return $n1/$n2;
                }
            }

            echo "La suma de $num1 y $num2 es: ".sumar($num1,$num2)."<br>";
            echo "La resta de $num1 y $num2 es: ".restar($num1,$num2)."<br>";
            echo "La multiplicación de $num1 por $num2 es: ".multi($num1,$num2)."<br>";
            echo "La dividsión de $num1 entre $num2 es: ".divi($num1,$num2)."<br>";
        }
        ?>

        <br>
        <br>
        <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>