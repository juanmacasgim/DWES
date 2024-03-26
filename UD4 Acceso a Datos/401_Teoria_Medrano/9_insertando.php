<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando Registros</title>
</head>

<body>
    <?php
    include 'config/database.inc.php';

    $conexion = null;

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $codart = "AAAA";
        $seccion = "Electrónica";
        $nombre = "Cable HDMI";
        $precio = 10.5;
        $fecha = "11-03-2023";
        $importado = true;
        $paisorigen = "España";

        $consulta = "INSERT INTO productos(codigoarticulo, seccion, nombrearticulo, precio, fecha, importado, paisdeorigen) 
                                    VALUES (:codart, :secc, :nombre, :precio,:fecha,:importado,:paisorigen)";
        
        $sentencia = $conexion->prepare($consulta);
        $sentencia->bindValue(":codart", $codart);
        $sentencia->bindValue(":secc", $seccion);
        $sentencia->bindValue(":nombre", $nombre);
        $sentencia->bindValue(":precio", $precio);
        $sentencia->bindValue(":fecha", $fecha);
        $sentencia->bindValue(":importado", $importado);
        $sentencia->bindValue(":paisorigen", $paisorigen);

        $isOK=$sentencia->execute();
        $idGenerado = $conexion->lastInsertId();

        echo "Ultimo Id: " . $idGenerado;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>