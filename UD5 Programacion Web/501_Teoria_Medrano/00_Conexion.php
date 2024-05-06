<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>

<body>
    <?php
    $db_host = "localhost";
    $db_nombre = "clientes";
    $db_usuario = "root";
    $db_contra = "";

    try {
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    } catch (mysqli_sql_exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }
   
    ?>
</body>
</html>