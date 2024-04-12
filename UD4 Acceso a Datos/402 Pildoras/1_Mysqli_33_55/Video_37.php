<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_37</title>
</head>

<body>
    <?php
        $db_host = "localhost";
        $db_nombre = "pruebas";
        $db_usuario = "root";
        $db_contra = "";

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }
        
        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM datospersonales";

        $resultados = mysqli_query($conexion, $consulta);
        while($fila = mysqli_fetch_row($resultados)){
            echo $fila[0] . "<br>";
            echo $fila[1] . "<br>";
            echo $fila[2] . "<br>";
            echo $fila[3] . "<br>";
            echo "<br>";
        }

        mysqli_close($conexion);
        
    ?>
</body>

</html>