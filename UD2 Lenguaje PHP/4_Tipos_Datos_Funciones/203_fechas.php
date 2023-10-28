<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203_fechas</title>
</head>

<body>
    <?php
    //Definimos la fecha
    date_default_timezone_set("Europe/Madrid");

    $fechaActual = date('H:i:s'); // Aquí imprimo Hora:Minutos:Segundos
    echo "Formato 1: $fechaActual<br>";

    $fechaActual = date('g:i:s a'); // Aquí imprimo Hora:Minutos:Segundos en inglés
    echo "Formato 2: $fechaActual<br>";

    $fechaActual = date('d-m-Y'); // Aquí imprimo Día-Mes-Año
    echo "Formato 3: $fechaActual<br>";

    $fechaActual = date('H:i:s d-m-Y '); // Aquí imprimo Hora:Minutos:Segundos Día-Mes-Año
    echo "Formato 4: $fechaActual<br>";

    $fechaActual = date('j F Y'); // Aquí imprimo Día-Mes-Año pero el mes es el nombre
    echo "Formato 5: $fechaActual<br>";

    $fechaActual = date('l, j F Y'); //Aquí imprimo el nombre de día de la semana, Día Mes Año
    echo "Formato 6: $fechaActual<br>";

    $fechaActual = date('j-M-Y'); //Aquí imprimo Día-Mes-Año pero el mes está abreviado
    echo "Formato 7: $fechaActual<br>";

    $fechaActual = date('jS M Y'); //Aquí imprimo Día en inglés, Mes abreviado, Año
    echo "Formato 8: $fechaActual<br>";

    $fechaActual = date('z'); //Aquí imprimo el día del año
    echo "Formato 9: $fechaActual<br>";
    
    $fechaActual = date('W'); //Aquí imprimo la semana del año
    echo "Formato 10: $fechaActual<br>";
    ?>
</body>

</html>