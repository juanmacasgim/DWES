<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_46</title>

    <style>
        .input_disabled {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <?php
    $dni = $_GET["DNI"];

    require("datos_conexion.php");

    try {
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    } catch (mysqli_sql_exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }

    mysqli_set_charset($conexion, "utf8");

    $consulta = "Select * FROM `datospersonales` WHERE DNI = '$dni'";

    $resultados = mysqli_query($conexion, $consulta);

    if ($resultados == false) {
        echo "No se ha encontrado registro con ese DNI<br>";
    } else {
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo "<form action='Video_46_Actualizar.php' method='get'>";
            echo "<input type='text' name='DNI' class='input_disabled' value='" . $fila['DNI'] . " 'readonly><br>";
            echo "<input type='text' name='Nombre' value='" . $fila['Nombre'] . "'><br>";
            echo "<input type='text' name='Apellido' value='" . $fila['Apellido'] . "'><br>";
            echo "<input type='text' name='EDAD' value='" . $fila['EDAD'] . "'><br>";
            echo "<input type='text' name='Ciudad' value='" . $fila['Ciudad'] . "'><br>";
            echo "<input type='submit' name='enviando' value='Actualizar!'>";
        }
    }

    mysqli_close($conexion);
    ?>
</body>

</html>