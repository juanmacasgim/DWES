<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>52 Conexión PDO</title>
</head>
<?php
/*
    Información:  PDO Conexión a BBDD. Vídeo 52
    Enlace a video:    https://www.youtube.com/watch?v=uDNfxOoLzSI 
    Finalidad ejercicio:  Conectar con PDO y hacer prueba OK
    Alumno: Juan Maria Castillo Gimenez
*/
?>
<body>
    
<?php
try {
    //1 COMENTAR Y COMPLETAR

    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    echo 'Conexión OK';

} catch (Exception $e) {
    //2 COMENTAR Y COMPLETAR
    die('Error: ' . $e->GetMessage());
    
}finally{

    $base = null;
}

?>
</body>
</html>