<?php
/*
    Información:  Curso PHP MySQL. Conexión a BBDD con POO. Vídeo 51
    Enlace a video: https://www.youtube.com/watch?v=I8XYcl9-i5A    
    Finalidad ejercicio:  Crear conexión Mysqli y búsqueda en tabla productos
    Alumno: Juan Maria Castillo Gimenez
*/
?>
<?php
    //1 Esta variable recoge el valor de la busqueda pero en este apartado no nos sirve.
    $busqueda=$_GET["buscar"];

    //2 Incluimos el archivo de datos de conexion
    require("../datos_conexion.php");

    //3 Conexión a la BBDD dwes
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    //$conexion =  new mysqli("localhost", "root","","dwes");

    //4 Comprobación de la conexión
    if ($conexion -> connect_errno) 
        echo "Fallo al conectar con la BBDD " . $conexion -> connect_errno;
    
    //5 Establecer formato de caracteres para la conexión
    $conexion -> set_charset("utf8");

    //6 Consulta SQL para seleccionar todos los productos de la tabla productos.
    $sql="SELECT * FROM PRODUCTOS";

    //7 Funcion de PHP POO mysqli para ejecutar la consulta en la BBDD.
    $resultados = $conexion -> query($sql);

    //8 Comprobación de la consulta
    if ($conexion -> errno) {
        die($conexion -> errno);
    }

    //9 Bucle para imprimir los datos de la consulta
    while($fila=$resultados->fetch_assoc()){
        
        echo "<table><tr><td>";
        echo $fila['codigoarticulo'] . "</td><td>";       
        echo $fila['nombrearticulo'] . "</td><td>";   
        echo $fila['seccion'] . "</td><td>";   
        echo $fila['importado'] . "</td><td>";       
        echo $fila['precio'] . "</td><td>";   
        echo $fila['paisdeorigen'] . "</td><td></tr></table>";        
        echo "<br/>";

    }

    //Otra manera de imprimir estos datos
    //10 Bucle para imprimir los datos de la consulta
    /* while($fila=$resultados->fetch_array()){
        
        echo "<table><tr><td>";
        echo $fila['0'] . "</td><td>";       
        echo $fila['1'] . "</td><td>";   
        echo $fila['2'] . "</td><td>";   
        echo $fila['3'] . "</td><td>";       
        echo $fila['4'] . "</td><td>";   
        echo $fila['5'] . "</td><td></tr></table>";        
        echo "<br/>";

    } */

    //11 Cerramos la conexión
    $conexion -> close();  
?>