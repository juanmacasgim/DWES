<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_44</title>

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
        $dni=$_GET["DNI"];

        require("datos_conexion.php");

        try {
            $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        } catch (mysqli_sql_exception $e) {
            echo "Error al conectar a la BBDD: " . $e->getMessage();
            exit();
        }

        mysqli_set_charset($conexion, "utf8");

        $consulta = "DELETE FROM `datospersonales` WHERE DNI = '$dni'";

        $resultados = mysqli_query($conexion, $consulta);
        
        if($resultados==false){
            echo "Error en la consulta";
        }else{
            if(mysqli_affected_rows($conexion)==0){
                echo "No hay registros que eliminar con ese criterio";
            }else{
                echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
            }
        }

        mysqli_close($conexion);
    ?>
</body>

</html>