<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Parámetros</title>
</head>

<body>
    <?php
    include 'config/database.inc.php';

    $conexion = null;

    // 2. Conexión a la base de datos
    try {
        $codigo = "AR44";

        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM productos WHERE codigoarticulo = ?";
        $sentencia = $conexion->prepare($consulta);

        $isOK=$sentencia->execute([$codigo]);
        $cantidadAfectada = $sentencia->rowCount();
        echo "Cantidad de registros afectados: $cantidadAfectada";
    } catch (PDOException $e) {
        echo "Fallo al conectar a MySQL: " . $e->getMessage();
    }
    ?>
</body>

</html>