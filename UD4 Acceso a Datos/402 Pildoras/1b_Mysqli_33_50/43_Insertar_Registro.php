<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Nuevo Articulo en BBDD</title>
</head>
<body>

<?php
/*
    Información: PHP/MySql. Insertando registros en BBDD MySql II. Vídeo 43
    Enlace a video: https://www.youtube.com/watch?v=U3gFWe9tWec
    Finalidad ejercicio:
    Alumno: 

    FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  

["c_art"]
["importado"]
('$cod', '$sec', '$nom', '$pre', '$fec', '$imp', '$por')
false
INSERT INTO 

*/
?>

<?php

    //1 Comentar y completar
    $cod=$_GET ["c_art"];
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET ["importado"];
    $por=$_GET["p_orig"];


    //2 Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
    require("../datos_conexion.php");

    //3 Función de php para conectarse a phpMyadmin aportado los anteriores datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    //4 Comentar
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //5 Control de errores en el cual Imprime una frase en caso de encontrar la BBDD que se indica con la variable $db_nombre
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //6 Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
    mysqli_set_charset ($conexion, "utf8");

    //7 Comentar y completar 
    $consulta="INSERT INTO  productos (codigoarticulo, seccion, nombrearticulo, precio, fecha, importado, paisdeorigen) VALUES 
     ('$cod', '$sec', '$nom', '$pre', '$fec', '$imp', '$por')   ";

    //8 Comentar
    $resultados=mysqli_query($conexion, $consulta);

    //9 Comentar y completar
    if ($resultados==false) {
        echo "Error en la consulta";
    }else{
        echo "Registro guardado <br><br>";
        echo "<table><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$imp</td></tr>";
        echo "<tr><td>$por</td></tr></table>";

    }

    //Función para cerrar la conexión creada anteriormente con phpMyadmin
    mysqli_close($conexion);

   
?>
    
</body>
</html>