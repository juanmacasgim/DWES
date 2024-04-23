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

        .input_disabled {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <?php
    //Obtenemos los datos del formulario
    $dni = $_GET["DNI"];
    
    //Obtenemos los datos de la conexion
    require("../src/Conexion.php");

    try {
        //Realizamos la conexion
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    } catch (mysqli_sql_exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }

    mysqli_set_charset($conexion, "utf8");


    //Generamos la consulta
    $consulta = "SELECT * FROM `datosclientes` WHERE `DNI`='$dni'";

    //Ejecutamos la consulta
    $resultados = mysqli_query($conexion, $consulta);

    if ($resultados == false) {
        echo "<h1>Error en la consulta</h1><br>";
    } else if (mysqli_num_rows($resultados) == 0) {
        echo "<h1>Registro no encontrado</h1><br>";
    } else {
        //Mostramos los datos en un formulario
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
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

    mysqli_close($conexion);
    ?>
</body>

</html>