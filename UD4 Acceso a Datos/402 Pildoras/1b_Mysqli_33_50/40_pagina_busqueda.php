<?php
/*
    Información/título video: PHP/MySql. Página de búsqueda II. Vídeo 40
    Enlace a video:  https://www.youtube.com/watch?v=_3t4NDUQYZU
    Finalidad ejercicio:  
    Alumno: Juan Maria Castillo Gimenez

    FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  
    mysqli_fetch_array
    buscar
    LIKE '%$busqueda%'
    $_GET
    $resultados

    */


    //1 Completar y comentar
    $busqueda=$_GET["buscar"];
    
    echo "<br>paso 1 BUSCA $busqueda";

    //2 Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
    require("../datos_conexion.php");

    //3 Función de php para conectarse a phpMyadmin aportado los anteriores datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    //4 Si algun dato no es correcto y se imprime Fallo al conectar cuando se produce un error al intentar conectarse.
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //5 Control de errores en el cual Imprime una frase en caso de encontrar la BBDD que se indica con la variable $db_nombre
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //6 Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
    mysqli_set_charset ($conexion, "utf8");

    //7 Completar y comentar
    //Completar y comentar

    $consulta="SELECT * FROM PRODUCTOS WHERE nombrearticulo LIKE '%$busqueda%'";
    echo "<br>PASO 2 La consulta es.. $consulta";

    //Función de php para ejecutar la consulta en la BBDD.
    $resultados=mysqli_query($conexion, $consulta);

    //Metodo para recorrer todas las tuplas que se han consultado a la tabla anteriormente.
    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        
        echo "<table><tr><td>";

        echo $fila['codigoarticulo'] . "</td><td>";       
        echo $fila['nombrearticulo'] . "</td><td>";   
        echo $fila['codigoarticulo'] . "</td><td>";       
        echo $fila['seccion'] . "</td><td>";   
        echo $fila['importado'] . "</td><td>";       
        echo $fila['precio'] . "</td><td>";   
        echo $fila['paisdeorigen'] . "</td><td></tr></table>";        
        echo "<br/>";

    }


    //Función para cerrar la conexión creada anteriormente con phpMyadmin
    mysqli_close($conexion);


       
?>