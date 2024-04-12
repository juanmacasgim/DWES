<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_38</title>

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
        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }
        
        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM datospersonales WHERE Apellido LIKE '%ez'";

        $resultados = mysqli_query($conexion, $consulta);
        while($fila = mysqli_fetch_row($resultados)){
            echo "<table width='50%' aling='center' boder='1'><tr><td>";
            echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td>";
            echo $fila[3] . "</td><td>";
            echo $fila[4] . "</td><td>";
            echo "</tr></table><br>";
        }

        mysqli_close($conexion);
        
    ?>
</body>

</html>