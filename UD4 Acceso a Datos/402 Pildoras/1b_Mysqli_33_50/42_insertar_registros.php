<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando valores en BBDD</title>
</head>
<body>
<?php

/*
    Información/título video: PHP/MySql. Insertando registros en BBDD MySql. Vídeo 42
    Enlace a video:  https://www.youtube.com/watch?v=gaJjBm-T7SE
    Finalidad ejercicio:  
    Alumno: 

        FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  

    INSERT INTO productos (codigoarticulo, seccion, nombrearticulo)
    $consulta
    ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')



    */

    //1 Comentar
    require("../datos_conexion.php");

    //2 Comentar
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    //3 Comentar
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //4 Comentar
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //5 Comentar
    mysqli_set_charset ($conexion, "utf8");

    //6 Comentar y completar
    $consulta=" INSERT INTO productos (codigoarticulo, seccion, nombrearticulo)  VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";

    echo "<h2> Se ha introducido en la tabla los VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";
    //7 Comentar y completar
    $resultados=mysqli_query($conexion, $consulta);

    //8 
    mysqli_close($conexion);

   
?>
</body>
</html>