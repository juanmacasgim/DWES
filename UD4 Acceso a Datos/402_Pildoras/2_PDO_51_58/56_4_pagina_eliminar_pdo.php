<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Insertar y eliminar registros en BBDD. Vídeo 56
    Enlace a video:    https://www.youtube.com/watch?v=rKUbNFgjI8Y
    Finalidad ejercicio:  Eliminar con PDO
    Alumno: Juan María Castillo Giménez
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar con PDO</title>
</head>

<body>

<?php
//Todos los atributos de la base de datos con los cuales buscaremos coincidencias.
$busqueda_cart = $_POST["c_art"];
try {
    //1 Conexión a la BBDD dwes a través de PDO.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //2 Establece el atributo de la conexión a PDO para que muestre los errores.
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //3 Especificamos el juego de caracteres.
    $base -> exec("SET CHARACTER SET utf8");

    //4 Consulta SQL para eliminar un registro en la tabla productos.
    $sql = "DELETE FROM PRODUCTOS WHERE codigoarticulo = :c_art";

    //5 Prepara la consulta y nos devuelve un objeto de tipo PDOStatement.
    $resultado = $base -> prepare($sql);

    //6 Ejecutamos el objeto PDOStatement y le pasamos por parámetro un array con los valores de los marcadores.
    $resultado -> execute(array(":c_art"=>$busqueda_cart));

    echo "Registro $busqueda_cart ELIMINADO";

    //7 Cierra el cursor.
    $resultado->closeCursor();

} catch (Exception $e) {
    //8 En caso de error, muestra el mensaje
    die('Error: ' . $e->GetMessage());

}finally{
    $base = null;
}
?>
</body>

</html>