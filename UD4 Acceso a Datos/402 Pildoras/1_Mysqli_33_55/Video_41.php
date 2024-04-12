<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_41</title>

    <style>
        table {
            width: 50%;
            text-align: center;
            border: 1px solid black;
            margin: 0 auto;
        }
    </style>

    <?php
    function busqueda($busqueda) {
        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM datospersonales WHERE Nombre LIKE '%$busqueda%'";

        $resultados = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo "<table width='50%' aling='center' boder='1'><tr><td>";
            echo $fila['DNI'] . "</td><td>";
            echo $fila['Nombre'] . "</td><td>";
            echo $fila['Apellido'] . "</td><td>";
            echo $fila['EDAD'] . "</td><td>";
            echo $fila['Ciudad'] . "</td><td>";
            echo "</tr></table><br>";
        }

        mysqli_close($conexion);
    }
    ?>
</head>

<body>
    <?php
    $mibusqueda = $_GET["buscar"];
    //$mipag = $_SERVER["PHP_SELF"];

    if ($mibusqueda != NULL) {
        busqueda($mibusqueda);
    } else {
        echo (
            "<form method='get'>
                <label>Buscar: <input type='text' name='buscar'></label>
                <input type='submit' name='enviando' value='Dale!'>
            </form>"
        );
        /* echo (
            "<form action='" . $mipag . "' method='get'>
                <label>Buscar: <input type='text' name='buscar'></label>
                <input type='submit' name='enviando' value='Dale!'>
            </form>"
        ); */
    }
    ?>
</body>

</html>