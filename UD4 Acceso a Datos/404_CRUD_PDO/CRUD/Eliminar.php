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
        $conexion = new PDO("mysql:host=$db_host; dbname=$db_nombre", $db_usuario, $db_contra);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET utf8");

        $consulta = "SELECT * FROM `datosclientes` WHERE `DNI`=:dni";

        $resultado = $conexion->prepare($consulta);

        $resultado->execute(array(":dni" => $dni));

        if ($resultado == false) {
            echo "<h1>Error en la consulta</h1><br>";
        } else {
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
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

        $consulta = "DELETE FROM `datosclientes` WHERE `DNI`=:dni";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array(":dni" => $dni));

        $resultado->closeCursor();
    } catch (Exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }
    ?>
</body>

</html>