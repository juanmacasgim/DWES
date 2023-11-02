<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  Curso PHP MySQL. PDO Consultas preparadas. Vídeo 53
    Enlace a video:  https://www.youtube.com/watch?v=r-TibX-mxtM   
    Finalidad ejercicio:  
    Alumno:
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
    //1 COMPLETAR Y COMENTAR
    $base = new FALTACOMPLETAR;

    //2 COMPLETAR Y COMENTAR
    $base -> FALTACOMPLETAR;
    
    //3 COMPLETAR Y COMENTAR
    $base -> exec("FALTACOMPLETAR");

    //4 COMPLETAR Y COMENTAR
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productos WHERE nombrearticulo = FALTACOMPLETAR";

    //5 COMPLETAR Y COMENTAR
    $resultado = $base -> FALTACOMPLETAR;

    //6 COMPLETAR Y COMENTAR
    $resultado -> execute(FALTACOMPLETAR);

    //7 COMPLETAR Y COMENTAR
    while($registro = $resultado ->fetch(FALTACOMPLETAR)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] .
        " seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] .
        " Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //8 COMPLETAR Y COMENTAR
    $resultado FALTACOMPLETAR;

} catch (Exception $e) {
    //9 COMPLETAR Y COMENTAR
    die('Error: ' . $e->GetMessage());
    
}finally{

    $base = null;
}

?>
</body>
</html>