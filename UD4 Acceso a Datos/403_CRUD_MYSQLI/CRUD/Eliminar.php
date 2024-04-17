<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>

    <style>
        h1 {
            text-align: center;
            width: 50%;
        }

        table {
            border: 1px solid #F00;
            padding: 20px 50px;
            margin-top: 50px
        }

        body {
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    $dni = $_GET["DNI"];

    require("../src/Conexion.php");

    try {
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    } catch (mysqli_sql_exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM `datosclientes` WHERE `DNI`='$dni'";

    $resultados = mysqli_query($conexion, $consulta);
    if ($resultados == false) {
        echo "<h1>Error en la consulta</h1><br>";
    } else if (mysqli_num_rows($resultados) == 0) {
        echo "<h1>Registro no encontrado</h1><br>";
    } else {
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo ("
            <h1>Registro Eliminado</h1>
            <table>
                <tr>
                    <td>DNI</td>
                    <td>" . $fila['DNI'] . "</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>" . $fila['Nombre'] . "</td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>" . $fila['Apellido'] . "</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>" . $fila['Edad'] . "</td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td>" . $fila['Direccion'] . "</td>
                </tr>
                <tr>
                    <td>Localidad</td>
                    <td>" . $fila['Localidad'] . "</td>
                </tr>
                <tr>
                    <td>Provincia</td>
                    <td>" . $fila['Provincia'] . "</td>
                </tr>
                <tr>
                    <td>CP</td>
                    <td>" . $fila['CP'] . "</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>" . $fila['Telefono'] . "</td>
                </tr>
            </table>");
        }
    }

    $consulta = "DELETE FROM `datosclientes` WHERE `DNI`='$dni'";

    $resultados = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);
    ?>
</body>

</html>