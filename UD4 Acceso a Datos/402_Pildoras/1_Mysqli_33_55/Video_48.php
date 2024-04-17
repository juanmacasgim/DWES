<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video_48</title>

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

        $dni= mysqli_real_escape_string($conexion,$_GET["DNI"]); 
        $nombre= mysqli_real_escape_string($conexion,$_GET["Nombre"]);

        mysqli_set_charset($conexion, "utf8");

        //$consulta = "SELECT * FROM datospersonales WHERE Nombre LIKE '%$busqueda%'";
        $consulta = "DELETE FROM `datospersonales` WHERE DNI = '$dni' AND Nombre = '$nombre'";

        echo $consulta . "<br><br>";

        mysqli_query($conexion, $consulta);

        if(mysqli_affected_rows($conexion)>0){
            echo "Borrado exitoso";
        }else{
            echo "No se ha encontrado el registro";
        }
        
        
        mysqli_close($conexion);
        
    ?>
</body>

</html>