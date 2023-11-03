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
    <title>Formulario de inseccion de datos</title>
    <style>
    h1 {
        text-align: center;
        color: #00F;
        border-bottom: dotted #0000FF;
        width: 50%;

    }

    table {
        border: 1px solid #F00;
        padding: 20px 50px;
        margin-top: 50px
    }

    body {
        display: flex;
        background-color: #FFC;
        flex-direction: column;
        align-content: center;
        align-items: center;
    }
    </style>

</head>

<body>
    <!-- HTML con estilizada para la inseccion de nuevos productos a la base de datos. Cuenta con todos los campos que componen a un nuevo objeto almacenado. A parte de esto cuenta con dos botones uno para enviar como otro para resetear el formulario. -->
    <h1>Alta de Artículos nuevos</h1>
    <form name="form1" method="post" action="56_2_pagina_insertar_pdo.php">
        <table boder="0" align-items="center">
            <tr>
                <td>Código Artículo</td>
                <td><label for="c_art"></label>
                    <input type="text" name="c_art" id="c_art">
                </td>
            </tr>
            <tr>
                <td>Seccción</t>
                <td><label for="seccion"></label>
                    <input type="text" name="seccion" id="seccion">
                </td>
            </tr>
            <tr>
                <td>Nombre artículo</ta>
                <td><label for="n_art"></label>
                    <input type="text" name="n_art" id="n_art">
                </td>
            </tr>
            <tr>
                <td>precio</ta>
                <td><label for="precio"></label>
                    <input type="text" name="precio" id="precio">
                </td>
            </tr>
            <tr>
                <td>fecha</td>
                <td><label for="fecha"></label>
                    <input type="text" name="fecha" id="fecha">
                </td>
            </tr>
            <tr>
                <td>importado</td>
                <td><label for="importado"></label>
                    <input type="text" name="importado" id="importado">
                </td>
            </tr>
            <tr>
                <td>País de Origen</td>
                <td><label for="p_origen"></label>
                    <input type="text" name="p_origen" id="p_origen">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" id="enviar" value="Insertar"></td>
                <td><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>

</body>

</html>