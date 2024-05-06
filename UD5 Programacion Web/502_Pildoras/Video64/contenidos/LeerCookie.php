<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer </title>
</head>

<body>
    <?php
    // Leemos la cookie
    if (isset($_COOKIE["prueba"])) {
        // Mostramos la cookie
        echo $_COOKIE["prueba"];
    } else {
        // Si no se ha creado la cookie
        echo "No se ha creado la cookie";
    }
    ?>
</body>
</html>