<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Marcadores en consultas preparadas. Vídeo 54
    Enlace a video:    https://www.youtube.com/watch?v=93o1Nx8Qmj0
    Finalidad ejercicio: Usar marcadores en consultas preparadas
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
//Recogemos los valores del formulario
$busqueda_sec = $_GET["seccion"];
$busqueda_porig = $_GET["p_origen"];

try {
    //1 Conexión a la BBDD dwes a través de PDO.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //2 Establece el atributo de la conexión a PDO para que muestre los errores.
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //3 Especificamos el juego de caracteres
    $base -> exec("SET CHARACTER SET utf8");

    //4 Consulta SQL con marcadores para la sección y el país de origen.
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productos WHERE seccion = :SECC AND paisdeorigen = :PORIG";

    //5 Prepara la consulta y nos devuelve un objeto de tipo PDOStatement
    $resultado = $base -> prepare($sql);

    //6 Ejecutamos el objeto PDOStatement y le pasamos por parámetro un array con los valores de los marcadores.
    $resultado -> execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));

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