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
$busqueda_seccion = $_POST["seccion"];
$busqueda_nart = $_POST["n_art"];
$busqueda_precio = $_POST["precio"];
$busqueda_fecha = $_POST["fecha"];
$busqueda_importado = $_POST["importado"];
$busqueda_porig = $_POST["p_origen"];


try {
    //COMPLETAR
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

    $sql = "INSERT INTO PRODUCTOS (codigoarticulo, seccion, nombrearticulo, precio, fecha, importado, paisdeorigen) VALUES (:c_art,:seccion,:n_art,:precio,:fecha,:importado,:p_orig)";

 
    $resultado = $base -> prepare($sql);

    
    $resultado -> execute(array(":c_art"=>$busqueda_cart, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart,":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig));

    
    echo "Registro Insertado";

    //
    $resultado->closeCursor();

} catch (Exception $e) {

    die('Error: ' . $e->GetMessage());


}finally{

    $base = null;
}

?>
</body>

</html>