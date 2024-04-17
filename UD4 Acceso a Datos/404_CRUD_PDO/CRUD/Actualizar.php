<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

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
        $conexion-> exec("SET CHARACTER SET utf8");

        $consulta = "SELECT * FROM `datosclientes` WHERE `DNI`=:dni";

        $resultado = $conexion->prepare($consulta);

        $resultado -> execute(array(":dni"=>$dni));

        if ($resultado == false) {
            echo "<h1>Error en la consulta</h1><br>";
        } else {
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo ("
                <h1>Registro Encontrado</h1>
                <form action='Actualizado.php' method='get'>
                <label for='actualizar'>
                <table>
                    <tr>
                        <td>DNI</td>
                        <td><input type='text' name='DNI' class='input_disabled' value='" . $fila['DNI'] . " 'readonly></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type='text' name='Nombre' value='" . $fila['Nombre'] . "'></td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td><input type='text' name='Apellido' value='" . $fila['Apellido'] . "'></td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td><input type='text' name='Edad' value='" . $fila['Edad'] . "'></td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input type='text' name='Direccion' value='" . $fila['Direccion'] . "'></td>
                    </tr>
                    <tr>
                        <td>Localidad</td>
                        <td><input type='text' name='Localidad' value='" . $fila['Localidad'] . "'></td>
                    </tr>
                    <tr>
                        <td>Provincia</td>
                        <td><input type='text' name='Provincia' value='" . $fila['Provincia'] . "'></td>
                    </tr>
                    <tr>
                        <td>CP</td>
                        <td><input type='text' name='CP' value='" . $fila['CP'] . "'></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type='text' name='Telefono' value='" . $fila['Telefono'] . "'></td>
                    </tr>
                </label>
                    <tr>
                        <td></td>
                        <td>
                            <input type='submit' name='enviando' value='Actualizar'>
                        </td>
                    </tr>
                </table>
            </form>");
        }
            
    }

        $resultado->closeCursor();
    } catch (Exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }

    ?>
</body>

</html>