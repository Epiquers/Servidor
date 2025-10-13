<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>

    <?php
        
        $n1=5;
        $n2=10;
        $n3=15;
        $n4=20;
        $n5=25;

        echo "El resultado de la suma de $n1, $n2, $n3, $n4 y $n5 es: ".sumar($n1, $n2, $n3, $n4, $n5);

        function sumar($num1, $num2, $num3, $num4, $num5){
            return $num1+$num2+$num3+$num4+$num5;
        }

    ?>
</body>
</html>