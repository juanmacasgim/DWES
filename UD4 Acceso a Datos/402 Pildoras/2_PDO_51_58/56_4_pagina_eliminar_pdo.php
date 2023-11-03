<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Insertar y eliminar registros en BBDD. Vídeo 56
    Enlace a video:    https://www.youtube.com/watch?v=rKUbNFgjI8Y
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

//Todos los atributos de la base de datos con los cuales buscaremos coincidencias.
$busqueda_cart = $_POST["c_art"];


try {
    //Metodo /funcion para conectar mediante pdo con la base de datos de mysql imprimiendo si se ha realizado corectamente o ha fallado.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

     $sql = "DELETE FROM PRODUCTOS WHERE codigoarticulo = :c_art";

    //El resultado de la sentencia sql lo vinculamos a la variable $resultado.
    $resultado = $base -> prepare($sql);

    $resultado -> execute(array(":c_art"=>$busqueda_cart));

    echo "Registro $busqueda_cart ELIMINADO";

    //Se cierra la tabla a la que hemos accedido para ahorra recursos que no se volveran a usar mejorando el rendimiendo de la manquina.
    $resultado->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->GetMessage());

}finally{

    $base = null;
}

?>
</body>

</html>