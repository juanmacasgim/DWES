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
        $conexion = new PDO("mysql:host=$db_host; dbname=$db_nombre", $db_usuario, $db_contra);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion-> exec("SET CHARACTER SET utf8");
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
   
    ?>
</body>
</html>