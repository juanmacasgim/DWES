<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>
    <style>
        table{
            width:50%;
            border:1px dotted red;
            margin:auto;
        }
    </style>
</head> 

<body>

    <?php
    /*
    Información/título video: PHP/MySql. Importación de tablas MySql. Consultas SQL con filtros. Vídeo 38
    Enlace a video:  https://www.youtube.com/watch?v=lL8_bL24xd4
    Finalidad ejercicio:   COMPLETAR
    Alumno:  COMPLETAR

    FUNCIONES QUE FALTAN POR COMPLETAR EN EL CÓDIGO:
        require  
        mysqli_connect_errno
        mysqli_connect
        mysqli_select_db
        mysqli_fetch_row
        mysqli_query
    */

        //1 Importacion de los datos al crear la conexión.
        require("../datos_conexion.php");

        //2 Realiza la conexion con los datos para acceder a la base de datos.
        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        
        //3 Completar y comentar
        if (mysqli_connect_errno ()) {

            echo "Fallo al conectar con la BBDD";

            exit();
        }

        //4 Selecciona la base de datos, en el caso que no exista da error.
        mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

        //5 Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
        mysqli_set_charset ($conexion, "utf8");

        //6 Consulta a ejecutar en la BBDD dwes.(Como se puede ver se consultan todas las columnas de la tabla DATOSPERSONALES). 
        //En este caso solo devuelve las tuplas que el pais de origen se ESPAÑA.
        $consulta="SELECT * FROM productos WHERE paisdeorigen='ESPAÑA'";

        //7 Realizamos la consulta.
        $resultados=mysqli_query($conexion, $consulta);

        //8 Obtenemos todas las filas.
        while($fila=mysqli_fetch_row($resultados)){
            
            echo "<table><tr><td>";

            echo $fila[0] . "</td><td>";       
            echo $fila[1] . "</td><td>";         
            echo $fila[2] . "</td><td>";      
            echo $fila[3] . "</td><td>";        
            echo $fila[4] . "</td><td>";         
            echo $fila[5] . "</td><td>";                
            echo $fila[6] . "</td><td></tr></table>";        
            echo "<br/>";

        }


        //9 Función para cerrar la conexión creada anteriormente con phpMyadmin
        mysqli_close($conexion);

    ?>

</body>

</html>