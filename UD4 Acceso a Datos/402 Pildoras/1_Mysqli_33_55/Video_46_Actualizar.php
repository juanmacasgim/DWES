<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_46_Actualizar</title>

    <style>
        /* table {
            width: 50%;
            text-align: center;
            border: 1px solid black;
            margin: 0 auto;
        } */
    </style>
</head>

<body>
    <?php
    $dni = $_GET["DNI"];
    $nombre = $_GET["Nombre"];
    $apellido = $_GET["Apellido"];
    $edad = $_GET["EDAD"];
    $ciudad = $_GET["Ciudad"];

    require("datos_conexion.php");

    try {
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
    } catch (mysqli_sql_exception $e) {
        echo "Error al conectar a la BBDD: " . $e->getMessage();
        exit();
    }

    mysqli_set_charset($conexion, "utf8");

    $consulta = "UPDATE `datospersonales` SET `Nombre`='$nombre',`Apellido`='$apellido',`EDAD`='$edad',`Ciudad`='$ciudad' WHERE `DNI`='$dni'";

    $resultados = mysqli_query($conexion, $consulta);

    if ($resultados == false) {
        echo "No se ha encontrado registro con ese DNI<br>";
    } else {
        echo ("Registro guardado<br><br>
            <table>
                <tr>
                    <td>DNI</td><td>$dni</td>
                </tr>
                <tr>
                    <td>Nombre</td><td>$nombre</td>
                </tr>
                <tr>
                    <td>Apellido</td><td>$apellido</td>
                </tr>
                <tr>
                    <td>Edad</td><td>$edad</td>
                </tr>
                <tr>
                    <td>Ciudad</td><td>$ciudad</td></tr>
            </table>");
    }

    mysqli_close($conexion);
    ?>
</body>

</html>