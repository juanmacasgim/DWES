<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>201_print</title>
</head>

<body>
    <?php
    // Declaramos las variables
    $ciclo = "Desarrollo de Aplicaciones Web";
    $modulo = "Desarrollo Web en Entorno Cliente";
    $anioini = 2023;
    $aniofin = 2024;
    $nota = 3.333333;

    // Y las imprimimos
    // echo devuelve lo que le pongamos
    echo $ciclo, " ", $modulo;

    printf("<br/> Nombre del ciclo: %s", $ciclo); //Cadena
    printf("<br/> Año del inicio: %d, Año de finalizacion: %d", $anioini, $aniofin); //Cadena
    printf("<br/> Nota actual del curso: %.2f", $nota); // Decimal
    printf("<br/> Nota actual en binario: %b", $nota); // Binario
    printf("<br/> Nota actual en notación científica: %e", $nota); //Notación Científica
    
    $formateada = sprintf("<br/> Este es un SPRINT: Nota actual del curso: %.2f", $nota); // sprint
    echo $formateada;
    ?>
</body>

</html>