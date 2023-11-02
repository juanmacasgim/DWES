<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205_control</title>
</head>

<body>
    <form method="get">
        <div style="display: flex;">
            <label style="width: 20%;">
                Nombre:
            </label>
            <input type="text" name="nombre"><br>
        </div>
        <div style="display: flex;">
            <label style="width: 20%;">
                Genero:
            </label>
            <select name="genero" id="genero">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                <option value="3">Indefinido</option>
            </select>
        </div>
        <div style="display: flex;">
            <label style="width: 20%;">
                Edad:
            </label>
            <input type="number" name="edad"><br>
        </div>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $nombre = $_GET['nombre'];
    $genero = $_GET['genero'];
    $edad = $_GET['edad'];
    ?>

    <h2> if,elseif, else</h2>
    <?php
    global $nombre;
    global $edad;
    if ($nombre == 'admin') {
        echo "Hola de nuevo señor Stark";
    } else if ($nombre != null) {
        echo "Bienvenido/a ", $nombre;
    } else {
        echo "Nombre no introducido";
    }
    ?>

    <h2> switch</h2>
    <?php
    global $genero;
    switch ($genero) {
        case 1:
            echo "Has seleccionado Masculino.";
            break;
        case 2:
            echo "Has seleccionado Femenino.";
            break;
        case 3:
            echo "Has seleccionado Indefinido.";
            break;
        default:
            echo "Selección no válida.";
    }
    ?>


    <h2> while/dowhile/for</h2>
    <?php

    ?>

</body>

</html>