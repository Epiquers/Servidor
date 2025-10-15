<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lista = explode(",",$_POST['lista']);
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Mostrando números</legend>
            <label for="">Introduce 7 números naturales: </label>
            <input type="text" name="lista" placeholder="Separa cada valor con coma" required>
            <br><br>

            <?php
                if(isset($lista)){
                    $array=[];

                    foreach($lista as $valor){
                        if(is_numeric($valor)){
                            $array[]=$valor;
                        }
                    }
                    if(count($array)!=7){
                        echo "Tienes que introducir 7 valores naturales";
                    }else{
                        foreach($array as $indice => $valor){
                            echo ($indice+1)." → ".$valor."<br>";
                        }
                    }
                }
            ?>

            <br><br>
            <input type="submit" value="Mostrar">
        </fieldset>
    </form>
</body>

</html>