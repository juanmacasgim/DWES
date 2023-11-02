<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Marcadores en consultas preparadas. Vídeo 54
    Enlace a video:    https://www.youtube.com/watch?v=93o1Nx8Qmj0
    Finalidad ejercicio:  
    Alumno:
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

//Dos de los atributos de la base de datos con los cuales buscaremos coincidencias.
$busqueda_sec = $_GET["seccion"];
$busqueda_porig = $_GET["p_origen"];


try {
    //1 Metodo /funcion para conectar mediante pdo con la base de datos de mysql imprimiendo si se ha realizado corectamente o ha fallado.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //2 Añadimos los atributos con los cuales controlaremos las excepciones lanzadas por nuestro código.
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //3 funcion para establecer el tipo de caracteres a utilizar.
    $base -> exec("SET CHARACTER SET utf8");

    // 3 COMPLETAR Y COMENTAR
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productos WHERE seccion = FALTACOMPLETAR AND paisdeorigen = FALTACOMPLETAR";

    //4 El resultado de la sentencia sql lo vinculamos a la variable $resultado.
    $resultado = $base -> prepare($sql);

    //5 COMPLETAR Y COMENTAR
    $resultado -> execute(array(FALTACOMPLETAR, FALTACOMPLETAR));

    //6 COMPLETAR Y COMENTAR
    while($registro = $resultado ->fetch(FALTACOMPLETAR)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] ." seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] ." Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //7 Se cierra la tabla a la que hemos accedido para ahorra recursos que no se volveran a usar mejorando el rendimiendo de la manquina.
    $resultado->closeCursor();

} catch (Exception $e) {
    //8 Mostrar error cerrando el hilo de procesamiento de la conexion con pdo a la base de datos
    die('Error: ' . $e->GetMessage());
    
}finally{

    $base = null;
}

?>
</body>

</html>