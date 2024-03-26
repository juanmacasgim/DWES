<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asociativo</title>
</head>

<body>
    <?php
    include 'config/database.inc.php';

    $conexion = null;

    // 2. Conexión a la base de datos
    try {
        $conexion = new PDO(DNS, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM productos";
        
        $sentencia = $conexion->prepare($consulta);
        $sentencia->setFetchMode(PDO::FETCH_ASSOC); // Asociativo (nombre de las columnas
        $sentencia->execute();

        echo "<table>";
        echo "<tr><th>Codigo</th><th>Seccion</th><th>Nombre</th><th>Precio</th><th>Fecha</th><th>Importado</th><th>Pais de Origen</th></tr>";
        while ($fila = $sentencia->fetch()) {
            
            echo "<tr>";
            echo "<td>" . $fila['codigoarticulo'] . "</td>";
            echo "<td>" . $fila['seccion'] . "</td>";
            echo "<td>" . $fila['nombrearticulo'] . "</td>";
            echo "<td>" . $fila['precio'] . "</td>";
            echo "<td>" . $fila['fecha'] . "</td>";
            echo "<td>" . $fila['importado'] . "</td>";
            echo "<td>" . $fila['paisdeorigen'] . "</td>";
            echo "</tr>";
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>