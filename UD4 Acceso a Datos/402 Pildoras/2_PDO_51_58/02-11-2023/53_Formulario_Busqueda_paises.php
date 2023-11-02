<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  
    Enlace a video:    
    Finalidad ejercicio:  
    Alumno:
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario BBDD</title>
</head>
<body>
    <!-- Creación de formulario para busqueda de articulos en BBDD -->
    <!-- Cuenta con un input para introducir el nombre del articulo y un boton para enviar el nombre y mostrar todas las coincidencias posibles. -->
    <form action="53_conexion_pdo.php" method="get">

        <label>Buscar: <input type="text" name="buscar"></label>

        <input type="submit" name="enviando" value="Dale!">
        
    </form>
    
</body>
</html>