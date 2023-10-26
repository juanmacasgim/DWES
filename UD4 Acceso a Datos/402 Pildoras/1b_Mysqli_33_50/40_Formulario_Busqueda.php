<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario BBDD</title>
</head>
<?php
/*
     Información/título video: PHP/MySql. Página de búsqueda II. Vídeo 40
    Enlace a video:  https://www.youtube.com/watch?v=_3t4NDUQYZU
    Finalidad ejercicio: Buscar un artículo en un formulario y obtener la búsqueda
    Alumno: Juan Maria Castillo Giménez

    FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  
    40_pagina_busqueda
    buscar
    text
    get


*/
?>
<body>
    <!-- Creación de formulario para busqueda de articulos en BBDD -->
    <!-- Cuenta con un input para introducir el nombre del articulo y un boton para enviar el nombre y mostrar todas las coincidencias posibles. -->
    <form action="40_pagina_busqueda.php" method="get">

        <label>Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviando" value="Dale!">
        
    </form>
    
</body>
</html>