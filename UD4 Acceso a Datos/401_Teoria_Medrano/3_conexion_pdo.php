<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion PDO</title>
</head>

<body>
    <?php
    // 1. Conexión a la base de datos
    $conexion = new PDO('mysql:host=localhost; dbname=dwes','root','');

    // 2. Comprobación de la conexión
    if ($conexion) {
        echo "Conexión establecida con éxito";
        
    } else {
        echo "Fallo al conectar a MySQL";
    }
    ?>
</body>

</html>