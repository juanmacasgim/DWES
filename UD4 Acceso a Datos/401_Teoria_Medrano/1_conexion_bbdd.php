<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>

<body>
    <?php
        // 1. Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "dwes");

        // 2. Comprobación de la conexión
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
        } else {
            echo "Conexión establecida con éxito";
        }
    ?>
</body>

</html>