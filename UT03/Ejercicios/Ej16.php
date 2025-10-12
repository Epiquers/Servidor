<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
        // Procesamos si se ha enviado el formulario
        if($_SERVER['REQUEST_METHOD']==="POST"){
            // Comprobamos que existen las claves y no están 
            if(isset($_POST['num']) && $_POST['num']!=""){
                $num=$_POST['num'];
            }
        }
            
    ?>
    <form action="" method="POST">
        <fieldset>
            <legend>Matriz</legend>
            <div>
                <label for="num">Introduce un número</label>
                <input name="num" id="num" type="text">
            </div>
            <br>

            <?php
                if(isset($num)){
                    function matriz($num){
                        $matriz="";
                        for ($i=0; $i<$num; $i++){
                            for($j=0; $j<$num; $j++){
                                $matriz.=rand(0,9)." ";
                            }
                            $matriz.="<br>";
                        }
                        return $matriz;
                    }

                    echo "Matriz de tamaño $num: <br><br>";
                    echo matriz($num);
                }
            ?>
            <br>
            <input type="submit" name="boton" value="Ejecutar">
        </fieldset>
    </form>
</body>
</html>