<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion PDO y try catch</title>
</head>

<body>
    <?php
    // 1. Variables de conexión
    $dns = 'mysql:host=localhost; dbname=dwes';
    $usuario = 'root';
    $contrasena = '';

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO($dns, $usuario, $contrasena);
        echo "Conexión establecida con éxito";
    } catch (PDOException $e) {
        echo "Fallo al conectar a MySQL: " . $e->getMessage();
    }
    ?>
</body>

</html>