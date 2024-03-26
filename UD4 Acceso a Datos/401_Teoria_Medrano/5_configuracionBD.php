<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion BD</title>
</head>

<body>
    <?php
    include 'config/database.inc.php';

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión establecida con éxito";
    } catch (PDOException $e) {
        echo "Fallo al conectar a MySQL: " . $e->getMessage();
    }
    ?>
</body>

</html>