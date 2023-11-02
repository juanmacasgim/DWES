<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  Olvidos, ruegos, dudas y preguntas. Vídeo 55
    Enlace a video:   https://youtu.be/cVmR1o573fA 
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

//1 COMENTAR
$busqueda_sec = $_POST["seccion"];
$busqueda_porig = $_POST["p_origen"];


try {
    //2 COMENTAR
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');

    //3 COMENTAR
    //$base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    //4 COMENTAR
    $base -> exec("SET CHARACTER SET utf8");

    //5 COMENTAR   
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productosss WHERE seccion = :SECC AND paisdeorigen = :PORIG";

    //6 COMENTAR
    $resultado = $base -> prepare($sql);

    //7 COMENTAR
    $resultado -> execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig));

    //8 COMENTAR Y MODIFICAR UN POCO EL ECHO, mostrar título...
    while($registro = $resultado ->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] ." seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] ." Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //9 COMENTAR
    $resultado->closeCursor();

} catch (Exception $e) {
    //10 COMENTAR y añadir getCode, getLine... TESTEAR ERROR
    die('Error: ' . $e->GetMessage());
    die('Código del error: '  FALTACOMPLETAR
    die('Código del error: '  FALTACOMPLETAR


}finally{

    $base = null;
}

?>
</body>

</html>