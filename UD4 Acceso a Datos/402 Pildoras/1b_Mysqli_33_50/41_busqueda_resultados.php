<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la consulta</title>
    
    <?php
/*
    Información: PHP/MySql. PHP/MySql. Página de búsqueda III. Vídeo 41
    Enlace a video: 
    https://www.youtube.com/watch?v=kb9aIrCiyE4
    Finalidad ejercicio:  
    Alumno: 

       FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  
        mysqli_select_db
        '%$labusqueda%'
        MYSQLI_ASSOC
       ejecuta_consulta
       mysqli_close
       $_SERVER["PHP_SELF"]
       $_GET["buscar"]
       $mipag
*/
?>

<?php


    //1 Completar y comentar
    function ejecuta_consulta($labusqueda){

        //2 Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
        require("../datos_conexion.php");
        echo "<h3> Entra en ejecutar consulta </h3>";

        //3 Función de php para conectarse aportado los anteriores datos.
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

        //7 Consulta a ejecutar en la BBDD dwes.(Como se puede ver se consultan todas las columnas de la tabla DATOSPERSONALES). En este caso solo devuelve las tuplas que el pais de origen se ESPAÑA. Utiliza el porcentaje para indicar que $busqueda se encuentre dentro del nombre del articulo.
        $consulta="SELECT * FROM PRODUCTOS WHERE nombrearticulo LIKE '%$labusqueda%' ";

        //8 Función de php para ejecutar la consulta en la BBDD.
        $resultados=mysqli_query($conexion, $consulta);

        //9 Metodo para recorrer todas las tuplas que se han consultado a la tabla anteriormente.
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


        //10 Función para cerrar la conexión creada anteriormente con phpMyadmin
        mysqli_close($conexion);

    }
       
?>
</head>
<body>

    <?php
        //11 Completar y comentar
        $mibusqueda= $_GET["buscar"] ; //saldrá un error pero solamente en local

        //12 Completar y comentar
        $mipag=$_SERVER["PHP_SELF"] ;

        //Condicion en la cual si el valor a buscar no es nulo se buscara. en caso de que sea nulo se mostrara de nuevo el formulario.
        if ($mibusqueda!=null) {
            ejecuta_consulta($mibusqueda);
        }else{
            
            echo ("<form action='" . $mipag . "' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>");
        }

    ?>
 
</body>
</html>