<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_47</title>

    <style>
        table {
            width: 50%;
            text-align: center;
            border: 1px solid black;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php

        $busqueda=$_GET["buscar"];

        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        //$consulta = "SELECT * FROM datospersonales WHERE Nombre LIKE '%$busqueda%'";
        $consulta = "SELECT * FROM datospersonales WHERE Nombre LIKE '$busqueda'";

        echo $consulta . "<br><br>";

        $resultados = mysqli_query($conexion, $consulta);
        while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
            echo "<table width='50%' aling='center' boder='1'><tr><td>";
            echo $fila['DNI'] . "</td><td>";
            echo $fila['Nombre'] . "</td><td>";
            echo $fila['Apellido'] . "</td><td>";
            echo $fila['EDAD'] . "</td><td>";
            echo $fila['Ciudad'] . "</td><td>";
            echo "</tr></table><br>";
        }

        mysqli_close($conexion);
        
    ?>
</body>

</html>