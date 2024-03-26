<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo de ejemplo</title>
</head>

<body>
    <?php
    $file = "17_archivo_ejemplo.txt";
    $texto = "Luz fuego destrucción, el mundo puede ser una ruina, no lo podemos permitiiiiir - Bola de Dragon Z";

    $fp = fopen("17_archivo_ejemplo.txt", "w");
    fwrite($fp, $texto);

    $datos = stat($file);
    echo $datos[3] . "<br>"; // Número de enlaces
    echo $datos[7] . "<br>"; // Tamaño del archivo
    echo $datos[8] . "<br>"; // Momento de último acceso
    echo $datos[9] . "<br>"; // Momento de última modificación
    ?>
</body>

</html>