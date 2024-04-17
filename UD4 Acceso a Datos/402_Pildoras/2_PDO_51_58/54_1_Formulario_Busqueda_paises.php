<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Marcadores en consultas preparadas. Vídeo 54
    Enlace a video:    https://www.youtube.com/watch?v=93o1Nx8Qmj0
    Finalidad ejercicio:  Usar marcadores en consultas preparadas
    Alumno: Juan María Castillo Giménez
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario BBDD</title>
    <style>
    table {
        width: 300px;
        margin: auto;
        background-color: #FFC;
        border: 2px solid #F00;
        padding: 5px;
    }

    td {
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- Creación de formulario para busqueda de articulos en BBDD -->
    <!-- Cuenta con un input para introducir el nombre del articulo y un boton para enviar el nombre y mostrar todas las coincidencias posibles. -->
    <form action="54_2_conexion_pdo.php" method="get">
        <table>
            <tr>
                <td> seccion: </td>
                <td><input type="text" name="seccion"></td>
            </tr>
            <tr>
                <td> P origen: </td>
                <td> <input type="text" name="p_origen"></td>
            </tr>
        </table>
        <input  type="submit" name="enviando" value="Dale!">

    </form>

</body>

</html>