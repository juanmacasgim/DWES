<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_36</title>
</head>

<body>
    <?php
        $db_host = "localhost";
        $db_nombre = "pruebas";
        $db_usuario = "root";
        $db_contra = "";

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        $consulta = "SELECT * FROM datospersonales";

        $resultados = mysqli_query($conexion, $consulta);

        $fila = mysqli_fetch_row($resultados);

        echo $fila[0] . "<br>";
        echo $fila[1] . "<br>";
        echo $fila[2] . "<br>";
        echo $fila[3] . "<br>";
    ?>
</body>

</html>