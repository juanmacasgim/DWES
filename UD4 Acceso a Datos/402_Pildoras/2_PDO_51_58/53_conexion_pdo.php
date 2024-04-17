<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  Curso PHP MySQL. PDO Consultas preparadas. Vídeo 53
    Enlace a video:  https://www.youtube.com/watch?v=r-TibX-mxtM   
    Finalidad ejercicio:  Consultas preparadas
    Alumno: Juan Maria Castillo Giménez
    SOLUCIÓN está en las diapositivas.
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>53 Consultas preparadas PDO</title>
</head>
<body>
    
<?php
$busqueda = $_GET["buscar"];
try {
    //1 Conexión a la BBDD dwes a través de PDO.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //2 Establece el atributo de la conexión a PDO para que muestre los errores.
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //3 Especificamos el juego de caracteres
    $base -> exec("SET CHARACTER SET utf8");

    //4 Generamos la consulta
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productos WHERE nombrearticulo = ?";

    //5 Prepara la consulta y nos devuelve un objeto de tipo PDOStatement
    $resultado = $base -> prepare($sql);

    //6 Ejecutamos el objeto PDOStatement y le pasamos por parámetro un array
    $resultado -> execute(array($busqueda));

    //7 Recorremos el objeto PDOStatement con un bucle while
    while($registro = $resultado ->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] .
        " seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] .
        " Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //8 Cierra el cursor
    $resultado->closeCursor();
} catch (Exception $e) {
    //9 En caso de error, muestra el mensaje
    die('Error: ' . $e->GetMessage());
    
}finally{
    $base = null;
}
?>
</body>
</html>