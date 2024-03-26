<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperacion de Datos</title>
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

    // 3. Consulta de datos
    $consulta = "SELECT * FROM `productos`";
    $listaproductos = mysqli_query($conexion, $consulta);

    // 4. Recuperación de datos
    if ($listaproductos) {
        //Mostrar los datos en una tabla
        echo "<table>";
        echo "<tr><th>Codigo</th><th>Seccion</th><th>Nombre</th><th>Precio</th><th>Fecha</th><th>Importado</th><th>Pais de Origen</th></tr>";
        foreach ($listaproductos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto['codigoarticulo'] . "</td>";
            echo "<td>" . $producto['seccion'] . "</td>";
            echo "<td>" . $producto['nombrearticulo'] . "</td>";
            echo "<td>" . $producto['precio'] . "</td>";
            echo "<td>" . $producto['fecha'] . "</td>";
            echo "<td>" . $producto['importado'] . "</td>";
            echo "<td>" . $producto['paisdeorigen'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se han encontrado productos";
    }
    ?>
</body>

</html>