<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP MySQL. Página de búsqueda I. Vídeo 39</title>
    <style>
        table {
            width: 50%;
            border: 1px dotted #FF0000;
            margin: auto;
        }
    </style>
</head>

<body>

   <?php
   /*
    Información/título video:  PHP/MySql. Página de búsqueda I. Vídeo 39
    Enlace a video: https://www.youtube.com/watch?v=VeFxfAIWz6Q 
    Finalidad ejercicio:  
    Alumno: Juan Maria Castillo Giménez  

    FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:
    = 'ALTA COSTURA'
    MYSQLI_ASSOC
    $connection  
    "utf8"

    */
    
    //1 Comentar
    require("../datos_conexion.php");

    //2 Completar y comentar
    $connection = mysqli_connect($db_host, $db_usuario, $db_contra);

    //3 mysqli_connect_errno() comprueba si la conexión da algún tipo de error.
    //si existe algún error nos salimos de la conexión con exit()
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
 
    //4 Con mysqli_select_db podemos seleccionar el nombre de la BBDD que queramos, si existe algún error, con die() cerramos la conexión e indicamos el error.
    mysqli_select_db($connection, $db_nombre) or die("No se encuentra la BBDD");
    //5 Completar y comentar
    mysqli_set_charset($connection, "utf8");
    echo "<br>Ha seleccionado DB";

    /*6 Guardamos en una variable la sentencia SQL para extraer de la BBDD todos los registros de todos los campos de la tabla datospersonales*/
    //NOTA: * se encarga de recoger todos los campos de la tabla.
    //Con la clausula WHERE podemos hacer un filtrado de los elmentos, en este caso solo se mostrarán aquellos que su sección coincida con ferreteria.
    $query = "SELECT * FROM productos WHERE seccion LIKE 'ALTA %'";
   

    //7 Con la función mysqli_query y pasándole como argumentos la conexión y la consulta, generamos una tabla virtual en memoria (recordset o resultset) con todos los campos y registros.
    $results = mysqli_query($connection, $query);
    
     //8 Para mostrar todas las filas, podemos utilizar un blucle while y mientras exista otra fila seguirá mostrando más filas de la tabla.
    //Usamos una tabla para enmarcar el contenido
    //NOTA: Utilizamos mysqli_fetch_array y MYSQLI_ASSOC para que la fila que nos devuelva sea un array asocitivo en lugar de uno indexado y así poder accder a los campos por su nombre de la columna de una manera más intuitiva.
    //MYSQLI_NUM se comportaría como una indexado y MYSQLI_BOTH como cualquiera de los dos.
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        echo "<table><tr><td>";
        echo $row['codigoarticulo'] . "</td><td>";
        echo $row['seccion'] . "</td><td>";
        echo $row['nombrearticulo'] . "</td><td>";
        echo $row['precio'] . "</td><td></tr></table>";

        echo "<br>";
        echo "<br>";
    }

    //9 Con mysqli_close cerramos la conexión con la BBDD.
    mysqli_close($connection);

    //NOTA: mysql_connect, mysql_querysinY  mysql_fetch_row sin las i, están deprecadas.
   ?>

</body>

</html>
