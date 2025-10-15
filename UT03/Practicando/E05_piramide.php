<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
</head>

<body>
    <?php

        $altura=5;

        for($i=1; $i<=$altura; $i++){
            $blancos=$altura-$i;
            for($j=1; $j<=$blancos; $j++){
                echo "&nbsp;&nbsp;";
            }
            $asteriscos=(2*$i)-1;
            for($x=1; $x<=$asteriscos; $x++){
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>

</html>