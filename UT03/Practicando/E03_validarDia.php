<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dia =strtoupper($_POST['dia']);
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Día de la semana</legend>
            <div>
                <label for="">Introduce un día de la semana (L,M,X,J,V,S,D)</label>
                <input type="text" name="dia" required>
            </div>            
            <br>
            <?php
                if(isset($dia)){
                    switch($dia){
                        case "L": echo "Lunes es un día valido laboral."; break;
                        case "M": echo "Martes es un día válido laboral."; break;
                        case "X": echo "Miércoles es un día válido laboral."; break;
                        case "J": echo "Jueves es un día válido laboral."; break;
                        case "V": echo "Viernes es un día válido laboral."; break;
                        case "S": echo "Sábado es un día válido de fin de semana."; break;
                        case "D": echo "Domingo es un día válido de fin de semana."; break;
                        default: echo "No es un día válido";
                    }
                }
            ?>
            <br><br>
            <input type="submit" name="Comprobar">
        </fieldset>
    </form>
</body>

</html>