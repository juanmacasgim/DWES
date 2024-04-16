<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  Olvidos, ruegos, dudas y preguntas. Vídeo 55
    Enlace a video:   https://youtu.be/cVmR1o573fA 
    Finalidad ejercicio: Responder dudas
    Alumno: Juan María Castillo Giménez
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

//1 Recogemos los valores del formulario
$busqueda_sec = $_POST["seccion"];
$busqueda_porig = $_POST["p_origen"];


try {
    //2 Conexión a la BBDD dwes a través de PDO.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //3 Establece el atributo de la conexión a PDO para que muestre los errores.
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    //4 Especificamos el juego de caracteres
    $base -> exec("SET CHARACTER SET utf8");

    //5 Consulta SQL con marcadores para la sección y el país de origen.  
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productosss WHERE seccion = :SECC AND paisdeorigen = :PORIG";

    //6 Prepara la consulta y nos devuelve un objeto de tipo PDOStatement
    $resultado = $base -> prepare($sql);

    //7 Ejecutamos el objeto PDOStatement y le pasamos por parámetro un array con los valores de los marcadores.
    $resultado -> execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));

    //8 Recorremos el objeto PDOStatement con un bucle while
    while($registro = $resultado ->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] ." seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] ." Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //9 Cierra el cursor
    $resultado->closeCursor();

} catch (Exception $e) {
    //10 COMENTAR y añadir getCode, getLine... TESTEAR ERROR
    echo "<h2> GetMessage() </h2>";
    echo $e->GetMessage();
    //die('Error: ' . $e->GetMessage());

    echo "<h2> getCode() </h2>";
    echo $e->getCode();
    //die('Código del error: '  $e->getCode());

    echo "<h2> getLine() </h2>";
    echo $e->getLine();
    //die('Código del error: '  $e->getLine());


}finally{

    $base = null;
}

?>
</body>

</html>