<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo de ejemplo</title>
</head>

<body>
    <?php
    $fp = fopen("17_archivo_ejemplo.txt", "r");

    if (!$fp = fopen("17_archivo_ejemplo.txt", "r")) {
        echo "Error al abrir el archivo";
    } else {
        echo "Archivo abierto correctamente";
    }
    ?>
</body>

</html>